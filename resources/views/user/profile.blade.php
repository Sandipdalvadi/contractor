
@extends('user.common.user_layout')
@section('content')

        </div>
    </div>
</header>
<?php 
    $userDetailObj = $user->hasOneUserDetails ? $user->hasOneUserDetails : '';
    $countryObj = $userDetailObj ? $userDetailObj->hasOneCountry : '';
?>
<div class="bg-img">
    <img src="{{public_url("/assets/images/headerimage-inr1.jpg")}}" width="100%">
</div>
<div class="profile-page up-contnt bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="box-card">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="profile-img-part">
                                <div class="profile-img">
                                    <img src="@if($user->is_image_link == 0){{file_exists_in_folder("profile",$user->image)}} @else {{$user->image}} @endif" alt=""/>
                                </div>
                                <div class="user-details">
                                    <ul>
                                        <li class="green-text">
                                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                            <label>I'm Online!</label>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-usd" aria-hidden="true"></i></span>
                                            <label>{{$userDetailObj ? $userDetailObj->rate_per_hour : ''}}</label>
                                        </li>
                                        <li>
                                            <span><img src="{{public_url("/assets/images/flag/in.svg")}}" width="100%"></span>
                                            <label>{{$countryObj ? $countryObj->name : ""}}</label>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                            <label>It's currently 9:12 pm here</label>
                                        </li>
                                        <li>
                                            <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            <label>Joined January 28, 2018</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="profile-text">
                                <div class="user-name">
                                    <h3>{{$user->name ? $user->name : ''}}</h3>
                                    <a href="{{route('user.editprofile')}}" class="site-btn">{{__('messages.editProfile')}}</a>
                                </div>
                                <div class="user-email">
                                    <label>{{$user->email ? $user->email : ''}}</label>
                                    <label>{{$user->phone ? $user->phone : ''}}</label>
                                </div>
                                <div class="reviw-part">
                                    <div class="cmpny-review" data-toggle="tooltip" data-placement="bottom" title="Average rating for all completed Projects.">
                                        <div class="starts">
                                            <span>0.0</span>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="review">
                                            <span>(0 reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="proj-avrg-part">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="proj-avrg">
                                                <span>N/A</span> Jobs Completed
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="proj-avrg">
                                                <span>N/A</span> On Budget
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="proj-avrg">
                                                <span>N/A</span> On Time
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="proj-avrg">
                                                <span>N/A</span> Repeat Hire Rate
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-part">
                                    {!! $userDetailObj ? $userDetailObj->about : '' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="box-card-head">
                        <h3 class="small-heading">{{__('messages.portfolio')}}</h3>
                    </div>
                    <div class="box-card-body">
                        <div class="portfolio-main row">
                            <div class="col-sm-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio1.jpg")}}" alt=""/></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div> 
                            <div class="col-sm-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio2.jpg")}}" alt=""/></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div> 
                            <div class="col-sm-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio1.jpg")}}" alt=""/></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div> 
                            <div class="col-sm-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio2.jpg")}}" alt=""/></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio1.jpg")}}" alt=""/></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div> 
                         </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="box-card-head">
                        <h3 class="small-heading">Review</h3>
                    </div>
                    <div class="box-card-body">
                        <h5 class="text-center">No Review</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="box-card widget">
                    <a href="#" class="label job-type apply-job">Hire me</a>
                </div>
                <div class="box-card">
                    <div class="box-card-head">
                        <h3 class="small-heading">Verifications</h3>
                    </div>
                    <div class="box-card-body">
                        <div class="verified-box">
                            <ul>
                                <li data-toggle="tooltip" data-placement="bottom" title="Verified to have a valid payment method.">
                                    <span><i class="fa fa-usd" aria-hidden="true"></i></span>
                                    <label>Payment Verified</label>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" title="Verified to have a valid phone number.">
                                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <label>Phone Verified</label>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" title="Verified to have a valid email address.">
                                    <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                    <label>Email Verified</label>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" title="Verified to have a Facebook account.">
                                    <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                    <label>Facebook Connect</label>
                                </li>
                                <li data-toggle="tooltip" data-placement="bottom" title="Verified to have a Twitter account.">
                                    <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                    <label>Twitter Connect</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box-card">
                    <div class="box-card-head">
                        <h3 class="small-heading">{{__('messages.mySkills')}}</h3>
                    </div>
                    <div class="box-card-body">
                        <ul class="skills">
                            @foreach ($userCategories as $category)
                            <?php $categoryObj = $category->hasOneCategory ? $category->hasOneCategory : '';?>
                                <li>{{$categoryObj ? get_language_name($categoryObj,'name') : ''}}</li>
                            @endforeach
                         </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection