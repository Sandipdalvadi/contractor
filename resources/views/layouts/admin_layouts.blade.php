<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="{{public_url("/css/main.css")}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{Lang::get('messages.adminHome')}}</title>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>--}}
    <script type="text/javascript" src="{{public_url("/js/plugins/chart.js")}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        function checkDelete(){
            return confirm('Are you sure?');
        }
    </script>

</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
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
                            <li><a href="{{route('admin.locale',['locale'=>'fr']) }}"><i class="fa fa-cog fa-lg"></i> French</a></li>
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
    <!-- Side-Nav-->
    <aside class="main-sidebar hidden-print" id="test">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li><a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i><span>{{Lang::get('messages.dashboard')}}</span></a></li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<script src="{{public_url("/js/jquery-2.1.4.min.js")}}"></script>
<script src="{{public_url("/js/bootstrap.min.js")}}"></script>
<script src="{{public_url("/js/plugins/pace.min.js")}}"></script>
<script src="{{public_url("/js/main.js")}}"></script>
<script type="text/javascript" src="{{public_url("/js/plugins/jquery.dataTables.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/js/plugins/dataTables.bootstrap.min.js")}}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
</body>
</html>