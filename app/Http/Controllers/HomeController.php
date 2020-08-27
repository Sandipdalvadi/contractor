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
        return view('user.home',['categories'=>$categories]);
    }
    public function browseJobs()
    {
        $categories = Category::where('status','1')->get();
        return view('user.browse_jobs',['categories'=>$categories]);
    }
    public function popularCompany()
    {
        $categories = Category::where('status','1')->get();
        return view('user.popular_company',['categories'=>$categories]);
    }
}
