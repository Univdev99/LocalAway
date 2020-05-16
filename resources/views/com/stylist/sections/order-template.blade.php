@extends('com.stylist.layout')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/stylist/product-order.css">
@endsection

@section('content')

<section class="product-order">
    <div class="row">
        <div class="col-12 d-flex p-4 bg-grey justify-content-between mb-5">
            <div class="d-flex">
                <a href="{{ route('com.stylist.orders') }}" class="px-2 text-dark">ORDERS</a>
                <a href="{{ route('com.stylist.profile') }}" class="px-2 text-dark">PROFILE</a>
            </div>
            <div>
                Hello! <span class="hello-name">{{ auth()->user()->first_name }}</span>
            </div>
        </div>

        @yield('subcontent')
    </div>
</section>

@endsection

@section('js')
@endsection

