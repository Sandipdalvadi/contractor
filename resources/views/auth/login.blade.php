@extends('user.common.user_layout')

@section('content')

        </div>
    </div>
</header>
@if ($alert = Session::get('error'))
   <div class="tost-error">
      {{ $alert }}
   </div> 
   @endif
   {{-- @if ($alert = Session::get('error'))
	<div class="alert alert-warning">
		{{ $alert }}
	</div>
   @endif --}}
<div class="container-fluid login_register header_area deximJobs_tabs">
    <div class="row">
        <div class="container main-container-home">
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active white-text">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                        <ul class="nav nav-pills ">
                            <li class="active"><a href="javascript:void(0)">{{__('messages.login')}}</a></li>
                        </ul>
                        <form name="contact_us" class="contact_us" action="{{ route($loginRoute) }}" method="POST">
                           @csrf
                          <div class="form-group">
                             <label>{{__('messages.phone')}}</label>
                             <input type="text" name="phone" placeholder="{{__('messages.phone')}}">
                          </div>
                          <div class="form-group">
                             <label>{{__('messages.password')}}</label>
                             <input type="password" name="password" id="password-2" placeholder="{{__('messages.password')}}"/>
                          </div>
                          <div class="form-group submit">
                             <label>{{__('messages.submit')}}</label>
                             <div class="cbox">
                                <input type="checkbox" name="checkbox"/>
                                <span>{{__('messages.rememberMe')}}</span>
                             </div>
                          </div>
                          <div class="form-group submit">
                             <label>{{__('messages.submit')}}</label>
                             <input type="submit" name="submit" value="{{__('messages.signIn')}}" class="signin" id="signin">
                              <a href="{{route($forgotPasswordRoute)}}" class="lost_password">{{__('messages.lostPassword')}}?</a>
                          </div>
                          <div class="form-group submit">
                           <label>{{__('messages.submit')}}</label>
                           <a href="{{ route('login.provider', 'google') }}" class="signin" >{{ __('Google Sign in') }}</a>
                           {{-- <input type="submit" name="submit" value="{{__('messages.signIn')}}" class="signin" id="signin"> --}}
                            {{-- <a href="{{route($forgotPasswordRoute)}}" class="lost_password">{{__('messages.lostPassword')}}?</a> --}}
                           </div>
                           {{-- <div class="form-group submit">
                              <label>{{__('messages.submit')}}</label>
                              <a href="{{ route('login.provider', 'facebook') }}" class="signin" >{{ __('Facebook Sign in') }}</a> --}}
                              {{-- <input type="submit" name="submit" value="{{__('messages.signIn')}}" class="signin" id="signin"> --}}
                               {{-- <a href="{{route($forgotPasswordRoute)}}" class="lost_password">{{__('messages.lostPassword')}}?</a> --}}
                           {{-- </div> --}}
                           <div class="form-group submit">
                              <label>{{__('messages.submit')}}</label>
                              <a href="javascript:void(0)" onclick="facebookSignin()" class="signin" >{{ __('Facebook Sign in') }}</a>
                              {{-- <input type="submit" name="submit" value="{{__('messages.signIn')}}" class="signin" id="signin"> --}}
                               {{-- <a href="{{route($forgotPasswordRoute)}}" class="lost_password">{{__('messages.lostPassword')}}?</a> --}}
                           </div>
                       </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                       <div class="widget">
                          <h3>{{__("messages.dontHaveAnAccount")}}</h3>
                          <ul>
                             <li>
                                <p> {{__("messages.ifYoudLikeToFindOutMoreAboutHowJobsiteCanHelpYouWithYourRecruitmentNeedsPleaseCompleteThisEnquiryForm")}}</p>
                             </li>
                             <li>
                                <p>{{__("messages.aMemberOfOurSalesTeamWillContactYouShortly")}}</p>
                             </li>
                             <li>
                                <a href="{{route('register')}}" class="label job-type register">{{__("messages.register")}}</a>
                             </li>
                          </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-firestore.js"></script>


<script>
    var firebaseConfig = {
    apiKey: "AIzaSyCOC3Xgz4CR1tXFfYxJEa5aIJ4gn_76cNs",
    authDomain: "contractor-b8107.firebaseapp.com",
    databaseURL: "https://contractor-b8107.firebaseio.com",
    projectId: "contractor-b8107",
    storageBucket: "contractor-b8107.appspot.com",
    messagingSenderId: "812649320275",
    appId: "1:812649320275:web:962c654201d90ed3a99ba6",
    measurementId: "G-2PT7LT4NGL"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
//   firebase.analytics();
</script>

<script type="text/javascript">
$(function(){
    //$('.testtost').on("click", function () {
    $('.tost-error').addClass("show-error");
    setTimeout(RemoveClass, 3000);
   // });
    function RemoveClass() {
    $('.tost-error').removeClass("show-error");
    }
}); 
function facebookSignin(){
   // alert("Hello");
   var provider = new firebase.auth.FacebookAuthProvider();
   provider.addScope('user_birthday');
   firebase.auth().useDeviceLanguage();
   firebase.auth().signInWithPopup(provider).then(function(result) {
      var token = result.credential.accessToken;
      var user = result.user;
      $.ajax({
         url: "{{route('user.facebookLogin')}}",
         type: 'post',
         // dataType: 'application/json',
         data: {
            "_token": "{{ csrf_token() }}",  
            "data":user.providerData[0]
         },
         success: function(data) {
            // alert(home_page_link);
            console.log("data");
            console.log(data);
            window.location=data["url"];
         }
      });
   }).catch(function(error) {
      var errorCode = error.code;
      var errorMessage = error.message;
      var email = error.email;
      var credential = error.credential;
   });
}

</script>

@endsection
