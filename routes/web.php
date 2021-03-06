<?php

use Illuminate\Support\Facades\Route;



Route::get('/','HomeController@index');

// Route::get('/login', function (){
//     // Session::put('locale', $locale);
//     return "Hello";
// });

Route::namespace('Auth')->group(function(){
    //Login Routes
    Route::get('/verify_phone','RegisterController@verifyPhone')->name('auth.verifyPhone');
    Route::post('/confirm_verify','RegisterController@confirmVerify')->name('auth.confirmVerify');
    Route::get('/register_form','RegisterController@showRegisterForm')->name('registerForm');
    Route::post('/register','RegisterController@create');
    
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
Route::get('/profile', 'ProfileController@profile')->name('user.profile');
Route::get('/edit_profile', 'ProfileController@editProfile')->name('user.editprofile');
Route::post('/edit_profile', 'ProfileController@updateProfile')->name('user.updateProfile');
// Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('/callback/{driver}', 'Auth\LoginController@handleProviderCallback');
Route::post('/facebook_login', 'Auth\LoginController@facebookLogin')->name('user.facebookLogin');

Route::get('/create_project', 'JobController@createProject')->name('user.createProject');
Route::get('/browse_jobs', 'HomeController@browseJobs')->name('user.browseJobs');
Route::get('/popular_company', 'HomeController@popularCompany')->name('user.popularCompany');

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');


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
    Route::get('/edit/profile','HomeController@editProfile')->name('profile.edit');
    Route::post('/update/profile','HomeController@updateProfile')->name('profile.update');
    Route::get('/siteSetting/form','SiteSettingController@form')->name('siteSetting');
    Route::post('/siteSetting/save','SiteSettingController@save')->name('siteSetting.save');
    
    // Route::get('/category/changeStatus/{id}','CategoryController@changeStatus')->name('category.changeStatus');
    
    $paths = array(
        'category'       => 'CategoryController'
    );
    foreach($paths as $slug => $controller){
        Route::get('/'.$slug.'/index', $controller.'@index')->name($slug.'.index');
        // Route::post('/'.$slug.'/list', $controller.'@list')->name($slug.'.list');
        Route::get('/'.$slug.'/delete/{id}', $controller.'@destroy')->name($slug.'.delete');
        Route::get('/'.$slug.'/form/{id}', $controller.'@form')->name($slug.'.form');
        Route::get('/'.$slug.'/changeStatus/{id}', $controller.'@changeStatus')->name($slug.'.changeStatus');
        Route::post('/'.$slug.'/store/', $controller.'@store')->name($slug.'.save');
    }
    
    //All the admin routes will be defined here...
});

// URL::forceScheme('https');

