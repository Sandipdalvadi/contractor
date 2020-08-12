<?php 

namespace App\Http\Controllers\Api;

use Validator;
use DB;
use Hash;
use Auth;
use Carbon;
use Session;
use Lang;
use App;
use URL;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
class WebServicesController extends Controller
{  
    public function registerCustomer(Request $request)  
    { 
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);
        $urlnew = url(''); 
        $new = str_replace('index.php', '', $urlnew);    
        // echo "<pre>";print_r($post);exit;
        try
        {           
            if((!isset($post['userName'])) || (!isset($post['email'])) || (!isset($post['password'])) || (!isset($post['device_type'])) || (!isset($post['device_token'])) || (!isset($post['phone_number'])) || (empty($post['userName'])) || (empty($post['email'])) || (empty($post['password'])) || (empty($post['phone_number'])) || (empty($post['device_type'])) || (empty($post['device_token'])))
            {
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
            }
            $userName=$post['userName'];
            $email=$post['email'];
            $password=$post['password'];
            $phone_number=$post['phone_number'];
            
            $checkEmail = DB::table('users')->select('*')->where('email','=',$email)->first();
            $names=explode('@',$email);
            $name = $names[0];
            if (!empty($checkEmail)) 
            {
                $response = array('success' => 0, 'message' => 'This Email Already Exists');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
            }

            $userCreate = DB::table('users')->insertGetId([
                'name' => $userName,
                'email'=> $email,
                'password'=> Hash::make($password),
                'phone_number'=> $phone_number,
                'profile_pic'=> '',
                'user_type'=> '1',
                'status'=> '1'
            ]);    
            
            $user = DB::table('users')->select('*')->where('email','=',$email)->first();      
            $device_token = DB::table('device_token')->insertGetId([
                'user_id' => $user->id,
                'device_type'=> $post['device_type'],
                'device_token'=> $post['device_token']
            ]);         
            $adminData = User::where('user_type',3)->first();
            $userData=[];

            $userData['userId']=(string)$user->id;
            $userData['userName']=$user->name ? $user->name : '';
            $userData['email']=$user->email ? $user->email : '';
            $userData['phone_number']=$user->phone_number ?  $user->phone_number : '';
            $userData['user_type'] = $user->user_type;
            $userData['admin_id'] = $adminData->id;
            if($user->profile_pic == '' )
            {
                $userData['profile_pic']=str_replace("/index.php/","/", url('public/profile_pic/default-image-old.jpeg'));
            }
            else
            {
                
                $userData['profile_pic']= file_exists( public_path().'/profile_pic/'.$user->profile_pic) ? URL::To('public/profile_pic/'.$user->profile_pic) : URL::To('public/default_image/default-image.jpeg');
            }
            $response = array('success' => 1, 'message' => 'User Registered Succeessfully','result' => $userData);
            echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;            
                      
        }
        catch(Exception $e)
        {

            $response = array('success' => 0, 'message' => $e->getMessage());
            echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
        }   
    }
  
    public function loginCustomer(Request $request)
    {
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);
        $urlnew = url(''); 
        $new = str_replace('index.php', '', $urlnew);
        try
        {           
            // if((!isset($post['email'])) || (!isset($post['password'])) || (!isset($post['device_type'])) || (!isset($post['device_token'])) || (!isset($post['user_type'])))
            if((!isset($post['email'])) || (!isset($post['password'])) || (!isset($post['device_type'])) || (!isset($post['device_token'])))
            {
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
            }
            // if($post['device_type'] == '' || $post['device_token'] == '0' || $post['email'] == '' || $post['password'] == ''  || (empty($post['user_type'])))
            if($post['device_type'] == '' || $post['device_token'] == '0' || $post['email'] == '' || $post['password'] == '')
            {
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
            }
            $email = $post['email'];

            if(isset($post['user_type'])){
                
                $user = DB::table('users')->select('*')->where('email','=',$email)->where('user_type',$post['user_type'])->first();      
            }
            else
            {
                $user = DB::table('users')->select('*')->where('email','=',$email)->where('user_type','1')->first();
            }
            if(empty($user))
            {
                $arr = array('success' => 0, 'message' => 'Invalid email or password.');
                echo json_encode($arr,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP);exit;       
            }
            else
            {
                if($user->status == 0) 
                {         
                    $arr = array('success' => 0, 'message' => 'User is blocked.');
                    echo json_encode($arr,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP);exit;          
                } 
                else if(!Hash::check($post["password"],$user->password))
                {
                    $arr = array('success' => 0, 'message' => 'Invalid email or password.');
                    echo json_encode($arr,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP);exit; 
                }
                else if($user->status== 1 )
                {
                    $userData=array();
                    $userData['userId']=(string)$user->id;
                    $userData['userName']=$user->name ? $user->name : '';
                    $userData['email']=$user->email ? $user->email : '';
                    $userData['user_type']=$user->user_type ? $user->user_type : 1;
                    $userData['phone_number']=$user->phone_number ?  $user->phone_number : '';
                    $adminData = User::where('user_type',3)->first();
                    $userData['admin_id'] = $adminData->id;
                    if($user->profile_pic == '' )
                    {
                        $userData['profile_pic']=str_replace("/index.php/","/", url('public/profile_pic/default-image-old.jpeg'));
                    }
                    else
                    {
                        $userData['profile_pic']=str_replace("/index.php/","/", url('public/profile_pic/'.$user->profile_pic));
                    }
                    $device_token = DeviceToken::where('user_id',$user->id)->first();
                    if(empty($device_token)){
                        $device_token = DB::table('device_token')->insertGetId([
                            'user_id' => $user->id,
                            'device_type'=> $post['device_type'],
                            'device_token'=> $post['device_token']
                        ]);       
                    }
                    else
                    {
                        $device_token->device_type = $post['device_type'];
                        $device_token->device_token = $post['device_token'];
                        $device_token->save();
                    }
                    $response = array('success' => 1, 'message' => 'Login Successfully' ,'result' => $userData);
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
                }
                else
                {
                    $response = array('success' => 0, 'message' => 'Email Or Password Invalid');
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
                }  
            }       
        }
        catch(Exception $e)
        {
            $response = array('success' => 0, 'message' => $e->getMessage());
            echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
        }
    }
}