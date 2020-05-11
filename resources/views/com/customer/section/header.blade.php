@extends('com.frontend.sections.header')

@section('partner-with-us')
@endsection

@section('menu')
@auth
<li class="nav-item ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
  <a class="nav-link" href="/customer/preferences">
    <span>Preferences</span>
  </a>
</li>
<li class="nav-item ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
  <a class="nav-link" href="/customer/upcoming-boxes">
    <span>Upcoming Boxes</span>
  </a>
</li>
<li class="nav-item ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
  <a class="nav-link" href="/customer/account">
    <span>Account</span>
  </a>
</li>

<li class="nav-item ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0">
  <a class="nav-link" href="/logout">
    <span>Log Out</span>
  </a>
</li>
@endauth
@endsection
