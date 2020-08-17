
@extends('user.common.user_layout')
@section('content')
        <div class="container slogan">
           <div class="col-lg-6">
              <h1 class="animated fadeInDown">Hire the best freelancers for any job, online.</h1>
              <h3 class="text-center"><span>Join us </span>& Explore thousands of jobs</h3>
              <div class="banner-btn">
                <a href="#" class="btn-clr">Hire as a Freelancer</a>
                <a href="#">Earn Money Freelancing</a>
              </div>
           </div>
        </div>
    </div>
    <div class="jobs_filters">
        <div class="container">
            <form class="" action="index.html">
                <!--col-lg-3 filter_width -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                    <div class="form-group">
                       <select name="category" id="">
                        @if(count($categories))
                           @foreach ($categories as $category) 
                              <li><a href="#">{{get_language_name($category,'name')}}</a></li>
                           @endforeach
                        @endif
                       </select>
                       {{-- <div class="dropdown"> --}}
                            {{-- <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Category
                                <span class="glyphicon glyphicon-menu-down"></span>
                            </button> --}}
                            {{-- <div class="dropdown-menu "  aria-labelledby="dropdownMenu1">
                                <ul class="tiny_scrolling" id="style-3">
                                    @if(count($categories))
                                       @foreach ($categories as $category) 
                                          <li><a href="#">{{get_language_name($category,'name')}}</a></li>
                                       @endforeach
                                    @endif
                                </ul>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                    <span>e.g. Finance</span>
                 </div>
                 <!--col-lg-3 filter_width -->
                 <!-- col-lg-5 filter_width -->
                 <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12 filter_width bgicon">
                    <div class="form-group">
                       <input type="text" class="form-control" placeholder="Keyword, job title or skill">
                       <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                    </div>
                    <span>e.g. Designer</span>
                 </div>
                 <!-- col-lg-5 filter_width -->
                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon location">
                    <div class="form-group">
                       <input type="text" class="form-control" placeholder="Location">
                       <span class="glyphicon fa fa-location-arrow" aria-hidden="true"></span>
                    </div>
                    <span>e.g. New York</span>
                 </div>
                 <div class="col-lg-1 col-md-2 col-sm-6 col-xs-12 filter_width bgicon submit">
                    <div class="form-group">
                       <input type="submit" class="customsubmit" name="submit" value="Search"/>
                       <span class="glyphicon fa fa-search" aria-hidden="true"></span>
                    </div>
                 </div>
            </form>
        </div>
     </div>
</header>
<!-- End Header Section -->


<!--maine container Section -->
<div class="container main-container-home">
    <div class="jobs_results">
        <!--Filters Category -->
        <div class="tab_filters">
           <div class="col-lg-4">
              <h5>Recent Jobs</h5>
              <h4>Popular <span>Category </span></h4>
           </div>
           <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 filters pull-right filter-category">
              <ul class="nav nav-pills">
               @if(count($categories))
               @foreach ($categories as $category) 
                  <li><a href="#">{{get_language_name($category,'name')}}</a></li>
                  @endforeach
               @endif
                 <li class="all active"><a href="#">All</a></li>
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
                          <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
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
                          <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
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
                          <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
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
                          <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
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
                          <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
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
                    <button class="btn btn-default dropdown-toggle" type="button" id="load_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   Show more Jobs <span class="glyphicon glyphicon-menu-down"></span>
                    </button>     
                 </div>
           </div>
           </a>
           <!--Search Result 01-->
        </div>
    </div>
</div>
<!--main container Section -->



<!--Recuriting Section -->
<div class="container-fluid" style="background:#fff;">
    <div class="row">
        <div class="container main-container" style="padding-bottom: 20px;">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center lighttext">
                <h3>Popular Company</h3>
            </div>
        </div>
        <div class="container main-container" style="padding-top: 0;">
          <div class="col-lg-12">
            <div class="jobs-result joblist style2 job-bg-gray">
               <div class="jobs list-style2">
                  <div class="filter-result 01">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo2.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo2.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
                  <div class="filter-result 01">
                     <div class="  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="company-left-info pull-left">
                           <img src="{{public_url("/assets/images/company-logo2.png")}}" alt=""/>
                        </div>
                        <div class="desig">
                           <a href="#">
                              <h3>Company Name</h3>
                           </a>
                           <div class="cmpny-review">
                            <div class="starts">
                              <span>4.5</span>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-half-o" aria-hidden="true"></i>
                            </div>
                            <div class="review">
                              <span>(122 reviews)</span>
                            </div>
                           </div>
                           <h4>$10.00/Hour</h4>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="col-lg-12">
                  <button class="btn btn-default dropdown-toggle" type="button" id="load_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">   Show more companies <span class="glyphicon glyphicon-menu-down"></span>
                  </button>     
               </div>
            </div>
          </div>
        </div>
    </div>
</div>


<!--Recuriting Section -->


<!--Plan and Prices Tags-->
<div class="container-fluid main-container price-tags">
   <div class="container">
      <div class="col-lg-12">
         <h3>Plans & Prices</h3>
         <p>Completely synergize resource sucking relationships via premier niche markets.</p>
      </div>
   </div>
   <div class="container main-container priceing_tables">
      <!--Colg-12 for Pricing Tables--> 
      <div class="col-lg-12">
         <!---Price table free--->
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price_table no-padding startup free">
            <div class="header">Start Up</div>
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
               <a href="payment.html">Purchase Now</a>
            </div>
         </div>
         <!---Price table pro--->
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price_table border pro">
            <div class="header">Company Pro<span>Best Choice</span></div>
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
               <a href="payment.html">Purchase Now</a>
            </div>
         </div>
         <!---Price table enterprices--->
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price_table no-padding startup">
            <div class="header">Enterprise</div>
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
               <a href="payment.html">Purchase Now</a>
            </div>
         </div>
      </div>
      <!--Colg-12 for Pricing Tables--> 
   </div>
</div>
<!-- Plan and Prices Tags-->



<!-- Testimionals Slider-->
<div class="container-fluid testimionals" style="background:url({{public_url('/assets/images/testbg.png')}});">
    <div class="row">
        <div class="container main-container">
           <div class="col-lg-12">
              <div id="testio" class="owl-carousel owl-template">
                 <!--Slides-->
                 <div class="item">
                    <img src="{{public_url("/assets/images/tes-profile.png")}}" alt="Photo" /> 
                    <div class="info">
                       <h5>Anna Smith</h5>
                       <span>Web Designer</span>
                       <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
                          Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                       </p>
                    </div>
                 </div>
                 <div class="item">
                    <img src="{{public_url("/assets/images/tes-profile.png")}}" alt="Photo" /> 
                    <div class="info">
                       <h5>Anna Smith</h5>
                       <span>Web Designer</span>
                       <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
                          Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                       </p>
                    </div>
                 </div>
                 <div class="item">
                    <img src="{{public_url("/assets/images/tes-profile.png")}}" alt="Photo" /> 
                    <div class="info">
                       <h5>Anna Smith</h5>
                       <span>Web Designer</span>
                       <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
                          Donec dapibus efficitur arcu, a rhoncus lectus egestas elem
                       </p>
                    </div>
                 </div>
                 <div class="item">
                    <img src="{{public_url("/assets/images/tes-profile.png")}}" alt="Photo" /> 
                    <div class="info">
                       <h5>Anna Smith</h5>
                       <span>Web Designer</span>
                       <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
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
    $(document).ready(function(){
        $("body").addClass("homepage");
  
    });
</script>
@endsection