<header class="prtm-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <button class="c-hamburger c-hamburger--htra prtm-bars pull-right"><span>toggle menu</span></button>
                <div class="prtm-logo">
                    <a class="navbar-brand" href="index.html"><img class="img-responsive display-ib"
                                                                   src="{{asset('public/copy_assets/')}}/img/pratham-logo.png" alt="logo"
                                                                   width="226" height="31"></a>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse" data-hover="dropdown">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <div class="prtm-search-icon"><a href="javascript:;" class="prtm-menu-search"><i
                                        class="fa fa-search overlay-1"></i></a>

                            <div class="prtm-navbar-search">
                                <div class="prtm-search-area"></div>
                                <form class="prtm-search-form" method="post" role="search" action="javascript:;">
                                    <span class="prtm-search-form-title fa fa-search"></span>
                                    <input placeholder="Type and hit enter" value="" name="s" type="text"></form>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs hidden-sm hidden-md"><a href="javascript:;"
                                                                          class="dropdown-toggle"
                                                                          data-toggle="dropdown" role="button"
                                                                          aria-haspopup="true"
                                                                          aria-expanded="false">Mega <span
                                    class="caret"></span></a>

                        <div class="dropdown-menu prtm-mega-menu">
                            <div class="prtm-mega-menu-wrap pad-all-lg">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                        <h4 class="sidenav-heading text-uppercase mrgn-b-md">Dashboards</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="index.html">Dashboard 1</a></li>
                                            <li><a href="dashboard-v2.html">Dashboard 2</a></li>
                                            <li><a href="dashboard-v3.html">Dashboard 3</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                        <h4 class="sidenav-heading text-uppercase mrgn-b-md">Features</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="ui-buttons.html">UI Elements</a></li>
                                            <li><a href="notification.html">Components</a></li>
                                            <li><a href="google-chart.html">Graph and Charts</a></li>
                                            <li><a href="googlemap.html">Maps</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                        <h4 class="sidenav-heading text-uppercase mrgn-b-md">Layouts</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="index.html">Sidebar At left</a></li>
                                            <li><a href="right-sidebar.html">Sidebar At right</a></li>
                                            <li><a href="fixed-header.html">Fixed Header</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2">
                                        <h4 class="sidenav-heading text-uppercase mrgn-b-md">Pages</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="users-list.html">Users</a></li>
                                            <li><a href="ecommerce-product.html">Ecommerce</a></li>
                                            <li><a href="email.html">Mailbox</a></li>
                                            <li><a href="login.html">Extra Pages</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <div class="prtm-sparkline">
                                            <div class="prtm-sparkline-list bg-success clearfix prtm-card-box">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><span
                                                            class="show count-item" data-count="5000">0</span> <span>New visitors</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="chart sparkline text-center" data-chart="sparkline"
                                                         data-type="bar" data-height="50px" data-barwidth="6"
                                                         data-width="100%" data-barspacing="2"
                                                         data-barcolor="#ffffff"
                                                         data-values="[9, 8, 9, 7, 6, 8, 7, 8]"></div>
                                                </div>
                                            </div>
                                            <div class="prtm-sparkline-list clearfix bg-info prtm-card-box">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><span
                                                            class="show count-item" data-count="3000">0</span> <span>New Users</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="chart sparkline text-center" data-chart="sparkline"
                                                         data-type="bar" data-height="50px" data-barwidth="6"
                                                         data-width="100%" data-barspacing="2"
                                                         data-barcolor="#ffffff"
                                                         data-values="[5, 6, 8, 9, 5, 8, 4, 6]"></div>
                                                </div>
                                            </div>
                                            <div class="prtm-sparkline-list clearfix bg-secondary prtm-card-box">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><span
                                                            class="show count-item" data-count="7000">0</span> <span>Active Users</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="chart sparkline text-center" data-chart="sparkline"
                                                         data-type="bar" data-height="50px" data-barwidth="6"
                                                         data-width="100%" data-barspacing="2"
                                                         data-barcolor="#ffffff"
                                                         data-values="[9, 8, 9, 7, 6, 8, 7, 8]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs hidden-sm hidden-md"><a href="javascript:;"
                                                                          class="dropdown-toggle"
                                                                          data-toggle="dropdown" role="button"
                                                                          aria-haspopup="true"
                                                                          aria-expanded="false">New<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu ">
                            <li><a href="javascript:;">New Page 1</a></li>
                            <li><a href="javascript:;">New Page 2</a></li>
                            <li><a href="javascript:;">New Page 3</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-bell-o"> </i><span class="badge badge-danger">2</span></a>
                        <ul class="dropdown-menu dropdown-custom dropdown-notifi">
                            <li><strong class="drop-title"><span><i class="fa fa-bell-o"
                                                                    aria-hidden="true"></i></span>Notifications</strong><a
                                        href="javascript:;" class="pull-right bg-primary base-reverse">Marks As Read</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="pos-relative">
                                    <div class="mrgn-b-xs"><span class="notification-icon"><i
                                                    class="fa fa-database text-danger"></i></span> <span
                                                class="notification-title">Database overload</span> <span
                                                class="notification-ago">3 min ago</span></div>
                                    <p class="mrgn-all-none">Database overload due to incorrect queries</p>

                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="pos-relative">
                                    <div class="mrgn-b-xs"><span class="notification-icon"><i
                                                    class="fa fa-circle-o-notch fa-spin text-success"
                                                    aria-hidden="true"></i></span> <span class="notification-title">Installing App v1.2.1</span>
                                        <span class="notification-ago ">60 % Done</span></div>
                                    <div class="progress progress-sm-height mrgn-all-none">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active"
                                             role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                             aria-valuemax="100" style="width:60%"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="pos-relative">
                                    <div class="mrgn-b-xs"><span class="notification-icon"><i
                                                    class="fa fa-exclamation-triangle text-warning"></i></span> <span
                                                class="notification-title">Application Error</span> <span
                                                class="notification-ago ">10 min ago</span></div>
                                    <p class="mrgn-all-none">failed to initialize the application due to error
                                        weblogic.application.moduleexception</p>

                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="mrgn-b-xs"><span class="notification-icon"><i
                                                    class="fa fa-server text-info"></i></span> <span
                                                class="notification-title">Server Status</span> <span
                                                class="notification-ago ">30GB Free Space</span></div>
                                    <div class="progress progress-sm-height mrgn-all-none">
                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                             style="width:40%"></div>
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             style="width:10%"></div>
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                             style="width:20%"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="mrgn-b-xs"><span class="notification-icon"><i
                                                    class="fa fa-cogs text-success"></i></span> <span
                                                class="notification-title">Application Configured</span> <span
                                                class="notification-ago ">30 min ago</span></div>
                                    <p class="mrgn-all-none">Your setting is updated on server Sav3060</p>

                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li><a class="text-center" href="javascript:;"> See all notifications <i
                                            class="fa fa-angle-right mrgn-l-xs"></i> </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-envelope-o"></i><span class="badge badge-danger">5</span></a>
                        <ul class="dropdown-menu dropdown-custom">
                            <li><strong class="drop-title">You have 5 new messages</strong></li>
                            <li>
                                <a href="javascript:;">
                                    <div class="user-thumb pull-left"><img class="img-responsive img-circle"
                                                                           src="{{asset('public/copy_assets/')}}/img/register-user-2.jpg"
                                                                           alt="User-image" width="64" height="64">
                                        <span class="profile-status online pull-right"></span></div>
                                    <div class="user-content pull-left">
                                        <h6 class="mrgn-all-none">Marya Kale</h6>

                                        <p class="mrgn-b-xs">Just see the my admin!</p> <span>9:30 AM</span> <span
                                                class="notification-ago">30 min ago</span></div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="user-thumb pull-left"><img class="img-responsive img-circle"
                                                                           src="{{asset('public/copy_assets/')}}/img/histroy-user-1.png"
                                                                           alt="User-image" width="64" height="64">
                                        <span class="profile-status online pull-right"></span></div>
                                    <div class="user-content pull-left">
                                        <h6 class="mrgn-all-none">Jim Gray</h6>

                                        <p class="mrgn-b-xs">Just see the my admin!</p> <span>9:30 AM</span> <span
                                                class="notification-ago ">10 min ago</span></div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="user-thumb pull-left"><img class="img-responsive img-circle"
                                                                           src="{{asset('public/copy_assets/')}}/img/register-user-2.jpg"
                                                                           alt="User-image" width="64" height="64">
                                        <span class="profile-status online pull-right"></span></div>
                                    <div class="user-content pull-left">
                                        <h6 class="mrgn-all-none">Marya Kale</h6>

                                        <p class="mrgn-b-xs">Just see the my admin!</p> <span>9:30 AM</span> <span
                                                class="notification-ago ">20 min ago</span></div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <div class="user-thumb pull-left"><img class="img-responsive img-circle"
                                                                           src="{{asset('public/copy_assets/')}}/img/histroy-user-1.png"
                                                                           alt="User-image" width="64" height="64">
                                        <span class="profile-status online pull-right"></span></div>
                                    <div class="user-content pull-left">
                                        <h6 class="mrgn-all-none">Jim Gray</h6>

                                        <p class="mrgn-b-xs">Just see the my admin!</p> <span>9:30 AM</span> <span
                                                class="notification-ago ">5 min ago</span></div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>
                            <li><a class="text-center" href="javascript:;">See all notifications<i
                                            class="fa fa-angle-right mrgn-l-xs"></i> </a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"
                                            role="button" aria-haspopup="true" aria-expanded="false">John Doe<span
                                    class="caret"></span><img class="img-responsive display-ib mrgn-l-sm img-circle"
                                                              src="{{asset('public/copy_assets/')}}/img/user-1.jpg" width="64" height="64"
                                                              alt="User-image"></a>
                        <ul class="dropdown-menu">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i> My Profile</a></li>
                            <li><a href="users-list.html"><i class="fa fa-money"></i> My Contact</a></li>
                            <li><a href="email.html" class="pos-relative"><i class="fa fa-inbox"></i> My Inbox <span
                                            class="badge badge-danger pull-right profile-badge">2</span></a></li>
                            <li><a href="user-profile.html" class="pos-relative"><i class="fa fa-tasks"></i> My task
                                    <span class="badge badge-success pull-right profile-badge">5</span></a></li>
                            <li><a href="user-settings.html"><i class="fa fa-cog"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>