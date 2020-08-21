<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        // echo Hash::make(123456);
        // exit;
        return view('auth.login',[
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }
    private function validator(Request $request)
{
    //validation rules.
    $rules = [
        'phone'    => 'required|exists:admins|min:5|max:191',
        'password' => 'required|string|min:4|max:255',
    ];

    //custom validation error messages.
    $messages = [
        'phone.exists' => 'These credentials do not match our records.',
    ];

    //validate the request.
    $request->validate($rules,$messages);
}
private function loginFailed(){
    return redirect()
        ->back()
        ->withInput()
        ->with('error','Login failed, please try again!');
}
public function login(Request $request)
{
    $this->validator($request);
    
    if(Auth::guard('admin')->attempt($request->only('phone','password'),$request->filled('remember'))){
        //Authentication passed...
        return redirect()
        ->intended(route('admin.home'))
        ->with('status','You are Logged in as Admin!');
    }
    // echo "<pre>";print_r($request->all());exit;

    //Authentication failed...
    return $this->loginFailed();
}
public function logout()
{
    Auth::guard('admin')->logout();
    return redirect()
        ->route('admin.login')
        ->with('status','Admin has been logged out!');
}

}
