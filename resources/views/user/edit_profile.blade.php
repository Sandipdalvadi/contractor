
@extends('user.common.user_layout')
@section('content')

        </div>
    </div>
</header>
<?php 
$userDetails = $user->hasOneUserDetails ? $user->hasOneUserDetails : '';
?>

<div class="container-fluid post-job grey-bg">
    <div class="row">
        <div class="container main-container">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label>Edit Profile</label>
           </div>
        </div>
    </div>
</div>

<div class="container-fluid white-bg contact_us">
   <form action="{{route('user.updateProfile')}}" name="contact_us" method="POST" enctype="multipart/form-data" id="form-style-2">
      @csrf
        <div class="row user-information">
            <div class="container main-container ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label>Your name</label>
                        </div>

                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <input type="text" name="name" required placeholder="Martin Trojanowski" value="{{$user->name ? $user->name : ''}}"/>
                           <input type="hidden" name="id" value="{{$user->id ? $user->id : ''}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group file-type ">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label class="default">Profile</label>
                        </div>
                        <div class="col-lg-8 col-md-8  col-sm-8 col-xs-12">
                           <input type="file" name="image" class="inputfile"  placeholder="" id="imgInp">

                           <div class="upload resume">
                              <div class="filename"><i class="fa fa-file-image-o" aria-hidden="true"></i>Browse image</div>
                              <img src="@if($user->is_image_link == 0){{file_exists_in_folder("profile",$user->image)}} @else {{$user->image}} @endif" width="50px" height="50px" id="blah" style="">
                           </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label>Email Address</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <input type="email" name="email" required placeholder="your@email" value="{{$user->email ? $user->email : ''}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">  
                           <label class="default">Your rate/h ($)</label>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-12"> 
                           <input type="text" name="rate_per_hour" required placeholder="" value="{{$userDetails ? $userDetails->rate_per_hour : 0}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">  
                           <label>Skills</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <select class="form-control item-list" name="selected_category[]" id="skills" multiple="multiple">
                              {{-- <option value="">{{__('messages.selectCategory')}}</option> --}}
                              @if(count($categories))
                                 @foreach ($categories as $category) 
                                    <option value="{{$category->id}}" @if(in_array($category->id,$userCategory)) selected @endif>{{get_language_name($category,'name')}}</option>
                                 @endforeach
                              @endif
                           </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label>Address</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <input type="text" name="address" id="address" required placeholder="address" value="{{$userDetails ? $userDetails->address : ''}}"/>
                           <input type="hidden" id="latitude" name="latitude" value="{{$userDetails ? $userDetails->latitude : ''}}"/>
                           <input type="hidden" id="longitude" name="longitude" value="{{$userDetails ? $userDetails->longitude : ''}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group ">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-lg-xs-12">
                           <label>Country</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <select class="form-control" name="country" id="tagPicker">
                              @foreach ($countries as $country)
                                 <option value="{{$country->id}}">{{$country->name}}</option>
                              @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label>About</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                           <textarea name="about" class="textarea">{{$userDetails ? $userDetails->about : ""}}</textarea>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <label>Personal Characteristics:</label>
                     </div>
                     <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <textarea name="personal_characteristics" class="textarea">{{$userDetails ? $userDetails->personal_characteristics : ""}}</textarea>
                     </div>
                 </div> --}}
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label class="default">LinkedIn<br /><span>(optional)</span></label>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-12">    
                           <input type="text" name="linkedin_url" placeholder="" value="{{$userDetails ? $userDetails->linkedin_url : ''}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">  
                           <label class="default">Name URL<br /><span>(optional)</span></label>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-12"> 
                           <input type="text" name="name_url" placeholder="" value="{{$userDetails ? $userDetails->name_url : ''}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">  
                           <label class="default">Facbnook<br /><span>(optional)</span></label>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-12">
                           <input type="text" name="facebook_url" placeholder="" value="{{$userDetails ? $userDetails->facebook_url : ''}}"/>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <label class="default"> Twitter<br /><span>(optional)</span></label>
                        </div>
                        <div class="col-lg-3  col-md-3  col-sm-6  col-xs-12">
                           <input type="text" name="twitter_url" placeholder="" value="{{$userDetails ? $userDetails->twitter_url : ''}}"/>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <label>{{__('messages.submit')}}</label>
                        <input type="submit" name="submit" value="{{__('messages.updateProfile')}}" class="signin" id="Update_profile">
                     </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@section('script')
<script>
   function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();
           reader.onload = function (e) {
               $('#blah').attr('src', e.target.result);
           }
           reader.readAsDataURL(input.files[0]);
       }
   }

   $("#imgInp").change(function(){
       readURL(this);
   });
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyC3YYz8jqvHY3Yup1lzIdlU51FsjHKH5yE&amp;libraries=places"></script>
 
<script>
google.maps.event.addDomListener(window, 'load', initialize);
function initialize() {
var input = document.getElementById('address');
var autocomplete = new google.maps.places.Autocomplete(input);
autocomplete.addListener('place_changed', function () {
var place = autocomplete.getPlace();
// place variable will have all the information you are looking for.
 
  var latitude = place.geometry['location'].lat();
  var longitude = place.geometry['location'].lng();
  jQuery("#latitude").val(latitude);
  jQuery("#longitude").val(longitude);
});
}
</script>
@endsection