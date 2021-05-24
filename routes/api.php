<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('events', 'EventController');
Route::resource('occupations', 'OccupationController');
Route::resource('event-registration', 'EventRegistrantController');

Route::get('image/{filename}', 'ImageController@showImage');

// Email Template
// Payment
Route::get('email/payment', 'MailController@paymentView');
Route::post('email/payment', 'MailController@sendPaymentMail');

Route::get('email/registrant', 'MailController@registrantView');
Route::post('email/registrant', 'MailController@sendRegistrantMail');