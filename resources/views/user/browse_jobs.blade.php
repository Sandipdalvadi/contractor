@extends('user.common.user_layout')
@section('content')
    
    </div>
    </header>
    <!-- End Header Section -->


    <!--maine container Section -->
    <div class="container main-container-home">
        <div class="jobs_results">
            <!--Filters Category -->
            <div class="tab_filters">
                <div class="col-lg-4">
                    <h5>{{ __('messages.recentJobs') }}</h5>
                    <h4>{{ __('messages.popular') }} <span>{{ __('messages.category') }} </span></h4>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 filters pull-right filter-category">
                    <ul class="nav nav-pills">
                        @if (count($categories))
                            @foreach ($categories as $category)
                                <li><a href="#">{{ get_language_name($category, 'name') }}</a></li>
                            @endforeach
                        @endif
                        <li class="all active"><a href="#">{{ __('messages.all') }}</a></li>
                    </ul>
                </div>
            </div>
            <!-- Filters Category -->
            <div class="jobs-result">
                <!--Search Result 01-->
                <div class="col-lg-12">
                    <a href="job-style-one.html">
                        <div class="filter-result 01">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                <div class="company-left-info pull-left">
                                    <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                </div>
                                <div class="desig">
                                    <h3>Senior UX Designer</h3>
                                    <h4>Photoshop, CSS, Java Script, Sketch</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right">
                                <div class="pull-right location">
                                    <p>Loss Angeles</p>
                                </div>
                                <div class="data-job">
                                    <h3>£10 - £12 an hour</h3>
                                    <span class="label job-type job-contract ">Contract</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!--jobs result-->
                    <a href="job_detail2.html">
                        <div class="filter-result 02">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                <div class="company-left-info pull-left">
                                    <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                </div>
                                <div class="desig">
                                    <h3>Full Stack Web Developer</h3>
                                    <h4>C# / ASP.NET / MVC</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right">
                                <div class="pull-right location">
                                    <p>Loss Angeles</p>
                                </div>
                                <div class="data-job">
                                    <h3>£10 - £12 an hour</h3>
                                    <span class="label job-type job-parttime ">Party time</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!--jobs result-->
                    <a href="job-style-one.html">
                        <div class="filter-result 03">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                <div class="company-left-info pull-left">
                                    <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                </div>
                                <div class="desig">
                                    <h3>Full Stack Web Developer</h3>
                                    <h4>C# / ASP.NET / MVC</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right">
                                <div class="pull-right location">
                                    <p>Loss Angeles</p>
                                </div>
                                <div class="data-job">
                                    <h3>£10 - £12 an hour</h3>
                                    <span class="label job-type job-internship ">Internship</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!--jobs result-->
                    <a href="job_detail2.html">
                        <div class="filter-result 04">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                <div class="company-left-info pull-left">
                                    <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                </div>
                                <div class="desig">
                                    <h3>Web Developer / PHP & Drupal Ninja!</h3>
                                    <h4>PHP, MySQL, Linux, Wordpress</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right">
                                <div class="pull-right location">
                                    <p>Loss Angeles</p>
                                </div>
                                <div class="data-job">
                                    <h3>£10 - £12 an hour</h3>
                                    <span class="label job-type job-fulltime ">Full Time</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!--jobs result-->
                    <a href="job-style-one.html">
                        <div class="filter-result 02">
                            <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                <div class="company-left-info pull-left">
                                    <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                </div>
                                <div class="desig">
                                    <h3>Front-End UI Web Developer - ReactJS</h3>
                                    <h4>PHP, MySQL, Linux, Wordpress</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 pull-right">
                                <div class="pull-right location">
                                    <p>Loss Angeles</p>
                                </div>
                                <div class="data-job">
                                    <h3>£10 - £12 an hour</h3>
                                    <span class="label job-type job-partytime">Party Time</span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <button class="btn btn-default dropdown-toggle" type="button" id="load_more"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('messages.showMoreJobs') }} <span class="glyphicon glyphicon-menu-down"></span>
                            </button>
                        </div>
                </div>
                </a>
                <!--Search Result 01-->
            </div>
        </div>
    </div>
    <!--main container Section -->

    
@endsection
