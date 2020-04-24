@extends('com.stylist.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/customer/customer-signup.css">
    <link rel="stylesheet" type="text/css" href="/css/customer/avatar.css">
    <link rel="stylesheet" type="text/css" href="/css/stylist/profile.css">
@endsection

@section('content')

<section class="container">
    <div class="row first-row">
        <div class="col-md-4 m-auto text-center col-avatar">
            <div class="kt-avatar kt-avatar--outline kt-avatar--circle mx-4 mb-3" id="kt_user_avatar_3">
                <div class="kt-avatar__holder"></div>
                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-plus"></i>
                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                </label>
                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                    <i class="fa fa-times"></i>
                </span>
            </div>
            <div class="name text-center my-auto">
                <h5> {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h5>
            </div>
            <a href="/" class=""><u>www.boutique.com</u></a>
        </div>
        <div class="col-md-6 col-off-2">
            <div class="my-form-row">
                <label for="name">Name</label>
                <input id="name" name="name" class="form-control" value="{{auth()->user()->first_name}} {{auth()->user()->last_name}}"/>
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" value="{{auth()->user()->email}}"/>
                <label for="boutique">Boutique Name</label>
                <input id="boutique" name="boutique" class="form-control" value="{{$name}}"/>
                <label for="link">Website</label>
                <input id="link" name="link1" class="form-control" value="{{$link1}}"/>
                <input id="link" name="link1" class="form-control" value="{{$link2}}"/>
                <input id="link" name="link1" class="form-control" value="{{$link3}}"/>
                <label for="notes">Profile Bio</label>
                <textarea id="notes" name="notes" class="form-control text-card">{{$notes}}</textarea>
                <div class="col-3 mx-auto text-center">
                    <button class="btn btn-block text-white btn-brown my-2 py-2 btn-edit">Edit</button>
                </div>
            </div>
        </div>

    </div>
    <div class="row my-3">
        <div class="col-12 mx-auto text-center">
            <h4 class="my-4">Clients</h4>
            <p class="my-3">No clients? Well not YET.<br>Complete your <a href="/stylist/profile"><u>profile</u></a> and <a href="#"><u>start creating</u></a></p>
        </div>
    </div>
</section>

@endsection

@section('js')
    <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
    <script src="js/stylist/profile.js" type="text/javascript"></script>
@endsection
