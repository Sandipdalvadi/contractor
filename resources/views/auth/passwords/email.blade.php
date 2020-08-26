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
                            <a href="{{route('home')}}"><img src="{{ public_url('/default_images/logo.png') }}" alt="Photo" /></a>
                            <h4>{{ __('Reset Password') }}</h4>
                        </div>
                        <form name="contact_us" class="contact_us" action="{{ route('password.email') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <input id="email" type="email"
                                    name="email" value="{{ $email ?? old('email') }}" required placeholder="{{ __('E-Mail Address') }}">
                                {{-- <input type="text" name="email" placeholder="{{ __('messages.email') }}"> --}}
                            </div>
                            <div class="form-group submit">
                                <input type="submit" style="margin: 10px 0 0px" name="submit" value="{{ __('Send Password Reset Link') }}" class="signin"
                                    id="signin">
                            </div>
                        </form>
                        <div class="logorreg">Back to <a href="{{ route('login') }}" class="">{{ __('messages.login') }}</a></div>
                        {{-- <div class="logorreg">Don't have an account? <a href="{{ route('auth.verifyPhone') }}" class="">{{ __('messages.register') }}</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
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