@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet"/>
@endsection

@section('content')

<div class="container">
<form id="basic-form" method="POST" action="{{route('customer.signup.basic.save')}}" class="form-container">

    <div class="step-show m-4">
        <img src="/images/customer-signup/progress-basic.svg" class="w-100"/>
    </div>
    <div class="row item first-row item-show">
        <div class="col-12 mt-3">
            <div class="my-form-row text-center">
                <p >First the basics</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="mx-5 gender-option">
                        <div class="gender-image">
                            <img src="/images/customer-signup/gender-circle.svg" class="w-100"/>
                            <img src="/images/customer-signup/gender-man.svg" />
                        </div>

                        <input type="radio" id="gender-1" class="gender-input" name="basic-gender" value="male"/>
                        <label for="gender-1">Male</label>
                    </div>

                    <div class="mx-5 gender-option">
                        <div class="gender-image selected">
                            <img src="/images/customer-signup/gender-circle.svg" class="w-100"/>
                            <img src="/images/customer-signup/gender-woman.svg" />
                        </div>
                        <input type="radio" id="gender-2" class="gender-input" name="basic-gender" value="female"/>
                        <label for="gender-2">Female</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row item">
        <div class="col-12 text-center mx-auto">
            <div class="my-form-row">
            <p>Height?</p>

            <div class="row justify-content-center">
                <div class="my-form-row mx-4 text-left">
                    <label for="step2-feet">*Feet</label>
                    <input id="step2-feet" name="height_feet" class="form-control text-answer" type="text" required/>
                </div>

                <div class="my-form-row mx-4 text-left">
                    <label for="step2-inches">*Inches</label>
                    <input id="step2-inches" name="height_inch" class="form-control  text-answer" type="text" required/>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row item">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Age Range?</p>

                <div class="row justify-content-center">
                    <input type="radio" id="age-1" name="basic-age" value="18-25"/>
                    <label for="age-1" class="select-btn">18-25</label>

                    <input type="radio" id="age-2" name="basic-age" value="26-30" />
                    <label for="age-2" class="select-btn">26-30</label>

                    <input type="radio" id="age-3" name="basic-age" value="31-35" />
                    <label for="age-3" class="select-btn">31-35</label>

                    <input type="radio" id="age-4" name="basic-age" value="36-40" />
                    <label for="age-4" class="select-btn">36-40</label>

                    <input type="radio" id="age-5" name="basic-age" value="41-50" />
                    <label for="age-5" class="select-btn">41-50</label>

                    <input type="radio" id="age-6" name="basic-age" value="51-60" />
                    <label for="age-6" class="select-btn">51-60</label>

                    <input type="radio" id="age-7" name="basic-age" value="61-70" />
                    <label for="age-7" class="select-btn">61-70</label>

                    <input type="radio" id="age-8" name="basic-age" value="71-80" />
                    <label for="age-8" class="select-btn">71-80</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row item">
        <div class="col text-center mx-auto">
            <div class="my-form-row">
                <p>What date do you need your capsule by?<br></p>
                <div id="calendar"></div>

                <input id="trip-date" class="text-center text-answer" type="text" placeholder="Please set date." required/>
            </div>
        </div>
    </div>

    <div class="row item">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Select all events or fashion needs</p>

                <div class="row justify-content-center">
                    <input type="radio" id="event-1" name="basic-event"/>
                    <label for="event-1" class="select-btn">Professional</label>
                    <input type="radio" id="event-2" name="basic-event"/>
                    <label for="event-2" class="select-btn">Happy Hour</label>
                    <input type="radio" id="event-3" name="basic-event"/>
                    <label for="event-3" class="select-btn">Wedding Guest</label>
                    <input type="radio" id="event-4" name="basic-event"/>
                    <label for="event-4" class="select-btn">Sightseeing</label>
                    <input type="radio" id="event-5" name="basic-event"/>
                    <label for="event-5" class="select-btn">Sunday Brunch</label>
                    <input type="radio" id="event-6" name="basic-event"/>
                    <label for="event-6" class="select-btn">Surprise Me</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row item select-item">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Ship my items to</p>

                <div class="row justify-content-center">
                    <input type="radio" id="ship-1" name="basic-ship"/>
                    <label for="ship-1" class="select-btn">Hotel</label>

                    <input type="radio" id="ship-2" name="basic-ship"/>
                    <label for="ship-2" class="select-btn">Airbnb</label>

                    <input type="radio" id="ship-3" name="basic-ship"/>
                    <label for="ship-3" class="select-btn">Home</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row item selected-item end-part" id="selected-item1">
        <div class="col-12">
            <h5 class="sub-page-title text-center">Hotel Details</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-reservation-name">*Reservation Name</label>
            <input id="basic-reservation-name" name="reservation-name" type="text" class="form-control text-answer" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-hotel-detail">*Hotel Name</label>
            <input id="basic-hotel-detail" name="hotel-detail" type="text" class="form-control text-answer" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" name="street-address" type="text" class="form-control text-answer" required />
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
            <input id="basic-zip-code" type="text" class="form-control text-answer" name="zip-code" required>
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-check-in">*Check In</label>
            <input id="basic-check-in" type="text" class="form-control text-answer checkDate" name="check-in" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" type="text" class="form-control text-answer checkDate" name="check-out" required readonly=""/>
            </div>
        </div>
    </div>

    <div class="row item selected-item end-part" id="selected-item2">
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
            <input id="basic-check-in" class="form-control checkDate" name="check-in" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" class="form-control checkDate" name="check-out" required readonly=""/>
            </div>
        </div>
    </div>

    <div class="row item selected-item end-part" id="selected-item3">
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

    <div class="row submit-btns m-4">
        <div class="col-6 offset-3 text-center">
            <input class="round-btn back-btn mr-5 float-left" type="button" value="Back"/>
            <input class="round-btn next-btn float-right" type="button" value="Next"/>
        </div>
    </div>
</form>
</div>
@endsection

@section('js')
    <script src="/js/customer/customer-signup-quiz.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.nl.min.js"></script>
@endsection




