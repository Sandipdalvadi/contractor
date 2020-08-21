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
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
class WebServiceController extends Controller
{

    public function registerCustomer(Request $request)  
    { 
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);
        $urlnew = url(''); 
        $new = str_replace('index.php', '', $urlnew);
        try
        {           
            if((!isset($post['email'])) || (!isset($post['userName'])) || (!isset($post['deviceToken'])) || (!isset($post['device'])) || (!isset($post['languageCode'])) || (!isset($post['isEmailverified']))|| (!isset($post['isPhoneVerified']))|| (!isset($post['isSocial'])) || (empty($post['email'])) || (empty($post['userName'])) || (empty($post['deviceToken'])) || (empty($post['device'])) || (empty($post['languageCode'])) || (empty($post['isEmailverified'])))
            {
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
            }
            elseif($post['isSocial'] == 1){
                if((!isset($post['socialType']) || $post['socialType'] == 1 || $post['socialType'] == "1") && (!isset($post['facebookId']) || empty($post['facebookId']))){
                    $response = array('success' => 0, 'message' => 'Facebook id required');
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
                }
                elseif((!isset($post['socialType']) || $post['socialType'] == 2 || $post['socialType'] == "2") && (!isset($post['googleId']) || empty($post['googleId']))){
                    $response = array('success' => 0, 'message' => 'Google id required');
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
                }
                elseif((!isset($post['socialType']) || $post['socialType'] == 3 || $post['socialType'] == "3") && (!isset($post['appleId']) || empty($post['appleId']))){
                    $response = array('success' => 0, 'message' => 'Apple id required');
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
                }
                $password = $phone = $facebookId = $googleId = $appleId = "";
                if($post['socialType'] == "1" || $post['socialType'] == 1){
                    $facebookId = $post['facebookId'];
                }
                if($post['socialType'] == "2" || $post['socialType'] == 2){
                    $googleId = $post['googleId'];
                }
                if($post['socialType'] == "3" || $post['socialType'] == 3){
                    $appleId = $post['appleId'];
                }
                $image = $post['image'];
                $imageLink = 1;
            }
            elseif($post['isSocial'] == 0){
                if((!isset($post['phone'])) || (!isset($post['password'])) || (empty($post['phone'])) || (empty($post['password']))){
                    $response = array('success' => 0, 'message' => 'All Feilds are required');
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
                }
                
                $checkPhone = User::where('phone',$post['phone'])->first();
                if (!empty($checkPhone)) 
                {
                    $response = array('success' => 0, 'message' => 'This Phone Already Exists');
                    echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
                }
                $image = $facebookId = $googleId = $appleId = "";
                $phone = $post['phone'];
                $password = Hash::make($post['password']);
                $imageLink = 0;
            }

            $checkEmail = User::where('email',$post['email'])->first();
            if (!empty($checkEmail)) 
            {
                $response = array('success' => 0, 'message' => 'This Email Already Exists');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
            }
            $user = new User;
            $user->name = $post['userName'];
            $user->email = $post['email'];
            $user->password = $password;
            $user->is_email_verified = $post['isEmailverified'];
            $user->is_mobile_verified = $post['isPhoneVerified'];
            $user->image = $image;
            $user->phone = $phone;
            $user->language_code = $post['languageCode'];
            $user->is_image_link = $imageLink;
            $user->facebook_id = $facebookId;
            $user->google_id = $googleId; 
            $user->apple_id = $appleId;
            $user->is_social = $post['isSocial'];
            $user->device_token = $post['deviceToken'];
            $user->device = $post['device'];
            $user->status = 1;
            $user->created_at = get_timestamp();
            $user->updated_at = get_timestamp();
            $user->save();

            $userData=[];
            $userData['userId']=(string)$user->id;
            $userData['userName']=$user->name ? $user->name : '';
            $userData['email']=$user->email ? $user->email : '';
            $userData['isEmailverified'] = $user->is_email_verified;
            $userData['isPhoneVerified'] = $user->is_mobile_verified;
            $userData['phone']=$user->phone ? $user->phone : '';
            if($user->is_image_link == 1){
                $userData['image'] = $user->image ? $user->image : '';
            }
            else{
                 $userData['image'] = file_exists_in_folder("profile",$user->image);
            }
            $userData['languageCode'] = $user->language_code;
            $userData['facebookId'] = $user->facebook_id ? $user->facebook_id : '';
            $userData['googleId'] = $user->google_id ? $user->google_id : '';
            $userData['appleId'] = $user->apple_id ? $user->apple_id : '';
            $userData['isSocial'] = $user->is_social;
            $userData['deviceToken'] = $user->device_token ? $user->device_token : '';
            $userData['device'] = $user->device;
            $userData['registerTime'] = get_time($user->created_at, "Y/m/d H:i:s");
            $response = array('success' => 1, 'message' => 'User Registered Succeessfully','result' => $userData);
            echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;            
        }
        catch(Exception $e)
        {
            $response = array('success' => 0, 'message' => $e->getMessage());
            echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
        }   
    }
  
    public function loginCustomerSocial(Request $request)
    {
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);
        $urlnew = url(''); 
        $new = str_replace('index.php', '', $urlnew);
        try
        {
            if((!isset($post['email'])) || (!isset($post['userName'])) || (!isset($post['deviceToken'])) || (!isset($post['device'])) || (!isset($post['languageCode'])) || (!isset($post['isEmailverified'])) || (!isset($post['isPhoneVerified'])) || (!isset($post['isSocial'])) || (!isset($post['image'])) || (!isset($post['socialType'])) || (empty($post['email'])) || (empty($post['userName'])) || (empty($post['deviceToken'])) || (empty($post['device'])) || (empty($post['languageCode'])) || (empty($post['isEmailverified'])) || (empty($post['isSocial'])) || (empty($post['image'])) || (empty($post['socialType'])))
            {
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
            }
                
            $user = User::where('email',$post['email'])->first();      
            $user = !empty($user) ? User::find($user->id) : new User;
            $user->name = $post['userName'];
            $user->email = $post['email'];
            $user->is_email_verified = $post['isEmailverified'];
            $user->is_mobile_verified = $post['isPhoneVerified'];
            $user->image = $post['image'];
            $user->language_code = $post['languageCode'];
            $user->is_image_link = 1;
            if((isset($post['socialType'])) && (!empty($post['socialType']))){
                if($post['socialType'] == "1" || $post['socialType'] == 1){
                    $user->facebook_id = $post['facebookId'];
                }
                elseif($post['socialType'] == "2" || $post['socialType'] == 2){
                    $user->google_id = $post['googleId'];
                }
                elseif($post['socialType'] == "3" || $post['socialType'] == 3){
                    $user->apple_id = $post['appleId'];
                }
            }
            else{
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
            }
            $user->is_social = $post['isSocial'];
            $user->device_token = $post['deviceToken'];
            $user->device = $post['device'];
            empty($user) ? $user->status = 1 : '';
            empty($user) ? $user->created_at = get_timestamp() : '';
            $user->updated_at = get_timestamp();
            $user->save();
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
                else if($user->status== 1 )
                {
                    $userData=array();
                    $userData=[];
                    $userData['userId']=(string)$user->id;
                    $userData['userName']=$user->name ? $user->name : '';
                    $userData['email']=$user->email ? $user->email : '';
                    $userData['isEmailverified'] = $user->is_email_verified;
                    $userData['isPhoneVerified'] = $user->is_mobile_verified;
                    $userData['phone']=$user->phone ? $user->phone : '';
                    $userData['image'] = $user->image ? $user->image : '';
                    $userData['languageCode'] = $user->language_code;
                    $userData['facebookId'] = $user->facebook_id ? $user->facebook_id : '';
                    $userData['googleId'] = $user->google_id ? $user->google_id : '';
                    $userData['appleId'] = $user->apple_id ? $user->apple_id : '';
                    $userData['isSocial'] = $user->is_social;
                    $userData['deviceToken'] = $user->device_token ? $user->device_token : '';
                    $userData['device'] = $user->device;
                    $userData['registerTime'] = get_time($user->created_at, "Y/m/d H:i:s");
                    
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

    public function loginCustomer(Request $request)
    {
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);
        $urlnew = url(''); 
        $new = str_replace('index.php', '', $urlnew);
        try
        {  
            if((!isset($post['email'])) || (!isset($post['password'])) || (!isset($post['deviceToken'])) || (!isset($post['device']))|| (!isset($post['languageCode']))|| (!isset($post['isSocial']))|| (!isset($post['password'])) || (empty($post['email'])) || (empty($post['password'])) || (empty($post['deviceToken'])) || (empty($post['device']))|| (empty($post['languageCode']))|| (empty($post['password'])))
            {
                $response = array('success' => 0, 'message' => 'All Fields Are Required');
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;     
            }
            
                
            $user = User::where('phone',$post['phone'])->first();      
            if(empty($user))
            {
                $arr = array('success' => 0, 'message' => 'Invalid mobile or password.');
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
                    $userData['userId']=(string)$user->id;
                    $userData['userName']=$user->name ? $user->name : '';
                    $userData['email']=$user->email ? $user->email : '';
                    $userData['isEmailverified'] = $user->is_email_verified;
                    $userData['isPhoneVerified'] = $user->is_mobile_verified;
                    $userData['phone']=$user->phone ? $user->phone : '';
                    if($user->is_image_link == 1){
                        $userData['image'] = $user->image ? $user->image : '';
                    }
                    else{
                        $userData['image'] = file_exists_in_folder("profile",$user->image);
                    }
                    $userData['languageCode'] = $user->language_code;
                    $userData['facebookId'] = $user->facebook_id ? $user->facebook_id : '';
                    $userData['googleId'] = $user->google_id ? $user->google_id : '';
                    $userData['appleId'] = $user->apple_id ? $user->apple_id : '';
                    $userData['isSocial'] = $user->is_social;
                    $userData['deviceToken'] = $user->device_token ? $user->device_token : '';
                    $userData['device'] = $user->device;
                    $userData['registerTime'] = get_time($user->created_at, "Y/m/d H:i:s");
                    
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
    public function categoryList(){
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);
    
        $urlnew = url(''); 
        $new = str_replace('index.php', '', $urlnew);   
        try
        {
            $limit = isset($post['startLimit']) ? $post['startLimit'] : 0;
            $categories = Category::where('status','1')->limit(10)->offset($limit)->orderBy('id', 'desc')->get();
            $totalCount = Category::where('status','1')->count();
            $allCategories = [];
            if(count($categories))
            {
                foreach($categories as $category)
                {
                    $allCategory['id'] = $category->id;
                    $allCategory['name'] = $category->name_ar ? $category->name_ar : '';
                    $allCategory['name'] = $category->name_en ? $category->name_en : '';
                    $allCategory['name'] = $category->name_ur ? $category->name_ur : '';
                    $allCategory['image'] = file_exists_in_folder("category",$category->image);
                    $allCategories[] = $allCategory;
                }
                $response = array('success' => 1 ,'message' => 'Category loaded successfully.','totalCount'=>$totalCount, 'result' => $allCategories);
                echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
            }
            else
            {
                $response = array('success' => 0, 'message' => 'No Category added.');
                 echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
            }
        }
        catch(Exception $e)
        {
            $response = array('success' => 0, 'message' => $e->getMessage());
            echo json_encode($response,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_UNESCAPED_UNICODE|JSON_HEX_AMP);exit;
        }
    }
    
}