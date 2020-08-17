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
                       <form name="contact_us" class="contact_us" method="POST" action="{{ route('register') }}">
                        @csrf
                          <div class="form-group">
                             <label>{{__("messages.name")}}</label>
                             <input type="text" name="name" placeholder="{{__("messages.name")}}">
                          </div>
                          <div class="form-group">
                             <label>{{__("messages.email")}}</label>
                             <input type="email" name="email" placeholder="{{__("messages.email")}}">
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
                             <label>{{__("messages.imLooking")}}</label>
                             <select name="category" id="" class="select2">
                                 <option value="">{{__('messages.selectCategory')}}</option>
                                 @if(count($categories))
                                    @foreach ($categories as $category) 
                                       <option value="{{$category->id}}">{{get_language_name($category,'name')}}</option>
                                    @endforeach
                                 @endif
                              </select>
                          
                             {{-- <div class="dropdown"> --}}
                                {{-- <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Category
                                <span class="glyphicon glyphicon-menu-down"></span>
                                </button> --}}
                                {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                   <ul class="tiny_scrolling" id="style-3">
                                      <li><a href="#">Web Developer</a></li>
                                      <li><a href="#">Graphic designer</a></li>
                                      <li><a href="#">Developer</a></li>
                                      <li><a href="#">UX Designer</a></li>
                                      <li><a href="#">Web Developer</a></li>
                                      <li><a href="#">Graphic designer</a></li>
                                      <li><a href="#">Developer</a></li>
                                      <li><a href="#">UX Designer</a></li>
                                   </ul>
                                </div> --}}
                             {{-- </div> --}}
                          </div>
                          <div class="form-group text-center">
                             <label></label>
                             <input type="submit" name="submit" value="{{__("messages.register")}}" class="register">
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


@endsection
