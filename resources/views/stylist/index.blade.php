<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Localaway </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
      <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700"> -->
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/animate.css">
      <link rel="stylesheet" href="/css/owl.carousel.min.css">
      <link rel="stylesheet" href="/css/aos.css">
      <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="/css/jquery.timepicker.css">
      <link rel="stylesheet" href="/css/fancybox.min.css">
      <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
      <!-- Theme Style -->
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="css/localawayai.css">
      <link rel="stylesheet" href="/css/stylist/index.css">
      <style type="text/css">
      @font-face {
          font-family: Avenir-Black;
          src: url("/fonts/Avenir-Black.ttf");
      }
      
      @font-face {
          font-family: Poppins-Regular;
          src: url("/fonts/Poppins-Regular.ttf");
      }
      </style>

      @yield('css')
    </head>
    <body data-spy="scroll" data-target="#templateux-navbar" data-offset="200" class="Frontend About">
      @include('stylist.header')

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


      @include('frontend.sections.footer')
      @include('frontend.sections.footer_menu')
      
      @yield('content')
      <script src="/js/jquery-3.3.1.min.js"></script>
      <script src="/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/owl.carousel.min.js"></script>
      <script src="/js/jquery.stellar.min.js"></script>
      <script src="/js/jquery.fancybox.min.js"></script>
      <script src="/js/jquery.easing.1.3.js"></script>
      <script src="/js/aos.js"></script>
      <script src="/js/bootstrap-datepicker.js"></script> 
      <script src="/js/jquery.timepicker.min.js"></script> 
      <script src="/js/main.js"></script>
      <script src="/js/home.js"></script>
      @if (config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
      @endif
    </body>
  </html>