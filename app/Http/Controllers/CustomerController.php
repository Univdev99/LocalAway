<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;

use App\Upload;
use App\User;
use App\Customer;
use App\CustomerProfile;
use App\Order;
use App\Plan;
use DateTime;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Session\Session;
use App\Mail\sendCustomerContactMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
        View::share('logo', $logo);
    }

    public function preferences()
    {
      $user_id = auth()->user()->id;
      $customer = Customer::where('user_id', $user_id)->first();
      if(!$customer){
        return redirect()->route('customer.signup.basic');
      }
      switch ($customer->capsule_spend) {
        case 'single':
          $budget = "less than $40";
          break;
        case 'one-or-two':
          $budget = "$40 - $60";
          break;
        case 'highger-end':
          $budget = "$70 - $150";
          break;
        case 'highest-end':
          $budget = "$150 - $250";
          break;
        case 'lower-outfit':
          $budget = "$300 - $500";
          break;
        case 'higher-outfit':
          $budget = "$500 - $1500";
          break;
        case 'luxury':
          $budget = "$1500+";
          break;  
        default:
          $budget = "$150 - $250";
          break;
      }
      return view('com.customer.section.preferences', [
        'gender' => $customer->gender,
        'destination' => $customer->street_address,
        'budget' => $budget,
        'notes' => $customer->notes,
        'age' => $customer->age_range,
        'complete' => $customer->complete,
        'customer' => $customer,
        'style' => empty($customer->style) ? [] : explode('|', $customer->style),
        'dislike_color' => empty($customer->dislike_color) ? [] : explode('|', $customer->dislike_color),
        'dislike_material' => empty($customer->dislike_material) ? [] : explode('|', $customer->dislike_material),
        'dislike_pattern' => empty($customer->dislike_pattern) ? [] : explode('|', $customer->dislike_pattern)
      ]);
    }

    public function upcomingboxes()
    {
      $complete = Customer::where('user_id', auth()->user()->id)->first()->complete;
      if($complete == 4){
        return redirect()->route('com.customer.order');
      }
      return view('com.customer.section.upcomingbox', ['complete' => $complete]);
    }

    public function order()
    {
      $orders = Customer::where('user_id', auth()->user()->id)->first()->order;
      $total = 0;
      
      foreach ($orders as $order) {
        $total += $order->price;
      }

      return view('com.customer.section.order', [
        'orders' => $orders,
        'total' => $total
      ]);
    }

    public function orderBox(Request $request)
    {
      
    }

    public function finalizeOrder(Request $request)
    {
        $accept = $request->all();
        foreach ($accept as $key => $value) {
          if (substr($key, 0, strlen("accept-order-")) == "accept-order-") {
            $order_id = substr($key, strlen("accept-order-"));
            $order = Order::find($order_id);
            $order->status = $value == "accept" ? 3 : 4;
            $order->save();
          }
        }
        return redirect()->route('com.customer.order');
    }

    public function shop()
    {
      return view('com.customer.section.shop');
    }

    public function account()
    {
      $user = User::where('id', auth()->user()->id)->first();
      
        return view('com.customer.section.account', [
          'first_name' => $user->first_name,
          'last_name' => $user->last_name,
          'email' => $user->email,
          'pwd' => $user->password,
          'customer_id' => $user->customer->id,
          'profile' => $user->customer->profile
        ]);
    }

    public function saveProfile(Request $request)
    {
      $customer_id = $request->input('customer_id');
      $customer = Customer::find($customer_id);
      $address = $request->all();
      
      $profile = $customer->profile;
      if (is_null($profile)) {
        $profile = new CustomerProfile;
      }
      $profile->customer_id = $customer->id;
      foreach ($address as $key => $value) {
        if ($key !== '_token' && $key !== 'customer_id') {
          $profile->$key = $value;
        }
      }
      $profile->save();
      
      return redirect()->route('com.customer.account');
    }

    public function signup()
    {
      return view('com.customer.signup.account');
    }

    public function saveAccount(Request $request)
    {
        $request->validate([
          'first_name' => ['required', 'string', 'max:255'],
          'last_name' => ['required', 'string', 'max:255'],
          'email' => ['required', 'string', 'email', 'max:255'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $check_user = User::with('customer')->where('email', $email)->first();
        if ($check_user){
          if(Hash::check($password, $check_user->password)){
            auth()->login($check_user);
            return redirect()->route('customer.signup.tracking');
          }else{
            $request->validate([
              'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
          }
        }  

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        
        $phone_number = $request->input('phone_number');
        $receive_alert = $request->input('receive_alert', 'off');
        $email = str_replace(' ', '', $email);

        $user = new User;
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->birthday = '';
        $user->phone_number = $phone_number;
        $user->user_type = 'customer';
        $user->password = Hash::make($password);
        $user->save();

        $customer = new Customer;
        $customer->user_id = $user->id;
        $customer->receive_alert = $receive_alert == "on" ? 1 : 0;
        $customer->save();

        $user = User::with('customer')->where('email', $email)->first();
        auth()->login($user);
        return redirect()->route('customer.signup.basic');
    }

    public function basic(Request $request)
    {
      $customer = Customer::where('user_id', auth()->user()->id)->first();
      $location = null;
      // $location = new Location();
      // $position = $location->get($request->ip());
      // if ($position) {
      //     $location = $position->countryName.", ".$position->cityName;
      // } else {
      //     $location = 'Undefined Country';
      // }
      return view('com.customer.signup.basic', [
        'customer' => $customer
      ]);
    }

    public function saveBasic(Request $request)
    {
        $email = auth()->user()->email;
        $gender = $request->input("gender");
        $user = User::where('email', $email)->first();
        if (!$user || !$user->customer) {
            return response('No registered email', 400);
        }
        $customer = $user->customer;
        
        $ship_type = $request->input('ship_type');
        $customer->ship_type = $ship_type;
        $customer->street_address = $request->input('street_address');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zip_code = $request->input('zip_code');
        $customer->events = $request->input('events');

        if($ship_type == 'hotel')
        {
            $customer->reservation_name = $request->input('reservation_name');
            $customer->hotel_name = $request->input('hotel_name');
            $customer->checkin = date_create_from_format("m/d/Y", $request->input('checkin'));
            $customer->checkout = date_create_from_format("m/d/Y", $request->input('checkout'));
        }else if($ship_type == 'airbnb'){
            $customer->reservation_name = $request->input('reservation_name');
            $customer->checkin = date_create_from_format("m/d/Y", $request->input('checkin'));
            $customer->checkout = date_create_from_format("m/d/Y", $request->input('checkout'));
        }

        $customer->complete = 1;
        $customer->save();

        return redirect()->route('customer.signup.sizing');
    }

    public function sizing(Request $request)
    {
      $customer = Customer::where('user_id', auth()->user()->id)->first();
        if($customer->gender == "male"){
            return view('com.customer.signup.sizing-men', [
              'customer' => $customer
            ]);
        }
        return view('com.customer.signup.sizing-women', [
            'customer' => $customer
        ]);
    }

    public function saveSizing(Request $request)
    {
        $email = auth()->user()->email;
        $user = User::where('email', $email)->first();
        if (!$user || !$user->customer) {
            return redirect()->route('landingPage');
        }
        $customer = $user->customer;
        $customer->shoe_size = $request->input('shoe_size');
        $customer->complete = 2;
        $customer->save();
        return redirect()->route('customer.signup.style');
    }

    public function style(Request $request)
    {
        $customer = Customer::where('user_id', auth()->user()->id)->first();
        if($customer->gender == "male"){
            return view('com.customer.signup.style-men',[
              'customer' => $customer
          ]);
        }
        return view('com.customer.signup.style-women', [
          'customer' => $customer
        ]);
    }

    public function saveStyle(Request $request)
    {
        // $this->dislike($request);
        $this->almostDone($request);
        return redirect()->route('customer.signup.payment');
    }

    public function dislike(Request $request)
    {
      $email = auth()->user()->email;
      $style = $request->input("style");
      $materials = $request->input("dislike_material");
      $patterns = $request->input("dislike_pattern");
      $colors = $request->input("dislike_color");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->style = null;
        $customer->dislike_material = null;
        $customer->dislike_pattern = null;
        $customer->dislike_color = null;
        if ($materials) {
          $customer->dislike_material = implode("|", $materials);
        }

        if ($patterns) {
          $customer->dislike_pattern = implode("|", $patterns);
        }

        if ($colors) {
          $customer->dislike_color = implode("|", $colors);
        }
        $customer->save();
      }
    }

    public function almostDone(Request $request)
    {
      $email = auth()->user()->email;
      $capsule = $request->input("capsule");
      $spend = $request->input("capsule_spend");
      $instagram = $request->input("instagram");
      $twitter = $request->input("twitter");
      $pinterest = $request->input("pinterest");
      $linkedin = $request->input("linkedin");
      $notes = $request->input("notes");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->capsule = $capsule;
        $customer->capsule_spend = $spend;
        $customer->instagram = $instagram;
        $customer->twitter = $twitter;
        $customer->pinterest = $pinterest;
        $customer->linkedin = $linkedin;
        $customer->notes = $notes;
        $customer->complete = 3;
        $customer->save();
      }
    }

    // public function postFinalize(Request $request)
    // {
    //   $email = $request->input("email");
    //   $plan = $request->input("plan");

    //   $user = User::where('email', $email)->first();
    //   if ($user && $user->customer) {
    //     $customer = $user->customer;
    //     $customer->plan = $plan;
    //     $customer->save();
    //   }
    // }

    public function payment(Request $request)
    {
        // $plan = Plan::first();
        $email = auth()->user()->email;
        $user = User::with('customer')->where('email', $email)->first();
        $intent = $user->createSetupIntent();
        return view('com.customer.signup.payment', ['user' => $user, 'intent' => $intent ]);
    }

    public function thankyou(Request $request)
    {
      $customer = Customer::where('user_id', auth()->user()->id)->first();
      $customer->complete = 4;
      $customer->save();
      $order = new Order;
      $order->customer_id = $customer->id;
      $order->name = "LocalAway Discovery Box";
      $date = new DateTime();
      $order->order_id = $date->getTimestamp();
      $order->order_date = date("Y-m-d");
      $order->status = 0;
      $order->price = 19;
      $order->save();
      return view('com.customer.customer-thankyou');
    }

    public function saveRow(Request $request)
    {
      $array = [];
      $id = null;
      $customer = Customer::where('user_id', auth()->user()->id)->first();
      
      foreach ($request->request as $name => $value){
        if ($value == null){
          continue;
        }
        switch ($name) {
          case 'capsule_date':
            $customer->$name = date_create_from_format("m/d/Y",$value);  
            break;
          case 'skirt_size':
          case 'dress_style':
          case 'style':
          case 'dislike_color': 
          case 'dislike_material': 
          case 'dislike_pattern':
            $customer->$name = implode('|', $value);
            break;
          case 'id':
            $customer->progress = $value;
            break;
          default:
            $customer->$name = $value;  
            break;
        }
      }
      
      $customer->save();
    }

    public function profileTracking(Request $request)
    {
      $pos = Customer::where('user_id', auth()->user()->id)->first()->complete;
      switch ($pos) {
        case 0:
          return redirect()->route('customer.signup.basic');
          break;
        case 1:
          return redirect()->route('customer.signup.sizing');
          break;
        case 2:
          return redirect()->route('customer.signup.style');
          break;
        case 3:
          return redirect()->route('customer.signup.payment');
          break;
        case 4:
          return redirect()->route('com.customer.order');
          break;
      }
    }
    
    public function contact()
    {
      $user = User::where('id', auth()->user()->id)->first();
      Mail::to("hello@localaway.com")->send(new sendCustomerContactMail($user->first_name, $user->email));
    }
}
