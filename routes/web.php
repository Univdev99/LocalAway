<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::domain('staging.localaway.com')->group(function () {

    // Route::group(["domain" => "www.localaway.com"], function () {
        Route::get('/', 'HomeController@index')->name('landingPage');
    // });

    Route::group(["domain" => "www.localaway.ai"], function () {
        Route::get('/', function () {
            return view('ai.newlanding');
        });
    });
    Route::post('/confirm-access', 'HomeController@checkAccess');
    Route::get('about', 'HomeController@about');
    Route::get('/save-newsemail', 'HomeController@saveNewsEmail');

    Route::get('/dashboard','DashboardController@index');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/terms_of_service', function() {
        return view('com.tos');
    });
    Route::get('/privacy_policy/customer', function () {
        return view('com/customer/privacy-policy');
    });

    Route::get('/privacy_policy/stylist', function () {
        return view('com/stylist/privacy-policy');
    });

    Route::get('/dashboard/logo-image', 'DashboardController@index');
    Route::get('/dashboard/hero-image', 'DashboardController@hero');
    Route::get('/dashboard/itinerary-image', 'DashboardController@itinerary');
    Route::get('/dashboard/stylist-image', 'DashboardController@stylist');
    Route::get('/dashboard/virtual-closet', 'DashboardController@closet');
    Route::get('/dashboard/customers', 'DashboardController@customers');
    Route::get('/dashboard/survey', 'DashboardController@survey');
    Route::get('/dashboard/boutique', 'DashboardController@boutique');
    Route::get('/dashboard/boutique/setinactive', 'StylistController@boutiqueActive');
    Route::get('/dashboard/boutique/setactive', 'StylistController@boutiqueInActive');

    Route::post('/admin/file/upload', 'FileController@store');
    Route::post('/admin/file/vcUpload', 'FileController@vcUpload');
    Route::get('/admin/file/delete/{id}', 'FileController@delete');
    Route::get('/admin/file/use/{id}', 'FileController@use');
    Route::post('/admin/file/update/{id}', 'FileController@update');
    Route::get('/admin/file/move-up/{id}', 'FileController@up');
    Route::get('/admin/file/move-down/{id}', 'FileController@down');

    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/auth/callback/{provider}', 'SocialController@callback');

    
    Route::get('/stylist/signup', 'StylistController@signup')->name('com.stylist.signup');

    Route::group(['middleware' => ['auth-stylist']], function () {
        Route::get('/stylist', 'StylistController@index');
        Route::get('/stylist/shop', 'StylistController@shop')->name('com.stylist.shop');
        Route::get('/stylist/shop/products/{product}', 'StylistController@product')->name('com.stylist.shop.product');
        Route::post('/stylist/shop/invoice', 'StylistController@invoiceCreate')->name('com.stylist.shop.invoice.create');
        Route::get('/stylist/orders', 'StylistController@orders')->name('com.stylist.orders');
        Route::post('/stylist/orders/ship', 'StylistController@shipOrder')->name('com.stylist.orders.ship');
        Route::get('/stylist/shipping-label', 'StylistController@shippingLabel')->name('com.stylist.shipping-label');
        Route::post('/stylist/shop/upload', 'FileController@upload');
        Route::get('/stylist/profile', 'StylistController@profile')->name('com.stylist.profile');
        Route::get('/stylist/closet', 'StylistController@closet');
        Route::get('/stylist/clients', 'StylistController@clients');
    });

    Route::get('/stylist/check-email', 'StylistController@checkEmailDuplicate');

    Route::post('/stylist/signup', 'StylistController@store');
    Route::get('/stylist/thank-you', 'StylistController@thankyou')->name('com.stylist.thankyou');

    Route::post('/answer', 'HomeController@showAnswer');
    Route::get('/answer', 'HomeController@index');

    Route::get('/job', function () {
        return view('ai.job');
    });
    Route::post('/save-email', 'NewlandingController@saveRequestInfo');
    Route::post('/save-info', 'NewlandingController@saveSurveyInfo');
    // Route::post('/send-mail', 'NewlandingController@sendRequestMail')->name('com.request-access');
    Route::post('/survey', function () {
        return redirect('/');
    });
    Route::get('/survey', 'NewlandingController@survey');


// Route::group(array('domain' => 'www.localaway.com'), $appRoutes);
// Route::group(array('domain' => 'localaway.com'), $appRoutes);

    Route::group(['middleware' => ['auth-customer']], function () {
        Route::get('/customer', 'CustomerController@profileTracking')->name('customer.signup.tracking');
        Route::get('/customer/upcoming-boxes', 'CustomerController@upcomingboxes')->name('com.customer.upcoming-boxes');
        Route::get('/customer/preferences', 'CustomerController@preferences')->name('com.customer.preferences');
        Route::get('/customer/account', 'CustomerController@account')->name('com.customer.account');
        Route::get('/customer/order', 'CustomerController@order')->name('com.customer.order');
        Route::get('/customer/shop', 'CustomerController@shop')->name('com.customer.shop');
        Route::post('/customer/orders/finalize', 'CustomerController@finalizeOrder')->name('com.customer.orders.finalize');
    });
    Route::get('/customer/signup/account', 'CustomerController@signup')->name('customer.signup.account');
    Route::get('/customer/signup/basic', 'CustomerController@basic')->name('customer.signup.basic');
    Route::get('/customer/signup/sizing', 'CustomerController@sizing')->name('customer.signup.sizing');
    Route::get('/customer/signup/style', 'CustomerController@style')->name('customer.signup.style');
    Route::get('/customer/signup/payment', 'CustomerController@payment')->name('customer.signup.payment');
    Route::post('/customer/signup/payment/stripe', 'StripeController@store')->name('customer.signup.payment.stripe');

    Route::post('/customer/signup/account', 'CustomerController@saveAccount')->name('customer.signup.account.save');
    Route::post('/customer/signup/basic', 'CustomerController@saveBasic')->name('customer.signup.basic.save');
    Route::post('/customer/signup/sizing', 'CustomerController@saveSizing')->name('customer.signup.sizing.save');
    Route::post('/customer/signup/style', 'CustomerController@saveStyle')->name('customer.signup.style.save');
    Route::post('/customer/signup/saverow', 'CustomerController@saveRow');

    Route::get('/customer/signup/thank-you', 'CustomerController@thankyou')->name('customer.signup.thankyou');

    Route::get('/phpinfo', 'FileController@phpinfo');

    // Route::get('paypal/ec-checkout/{plan}', 'PayPalController@getExpressCheckout')->name('paypal.ec-checkout');
    // Route::get('paypal/ec-checkout-success/{plan}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.ec-checkout-success');
    // Route::get('paypal/adaptive-pay', 'PayPalController@getAdaptivePay');
    // Route::get('paypal/cancel', 'PayPalController@cancel')->name('paypal.cancel');


    Route::get('payment', 'PayPalController@payment')->name('payment');
    Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
    Route::get('payment/success', 'PayPalController@success')->name('payment.success');

    Route::get('/getsession', function () {
        return;
    });