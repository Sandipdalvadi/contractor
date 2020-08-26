@extends('user.common.user_layout')
@section('style')
<style>
body {
    margin: 0 !important;
}
header#header, .footer { display: none; }
</style>
@endsection

@section('content')

    </div>
    </div>
    </header>
    <div class="log-reg-main">
        <div class="container">
            <div class="row">
                <div class="log-reg">
                    <div class="log-reg-pop">
                        <div class="logo-wlcm">
                            <img src="{{ public_url('/default_images/logo.png') }}" alt="Photo" />
                            <h4>Welcome</h4>
                        </div>
                        <form name="contact_us" class="contact_us" id="register-form" action="{{route('auth.confirmVerify')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" id="number" name="phone" placeholder="{{ __('messages.phone') }}">
                            </div>
                            <div class="form-group" style="display: none" id="verificationCodeDiv">
                                <input type="text" name="verificationCode" id="verificationCode"
                                    placeholder="Verification code" />
                            </div>
                            <div class="form-group google-captcha">
                                <div id="recaptcha-container"></div>
                              </div>         
                            <div class="form-group submit">
                                <button type="button" name="submit" class="signin" id="signin" onclick="phoneAuth();">Send OTP</button>
                            </div>
                            <div class="form-group">
                                <div class="or-social-log">
                                    <div class="slor"><span>OR</span></div>
                                    <ul class="social-login">
                                        <li class="google-login">
                                            <a href="{{ route('login.provider', 'google') }}" class=""><i
                                                    class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="facebook-login">

                                            <a href="{{ route('login.provider', 'facebook') }}" class=""><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div class="logorreg">Already have an account? <a href="{{ route('login') }}" class="">{{ __('messages.login') }}</a></div>

                    </div>
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
@if (Session::has('message'))
    <script type="text/javascript">
        $(function() {
            notify("{{ Session::get('message') }}", "info", "bottom", "right")
        });

    </script>
@endif
@if ($alert = Session::get('error'))
    <script type="text/javascript">
        $(function() {
            notify("{{ Session::get('error') }}", "danger", "bottom", "right")
        });

    </script>

@endif
@endsection
