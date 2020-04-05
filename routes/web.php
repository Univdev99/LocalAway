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

use App\Http\Controllers\FileController;
use App\Mail\sendRequestAccessMail;



Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// Route::domain('staging.localaway.com')->group(function () {

    // Route::group(["domain" => "www.localaway.com"], function () {
        Route::get('/', 'HomeController@index')->name('landingPage');
    // });

    // Route::group(["domain" => "www.localaway.ai"], function () {
        // Route::get('/', function () {
        //     return view('ai.newlanding');
        // });
    // });
    // Route::get('/json', 'FileController@jsonParsing');
    Route::post('/access-ai', 'HomeController@checkAccess');
    Route::get('about', 'HomeController@about');

    Route::get('/dashboard','DashboardController@index');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/terms_of_service', function() {
        return view('');
    });
    Route::get('/privacy_policy', function () {
        return view('');
    });

    Route::get('/dashboard/logo-image', 'DashboardController@index');
    Route::get('/dashboard/hero-image', 'DashboardController@hero');
    Route::get('/dashboard/itinerary-image', 'DashboardController@itinerary');
    Route::get('/dashboard/stylist-image', 'DashboardController@stylist');
    Route::get('/dashboard/virtual-closet', 'DashboardController@closet');
    Route::get('/dashboard/customers', 'DashboardController@customers');
    Route::get('/dashboard/survey', 'DashboardController@survey');

    Route::post('/admin/file/upload', 'FileController@store');
    Route::post('/admin/file/vcUpload', 'FileController@vcUpload');
    Route::get('/admin/file/delete/{id}', 'FileController@delete');
    Route::get('/admin/file/use/{id}', 'FileController@use');
    Route::post('/admin/file/update/{id}', 'FileController@update');
    Route::get('/admin/file/move-up/{id}', 'FileController@up');
    Route::get('/admin/file/move-down/{id}', 'FileController@down');

    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/auth/callback/{provider}', 'SocialController@callback');

    Route::get('/become-stylist', function () {
        return view('com.stylist.stylist-sign-in');
    });

    Route::group(['middleware' => ['auth-stylist']], function () {
        Route::get('/stylist', 'StylistController@index');
        Route::get('/stylist/profile', 'StylistController@profile');
        Route::get('/stylist/closet', 'StylistController@closet');
        Route::get('/stylist/clients', 'StylistController@clients');
    });

    Route::get('/stylist/check-email', 'StylistController@checkEmailDuplicate');

    Route::post('/stylist-signup', 'StylistController@store');
    Route::get('/stylist/thank-you', 'StylistController@thankyou')->name('com.stylist.thankyou');


    Route::post('/answer', 'HomeController@showAnswer');
    Route::get('/answer', 'HomeController@index');

    Route::get('/job', function () {
        return view('ai.job');
    });
    Route::post('/save-email', 'NewlandingController@saveRequestInfo');
    Route::post('/save-info', 'NewlandingController@saveSurveyInfo');
    Route::post('/send-mail', 'NewlandingController@sendRequestMail')->name('com.request-access');
    Route::post('/survey', function () {
        return redirect('/');
    });
    Route::get('/survey', 'NewlandingController@survey');


// Route::group(array('domain' => 'www.localaway.com'), $appRoutes);
// Route::group(array('domain' => 'localaway.com'), $appRoutes);

    Route::group(['middleware' => ['auth-customer']], function () {
        Route::get('customer/upcoming-boxes', 'CustomerController@upcomingboxes')->name('com.customer.upcoming-boxes');
        Route::get('customer/preferences', 'CustomerController@preferences')->name('com.customer.preferences');
        Route::get('customer/account', 'CustomerController@account')->name('com.customer.account');
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

    Route::get('/customer/signup/thank-you', 'CustomerController@thankyou')->name('customer.signup.thankyou');

    Route::get('/phpinfo', 'FileController@phpinfo');
