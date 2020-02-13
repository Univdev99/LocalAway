<!DOCTYPE HTML>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Localaway</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
      <!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700"> -->

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light px-lg-5 " id="templateux-navbar">
      <div class="container-fluid">
        <a class="navbar-brand m-auto m-lg-0" href="/newlanding">
          <img class='logo-image' src="/images/newlanding/white-logo.svg" width="300" alt="">
        <!-- </a>
        <div class="site-menu-toggle js-site-menu-toggle  ml-auto"  data-aos="fade" data-toggle="collapse" data-target="#templateux-navbar-nav" aria-controls="templateux-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
              <span></span>
            </div> -->
            <!-- END menu-toggle -->

        <div class="collapse navbar-collapse" id="templateux-navbar-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a class="nav-link text-black font-weight-bold" href="/job">Jobs</a></li>
            <!-- <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0 "><a href ="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="nav-link text-white" ><span class="pb_rounded-4 px-4 rounded">Request Access</span></a></li> -->
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

      <section class=''>
        <div class="container-fluid">
          <div class="row site-hero-inner align-items-center">
            <div class="col-12 col-lg-5 bg-green h-100 d-flex p-lg-5 align-items-center">
              <div class="m-auto m-lg-0">
                <div class="text-left" data-aos="fade-up">
                  <h1 class="hero-title display-4 text-white mt-5" >Capsule wardrobes<br> with a conscience</h1>
                  <form class='mt-5 first-form d-lg-flex'>
                    <input type="email" placeholder='Enter Email' class='text-white mail-text mb-4 mb-lg-0'  autofocus >
                    <button type="submit" class="btn btn-primary text-white py-2 text-uppercase ml-lg-2 request-btn"  id ="first-request-btn">Request Access</button>
                  </form>
                  <p class="h4 text-white mt-5">Personalized styles delivered, locally or away.</p>
                </div>
              </div>
            </div>
            <div class="d-none d-lg-block col-12 col-lg-7 site-hero overlay" style="background-image: url(/images/newlanding/hero_4.jpg)" data-stellar-background-ratio="0.5" id="section-home">
            </div>

          </div>
        </div>
            <img class='d-block d-lg-none w-100' src="/images/newlanding/hero_4.jpg" alt="">
      </section>
      <!-- END section -->

      <section class="section" id="section-about" style='background: #F7F7F7;'>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 text-center align-items-center" data-aos="fade-up">
              <h1>Not just another box of style
                <!-- <platform class="mb-4">
                  LocalAway is more because …
                </h3>  -->
              </h1>
              <div class="separator color-orange"></div>
              <p class="mb-5 col-lg-5 m-auto text-center ">Be part of this community of over 3K shops, unique brands, and amazing vintage boutiques.
                <br><br> We set out to  bring local brands online, and the online community back to the locals, so you can support your city not to get swept away by the big brands.
                <br><br>Keep your city in style
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-brown" id="introduction">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-6 m-auto ml-auto order-2 order-lg-1 position-relative p-0 platform" data-aos="fade-up">
            </div>
            <div class="col-md-12 col-lg-6 order-1 order-lg-2 " data-aos="fade-up">
              <div class="col-lg-10 m-auto">
              <div class="separator color-orange ml-0"></div>
                <h1 class="mb-4 order-1 text-white">A simple platform designed with you in mind</h1>
                <p class="mb-5 order-3 text-white">
                  Our platform is easy to use and built to help you find the right outfit for every occasion<br><br>
                  Get access to our AI technology that creates a unique capsule wardrobe personalized for you from amazing local brands.
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="bg-white  " id="clothes">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-6  ml-auto order-lg-1 position-relative p-0 clothes" data-aos="fade-up">
            </div>
            <div class="col-md-12 col-lg-6 order-lg-2 " data-aos="fade-up">
              <div class="col-lg-10 m-auto">
              <div class="separator color-green ml-0"></div>
                <h1 class="mb-4 order-1 color-brown">Styles with so much attention to detail deserve a little extra </h1>
                <p class="mb-5 order-3 text-black">
                  Gain access to a global audience and valuable customer preferences through our AI data platform <br><br>
                  Learn more about your customers and what they like so you can create an even better fashion experience for them 
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="bg-orange" id="package">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-6 m-auto ml-auto  order-2 position-relative p-0 package" data-aos="fade-up">
            </div>
            <div class="col-md-12 col-lg-6 order-1 " data-aos="fade-up">
              <div class="col-lg-10 m-auto">
              <div class="separator color-white ml-0"></div>
                <h1 class="mb-4 order-1 text-white">Beautifully packaged, and always sustainable</h1>
                <p class="mb-5 order-3 text-white">
                  Packaged with recyclable materials, all parcels are insured. <br><br>
                  We do all the work, so you don’t need to do the worrying.<br><br>
                  Fashion always looks forward, and we’re excited to have you on this journey with us.
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      
      <section class="section bg-white pb-lg-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 align-items-center" data-aos="fade-up">
              <p class='text-left font-orange quotion' style='line-height: 1em;'>"</p>
              <div class='px-4'>
                <p class='font-weight-bold text-black'>Jen Furman,
                  </p>
                  <p>
                    Independent Brand/Stylist <br><br>
                    ”I love how easy it is to get my new styles to a global audience”
                  </p>
                </div>
              <p class='text-right font-orange quotion'>"</p>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-white " id="partner">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="d-none d-lg-block col-lg-6 m-auto ml-auto order-lg-2 position-relative p-0 " data-aos="fade-up">
              <img src="/images/newlanding/apple.png" width="100%" alt="">
            </div>
            <div class="col-md-12 col-lg-6 order-lg-1 " data-aos="fade-up">
              <div class="col-lg-10 m-auto">
                <div class="separator color-green ml-0"></div>
                <h1 class="mb-4 order-1 font-orange">Be a Part of the Revolution</h1>
                <p class="mb-5 order-3 text-black">
                  Fashion always looks forward, so why shouldn’t we? <br><br>
                  Packaged with sustainability in mind, we work with local couriers to deliver great capsule wardrobes <br><br>
                  Fashion with a conscience - this is the new normal we’re striving for, join us.
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="bg-white section pt-0 ">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="d-none d-lg-block col-lg-6 m-auto ml-auto order-lg-1 position-relative p-0" data-aos="fade-up">
              <img src="/images/newlanding/survey.png" width="100%" alt="">
            </div>
            <div class="col-md-12 col-lg-6 order-lg-2 " data-aos="fade-up">
              <div class="col-lg-10 m-auto">
                <div class="separator color-orange ml-0"></div>
                <h1 class="mb-4 order-1 font-brown">Get to know your audience, down to last detail</h1>
                <p class="mb-5 order-3 text-black">
                  Empowering you to get to know your audience even better through our AI data platform <br><br>
                  Get access to a global audience and data to help you create a better experience for your customers <br><br>
                  Data that gets you more sales and keeps your customers happy.

                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="section bg-white" id="chain">
        <div class="container-fluid h-100">
          <div class="row align-items-center h-100">
            <div class="col-md-12 col-lg-6 order-lg-1  p-2 " data-aos="fade-up">
              <div class="col-lg-8 p-lg-5 m-lg-auto p-3 chain-content">
                <h1 class="mb-4 order-1 text-black">The future is a sustainable supply chain</h1>
                <div class="separator color-green ml-0"></div>
                <p class="mb-5 order-3 text-black">
                  And you can be a part of it. <br><br>
                  Walks-ins are great, but what if the customer came to you? <br><br>
                  Showing customers the future of fashion through the power of local boutiques <br><br>
                  Local, easy to find and always memorable <br><br>
                  Everything delivered, easy return process - all of the fun, none of the fuss.

                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" >
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-6 order-lg-1 order-1 p-0 " data-aos="fade-up">
              <img src="/images/newlanding/phones.jpg" width="100%" alt="">
            </div>
            <div class="col-md-12 col-lg-6 section order-lg-2 order-2 py-5" data-aos="fade-up">
              <div class="col-lg-8 m-auto">
                <p class=" h4 text-black text-center">
                <br><br>  
                Our stylists use the AI tools to curate unique looks from inventory of over 2K boutiques and independent brands. <br><br>
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      
      <section class="bg-green section" id="contact">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-6 order-lg-1" data-aos="fade-up">
              <div class="col-lg-10 m-auto text-center">
                <h1 class="mb-5 h1 text-white text-center">
                  Get early access<br> to the platform
                </h1>
                <form class='mt-5 first-form'>
                  <input type="email" placeholder='Enter Email' class='text-white mail-text mb-4'  autofocus >
                  <button type="submit" class="btn btn-primary text-white py-2 text-uppercase ml-lg-2 request-btn"  id ="first-request-btn-2">Request Access</button>
                </form>
              </div>
            </div>
            <div class="d-none d-lg-block col-md-12 col-lg-6 order-lg-2 p-5" data-aos="fade-up">
              <div class="col-lg-8 m-auto">
                <p class="mb-5 h5 text-white text-left">
                Capsule wardrobes with a conscious. <br><br>
                Personalized styles delivered, locally or away.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="bg-light py-5" id="quote">
        <div class="container-fluid quotes quotes-1 update-navbar-white update-navbar-show-button update-navbar-hide-take-me-to-superhuman">
        <div class="row background">
            <div class=""></div>
            <div class="col-xs-offset-1 col-xs-10  col-md-6 col-lg-6 m-0 mb-4">
              <div class="quote quote-1 wow fadeInUp" style="visibility: visible;" data-aos="fade-up">
                <div class="image"></div>
                <div class="quote-container">
                  <div class="bar"></div>
                  <div class="quote-mark-container">
                    <div class="quote-mark"></div>
                  </div>
                  <div class="quote-body">
                    <div>Localaway is the best Platform app I've ever seen.  It's about time.</div>
                  </div>
                  <div class="attribution">
                    <div>
                      Alex Fries, VC<br>
                      Owner of Local Boutique
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-offset-1 col-xs-10 col-sm-offset-3  col-md-offset-5 col-md-6 col-lg-offset-6 col-lg-6 m-0">
              <div class="quote quote-2 wow fadeInUp" style="visibility: visible;" data-aos="fade-up">
                <div class="image"></div>
                <div class="quote-container">
                  <div class="bar"></div>
                  <div class="quote-mark-container">
                    <div class="quote-mark"></div>
                  </div>
                  <div class="quote-body">
                    <div>I love how easy it is to get my new styles to a global audence…</div>
                  </div>
                  <div class="attribution">
                    <div>
                      Jen Furman<br>
                      Independent Brand/Stylist
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section class=" testimonial-section section">
        <div class="container-fluid">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-7">
                    <div class="separator"></div>
                    <h1>Meet the founders</h1>
                </div>
            </div>
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="testimonial text-center slider-item col-md-6 col-lg-3 pl-lg-5 pr-lg-0 mb-5">
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Julia.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>

                    <p class='m-0  font-weight-bold'>Founder, CEO</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash;Julia Peter</em></p>
                    <p class='m-0  font-weight-bold'>Formerly Google Search, Google Travel, Facebook AI, and Sony Corporation</p>
                </div> 

                <div class="testimonial text-center slider-item col-md-6 col-lg-3 pr-lg-5 pl-lg-0 mb-5">
                    <div class='vertical-divider d-none d-lg-block'></div>
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Lukas.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>
                    <p class='m-0  font-weight-bold'>Co-Founder, COO</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash;Dr. Lukas Peter</em></p>
                    <p class='m-0  font-weight-bold'>Former founder of two startups with one exit. Now CEO of Swisscom Outposts in Berlin, China, and Silicon Valley.</p>
                </div>
                <div class="testimonial text-center slider-item col-md-6 col-lg-3 pl-lg-5 pr-lg-0 mb-5">
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Brigitte.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>

                    <p class='m-0  font-weight-bold'>Technical Advisor</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash; Brigitte Harder</em></p>
                    <p class='m-0  font-weight-bold'> Google Travel and Maps, Google Local Search, and Google VR</p>
                </div>


                <div class="testimonial text-center slider-item col-md-6 col-lg-3 pr-lg-5 pl-lg-0 mb-5">
                    <div class="author-image mb-3">
                    <img src="/images/newlanding/Ahmad.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>

                    <p class='m-0  font-weight-bold'>Technical Advisor</p>
                    <p class="font-weight-bold text-black  m-0"><em>&mdash; Dr. Ahmad Byagowi </em></p>
                    <p class='m-0  font-weight-bold'> Founder of ArdulMU, Former CEO of UMSATS and CTO of YMT currently Facebook Network Architect</p>
                </div> 
            </div>
            <div class='row justify-content-center text-center mt-4'>
              <a href="/job" class="btn text-white">Join the team</a>                
            </div>
        </div>
    </section>



      <!-- <section class="" id="quiz">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-5 m-auto ml-auto order-2 order-lg-1 position-relative" data-aos="fade-up">
              <img src="/images/newlanding/survey.png" alt="Image" class="img-fluid quiz-img">
            </div>
            <div class="col-md-12 col-lg-7 order-lg-2 order-1 p-5" data-aos="fade-up">
              <div class="col-lg-8 m-auto">
                <div class="separator m-0"></div>
                <h1 class="mb-5 text-white">Watch and manager sales on the go</h1>
                <p class="h5 text-white">
                  Access to customers preferecnes through an AI Data platform.
                  Letting you know more about your customers helps to incrase sales and make them happy.
                  Win Win. 
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="" id="watch">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-5 m-auto ml-auto order-2 order-lg-2 position-relative" data-aos="fade-up">
            </div>
            <div class="col-md-12 col-lg-7 order-lg-1 order-2 p-5" data-aos="fade-up">
              <div class="col-lg-8 m-auto">
                <div class="separator m-0"></div>
                <h1 class="mb-5 text-grey">Watch and manager sales on the go</h1>
                <p class="h5 text-grey">
                  Access to customers preferecnes through an AI Data platform.
                  Letting you know more about your customers helps to incrase sales and make them happy.
                  Win Win. 
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="" id="client">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-5 m-auto ml-auto order-2 order-lg-1 position-relative" data-aos="fade-up">
              <img src="/images/newlanding/survey.png" alt="Image" class="img-fluid quiz-img">
            </div>
            <div class="col-md-12 col-lg-7 order-lg-2 order-1 p-5" data-aos="fade-up">
              <div class="col-lg-8 m-auto">
                <div class="separator m-0"></div>
                <h1 class="mb-5 text-black">Watch and manager sales on the go</h1>
                <p class="h5 text-black">
                  Localaway expands clientele by reaching a broader market
                  Boutiques rely on walk-ins and word of mouth
                  Why leave sales up to chance?
                  Localaway provides greater platform to reach a wider audience
                  Localaway allows boutiques to introduce their products to customers who are open to shopping boutiques, care about indie brands, and want sustainable fashion 
                </p>
                <p class="text-black">200 boutiques said: x</p>
                

              </div>
            </div>
            
          </div>
        </div>
      </section>

      <section class="bg-light" id="blog">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-lg-5 m-auto ml-auto order-lg-2 position-relative p-0" data-aos="fade-up">
              <img src="/images/newlanding/hero_6.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="co2-md-12 col-lg-7 order-lg-1 p-5" data-aos="fade-up">
              <div class="col-lg-10 m-auto">
                <div clas1="separator m-0"></div>
                <h1 class="mb-4 ">
                  “Lorem ipsum dolar amit. 4K people liked this post on Facebook. The movement is happening.
                </h1>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      
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
                </li>
                <li class="d-flex justify-content-space-evently m-0">
                  <a href="#">Contact</a>
                </li>
                <li class="d-flex justify-content-space-evently m-0">
                   <a href="#">Privacy</a>
                </li>
                <li class="d-flex justify-content-space-evently m-0">
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