@extends('user.common.user_layout')
<?php 
$categories = \App\Model\Category::where('status',1)->get();
?>
@section('content')
<style>
body {
    margin: 0 !important;
}
header#header, .footer { display: none; }
</style>
        </div>
    </div>
</header>
<div class="log-reg-main">
  <div class="container">
      <div class="row">
          <div id="register-account" class="log-reg">
              <div class="log-reg-pop">
                  <div class="logo-wlcm">
                      <img src="{{ public_url('/default_images/logo.png') }}" alt="Photo" />
                      <h4>Welcome</h4>
                  </div>
                 <form name="contact_us" id="register-form" class="contact_us" method="POST" action="{{ route('register') }}">
                  @csrf
                     <input type="hidden" name="home_page_link" id="home_page_link" value="{{route('home')}}"/>
                    <div class="form-group">
                       <input type="text" name="name" placeholder="{{__("messages.name")}}">
                    </div>
                    <div class="form-group">
                       <input type="email" name="email" placeholder="{{__("messages.email")}}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="number" name="phone" placeholder="{{__("messages.+919*********")}}">
                     </div>
                    <div class="form-group">
                       <input type="password" name="password" id="password" placeholder="{{__("messages.password")}}"/>
                    </div>
                    <div class="form-group">
                       <input type="password" name="password_confirmation" id="cpassword" placeholder="{{__("messages.confirmPassword")}}"/>
                    </div>
                    <div class="form-group">
                      <div class="checkbox">
                        <label><input type="checkbox" value="">I agree to the Freelancer <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>.</label>
                      </div>
                    </div>
                    <div class="form-group google-captcha">
                       <div id="recaptcha-container"></div>
                     </div>
                    <div class="form-group submit">
                       <button type="button" name="submit" class="signin" id="signin" onclick="phoneAuth();">{{__("messages.register")}}</button>
                       {{-- <input type="submit" name="submit" value="{{__("messages.register")}}" class="register"> --}}
                       {{-- <button type="button" data-toggle="modal" data-target="#verificationCodeModal">Launch modal</button> --}}

                     </div>
                 </form>
                 <div class="logorreg">Already have an account? <a href="{{ route('login') }}" class="">{{ __('messages.login') }}</a></div>
              </div>
          </div>
      </div>
  </div>
</div>

 <div class="modal fade" id="verificationCodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">{{__("messages.verificationCode")}}</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <div class="form-group">
            <label>{{__("messages.verificationCode")}}</label>
            <input type="text" id="verificationCode" placeholder="Enter verification code">
         </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-success" onclick="codeverify();">{{__("messages.submit")}}</button>
         <button type="button" class="btn" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
 @endsection
 @section('script')
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
<script src="{{public_url("/datatable_js/js/firebase_phone_auth.js")}}" type="text/javascript"></script>
@endsection
