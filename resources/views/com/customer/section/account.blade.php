@extends('com.customer.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/customer/customer-signup.css">
    <link rel="stylesheet" type="text/css" href="/css/customer/account.css">
@endsection

@section('content')
    <div class="container">
        <div class="row first-row">
            {{-- <div class="col-6 bg-card p-4">
                <div class="row">
                    <div class="col-12 p-2">
                        <h3 class="mx-3 my-4"> Credit Card </h3>
                        <textarea class="textarea-card" rows="6" cols="5" placeholder="No card on file yet"></textarea>
                    </div>
                    <div class="mx-3">
                        <button class="btn btn-block text-white btn-brown px-0">Add Card</button>
                    </div>
                    <div class="col-12">
                        <h3 class="mx-2 mt-4"> Orders </h3>
                        <table style="width:100%">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr class="no-table">
                                    <td>No orders yet</td>
                                </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div> --}}
            <div class="col-6 p-4">
                <div class="row">
                    <div class="col-12">
                        <h3 class="my-2"> Account Information</h3>
                        <div class="row">
                            <div class=" col-6">
                                <label for="first-name">First name</label>
                                <input id="first-name" name="first-name" class="form-control" value="{{ $first_name }}"/>
                            </div>
                            <div class="col-6">
                                <label for="last-name">Last name</label>
                                <input id="last-name" name="last-name" class="form-control" value="{{ $last_name }}"/>
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input id="email" name="email" class="form-control" value="{{ $email }}"/>
                            </div>
                            {{-- <div class="col-12">
                                <label for="password">Password</label>
                                <input id="password" name="password" class="form-control" value="{{ $pwd }}"/>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <h3 class="my-2"> Shipping Address</h3>
                        <button class="btn btn-block text-white btn-brown my-2 px-0 btn-shipping">Add Address</button>
                        <div class="row shipping-group" style="@if (is_null(optional($profile)->shipping_street1)) display:none; @endif ">
                            <div class="col-12">
                                <label for="shipping-name">Name</label>
                                <input id="shipping-name" name="shipping-name" class="form-control" value="{{ optional($profile)->shipping_name }}" />
                            </div>
                            <div class="col-12">
                                <label for="shipping-address1">Street Address1</label>
                                <input id="shipping-address1" name="shipping-address1" class="form-control" value="{{ optional($profile)->shipping_street1 }}"/>
                            </div>
                            <div class="col-12">
                                <label for="shipping-address2">Street Address2</label>
                                <input id="shipping-address2" name="shipping-address2" class="form-control" value="{{ optional($profile)->shipping_street2 }}"/>
                            </div>
                            <div class="col-5">
                                <label for="shipping-city">City</label>
                                <input id="shipping-city" name="shipping-city" class="form-control" value="{{ optional($profile)->shipping_city }}"/>
                            </div>
                            <div class="col-4">
                                <label for="shipping-state">State</label>
                                <input id="shipping-state" name="shipping-state" class="form-control" value="{{ optional($profile)->shipping_state }}"/>
                            </div>
                            <div class="col-3">
                                <label for="shipping-code">Zip Code</label>
                                <input id="shipping-code" name="shipping-code" class="form-control" value="{{ optional($profile)->shipping_zipcode }}"/>
                            </div>
                            <div class="col-12">
                                <label for="shipping-country">Country</label>
                                <input id="shipping-country" name="shipping-country" class="form-control" value="{{ optional($profile)->country_city }}" />
                            </div>
                            <div class="col-12">
                                <label for="shipping-phone">Phone</label>
                                <input id="shipping-phone" name="shipping-phone" class="form-control" type="tel" value="{{ optional($profile)->shipping_phone }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <h3 class="my-2"> Billing Address</h3>
                        <div class="checkbox checkbox-info checkbox-circle check-billing">
                            <input id="check-billing" class="styled" type="checkbox">
                            <label for="check-billing">
                                Same as Shipping
                            </label>
                        </div>
                        <button class="btn btn-block text-white btn-brown mt-2 px-0 btn-billing">Add Address</button>
                        <div class="row billing-group" style="display:none;">
                            <div class="col-12">
                                <label for="billing-name">Name</label>
                                <input id="billing-name" name="billing-name" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label for="billing-address1">Street Address1</label>
                                <input id="billing-address1" name="billing-address1" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label for="billing-address2">Street Address2</label>
                                <input id="billing-address2" name="billing-address2" class="form-control"/>
                            </div>
                            <div class="col-5">
                                <label for="billing-city">City</label>
                                <input id="billing-city" name="billing-city" class="form-control"/>
                            </div>
                            <div class="col-4">
                                <label for="billing-state">State</label>
                                <input id="billing-state" name="billing-state" class="form-control" />
                            </div>
                            <div class="col-3">
                                <label for="billing-code">Zip Code</label>
                                <input id="billing-code" name="billing-code" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label for="billing-country">Country</label>
                                <input id="billing-country" name="billing-country" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label for="billing-phone">Phone</label>
                                <input id="billing-phone" name="billing-phone" class="form-control" type="tel"/>
                            </div>
                        </div>
                    </div>
                    
                    <h5 class="my-5 "><u><a href="#" class="contact">Contact us</a></u> with questions</h5>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="/js/customer/account.js" type="text/javascript"></script>
@endsection
