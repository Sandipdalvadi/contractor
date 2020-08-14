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
                            <li class="active"><a href="javascript:void(0)">Login</a></li>
                        </ul>
                        <form name="contact_us" class="contact_us" action="{{ route($loginRoute) }}" method="POST">
                           @csrf
                          <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="email">
                          </div>
                          <div class="form-group">
                             <label>Password</label>
                             <input type="password" name="password" id="password-2"/>
                          </div>
                          <div class="form-group submit">
                             <label>Submit</label>
                             <div class="cbox">
                                <input type="checkbox" name="checkbox"/>
                                <span>Remember me</span>
                             </div>
                          </div>
                          <div class="form-group submit">
                             <label>Submit</label>
                             <input type="submit" name="submit" value="Sign in" class="signin" id="signin">
                              <a href="{{route($forgotPasswordRoute)}}" class="lost_password">Lost Password?</a>
                          </div>
                       </form>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12  pull-right sidebar">
                       <div class="widget">
                          <h3>Don't have an account?</h3>
                          <ul>
                             <li>
                                <p> If you'd like to find out more about how Jobsite can help you with your recruitment needs, please complete this enquiry form.</p>
                             </li>
                             <li>
                                <p>A member of our Sales team will contact you shortly.</p>
                             </li>
                             <li>
                                <a href="{{route('register')}}" class="label job-type register">Register</a>
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
