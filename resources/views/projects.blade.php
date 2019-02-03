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
                        <div class="col-lg-12 ml-auto mr-auto ">
                            <div class="text-center">
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
                            </div>
                            <div class="tab-content tab-space">
                                <div class="tab-pane active" id="pill1">
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
                                <div class="tab-pane" id="pill2"></div>
                                <div class="tab-pane" id="pill3"></div>
                                <div class="tab-pane" id="pill4"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('_page_footer')
    </div>

@endsection