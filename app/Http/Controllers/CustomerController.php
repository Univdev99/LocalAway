<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Stevebauman\Location\Location;

use App\Upload;
use App\User;
use App\Customer;
use App\Plan;
use Illuminate\Support\Facades\View;

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

    public function upcomingboxes()
    {
        return view('com.customer.section.upcomingbox');
    }

    public function preferences()
    {
      $user_id = auth()->user()->id;
      $customer = Customer::where('user_id', $user_id)->first();
      if(!$customer){
        return redirect()->route('customer.signup.basic');
      }
      return view('com.customer.section.preferences', [
        'gender' => $customer->gender,
        'destination' => $customer->street_address,
        'notes' => $customer->notes,
        'age' => $customer->age_range
      ]);
    }

    public function account()
    {
        return view('com.customer.section.account');
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
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $password = $request->input('password');
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
      $location = new Location();
      $position = $location->get($request->ip());
      if ($position) {
          $location = $position->countryName.", ".$position->cityName;
      } else {
          $location = 'Undefined Country';
      }
        return view('com.customer.signup.basic', ['location' => $location]);
    }

    public function saveBasic(Request $request)
    {
        $email = auth()->user()->email;
        $gender = $request->input("basic-gender");
        $user = User::where('email', $email)->first();
        if (!$user || !$user->customer) {
            return response('No registered email', 400);
        }
        $customer = $user->customer;
        $customer->gender = $gender;
        $customer->height_feet = $request->input('height-feet');
        $customer->height_inch = $request->input('height-inch');
        $customer->age_range = $request->input('basic-age');
        $date = $request->input('capsule-date');
        $customer->capsule_date = date_create_from_format("m/d/Y",$date);
        $customer->location = $request->input('basic-location');
        $ship_type = $request->input('basic-ship');
        $customer->ship_type = $ship_type;
        $customer->street_address = $request->input('street-address');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zip_code = $request->input('zip-code');
        $customer->events = $request->input('basic-event');

        if($ship_type == 'hotel')
        {
            $customer->reservation_name = $request->input('reservation-name');
            $customer->hotel_name = $request->input('hotel-name');
            $customer->checkin = date_create_from_format("m/d/Y", $request->input('check-in'));
            $customer->checkout = date_create_from_format("m/d/Y", $request->input('check-out'));
        }else if($ship_type == 'airbnb'){
            $customer->reservation_name = $request->input('reservation-name');
            $customer->checkin = date_create_from_format("m/d/Y", $request->input('check-in'));
            $customer->checkout = date_create_from_format("m/d/Y", $request->input('check-out'));
        }

        $customer->save();

        return redirect()->route('customer.signup.sizing');
    }

    public function sizing(Request $request)
    {
      $customer = Customer::where('user_id', auth()->user()->id)->first();
        if($customer->gender == "male"){
            return view('com.customer.signup.sizing-men');
        }
        return view('com.customer.signup.sizing-women');
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
        $customer->casual_shirt_size = $request->input('casual-size');
        $customer->pant_waist_fit = $request->input('pant-waist-fit');
        $customer->pant_fit = $request->input('pant-fit');
        $customer->shoe_size = $request->input('shoe-size');
        if($customer->gender == "male"){
            $customer->dress_shirt_size = $request->input('dress-shirt-size');
            $customer->dress_shirt_collar_fit = $request->input('dress-shirt-collar-fit');
            $customer->dress_shirt_shoulder_fit = $request->input('dress-shirt-shoulder-fit');
            $customer->waist_size = $request->input('waist-size');
            $customer->shorts_length = $request->input('shorts-length');
            $customer->save();
            return redirect()->route('customer.signup.style');
        }

        $customer->casual_fit = $request->input('casual-fit');
        $customer->buttonup_blouse_size = $request->input('blouse-size');
        $customer->buttonup_blouse_fit = $request->input('blouse-fit');
        $customer->bra_size = $request->input('women-bra');
        $customer->bra_cup = $request->input('women-cup');
        $customer->pant_rise = $request->input('pant-rise');
        $customer->pant_size = $request->input('pant-size');
        $customer->skirt_size = $request->input('women-short');
        $customer->dress_style = $request->input('women-dress');
        $customer->save();
        return redirect()->route('customer.signup.style');
    }

    public function style(Request $request)
    {
        $customer = Customer::where('user_id', auth()->user()->id)->first();
        if($customer->gender == "male"){
            return view('com.customer.signup.style-men');
        }
        return view('com.customer.signup.style-women');
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
      $materials = $request->input("dislike-casual");
      $patterns = $request->input("dislike-pattern");
      $colors = $request->input("dislike-color");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->style = $style;
        if ($materials) {
          $customer->dislike_material = implode(",", $materials);
        }

        if ($patterns) {
          $customer->dislike_pattern = implode(",", $patterns);
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
      $spend = $request->input("spend");
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
      return view('com.customer.customer-thankyou');
    }
}
