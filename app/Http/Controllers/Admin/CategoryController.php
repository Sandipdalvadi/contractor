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

        return view('admin.category.index');
    }

    public function list(Request $request)
    {
        $columns = array( 
            0 =>'Id', 
            1 =>'Id', 
            2 =>'Name',
            3 =>'Image',
        );
  
        $totalData = DB::table('car_type')->count();
        $totalFiltered = $totalData; 
        $limit = $request->request->get('length');
        $start = $request->request->get('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(!empty($request->input('search.value')))
        {            
            $search = $request->input('search.value'); 

            $posts =  DB::table('car_type')->Where('Id', 'LIKE',"%{$search}%")
                    ->orWhere('Name', 'LIKE',"%{$search}%")
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();

            $totalFiltered = DB::table('car_type')->where('Id','LIKE',"%{$search}%")
                    ->orWhere('Name', 'LIKE',"%{$search}%")
                    ->count();
        }   
        else
        {            
            $posts = DB::table('car_type')
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
        }
        $data = array();
        $data1=array();

        if($posts)
        {
            foreach ($posts as $post) 
            {
                $name = $post->name ? $post->name : '';
                $img= $post->image ? $post->image : '';
                
                if($img != '')
                {
                    $image = "<img src=".URL::To('public/car_type/'.$post->image)." width='100px'>";
                }
                else
                {
                    $image = "<img src=".URL::To('public/default_image/default-image.jpeg').">";
                }
                $data['checkdata']="<input type='checkbox' class='case' name='case' value='$post->id'>";
                $data['Id'] = $post->id;
                $data['Name'] = $name;
                $data['Image'] = $image;

                $data['action'] = "<a style='float:left;' href=".route('car_type.form',['id'=>$post->id])." title='EDIT' class='btn btn-primary' ><span class='glyphicon glyphicon-edit'></span></a>
                <form style='float:left;margin-left:6px;' method='POST' action=".route('car_type.delete',['id'=>$post->id]).">";
               
                $data['action'] .=  csrf_field();
                $data['action'] .= method_field("DELETE");
                $data['action'] .=  "<button class='btn btn-danger'><i class='glyphicon glyphicon-remove aria-hIdden='true'></i></button></form>";

                $data1[]=$data;
            }
        }
        $json_data = array(
            "draw"            => intval($request->request->get('draw')),  
            "recordsTotal"    => intval($totalData),  
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data1   
        );
        echo json_encode($json_data); 
    }
    
    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(Request $request)
    {   
        $carType = $request->id ? CarType::find($request->id) : new CarType ;  
        return view('admin.car_type.create',['carType'=>$carType]);
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
