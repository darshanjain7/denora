<?php

use Illuminate\Http\Request;

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

// Route::get('productgroup','ProductgroupController@list');

Route::get('productview/{id}','ApiuserviewController@list');

Route::get('productmap/{id}','ApiproductmapController@list');

//Route::get('productmaptable/{id}','ApiproductmapController@list1');

Route::get('productskudetails/{id}','ApiproductskudetailsController@list');

Route::get('productmicrochem/{id}','ApimichrochemController@list');

//Route::get('contactus','ApicontactController@list');

Route::post('/custfeedback','ApicontactController@list1');

Route::post('/sendenquiry','ApicontactController@list2');

Route::post('/contactus','ApicontactController@list');

Route::post('/contactusstoredb','ApicontactController@listdb');

Route::post('/enquirystoredb','ApicontactController@sknumber');

Route::post('/enrollmentuser','apienrollmentcontroller@enrollment');

Route::post('/enrollmentuserlogin','apienrollmentcontroller@enrollmentuserlogin');

Route::post('/enrollmentuserdashboard/{id}','apienrollmentcontroller@enrollmentuserdashboard');

Route::post('/enrollmentuserpopup1','apienrollmentcontroller@enrollmentuserpopup1');

Route::post('/enrollmentuseremailverification','apienrollmentcontroller@enrollmentuseremailverification');

Route::post('/enrollmentuserpasschange','apienrollmentcontroller@enrollmentuserpasschange');

Route::post('/enrollmentuserforgotpass','apienrollmentcontroller@enrollmentuserforgotpass');




Route::post('/enrollmentuserchangepass','apienrollmentcontroller@enrollmentuserchangepass');

Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

 
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.reset');






