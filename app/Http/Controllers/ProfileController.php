<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function profile()
    {
        // echo 111;exit;
            return view('user.profile');
        
    }
    public function editProfile()
    {
        return view('user.edit_profile');
        
        
    }
    
}
