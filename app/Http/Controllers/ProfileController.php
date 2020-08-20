<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;
use App\Model\Category;
use App\Model\Country;
use App\Model\UserDetails;
use App\Model\UserCategory;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function profile()
    {
        $user = Auth::user();
        $user = User::with([
            'hasOneUserDetails' => function($q){
                return $q->with('hasOneCountry');
            }
        ])->find($user->id);
        $userCategories = UserCategory::with('hasOneCategory')->where('user_id',$user->id)->get();
        
        return view('user.profile',['userCategories'=>$userCategories,'user'=>$user]);
        
    }
    public function editProfile()
    {
        $user = Auth::user();
        $user = User::with('hasOneUserDetails')->find($user->id);
        $categories = Category::where('status','1')->get();
        $countries = Country::all();
        $userCategory = UserCategory::where('user_id',$user->id)->get();
        $alreadyUser = [];
        
        foreach($userCategory as $userCategories){
            $alreadyUser[] = $userCategories->category_id;
        }
        $userCategory = $alreadyUser;
        // echo "<pre>";print_r($userCategory);exit;
        return view('user.edit_profile',['user'=>$user,'categories'=>$categories,'countries'=>$countries,'userCategory'=>$userCategory]);
        
        
    }
    public function updateProfile(Request $request){
        // echo "<pre>";print_r($request->all());
        // exit;
        $allSelectedCategory = $request->selected_category ? $request->selected_category : [];
        $alreadyUserCategory = UserCategory::where('user_id',$request->id)->get();
        foreach($alreadyUserCategory as $alreadyCategory){
            UserCategory::where('id',$alreadyCategory->id)->delete();
        }
        if(count($allSelectedCategory)){
                $selectedCategory = $request->selected_category; 
                foreach($selectedCategory as $category){
                    $userCategory = new UserCategory;
                    $userCategory->user_id = $request->id;
                    $userCategory->category_id = $category;
                    $userCategory->save();
                }
            }
        $userDetails = UserDetails::where('user_id',$request->id)->first();
        $userDetails = !empty($userDetails) ? $userDetails : new UserDetails;
        $userDetails->rate_per_hour = $request->rate_per_hour;
        $userDetails->user_id = $request->id;
        // $userDetails->selected_category = $request->selected_category;
        $userDetails->country = $request->country;
        $userDetails->about = $request->about;
        $userDetails->personal_characteristics = $request->personal_characteristics;
        $userDetails->linkedin_url = $request->linkedin_url;
        $userDetails->name_url = $request->name_url;
        $userDetails->facebook_url = $request->facebook_url;
        $userDetails->twitter_url = $request->twitter_url;
        $userDetails->save();
        
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_email_verified = 1;
        $user->language_code = 1;
        $user->is_mobile_verified = 1;
        $user->address = $request->address;
        // $user->language_code = $request->language_code;
        $user->identity = $request->identity;
        $user->facebook_id = $request->facebook_id;
        $user->google_id = $request->google_id;
        $user->apple_id = $request->apple_id;
        $user->updated_at = get_timestamp();
        // echo "<pre>";print_r($request->file('image'));
        // echo "<pre>";print_r($request->all());
        // exit;
        if ($files = $request->file('image')) 
        {
            $destinationPath = public_path('profile/'); // upload path
            $proImage = time() . "." . $files->getClientOriginalName();
            $files->move($destinationPath, $proImage);


            old_file_remove('profile',$user->image);
            $user->image = $proImage;    
            $user->is_image_link = 0;    
        }
        $user->save();
        
        return redirect()->route('user.profile')->with('message','Profile updated successfully');
    }
    
}
