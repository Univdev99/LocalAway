<section class="section-search pb-0"  >
  <div class="container">
    <div class="row check-availabilty" id="next">
      <div class="block-32" @if (!isset($animate) || $animate) data-aos="fade-up" data-aos-offset="-200" @endif>
        @csrf
        <div class = "row">
          <div class="col">
            <p class='h3 text-black search-title'>@if (isset($title)) {{ $title }} @else Tell us about what  you need @endif</p>
            <p>Weekly wardrobe? Date night? We’ve got you covered.</p>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-10 mb-3 mb-lg-0 ">
            <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0 px-0 pr-lg-3">
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
              </div>

              <div class="col-lg-4 mb-3 mb-lg-0 px-0 pr-lg-3">
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <div class = "picker-wrapper">
                    <i class="fas fa-map-marker-alt form-item"></i>
                    <select name="location" id="adults" class="form-control pl-5">
                      <option class='text-black font-weight-bold' placeholder="" value="" hidden>Location</option>
                      <option value="zurich-ch">Zurich, CH</option>
                      <option value="austin-us">Austin, US</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3 mb-lg-0 px-0">
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="event_date" value="{{ date('m/d/Y') }}" class="form-control" placeholder="Date">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2">
            <a href="{{ route('customer.signup') }}" class="btn btn-block text-white btn-brown px-0">Let's Go!</a>
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