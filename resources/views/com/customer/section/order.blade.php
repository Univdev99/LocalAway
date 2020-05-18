@extends('com.customer.section.upcomingbox')

@section('upcomingbox')
    <div class="row">
        <div class="col-12">
            <div class="alert alert-dark my-4">
                <strong>Return policy</strong>
                <p class="mb-0">
                    Items must be returned within a workweek 7 day window from when they are recieved.
                    If somthing happens and you need help, contact hello@localaway.com 
                </p>
            </div>
        </div>
        <div class="col-3">
            <h5> My Account</h5>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between">
                <h5>Total Orders: 1</h5>
                <p>Return by <span class="text-danger">(7 days from when received)</span></p>
            </div>
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
                    @for ($i = 0; $i < count($orders); $i++)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td><img src="/images/localaway-box.svg" width="100px"></td>
                            <td><p style="color: #02bfaf;">{{ $orders[$i]->name }}</p>Order No: {{ $orders[$i]->order_id }}<br>Date: {{ $orders[$i]->order_date }}</td>
                            @if ($orders[$i]->status == 0)
                                <td>
                                <p style="color: blue;">Shipping</p>
                                <a href="https://tools.usps.com/go/TrackConfirmAction_input?origTrackNum=9102969010383081813033" target="_blank">Track package</a>
                                <td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td><p class="color: grey;">Return</p></td>
                            @elseif ($orders[$i]->status == 1)
                                <td>
                                    <p>Why are you returning this?
                                    <select>
                                        <option>Size was too big</option>
                                        <option>Size was too small</option>
                                        <option>Wrong item shipped</option>
                                        <option>Didn't like</option>
                                        <option>Other</option>
                                    </select>
                                </td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td>
                                    <a href="#">Add to return</a>
                                </td>
                            @else
                                <td><p style="color: green;">Completed</p></td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td><a href="#">Return</a></td>
                            @endif                            
                        </tr>
                    @endfor
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                Total: ${{ $total }}
                            </td>
                            <td>
                                Request Return Label
                            </td>
                        </tr>
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
            <button type="submit" class="btn text-white btn-order" style="background-color: #FD5C48; ">Order Next Box</button>
        </form>
    </div>
@endsection