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
        $result = Category::where('status',1)->get();
        // echo "<pre>";
        // print_r($result);
        // exit;
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
            'name' => 'required|max:255'
        ]);

        if($validator->fails())
        {
            return redirect()->route('car_type.form',['id'=>$request->id])->withErrors($validator)->withInput();
        } 
        $carType = $request->id ? CarType::findOrFail($request->id) : new CarType;
        $carType->name = $request->name;

        if ($files = $request->file('image')) 
        {
         
            $destinationPath = public_path('car_type/'); // upload path
            $carImage = time() . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $carImage);
            $oldFile = $carType->image ? public_path('car_type/'.$carType->image) : '';
            $oldFile != '' ? unlink($oldFile) : '';
            $carType->image = $carImage;    
        } 

        $carType->save();
        $message = $request->id ? "Car Type Updated Successfully" :"New Car Type Created Successfully";
        return redirect()->route('car_type.index')->with('message', $message );
    }

    public function destroy($id)
    {   
        $carType = CarType::findOrFail($id);
        $oldFile = $carType->image ? public_path('car_type/'.$carType->image) : '';
        $oldFile != '' ? unlink($oldFile) : '';
        $carType->delete();
        return redirect()->route('car_type.index')->with('message',"Car Type Deleted Successfully");
      
    }

    public function alldeletes(Request $request)
    {   
        $multiId = $request->id; 
        
        foreach ($multiId as $singleId) 
        {
            $carType = CarType::findOrFail($singleId);
            $oldFile = $carType->image ? public_path('car_type/'.$carType->image) : '';
            $oldFile != '' ? unlink($oldFile) : '';
            $carType->delete();
        }
      
    }
}
