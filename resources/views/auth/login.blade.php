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
                           <a href="{{ route('login.provider', 'google') }}" class="btn btn-secondary">{{ __('Google Sign in') }}</a>
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


@endsection
