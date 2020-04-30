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
        @else
            <div class="text-center mx-auto my-4">
                <img src="/storage/uploads/{{ $homepage }}" width="100%" height="500px">
            </div>
        @endif
    </div>

    <div class="row">
        <div style="width:350px;">
            <div class="row justify-content-center align-items-center d-block">
                <div class="m-4 text-center">
                    @if (!$boutique_logo)
                        <h4 class="color-shop m-3">Upload a logo</h4>
                        <button class="btn-plus btn-upload m-3" data="logo"><i class="fa fa-plus"></i></button>
                    @else
                        <img src="/storage/uploads/{{ $boutique_logo }}" width="300px" >
                    @endif
                    @if (!$bio)
                        <h4 class="color-shop m-3">Upload a avatar</h4>
                        <button class="btn-plus btn-upload m-3" data="bio"><i class="fa fa-plus"></i></button>
                    @else
                        <img src="/storage/uploads/{{ $bio }}" width="300px" height="300px">
                    @endif
                    <h5 class="m-3 text-center">Boutique Name</h5>
                    <textarea id="notes" name="notes" class="form-control border-0" placeholder="Description"></textarea>
                    <button class="btn-brown px-5 my-4">Edit</button>
                </div>
            </div>
        </div>
        <div class="col">
            <button class="btn-brown btn-upload float-right" data="csv">Add CSV File</button>
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

