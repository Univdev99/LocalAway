@extends('customer.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/customer/customer-signup.css">
    <link rel="stylesheet" type="text/css" href="/css/customer/avatar.css">
@endsection
@section('content')


<section class="container">
<form id="step1" class="mb-5">
    <div class="row first-row">
        <div class="kt-avatar kt-avatar--outline kt-avatar--circle mx-4 mb-3" id="kt_user_avatar_3">
            <div class="kt-avatar__holder"></div>
            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                <i class="fa fa-pen"></i>
                <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
            </label>
            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                <i class="fa fa-times"></i>
            </span>
        </div>

        <div class="name text-center my-auto">
            <h4> {{auth()->user()->first_name}} {{auth()->user()->last_name}}</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="my-form-row">
                <label for="gender">Gender</label>
                <input id="gender" name="gender" class="form-control" />
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" />
                <label for="destination">Destination</label>
                <input id="destination" name="destination" class="form-control" />
                <label for="phone-number">Phone</label>
                <input id="phone-number" class="form-control" name="phone-number" type="tel">
                <label for="budget">Budget</label>
                <input id="budget" name="budget" class="form-control" />
                <label for="notes">Notes</label>
                <textarea id="notes" name="notes" class="form-control" style="width: 100%; height: 8em;resize:none;"></textarea>
                <label for="age">Age</label>
                <input id="age" name="age" class="form-control" type="number"/>
            </div>
        </div>
        <div class="col-6 m-auto text-center">
            <h5>Finish the <a href="/" class=""><u>Style Quiz</u></a> to complete your <br> preferences and start an order.</h5>
        </div>
    </div>
    </form>
</section>

@endsection

@section('js')
    <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo4/dist/assets/js/pages/crud/file-upload/ktavatar.js" type="text/javascript"></script>
@endsection
