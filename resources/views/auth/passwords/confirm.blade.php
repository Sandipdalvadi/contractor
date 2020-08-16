@extends('user.common.user_layout')

@section('content')

        </div>
    </div>
</header>
<div class="container-fluid login_register header_area deximJobs_tabs">
    <div class="row">
        <div class="container main-container-home">
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active white-text">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 zero-padding-left">
                        <ul class="nav nav-pills ">
                            <li class="active"><a href="javascript:void(0)">{{ __('Please confirm your password before continuing.') }}</a></li>
                        </ul>
                        <form name="contact_us" class="contact_us" action="{{ route('password.confirm') }}" method="POST">
                           @csrf
                          <div class="form-group">
                             <label>{{ __('Password') }}</label>
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          </div>
                          <div class="form-group submit">
                             <label>{{ __('Confirm Password') }}</label>
                             <input type="submit" name="submit" value="{{ __('Confirm Password') }}" class="signin" id="signin">
                          </div>
                          @if (Route::has('password.request'))
                          
                            <div class="form-group submit">
                                <label>{{ __('Forgot Your Password?') }}</label>
                                <a href="{{ route('password.request') }}" class="lost_password">Lost Password?</a>
                            </div>
                         @endif
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection