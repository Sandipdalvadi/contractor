<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        // $code = public_url();
        // $image = file_exists_in_folder('profile','default_user11.jpg');
        // print_r($image);
        // exit;
        return view('admin.home');
    }
}
