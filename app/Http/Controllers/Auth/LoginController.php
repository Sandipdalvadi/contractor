<?php

namespace App\Http\Controllers\Auth;
use Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
        // echo Hash::make(123456);
        // exit;
        return view('auth.login',[
            'title' => 'Login',
            'loginRoute' => 'login',
            'forgotPasswordRoute' => 'password.request',
        ]);
    }
    public function login(Request $request)
    {
        $this->validator($request);
    // echo "Validator<pre>";print_r($request->all());exit;
        
        if(Auth::guard('web')->attempt($request->only('phone','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
            ->intended(route('home'))
            ->with('status','You are Logged in as Admin!');
        }
        // echo "<pre>";print_r($request->all());exit;

        //Authentication failed...
        return $this->loginFailed();
    }

    private function validator(Request $request)
    {
    //validation rules.
    // echo "Validator<pre>";print_r($request->all());exit;
    $rules = [
        'phone'    => 'required',
        'password' => 'required|string|min:4|max:255',
    ];

    //custom validation error messages.
    $messages = [
        'email.exists' => 'These credentials do not match our records.',
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

public function logout(){
    Auth::logout();
    return redirect('/')->with('status','User has been logged out!');
}
}
