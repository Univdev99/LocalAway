@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>
@endsection

@section('content')
<div class="container">
<form id="basic" method="POST" action="{{route('customer.signup.basic.save')}}">

    <div class="row first-row">
        <div class="col-12 mt-3">
            <div class="my-form-row text-center">
                <p >First the basics</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="mx-5 gender-option">
                    <div class="gender-image">
                        <img src="/images/customer-signup/gender-circle.svg" />
                        <img src="/images/customer-signup/gender-man.svg" />
                    </div>

                    <label class="radio-container mb-2">
                        Male
                        <input type="radio" name="gender" class="gender" value="man">
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </label>
                    </div>

                    <div class="mx-5 gender-option">
                    <div class="gender-image selected">
                        <img src="/images/customer-signup/gender-circle.svg" />
                        <img src="/images/customer-signup/gender-woman.svg" />
                    </div>

                    <label class="radio-container mb-2">
                        Female
                        <input type="radio" name="gender" class="gender" value="woman" checked>
                        <span class="checkmark">
                        <i class="fas fa-check check-sign"></i>
                        </span>
                    </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center mx-auto">
            <div class="my-form-row">
            <p>Height?</p>

            <div class="row justify-content-center">
                <div class="my-form-row mx-4 text-left">
                    <label for="step2-feet">Feet</label>
                    <input id="step2-feet" name="height_feet" class="form-control" required/>
                </div>

                <div class="my-form-row mx-4 text-left">
                    <label for="step2-inches">Inches</label>
                    <input id="step2-inches" name="height_inch" class="form-control" required/>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Age Range?</p>

                <div class="row justify-content-center">
                    <button class="range-btn">18-25</button>
                    <button class="range-btn">26-30</button>
                    <button class="range-btn">31-35</button>
                    <button class="range-btn">36-40</button>
                    <button class="range-btn">41-50</button>
                    <button class="range-btn">51-60</button>
                    <button class="range-btn">61-70</button>
                    <button class="range-btn">71-80</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center mx-auto">
            <div class="my-form-row">
                <p>What date do you need your capsule by?<br></p>
                <div id="calendar"></div>

                <input id="trip-date" class="text-center" required/>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Select all events or fashion needs</p>

                <div class="row justify-content-center">
                    <button class="range-btn">Professional</button>
                    <button class="range-btn">Happy Hour</button>
                    <button class="range-btn">Wedding Guest</button>
                    <button class="range-btn">Sightseeing</button>
                    <button class="range-btn">Sunday Brunch</button>
                    <button class="range-btn">Surprise Me</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Ship my items to</p>

                <div class="row justify-content-center">
                    <button class="range-btn">Hotel</button>
                    <button class="range-btn">Airbnb</button>
                    <button class="range-btn">Home</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="col-12">
            <h5 class="sub-page-title text-center">Hotel Details</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-reservation-name">*Reservation Name</label>
            <input id="basic-reservation-name" name="reservation-name" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-hotel-detail">*Hotel Name</label>
            <input id="basic-hotel-detail" name="hotel-detail" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" name="street-address" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-city">*City</label>
            <input id="basic-city" name="city" class="form-control" required />
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-state">*State</label>
            <input id="basic-state" class="form-control" name="state" required />
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-zip-code">*Zip Code</label>
            <input id="basic-zip-code" class="form-control" name="zip-code" required>
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-check-in">*Check In</label>
            <input id="basic-check-in" class="form-control datepicker" name="check-in" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" class="form-control datepicker" name="check-out" required readonly=""/>
            </div>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="col-12">
            <h5 class="sub-page-title text-center">AirBNB Details</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-reservation-name">*Reservation Name</label>
            <input id="basic-reservation-name" name="reservation-name" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" name="street-address" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-city">*City</label>
            <input id="basic-city" name="city" class="form-control" required />
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-state">*State</label>
            <input id="basic-state" class="form-control" name="state" required />
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-zip-code">*Zip Code</label>
            <input id="basic-zip-code" class="form-control" name="zip-code" required>
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-check-in">*Check In</label>
            <input id="basic-check-in" class="form-control datepicker" name="check-in" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" class="form-control datepicker" name="check-out" required readonly=""/>
            </div>
        </div>
    </div>

    <div class="row mx-auto">
        <div class="col-12">
            <h5 class="sub-page-title text-center">Home Address</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" name="street-address" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-city">*City</label>
            <input id="basic-city" name="city" class="form-control" required />
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-state">*State</label>
            <input id="basic-state" class="form-control" name="state" required />
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-zip-code">*Zip Code</label>
            <input id="basic-zip-code" class="form-control" name="zip-code" required>
            </div>
        </div>
    </div>

    <div class="row submit-btns">
        <div class="col-6 offset-3">
            <input class="round-btn back-btn mr-5 text-left" type="button" value="Back"/>
            <input class="round-btn next-btn float-right" type="submit" value="Next"/>
        </div>
    </div>
</form>
</div>
@endsection

@section('js')
    <script src="/js/customer/customer-signup.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.nl.min.js"></script>
@endsection




