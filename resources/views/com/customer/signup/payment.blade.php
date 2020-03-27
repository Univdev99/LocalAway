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
            <h5> Shipping Details:</h5>
            <hr class="divider">
            <p> How would you like to pay?<br>Only $20 due now for styling fee.</p>
            <label class="radio-container mb-2">
                Credit Card
                <input type="radio" name="pay_type" value="credit" checked>
                <span class="checkmark">
                  <i class="fas fa-check check-sign"></i>
                </span>
            </label>
            {{-- <div class="card">
                <form action="{{ route('subscription.create') }}" method="post" id="payment-form">
                    @csrf
                    <div class="form-group">
                        <div class="card-header">
                            <label for="card-element">
                                Enter your credit card information
                            </label>
                        </div>
                        <div class="card-body">
                            <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            <input type="hidden" name="plan" value="{{ $plan->id }}" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="card-button" class="btn btn-primary" type="submit" data-secret="{{ $intent->client_secret }}" disabled>Pay</button>
                    </div>
                </form>
            </div> --}}
              <label class="radio-container mb-2">
                PayPal
                <input type="radio" name="pay_type" value="paypal" >
                <span class="checkmark">
                  <i class="fas fa-check check-sign"></i>
                </span>
              </label>
        </div>
        <div class="col-5 offset-1">
            <h5> Your order:</h5>
            <hr class="divider">

        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)

    var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const stripe = Stripe('{{ env("STRIPE_KEY") }}', { locale: 'en' }); // Create a Stripe client.
    const elements = stripe.elements(); // Create an instance of Elements.
    const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.

    cardElement.on('change', function(event) {
        if (event.complete) {
            $("#card-button").removeAttr('disabled');
        } else if (event.error) {
            // show validation to customer
        }
    });

    // Handle real-time validation errors from the card Element.
    cardElement.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe
        .handleCardSetup(clientSecret, cardElement, {
            payment_method_data: {
                // billing_details: { name: cardHolderName.value }
            }
        })
        .then(function(result) {
            // console.log(result);
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                console.log(result);
                // Send the token to your server.

                stripeTokenHandler(result.setupIntent.payment_method);
            }
        }).catch(function(e) {
            console.log(e);
        });

    });

    // Submit the form with the token ID.
    function stripeTokenHandler(paymentMethod) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'paymentMethod');
        hiddenInput.setAttribute('value', paymentMethod);
        form.appendChild(hiddenInput);


        // Submit the form
        form.submit();
    }
</script>
@endsection
