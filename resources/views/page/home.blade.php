@extends('layout.master')

@section('styles')
    <link href="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <style>
        .owl-carousel .item img {
            width: 60%;
        }
    </style>
@endsection

@section('content')

    <div class="main">

        <div class="cd-section" id="home">
            <div class="header-1">
                @include('layout._nav')
                <!-- Carousel Card -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/14.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Welcome</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/3.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Programming</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/9.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Android / IOS Mobile app</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/15.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Web Design</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/1.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Graphic Design</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/16.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">3D Design</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header header-filter" style="background-image: url('{{ asset('assets/img/bg/18.jpg') }}');">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ml-auto mr-auto text-center">
                                            <h1 class="title">Networking</h1>
                                            <h4>Dolce &amp; Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
                                            <br>
                                            <div class="buttons">
                                                <a href="#contactus" class="btn btn-danger btn-lg">
                                                    <i class="material-icons">comment</i> Get in Touch
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <i class="material-icons">keyboard_arrow_left</i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="material-icons">keyboard_arrow_right</i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- End Carousel Card -->
            </div>
        </div>

        <div class="cd-section" id="projects">
            <div class="projects-1" id="projects-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto text-center">
                            <h2 class="title">Some of Our Awesome Projects</h2>
                            <ul class="nav nav-pills nav-pills-rose">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pill1" data-toggle="tab">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill2" data-toggle="tab">Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Web Design</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="pill1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card card-raised card-background" style="background-image: url('{{ asset('assets/img/examples/office2.jpg') }}')">
                                                <div class="card-body">
                                                    <h6 class="card-category text-info">Productivity</h6>
                                                    <a href="#pablo">
                                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                                    </a>
                                                    <p class="card-description">
                                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                                    </p>
                                                    <a href="#pablo" class="btn btn-danger btn-round">
                                                        <i class="material-icons">content_copy</i> View App
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-raised card-background" style="background-image: url('{{ asset('assets/img/examples/card-blog3.jpg') }}')">
                                                <div class="card-body">
                                                    <h6 class="card-category text-info">Design</h6>
                                                    <h3 class="card-title">The Sculpture Where Details Matter</h3>
                                                    <p class="card-description">
                                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                                    </p>
                                                    <a href="#pablo" class="btn btn-info btn-round">
                                                        <i class="material-icons">build</i> View Project
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pill2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-raised card-background" style="background-image: url('{{ asset('assets/img/examples/card-project6.jpg') }}')">
                                                <div class="card-body">
                                                    <h6 class="card-category text-info">Marketing</h6>
                                                    <h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
                                                    <p class="card-description">
                                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                                    </p>
                                                    <a href="#pablo" class="btn btn-warning btn-round">
                                                        <i class="material-icons">subject</i> Case Study
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="pill3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card card-raised card-background" style="background-image: url('{{ asset('assets/img/examples/office2.jpg') }}')">
                                                <div class="card-body">
                                                    <h6 class="card-category text-info">Productivity</h6>
                                                    <a href="#pablo">
                                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                                    </a>
                                                    <p class="card-description">
                                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                                    </p>
                                                    <a href="#pablo" class="btn btn-danger btn-round">
                                                        <i class="material-icons">content_copy</i> View App
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card card-raised card-background" style="background-image: url('{{ asset('assets/img/examples/card-blog3.jpg') }}')">
                                                <div class="card-body">
                                                    <h6 class="card-category text-info">Design</h6>
                                                    <h3 class="card-title">The Sculpture Where Details Matter</h3>
                                                    <p class="card-description">
                                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                                    </p>
                                                    <a href="#pablo" class="btn btn-info btn-round">
                                                        <i class="material-icons">build</i> View Project
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cd-section" id="teams">
            <div class="team-5 section-image" style="background-image: url('{{ asset('assets/img/bg7.jpg') }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Our Team</h2>
                            <h5 class="description">Talent wins games, but teamwork and intelligence win championships</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#ABBarakat">
                                                <img class="img" src="{{ asset('assets/img/faces/card-profile1-ahmad.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Ahmad Al Bashir Barakat</h4>
                                            <h6 class="card-category text-muted">Full Stack Developer - Founder</h6>
                                            <p class="card-description">
                                                Software Engineer, dedicated to Full Stack Web Development.                                             </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="https://www.linkedin.com/in/ahmad-al-bashir-barakat/" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-linkedin"></i></a>
                                            <a href="https://github.com/AhmedAlbasheerBarakat/" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#safibeik">
                                                <img class="img" src="{{  asset('assets/img/faces/card-profile1-safi.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Safi Beik Karbouj</h4>
                                            <h6 class="card-category text-muted">ASP.Net & IT Network Engineer - Founder</h6>
                                            <p class="card-description">
                                                - Professional Engineering of information technology networks on multiple  levels (Connectivity, Quality of service, Security, Agility and Administration)
                                               <br/> - Creative development of software solutions and mobile applications under ASP.Net Core Platform & Android.
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="https://www.linkedin.com/in/safibeik/" class="btn btn-just-icon btn-link{{-- btn-white--}}"><i class="fa fa-linkedin"></i></a>
                                            <a href="https://github.com/SafiBeik/" class="btn btn-just-icon btn-link{{-- btn-white--}}"><i class="fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cd-section" id="blogs">
            <div class="blogs-1" id="blogs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title">Latest Blogposts</h2>
                            <br>
                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablito">
                                                <img class="img" src="{{ asset('assets/img/examples/card-blog4.jpg') }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="card-category text-info">Enterprise</h6>
                                        <h3 class="card-title">
                                            <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                        </h3>
                                        <p class="card-description">
                                            Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and…
                                            <a href="#pablo"> Read More </a>
                                        </p>
                                        <p class="author">
                                            by
                                            <a href="#pablo">
                                                <b>Mike Butcher</b>
                                            </a>, 2 days ago
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain card-blog">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h6 class="card-category text-danger">
                                            <i class="material-icons">trending_up</i> Trending
                                        </h6>
                                        <h3 class="card-title">
                                            <a href="#pablo">6 insights into the French Fashion landscape</a>
                                        </h3>
                                        <p class="card-description">
                                            Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and…
                                            <a href="#pablo"> Read More </a>
                                        </p>
                                        <p class="author">
                                            by
                                            <a href="#pablo">
                                                <b>Mike Butcher</b>
                                            </a>, 2 days ago
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <img class="img img-raised" src="{{ asset('assets/img/office2.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cd-section" id="partners">
            <div class="clients-1 section-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ asset('assets/svg/G1.svg') }}" alt="" style="width:180px; height: 100%;" >
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/svg/FTC.svg') }}" alt="" style="width:180px; height: 100%;" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cd-section" id="contactus">
            <div class="contactus-1 section-image" style="background-image: url('{{ asset('assets/img/examples/city.jpg') }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="title">Get in Touch</h2>
                            <h5 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h5>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">pin_drop</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Find us at the office</h4>
                                    <p> Bld Mihail Kogalniceanu, nr. 8,
                                        <br> 7652 Bucharest,
                                        <br> Romania
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">phone</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Give us a ring</h4>
                                    <p> Michael Jordan
                                        <br> +40 762 321 762
                                        <br> Mon - Fri, 8:00-22:00
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ml-auto">
                            <div class="card card-contact">
                                <form id="contact-form" method="post">
                                    <div class="card-header card-header-raised card-header-primary text-center">
                                        <h4 class="card-title">Contact Us</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="bmd-label-floating">First name</label>
                                                    <input type="text" name="name" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="bmd-label-floating">Last name</label>
                                                    <input type="text" name="name" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" name="email" class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                        <div class="form-group label-floating is-empty">
                                            <label for="exampleMessage1" class="bmd-label-floating">Your Message</label>
                                            <textarea name="message" class="form-control" id="exampleMessage1" rows="6"></textarea>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                    <div class="card-footer justify-content-between">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value=""> I'm not a robot
                                                <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-white footer-big">
        <div class="container">
            <a class="navbar-brand m-0" href="{{ url('/') }}" style="width:50px; opacity: 0.2; margin-bottom: 15px !important;">
                <img src="{{ asset('assets/svg/Logo.svg') }}" alt="" style="height: 100%;" >
            </a>
            <ul>
                <li>
                    <a href="{{ url('about-us') }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="{{ url('faq') }}">
                        FAQ
                    </a>
                </li>
                <li>
                    <a href="{{ url('terms-and-conditions') }}">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
            @include('layout._copyright',['made' => true])
        </div>
    </footer>
    @include('layout._vertical_nav')

@endsection

@section('scripts')
    <!-- Plugin for Owl -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>
@endsection
