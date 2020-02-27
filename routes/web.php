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
        Route::get('/', 'HomeController@index')->name('home');
    // });

    // Route::group(["domain" => "www.localaway.ai"], function () {
        Route::get('/newlanding', function () {
            return view('newlanding');
        });
    // });
    // Route::get('/json', 'FileController@jsonParsing');
    Route::post('/access-ai', 'HomeController@checkAccess');
    Route::get('about', 'HomeController@about');

    Route::get('/dashboard','DashboardController@index');

    Route::get('/home', 'HomeController@index')->name('home');

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
        return view('stylist-sign-in');
    });

    Route::group(['middleware' => ['auth-stylist']], function () {
        Route::get('/stylist', 'StylistController@index');
    });

    Route::get('/stylist/check-email', 'StylistController@checkEmailDuplicate');
    Route::get('/stylist/closet', 'StylistController@closet');
    Route::post('/stylist-signup', 'StylistController@store');
    Route::get('/become-stylist/thank-you', 'StylistController@thankyou')->name('stylist.thankyou');
    Route::get('/customer/thank-you', 'CustomerController@thankyou')->name('customer.thankyou');

    Route::post('/answer', 'HomeController@showAnswer');
    Route::get('/answer', 'HomeController@index');



    Route::get('/job', function () {
        return view('job');
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
        Route::get('customer/first-time-flow', 'CustomerController@firstTimeFlow')->name('customer.first-time-flow');
    });
    Route::get('customer/signup', 'CustomerController@signup')->name('customer.signup');
    Route::post('customer/signup', 'CustomerController@postSignup');
    Route::post('customer/general', 'CustomerController@postGeneral');
    Route::post('customer/women', 'CustomerController@postWomen');
    Route::post('customer/men', 'CustomerController@postMen');
    Route::post('customer/neutral', 'CustomerController@postNeutral');
    Route::post('customer/dislike', 'CustomerController@postDislike');
    Route::post('customer/almost-done', 'CustomerController@postAlmostDone');
    Route::post('customer/finalize', 'CustomerController@postFinalize');
