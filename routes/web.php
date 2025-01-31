<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BrokerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\brokerLoginController;
use App\Http\Controllers\customerLoginController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\brokerPortalController;


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

// Route::get('/', function () {
//     return view('front.index');
// });



// Front pages 
Route::get('/', [frontController::class, 'index']);
Route::get('front/aboutus', [frontController::class, 'aboutus']);
Route::get('front/property', [frontController::class, 'property']);
Route::get('front/contactus', [frontController::class, 'contactus']);
Route::get('front/blog', [frontController::class, 'blog']);
Route::get('property/Filters', [frontController::class, 'filterproprty']);
Route::get('front/property/details', [frontController::class, 'propertydetail']);


// Admin authorization
Route::group(['middleware' => 'admin_auth'], function () {

    // Routs for customers
    Route::get('admin/customer', [CustomerController::class, 'show']);
    Route::get('admin/customer/show_customer_details/{id}', [CustomerController::class, 'show_customer']);


    // routs on dashboard page for form ->customers
    Route::get('search', [DashboardController::class, 'search']);
    Route::get('admin/dashboard', [DashboardController::class, 'search']);
    Route::post('search', [DashboardController::class, 'show']);


    // routs on dashboard page for form ->broker
    Route::get('bsearchcity', [DashboardController::class, 'search']);
    Route::post('bsearchcity', [DashboardController::class, 'showbc']);


    // Routs for brokers
    Route::get('admin/broker', [BrokerController::class, 'show']);
    Route::get('admin/customer/show_broker_details/{id}', [BrokerController::class, 'show_broker']);
    Route::get('admin/broker/status/{status}/{id}', [BrokerController::class, 'status']);


    // Searches done by broker
    Route::get('admin/admin/broker/search', [BrokerController::class, 'searches']);
});

Route::get('front/customer/show_customer_details/{id}', [CustomerController::class, 'show_CT_broker']);


// broker authorization

Route::group(['middleware' => 'broker_auth'], function () {

    // routs for customers
    Route::get('front/Regcustomer', [CustomerController::class, 'show_all_customer']);

    // routs for brokers
    Route::get('front/Regbroker', [BrokerController::class, 'show_all_broker']);
});




// broker and customer login check
Route::get('brokerlog', [BrokerController::class, 'index']);
Route::post('brokerlog/auth', [BrokerController::class, 'auth']);
Route::get('customerlog', [CustomerController::class, 'index1']);
Route::post('customerlog/auth', [CustomerController::class, 'auth']);



//admin login page
Route::get('admin', [adminLoginController::class, 'index']);
Route::post('admin/auth', [adminLoginController::class, 'auth'])->name('admin.auth');


//admin logout page
Route::get('logout', function () {
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->flash('error', 'logout successfully');
    return redirect('/');
});

//broker logout page
Route::get('broker/logout', function () {
    session()->forget('BROKER_LOGIN');
    session()->forget('BROKER_ID');
    session()->flash('error', 'logout successfully');
    return redirect('/');
});

// customer logout page
Route::get('customer/logout', function () {
    session()->forget('CUSTOMER_LOGIN');
    session()->forget('CUSTOMER_ID');
    session()->flash('error', 'logout successfully');
    return redirect('/');
});


// front end page routs
Route::get('front/brokerReg', [brokerLoginController::class, 'index']);
Route::get('front/customerReg', [customerLoginController::class, 'index']);


// customer registration
Route::post('front/customerInsert', [customerLoginController::class, 'manage_customer_process']);
Route::get('front/customerInsert', [customerLoginController::class, 'index']);
Route::get('front/customerInsert/delete/{id}', [customerLoginController::class, 'delete']);

//  broker registration
Route::post('front/brokerInsert', [brokerLoginController::class, 'manage_broker_process']);
Route::get('front/brokerInsert', [brokerLoginController::class, 'index']);
Route::get('front/brokerInsert/delete/{id}', [brokerLoginController::class, 'delete']);

//  broker Portal Routes
Route::get('broker/portal/dashboard', [brokerPortalController::class, 'index']);
Route::get('broker/portal/addProperty', [brokerPortalController::class, 'addProperty']);
Route::get('broker/portal/ListAllProperty', [brokerPortalController::class, 'ListAllProperty']);
Route::get('broker/portal/offers', [brokerPortalController::class, 'offers']);
Route::get('broker/portal/notifications', [brokerPortalController::class, 'notifications']);
Route::get('broker/portal/messages/chats', [brokerPortalController::class, 'chats']);
Route::get('broker/portal/history', [brokerPortalController::class, 'history']);
Route::get('broker/portal/propertyAnalytics', [brokerPortalController::class, 'propertyAnalytics']);
Route::get('broker/portal/accountSettings', [brokerPortalController::class, 'accountSettings']);
Route::get('broker/portal/supportResources', [brokerPortalController::class, 'supportResources']);
