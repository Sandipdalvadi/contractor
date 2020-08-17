<?php 

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Auth, Hash, DB, Lang, URL;

class CategoryController extends Controller
{
    public function index()
    { 
        $result = Category::get();
        return view('admin.category.index',['result'=>$result]);
    }
    
    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(Request $request)
    {   
        $category = $request->id ? Category::find($request->id) : new Category ;  
        return view('admin.category.form',['category'=>$category]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */

    

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_ar' => 'required|max:255',
            'name_ur' => 'required|max:255',
            'name_en' => 'required|max:255',
        ]);

        if($validator->fails())
        {
            return redirect()->route('admin.category.form',['id'=>$request->id])->withErrors($validator)->withInput();
        } 
        $category = $request->id ? Category::findOrFail($request->id) : new Category;
        $category->name_ar = $request->name_ar;
        $category->name_en = $request->name_en;
        $category->name_ur = $request->name_ur;
        if ($files = $request->file('image')) 
        {
            $destinationPath = public_path('category/'); // upload path
            // echo $destinationPath;exit;
            $catImage = time() . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $catImage);


            old_file_remove('category',$category->image);
            $category->image = $catImage;    
        } 
        $category->save();
        $message = $request->id ? "Category Updated Successfully" :"New Category Created Successfully";
        return redirect()->route('admin.category.index')->with('message', $message );
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
