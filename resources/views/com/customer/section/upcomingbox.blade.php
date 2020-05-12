@extends('com.customer.layout')

@section('content')
  <div class="container first-row">
      @include('com.customer.section.navmenu')
      @yield('upcomingbox')
  </div>
@endsection
