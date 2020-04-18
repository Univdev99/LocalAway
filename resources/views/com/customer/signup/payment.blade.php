@extends('com.customer.signup.layout')

@section('css')
    <link rel="stylesheet" type="text/css" href = "/css/customer/customer-signup.css">
@endsection

@section('content')

<div class="container">
    <div class="row">
        <h3> Almost there. How would you like to pay?</h3>
        <p> We're holding your reservation for the next 30 minutes. Complete payment & shipping steps to secure your order.</p>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="d-flex justify-content-between">
                <span style="font-size:20px;"> Shipping Details:</span>
                <a href="#" style="font-size: smaller; color:#02BFAF; text-decoration: underline; line-height: 35px;">Edit</a>
            </div>

            <hr class="divider mt-0">
            <small>{{ $user->first_name }} {{ $user->last_name }}</small><small class="float-right">Delivery Expected by:</small><br>
            <small>{{ $user->email }}</small><small class="float-right">{{ $user->customer->capsule_date->format('F jS') }}</small><br>
            <small>{{ $user->customer->street_address }}</small><br>
            <small>{{ $user->customer->zip_code }} {{ $user->customer->city }}</small><br>
            <small>{{ $user->customer->state }}</small><br>

            <input type="hidden" value="{{ $user->email }}" id="user_email">
            <p style="font-size:20px;" class="mt-3"> How would you like to pay?<br>Only $20 due now for styling fee.</p>

            <label class="radio-container mb-2">
                Credit Card
                <input type="radio" name="pay_type" value="credit" @if($payment_method == 'stripe') checked @endif>
                <span class="checkmark">
                  <i class="fas fa-check check-sign"></i>
                </span>
            </label>

            <div id="stripe-form" class="p-3 @if($payment_method != 'stripe') d-none @endif">

            {!! Form::open(['url' => route('customer.signup.payment.stripe'), 'data-parsley-validate', 'id' => 'payment-form']) !!}
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="form-group" id="cc-group">
                    <span class="text-danger">*</span><label for="card-number" style="font-size:12px;">Credit Card Number</label>
                    {!! Form::text(null, null, [
                        'class'                         => 'form-control',
                        'required'                      => 'required',
                        'data-stripe'                   => 'number',
                        'data-parsley-type'             => 'number',
                        'maxlength'                     => '16',
                        'data-parsley-trigger'          => 'change focusout',
                        'data-parsley-class-handler'    => '#cc-group',
                        'id'                            => 'card-number',
                        ]) !!}
                </div>
                <div class="form-group">
                    <span class="text-danger">*</span><label for="expiration-month" style="font-size:12px;">Expiration Date</label>
                    <div class="d-flex">
                    <div class="col-md-6">
                        <div class="form-group" id="exp-m-group">
                            {!! Form::selectMonth(null, date('n'), [
                                'class'                 => 'form-control',
                                'required'              => 'required',
                                'data-stripe'           => 'exp-month'
                            ], '%m') !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="exp-y-group">
                            {!! Form::selectYear(null, date('Y'), date('Y') + 10, null, [
                                'class'             => 'form-control',
                                'required'          => 'required',
                                'data-stripe'       => 'exp-year'
                                ]) !!}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="form-group" id="ccv-group">
                    <span class="text-danger">*</span><label for="cvv" style="font-size:12px;">CVV</label>
                    {!! Form::text(null, null, [
                        'class'                         => 'form-control',
                        'required'                      => 'required',
                        'data-stripe'                   => 'cvc',
                        'data-parsley-type'             => 'number',
                        'data-parsley-trigger'          => 'change focusout',
                        'maxlength'                     => '4',
                        'data-parsley-class-handler'    => '#ccv-group',
                        'id'                            => 'cvv',
                        ]) !!}
                </div>
                <div class="form-group mt-5 text-center">
                    <input id="submitBtn" type="submit" class="btn text-white text-center btn-order" data-secret="{{ $intent->client_secret }}" value="Complete Order: $20.00" />
                </div>
                <div class="row">
                <div class="col-md-12">
                    <span class="payment-errors" style="color: red;margin-top:10px;"></span>
                </div>
                </div>
              {!! Form::close() !!}
            </div>

            <label class="radio-container mb-2">
                PayPal
                <input type="radio" name="pay_type" value="paypal" >
                <span class="checkmark">
                    <i class="fas fa-check check-sign"></i>
                </span>
            </label>
        </div>
        <div class="col-5 offset-1">
            <span style="font-size:20px;"> Your Order:</span>
            <hr class="divider mt-1">
            <div>
                <img src="/images/Bitmap.png" style="width: 100%;">
            </div>
            <div class='row'>
				<div class="col-6">
					<p><small>Styling Fee for Trip Capsule<br>Waived if any items purchased</small></p>
					<p style="font-size: 9px;">Includes: <br>Hand-selected items from a local stylist <br>Customized map for local shopping</p>
				</div>
				<div class="col-6">
					<p class="float-right"><small>$20</small></p>
				</div>
			</div>
			<div class='row mt-3'>
				<div class="col-6">
					<small>Subtotal</small>
				</div>
				<div class="col-6">
					<small class="float-right">$20</small>
				</div>
			</div>
			<div class='row mt-1'>
				<div class="col-6">
					<small>Shipping & Returns</small>
				</div>
				<div class="col-6">
					<small class="float-right">FREE</small>
				</div>
			</div>
			<div class='row mt-1'>
				<div class="col-6">
					<small>Taxes</small>
				</div>
				<div class="col-6">
					<small class="float-right">FREE</small>
				</div>
			</div>
			<div class='row mt-1'>
				<div class="col-6">
					<small>Total Due</small>
				</div>
				<div class="col-6">
					<small class="float-right">$20</small>
				</div>
			</div>
			<div class="form-group mt-5 text-center">
				<input id="gift-code" type="text" class="input-giftcode" placeholder="ENTER GIFT CODE" />
			</div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
        window.ParsleyConfig = {
            errorsWrapper: '<div></div>',
            errorTemplate: '<div class="alert alert-danger parsley border-0 bg-white text-danger" role="alert"></div>',
            errorClass: 'has-error',
            successClass: 'has-success'
        };

        $('input[type=radio][name=pay_type]').change(function() {
        if (this.value == 'credit') {
            $("#stripe-form").removeClass('d-none');
        }
        else {
            $("#stripe-form").addClass('d-none');
        }
    });
    </script>

    <script src="/js/parsley.js"></script>

    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        Stripe.setPublishableKey("<?php echo env('STRIPE_KEY') ?>");
        jQuery(function($) {
            $('#payment-form').submit(function(event) {
                var $form = $(this);
                $form.parsley().subscribe('parsley:form:validate', function(formInstance) {
                    formInstance.submitEvent.preventDefault();
                    alert("again");
                    return false;
                });
                $form.find('#submitBtn').prop('disabled', true);
                Stripe.card.createToken($form, stripeResponseHandler);
                return false;
            });
        });
        function stripeResponseHandler(status, response) {
            var $form = $('#payment-form');
            if (response.error) {
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').addClass('alert alert-danger');
                $form.find('#submitBtn').prop('disabled', false);
                $('#submitBtn').button('reset');
            } else {
                var token = response.id;
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                $form.append($('<input type="hidden" name="email" />').val($("#user_email").val()));
                $form.get(0).submit();
            }
        };
    </script>

@endsection
