<div id="loadessr">
    <div id="loader"></div>
</div>
<!-- Header Image Or May be Slider-->

<script>
    document.getElementById('bannerVideo').play();
</script>

<header id="header" class="container-fluid home">
    <div class="row">
        <div class="header_banner">
            <div class="slides">
                <div class="slider_items parallax-window" data-parallax="scroll"
                    data-image-src="{{ public_url('/assets/images/headerimage1.jpg') }}">
                        <video autoplay muted loop id="bannerVideo">
                          <source src="{{ public_url('/assets/images/banner1.mp4') }}" type="video/mp4">
                          <source src="{{ public_url('/assets/images/banner1.ogg') }}" type="video/ogg">
                        </video>
                    </div>
            </div>
        </div>
        <!-- Header Image Or May be Slider-->
        <div class="top_header">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ public_url('/default_images/logo.png') }}"
                                alt="Photo" /> </a>
                    </div>
                    <div class="logins">
                        <ul>
                            <li>
                                <a href="{{ route('user.createProject') }}" class="post_job"><span
                                        class="label job-type partytime">{{ __('messages.postAJobItsFree') }}</span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle language" href="#" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Language</a>
                                <ul class="dropdown-menu settings-menu">
                                    <li><a href="{{ route('locale', ['locale' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('locale', ['locale' => 'ar']) }}">Arabic</a></li>
                                    <li><a href="{{ route('locale', ['locale' => 'ur']) }}">Urdu</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle login" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                                <ul class="dropdown-menu">
                                    @if (Auth::check())
                                        <li><a href="{{ route('user.profile') }}">{{ __('messages.profile') }}</a></li>
                                        <li>
                                            <form method="post" action="{{ route('logout') }}">
                                                {{ csrf_field() }}
                                                <button class="">{{ __('messages.logout') }}</button>
                                            </form>
                                        </li>
                                    @else
                                    <li><a href="{{route('login')}}">{{ __('messages.login') }}</a></li>
                                    <li><a href="{{route('auth.verifyPhone')}}">{{ __('messages.register') }}</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">{{ __('messages.toggleNavigation') }}</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <ul class="mobile-menu logins">
                            <li class="dropdown">
                                <a class="dropdown-toggle login" href="#" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-language"
                                        aria-hidden="true"></i></a>
                                <ul class="dropdown-menu settings-menu">
                                    <li><a href="{{ route('locale', ['locale' => 'en']) }}">English</a></li>
                                    <li><a href="{{ route('locale', ['locale' => 'ar']) }}">Arabic</a></li>
                                    <li><a href="{{ route('locale', ['locale' => 'ur']) }}">Urdu</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                            <li class="mobile-menu add-job"><a
                                    href="{{ route('user.createProject') }}">{{ __('messages.postAJobItsFree') }}</a>
                            </li>
                            </li>
                            <li><a href="#">{{ __('messages.browseJobs') }}</a></li>
                            <li><a href="#">{{ __('messages.howItWorks') }}</a></li>
                            <li class="mobile-menu"><a
                                    href="{{ route('user.createProject') }}">{{ __('messages.postAJobItsFree') }}</a>
                            </li>
                            <li class="mobile-menu"><a href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                            <li class="mobile-menu"><a href="{{route('auth.verifyPhone')}}">{{ __('messages.register') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- navbar-collapse -->
                </div>
                <!-- container-fluid -->
            </nav>