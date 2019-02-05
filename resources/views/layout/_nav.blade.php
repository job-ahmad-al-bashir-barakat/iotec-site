<nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent"  color-on-scroll="50" id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo/logo-white.png') }}" style="margin-right: 3rem;">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation-example4">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation-example4">
            <ul class="navbar-nav navbar-center ml-auto mr-auto">
                <li class="d-lg-none m-auto">
                    <img src="./assets/img/faces/marc.jpg" alt="Circle Image" class="rounded-circle" style="width: 150px; padding: 15px;">
                </li>
                <li class="dropdown nav-item d-lg-none">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        User Menu
                    </a>
                    <div class="dropdown-menu dropdown-with-icons nicescroll">

                        <a href="{{ url('/') }}" class="dropdown-item">
                            <i class="material-icons">language</i>
                            English
                        </a>

                        <a href="{{ url('login') }}" class="dropdown-item">
                            <i class="material-icons">exit_to_app</i>
                            Login
                        </a>

                        <a href="{{ url('me') }}" class="dropdown-item">
                            <i class="material-icons">face</i>
                            Me
                        </a>

                        <a href="{{ url('profile') }}" class="dropdown-item">
                            <i class="material-icons">account_circle</i>
                            Profile
                        </a>

                        <a href="{{ url('notifications') }}" class="dropdown-item">
                            <i class="material-icons">notifications</i>
                            <span class="pr-2">Notifications</span>
                            <span class="badge badge-pill badge-primary">4</span>
                        </a>

                        <a href="{{ url('messages') }}" class="dropdown-item">
                            <i class="material-icons">chat</i>
                            <span class="pr-2">Messages</span>
                            <span class="badge badge-pill badge-primary">4</span>
                        </a>

                        <a href="{{ url('bookmark') }}" class="dropdown-item">
                            <i class="material-icons">bookmark</i>
                            bookmark
                        </a>

                        <a href="{{ url('dev-feed') }}" class="dropdown-item">
                            <i class="material-icons">rss_feed</i>
                            Dev Feed
                        </a>

                        {{--<a href="{{ url('settings') }}" class="dropdown-item">
                            <i class="material-icons">settings</i>
                            Settings
                        </a>--}}

                        <a href="{{ url('control') }}" class="dropdown-item">
                            <i class="material-icons">settings_ethernet</i>
                            Control
                        </a>


                        <a href="{{ url('sign_out') }}" class="dropdown-item">
                            <i class="material-icons">power_settings_new</i>
                            Sign Out
                        </a>

                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('projects')  }}" class="nav-link">
                        Our Projects
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('team') }}" class="nav-link">
                        Our Team
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('blog') }}" class="nav-link">
                        Blog
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-none d-lg-flex">

                {{ $slot ?? '' }}
                <li class="dropdown nav-item nav-notifications">
                    <b class="badge badge-pill badge-dark nav-notify-counter">+9</b>
                    <a href="#pablo" class="nav-link" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-prevent-close p-0">
                        <a class="btn btn-primary btn-link float-right">Show All <i class="material-icons">notifications_active</i></a>
                        <h6 class="dropdown-header">Notifications</h6>
                        <div class="dropdown-divider mb-0"></div>

                        <div class="notifications nicescroll">
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a href="#pablo" class="dropdown-item m-2">
                                <div class="media">
                                    <img src="./assets/img/faces/marc.jpg" class="mr-3 rounded-circle img-fluid" alt="Circle Image" style="width: 40px;">
                                    <div class="media-body">
                                        <b>Jone do</b>
                                        <span>Lorem ipsum dolor sit amet, dsadsadsa</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                        </div>

                        <div class="dropdown-divider m-0"></div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-link btn-block"><i class="material-icons">notifications_active</i> Show All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown nav-item">
                    <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="profile-photo-small">
                            <img src="./assets/img/faces/marc.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">User Menu</h6>

                        <a href="{{ url('/') }}" class="dropdown-item">
                            <i class="material-icons pr-2">language</i>
                            English
                        </a>

                        <a href="{{ url('login') }}" class="dropdown-item">
                            <i class="material-icons pr-2">exit_to_app</i>
                            Login
                        </a>

                        <a href="{{ url('me') }}" class="dropdown-item">
                            <i class="material-icons pr-2">face</i>
                            Me
                        </a>

                        <a href="{{ url('profile') }}" class="dropdown-item">
                            <i class="material-icons pr-2">account_circle</i>
                            Profile
                        </a>

                        <a href="{{ url('notifications') }}" class="dropdown-item">
                            <i class="material-icons pr-2">notifications</i>
                            <span class="pr-2">Notifications</span>
                            <span class="badge badge-pill badge-primary">4</span>
                        </a>

                        <a href="{{ url('messages') }}" class="dropdown-item">
                            <i class="material-icons pr-2">chat</i>
                            <span class="pr-2">Messages</span>
                            <span class="badge badge-pill badge-primary">4</span>
                        </a>

                        <a href="{{ url('bookmark') }}" class="dropdown-item">
                            <i class="material-icons">bookmark</i>
                            bookmark
                        </a>

                        <a href="{{ url('dev-feed') }}" class="dropdown-item">
                            <i class="material-icons pr-2">rss_feed</i>
                            Dev Feed
                        </a>

                        {{--<a href="{{ url('settings') }}" class="dropdown-item">
                            <i class="material-icons pr-2">settings</i>
                            Settings
                        </a>--}}

                        <a href="{{ url('control') }}" class="dropdown-item">
                            <i class="material-icons pr-2">settings_ethernet</i>
                            Control
                        </a>

                        <a href="{{ url('sign_out') }}" class="dropdown-item">
                            <i class="material-icons pr-2">power_settings_new</i>
                            Sign Out
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
