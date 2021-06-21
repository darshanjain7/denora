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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'IndexpageController@index');

 
Route::get('login1', 'HomeController@index')->middleware('adminlogin');

Route::resource('admingo','AdmingoController');

Route::resource('producttype','ProducttypeController');

Route::resource('producthtml','ProducthtmlController');

Route::resource('userview','UserviewController');

Route::resource('productmap','ProductmapController');

Route::resource('productskudetails','ProductskudetailsController');

Route::resource('microchem','MicrochemController');

Route::resource('contact','ContactController');

Route::resource('customer-feedback','CustomerfeedbackController'); 

Route::resource('productcategory','ProductcategoryController');

Route::get('/sendenquiry/{id}','SendenquiryController@form123');

Route::resource('sendenquiryupdate','SendenquiryupdateController');

 



Route::resource('admincontent','AdmincontentController');

Route::post('/processajax','AjaxController@processajax');

Route::post('/processajaxunapprove','AjaxController@processajaxunapprove');

Route::post('/processajax1','AjaxController@processajax1');

Route::post('/processajaxunapprove1','AjaxController@processajaxunapprove1');

Route::resource('createusr','AdduserdetailsController');

Route::resource('adminassigncontent','AssigncontentController');

Route::post('/showcpfd','AjaxController@showcpfd');

Route::post('/processajaxinactiveassign','AjaxController@processajaxinactiveassign');

Route::post('/processajaxactiveassign','AjaxController@processajaxactiveassign');

Route::get('/updatepassword/{id}','OtherController@updatepassword');

Route::resource('usergo','UsergoController');

Route::resource('readcontents','UserreadController');

Route::resource('pendingcontents','UsernotreadedController');




