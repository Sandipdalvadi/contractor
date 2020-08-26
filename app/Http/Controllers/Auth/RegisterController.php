<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Model\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function verifyPhone(){
        return view('auth.register_phone');
    }
    public function confirmVerify(Request $request){
        $user = User::where('phone',$request->phone)->first();
        $returnArray = [];
        if(!empty($user)){
            // return
            $returnArray['status'] = 0;
            $returnArray['message'] = "This mobile number already register";
            $returnArray['redirect'] = route('auth.verifyPhone');
        }
        else{
            $request->session()->put('userPhone', $request->phone);
            $returnArray['status'] = 1;
            $returnArray['message'] = "Mobile Register";
            $returnArray['redirect'] = route('registerForm');
        }
        return $returnArray;
    }
    public function showRegisterForm(Request $request){
        $phoneNumber = $request->session()->get('userPhone');
        if($phoneNumber != ""){
            return view('auth.register_profile',['phone'=>$phoneNumber]);
        }
        else{
            return redirect()->route('auth.verifyPhone')->with('error','Please verify mobile number');
        }
        
        // echo $value;
    }
    protected function validator(array $data)
    {
        // echo "<pre>";print_r($data);exit;
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string','max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            // echo "<pre>";print_r($data);exit;
        }
        
        /**
         * Create a new user instance after a valid registration.
         *
         * @param  array  $data
         * @return \App\User
         */
        protected function create(array $data)
        {
            session()->forget('userPhone');

            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'is_email_verified' => 0,
            'is_mobile_verified' => 1,
            'language_code' => 1,
            'is_social' => 0,
            'status'=>1,
            'created_at'=>get_timestamp(),
            'updated_at'=>get_timestamp()
        ]);
    }
}
