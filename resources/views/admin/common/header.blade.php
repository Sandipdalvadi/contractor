<!-- Navbar-->
<header class="main-header hidden-print"><a class="logo" href="{{URL::To('/')}}">{{Lang::get('messages.contractor')}}</a>
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu">
            <ul class="top-nav">
                <!--Notification Menu-->
                <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown"
                                                          aria-expanded="false"><i
                                class="fa fa-bell-o fa-lg"></i></a>
                    <ul class="dropdown-menu">
                        <li class="not-head">You have 4 new notifications.</li>
                        <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span
                                            class="fa-stack fa-lg"><i
                                                class="fa fa-circle fa-stack-2x text-primary"></i><i
                                                class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                            class="text-muted block">2min ago</span></div>
                            </a></li>
                    </ul>
                </li>
                <!-- User Menu-->
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                    aria-haspopup="true" aria-expanded="false">{{Lang::get('messages.languages')}}</a>
                    <ul class="dropdown-menu settings-menu">
                        <li><a href="{{route('admin.locale',['locale'=>'en']) }}"><i class="fa fa-cog fa-lg"></i> English</a></li>
                        <li><a href="{{route('admin.locale',['locale'=>'ar']) }}"><i class="fa fa-cog fa-lg"></i> Arabic</a></li>
                        <li><a href="{{route('admin.locale',['locale'=>'ur']) }}"><i class="fa fa-cog fa-lg"></i> Urdu</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                    <ul class="dropdown-menu settings-menu">
                        <li><a href="#"><i class="fa fa-cog fa-lg"></i> {{Lang::get('messages.settings')}}</a></li>
                        <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out fa-lg"></i> {{Lang::get('messages.logout')}}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>