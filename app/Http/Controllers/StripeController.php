<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Config;

use App\User;

class StripeController extends Controller
{
    //
    public function store(Request $request)
    {
        $amount = 20;
        $input = $request->all();
        $token = $input['stripeToken'];
        $email = $input['email'];
        $user = User::where('email', $input['email'])->first();
        
        try{
            Stripe::setApiKey(Config::get('services.stripe.secret'));
            $customer = Customer::create(array(
                'email' => $email,
                'source' => $token
            ));
        
            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => 1999,
                'currency' => 'usd'
            ));
            return  back()->with('success', 'Charge successful!')->with('payment_method', 'stripe');

        } catch (Exception $ex) {
            return back()->with('success', $ex->getMessage())->with('payment_method', 'stripe');
        }
    }

    public function cancel(Request $request)
    {
        auth()->user()->subscription('main')->cancelNow();
        auth()->user()->status = 'pending';
        auth()->user()->save();
        return view('dashboard.home');
    }
}