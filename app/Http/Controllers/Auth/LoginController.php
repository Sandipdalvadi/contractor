<?php

namespace App\Http\Controllers\Auth;
use Hash;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Socialite;
use App\Model\User;
// use App\Http\facebookToken\Facebook;
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
        return view('auth.login',[
            'title' => 'Login',
            'loginRoute' => 'login',
            'forgotPasswordRoute' => 'password.request',
        ]);
    }
    public function login(Request $request)
    {
        $this->validator($request);
        
        if(Auth::guard('web')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
            ->intended(route('home'))
            ->with('status','You are Logged in as Admin!');
        }
        // echo "<pre>";exit;
    
        //Authentication failed...
        return $this->loginFailed();
    }

    private function validator(Request $request)
    {
        $rules = [
            'email'    => 'required',
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
        // echo "Hello";exit;
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
    public function handleProviderCallback($driver)
    {
        try {
            $user = Socialite::driver($driver)->user();
        } catch (\Exception $e) {
        // echo "<pre>";print_r("Hello");exit;
            
            return redirect()->route('login');
            
        }
        // $facebook = new Facebook(array(
        //     'appId'  => "2628932507423359",
        //     'secret' => "a48b4b47c0837808e616d777df3be472",
        // ));
        // echo "<pre>";print_r($facebook);exit;
        
        // $facebook->setAccessToken($_REQUEST['access_token']);
        
        // if (($userId = $facebook->getUser())) {
        //     // $_REQUEST['access_token'] is valid token for user with id $userId
        // }
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            if($existingUser->status == 1){
                auth()->login($existingUser, true);
            }
            else{
                return redirect()->route('login')->with('message',"You are blocked please contact us!");
            }
        } else {
            $newUser                    = new User;
            if($driver == "google"){
                $newUser->google_id       = $user->getId();
            }
            elseif($driver == "facebook"){
                $newUser->facebook_id       = $user->getId();
            }
            elseif($driver == "apple"){
                $newUser->apple_id       = $user->getId();
            }
            // $newUser->provider_name     = $driver;
            $newUser->name              = $user->getName();
            $newUser->email             = $user->getEmail();
            $newUser->is_email_verified= 1;
            $newUser->is_mobile_verified= 0;
            $newUser->email_verified_at = now();
            $newUser->image            = $user->getAvatar();
            $newUser->is_image_link            = 1;
            $newUser->language_code = 1;
            $newUser->status = 1;
            $newUser->is_social = 1;
            $newUser->created_at = get_timestamp();
            $newUser->updated_at = get_timestamp();
            $newUser->save();

            auth()->login($newUser, true);
        }

        // return redirect($this->redirectPath());
        return redirect()->route('user.profile')->with('message','User login successfully');;
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('status','User has been logged out!');
    }
}
