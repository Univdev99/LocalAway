@extends('com.customer.section.upcomingbox')

@section('upcomingbox')
    <div class="row adjust-content">
        <div class="col-12 col-md-12 d-block py-5 bg-green text-center m-auto">
            <p class="text-white m-0">Almost there, finish the style quiz!</p>
        </div>
        <div class="step-show m-4">
          @if ($complete == 0)
            <img src="/images/customer-signup/progress-basic.svg" class="w-100"/>
          @elseif($complete == 1)
            <img src="/images/customer-signup/progress-sizing.svg" class="w-100"/>
          @elseif($complete == 2)
            <img src="/images/customer-signup/progress-style.svg" class="w-100"/>
          @elseif($complete == 3)
            <img src="/images/customer-signup/progress-payment.svg" class="w-100"/>
          @endif
        </div>
        <div class="col-12 col-sm-6 m-auto text-center">
          <img class="order-box" src='/images/localaway-box.svg' >
        </div>
        <div class="text-center m-auto">
          <a href="{{ route('customer.signup.tracking') }}" class="btn text-white btn-quiz" style="background-color: #FD5C48; width:200px;">CONTINUE -></a>
        </div>
    </div>
@endsection