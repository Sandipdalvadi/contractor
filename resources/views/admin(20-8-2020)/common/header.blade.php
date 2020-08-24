<style>
    .dropdown-primary .dropdown-menu.noti-ul a:hover {
        background: transparent;
    }
    .dropdown-primary .dropdown-menu.noti-ul a {
        display: inline-block;
        width: 100%;
    }
    
    </style>
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="card card_main p-fixed users-main">
            <div class="user-box">
                <div class="chat-inner-header">
                    <div class="back_chatBox">
                        <div class="right-icon-control">
                            <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                            <div class="form-icon">
                                <i class="icofont icofont-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Sidebar inner chat start-->


<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <nav class="navbar header-navbar pcoded-header">
            
            <div class="navbar-wrapper">

                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="feather icon-menu"></i>
                    </a>
                    <a href="#" style="display: flex; align-items: center; font-size: 15px; font-weight: 600;">
                        <img class="img-fluid" src="{{ public_url("/default_images/logo.png") }}" style="height:40px; margin-right: 10px;" alt="Theme-Logo">
                        Contractor
                    </a>
                    <a class="mobile-options">
                        <i class="feather icon-more-horizontal"></i>
                    </a>
                </div>

                <div class="navbar-container container-fluid">
                    <ul class="nav-left">
                        <li>
                            <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="feather icon-maximize full-screen"></i>
                            </a>
                        </li>
                    </ul>
                    
                    <ul class="nav-right">
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="zmdi zmdi-notifications-none"></i>
                                    <span class="badge bg-c-pink">11</span>
                                </div>
                                    <div class="show-notification notification-view dropdown-menu noti-ul" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <ul class="">
                                            <li>
                                                <h6>Notifications</h6>
                                                <label class="label label-danger">New</label>
                                            </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="media">
                                                            <img class="d-flex align-self-center img-radius" src="" alt="Generic placeholder image">
                                                            <div class="media-body">
                                                                <h5 class="notification-user"> New Customer</h5>
                                                                <p class="notification-msg">New Order.</p>
                                                                <span class="notification-time">11:24</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                    </ul>
                                    </div>
                            </div>
                        </li>
                        <li class="header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                    <i class="zmdi zmdi-comment-outline"></i>
                                    <span class="badge bg-c-green" id="userTotalMessageCount">0</span>
                                </div>
                            </div>
                        </li>
                        <li class="user-profile header-notification">
                            <div class="dropdown-primary dropdown">
                                <div class="dropdown-toggle" data-toggle="dropdown">
                                          <img src="Imag" class="img-radius" 
                                          alt="Image">
                                    <span>Admin</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                   
                                    <li>
                                        <a href="{{route('admin.profile.edit')}}">
                                            <i class="feather icon-user"></i> {{trans('labels.Profile')}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('admin.logout')}}">
                                            <i class="feather icon-log-out"></i> {{trans('labels.logout')}}
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    
<!-- Navbar-->