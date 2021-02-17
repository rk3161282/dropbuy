<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/','DashboardController@index')->name('dashboard');
Route::get('/subadmin-user-list','DashboardController@subadminuserlist')->name('subadmin-user-list');
Route::get('/roles-permissions','DashboardController@rolespermissions')->name('roles-permissions');

//Merchant User API
Route::get('/registered-merchant','DashboardController@registeredmerchant')->name('registered-merchant');
Route::get('/pending-merchant','DashboardController@pendingmerchant')->name('pending-merchant');
Route::get('/suspended-merchant','DashboardController@suspendedmerchant')->name('suspended-merchant');

// Driver User API
Route::get('/registered-driver','DashboardController@registereddriver')->name('registered-driver');
Route::get('/pending-driver','DashboardController@pendingdriver')->name('pending-driver');
Route::get('/suspended-driver','DashboardController@suspendeddriver')->name('suspended-driver');

//Customer API customer-list
Route::get('/customer-list','DashboardController@customerlist')->name('customer-list');

//category-list API
Route::get('/category-list','DashboardController@categorylist')->name('category-list');
Route::get('/add-category','DashboardController@addcategory')->name('add-category');

//order-list API
Route::get('/order-list','DashboardController@orderlist')->name('order-list');
Route::get('/ongoing-order','DashboardController@ongoingorder')->name('ongoing-order');
Route::get('/completed-order','DashboardController@completedorder')->name('completed-order');
Route::get('/cancelled-order','DashboardController@cancelledorder')->name('cancelled-order');

// APP SETTING API
Route::get('/banner-list','DashboardController@bannerlist')->name('banner-list');
Route::get('/coupen-setting','DashboardController@coupensetting')->name('coupen-setting');