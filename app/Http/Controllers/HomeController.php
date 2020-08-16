<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // echo 111;exit;
        return view('user.home');
    }
    public function profile()
    {
        // echo 111;exit;
        return view('user.profile');
    }
    public function editProfile()
    {
        // echo 111;exit;
        return view('user.edit_profile');
    }
    
}
