<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <link rel="icon" href="{{public_url('/assets/images/favicon.png')}}">
    <!-- Bootstrap -->
    <link href="{{public_url('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--Custom template CSS-->
     <link href="{{public_url('/style.css')}}" rel="stylesheet">
     <!--Custom template CSS Responsive-->
     <link href="{{public_url('/assets/webcss/site-responsive.css')}}" rel="stylesheet">
       <!--Animated CSS -->
     <link href="{{public_url('/assets/webcss/animate.css')}}" rel="stylesheet">
     <!--Owsome Fonts -->
     <link rel="stylesheet" href="{{public_url('/assets/font-awesome/css/font-awesome.min.css')}}">
     <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="{{public_url('/assets/owlslider/owl-carousel/owl.carousel.css')}}">
     
    <!-- Default template -->
    <link rel="stylesheet" href="{{public_url('/assets/owlslider/owl-carousel/owl.template.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
      <div id="loadessr"><div id="loader"></div></div>
   	<!-- Header Image Or May be Slider-->
		<div id="header" class="container-fluid home">
              <div class="row">
                <div class="header_banner">
                       <div class="slides">
                       		<div class="slider_items parallax-window"  data-parallax="scroll" data-image-src="{{public_url('/assets/images/headerimage1.jpg')}}"></div>
                       </div>
                 </div>
             <!-- Header Image Or May be Slider-->
                <div class="top_header">
                    <nav class="navbar navbar-fixed-top">
               			 
                         <div class="container">
                             <div class="logo">
                                <a href="{{public_url('index.html')}}"><img src="{{public_url('/assets/images/logo.jpeg')}}" alt="Photo" /> </a>
                             </div>
                             <div class="logins">
                    				<a href="#" class="post_job"><span class="label job-type partytime">POST A JOB, IT’S FREE!</span></a> 
                                    <a href="#" class="login"><i class="fa fa-user"></i></a>
                    		</div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            
                             <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home 
                              <span class="sr-only">(current)</span></a>
                                   <li class="mobile-menu add-job"><a href="#">POST A JOB, IT’S FREE!</a></li>
							               </li>
                            
                            <li class="dropdown">
                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs</a>
                            	 <!-- <ul class="dropdown-menu">
                                    <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                    <li><a href="browse-jobs-alternative.html">Browse jobs alternative</a></li>
                                    
                                  </ul> -->
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                  <!-- <ul class="dropdown-menu">
                                    <li><a href="job-style-one.html">Job Style One</a></li>
                                    <li><a href="job-style-two.html">Job Style Two</a></li>
                                   <li><a href="job-preview.html">Job Preview</a></li>
                                    <li><a href="resume.html">Resume Page</a></li>
                                    <li><a href="companies.html">Companies</a></li>

                                    
                                    <li><a href="pricing_table.html">Pricing Table</a></li>
                                  </ul> -->
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">How It Works</a></li>
							<li><a href="#">Contact</a></li>
                            <li class="mobile-menu"><a href="#">POST A JOB, IT’S FREE!</a></li>
                            <li class="mobile-menu"><a href="#">Register User</a></li>
                          </ul>
                     
                    </div><!-- navbar-collapse -->
                    
                    
                    </div>
                    <!-- container-fluid -->
                    </nav>
                    
                    <div class="container slogan">
                        <div class="col-lg-12">
                        	<h1 class="animated fadeInDown">Looking For a Job?</h1>
                            <h3 class="text-center"><span>Join us </span>& Explore thousands of jobs</h3>
                       		<a href="#">We have <span>59</span> jobs offers for you!</a>
                        </div>
                    
                    </div>
                    
                 </div>
                 
                <div class="jobs_filters">
                    <div class="container">
                        	<form class="" action="index.html">
                    	<!--col-lg-3 filter_width -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filter_width bgicon">
                            <div class="form-group">
                                <div class="dropdown">
                                        <button class="filters_feilds btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Category
                                        <span class="glyphicon glyphicon-menu-down"></span>
                                        </button>
                                    
                                    <div class="dropdown-menu "  aria-labelledby="dropdownMenu1">
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
                                    </div>
                                </div>
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
            </div>
       	</div>
    <!-- Header Section -->
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
                                      <li class="web-designer"><a href="#">Web Designer</a></li>
                                      <li class="fianance"><a href="#">Finance</a></li>
                                      <li class="education"><a href="#">Education</a></li>
                                      <li class="food-service"><a href="#">Food Services</a></li>
                                      <li class="health-services"><a href="#">Health Care</a></li>
                                      <li class="automative"><a href="#">Automative</a></li>
                                      <li class="all active"><a href="#">All</a></li>
                            </ul>
                        </div>
                 </div>
              	<!-- Filters Category --> 
                	<div class="jobs-result"> 
                       <!--Search Result 01-->
                        <div class="col-lg-12">
                        <a href="#"> <div class="filter-result 01">
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                   <div class="company-left-info pull-left">
                                        <img src="{{public_url('/assets/images/company-logo')}}.png" alt=""/>
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
                            </div> </a>
                            <!--jobs result--> 
                           <a href="#"> <div class="filter-result 02">
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                    <div class="company-left-info pull-left">
                                        <img src="{{public_url('/assets/images/company-logo')}}.png" alt=""/>
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
                            </div> </a>
                            <!--jobs result--> 
                           <a href="#"> <div class="filter-result 03">
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                    <div class="company-left-info pull-left">
                                        <img src="{{public_url('/assets/images/company-logo')}}.png" alt=""/>
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
                            </div> </a>
                            <!--jobs result--> 
                           <a href="#"> <div class="filter-result 04">
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                    <div class="company-left-info pull-left">
                                        <img src="{{public_url('/assets/images/company-logo')}}.png" alt=""/>
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
                            </div> </a>
                            <!--jobs result--> 
                           <a href="#"> <div class="filter-result 02">
                                <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 pull-left">
                                    <div class="company-left-info pull-left">
                                        <img src="{{public_url('/assets/images/company-logo')}}.png" alt=""/>
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
                                        </button>     </div>               
                            
                         </div> </a>
                         <!--Search Result 01-->
                    </div>
           </div>
        
        </div>
    <!--main container Section -->  
    <!---full width sectio fulid-->
    	<div class="container-fluid bluesection">
        	<div class="row">
        	<div class="container main-container">
            	<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 blue-halef">
                	<h3>DeximJobs site stats</h3>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                    
                </div>
                
            </div>
            
            <div class="container main-container countjobs" id="cjobs">
            	<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                	   <ul id="counter">
                       		<li><div class="count"><div class="num">15</div>k</div><span>Job Offers</span></li>
                            <li><div class="count"><div class="num">4982</div></div><span>Members</span></li>
                            <li><div class="count"><div class="num">768</div></div><span>Resume Posted</span></li>
                            <li><div class="count"><div class="num">90</div>%</div><span>Client who Rehier</span></li>
                       </ul>                 
                </div>
                
            </div>
        </div>
        </div>
    <!---full width sectio fulid-->
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
                        	<a href="#">Purchase Now</a>
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
                        	<a href="#">Purchase Now</a>
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
                        	<a href="#">Purchase Now</a>
                        </div>
                </div>
               </div>           
           		<!--Colg-12 for Pricing Tables-->	
            </div>
        </div>
    <!-- Plan and Prices Tags-->
    <!--Recent Post-->
    	<div class="container-fluid recent-post" style="background:#f9f9f9;">
        <div class="row">
        	<div class="container main-container">
                    <h3 class="text-center">Recent Post</h3>
                    <p>Completely synergize resource sucking relationships via premier niche markets.</p>
            </div>
            <div class="container main-container posts-list">
            	    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 post post-01">
                    	<div class="post-thumb">
                       		<img src="{{public_url('/assets/images/post-image1')}}.jpg" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">15</span>
                                    <span class="date postmonth">Feb</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>11 Tips to Help You Get New Clients Through Cold Calling</h4>
                            <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. </p>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                    <!--Post 01-->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 post post-02">
                    	<div class="post-thumb">
                       		<img src="{{public_url('/assets/images/post-image2')}}.jpg" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">15</span>
                                    <span class="date postmonth">Feb</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>11 Tips to Help You Get New Clients Through Cold Calling</h4>
                            <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. </p>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                     <!--Post 02-->
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 post post-03">
                    	<div class="post-thumb">
                       		<img src="{{public_url('/assets/images/post-image3')}}.jpg" alt="Photo" /> 
                               <div class="post-date">
                                    <span class="date postdate">15</span>
                                    <span class="date postmonth">Feb</span>
                                </div>
                        </div>
                        <div class="post-meta">
                        	<h4>11 Tips to Help You Get New Clients Through Cold Calling</h4>
                            <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. </p>
                            <a href="#" class="readmore">Read More</a>
                        </div>
                    </div>
                     <!--Post 03-->
            </div>
            </div>
        </div>
    <!--Recent Post-->
    <!-- Green Banner-->
    	<div class="container-fluid green-banner">
        	<div class="row">
            <div class="container main-container v-middle">
            	<div class="col-lg-10 col-md-8 col-sm-8 col-xs-12 ">
                	<h3 class="white-heading">Start Building  <span>Your Own Job Board Now</span></h3>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 no-padding-left">
                	<a href="#" class="btn btn-getstarted bg-red">get started now</a>
                </div>
            </div>
            </div>
        </div>
    <!-- Green Banner-->
    <!-- Testimionals Slider-->
    	<div class="container-fluid testimionals" style="background:url({{public_url('/assets/images/testbg.png')}});">
			<div class="row">
            <div class="container main-container">
            	<div class="col-lg-12">
                    <div id="testio" class="owl-carousel owl-template">
                      <!--Slides-->
                      <div class="item">
                      		<img src="{{public_url('/assets/images/tes-profile.png')}}" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                      
                      <div class="item">
                      		<img src="{{public_url('/assets/images/tes-profile.png')}}" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                      
                      <div class="item">
                      		<img src="{{public_url('/assets/images/tes-profile.png')}}" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                       
                      <div class="item">
                      		<img src="{{public_url('/assets/images/tes-profile.png')}}" alt="Photo" /> 
                            <div class="info">
                            	<h5>Anna Smith</h5>
                                <span>Web Designer</span>
                                <p>Nam eu eleifend nulla. Duis consectetur sit amet risus sit amet venenatis. Pellentesque pulvinar ante a tincidunt placerat.
Donec dapibus efficitur arcu, a rhoncus lectus egestas elem</p>
                            </div>
                       </div>
                     
                    </div>
                </div>
            </div>     
        </div>
        </div>
    <!-- Testimionals Slider-->
    <!-- Clients Slider-->
    	<div class="container-fluid clients">
        <div class="row">
            <div class="container main-container">
                    <div class="col-lg-12">
                        <ul>
                            <li><img src="{{public_url('/assets/images/client1.png')}}" alt="Photo" /> </li>
                            <li><img src="{{public_url('/assets/images/client2.png')}}" alt="Photo" /> </li>
                            <li><img src="{{public_url('/assets/images/client3.png')}}" alt="Photo" /> </li>
                            <li><img src="{{public_url('/assets/images/client4.png')}}" alt="Photo" /> </li>
                            <li><img src="{{public_url('/assets/images/client1.png')}}" alt="Photo" /> </li>
                        </ul>
					</div>
                </div>
			</div>
        </div>
	<!-- Client Slider-->  
<!--Footer Area-->
   		<div class="container-fluid footer">
        	<div class="row">
            <div class="container main-container-home">
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>Pages</h3>
                    <ul class="list-group">
                        <li><a href="#">Job page</a></li>
						<li><a href="#">Job page alternative</a></li>
						<li><a href="#">Post a job</a></li>
						<li><a href="#">Browse jobs</a></li>
						<li><a href="#">How it works</a></li>
						<li><a href="#">Price table</a></li>
						<li><a href="#">Companies</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Blog post</a></li>
						<li><a href="#">Contact us</a></li>
						

                    </ul>
                </div>
                <!---Footer Column 01-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>Other page</h3>
          <ul class="list-group">
						<li><a href="#">Login/Register</a></li>
						<li><a href="#">Lost passoword</a></li>
                        <li><a href="#">Payment</a></li>
						<li><a href="#">Confirm payment</a></li>
						<li><a href="#">Sumbit resume</a></li>
						<li><a href="#">Resume</a></li>
						<li><a href="#">Terms and conditions</a></li>

                    </ul>
                </div>
                 <!---Footer Column 01-->
           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>Contact with us</h3>
                   	   	<p>Manchester Road 123-78B, <br/>Silictown</p> 
                        <p>+46 123 456 789</p>
                        <p>hello@sitename.com</p>
                        <p>http://www.sitename.com</p>
                </div>
                 <!---Footer Column 01-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                	<h3>About us</h3>
                    <p>An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards</p>
                </div>
            	
            </div>
            </div>
        </div>
    <!--Footer Area--> 
    <!--Last Footer Area---->
    	<div class="container-fluid footer last-footer ">
        	<div class="row">
            <div class="container main-container">
            	<div class="col-lg-9 col-md-3 col-sm-9 col-xs-6" >
                	<p class="copyright">© template by DeximLabs.com All Rights Reserved.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                	<ul class="list-group">
                    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                
            </div>
            </div>
        </div>
    <!--Last Footer Area----> 

<!-- Scripts
================================================== -->
  	<!--  jQuery 1.7+  -->{{public_url("/js/plugins/chart.js")}}
     <script type="text/javascript" src="{{public_url('/assets/js/jquery-1.9.1.min.js')}}"></script>
     <!--Select 2-->
    <script type="text/javascript" src="{{public_url('/assets/js/select2.min.js')}}"></script>
    <!-- Html Editor -->
    <script src="{{public_url('/assets/tinymce/tinymce.min.js')}}"></script>
	<!--  parallax.js-1.4.2  -->
    <script type="text/javascript" src="{{public_url('/assets/parallax.js-1.4.2/parallax.js')}}"></script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{public_url('/assets/js/bootstrap.min.js')}}"></script>
   	<!-- Include js plugin -->
    <script type="text/javascript" src="{{public_url('/assets/owlslider/owl-carousel/owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{public_url('/assets/js/waypoints.min.js')}}"></script> 
  	<script type="text/javascript" src="{{public_url('/assets/counter/jquery.counterup.min.js')}}"></script> 
    <!--Site JS-->
     <script src="{{public_url('/assets/js/webjs.js')}}"></script>

     <script>
$(window).load(function() {

   $("#loadessr").fadeOut();

})
</script>


  <!-- Scripts
================================================== -->
	</body>
</html>