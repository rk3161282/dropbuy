<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    /*
    * Redirect to dashboard
    */
    public function index(Request $request){

        return view('dashboard');
    }
    /*
     * Route::get('/subadmin-user-list','DashboardController@subadminuserlist')->name('subadmin-user-list');
     */
    public function subadminuserlist(Request $request){

        return view('systemuser/subadminuserlist');
    }
    /*
     * Route::get('/roles-permissions','DashboardController@rolespermissions')->name('roles-permissions');
     */
    public function rolespermissions(Request $request){

        return view('role/rolespermissions');
    }

    /*
     * Route::get('/registered-merchant','DashboardController@registeredmerchant')->name('registered-merchant');
     */
    public function registeredmerchant(Request $request){

        return view('Merchant/registeredmerchant');
    }

    /*
     * Route::get('/pending-merchant','DashboardController@pendingmerchant')->name('pending-merchant');
     */
    public function pendingmerchant(Request $request){

        return view('Merchant/pendingmerchant');
    }

    /*
    * Route::get('/suspended-merchant','DashboardController@suspendedmerchant')->name('suspended-merchant');
    */
    public function suspendedmerchant(Request $request){

        return view('Merchant/suspendedmerchant');
    }

    /*
    * Route::get('/registered-driver','DashboardController@registereddriver')->name('registered-driver');
    */
    public function registereddriver(Request $request){

        return view('driver/registereddriver');
    }

    /*
    * Route::get('/pending-driver','DashboardController@pendingdriver')->name('pending-driver');
    */
    public function pendingdriver(Request $request){

        return view('driver/pendingdriver');
    }

    /*
    * Route::get('/suspended-driver','DashboardController@suspendeddriver')->name('suspended-driver');
    */
    public function suspendeddriver(Request $request){

        return view('driver/suspendeddriver');
    }

    /*
    * Route::get('/customer-list','DashboardController@customerlist')->name('customer-list');
    */
    public function customerlist(Request $request){

        return view('customer/customerlist');
    }

    /*
    * Route::get('/category-list','DashboardController@categorylist')->name('category-list');
    */
    public function categorylist(Request $request){

        return view('category/categorylist');
    }

    /*
   * Route::get('/add-category','DashboardController@addcategory')->name('add-category');
   */
    public function addcategory(Request $request){

        return view('category/addcategory');
    }

    /*
  * Route::get('/order-list','DashboardController@orderlist')->name('order-list');
  */
    public function orderlist(Request $request){

        return view('order/orderlist');
    }

    /*
  * Route::get('/ongoing-order','DashboardController@ongoingorder')->name('ongoing-order');
  */
    public function ongoingorder(Request $request){

        return view('order/ongoingorder');
    }

    /*
  * Route::get('/completed-order','DashboardController@completedorder')->name('completed-order');
  */
    public function completedorder(Request $request){

        return view('order/completedorder');
    }

    /*
  * Route::get('/cancelled-order','DashboardController@cancelledorder')->name('cancelled-order');
  */
    public function cancelledorder(Request $request){

        return view('order/cancelledorder');
    }

    /*
  * Route::get('/banner-list','DashboardController@bannerlist')->name('banner-list');
  */
    public function bannerlist(Request $request){

        return view('appsetting/bannerlist');
    }

    /*
    * Route::get('/coupen-setting','DashboardController@coupensetting')->name('coupen-setting');
    */
    public function coupensetting(Request $request){

        return view('appsetting/coupensetting');
    }

}
