<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Localaway</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/aos.css">
        <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/css/jquery.timepicker.css">
        <link rel="stylesheet" href="/css/fancybox.min.css">
        
        <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">

        <!-- Theme Style -->
        <link rel="stylesheet" href="/css/newlanding/style.css">
        <link rel="stylesheet" href="/css/newlanding/localawaycom.css">

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
    </head>
    <body data-spy="scroll" data-target="#templateux-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light px-lg-5" id="templateux-navbar">
        <div class="container-fluid ">
            <a class="navbar-brand" href="/">
                <img class='' src="/images/newlanding/white-logo-ori.svg" width="300" alt="">
            </a>
            <div class="site-menu-toggle js-site-menu-toggle  ml-auto"  data-aos="fade" data-toggle="collapse" data-target="#templateux-navbar-nav" aria-controls="templateux-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>
                <!-- END menu-toggle -->

            <div class="collapse navbar-collapse" id="templateux-navbar-nav">
                <ul class="navbar-nav ml-auto">
                <!-- <li class="nav-item "><a class="nav-link text-white" href="#section-events">Jobs</a></li> -->
                    <!-- <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0 "><a class="nav-link text-white" href="#" target="_blank"><span class="pb_rounded-4 px-4 rounded">Request Access</span></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body p-5 mx-5">
              <form id="request-form">
              @csrf
              <img class="d-lg-block mx-auto my-5 w-100" src="/images/newlanding/logo.png" style="max-width:80px;" alt="">
                <div class="col">
                  <div class="d-flex" style="flex-direction: column;height: 100%;justify-content: space-between;">
                    <h2 class="font-weight-bold mb-4 question text-center congrate title font-orange">Welcome to Local Away</h2>
                    <h5 class="text-center mb-4 font-weight-bold">We are excited to get to know you</h5>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="name" id="name-text" required placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email-text" required placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone-text" placeholder="Phone(Optional)">
                </div>
                <div class="form-group px-4">
                  <label for="message-text" class="col-form-label">I am a..(Please select one)</label><br>
                  <div class="px-3">
                    <input id="radio_stylist" type="radio" name="person_type" value="stylist" required> 
                    <label for="radio_stylist">Brand or Boutique</label><br>
                    <input id="radio_customer" type="radio" name="person_type" value="customer" required>
                    <label for="radio_customer">Customer</label><br>
                  </div>
                </div>

                <div class="form-group">
                  <textarea type="text" class="form-control" name="note" id="note-text" placeholder="Note(Optional)" style="height: 8em;"></textarea>
                </div>
                <!-- <div class="modal-footer"> -->
                  <div class="clearfix text-center">
                    <div class="spinner-border" role="status" style="display:none;">
                      <span class="sr-only">Loading...</span>
                    </div>
                  </div>
                  
                  <div class="text-center mt-4">
                    <input type="submit" id="request-btn"  class="btn btn-primary mx-auto" value="Request Access"/>
                  </div>
                <!-- </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Welcome</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/survey" method='post'>
                @csrf
                <div class="form-group">
                  <!-- <input type="hidden" class="form-control" name="name" id="hidden-name">
                  <input type="hidden" class="form-control" name="email" id="hidden-email"> -->
                  <label for="recipient-name" class="col-form-label" id="modalcontent2">WELCOME TO L/A!</label>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">I'll do survey later</button>
                  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa2" data-whatever="@mdo">Start Survey</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <section class="site-hero-2 overlay" style="background-image: url(/images/newlanding/job.jpg)" data-stellar-background-ratio="0.5" >
        <div class="container-fluid h-100">
            <div class="row site-hero-inner-2 align-items-center h-100">
                <div class="col-lg-5 offset-lg-1 text-center text-lg-left" data-aos="fade-up">
                    <p class="h1 text-white letter-spacing-2">JOIN THE TEAM</p>
                    <div class='mt-5'>
                        <a href='#section-positoin'  class="btn smoothscroll btn-primary text-white py-2 text-uppercase ml-lg-2" >VIEW OPEN POSITION</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="mouse smoothscroll" href="#section-positoin" >
            <div class="mouse-icon">
                <span class="mouse-wheel"></span>
            </div>
        </a>
    </section>
    <!-- END section -->

    <section class="section" id="section-positoin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 text-center align-items-center" data-aos="fade-up">
                    <h1>Open Positions</h1> 
                    <div class="separator color-orange"></div>
                    <p class="mb-5 m-auto text-left"><strong class="text-dark font-weight-bold">Stylist 1:</strong> Hiring expert stylist to provide fashion advice; choosing and co-ordinating outfits and capsule wardrobes for clients and company.
                        <p class='text-left'>
                        <br><strong class="text-dark font-weight-bold"> Role </strong><br>
                        - Keeping up to date with current and changing trends in fashion and design. <br>
                        - Advising clients on fashion styling for their vision. <br>
                        - Selecting the most appropriate pieces from collections and ranges for the customer or company need.
                        </p>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="bg-light" id="section-position">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <div class="separator"></div>
                    <h1>Open Positions</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" data-aos="fade-up">
                    <div class="room">
                        <figure class="img-wrap">
                            <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                            <div class="room-info text-center">
                                <h2 class='text-white'>Stylist 1</h2>
                                <a href="" class='btn btn-primary'>Learn More</a>
                            </div>
                        </figur>
                    </div>
                </div>
                <div class="col-md-6 pb-5" data-aos="fade-up">
                    <div class="room">
                        <figure class="img-wrap">
                            <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                            <div class="room-info text-center">
                                <h2 class='text-white'>Stylist 2</h2>
                                <a href="" class='btn btn-primary'>Learn More</a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="blog-post-entry section bg-green" id="section-events">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h1 class="text-white">Our Values</h1>
                    <div class="separator color-white"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">
                    
                    <div class="media media-custom d-block mb-4 h-100">
                        <div class="media-body">
                            <h2 class="mt-0 mb-3 text-white">Discovery & Community</h2>
                            <p class="text-white">
                                Helping you find the right look by tapping into our community of local boutiques and independent brands
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
                    <div class="media media-custom d-block mb-4 h-100">
                        <div class="media-body">
                            <h2 class="mt-0 mb-3 text-white">Self-Expression</h2>
                            <p class="text-white">
                                Your style, your way. Unique brands and clothing picked just for you
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
                    <div class="media media-custom d-block mb-4 h-100">
                        <div class="media-body">
                            <h2 class="mt-0 mb-3 text-white">Social Responsibility</h2>
                            <p class="text-white">
                                We’re trying to create a new future for fashion rooted in sustainability
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" testimonial-section section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <h1>Meet the team</h1>
                    <div class="separator color-orange"></div>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="testimonial text-center slider-item col-md-4">
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Jen.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>

                    <p class='m-0  font-weight-bold'>Design</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash; Jen Furman</em></p>
                    <p class='m-0  font-weight-bold'>Fashion expert and local stylist</p>
                </div> 

                <div class="testimonial text-center slider-item col-md-4">
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Binwu.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>
                    <p class='m-0  font-weight-bold'>Engineering</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash; Bin Wu</em></p>
                    <p class='m-0  font-weight-bold'>Software Engineer</p>
                </div>

                <div class="testimonial text-center slider-item col-md-4">
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Tina.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>

                    <p class='m-0  font-weight-bold'>Marketing</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash; Tina Awerro</em></p>
                    <p class='m-0  font-weight-bold'>Marketing Expert</p>
                </div>
            </div>
        </div>
    </section>
        
    

    <footer class="section footer-section">
        <div class="container-fluid">
          <div class="row ">
            <div class="col-lg-4 mb-4 mb-md-5">
              <ul class="list-unstyled link m-0">
                <li class="d-flex justify-content-space-evently">
                    <a class="navbar-brand" href="/">
                        <img class='d-none d-md-block' src="/images/newlanding/white-logo.jpg" alt="">
                        <img class='d-md-none' src="/images/newlanding/white-mobile-logo.jpg" alt="" width="60">
                    </a>
                </li>
                <li class="d-flex justify-content-space-evently">
                    <a href="#">Jobs</a>
                    <a href="#">Contact</a>
                </li>
                <li class="d-flex justify-content-space-evently m-0">
                   <a href="#">Privacy</a>
                   <a href="#">Terms</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 mb-5 d-flex justify-content-space-evently  align-items-end">
                <a class="h3 color-brown" href="https://www.instagram.com/localaway/"><span class="fa fa-instagram"></span></a>   
                <a class="h3 color-brown" href="https://twitter.com/local_away"><span class="fa fa-twitter"></span></a> 
                <a class="h3 color-brown" href="https://www.facebook.com/localaway/"><span class="fa fa-facebook"></span></a>    
            </div>
            
            <div class="col-lg-5 mb-5 mt-auto">
                <form class='mt-5 first-form d-lg-flex justify-content-center'>
                  <input type="email" placeholder='Enter Email' class='text-white mail-text mb-4 mb-lg-0'  autofocus >
                  <button type="submit" class="btn btn-primary text-white py-2 text-uppercase ml-lg-2 request-btn"  id ="first-request-btn-2">Request Access</button>
                </form>
            </div>
        </div>
      </footer>
      
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
    <script src="/js/survey/survey.js"></script>
</body>
</html>