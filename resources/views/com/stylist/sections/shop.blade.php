@extends('com.stylist.layout')

@section('css')
    <link href="/css/fine-uploader-new.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/stylist/shop.css">
@endsection

@section('content')

<section class="content">
    <div class="row boutique-image justify-content-center align-items-center first-row ">
        @if(!$homepage)
            <div class="homepage-noset m-5 mx-auto text-center">
                <h1 class="color-shop m-5">Upload homepage photo</h1>
                <button class="btn-plus btn-upload m-5" data="homepage"><i class="fa fa-plus"></i></button>
            </div>
            <
        @else
            <div class="text-center mx-auto my-4">
                <img src="/storage/uploads/{{ $homepage }}" width="100%" height="500px">
            </div>
        @endif
    </div>

    <div class="row">
        <div style="width:350px;">
            <div class="row justify-content-center align-items-center d-block">
                @if (!$boutique_logo)
                    <div class="logo-noset m-5 text-center">
                        <h4 class="color-shop m-3">Upload a logo</h4>
                        <button class="btn-plus btn-upload m-3" data="logo"><i class="fa fa-plus"></i></button>
                    </div>
                @else
                    <div class="text-center mx-auto my-4">
                        <img src="/storage/uploads/{{ $boutique_logo }}" width="300px" >
                    </div>
                @endif
                <div class="m-4 text-center">
                    @if (!$bio)
                        <button class="btn-brown btn-upload color-shop m-3" data="bio">Edit your Bio</button>
                    @else
                        <img src="/storage/uploads/{{ $bio }}" width="300px" height="300px">
                    @endif
                    <h5 class="m-3">Boutique Name</h5>
                </div>
                <div class="m-3 text-center">
                    <textarea id="notes" name="notes" class="form-control border-0 m-4" placeholder="Description"></textarea>
                    <button class="btn-brown">Edit</button>
                </div>
            </div>
        </div>
        <div class="col">
            <button class="btn-brown btn-upload float-right" data="csv">Add CSV File</button>
            @if ($products)
                @include('com.stylist.sections.closet')
            @endif
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

