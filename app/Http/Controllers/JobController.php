<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;
use App\Model\Category;
use App\Model\Country;
use App\Model\UserDetails;
use App\Model\UserCategory;


class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function createProject()
    {
        $user = Auth::user();
        
        return view('user.create_project');
        
    }
}