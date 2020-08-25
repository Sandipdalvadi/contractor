<?php 

namespace App\Http\Controllers\Admin;

use App\Model\SiteSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth, Hash, DB, Lang, URL;

class SiteSettingController extends Controller
{
    // public function index()
    // { 
    //     $result = Category::get();
    //     return view('admin.category.index',['result'=>$result]);
    // }
    
    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(Request $request)
    {   
        $siteSetting = $request->id ? SiteSetting::find($request->id) : new SiteSetting ;  
        return view('admin.siteSetting.form',['siteSetting'=>$siteSetting]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */

    

    public function store(Request $request)
    {
        $siteSetting = $request->id ? SiteSetting::findOrFail($request->id) : new SiteSetting;
        $siteSetting->about_ar = $request->about_ar;
        $siteSetting->about_en = $request->about_en;
        $siteSetting->about_ur = $request->about_ur;
        $siteSetting->status = $request->status;
        if ($files = $request->file('siteLogo')) 
        {
            $destinationPath = public_path('default_images/'); // upload path
            // echo $destinationPath;exit;
            $logoImage = time() . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $logoImage);


            old_file_remove('default_images',$siteSetting->siteLogo);
            $siteSetting->siteLogo = $logoImage;    
        } 
        $siteSetting->save();
        $message = $request->id ? "Site Setting Updated Successfully" :"Site Setting Created Successfully";
        return redirect()->route('admin.siteSetting')->with('message', $message );
    }

    public function destroy($id)
    {   
        $category = Category::findOrFail($id);
        old_file_remove('category',$category->image);
        $category->delete();
        return redirect()->route('admin.category.index')->with('message',"Category Deleted Successfully");
      
    }
    public function changeStatus($id, Request $request)
    {   
        $category = Category::findOrFail($id);
        // old_file_remove('category',$category->image);
        $category->status = $request->status;
        $category->save();
        // return redirect()->route('admin.category.index')->with('message',"Category Deleted Successfully");
      
    }
}
