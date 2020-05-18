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
                                  <div id="step-2-boutique" class="mt-5 step-2">
                                      <h1 class="font-weight-bold mb-5 title">We're excited to partner with you!</h1>
                                      <div class="">
                                          <span class ='font-weight-bold question'>Question 1
                                              <h5 class='text-dark mt-4'>What's the name of location of your brand or a boutique?</h5>
                                          </span>

                                          <div class="form-group mt-4">
                                            <label for="name" class="mt-1 text-secondary small">{{ __('Name') }}</label>
                                            <input id="name" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="name" value="{{ old('name') }}" required>
                                         </div>
                                          <div class="form-group mt-4">
                                              <label for="location" class="mt-1 text-secondary small">{{ __('Location') }}</label>
                                              <input id="location" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="location" value=" @if(old('location')) {{ old('location') }} @else {{$location}} @endif" required>
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
                                          <div class="form-group mt-4 row">
                                            <div class="col-sm-6">
                                                <div class="my-form-row">
                                                    <label for="first-name" class="mt-1 text-secondary small">{{ __('First name') }}</label>
                                                    <input id="first-name" name="first_name" class="form-control" value="{{ old('first_name') }}" required />
                                                </div>
                                            </div>
                                    
                                            <div class="col-sm-6">
                                                <div class="my-form-row">
                                                    <label for="last-name" class="mt-1 text-secondary small">{{ __('Last name') }}</label>
                                                    <input id="last-name" name="last_name" class="form-control" value="{{ old('last_name') }}" required />
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="email" class="mt-1 text-secondary small">{{ __('Email') }}</label>
                                              <input id="email" type="email" class="form-control border-none kt-portlet--border-bottom-danger @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                          </div>
                                          {{-- <div class="form-group mt-4">
                                              <label for="password" class="mt-1 text-secondary small">{{ __('Password') }}</label>
                                              <input id="password" type="password" class="form-control border-none kt-portlet--border-bottom-danger @error('password') is-invalid @enderror" name="password" value="" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="password_confirmation" class="mt-1 text-secondary small">{{ __('Password Confirm') }}</label>
                                              <input id="password_confirmation" type="password" class="form-control border-none kt-portlet--border-bottom-danger" name="password_confirmation" value="" required>
                                          </div> --}}
                                          <div class="form-group mt-4">
                                              <label for="phone" class="mt-1 text-secondary small">{{ __('Phone') }}</label>
                                              <input id="phone" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="phone" value="{{ old('phone') }}">
                                          </div>
                                          <div class="form-group mt-4">
                                              <label for="notes" class="mt-1 text-secondary small">{{ __('Notes') }}</label>
                                              <input id="notes" type="text" class="form-control border-none kt-portlet--border-bottom-danger" name="notes" value="{{ old('notes') }}">
                                          </div>
                                      </div>
                                      <div class="mt-4">
                                        <span class ='font-weight-bold question '>
                                            Website Link, Social Media Pages
                                            <div class="form-group ">
                                                <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                <input id="link1" type="text" class="url form-control border-none kt-portlet--border-bottom-danger" name="link1" value="{{ old('link1') }}">
                                                <label for="name" class="text-secondary small">{{ __('URL') }}</label>
                                                <input id="link2" type="text" class="url form-control border-none kt-portlet--border-bottom-danger" name="link2" value="{{ old('link2') }}">
                                                <label for="name" class=" text-secondary small">{{ __('URL') }}</label>
                                                <input id="link3" type="text" class="url form-control border-none kt-portlet--border-bottom-danger" name="link3" value="{{ old('link3') }}">
                                            </div>
                                        </span>
                                    </div>
                                    <div class='mt-5'>
                                        <label class="radio-container">
                                            <h5 class='text-dark px-2 mt-2 mb-4'>Please agree to our <a href="#" class="guideline">guidelines</a> so that we can reach you.</h5>
                                            <input id="agree" type="checkbox" name="radio" checked required>
                                            <span class="checkmark">
                                                <i class="fas fa-check check-sign "></i>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="text-right" style="margin-top: 7em;">
                                        <input class="btn circle-btn btn-primary text-white font-weight-bold py-3 step3" type="submit" value="Submit" />
                                    </div>
                                  </div>

                                  {{-- <div id="step-3-boutique" class="mt-5 step-3" style="display: none;">
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
                                              <h5 class='text-dark px-2 mt-2 mb-4'>Please agree to our <a href="#" class="guideline">guidelines</a> so that we can reach you.</h5>
                                              <input id="boutique-agree" type="checkbox"  checked="checked" name="radio">
                                              <span class="checkmark">
                                                  <i class="fas fa-check check-sign "></i>
                                              </span>
                                          </label>
                                      </div>
                                      <div class="text-right" style="margin-top: 7em;">
                                          <input class="btn circle-btn btn-primary text-white font-weight-bold py-3 step3" type="submit" value="Submit" />
                                      </div>
                                  </div> --}}
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

      @include ('com.stylist.guideline')
      <script type="text/javascript" src="/js/dropzone.js"></script>
      <script src="/js/jquery-3.3.1.min.js"></script>
      <script src="/js/stylist-sign-in.js"></script>
      <script src="/js/bootstrap.min.js"></script>

  </body>
</html>
