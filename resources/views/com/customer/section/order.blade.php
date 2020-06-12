@extends('com.customer.section.upcomingbox')

@section('css')
    <style type="text/css">
    .return-option {
        visibility: hidden;
    }
    .return-order:checked ~ .return-option {
        visibility: visible;
    }
    </style>
@endsection

@section('upcomingbox')
    <div class="row">
        <div class="col-12">
            <div class="alert my-4 d-flex" style="background-color: #f3f3f3; border-radius: 5px; border-color: #ced4e0;">
                <i class="fa fa-info-circle mr-2 mt-1"></i>
                <div>
                    <strong style="font-weight: 900;">Return policy</strong>
                    <p class="mb-0">
                        <small>
                        Items must be returned within a workweek 7 day window from when they are recieved.
                        If somthing happens and you need help, contact hello@localaway.com 
                        </small>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <p> My Account</p>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between">
                <p>Total Orders: 1</p>
                <p>Return by <span style="color:magenta">(7 days from when received)</span></p>
            </div>
            <form method="post" action="{{ route('com.customer.orders.finalize') }}">
                @csrf
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
                            <td>
                                <p style="color: #02bfaf;">{{ $orders[$i]->name }}</p>
                                Order No: {{ $orders[$i]->order_id }}
                                <br>
                                Date: {{ $orders[$i]->order_date }}
                            </td>
                            @if ($orders[$i]->status == 0)
                                <td>Crafting<td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td></td>
                            @elseif ($orders[$i]->status == 1)
                                <td>
                                    <p style="color: blue;">Shipping</p>
                                    <a href="https://tools.usps.com/go/TrackConfirmAction_input?origTrackNum=9102969010383081813033" target="_blank">Track package</a>
                                <td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td></td>
                            @elseif ($orders[$i]->status == 2)
                                <td>
                                    <input type="radio" name="accept-order-{{ $orders[$i]->id }}" value="accept" id="accept-order-{{ $orders[$i]->id }}" checked />
                                    <label for="accept-order-{{ $orders[$i]->id }}">Accept</label>
                                    <input type="radio" name="accept-order-{{ $orders[$i]->id }}" value="return" class="return-order" id="return-order-{{ $orders[$i]->id }}" />
                                    <label for="return-order-{{ $orders[$i]->id }}">Return</label>
                                    <div class="return-option">
                                        <p>Why are you returning this?
                                        <select>
                                            <option>Size was too big</option>
                                            <option>Size was too small</option>
                                            <option>Wrong item shipped</option>
                                            <option>Didn't like</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td>
                                    <a href="#">Add to return</a>
                                </td>
                            @elseif ($orders[$i]->status == 3)
                                <td><p style="color: green;">Completed</p></td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td></td>
                            @elseif ($orders[$i]->status == 4)
                                <td><p style="color: green;">Return</p></td>
                                <td>${{ $orders[$i]->price }} </td>
                                <td></td>
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

                <button type="submit" class="btn text-white btn-order my-3" style="background-color: #FD5C48; ">Finalize Order</button>
            </form>
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