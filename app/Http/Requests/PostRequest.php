<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => "required",
            'email' => "required",
            'fashion_style' => "required",
            'boutique_style' => "required",
            'size' => "required",
            'fashion_items' => "required",
            'online_shop' => "required",
            'shop_technology' => "required",
            'employee_number' => "required",
            'customer_style' => "required",
            'online_percentage' => "required",
            'customer_percent' => "required",
            'advertize_method' => "required",
            'taget_customer' => "required",
            'taget_customer' => "required",
            'illustration_method' => "required",
            'notification_method' => "required",
            'use_IMS' => "required",
            'shipping_possiblity' => "required",
            'paymnet_method' => "required",
            'accept_return' => "required",
            'return_type' => "required",
            'phone' => "required",
            'postal_address' => "required",
            'anything_else'      => "required",
        ];
    }
}
