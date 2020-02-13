<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div class="login-container container">
            <div class="row justify-content-center">
                <div class="form-width">
                    <div class="card">
                        <div class="p-4  bg-white m-auto text-center">
                            <img class = "d-block text-center" src="/images/logo.png" alt="mobile-logo">  
                        </div>
                        <div class="p-2  bg-white m-auto text-center">
                            <span class = "h3 color-orange">Dress Local.</span>
                        </div>
                        
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="form-group ">
                                    <label for="email" class="ml-2 text-secondary small">{{ __('Email ID or Phone No.') }}</label>
                                    
                                    <div class="">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password" class="ml-2 text-secondary small">{{ __('Password') }}</label>
                                    
                                    <div class="">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col">
                                        <div class="form-check ml-2">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            
                                            <label class="form-check-label " for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group mb-0">
                                    <div class="row d-flex justify-content-center">
                                        <button type="submit" class="btn circle-btn btn-primary">
                                            {{ __('Sign in') }}
                                        </button>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a class="row btn btn-link float-right mt-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                        <div class="my-1 mx-3 position-relative">
                            <hr class = "">
                            <p class = "provider text-center position-absolute bg-white text-secondary small" >Or use Google</p>
                            <div class = "d-flex justify-content-around social-btns">
                                <div class="btn btn-primary circle-btn bg-white text-dark text-center google-btn mr-4">
                                    <svg width="15" viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                                    <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4"/>
                                    <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853"/>
                                    <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05"/>
                                    <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335"/>
                                </svg>
                                <a href="{{ url('/auth/redirect/google') }}" class = "align-middle text-dark" >Google</a> 
                            </div>
                            <!-- <div class="btn btn-primary circle-btn  text-dark text-center facebook-btn">
                                <img src="images/facebook.png" alt="" style = "width:20px;">
                                <a href="{{ url('/auth/redirect/facebook') }}" class = "align-middle text-white" >Facebook</a> 
                            </div> -->
                        </div>
                    </div>
                    <div class="mt-3 ">
                        <p class = "text-center" >Don't have an account?
                            <a class="" href="{{ route('customer.signup') }}">{{ __('Sign Up') }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>