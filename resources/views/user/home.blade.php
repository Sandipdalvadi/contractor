@extends('user.common.user_layout')
@section('content')
    <div class="container slogan">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="animated fadeInDown">{{ __('messages.hireTheBestFreelancersForAnyJobOnline') }}</h1>
                <h3 class=""><span>{{ __('messages.JoinUs') }} </span>& {{ __('messages.exploreThousandsOfJobs') }}
                </h3>
                <div class="banner-btn">
                    <a href="#" class="btn-clr">{{ __('messages.hireAsAFreelancer') }}</a>
                    <a href="#">{{ __('messages.earnMoneyFreelancing') }}</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="jobs_filters">
        <div class="container">
            <form class="" action="">
                <!--col-lg-3 filter_width -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                    <div class="form-group">
                        <select name="category" id="" class="select2">

                            <option value="">{{ __('messages.selectCategory') }}</option>
                            @if (count($categories))
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ get_language_name($category, 'name') }}</option>
                                @endforeach
                            @endif
                        </select>
                        {{-- <div class="dropdown"> --}}
                            {{-- <button
                                class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Category
                                <span class="glyphicon glyphicon-menu-down"></span>
                            </button> --}}
                            {{-- <div class="dropdown-menu " aria-labelledby="dropdownMenu1">
                                <ul class="tiny_scrolling" id="style-3">
                                    @if (count($categories))
                                        @foreach ($categories as $category)
                                            <li><a href="#">{{ get_language_name($category, 'name') }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div> --}}
                            {{-- </div> --}}
                    </div>
                    <span>e.g. {{ __('messages.dinance') }}</span>
                </div>
                <!--col-lg-3 filter_width -->
                <!-- col-lg-5 filter_width -->
                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('messages.keywordJobTitleOrSkill') }}">
                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                    </div>
                    <span>e.g. {{ __('messages.designer') }}</span>
                </div>
                <!-- col-lg-5 filter_width -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon location">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('messages.location') }}">
                        <span class="glyphicon fa fa-location-arrow" aria-hidden="true"></span>
                    </div>
                    <span>e.g. New York</span>
                </div>
                <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12 filter_width bgicon submit">
                    <div class="form-group">
                        <input type="submit" class="customsubmit" name="submit" value="Search" />
                        <span class="glyphicon fa fa-search" aria-hidden="true"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </header>
    <!-- End Header Section -->


    <div class="browse-job-sec">
    	<div class="container">
    		<div class="sec-title">
    			<h3>Browse Jobs or Companies</h3>
    		</div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="compny-job">
    					<a href="{{route('user.browseJobs')}}">
    						<img src="{{ public_url('/assets/images/jobs.jpg') }}">
    						<label>Browse jobs</label>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="compny-job">
    					<a href="{{route('user.popularCompany')}}">
    						<img src="{{ public_url('/assets/images/companyes.jpg') }}">
    						<label>Popular Companies</label>
    					</a>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="about-done">
    	<div class="container">
    		<div class="sec-title">
    			<h3>Need something done?</h3>
    		</div>
    		<div class="row">
    			<div class="col-md-4">
    				<div class="done-somthng">
    					<img src="{{ public_url('/assets/images/post-job.png') }}">
    					<h5>Post a job</h5>
    					<p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes.</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="done-somthng">
    					<img src="{{ public_url('/assets/images/choose-freelancers.png') }}">
    					<h5>Choose freelancers</h5>
    					<p>Whatever your needs, there will be a freelancer to get it done: from web design (and a whole lot more).</p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<div class="done-somthng">
    					<img src="{{ public_url('/assets/images/pay-safely.png') }}">
    					<h5>Pay safely</h5>
    					<p>With secure payments and thousands of reviewed professionals to choose from globearchitectures</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="category-sec">
    	<div class="container">
    		<div class="sec-title">
    			<h3>Browse top job categories</h3>
    		</div>
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-pills">
                    @if (count($categories))
                        @foreach ($categories as $category)
                            <li><a href="#">{{ get_language_name($category, 'name') }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </div>
    	</div>
    </div>

   
    <!--Plan and Prices Tags-->
    <div class="container-fluid main-container price-tags">
        <div class="container">
            <div class="col-lg-12">
                <h3>{{ __('messages.plansPrices') }}</h3>
                <p>{{ __('messages.completelySynergizeResourceSuckingRelationshipsViaPremierNicheMarkets') }}</p>
            </div>
        </div>
        <div class="container main-container priceing_tables">
            <!--Colg-12 for Pricing Tables-->
            <div class="col-lg-12">
                <!---Price table free--->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price_table no-padding startup free">
                    <div class="header">{{ __('messages.startUp') }}</div>
                    <div class="price">Free!<span>30 day's trail</span></div>
                    <ul class="list-items">
                        <li>Unlimited number of jobs</li>
                        <li>Jobs are posted for 30 days</li>
                        <li>One Time Fee</li>
                        <li>This Plan Includes 1 Job</li>
                        <li>Non-Highlighted Post</li>
                        <li>Posted For 30 Days</li>
                    </ul>
                    <div class="purchase-now">
                        <a href="payment.html">{{ __('messages.purchaseNow') }}</a>
                    </div>
                </div>
                <!---Price table pro--->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price_table border pro">
                    <div class="header">{{ __('messages.companyPro') }}<span>{{ __('messages.bestChoice') }}</span></div>
                    <div class="price"><i>$</i>59</div>
                    <ul class="list-items">
                        <li>Unlimited number of jobs</li>
                        <li>Jobs are posted for 30 days</li>
                        <li>One Time Fee</li>
                        <li>This Plan Includes 1 Job</li>
                        <li>Non-Highlighted Post</li>
                        <li>Posted For 30 Days</li>
                    </ul>
                    <div class="purchase-now">
                        <a href="payment.html">{{ __('messages.purchaseNow') }}</a>
                    </div>
                </div>
                <!---Price table enterprices--->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price_table no-padding startup">
                    <div class="header">{{ __('messages.enterprise') }}</div>
                    <div class="price"><i>$</i>149</div>
                    <ul class="list-items">
                        <li>Unlimited number of jobs</li>
                        <li>Jobs are posted for 30 days</li>
                        <li>One Time Fee</li>
                        <li>This Plan Includes 1 Job</li>
                        <li>Non-Highlighted Post</li>
                        <li>Posted For 30 Days</li>
                    </ul>
                    <div class="purchase-now">
                        <a href="payment.html">{{ __('messages.purchaseNow') }}</a>
                    </div>
                </div>
            </div>
            <!--Colg-12 for Pricing Tables-->
        </div>
    </div>
    <!-- Plan and Prices Tags-->



    <!-- Testimionals Slider-->
    <div class="container-fluid testimionals" style="background:url({{ public_url('/assets/images/testbg.png') }});">
        <div class="row">
            <div class="container main-container">
                <div class="col-lg-12">
                    <div id="testio" class="owl-carousel owl-template">
                        <!--Slides-->
                        <div class="item">
                            <img src="{{ public_url('/assets/images/tes-profile.png') }}" alt="Photo" />
                            <div class="info">
                                <h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque
                                    pulvinar ante a tincidunt placerat.
                                    Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ public_url('/assets/images/tes-profile.png') }}" alt="Photo" />
                            <div class="info">
                                <h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque
                                    pulvinar ante a tincidunt placerat.
                                    Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ public_url('/assets/images/tes-profile.png') }}" alt="Photo" />
                            <div class="info">
                                <h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque
                                    pulvinar ante a tincidunt placerat.
                                    Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ public_url('/assets/images/tes-profile.png') }}" alt="Photo" />
                            <div class="info">
                                <h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque
                                    pulvinar ante a tincidunt placerat.
                                    Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimionals Slider-->
    <script>
        $(document).ready(function() {
            $("body").addClass("homepage");

        });

    </script>
@endsection
