<div id="loadessr">
    <div id="loader"></div>
</div>
<!-- Header Image Or May be Slider-->
<header id="header" class="container-fluid home">
    <div class="row">
        <div class="header_banner">
            <div class="slides">
                <div class="slider_items parallax-window" data-parallax="scroll"
                    data-image-src="{{ public_url('/assets/images/headerimage1.jpg') }}"></div>
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
                                {{-- @if (Auth::check()) --}}
                                <a href="{{ route('user.createProject') }}" class="post_job"><span
                                        class="label job-type partytime">{{ __('messages.postAJobItsFree') }}</span></a>
                                {{-- @else
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#loginPopup" class="post_job"><span
                                    class="label job-type partytime">{{ __('messages.postAJobItsFree') }}</span></a>
                                @endif --}}
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
                                    <li><a href="{{route('register')}}">{{ __('messages.register') }}</a></li>
                                        {{-- <li><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#loginPopup">{{ __('messages.login') }}</a></li>
                                        <li><a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#registerPopup">{{ __('messages.register') }}</a></li> --}}
                                    @endif
                                </ul>
                            </li>


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
                            <li class="mobile-menu"><a href="{{ route('register') }}">{{ __('messages.register') }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- navbar-collapse -->
                </div>
                <!-- container-fluid -->
            </nav>
            @section('script')
                <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>

                <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
                <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>

                <!-- Add Firebase products that you want to use -->
                <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-auth.js"></script>
                <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-firestore.js"></script>


                <script>
                    var firebaseConfig = {
                        apiKey: "AIzaSyCOC3Xgz4CR1tXFfYxJEa5aIJ4gn_76cNs",
                        authDomain: "contractor-b8107.firebaseapp.com",
                        databaseURL: "https://contractor-b8107.firebaseio.com",
                        projectId: "contractor-b8107",
                        storageBucket: "contractor-b8107.appspot.com",
                        messagingSenderId: "812649320275",
                        appId: "1:812649320275:web:962c654201d90ed3a99ba6",
                        measurementId: "G-2PT7LT4NGL"
                    };
                    // Initialize Firebase
                    firebase.initializeApp(firebaseConfig);
                    //   firebase.analytics();

                </script>
                <script src="{{ public_url('/datatable_js/js/firebase_phone_auth.js') }}" type="text/javascript"></script>
            @endsection
