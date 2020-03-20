<section class="site-hero first-row" style="background-image: url(/storage/uploads/{{$hero->filename}})" data-stellar-background-ratio="0.5" id="section-home">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md text-center" data-aos="fade-up">
                <h1 class="heading">{{$hero->title}}</h1>
            </div>
        </div>
        <section class="section-search m-auto" >

    <div class="check-availabilty" id="next">

      <div class="block-32" @if (!isset($animate) || $animate) data-aos="fade-up" data-aos-offset="-200" @endif>
        @csrf
        <div class="row search_head">
            <h4>START HERE</h4>
        </div>
        <div class="row ml-0">
            <div style="height:5px;width:100%;background-color:lightgray;"></div>
            <div class="progress-value"></div>
        </div>
        <div class="block-padding">
            <div class="row">
                <div class="col">
                    <p class='h3 text-black search-title font-weight-bold'>@if (isset($title)) {{ $title }} @else Locally packed & personalized for any occation. @endif</p>
                    <p>Wandering or Work event? We have you covered, just tell us when you need it by.</p>
                </div>
            </div>

            <div class="row">
                    {{-- <div class="col-lg-4 mb-3 mb-lg-0 px-0 pr-lg-3">
                        <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <div class = "picker-wrapper">
                            <i class="far fa-calendar-alt form-item"></i>
                            <select name="event" id="evnet" class="form-control pl-5">
                            <option class='text-black font-weight-bold' placeholder="Event Type" value="" hidden>Event Type</option>
                            <option value="holiday-party">Holiday Party</option>
                            <option value="new-year-eve">New Year's Eve</option>
                            <option value="work-to-happy-hour">Work to Happy Hour</option>
                            <option value="meeting">Meeting</option>
                            <option value="date-night">Date Night</option>
                            <option value="winter-weeekend">Winter Weekend</option>
                            </select>
                        </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="field-icon-wrap">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <div class = "picker-wrapper">
                            <i class="fas fa-map-marker-alt form-item"></i>
                            <select name="location" id="adults" class="form-control pl-5">
                            <option class='text-black' placeholder="" value="" hidden>Location</option>
                            <option value="zurich-ch">Zurich, CH</option>
                            <option value="austin-us">Austin, US</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="field-icon-wrap">
                        <i class="far fa-calendar-alt form-item"></i>
                        <input type="text" id="event_date" class="form-control pl-5" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                        <a href="{{ route('customer.signup.account') }}" class="btn text-white btn-brown">Let's Go!</a>
                    </div>
            </div>

            <div class="row pt-3 d-none">
            <div class="col d-flex">
                <div class="checkbox">
                <label>
                    <input type="checkbox">
                    <span class="cr">
                    <i class="cr-icon fa fa-check"></i>
                    </span>
                    I am traveling for work.
                </label>
                </div>
            </div>
            </div>
        </div>
      </div>

    </div>
</section>
    </div>
</section>
<!-- END section -->
