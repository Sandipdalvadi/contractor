<?php

use Illuminate\Support\Facades\Route;



Route::get('/','HomeController@index');

// Route::get('/login', function (){
//     // Session::put('locale', $locale);
//     return "Hello";
// });

Route::namespace('Auth')->group(function(){
    //Login Routes
    Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::post('/login','LoginController@login');
    Route::post('/logout','LoginController@logout')->name('logout');

    //Forgot Password Routes
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    //Reset Password Routes
    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    Route::namespace('Auth')->group(function(){

        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::get('/logout','LoginController@logout')->name('logout');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
    });

    Route::get('locale/{locale}', function ($locale){
        Session::put('locale', $locale);
        return redirect()->back();
    })->name('locale');
    Route::get('/dashboard','HomeController@index')->name('home');
    
    $paths = array(
        'category'       => 'CategoryController'
    );
    foreach($paths as $slug => $controller){
        Route::get('/'.$slug.'/index', $controller.'@index')->name($slug.'.index');
        // Route::post('/'.$slug.'/list', $controller.'@list')->name($slug.'.list');
        Route::delete('/'.$slug.'/delete/{id}', $controller.'@destroy')->name($slug.'.delete');
        Route::get('/'.$slug.'/form/{id}', $controller.'@form')->name($slug.'.form');
        Route::post('/'.$slug.'/store/', $controller.'@store')->name($slug.'.save');
    }
    
    //All the admin routes will be defined here...
});
