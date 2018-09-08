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

/***********************Custom Route********************************/
Route::get('/admin', function () {
    return view('login');
});
Route::GET('lg', function () {
    session_start();
    $_SESSION['web_master'] = null;
    return redirect('/');
});
//Route::get('/', function () {
//    session_start();
//    $_SESSION['web_master'];
//    if (!isset($_SESSION)) {
//        session_start();
//    return view('web.web_home');
//    }
//    if (is_null($_SESSION['web_master'])) {
//        //echo 'Please Login';
////        return redirect('/');
//    }
//    return view('web.web_home');
//});

//Route::get('/qtn', function () {
//    return view('web.quotation');
//});

Route::GET('logout', function () {
    session_start();
    $_SESSION['user_master'] = null;
    return redirect('/');
});

Route::GET('change_password', function () {
    return view('change_password');
});
Route::POST('reset_password', 'LoginMasterController@reset_password');
Route::GET('user_master/{id}/resetPassword', 'LoginMasterController@reset');

Route::POST('change_password', 'LoginMasterController@change_password');
Route::GET('dashboard', 'LoginMasterController@login_user');

Route::get('vehicle/{id}/booked', 'VehicleMasterController@booked');
Route::get('vehicle/{id}/available', 'VehicleMasterController@available');

Route::get('hotel/{id}/booked', 'HotelMasterController@booked');
Route::get('hotel/{id}/available', 'HotelMasterController@available');

/***********************Custom Route********************************/

/****************************Crud Route******************************/
Route::resource('home', 'LoginMasterController');
Route::resource('hotel', 'HotelMasterController');
Route::resource('user_master', 'UserMasterController');

Route::resource('air', 'AirportTranferController');
Route::resource('transfer', 'TourTransferController');
Route::resource('ttcharges', 'TourTransferChargesController');
Route::resource('meal', 'MealController');
Route::resource('extra_transfer', 'ExtraTransferController');
/****************************Crud Route******************************/

/********delete Route***********/
Route::get('user_master/{id}/delete', 'UserMasterController@destroy');
Route::get('user_master/{id}/activate', 'UserMasterController@activate');
Route::get('air/{id}/delete', 'AirportTranferController@delete');
Route::get('transfer/{id}/delete', 'TourTransferController@delete');
Route::get('ttcharges/{id}/delete', 'TourTransferChargesController@delete');
Route::get('meal/{id}/delete', 'MealController@delete');
Route::get('extra_transfer/{id}/delete', 'ExtraTransferController@delete');
/********delete Route***********/

/*********Frond End*************/
Route::get('/', 'FrontEndController@home');
Route::get('qtn', 'FrontEndController@qtn');
Route::get('agent', 'FrontEndController@agent');
Route::POST('agency_register', 'FrontEndController@agency_register');
Route::POST('login', 'FrontEndController@login');
Route::POST('postQtn', 'FrontEndController@postQtn');
Route::POST('getHotelPrice', 'FrontEndController@getHotelPrice');
/*********Frond End*************/