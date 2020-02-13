<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Revolution\Google\Sheets\Facades\Sheets;
use App\Http\Requests\PostRequest;
use Stevebauman\Location\Location;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  PostRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(PostRequest $request)
    {
        /**
         * Service Account demo
         */
        $boutique_style= $request->input('boutique_style');
        if($request->input('boutique_style')=='other'){
            $boutique_style =  $request->input('boutique_style_other');
        }
        
        $online_shop = implode(', ',$request->input('online_shop'));
        if($request->input('online_shop')=='other'){
            $online_shop = $request->input('online_shop_other');
        }

        $shop_technology = $request->input('shop_technology');
        if($request->input('shop_technology')=='other'){
            $shop_technology = $request->input('shop_technology_other');
        }

        $illustration_method = $request->input('illustration_method');
        if($request->input('illustration_method')=='other'){
            $illustration_method = $request->input('illustration_method_other');
        }

        $notification_method = $request->input('notification_method');
        if($request->input('notification_method')=='other'){
            $notification_method = $request->input('notification_method_other');
        }

        $return_type = implode(', ',$request->input('return_type'));
        if($request->input('return_type')=='other'){
            $return_type = $request->input('return_type_other');
        }

        $location = new Location();
        $position = $location->get($request->ip());
        if ($position) {
            $request->merge(['country' => $position->countryName.", ".$position->cityName]);
        } else {
            $request->merge(['country' => 'Undefined Country']);
        }


        
        $append = [
            $request->input('name'),
            $request->input('email'),
            implode(', ', $request->input('fashion_style')),
            $boutique_style,
            implode(', ' , $request->input('size')),
            $request->input('fashion_items'),
            $online_shop,
            $shop_technology,
            $request->input('employee_number'),
            $request->input('customer_style'),
            $request->input('online_percentage'),
            $request->input('customer_percent'),
            $request->input('advertize_method'),
            implode(', ', $request->input('taget_customer')),
            $illustration_method,
            $notification_method,
            $request->input('use_IMS'),
            $request->input('shipping_possiblity'),
            $request->input('paymnet_method'),
            $request->input('accept_return'),
            $return_type,
            $request->input('phone'),
            $request->input('postal_address'),
            $request->input('anything_else'),     
            now()->toDateTimeString(),
            $request->input('country'),     
        ];
        

        Sheets::spreadsheet(config('sheets.post_spreadsheet_id'))
        ->sheet('DataSheet')
        ->append([$append]);

        return redirect('/');
    }
}
