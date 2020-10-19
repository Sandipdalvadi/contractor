@extends('user.common.user_layout')
@section('content')
    
        </div>
    </div>
</header>
    <!-- End Header Section -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/bootstrap-slider.min.js"></script>
    <!--maine container Section -->
    <div class="borde-btm">
        <div class="container main-container-home">
            <div class="jobs_results">
                <div class="jobs-result row">
                    <div class="col-sm-4 col-md-3">
                        <div class="box-card sidebar-stng">
                            <div class="form-group">
                                <h4>Project Type</h4>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                  <label class="form-check-label" for="defaultCheck1">
                                    Fixed Projects
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                  <label class="form-check-label" for="defaultCheck2">
                                    Hourly Projects
                                  </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Skills</h4>
                                <div class="skillsforjob">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Listing Types</h4>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                  <label class="form-check-label" for="defaultCheck3">
                                    Fulltime
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                  <label class="form-check-label" for="defaultCheck4">
                                    Parttime
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                  <label class="form-check-label" for="defaultCheck5">
                                    Urgent
                                  </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Specific Location</h4>
                                <div class="location-side">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Add Location" aria-label="Add Location" aria-describedby="basic-addon2">
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                      </div>
                                    </div>
                                    <button class="site-btn">Clear Location</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Fixed Price</h4>
                                <div class="slider-wrapper">
                                    <input class="input-range"  data-slider-id='ex12cSlider' type="text" data-slider-step="1" data-slider-value="1, 100" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Hourly Price</h4>
                                <div class="slider-wrapper">
                                    <input class="input-range"  data-slider-id='ex12cSlider' type="text" data-slider-step="1" data-slider-value="1, 100" data-slider-min="0" data-slider-max="100" data-slider-range="true" data-slider-tooltip_split="true" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-9">
                        <div class="box-card">
                            <a href="#">
                                <div class="filter-result 01">
                                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-left">
                                        <div class="company-left-info pull-left">
                                            <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                        </div>
                                        <div class="desig">
                                            <h3>Senior UX Designer</h3>
                                            <h4>Photoshop, CSS, Java Script, Sketch</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right">
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
                            <a href="#">
                                <div class="filter-result 02">
                                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-left">
                                        <div class="company-left-info pull-left">
                                            <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                        </div>
                                        <div class="desig">
                                            <h3>Full Stack Web Developer</h3>
                                            <h4>C# / ASP.NET / MVC</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right">
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
                            <a href="#">
                                <div class="filter-result 03">
                                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-left">
                                        <div class="company-left-info pull-left">
                                            <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                        </div>
                                        <div class="desig">
                                            <h3>Full Stack Web Developer</h3>
                                            <h4>C# / ASP.NET / MVC</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right">
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
                            <a href="#">
                                <div class="filter-result 04">
                                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-left">
                                        <div class="company-left-info pull-left">
                                            <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                        </div>
                                        <div class="desig">
                                            <h3>Web Developer / PHP & Drupal Ninja!</h3>
                                            <h4>PHP, MySQL, Linux, Wordpress</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right">
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
                            <a href="#">
                                <div class="filter-result 02">
                                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-left">
                                        <div class="company-left-info pull-left">
                                            <img src="{{ public_url('/assets/images/company-logo.png') }}" alt="" />
                                        </div>
                                        <div class="desig">
                                            <h3>Front-End UI Web Developer - ReactJS</h3>
                                            <h4>PHP, MySQL, Linux, Wordpress</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-right">
                                        <div class="pull-right location">
                                            <p>Loss Angeles</p>
                                        </div>
                                        <div class="data-job">
                                            <h3>£10 - £12 an hour</h3>
                                            <span class="label job-type job-partytime">Party Time</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                                <div class="clearfix"></div>
                                <div class="col-lg-12">
                                    <!-- <button class="btn btn-default dropdown-toggle" type="button" id="load_more"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ __('messages.showMoreJobs') }} <span class="glyphicon glyphicon-menu-down"></span>
                                    </button> -->
                                    <nav aria-label="Page navigation">
                                      <ul class="pagination">
                                        <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                        </li>
                                      </ul>
                                    </nav>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main container Section -->

    
@endsection
