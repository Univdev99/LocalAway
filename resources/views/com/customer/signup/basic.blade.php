@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>
@endsection

@section('content')

<div class="container signup-container">
    <div class="step-show m-4">
        <img src="/images/customer-signup/progress-basic.svg" class="w-100"/>
    </div>
<form id="basic-form" method="POST" action="{{route('customer.signup.basic.save')}}" class="form-container">
@csrf
    <input class="profile-progress" type="hidden" value="{{ $progress }}">
    <div class="row item first-row" id="row-gender">
        <div class="col-12 mt-3">
            <div class="my-form-row text-center">
                <p >First the basics</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="mr-sm-5 mx-auto img-selector">
                        <div class="gender-image img-div">
                            <img src="/images/customer-signup/gender-circle.svg" class="w-100"/>
                            <img src="/images/customer-signup/gender-man.svg" />
                        </div>

                        <input type="radio" id="gender-1" class="img-radio" name="gender" value="male" @if($gender == 'male') checked @endif/>
                        <label for="gender-1">Male</label>
                    </div>

                    <div class="ml-sm-5 mx-auto img-selector">
                        <div class="gender-image img-div selected">
                            <img src="/images/customer-signup/gender-circle.svg" class="w-100"/>
                            <img src="/images/customer-signup/gender-woman.svg" />
                        </div>
                        <input type="radio" id="gender-2" class="img-radio" name="gender" value="female" @if($gender != 'male') checked @endif/>
                        <label for="gender-2">Female</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row item" id="row-height">
        <div class="col text-center mx-auto" style="flex: 0 0 400px;max-width: 400px;">
            <div class="my-form-row">
                <p>Height?</p>

                <label class="label_unit"><input type="radio" class="mx-2 radio-unit" name="height_unit" value="imperial" @if($height_unit != 'metric' || !$height_unit) checked @endif>Imperial</label>
                <label class="label_unit"><input type="radio" class="mx-2 radio-unit" name="height_unit" value="metric" @if($height_unit == 'metric') checked @endif>Metric</label>
                {{-- <div class="row justify-content-center">
                    <div class="col-6 text-left">
                        <label for="height">*Height</label>                        
                        <input id="height" name="height_size" class="form-control text-answer" type="number" min="0" value="{{ $height_size }}" required/>
                    </div>
                    <div class="col-6" style="align-self: flex-end;">
                        <select name="height_unit" class="afit-select" required>
                            <option value="Feet"  @if($height_unit == 'Feet' || !$height_unit) selected @elseif($height_unit == "Centimeter") hidden @endif>Feet</option>
                            <option value="Inches"  @if($height_unit == 'Inches') selected @elseif($height_unit == "Centimeter") hidden @endif>Inches</option>
                            <option value="Centimeter"  @if($height_unit == 'Centimeter') selected @else hidden @endif>Centimeter</option>
                        </select>
                    </div>
                </div> --}}
                <div class="d-flex mb-4 mt-5">
                    <div class="height_div1 text-left mx-auto" style="width:100px;">
                        <label class="height_comment" for="height1">@if($height_unit != 'metric' || !$height_unit) *Feet @else *Centimeter @endif</label>
                        <input id="height1" name="height_size" class="form-control text-answer" type="number" min="0" value="{{ $height_size }}" required/>
                    </div>
                    <div class="height_div2 text-left mx-auto" style="width:100px;" @if($height_unit == "metric") hidden="hidden" @endif>
                        <label for="height2">*Inches</label>
                        <input id="height2" name="height_subsize" class="form-control text-answer" type="number" min="0" value="@if($height_unit !="imperial" || !$height_unit){{ 0 }}@else {{ $height_subsize }} @endif" required/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row item" id="row-age">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Age Range?</p>

                <div class="row justify-content-center">
                    <input type="radio" id="age-1" name="age_range" value="18-25" checked @if($age_range == "18-25" || !$age_range) checked @endif>
                    <label for="age-1" class="select-btn">18-25</label>

                    <input type="radio" id="age-2" name="age_range" value="26-30" @if($age_range == "26-30") checked @endif>
                    <label for="age-2" class="select-btn">26-30</label>

                    <input type="radio" id="age-3" name="age_range" value="31-35"  @if($age_range == "31-35") checked @endif>
                    <label for="age-3" class="select-btn">31-35</label>

                    <input type="radio" id="age-4" name="age_range" value="36-40"  @if($age_range == "36-40") checked @endif>
                    <label for="age-4" class="select-btn">36-40</label>

                    <input type="radio" id="age-5" name="age_range" value="41-50"  @if($age_range == "41-50") checked @endif>
                    <label for="age-5" class="select-btn">41-50</label>

                    <input type="radio" id="age-6" name="age_range" value="51-60"  @if($age_range == "51-60") checked @endif>
                    <label for="age-6" class="select-btn">51-60</label>

                    <input type="radio" id="age-7" name="age_range" value="61-70"  @if($age_range == "61-70") checked @endif>
                    <label for="age-7" class="select-btn">61-70</label>

                    <input type="radio" id="age-8" name="age_range" value="71-80"  @if($age_range == "71-80") checked @endif>
                    <label for="age-8" class="select-btn">71-80</label>
                </div>
            </div>
        </div>
    </div>

    <div class="item" id="row-capsule-date">
        <div class="my-form-row text-center mx-auto">
            <div class="d-flex">
                <p class="my-auto mx-1">What date do you need your capsule by?<br></p>
                <input type="button" id="basic-asap" class="round-btn py-1 px-3" value="ASAP"/>
            </div>
            <div id="calendar"></div>

            <label for="trip-date" class="text-left">*Date</label>
            <input id="trip-date" class="form-control text-center mx-auto text-answer" name="capsule_date" type="text" placeholder="Please set date." value="{{ $capsule_date }}" required/>
        </div>
    </div>

    <div class="row item" id="row-events">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Select all events or fashion needs</p>

                <div class="row justify-content-center">
                    <input type="radio" id="event-1" name="events" value="Professional" @if($events == "Professional" || !$events) checked @endif>
                    <label for="event-1" class="select-btn">Lounging at home</label>

                    <input type="radio" id="event-2" name="events" value="Happy Hour" @if($events == "Happy Hour") checked @endif>
                    <label for="event-2" class="select-btn">Zoom meeting</label>

                    <input type="radio" id="event-3" name="events" value="Wedding Guest" @if($events == "Wedding Guest") checked @endif>
                    <label for="event-3" class="select-btn">Exercising</label>

                    <input type="radio" id="event-4" name="events" value="Sightseeing" @if($events == "Sightseeing") checked @endif>
                    <label for="event-4" class="select-btn">Dress up</label>

                    <input type="radio" id="event-5" name="events" value="Sunday Brunch" @if($events == "Sunday Brunch") checked @endif>
                    <label for="event-5" class="select-btn">Cozy</label>

                    <input type="radio" id="event-6" name="events" value="Surprise Me" @if($events == "Surprise Me") checked @endif>
                    <label for="event-6" class="select-btn">Surprise Me</label>

                    <input type="radio" id="event-7" name="events" value="Upcoming Trip" @if($events == "Upcoming Trip") checked @endif>
                    <label for="event-7" class="select-btn">Upcoming Trip</label>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row item" id="row-location">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>I want to try local styles from this city.</p>

                <div class="input-container">
                    <i class="fa fa-map-marker-alt icon"></i>
                    <select class="afit-select input-field" id="basic-location" placeholder="location" name="location" required>
                        <option value="{{$location}}" selected>{{$location}}</option>
                    </select>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row item item-select" id="row-ship-type">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Ship my items to</p>

                <div class="row justify-content-center">
                    <input type="radio" id="ship-1" name="ship_type" data-next="1" value="hotel" checked/>
                    <label for="ship-1" class="select-btn">Hotel</label>

                    <input type="radio" id="ship-2" name="ship_type" data-next="2" value="airbnb"/>
                    <label for="ship-2" class="select-btn">Airbnb</label>

                    <input type="radio" id="ship-3" name="ship_type" data-next="3" value="home"/>
                    <label for="ship-3" class="select-btn">Home</label>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row item end-part" id="row-hotel">
        <div class="col-12">
            <h5 class="sub-page-title text-center">Hotel Details</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-reservation-name">*Reservation Name</label>
            <input id="basic-reservation-name" name="reservation_name" type="text" class="form-control text-answer" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-hotel-detail">*Hotel Name</label>
            <input id="basic-hotel-detail" name="hotel_detail" type="text" class="form-control text-answer" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" name="street_address" type="text" class="form-control text-answer" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-city">*City</label>
            <input id="basic-city" name="city" type="text" class="form-control text-answer" required />
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-state">*State</label>
            <input id="basic-state" type="text" class="form-control text-answer" name="state" required />
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-zip-code">*Zip Code</label>
            <input id="basic-zip-code" type="text" class="form-control text-answer" name="zip_code" required>
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-check-in">*Check In</label>
            <input id="basic-check-in" type="text" class="form-control text-answer checkDate" name="checkin" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" type="text" class="form-control text-answer checkDate" name="checkout" required readonly=""/>
            </div>
        </div>
    </div>

    <div class="row item end-part" id="row-reservation">
        <div class="col-12">
            <h5 class="sub-page-title text-center">AirBNB Details</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-reservation-name">*Reservation Name</label>
            <input id="basic-reservation-name" type="text" name="reservation_name" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" type="text" name="street_address" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-city">*City</label>
            <input id="basic-city" type="text" name="city" class="form-control" required />
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-state">*State</label>
            <input id="basic-state" type="text" class="form-control" name="state" required />
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-zip-code">*Zip Code</label>
            <input id="basic-zip-code" type="text" class="form-control" name="zip_code" required>
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-check-in">*Check In</label>
            <input id="basic-check-in" type="text" class="form-control checkDate" name="checkin" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" type="text" class="form-control checkDate" name="checkout" required readonly=""/>
            </div>
        </div>
    </div> --}}

    <div class="row item item-submit end-part" id="row-shipping-address">
        <div class="col-12">
            <h5 class="sub-page-title text-center">Shipping Address</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" type="text" name="street_address" class="form-control"  value="{{ $street_address }}">
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-city">*City</label>
            <input id="basic-city" type="text" name="city" class="form-control"  value="{{ $city }}">
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-state">*State</label>
            <input id="basic-state" type="text" name="state" class="form-control"   value="{{ $state }}">
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-zip-code">*Zip Code</label>
            <input id="basic-zip-code" type="text" name="zip_code" class="form-control" value="{{ $zip_code }}">
            </div>
        </div>
    </div>

    <div class="row submit-btns m-4">
        <div class="col-lg-6 offset-lg-3 text-center">
            <input class="round-btn back-btn mr-5 float-left" type="button" value="Back"/>
            <input class="round-btn next-btn float-right" type="button" value="Next"/>
        </div>
    </div>
</form>
</div>
@endsection

@section('js')

@endsection




