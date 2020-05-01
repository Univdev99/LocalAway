@component('mail::message')

Hello **{{$name}}**,<br>
Welcome to LocalAway!<br>
Your access code is **{{$access_code}}**.

Please click the button below to start survey.
@component('mail::button', ['url' => $link])
Go to Survey
@endcomponent
Sincerely,<br>
LocalAway team.
@endcomponent
{{-- <div class="header">
    <div class="logo">
        <img src="/images/logo.png">
    </div>
    <div class="">
        <img src="/images/slider-8.jpg">
        <p>Welcome from the LocalAway Crew</p>
    </div>
    <div class="">
        <h3>Welcome</h3>
        <a>localaway
    </div>
</div> --}}

{{-- 
<!DOCTYPE html>

<head>
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<body>

    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">


<div class="container">

            <label class="radio-container mb-2">
                PayPal
                <input type="radio" name="pay_type" value="paypal" >
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
            </label>
            @if ($message = Session::get('paypal-message'))
                <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="form-group mt-5 text-center d-none" id="paypal-form">
                <button class="btn text-white text-center btn-order" id="btn-paypal">Complete Order: $19.00</button>
            </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        jQuery(function($) {
            $('#btn-paypal').click(function(){
                $.get("payment").done(function(res){
                    var w = ($(window).width() - 350) / 2, h = ($(window).height() - 600) / 2;
                    let params = 'scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=350,height=600,left=' + w + ',top=' + h;
                    paypal = window.open(res, 'payment', params);
                
                });
            });
        });
    </script>


</body> --}}