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
                    <a href="{{route('home')}}"><img src="{{ public_url('/default_images/logo.png') }}" alt="Photo" /></a>

                      <h4>Welcome</h4>
                  </div>
                 <form name="contact_us" id="register-form" class="contact_us" method="POST" action="{{ route('register') }}">
                  @csrf
                     <input type="hidden" name="home_page_link" id="home_page_link" value="{{route('home')}}"/>
                    <div class="form-group">
                       <input type="text" name="name" placeholder="{{__("messages.name")}}"  value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                       <input type="email" name="email" placeholder="{{__("messages.email")}}" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                       <input type="password" name="password" id="password" placeholder="{{__("messages.password")}}"  value="{{ old('password') }}"/>
                    </div>
                    <div class="form-group">
                       <input type="password" name="password_confirmation" id="cpassword" placeholder="{{__("messages.confirmPassword")}}"  value="{{ old('password_confirmation') }}"/>
                    </div>
                    <input type="hidden" name="phone" value="{{$phone}}"/>

                    <div class="form-group">
                      <div class="checkbox">
                        <label><input type="checkbox" value="" id="privacy_policy" name="privacy_policy">I agree to the Freelancer <a href="#">User Agreement</a> and <a href="#">Privacy Policy</a>.</label>
                      </div>
                    </div>
                    <div class="form-group submit">
                       <button type="button" onclick="checkData(this)" name="submit" class="signin" id="signin">{{__("messages.register")}}</button>
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
 <script>
     function checkData(objs){
        if(!$('#privacy_policy').is(':checked')) {
            notify("Please check privacy policy", "danger", "bottom", "right")
             return false;
        }
        else{
            // jQuery("#register-form").submit();
            jQuery(objs).attr("type","submit");
        }
     }
 </script>
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

@if ($errors->any())
     @foreach ($errors->all() as $error)  
        <script type="text/javascript">
                $(function() {
                    notify("{{ $error }}", "danger", "bottom", "right")
                });
        </script>
     @endforeach
 @endif
@endsection