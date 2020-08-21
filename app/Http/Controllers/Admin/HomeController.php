<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Hash;
use App\Model\Admin;
use App\Model\Category;
class HomeController extends Controller
{
    //
    public function index(){
        $categoryCount = Category::where('status','1')->count();
        // echo $categoryCount;exit;
        return view('admin.home',['categoryCount'=>$categoryCount]);
    }
    public function editProfile(){
        $userId = Auth::guard('admin')->id();
        $user = Admin::find($userId);
        // echo "<pre>";print_r($user);
        return view('admin.edit_profile',['user'=>$user]);
    }
    public function updateProfile(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email'=>'required',
        ]);
        $id = $request->input('id');
        $name = $request->input('name');
        $email= $request->input('email');
        $phone= $request->input('phone');
        $password = $request->input('Password');

        if($request->id > 0)
        {

            $admin = Admin::find($id);
            if($request->input('isChange') == '0'){
                $admin->password = Hash::make($password);
            }
            $admin->name = $name;
            $admin->email = $email;
            $admin->phone = $phone;
            $admin->save();
            
            return redirect()->route('admin.home');   
             
        }
        return redirect()->back();
    }
}
