@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <table id="customer-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Receive Text Alert</th>
                <!-- <th>Hear Us From</th> -->
                <th>Dress</th>
                <th>Gender</th>
                <th>Metric</th>
                <th>Height</th>
                <th>Mother</th>
                <th>Body Type</th>
                <th>Photo</th>
                <th>Casual Shirts, Fit</th>
                <th>Button Up Shirts, Fit</th>
                <th>Bra</th>
                <th>Waist</th>
                <th>Inseams</th>
                <th>Jeans</th>
                <th>Skirt</th>
                <th>Dress Style</th>
                <th>Shorts, Fit</th>
                <th>Shoe</th>
                <th>Dislike Color</th>
                <th>Dislike Material</th>
                <th>Dislike Pattern</th>
                <th>Capsule</th>
                <th>Capsule Spend</th>
                <th>Social</th>
                <th>Notes</th>
                <th>Plan</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($customers as $key => $c)
            <tr>
                <td>{{ $key }}</td>
                <td>@if ($c->user){{ $c->user->first_name }} {{ $c->user->last_name }}@endif</td>
                <td>@if ($c->user){{ $c->user->email }}@endif</td>
                <td>@if ($c->user){{ $c->user->phone_number }}@endif</td>
                <td>{{ $c->receive_alert ? 'Y' : 'N' }}</td>
                <!-- <td>{{ $c->hear_us }}</td> -->
                <td>{{ $c->dress }}</td>
                <td>{{ $c->gender == 'woman' ? 'F' : 'M' }}</td>
                <td>{{ $c->metric == 1 ? 'Y' : 'N' }}</td>
                <td>{{ $c->height_feet }}' {{ $c->height_inch }}"</td>
                <td>{{ $c->mother == 1 ? 'Y' : 'N' }}</td>
                <td>{{ $c->gender == 'woman' ? $c->women_body_type : $c->men_body_type }}</td>
                <td>
            @if ($c->photo)
                    <a href="/storage/{{ $c->photo }}"><img src="/storage/{{ $c->photo }}" style="width: 50px" /></a>
            @endif
                </td>
                <td>{{ $c->casual_shirts }}, {{ $c->casual_shirts_fit }}</td>
                <td>{{ $c->button_up_shirts }}, {{ $c->button_up_shirts_fit }}</td>
                <td>{{ $c->bra }}</td>
                <td>{{ $c->waist }}</td>
                <td>{{ $c->inseams }}</td>
                <td>{{ $c->jeans }}</td>
                <td>{{ $c->skirt }}</td>
                <td>{{ $c->dress_style }}</td>
                <td>{{ $c->shorts }}, {{ $c->shorts_fit }}</td>
                <td>{{ $c->shoe }}</td>
                <td>
            @if ($c->dislike_color)
                @foreach (explode("|", $c->dislike_color) as $color)
                    <span style="display: inline-block; border-radius: 100%; width: 1rem; height: 1rem; background-color: {{ $color }}"></span>
                @endforeach
            @endif
                </td>
                <td>{{ $c->dislike_material }}</td>
                <td>{{ $c->dislike_pattern }}</td>
                <td>{{ $c->capsule }}</td>
                <td>{{ $c->capsule_spend }}</td>
                <td>
            @if ($c->instagram)
                    <a href="{{ $c->instagram }}">{{ $c->instagram }}</a>
            @endif
            @if ($c->twitter)
                    <a href="{{ $c->twitter }}">{{ $c->twitter }}</a>
            @endif
            @if ($c->pinterest)
                    <a href="{{ $c->pinterest }}">{{ $c->pinterest }}</a>
            @endif
            @if ($c->linkedin)
                    <a href="{{ $c->linkedin }}">{{ $c->linkedin }}</a>
            @endif
                </td>
                <td>{{ $c->notes }}</td>
                <td>{{ $c->plan }}</td>
                <td>{{ $c->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('page_vendor_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

@endsection

@section('page_scripts')
    <script>
        $(document).ready(function() {
            $("#customer-table").DataTable();
        })
    </script>
@endsection