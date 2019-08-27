@php($isHash = $isHash ?? false)

<nav class="navbar navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent"  color-on-scroll="50" id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/svg/Full Logo.svg') }}" alt="" style="width: 100px; height: 100%;">
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
                <li class="nav-item">
                    <a href="{{ $isHash ? "#home" : url('/') }}" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ $isHash ? "#teams" : url('/#teams') }}" class="nav-link">
                        Our Team
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ $isHash ? "#projects" : url('/#projects') }}" class="nav-link">
                        Our Projects
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('blog') }}" class="nav-link">
                        Blog
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('dev-feed') }}" class="nav-link">
                        Dev Feed
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav d-none d-lg-flex">
                <li class="nav-item">
                    <a href="https://www.facebook.com/iotec.me" class="nav-link">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.linkedin.com/company/iotec-me/" class="nav-link">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                {{ $slot ?? '' }}
            </ul>
        </div>
    </div>
</nav>
