@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')
<div class="container">
<form id="account-form" method="POST" action="{{route('customer.signup.account.save')}}">
    @csrf
    <div class="row first-row">
        <div class="col-12">
            <h5 class="sub-page-title text-center">First, create your account</h5>
        </div>

        <div class="col-6 col-lg-6">
            <div class="my-form-row">
            <label for="step1-first-name">*First name</label>
            <input id="step1-first-name" name="first_name" class="form-control" value="{{ old('first_name') }}" required />
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

        <div class="col-6 col-lg-6">
            <div class="my-form-row">
            <label for="step1-last-name">*Last name</label>
            <input id="step1-last-name" name="last_name" class="form-control" value="{{ old('last_name') }}" required />
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="my-form-row">
                <label for="step1-email">*Email</label>
                <input type="email" id="step1-email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="my-form-row">
                <label for="step1-password">*Create Password</label>
                <input id="step1-password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" required />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
            
        <div class="col-12">
            <div class="my-form-row">
            <label for="step1-confirm-password">*Confirm your Password</label>
            <input id="step1-confirm-password" name="password_confirmation" type="password" class="form-control" required />
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="my-form-row">
            <label for="step1-phone-number">*Phone Number</label>
            <input id="step1-phone-number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>
            </div>
        </div>

        <div class="col-12">
            <div class="my-form-row">
                <label class="radio-container">
                    I want to receive text alerts about my shipments
                    <input type="checkbox" id="step1-receive-alert" name="receive_alert" unchecked>
                    <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                    </span>
                </label>
                <span class="invalid-feedback phone-alert px-5" role="alert">
                    <strong>Enter phone number to access this option.</strong>
                </span>
            </div>
        </div>

        <div class="col-12">
            <div class="my-form-row">
                <label class="radio-container">
                    By checking this I agree to <a href="/terms_of_policy"><u>Terms of Service</u></a> and <a href="/privacy_policy"><u>Privacy Policy</u></a>
                    <input type="checkbox" id="step1-policy-alert" name="term_service" checked>
                    <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                    </span>
                </label>
                <span class="invalid-feedback policy-alert px-5" role="alert">
                    <strong>Please check this box if you want to proceed.</strong>
                </span>
            </div>
        </div>


    </div>
    <div class="row item-show item-submit">
        <div class="my-form-row text-center mx-auto">
            <input class="round-btn next-btn float-none" type="submit" value="Next"/>
        </div>
    </div>
</form>
</div>
@endsection

