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
                        <form name="contact_us" class="contact_us" action="{{ route($loginRoute) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" placeholder="{{ __('messages.email') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password-2"
                                    placeholder="{{ __('messages.password') }}" />
                            </div>
                            <div class="form-group submit frgt-pw">
                            
                                <div class="cbox">
                                    <input type="checkbox" name="checkbox" />
                                    <span>{{ __('messages.rememberMe') }}</span>
                                </div>
                                <a href="{{ route($forgotPasswordRoute) }}"
                                    class="lost_password">{{ __('messages.lostPassword') }}?</a>

                            </div>
                            <div class="form-group submit">
                                <input type="submit" name="submit" value="{{ __('messages.signIn') }}" class="signin"
                                    id="signin">
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
                        <div class="logorreg">Don't have an account? <a href="{{ route('register') }}" class="">{{ __('messages.register') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


