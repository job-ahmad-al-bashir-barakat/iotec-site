@extends('master')

@section('content')

    <div class="posts">
        @include('_nav')
        @include('_page_header',[
            'header' => 'Our Projects',
            'image'  => url('assets/img/examples/card-project4.jpg'),
        ])

        <div class="main main-raised">
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <ul class="nav nav-pills nav-pills-primary">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pill1" data-toggle="tab">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill2" data-toggle="tab">World</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Arts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Tech</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pill3" data-toggle="tab">Business</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="pill1"></div>
                                <div class="tab-pane" id="pill2"></div>
                                <div class="tab-pane" id="pill3"></div>
                                <div class="tab-pane" id="pill4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-raised card-background" style="background-image: url('../assets/img/examples/office2.jpg')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Worlds</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The Best Productivity Apps on Market</h3>
                                    </a>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-danger btn-round">
                                        <i class="material-icons">format_align_left</i> Read Article
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-raised card-background" style="background-image: url('../assets/img/examples/blog8.jpg')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Business</h6>
                                    <h3 class="card-title">Working on Wallstreet is Not So Easy</h3>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-primary btn-round">
                                        <i class="material-icons">format_align_left</i> Read Article
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-raised card-background" style="background-image: url('../assets/img/examples/card-project6.jpg')">
                                <div class="card-body">
                                    <h6 class="card-category text-info">Marketing</h6>
                                    <h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
                                    <p class="card-description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
                                    <a href="#pablo" class="btn btn-warning btn-round">
                                        <i class="material-icons">subject</i> Read Case Study
                                    </a>
                                    <a href="#pablo" class="btn btn-white btn-just-icon btn-link" title="" rel="tooltip" data-original-title="Save to Pocket">
                                        <i class="fa fa-get-pocket"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-5 section-image" style="background-image: url('../assets/img/bg10.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-header card-header-image">
                                            <a href="#pablo">
                                                <img class="img" src="../assets/img/faces/card-profile1-square.jpg">
                                            </a>
                                            <div class="ripple-container"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Alec Thompson</h4>
                                            <h6 class="card-category text-muted">Author of the Month</h6>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-google"></i>
                                            </a>
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
                                                <img class="img" src="../assets/img/faces/card-profile4-square.jpg">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Kendall Andrew</h4>
                                            <h6 class="card-category text-muted">Author of the Week</h6>
                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-dribbble"></i>
                                            </a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subscribe-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="title">Get Tips &amp; Tricks every Week!</h3>
                            <p class="description">
                                Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-plain card-form-horizontal">
                                <div class="card-body">
                                    <form method="" action="">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="material-icons">mail</i>
                              </span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Your Email...">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('_page_footer')
    </div>

@endsection