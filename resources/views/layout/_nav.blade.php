<nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent"  color-on-scroll="50" id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/svg/Full Logo.svg') }}" alt="" style="width: 100px; height: 100%;" >
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav navbar-center ml-auto mr-auto">
                <li class="d-lg-none m-auto">
                    <img src="./assets/img/faces/marc.jpg" alt="Circle Image" class="rounded-circle" style="width: 150px; padding: 15px;">
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
                <li class="nav-item">
                    <a href="{{ url('dev-feed') }}" class="nav-link">
                        Feed
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-none d-lg-flex">

                {{--{{ $slot ?? '' }}--}}
                <li class="nav-item">
                    <a href="#facebook" class="nav-link">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#github" class="nav-link">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
