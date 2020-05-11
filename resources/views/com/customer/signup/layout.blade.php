<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Sign Up </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="/images/orange-logo.png" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">

  <!-- Custom Font Style -->
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
<body class="signup-body">


        @include('com.customer.signup.header')

        @yield('content')

        @include('com.frontend.sections.footer')
        @include('com.frontend.sections.footer_menu')


  <script type="text/javascript" src="/js/dropzone.js"></script>
  <script src="/js/jquery-3.3.1.min.js"></script>
  <script src="/js/customer/customer-signup-quiz.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.nl.min.js"></script>
  @yield('js')
</body>
</html>
