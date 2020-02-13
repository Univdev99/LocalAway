<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Localaway </title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
      <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700"> -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
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
      <link rel="stylesheet" href="css/answer.css">
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
      </style>
    </head>
    <body data-spy="scroll" data-target="#templateux-navbar" data-offset="200">
        @include('frontend.sections.header')
        <section class="site-hero" style="background-image: url(/images/answer.jpg);" data-stellar-background-ratio="0.5" id="section-home">
            <div class="container">
                <div class="row site-hero-inner justify-content-center align-items-center">
                    <div class="col-md-10 text-center" data-aos="fade-up">
                        <span class='text-dark h3'>Looks like  you're heading</span>
                        <span class='d-lg-flex justify-content-center mt-3 align-items-baseline mb-4'>
                            @if ($location != "")
                            <p class='text-dark h4'>to&nbsp</p>
                            <h1 class='color-orange'> {{$location}}&nbsp</h1> 
                            @endif
                            @if ($event != "")
                            <p class='text-dark h4'>for a&nbsp</p> 
                            @if ($event === "Other")
                            <h1 class='color-orange'>
                                <input type="text" class='answer-input color-orange text-center' placeholder = "type here" autof1ocus>
                            </h1>
                            @else
                            <h1 class='color-orange'>{{$event}}</h1>
                            @endif
                            @endif
                        </span>
                        <span class='text-dark answer-tell d-lg-block'>
                            Tell us more about your preferences and <br> we'll send you what you need.
                        </span>
                        <span>
                            <a class="btn btn-brown  text-white mt-4" href="/">Take our Style Quiz</a>
                        </span>
                        <span>
                            <a class="btn-block mt-4 answer-sign font-weight-bold " href="/login">Sign in</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.sections.footer')
        @include('frontend.sections.footer_menu')
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
    </body>
  </html>