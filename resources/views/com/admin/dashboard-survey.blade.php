@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <table id="survey-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Person Type</th>
                <th>Location</th>
                <th>Note</th>
                <th>Time</th>
            @foreach ($header as $question)
                <th>{{ $question->question }}</th>
            @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($person as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->phone }}</td>
                    <td>{{ $row->person_type }}</td>
                    <td>{{ $row->location }}</td>
                    <td>{{ $row->note }}</td>
                    <td>{{ $row->created_at }}</td>
                    @foreach ($header as $question)
                        @if (!isset($list[$row->id][$question->id]))
                            <td></td>
                        @else
                            <td>{{ $list[$row->id][$question->id] }}</td>
                        @endif
                        
                    @endforeach
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
            $("#survey-table").DataTable();
        })
    </script>
@endsection