@extends('layout.master')

@section('styles')
    <link href="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <style>
        .owl-carousel .item img {
            width: 60%;
        }
        .blogs h5.description {
            margin-bottom: 70px;
        }

        .projects-1 .nav {
            margin-top: 70px;
            margin-bottom: 30px;
        }
        .projects-1 .card-body {
            padding: 60px;
        }
        .main {
            background: #fdfdfd;
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
                                            <h1 class="title">Welcome Back
                                            </h1>
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
                                            <h1 class="title">UI/UX Graphic Design</h1>
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
                                            <h1 class="title">3D / Motion Graphics Design</h1>
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

        <div class="cd-section" id="features">
            <div class="container">
                <!--     *********     FEATURES 3      *********      -->
                <div class="features-3">
                    <div class="row" style="margin-bottom: 70px;">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Our Services</h2>
                            <h5 class="description">list of our services that we can gladly provide to users around the clock, so take a quick look to get to know us and what we able to do.</h5>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 pl-5 pr-5">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">extension</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Hundreds of Components</h4>
                                    <p>The moment you use Material Kit, you know you&#x2019;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">child_friendly</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Easy to Use</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">watch_later</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Fast Prototyping</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-5 pr-5">
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">extension</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Hundreds of Components</h4>
                                    <p>The moment you use Material Kit, you know you&#x2019;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">child_friendly</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Easy to Use</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">watch_later</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Fast Prototyping</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--     *********    END FEATURES 3      *********      -->
            </div>
        </div>

        <div class="cd-section section-image" style="background-image: url('{{{ asset('assets/img/bg7.jpg') }}}')" id="teams">
            <div class="team-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Our Team</h2>
                            <h5 class="description">A professional team of experts from all over the world</h5>
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
                                            <a href="https://www.linkedin.com/in/ahmad-al-bashir-barakat" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-linkedin"></i></a>
                                            <a href="https://github.com/job-ahmad-al-bashir-barakat" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-github"></i></a>
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
                                                Network Engineer, .Net Developer for Software Solutions and Mobile Applications.
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

        <div class="cd-section" id="projects">
            <!--     *********    PROJECTS 1     *********      -->
            <div class="projects-1" id="projects-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto text-center">
                            <h2 class="title">Some of Our Awesome Products</h2>
                            <ul class="nav nav-pills nav-pills-rose">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#development" data-toggle="tab">Development</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#web-design" data-toggle="tab">Web Design</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="development">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
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
                                            <div class="card">
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

                                    </div>
                                </div>
                                <div class="tab-pane" id="web-design">
                                    <div class="row">
                                        <div class="col-md-8 m-auto">
                                            <div class="card">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END PROJECTS 1      *********      -->
        </div>

        <div class="cd-section section-dark" id="blogs" >
            <div class="blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Blog Feeds</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-header card-header-image">
                                    <a href="#pablo">
                                        <img src="./assets/img/examples/color1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-warning">Dynamic Shadows</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">The image from this card is getting a yellow shadow</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-header card-header-image">
                                    <a href="#pablo">
                                        <img src="./assets/img/examples/color2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-rose">Dynamic Shadows</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">The image from this card is getting a pink shadow</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-header card-header-image">
                                    <a href="#pablo">
                                        <img src="./assets/img/examples/color3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="card-body ">
                                    <h6 class="card-category text-info">Dynamic Shadows</h6>
                                    <h4 class="card-title">
                                        <a href="#pablo">The image from this card is getting a blue shadow</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cd-section" id="partners">
            <div class="clients-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ asset('assets/svg/G1.svg') }}" alt="" style="filter:contrast(0); width:180px; height: 100%;" >
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/svg/FTC.svg') }}" alt="" style="filter:contrast(0); width:180px; height: 100%;" >
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
                                    <p>
                                        <br> Al-Jamileih - Aleppo,
                                        <br> Syria
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="material-icons">phone</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Give us a ring</h4>
                                    <p> Safi Beik Karbouj
                                        <br> (+963) 933 080 467
                                        <br> Saturday - Thursday, 8:00AM - 10:00PM
                                        <br>
                                        <br>
                                        Ahmad Al-Bashir Barakat
                                        <br> (+20) 127 719 6956
                                        <br> Saturday - Thursday, 8:00AM - 10:00PM
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
