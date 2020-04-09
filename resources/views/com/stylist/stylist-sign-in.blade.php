<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="/css/stylist-sign.css">
    <!-- Theme Style -->
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
  <body>
      <div class="container-fluid ">
          <div class='row' id="logo">
              <a class="logo" href="/">
                  <img class="d-lg-block" src="/images/logo.png" alt="logo">
                  <!-- <img class="d-block d-lg-none" src="/images/orange-logo.jpg" alt="mobile-logo">   -->
              </a>
          </div>
          <div class="row signup">
              <div class="col-lg-7 my-auto">
                  <div class="row">
                      <div class="col-10 col-lg-8 offset-lg-2 offset-1 my-4">
                          <div class="d-flex" style="flex-direction: column;height: 100%;justify-content: space-between;">
                              <form id="stylist-signup" action="/stylist/signup" method="post" enctype="multipart/form-data">
                                  @csrf
                                  {{-- <div id="step-1">
                                      <h1 class="font-weight-bold mb-5 title">Are you representing a retail brand, boutique or are an independant stylist?</h1>
                                      <label class="radio-container mb-4">
                                          Boutique/Brand
                                          <input type="radio" value="boutique" name="stylist-type" id="boutique" checked>
                                          <span class="checkmark">
                                              <i class="fas fa-check  check-sign"></i>
                                          </span>
                                      </label>
                                      <label class="radio-container">
                                          Independent
                                          <input type="radio" value="independent" name="stylist-type" id="independent">
                                          <span class="checkmark">
                                              <i class="fas fa-check  check-sign"></i>
                                          </span>
                                      </label>
                                      <div class="d-flex justify-content-end" style="margin-top: 7em;">
                                          <div>
                                            <a class="btn circle-btn btn-primary text-white font-weight-bold py-3 mb-4" id="step1">
                                            Next Section
                                            </a>
                                            <span class="d-block opacity-25">I'm already part of the team! Sign in ...</span>
                                          </div>
                                      </div>
                                  </div> --}}

                                  <div id="step-2-boutique" class="mt-5 step-2">
                                      <h1 class="font-weight-bold mb-5 title">We're excited to partner with you!<br>Welcome to the future of sustainable supply chain.</h1>
                                      <div class="">
                                          <span class ='font-weight-bold question'>Question 1
                                              <h5 class='text-dark mt-4'>What is the name and location of your boutique?</h5>
                                          </span>

                                          <div class="form-group mt-4">
                                            <label for="boutique-name" class="mt-4 text-secondary small">{{ __('Name') }}</label>
                                            <input id="boutique-name" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="boutique_name" value="">
                                         </div>
                                          <div class="form-group mt-4">
                                              <label for="boutique-location" class="mt-4 text-secondary small">{{ __('Location') }}</label>
                                              <input id="boutique-location" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="boutique_location" value="{{$location}}">
                                          </div>

                                      </div>
                                      <div class="mt-5">
                                          <span class ='font-weight-bold question'>Question 2
                                              <h5 class='text-dark mt-4'>How many items would you like to sell through your e-store here?</h5>
                                          </span>
                                          <div>
                                              <span onclick="javascript:minusfunction()" class="signature">-</span>
                                              <input type="hidden" id="input-hours" name="hours" />
                                              <span id="hours-1" class="hours number">15</span>
                                              <span id="" class="plus signature">+</span>
                                          </div>
                                      </div>
                                      <div class="mt-5">
                                          <span class ='font-weight-bold question'>Question 3
                                              <h5 class='text-dark mt-4'>What is the best way to get in touch?</h5>
                                          </span>
                                          <div class="form-group mt-4">
                                              <label for="boutique-email" class="mt-4 text-secondary small">{{ __('Email') }}</label>
                                              <input id="boutique-email" type="email" class="form-control border-none kt-portlet--border-bottom-danger" name="boutique-email" value="" >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="boutique-password" class="mt-4 text-secondary small">{{ __('Password') }}</label>
                                              <input id="boutique-password" type="password" class="form-control border-none kt-portlet--border-bottom-danger" name="boutique-password" value="" >
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="boutique-password-confirm" class="mt-4 text-secondary small">{{ __('Password Confirm') }}</label>
                                              <input id="boutique-password-confirm" type="password" class="form-control border-none kt-portlet--border-bottom-danger" value="" >
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="boutique-phone" class="mt-4 text-secondary small">{{ __('Phone') }}</label>
                                              <input id="boutique-phone" type="number" class="form-control border-none kt-portlet--border-bottom-danger" name="boutique-phone" value="" >
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="boutique-notes" class="mt-4 text-secondary small">{{ __('Notes') }}</label>
                                              <input id="boutique-notes" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="boutique-notes" value="" >
                                          </div>
                                      </div>
                                      <div class="text-right" style="margin-top: 7em;">
                                          <a class="btn circle-btn btn-primary text-white font-weight-bold py-3 step2" mode="boutique">
                                          Next Section
                                          </a>
                                      </div>
                                  </div>

                                  <div id="step-3-boutique" class="mt-5 step-3" style="display: none;">
                                      <h1 class="font-weight-bold mb-5">We’re excited to partner with you! Welcome to the future of a sustainable supply chain.</h1>
                                      <div class="">
                                          <h5 class='text-dark mt-2 mb-4'>Martin, do you want to improve your chances? Send us  your resume and why you want ot be part of LocalAway?</h5>
                                          <span class ='font-weight-bold question'>
                                              <i class="fas fa-upload"></i>
                                              Upload Resume
                                              <p class='small text-dark ml-4 font-weight-bold'>Acceptable file types:doc,pdf</p>
                                          </span>
                                          <div class='upload-form d-flex justify-content-center align-items-center'>
                                              <label class= 'd-none d-lg-block'>Drag file here or</label>
                                              <label for="file-uploader" class='font-weight-bold upload-btn ml-lg-2'>Pick it from your computer</label>
                                              <input type="file" id="file-uploader" name="boutique-resume"/>
                                          </div>
                                      </div>
                                      <div class="mt-4">
                                          <span class ='font-weight-bold question'>
                                              Cover Letter
                                              <h5 class='text-dark mt-2'>Lorem ipsum dolor sit amet, consecteru adipiscing elit , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam?</h5>
                                              <div class="form-group ">
                                                  <label for="name" class="mt-3 text-secondary small d-block">{{ __('Cover letter') }}</label>
                                                  <textarea rows="3" cols="50" class='w-100' name='boutique-letter'></textarea>
                                              </div>
                                          </span>

                                          <span class ='font-weight-bold question '>
                                              Website Link, Social Media Pages
                                              <div class="form-group ">
                                                  <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                  <input id="boutique-link1" type="text" class="url form-control border-none kt-portlet--border-bottom-danger" name="boutique-link1" value="">
                                                  <label for="name" class="text-secondary small">{{ __('URL') }}</label>
                                                  <input id="boutique-link2" type="text" class="url form-control border-none kt-portlet--border-bottom-danger" name="boutique-link2" value="">
                                                  <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                  <input id="boutique-link3" type="text" class="url form-control border-none kt-portlet--border-bottom-danger" name="boutique-link3" value="">
                                              </div>
                                          </span>
                                      </div>
                                      <div class='mt-5'>
                                          <label class="radio-container">
                                              <h5 class='text-dark px-2 mt-2 mb-4'>Please agree to our guidelines so that we can reach you.</h5>
                                              <input id="boutique-agree" type="checkbox"  checked="checked" name="radio">
                                              <span class="checkmark">
                                                  <i class="fas fa-check check-sign "></i>
                                              </span>
                                          </label>
                                      </div>
                                      <div class="text-right" style="margin-top: 7em;">
                                          <input class="btn circle-btn btn-primary text-white font-weight-bold py-3 step3" type="submit" value="Submit" />
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-5 back-image d-lg-block d-none">
                  <div class="row mt-5">
                      <div class="col p-0" id="myProgress">
                          <div id="myBar"></div>
                      </div>
                  </div>
                  <div class="row ">
                      <div class="col">
                          <h1 id="title">Become part of the LocalAway Family</h1>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <script type="text/javascript" src="/js/dropzone.js"></script>
      <script src="/js/jquery-3.3.1.min.js"></script>
      <script src="/js/stylist-sign-in.js"></script>

  </body>
</html>
