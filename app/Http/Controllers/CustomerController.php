<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Upload;
use App\User;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function firstTimeFlow()
    {
      $logo = Upload::where('collection' ,'logo')->where('extra',1)->first();
      return view('customer.first-time.index', [
        'logo' => $logo
      ]);
    }

    public function signup()
    {
      return view('customer.signup.index');
    }

    public function postSignup(Request $request)
    {
      $first_name = $request->input('first_name');
      $last_name = $request->input('last_name');
      $email = $request->input('email');
      $birthday = $request->input('birthday');
      $phone_number = $request->input('phone_number');
      $password = $request->input('password');
      $receive_alert = $request->input('receive_alert', 'off');
      $hear_us = $request->input('hear_us');
      $email = str_replace(' ', '', $email);

      $duplicate = User::where('email', $email)->first();
      if ($duplicate) {
        return response('duplicated email', 400);
      }

      $user = new User;
      $user->first_name = $first_name;
      $user->last_name = $last_name;
      $user->email = $email;
      $user->birthday = $birthday;
      $user->phone_number = $phone_number;
      $user->user_type = 'customer';
      $user->password = Hash::make($password);
      $user->save();

      $customer = new Customer;
      $customer->user_id = $user->id;
      $customer->receive_alert = $receive_alert == "on" ? 1 : 0;
      $customer->hear_us = $hear_us;
      $customer->save();
    }

    public function postGeneral(Request $request)
    {
      $email = $request->input("email");
      $dress = $request->input('dress');
      $gender = $request->input('gender');
      $metric = $request->input('metric');
      $feet = $request->input('height_feet');
      $inch = $request->input('height_inch');

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->dress = $dress;
        $customer->gender = $gender;
        $customer->metric = $metric == 'yes';
        $customer->height_feet = $feet;
        $customer->height_inch = $inch;
        $customer->save();
      }
    }

    public function postMen(Request $request)
    {
      $email = $request->input("email");
      $men_body_type = $request->input("men_body_type");
      $casual_shirts = $request->input("men_casual_shirts");
      $button_up_shirts = $request->input("men_button_up_shirts");
      $waist = $request->input("men_waist");
      $inseams = $request->input("men_inseams");
      $jeans = $request->input("men_jeans");
      $shorts = $request->input("men_shorts");
      $shoe = $request->input("men_shoe");
      $casual_shirts_fit = $request->input("men_casual_shirts_fit");
      $button_up_shirts_fit = $request->input("men_button_up_shirts_fit");
      $shorts_fit = $request->input("men_shorts_fit");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->men_body_type = $men_body_type;
        $customer->casual_shirts = $casual_shirts;
        $customer->button_up_shirts = $button_up_shirts;
        $customer->waist = $waist;
        $customer->inseams = $inseams;
        $customer->jeans = $jeans;
        $customer->shorts = $shorts;
        $customer->shoe = $shoe;
        $customer->casual_shirts_fit = $casual_shirts_fit;
        $customer->button_up_shirts_fit = $button_up_shirts_fit;
        $customer->shorts_fit = $shorts_fit;
        
        if ($request->hasFile("custom_man_body_type")) {
          $customer->photo = $request->file("custom_man_body_type")->store("uploads/custom-photo", "public");
        }
        $customer->save();
      }
    }

    public function postWomen(Request $request)
    {
      $email = $request->input("email");
      $mother = $request->input("mother_or_pregnant");
      $women_body_type = $request->input("women_body_type");
      $casual_shirts = $request->input("women_casual_shirts");
      $button_up_shirts = $request->input("women_button_up_shirts");
      $bra = $request->input("bra_size");
      $waist = $request->input("women_waist");
      $inseams = $request->input("women_inseams");
      $jeans = $request->input("women_jeans");
      $skirt = $request->input("skirt");
      $dress_style = $request->input("dress_style");
      $shorts = $request->input("women_shorts");
      $shoe = $request->input("women_shoe");
      $casual_shirts_fit = $request->input("women_casual_shirts_fit");
      $button_up_shirts_fit = $request->input("women_button_up_shirts_fit");
      $shorts_fit = $request->input("women_shorts_fit");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->mother = $mother == "yes" ? 1 : 0;
        $customer->women_body_type = $women_body_type;
        $customer->casual_shirts = $casual_shirts;
        $customer->button_up_shirts = $button_up_shirts;
        $customer->bra = $bra;
        $customer->waist = $waist;
        $customer->inseams = $inseams;
        $customer->jeans = $jeans;
        $customer->skirt = $skirt;
        $customer->dress_style = $dress_style;
        $customer->shorts = $shorts;
        $customer->shoe = $shoe;
        $customer->casual_shirts_fit = $casual_shirts_fit;
        $customer->button_up_shirts_fit = $button_up_shirts_fit;
        $customer->shorts_fit = $shorts_fit;

        if ($request->hasFile("custom_woman_body_type")) {
          $customer->photo = $request->file("custom_woman_body_type")->store("uploads/custom-photo", "public");
        }
        $customer->save();
      }
    }

    public function postNeutral(Request $request)
    {
      $email = $request->input("email");
      $casual_shirts = $request->input("casual_shirts");
      $button_up_shirts = $request->input("button_up_shirts");
      $waist = $request->input("waist");
      $inseams = $request->input("inseams");
      $jeans = $request->input("jeans");
      $shorts = $request->input("shorts");

      $casual_shirts_fit = $request->input("casual_shirts_fit");
      $button_up_shirts_fit = $request->input("button_up_shirts_fit");
      $shorts_fit = $request->input("shorts_fit");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->casual_shirts = $casual_shirts;
        $customer->button_up_shirts = $button_up_shirts;
        $customer->waist = $waist;
        $customer->inseams = $inseams;
        $customer->jeans = $jeans;
        $customer->shorts = $shorts;
        $customer->casual_shirts_fit = $casual_shirts_fit;
        $customer->button_up_shirts_fit = $button_up_shirts_fit;
        $customer->shorts_fit = $shorts_fit;
        $customer->save();
      }
    }

    public function postDislike(Request $request)
    {
      $email = $request->input("email");
      $materials = $request->input("materials");
      $patterns = $request->input("patterns");
      $colors = $request->input("colors");

      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
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

    public function postAlmostDone(Request $request)
    {
      $email = $request->input("email");
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

    public function postFinalize(Request $request)
    {
      $email = $request->input("email");
      $plan = $request->input("plan");
     
      $user = User::where('email', $email)->first();
      if ($user && $user->customer) {
        $customer = $user->customer;
        $customer->plan = $plan;
        $customer->save();
      }
    }

    public function thankyou(Request $request)
    {
      return view('customer-thankyou');
    }
}
