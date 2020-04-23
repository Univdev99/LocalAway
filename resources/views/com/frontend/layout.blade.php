<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>LocalAway </title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
      <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700"> -->
      {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/aos.css">
      <link rel="stylesheet" href="css/bootstrap-datepicker.css">
      <link rel="stylesheet" href="css/jquery.timepicker.css">
      <link rel="stylesheet" href="css/fancybox.min.css">
      <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
      <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
      <!-- Theme Style -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/localawayai.css">
      <style type="text/css">
      @font-face {
          font-family: Avenir-Black;
          src: url("/fonts/Avenir-Black.ttf");
      }

      @font-face {
          font-family: Poppins-Regular;
          src: url("/fonts/Poppins-Regular.ttf");
      }

      @font-face {
          font-family: Barista-Script;
          src: url("/fonts/Barista-Script.otf");
      }
      </style>

      @yield('css')
    </head>
    <body data-spy="scroll" data-target="#templateux-navbar" data-offset="200" class="Frontend">

        @include('com.frontend.sections.access_code')
        @include('com.frontend.sections.request_access_code')
        @include('com.frontend.sections.header')
        @include('com.frontend.sections.hero')
        @include('com.frontend.sections.search')
        @include('com.frontend.sections.itinerary')
        @include('com.frontend.sections.work')
        @include('com.frontend.sections.findus')
        @include('com.frontend.sections.subscribe')
        @include('com.frontend.sections.footer')
        @include('com.frontend.sections.footer_menu')
        @yield('content')
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/jquery.timepicker.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/home.js"></script>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        {{-- @if (config('app.env') == 'local')
            <script src="http://localhost:35729/livereload.js"></script>
        @endif --}}
    </body>
  </html>
