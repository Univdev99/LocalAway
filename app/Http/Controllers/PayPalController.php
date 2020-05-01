<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
   
class PayPalController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */

    protected $provider;
    
    public function __construct()
    {
        $this->provider = new ExpressCheckout();
    }
    public function payment()
    {
        $data = [];
        $data['items'] = [
            [
                'name' => 'localaway',
                'price' => 19,
                'desc'  => 'PayPal for localaway',
                'qty' => 1
            ]
        ];
  
        $id = 1001;
        $invoice_id = config('paypal.invoice_prefix').'_'.$id;
        $data['invoice_id'] = $invoice_id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 19;
  
        // $response = $provider->setExpressCheckout($data);
        
        try{
            $response = $this->provider->setExpressCheckout($data, false);
            // dd($response);
            return $response['paypal_link'];
        } catch (\Exception $e) {
            
        }
  
        // return redirect($response['paypal_link']);
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        return back()->with('paypal-message', 'Your payment is canceled.');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $response = $this->provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return view('ai.paypal_response');
            //return redirect()->route('customer.signup.thankyou');
        }
        return back()->with('paypal-message', 'Something is wrong.');
    }
}

