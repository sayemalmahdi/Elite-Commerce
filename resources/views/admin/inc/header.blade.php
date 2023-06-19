    <!-- Nav header start -->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <b class="logo-abbr">E</b>
                    <span class="brand-title"><b>Elite-Commerce</b></span>
                </a>
            </div>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
        </div>
    <!-- Nav header end -->



    <!-- Header start -->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="search" class="border-0" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">

                    <ul class="clearfix">
                        <li class="icons d-none d-md-flex">
                            <a href="javascript:void(0)" class="window_fullscreen-x">
                                <i class="icon-frame"></i>
                            </a>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-danger">3</span>
                            </a>
                            <div class="drop-down animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{ asset('backend')}}/assets/images/avatar/1.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey, from Sam, What's up! You have a good news !!!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{ asset('backend')}}/assets/images/avatar/2.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{ asset('backend')}}/assets/images/avatar/3.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">Hey!</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{ asset('backend')}}/assets/images/avatar/4.jpg" alt="avatar">
                                                <div class="notification-content">
                                                    <div class="notification-text">And what do you do?</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-center bg-primary px-4 text-white" href="#">
                                        <span>See all messagese </span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <a href="javascript:void(0)" class="">
                                <i class="icon-bell"></i>
                                <span class="badge badge-primary">3</span>
                            </a>
                            <div class="drop-down animated flipInX dropdown-notfication">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-calender"></i></span>
                                                <div class="notification-content">
                                                    <h5 class="notification-heading">Event Started</h5>
                                                    <span class="notification-text">One hour ago</span> 
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a class="d-flex justify-content-between bg-primary px-4 text-white" href="javascript:void()">
                                        <span>All Notifications</span>
                                        <span><i class="icon-settings"></i></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons">
                            <div class="user-img c-pointer-x">
                                <span class="activity active"></span>
                                <img src="{{ asset('backend')}}/assets/images/user/1.png" height="40" width="40" alt="avatar">
                            </div>
                            <div class="drop-down dropdown-profile animated flipInX">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()"><i class="icon-user"></i> <span>My Profile</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-calender"></i> <span>My Calender</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-envelope-open"></i> <span>My Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-paper-plane"></i> <span>My Tasks</span><div class="badge badge-pill bg-dark">3</div></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-check"></i> <span>Online</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="javascript:void()"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    <!-- Header end ti-comment-alt -->



    <!-- Sidebar start -->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.dashboard') }}">Admin Overview</a></li>
                            <li><a href="#">Custommer Overview</a></li>
                            <li><a href="#">Employee Overview</a></li>
                            <li><a href="#">Menus</a></li>
                            <li><a href="#">Offer</a></li>
                            <li><a href="#">Reservation</a></li>
                            <li><a href="#">Employees</a></li>
                            <li><a href="#">Custommer</a></li>
                            <li><a href="#">Order</a></li>
                            <li><a href="#">Packages</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-layers"></i><span class="nav-text">Layouts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Blank</a></li>
                            <li><a href="#">One Column</a></li>
                            <li><a href="#">Two column</a></li>
                            <li><a href="#">Fixed Header</a></li>
                            <li><a href="#">Fixed Sidebar</a></li>
                            <li><a href="#">Horizontal</a></li>
                            <li><a href="#">RTL</a></li>
                            <li><a href="#">Boxed</a></li>
                            <li><a href="#">Wide Boxed</a></li>
                            <li><a href="#">Wide</a></li>
                            <li><a href="#">Dark</a></li>
                            <li><a href="#">Light</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-screen-smartphone"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Mailbox</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a href="#" aria-expanded="false"><i class="icon-chart"></i> <span class="nav-text">Charts</span></a></li>
                    <li class="nav-label">UI Components</li>
                    <li><a href="#" aria-expanded="false"><i class="icon-diamond"></i><span class="nav-text">UI Bootstrap</span></a></li>
                    <li><a href="#" aria-expanded="false"><i class="icon-puzzle"></i><span class="nav-text">Components</span></a></li>
                    <li><a href="#" aria-expanded="false"><i class="icon-badge"></i><span class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a href="#" aria-expanded="false"><i class="icon-settings"></i><span class="nav-text">Forms</span></a></li>
                    <li class="nav-label">Table</li>
                    <li><a href="#" aria-expanded="false"><i class="icon-briefcase"></i><span class="nav-text">Table</span></a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon-globe"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Lock Screen</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Erorr</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">Erorr 400</a></li>
                                    <li><a href="#">Erorr 403</a></li>
                                    <li><a href="#">Erorr 404</a></li>
                                    <li><a href="#">Erorr 500</a></li>
                                    <li><a href="#">Erorr 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    <!-- Sidebar end -->