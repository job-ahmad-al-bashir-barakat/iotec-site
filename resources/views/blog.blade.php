@extends('master')

@section('content')

    <div class="posts">
        @include('_nav')
        @include('_page_header',[
            'header' => 'Blog',
            'image'  => url('assets/img/examples/card-project4.jpg'),
        ])

        <div class="main main-raised">

            <div class="section">
                <div id="blogs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">
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
                                        <div class="card card-plain card-blog">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card-header card-header-image">
                                                        <img class="img img-raised" src="./assets/img/examples/card-blog4.jpg">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="card-category text-info">Enterprise</h6>
                                                    <h3 class="card-title">
                                                        <a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and…
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
                                                <div class="col-md-4">
                                                    <div class="card-header card-header-image">
                                                        <a href="#pablo">
                                                            <img class="img img-raised" src="./assets/img/office2.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="card-category text-danger">
                                                        <i class="material-icons">trending_up</i> Trending
                                                    </h6>
                                                    <h3 class="card-title">
                                                        <a href="#pablo">6 insights into the French Fashion landscape</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and…
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
                                                <div class="col-md-4">
                                                    <div class="card-header card-header-image">
                                                        <a href="#pablo">
                                                            <img class="img img-raised" src="./assets/img/examples/blog8.jpg">
                                                        </a>
                                                        <div class="colored-shadow" style="background-image: url('./assets/img/examples/blog8.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h6 class="card-category text-success">
                                                        Startups
                                                    </h6>
                                                    <h3 class="card-title">
                                                        <a href="#pablo">Lyft launching cross-platform service this week</a>
                                                    </h3>
                                                    <p class="card-description">
                                                        Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and…
                                                        <a href="#pablo"> Read More </a>
                                                    </p>
                                                    <p class="author">
                                                        by
                                                        <a href="#pablo">
                                                            <b>Megan Rose</b>
                                                        </a>, 2 days ago
                                                    </p>
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

        </div>

        @include('_page_footer')
    </div>

@endsection