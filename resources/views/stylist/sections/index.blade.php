@extends('stylist.layout')

@section('content')

<div class="dashboard">
    <div class='notify'>
      <p class='mb-0 text-black welcome-back'>Welcome back, {{ auth()->user()->first_name }}</p>
      <p class='mb-0 new-client-hint'>You might have a new client!</p>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-4 london-fashion-week">
      <p class='title'>#LondonStreetStyle</p>
      <p class='big-title'>Street style from London Fashion Week</p>
      <p>
        Lorem ipsum dolor sit amet, consecteru adipiscing elit , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam
        Lorem ipsum dolor sit amet, consecteru adipiscing elit , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam
        Lorem ipsum dolor sit amet, consecteru adipiscing elit , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam
      </p>

      <div class='text-center'>
        <button class='btn round-btn'>Shop the Look</button>
      </div>
    </div>
    <div class="col-12 col-md-8 p-4 d-flex">
      <div class='m-auto'>
        <p class='london-street-style'>#LondonStreetStyle</p>
        <div class="d-flex flex-row flex-wrap justify-content-center">
          <img class="london-style-img" src="/images/stylist/1.png" alt="">
          <img class="london-style-img" src="/images/stylist/2.png" alt="">
          <img class="london-style-img" src="/images/stylist/3.png" alt="">
          <img class="london-style-img" src="/images/stylist/4.png" alt="">
          <img class="london-style-img" src="/images/stylist/5.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class='py-5'>
    <p class='capsule-archive'>Capsule Archive</p>
    <div class="d-flex flex-wrap capsule-archive-gallery justify-content-center">
      <img src="/images/stylist/capsule-1.png" alt="">
      <img src="/images/stylist/capsule-2.png" alt="">
      <img src="/images/stylist/capsule-3.png" alt="">
      <img src="/images/stylist/capsule-4.png" alt="">
    </div>
  </div>

  @endsection
