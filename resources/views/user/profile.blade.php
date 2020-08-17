
@extends('user.common.user_layout')
@section('content')

        </div>
    </div>
</header>

<div class="container-fluid page-title dashboard">
    <div class="row dashboard">
        <div class="container main-container gery-bg">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  no-padding user-data">
                <div class="seprator ">
                    <div class="no-padding user-image"><img src="{{public_url("/assets/images/job-admin.png")}}" alt=""/></div>
                    <div class="user-tag">John Doe<span>@johndoe01</span></div>
                    <div class="jos-status"><span class="label job-type job-partytime"><a href="{{route('editprofile')}}">{{__('messages.editProfile')}}</a></span></div>
                </div>
                <div class="seprator">
                    <div class="user-tag"><label>{{__('messages.sallary')}}<span>$35000 - $38000</span></label></div>
                </div>
                <div class="seprator">
                    <div class="user-tag"><label>{{__('messages.hours')}}<span>44h / {{__('messages.week')}}</span></label></div>
                </div>
                <div class="seprator">
                    <div class="user-tag"><label>{{__('messages.locations')}}<span>Los Angeles</span></label></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid white-bg">
    <div class="row">
        <div class="container main-container-job">
           <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
              <div class="">
                 <h3 class="small-heading">{{__('messages.mySkills')}}:</h3>
                 <ul class="skills">
                    <li>Photoshop</li>
                    <li>Javascript</li>
                    <li>Wordpress</li>
                    <li>HTML</li>
                    <li>Designe</li>
                 </ul>
              </div>
              <div class="content">
                 <h3 class="small-heading">{{__('messages.aboutMe')}}</h3>
                 <p>Ut sodales arcu sagittis metus molestie molestie. Nulla maximus volutpat dui. Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna.<br />
                    Duis ac augue sit amet ex blandit facilisis sit amet ut dui. Nulla pharetra fermentum mollis. Duis in tempor tortor. Suspendisse vitae nisl diam. Proin eu erat vestibulum, suscipit quam et, cursus ante
                 </p>
                 <h3 class="small-heading">{{__('messages.personalCharacteristics')}}:</h3>
                 <ul>
                    <li>Excellent customer service skills, communication skills, and a happy, smiling attitude are essential.</li>
                    <li>Available to work required shifts including weekends, evenings and holidays.</li>
                    <li>I have great time management skills.</li>
                    <li>I take constructive criticism well and I am comfortable voicing opinions.</li>
                 </ul>
                 <div class="job-progress">
                    <ul class="row">
                        <li class="col-md-6">
                            <div class="progress-txt"><lable>{{__('messages.completedProjects')}}</lable><span>80%</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="progress-txt"><lable>{{__('messages.onBudgetRate')}}</lable><span>90%</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="progress-txt"><lable>{{__('messages.onTimeRate')}}</lable><span>60%</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                </div>
                            </div>
                        </li>
                        <li class="col-md-6">
                            <div class="progress-txt"><lable>{{__('messages.repeatHireRate')}}</lable><span>80%</span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                        </li>
                    </ul>
                 </div>
                 <div class="portfolio-main row">
                    <h3 class="small-heading">{{__('messages.portfolio')}}</h3>
                    <div class="col-md-4">
                        <div class="portfolio">
                            <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio1.jpg")}}" alt=""/></div>
                            <h4>portfolio Name</h4>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="portfolio">
                            <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio2.jpg")}}" alt=""/></div>
                            <h4>portfolio Name</h4>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="portfolio">
                            <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio1.jpg")}}" alt=""/></div>
                            <h4>portfolio Name</h4>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="portfolio">
                            <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio2.jpg")}}" alt=""/></div>
                            <h4>portfolio Name</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio">
                            <div class="portfolio-img"><img src="{{public_url("/assets/images/portfolio1.jpg")}}" alt=""/></div>
                            <h4>portfolio Name</h4>
                        </div>
                    </div> 
                 </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar">
              <div class="widget w1">
                 <ul>
                    <li>
                       <span class="label job-type apply-job">{{__('messages.hireMe')}}</span>
                       <span class="label job-type apply-link">{{__('messages.myProfileOn')}}<i class="fa fa-linkedin"></i></span>
                    </li>
                 </ul>
                 <ul class="social">
                    <li><a href="#"><i class="fa fa-link"></i>www</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i>facebook</a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i>twitter</a></li>
                 </ul>
              </div>
           </div>
        </div>
    </div>
</div>




@endsection