@extends('com.customer.section.upcomingbox')

@section('upcomingbox')
    <div class="row">
        <div class="col-3">
            <h5> My Account</h5>
        </div>
        <div class="col-9">
            <h5>Total Orders: 1</h5>
            <table id="order-table" style="width:100%">
                {{-- <thead>
                    <tr>
                        <th>#</th>
                        <th>Icon</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Person Type</th>
                        <th>Location</th>
                        <th>Note</th>
                        <th>Time</th>
                    </tr>
                </thead> --}}
                <tbody>
                    {{-- @foreach ($person as $row) --}}
                        <tr>
                            <td>1</td>
                            <td><img src="/images/localaway-box.svg" width="100px"></td>
                            <td><p style="color: #02bfaf;">LocalAway Discovery Box</p>Order No: 000546456<br>Date</td>
                            <td><p style="color: blue;">Shipped</p> <p class="">Track package</p></td>
                            <td>$19.00 </td>
                            <td>Return</td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="row text-center m-auto">
        <form class="text-center order-form" action="{{ route('customer.signup.payment') }}" method="get">
            <h3> Order another box?</h3>
            <p>For you or a gift: simply adjust any preferences or just add a note for your stylist.</p>
            <div class="m-auto text-center">
                <textarea name="notes" class="form-control my-4 mx-auto notes-order" placeholder="Add a note for the stylist."></textarea>
            </div>
            <button type="submit" class="btn text-white btn-order" style="background-color: #FD5C48; ">Order Discovery Box</button>
        </form>
    </div>
@endsection