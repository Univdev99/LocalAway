@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@endsection

@section('content')

    <table id="survey-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Birthday</th>
                <th>Location</th>
                <th>Notes</th>
                <th>Created Time</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @for ($row = 0 ; $row < Count($stylists); $row++)
                <tr>
                    <td>{{ $row + 1 }}</td>
                    <td>{{ $stylists[$row]->user->first_name }} {{ $stylists[$row]->user->last_name }}</td>
                    <td>{{ $stylists[$row]->user->email }}</td>
                    <td>{{ $stylists[$row]->user->phone }}</td>
                    <td>{{ $stylists[$row]->user->birthday }}</td>
                    <td>{{ $stylists[$row]->user->location }}</td>
                    <td>{{ $stylists[$row]->notes }}</td>
                    <td>{{ $stylists[$row]->created_at }}</td>
                    <td>
                        @if ($stylists[$row]->status == 1)
                            <button class="btn btn-success boutique-active" data-email="{{ $stylists[$row]->user->email }}">active</a>
                        @else
                            <button class="btn btn-secondary boutique-inactive" data-email="{{ $stylists[$row]->user->email }}">inactive</a>
                        @endif
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection

@section('page_vendor_scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

@endsection

@section('page_scripts')
    <script src="/js/dashboard.js" type="text/javascript"></script>
@endsection