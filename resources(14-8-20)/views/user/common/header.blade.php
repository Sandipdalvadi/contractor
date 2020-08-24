<div id="loadessr">
   <div id="loader"></div>
</div>
<!-- Header Image Or May be Slider-->
<header id="header" class="container-fluid home">
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
                  <a href="{{public_url('index.html')}}"><img src="{{public_url('/default_images/logo.png')}}" alt="Photo" /> </a>
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
                     <li>   
                        <li class="mobile-menu add-job"><a href="#">POST A JOB, IT’S FREE!</a></li>
                     </li>
                     <li><a href="#">Browse Jobs</a></li>
                     <li><a href="#">How It Works</a></li>
                     <li><a href="{{route('login')}}">Login</a></li>
                     <li><a href="{{route('register')}}">Register</a></li>
                     <li><a href="{{route('profile')}}">Profile</a></li>
                     <li><form method="post" action="{{ route('logout')}}">
                        {{ csrf_field() }}
                     <button class="btn btn-default btn-flat">Logout</button>
                     </form>
                     </li>
                     <li class="mobile-menu"><a href="#">POST A JOB, IT’S FREE!</a></li>
                     <li class="mobile-menu"><a href="#">Register User</a></li>
                  </ul>
               </div>
               <!-- navbar-collapse -->
            </div>
            <!-- container-fluid -->
         </nav>


