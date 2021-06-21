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

//Auth::routes();

Route::get('/', 'IndexpageController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);
 

 //Route::get('login', 'HomeController@index')->middleware('adminlogin');

 //Route::resource('login', 'LoginController')->name('login')->middleware('adminlogin');


  

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

 
///////////////////admin////

Route::resource('createproductgroup','AdminproductgroupController');

Route::post('/productgrpactive','AjaxController@productgrpactive');

Route::post('/productgrpinactive','AjaxController@productgrpinactive');

Route::post('/producttypeactive','AjaxController@producttypeactive');

Route::post('/producttypeinactive','AjaxController@producttypeinactive');

Route::post('/producthtmlinactive','AjaxController@producthtmlinactive');

Route::post('/producthtmlactive','AjaxController@producthtmlactive');

Route::resource('productscategory','ProductscategoryController');

Route::post('/productcatactive','AjaxController@productcatactive');

Route::post('/productcatinactive','AjaxController@productcatinactive');

Route::resource('productsknumber','productsknumbercontroller');

Route::get('/inactivate/{id}','CustomcodeController@inactive');

Route::get('/inactivatecate/{id}','CustomcodeController@inactivatecate');

Route::get('/activate/{id}','CustomcodeController@active');

Route::get('/activatecate/{id}','CustomcodeController@activatecate');

Route::resource('sknumberdrowing','DrowingController');

Route::resource('sknumberdatasheet','SknumberdatasheetController');

Route::resource('contactus','ContactusdetailsController');

Route::resource('customersfeedback','customerfeedbackdetailsController');

Route::resource('enquirydetails','sendenquirydetailsController');


 


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




