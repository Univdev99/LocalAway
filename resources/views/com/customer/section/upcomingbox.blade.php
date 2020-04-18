@extends('com.customer.layout')

@section('content')
    <div class="row first-row adjust-content">
        <div class="col-12 col-md-12 d-flex py-5 bg-green">
            @include('com.frontend.sections.search', ['animate' => false, 'title' => 'Tell us about what\'s next'])
          </div>
        {{-- <div class="col-">
            <div class="col-12 col-md-4 contact-your-stylist-section px-4 py-5">
              <p class="contact-your-stylist">Contact your Stylist</p>
              <div class="bg-white p-3">
                <p class="text-gray mb-0">Notes</p>
                <textarea style="width: 100%; height: 8em; border: 0"></textarea>
              </div>
              <div class="text-right">
                <button class="btn text-white round-btn px-3 py-2 mt-3">Next Section</button>
              </div>
            </div>

        </div> --}}
        <div class="col-12 text-center">
            <div class="capsule-on-the-way">
                <h2>Your box is on the way!</h2>

            </div>
        </div>
        {{-- <div class="col-12 col-sm-6 zurich-map">
            <img src="/images/customer/marker.png" class="marker" alt="">
        </div> --}}
    </div>
@endsection
