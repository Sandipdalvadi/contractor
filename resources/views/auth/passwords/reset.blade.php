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
                            <li class="active"><a href="javascript:void(0)">{{ __('Reset Password') }}</a></li>
                        </ul>
                        <form name="contact_us" class="contact_us" action="{{ route('password.update') }}" method="POST">
                           @csrf
                           <input type="hidden" name="token" value="{{ $token }}">
                          <div class="form-group">
                             <label>{{ __('E-Mail Address') }}</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                          </div>
                          <div class="form-group">
                             <label>{{ __('Password') }}</label>
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                          </div>

                          <div class="form-group">
                            <label>{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"/>
                         </div>
                          
                          <div class="form-group submit">
                             <label>{{ __('Reset Password') }}</label>
                             <input type="submit" name="submit" value="{{ __('Reset Password') }}" class="signin" id="signin">
                          </div>
                       </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
