@extends('user.common.user_layout')
<?php 
$categories = \App\Model\Category::where('status',1)->get();
?>
@section('content')

        </div>
    </div>
</header>
<div class="container-fluid login_register header_area deximJobs_tabs">
    <div class="row">
        <div class="container main-container-home">
            <div class="col-lg-offset-1 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                <div id="register-account" class="tab-content white-text">
                    <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                        <ul class="nav nav-pills ">
                             <li class="active"><a href="javascript:void(0)">{{__("messages.register")}}</a></li>
                        </ul>
                       <form name="contact_us" id="register-form" class="contact_us" method="POST" action="{{ route('register') }}">
                        @csrf
                           <input type="hidden" name="home_page_link" id="home_page_link" value="{{route('home')}}"/>
                          <div class="form-group">
                             <label>{{__("messages.name")}}</label>
                             <input type="text" name="name" placeholder="{{__("messages.name")}}">
                          </div>
                          <div class="form-group">
                             <label>{{__("messages.email")}}</label>
                             <input type="email" name="email" placeholder="{{__("messages.email")}}">
                          </div>
                          <div class="form-group">
                              <label>{{__("messages.phone")}}</label>
                              <input type="text" id="number" name="phone" placeholder="{{__("messages.+919*********")}}">
                           </div>
                          <div class="form-group">
                             <label>{{__("messages.password")}}</label>
                             <input type="password" name="password" id="password" placeholder="{{__("messages.password")}}"/>
                          </div>
                          <div class="form-group">
                             <label>{{__("messages.confirmPassword")}}</label>
                             <input type="password" name="password_confirmation" id="cpassword" {{__("messages.confirmPassword")}}/>
                          </div>
                          <div class="form-group">
                             <div id="recaptcha-container"></div>
                           </div>
                          <div class="form-group text-center">
                             <label></label>
                             <button type="button" name="submit" class="register" onclick="phoneAuth();">{{__("messages.register")}}</button>
                             {{-- <input type="submit" name="submit" value="{{__("messages.register")}}" class="register"> --}}
                             {{-- <button type="button" data-toggle="modal" data-target="#verificationCodeModal">Launch modal</button> --}}

                           </div>
                       </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                       <div class="widget">
                          <h3>{{__("messages.whyToHaveAnAccountInContractor")}}</h3>
                          <ul>
                             <li>
                                <p><i class="fa fa-clock-o"></i>{{__("messages.fastApplyingForOffersTheNecessaryDocumentsAreAlwaysAtHand")}}
                                </p>    
                                
                             </li>
                             <!--<li>-->
                             <!--   <p><i class="fa fa-child"></i>Effectively target employers-->
                             <!--      You can share your profile and CV recruiters-->
                             <!--   </p>-->
                             <!--</li>-->
                             <li>
                                <p><i class="fa fa-check-circle-o"></i>{{__("messages.matchingJobsWeWillSuggestYouOfferToFitYourNeedsOnEmail")}}
                                </p>
                             </li>
                             <li>
                                <p>{{__("messages.alreadyHaveAnAccount")}}</p>
                             <a href="{{route('login')}}" class="label job-type register" style="margin-top:15px;">{{__("messages.login")}}</a>
                             </li>
                          </ul>
                       </div>
                    </div>
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
