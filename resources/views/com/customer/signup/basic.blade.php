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

    <div class="row item first-row item-show">
        <div class="col-12 mt-3">
            <div class="my-form-row text-center">
                <p >First the basics</p>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="mx-5 img-selector">
                        <div class="gender-image img-div">
                            <img src="/images/customer-signup/gender-circle.svg" class="w-100"/>
                            <img src="/images/customer-signup/gender-man.svg" />
                        </div>

                        <input type="radio" id="gender-1" class="img-radio" name="basic-gender" value="male"/>
                        <label for="gender-1">Male</label>
                    </div>

                    <div class="mx-5 img-selector">
                        <div class="gender-image img-div selected">
                            <img src="/images/customer-signup/gender-circle.svg" class="w-100"/>
                            <img src="/images/customer-signup/gender-woman.svg" />
                        </div>
                        <input type="radio" id="gender-2" class="img-radio" name="basic-gender" value="female" checked/>
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
                    <input id="step2-feet" name="height-feet" class="form-control text-answer" type="number" required/>
                </div>

                <div class="my-form-row mx-4 text-left">
                    <label for="step2-inches">*Inches</label>
                    <input id="step2-inches" name="height-inch" class="form-control  text-answer" type="number" required/>
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
                    <input type="radio" id="age-1" name="basic-age" value="18-25" />
                    <label for="age-1" class="select-btn">18-25</label>

                    <input type="radio" id="age-2" name="basic-age" value="26-30" checked/>
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

    <div class="item">
        <div class="my-form-row text-center mx-auto">
            <p>What date do you need your capsule by?<br></p><input type="button" id="basic-asap" class="round-btn p-2" value="ASAP"/>
            <div id="calendar"></div>

            <label for="trip-date" class="text-left">*Date</label>
            <input id="trip-date" class="form-control text-center mx-auto text-answer" name="capsule-date" type="text" placeholder="Please set date." required/>
        </div>
    </div>

    <div class="row item">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Select all events or fashion needs</p>

                <div class="row justify-content-center">
                    <input type="radio" id="event-1" name="basic-event" value="Professional"/>
                    <label for="event-1" class="select-btn">Lounging at home</label>

                    <input type="radio" id="event-2" name="basic-event" value="Happy Hour" checked/>
                    <label for="event-2" class="select-btn">Zoom meeting</label>

                    <input type="radio" id="event-3" name="basic-event" value="Wedding Guest"/>
                    <label for="event-3" class="select-btn">Exercising</label>

                    <input type="radio" id="event-4" name="basic-event" value="Sightseeing"/>
                    <label for="event-4" class="select-btn">Dress up</label>

                    <input type="radio" id="event-5" name="basic-event" value="Sunday Brunch"/>
                    <label for="event-5" class="select-btn">Cozy</label>

                    <input type="radio" id="event-6" name="basic-event" value="Surprise Me"/>
                    <label for="event-6" class="select-btn">Surprise Me</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row item item-select">
        <div class="col-xl-6 col-lg-7 col-md-10 text-center mx-auto">
            <div class="my-form-row">
                <p>Ship my items to</p>

                <div class="row justify-content-center">
                    <input type="radio" id="ship-1" name="basic-ship" data-next="1" value="hotel" checked/>
                    <label for="ship-1" class="select-btn">Hotel</label>

                    <input type="radio" id="ship-2" name="basic-ship" data-next="2" value="airbnb"/>
                    <label for="ship-2" class="select-btn">Airbnb</label>

                    <input type="radio" id="ship-3" name="basic-ship" data-next="3" value="home"/>
                    <label for="ship-3" class="select-btn">Home</label>
                </div>
            </div>
        </div>
    </div>

    <div class="row item end-part" >
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

    <div class="row item end-part">
        <div class="col-12">
            <h5 class="sub-page-title text-center">AirBNB Details</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-reservation-name">*Reservation Name</label>
            <input id="basic-reservation-name" type="text" name="reservation-name" class="form-control" required />
            </div>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" type="text" name="street-address" class="form-control" required />
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
            <input id="basic-zip-code" type="text" class="form-control" name="zip-code" required>
            </div>
        </div>

        <div class="col-3 offset-3">
            <div class="my-form-row">
            <label for="basic-check-in">*Check In</label>
            <input id="basic-check-in" type="text" class="form-control checkDate" name="check-in" required readonly=""/>
            </div>
        </div>

        <div class="col-3">
            <div class="my-form-row">
            <label for="basic-check-out">*Check Out</label>
            <input id="basic-check-out" type="text" class="form-control checkDate" name="check-out" required readonly=""/>
            </div>
        </div>
    </div>

    <div class="row item end-part">
        <div class="col-12">
            <h5 class="sub-page-title text-center">Address</h5>
        </div>

        <div class="col-6 offset-3">
            <div class="my-form-row">
            <label for="basic-street-address">*Street Address</label>
            <input id="basic-street-address" type="text" name="street-address" class="form-control" required />
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
            <input id="basic-zip-code" type="text" class="form-control" name="zip-code" required>
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

@endsection




