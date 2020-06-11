@extends('com.stylist.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/customer/avatar.css">
    <link rel="stylesheet" type="text/css" href="/css/stylist/clients.css">
@endsection

@section('content')
<div class="container first-row">
    {{-- <div class="row my-3">
        <div class="col-12 mx-auto text-center">
            <h4 class="my-4">Clients</h4>
            <p class="my-3">No clients? Well not YET.<br>Complete your <a href="/stylist/profile"><u>profile</u></a> and <a href="#"><u>start creating</u></a></p>
        </div>
    </div> --}}
    @foreach($clients as $client)    
        <div class="col-avatar">
            <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
                <h5>{{ $client->user->first_name }} {{ $client->user->last_name }} </h5>
            </div>
            <a href="/" class=""><u>{{ $client->user->email }}</u></a>
        </div>
    @endforeach
    {{-- {{-- <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div> --}}
    {{-- <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div>
    <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div>
    <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div>
    <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div>
    <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div>
    <div class="col-avatar">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_user_avatar_3">
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
            <h5> client</h5>
        </div>
        <a href="/" class=""><u>www.boutique.com</u></a>
    </div> --}}
</div>
@endsection

@section('js')
<script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
@endsection
