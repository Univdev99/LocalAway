@extends('com.stylist.layout')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/stylist/shop.css">
@endsection

@section('content')

<section class="content">
    <div class="row boutique-image justify-content-center align-items-center first-row ">
        @if(!$homepage)

            <div class="col homepage-noset m-5 mx-auto text-center">
                <span class="m-4 d-block">Hi {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}!</span>
                <span class="color-shop m-5 h2">Upload homepage photo</span>
                <button class="btn-plus btn-upload m-3" data="homepage"><i class="fa fa-plus"></i></button>
            </div>
        @else
            <div class="text-center mx-auto my-4">
                <img src="/storage/uploads/{{ $homepage }}" width="100%" height="500px">
            </div>
        @endif
    </div>

    <div class="row">
        <div style="width:350px;">
            <div class="justify-content-center align-items-center d-block">
                <div class="m-4">
                    @if (!$boutique_logo)
                        <div class="row ">
                            <button class="btn-plus btn-upload m-3" data="logo"><i class="fa fa-plus"></i></button>
                            <span class="color-shop mx-2 my-auto">Upload a logo</span>
                        </div>
                    @else
                        <img src="/storage/uploads/{{ $boutique_logo }}" width="300px" class="m-2">
                    @endif
                    @if (!$bio)
                        <div class="row">
                            <button class="btn-plus btn-upload m-3" data="bio"><i class="fa fa-plus"></i></button>
                            <span class="color-shop mx-2 my-auto">Upload a avatar</span>
                        </div>
                    @else
                        <img src="/storage/uploads/{{ $bio }}" width="250px" height="250px" class="ml-3">
                    @endif
                    <span class="m-3 ml-4 h4 d-block text-dark">{{ $name }}</span>
                    <textarea id="notes" name="notes" class="form-control border-0 mx-3" placeholder="Description"></textarea>
                    <button class="btn-brown px-5 m-4">Edit</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mt-3 mb-5 mr-5 text-right">
                <button class="btn-brown btn-upload" data="csv">Add CSV File</button>
            </div>
            @include('com.stylist.sections.closet')
        </div>
    </div>
    @include('com.stylist.sections.upload')
</section>

@endsection

@section('js')

<script src="/js/stylist/shop.js"></script>
<script src="/js/fileinput.js"></script>
<script src="/js/stylist/closet.js"></script>

@endsection

