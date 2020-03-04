@extends('customer.layout')

@section('content')
<div>
    <div class="row first-row">
        <div class="col-12 col-md-12 d-flex py-5 bg-green">
            @include('frontend.sections.search', ['animate' => false, 'title' => 'Tell us about what\'s next'])
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
        <div class="col-12 col-sm-6 text-center">
            <div class="capsule-on-the-way">
            <p>Hi {{ auth()->user()->first_name }}</p>
            <p class='title'>Upcoming boxes <br> Party in Zurich <br> capsule is on the way!</p>
            {{-- <img class="w-100" src="/images/customer/capsule-on-the-way.png" alt=""> --}}
            </div>
        </div>
        <div class="col-12 col-sm-6 zurich-map">
            <img src="/images/customer/marker.png" class="marker" alt="">
        </div>
    </div>
  </div>
@endsection
