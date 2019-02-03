@extends('master')

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
            <!--     *********     HEADER 1      *********      -->
            <div class="header-1">
                @include('_nav')
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
            <!--     *********    END HEADER 1      *********      -->
        </div>
        <div class="cd-section" id="projects">
            <!--     *********    PROJECTS 1     *********      -->
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
            <!--     *********    END PROJECTS 1      *********      -->
        </div>
        <div class="cd-section" id="teams">
            <!--     *********    TEAM 5     *********      -->
            <div class="team-5 section-image" style="background-image: url('{{ asset('assets/img/bg7.jpg') }}')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">The Executive Team</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img" src="{{ asset('assets/img/faces/card-profile1-square.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Ahmad Al Bashir Barakat</h4>
                                            <h6 class="card-category text-muted">Full Stack Developer - Founder</h6>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link {{--btn-white--}}"><i class="fa fa-github"></i></a>
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
                                            <a href="#pablo">
                                                <img class="img" src="{{  asset('assets/img/faces/card-profile1-square.jpg') }}" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Safi Beik Karbouj</h4>
                                            <h6 class="card-category text-muted">ASP.Net & IT Network - Founder</h6>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link{{-- btn-white--}}"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link{{-- btn-white--}}"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link{{-- btn-white--}}"><i class="fa fa-github"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END TEAM 5      *********      -->
        </div>
        <div class="cd-section" id="blogs">
            <!--     *********     BLOGS 1      *********      -->
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
            <!--     *********    END BLOGS 1      *********      -->
        </div>
        <div class="cd-section" id="testimonials">
            <!--     *********    TESTIMONIALS 2     *********      -->
            <div class="testimonials-2 section-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <a href="#pablo">
                                                    <img class="img" src="{{ asset('assets/img/faces/kendall.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future. My brother Chance!!!
                                                    <br>Thank you for letting me work on this masterpiece. One of my favorite people."
                                                </h5>
                                                <h4 class="card-title">Kendall Thompson</h4>
                                                <h6 class="card-category text-muted">CEO @ Marketing Digital Ltd.</h6>
                                                <div class="footer">
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <a href="#pablo">
                                                    <img class="img" src="{{ asset('assets/img/faces/christian.jpg') }}">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">"Thank you Anna for the invite thank you to the whole Vogue team Called I Miss the Old Kanye At the God's last game Chop up the soul Kanye. I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team."
                                                </h5>
                                                <h4 class="card-title">Christian Louboutin</h4>
                                                <h6 class="card-category text-muted">Designer @ Louboutin &amp; Co.</h6>
                                                <div class="footer">
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                    <i class="material-icons text-warning">star</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicatorss" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicatorss" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END TESTIMONIALS 2      *********      -->
        </div>
        <div class="cd-section" id="partners">
            <!--     *********    TESTIMONIALS 2     *********      -->
            <div class="testimonials-2 section-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ asset('assets/img/partners/1.png') }}" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/partners/2.png') }}" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/partners/3.png') }}" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/partners/4.png') }}" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/partners/5.png') }}" alt=""/>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/img/partners/6.png') }}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END TESTIMONIALS 2      *********      -->
        </div>
        <div class="cd-section" id="contactus">
            <!--     *********    CONTACT US 1     *********      -->
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
            <!--     *********    END CONTACT US 1      *********      -->
        </div>
    </div>
    <footer class="footer footer-white footer-big">
        <div class="container">
            <a class="navbar-brand m-0" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo/logo-white.png') }}" style="width:70px; opacity: 0.1;">
            </a>
            <ul class="social-buttons">
                <li>
                    <a href="#twitter" class="btn btn-just-icon btn-link">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#facebook" class="btn btn-just-icon btn-link">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#github" class="btn btn-just-icon btn-link">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
            </ul>
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
                    <a href="{{ url('terms-and-agreements') }}">
                        Terms & Agreements
                    </a>
                </li>
            </ul>
            @include('_copyright',['made' => true])
        </div>
    </footer>
    @include('_vertical_nav')

@endsection

@section('scripts')
    <!-- Plugin for Owl -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>
@endsection