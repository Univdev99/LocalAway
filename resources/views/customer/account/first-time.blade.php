@extends('customer.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/customer/customer-signup.css">
    <link rel="stylesheet" type="text/css" href="/css/customer/account.css">
@endsection

@section('content')
    <div class="container">
        <div class="row first-row">
            <div class="col-6 bg-card p-4">
                <div class="row">
                    <div class="col-12 p-2">
                        <h3 class="mx-3 mt-4"> Credit Card </h3>
                        <textarea class="textarea-card" placeholder="No card on file yet"></textarea>
                    </div>
                    <div class="mx-3">
                        <button class="btn btn-block text-white btn-brown px-0">Add Card</button>
                    </div>
                    <div class="col-12">
                        <h3 class="mx-2 mt-4"> Orders </h3>
                        <table style="width:100%">
                            {{-- <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                No orders yet
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            <div class="col-6 p-4">
                <div class="row">
                    <div class="col-12">
                        <h3> Account Information</h3>
                        <div class="row">
                            <div class=" col-6">
                                <label for="first-name">First name</label>
                                <input id="first-name" name="first-name" class="form-control"/>
                            </div>
                            <div class="col-6">
                                <label for="last-name">Last name</label>
                                <input id="last-name" name="last-name" class="form-control"/>
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input id="email" name="email" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input id="password" name="password" class="form-control" type="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <h3> Billing Address</h3>
                        <button class="btn btn-block text-white btn-brown mt-2 px-0">Add Address</button>
                    </div>
                    <div class="col-12 my-5">
                        <h3> Shipping Address</h3>
                        <button class="btn btn-block text-white btn-brown my-2 px-0">Add Address</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
