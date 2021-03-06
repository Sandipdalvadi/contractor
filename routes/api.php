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

// Route::middleware('auth:api')->get('/user', function (Reques•••••••t $request) {
//     return $request->user();
// });

Route::namespace('Api')->group(function(){
    // Route::post('/registerCustomerSocial', 'WebserviceController@registerCustomerSocial');
    Route::post('/register', 'WebserviceController@register');
    Route::post('/login', 'WebserviceController@login');
    // Route::post('/loginCustomer', 'WebserviceController@loginCustomer');
    // Route::post('/login', 'WebserviceController@login');
    // Route::post('/categoryList', 'WebserviceController@categoryList');
    // Route::middleware(['\App\Http\Middleware\AuthBasic'])->group(function () {
    //     Route::post('/editCustomerProfile', 'WebserviceController@editCustomerProfile');
    // });
    // Route::group(['middleware' => 'auth:api'], function(){
        Route::post('/categoryList', 'WebserviceController@categoryList');
        // Route::post('/categoryList', function (){
        //     // Session::put('locale', $locale);
        //     return "Hello";
        // });
        
        Route::post('/details', 'WebserviceController@details');
        Route::post('/editProfile', 'WebserviceController@editProfile');
    // });
});