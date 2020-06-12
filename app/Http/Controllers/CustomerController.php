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
        'gender' => $customer->gender,
        'height_size' => $customer->height_size,
        'height_unit' => $customer->height_unit,
        'age_range' => $customer->age_range,
        'capsule_date' => $customer->capsule_date,
        'location' => $customer->location,
        'ship_type' => $customer->ship_type,
        'street_address' => $customer->street_address,
        'city' => $customer->city,
        'state' => $customer->state,
        'zip_code' => $customer->zip_code,
        'events' => $customer->events,
        'progress' => $customer->progress
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
        $customer->gender = $gender;
        $customer->height_size = $request->input('height_size');
        $customer->height_unit = $request->input('height_unit');
        $customer->age_range = $request->input('age_range');
        $date = $request->input('capsule_date');
        if($date == null){
          $customer->capsule_date = null;
        }else{
          $customer->capsule_date = date_create_from_format("m/d/Y",$date);
        }
        
        $customer->location = $request->input('location');
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
              'body_type' => $customer->body_type,
              'casual_shirt_size' => $customer->casual_shirt_size,
              'casual_fit' => $customer->casual_fit,
              'pant_waist_fit' => $customer->pant_waist_fit,
              'pant_fit' => $customer->pant_fit,
              'shoe_size' => $customer->shoe_size,
              'dress_shirt_size' => $customer->dress_shirt_size,
              'dress_shirt_collar_fit' => $customer->dress_shirt_collar_fit,
              'dress_shirt_shoulder_fit' => $customer->dress_shirt_shoulder_fit,
              'waist_size' => $customer->waist_size,
              'shorts_length' => $customer->shorts_length,
              'progress' => $customer->progress
            ]);
        }
        return view('com.customer.signup.sizing-women', [
            'body_type' => $customer->body_type,
            'casual_shirt_size' => $customer->casual_shirt_size,
            'casual_fit' => $customer->casual_fit,
            'pant_waist_fit' => $customer->pant_waist_fit,
            'pant_fit' => $customer->pant_fit,
            'shoe_size' => $customer->shoe_size,
            'buttonup_blouse_size' => $customer->buttonup_blouse_size,
            'buttonup_blouse_fit' => $customer->buttonup_blouse_fit,
            'bra_size' => $customer->bra_size,
            'bra_cup' => $customer->bra_cup,
            'pant_rise' => $customer->pant_rise,
            'pant_size' => $customer->pant_size,
            'skirt_size' => $customer->skirt_size,
            'dress_style' => $customer->dress_style,
            'progress' => $customer->progress
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
        $customer->body_type = $request->input('body_type');
        $customer->casual_shirt_size = $request->input('casual_shirt_size');
        $customer->pant_waist_fit = $request->input('pant_waist_fit');
        $customer->pant_fit = $request->input('pant_fit');
        $customer->shoe_size = $request->input('shoe_size');
        if($customer->gender == "male"){
            $customer->dress_shirt_size = $request->input('dress_shirt_size');
            $customer->dress_shirt_collar_fit = $request->input('dress_shirt_collar_fit');
            $customer->dress_shirt_shoulder_fit = $request->input('dress_shirt_shoulder_fit');
            $customer->waist_size = $request->input('waist_size');
            $customer->shorts_length = $request->input('shorts_length');
            $customer->save();
            return redirect()->route('customer.signup.style');
        }

        $customer->casual_fit = $request->input('casual_fit');
        $customer->buttonup_blouse_size = $request->input('buttonup_blouse_size');
        $customer->buttonup_blouse_fit = $request->input('buttonup_blouse_fit');
        $customer->bra_size = $request->input('bra_size');
        $customer->bra_cup = $request->input('bra_cup');
        $customer->pant_rise = $request->input('pant_rise');
        $customer->pant_size = $request->input('pant-size');
        $customer->skirt_size = $request->input('skirt_size');
        $customer->dress_style = $request->input('dress_style');
        $customer->complete = 2;
        $customer->save();
        return redirect()->route('customer.signup.style');
    }

    public function style(Request $request)
    {
        $customer = Customer::where('user_id', auth()->user()->id)->first();
        if($customer->gender == "male"){
            return view('com.customer.signup.style-men',[
              'style' => $customer->style,
              'dislike_material' => $customer->dislike_material,
              'dislike_pattern' => $customer->dislike_pattern,
              'dislike_color' => $customer->dislike_color,
              'capsule' => $customer->capsule,
              'capsule_spend' => $customer->capsule_spend,
              'instagram' => $customer->instagram,
              'twitter' => $customer->twitter,
              'pinterest' => $customer->pinterest,
              'linkedin' => $customer->linkedin,
              'notes' => $customer->notes,
              'progress' => $customer->progress
          ]);
        }
        return view('com.customer.signup.style-women', [
          'style' => $customer->style,
          'dislike_material' => $customer->dislike_material,
          'dislike_pattern' => $customer->dislike_pattern,
          'dislike_color' => $customer->dislike_color,
          'capsule' => $customer->capsule,
          'capsule_spend' => $customer->capsule_spend,
          'instagram' => $customer->instagram,
          'twitter' => $customer->twitter,
          'pinterest' => $customer->pinterest,
          'linkedin' => $customer->linkedin,
          'notes' => $customer->notes,
          'progress' => $customer->progress
        ]);
    }

    public function saveStyle(Request $request)
    {
        $this->dislike($request);
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
        $customer->style = $style;
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
        if($name ==  "param"){
          $array = $value;
        }else{
          $id = $value;
        }
      }
      if ($array != []){
        foreach ($array as $name => $value){
          $customer->$name = $value;
        }
      }
      if($id){
        $customer->progress = $id;
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
