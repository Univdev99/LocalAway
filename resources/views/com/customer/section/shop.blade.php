@extends('com.customer.section.upcomingbox')

@section('upcomingbox')
    <div class="col-12 col-md-12 d-block py-3 bg-green text-center m-auto">
        <p class="text-white m-0">Your Style Capsule is on the way!</p>
    </div>
    <div class="row text-center m-auto">
        <form class="text-center form-shop" action="{{ route('customer.signup.payment') }}" method="get">
            <h3> What's next?</h3>
            <p>Simply adjust any preferences or just add a note for your stylist.</p>
            <img src="/images/localaway-box.svg" width="300px">
            <div class="m-auto text-center">
                <textarea name="notes" class="form-control my-4 mx-auto notes-shop" placeholder="Add a note for the stylist."></textarea>
            </div>
            <button type="submit" class="btn text-white btn-order" style="background-color: #FD5C48; ">Order Discovery Box</button>
        </form>
    </div>
@endsection