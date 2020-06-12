@extends('com.stylist.layout')

@section('css')
    
@endsection

@section('content')
<div class="container first-row text-center">
    @if (!Count($clients))
    {{-- <div class="row my-3">
        <div class="col-12 mx-auto text-center">
            <h4 class="my-4">Clients</h4>
            <p class="my-3">No clients? Well not YET.<br>Complete your <a href="/stylist/profile"><u>profile</u></a> and <a href="#"><u>start creating</u></a></p>
        </div>
    </div> --}}
    @else
        @foreach($clients as $client)    
            <div class="col-avatar">
                <div class="kt-avatar kt-avatar--outline kt-avatar--circle m-4" id="kt_user_avatar_3">
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
                    <span class="d-block text-dark">Request coming in </span>
                </div>
                <span class="d-block color-client">{{ $client->user->email }}
            </div>
        @endforeach
    @endif
</div>
@endsection

@section('js')
<script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
@endsection
