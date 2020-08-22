@extends('user.common.user_layout')
@section('content')

    </div>
    </div>
    </header>
                        <div class="job-progress">
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="progress-txt">
                                        <lable>{{ __('messages.completedProjects') }}</lable><span>80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="progress-txt">
                                        <lable>{{ __('messages.onBudgetRate') }}</lable><span>90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="progress-txt">
                                        <lable>{{ __('messages.onTimeRate') }}</lable><span>60%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="progress-txt">
                                        <lable>{{ __('messages.repeatHireRate') }}</lable><span>80%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-main row">
                            <h3 class="small-heading">{{ __('messages.portfolio') }}</h3>
                            <div class="col-md-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{ public_url('/assets/images/portfolio1.jpg') }}"
                                            alt="" /></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{ public_url('/assets/images/portfolio2.jpg') }}"
                                            alt="" /></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{ public_url('/assets/images/portfolio1.jpg') }}"
                                            alt="" /></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{ public_url('/assets/images/portfolio2.jpg') }}"
                                            alt="" /></div>
                                    <h4>portfolio Name</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="portfolio">
                                    <div class="portfolio-img"><img src="{{ public_url('/assets/images/portfolio1.jpg') }}"
                                            alt="" /></div>
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
                                <span class="label job-type apply-job">{{ __('messages.hireMe') }}</span>
                                <span class="label job-type apply-link">{{ __('messages.myProfileOn') }}<i
                                        class="fa fa-linkedin"></i></span>
                            </li>
                        </ul>
                        <ul class="social">
                            <li><a href=""
                                    onclick="window.location({{ $userDetailObj ? $userDetailObj->linkedin_url : '#' }})"><i
                                        class="fa fa-link"></i>www</a></li>
                            <li><a href=""
                                    onclick="window.location({{ $userDetailObj ? $userDetailObj->facebook_url : '#' }})"><i
                                        class="fa fa-facebook"></i>facebook</a></li>
                            <li><a href=""
                                    onclick="window.location({{ $userDetailObj ? $userDetailObj->twitter_url : '#' }})"><i
                                        class="fa fa-twitter"></i>twitter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
