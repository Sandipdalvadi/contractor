<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Category;

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

    public function index()
    {
        $categories = Category::where('status','1')->get();
        // echo "<pre>";print_r($categories);exit;
        return view('user.home',['categories'=>$categories]);
    }
}
