@extends('master')

@section('content')

    @component('_nav')
        <li class="dropdown nav-item nav-dev-feed-list">
            <a href="#pablo" class="nav-link" data-toggle="dropdown">
                <i class="material-icons">rss_feed</i>
                <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-prevent-close p-0">
                <a class="btn btn-primary btn-link float-right"><i class="material-icons" >sd_storage</i></a>
                <h6 class="dropdown-header">Dev Feed Resources</h6>
                <div class="dropdown-divider mb-0"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div class="has-default">
                                <input type="text" class="form-control form-control-default p-3" placeholder="Filter Resources">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dev-feed-list nicescroll p-3">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($websites as $index => $website)
                                <style>
                                    .toggle-{{ $index }}:after {
                                        background: url('{{ $website->image }}');
                                        background-size: cover;
                                        border: 0;
                                        border-radius: 50% !important;
                                        border-color: transparent !important;
                                    }
                                </style>
                                <div class="col-lg-12 p-1">
                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox" checked="">
                                            <span class="toggle toggle-{{ $index }}"></span>
                                            {{ $website->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endcomponent

    @include('_page_header',[
        'header' => 'Dev Feed',
        'image'  => url('assets/img/examples/card-project4.jpg'),
    ])

    <div class="main main-raised">

        <!--         cards -->
        <div id="cards" class="cd-section">
            <div class="section section-dark border-radius-5">
                <!--     *********    BLOG CARDS     *********      -->
                {{--<div class="cards">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card card-blog">
                                    <div class="card-header card-header-image">
                                        <a href="#pablo">
                                            <img class="img" src="./assets/img/examples/blog8.jpg">
                                            <div class="card-title">
                                                This Summer Will be Awesome
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-category text-info">Fashion</h6>
                                        <p class="card-description">
                                            Don&apos;t be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens&#x2019; bed design but the back is...
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-info">
                                    <div class="card-body">
                                        <h5 class="card-category card-category-social">
                                            <i class="fa fa-twitter"></i> Twitter
                                        </h5>
                                        <h4 class="card-title">
                                            <a href="#pablo">&quot;You Don&apos;t Have to Sacrifice Joy to Build a Fabulous Business and Life&quot;</a>
                                        </h4>
                                    </div>
                                    <div class="card-footer">
                                        <div class="author">
                                            <a href="#pablo">
                                                <img src="./assets/img/faces/marc.jpg" alt="..." class="avatar img-raised">
                                                <span>Tania Andrew</span>
                                            </a>
                                        </div>
                                        <div class="stats ml-auto">
                                            <i class="material-icons">favorite</i> 2.4K &#xB7;
                                            <i class="material-icons">share</i> 45
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body ">
                                        <h6 class="card-category text-danger">
                                            <i class="material-icons">trending_up</i> Trending
                                        </h6>
                                        <h4 class="card-title">
                                            <a href="#pablo">To Grow Your Business Start Focusing on Your Employees</a>
                                        </h4>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="author">
                                            <a href="#pablo">
                                                <img src="./assets/img/faces/christian.jpg" alt="..." class="avatar img-raised">
                                                <span>Lord Alex</span>
                                            </a>
                                        </div>
                                        <div class="stats ml-auto">
                                            <i class="material-icons">favorite</i> 342 &#xB7;
                                            <i class="material-icons">chat_bubble</i> 45
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-blog">
                                    <div class="card-header card-header-image">
                                        <a href="#pablo">
                                            <img class="img" src="./assets/img/examples/card-blog2.jpg">
                                        </a>
                                    </div>
                                    <div class="card-body ">
                                        <h6 class="card-category text-success">Legal</h6>
                                        <h4 class="card-title">
                                            <a href="#pablo">5 Common Legal Mistakes That Can Trip-Up Your Startup</a>
                                        </h4>
                                        <p class="card-description">
                                            Don&apos;t be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens&#x2019; bed design but the back is...
                                        </p>
                                    </div>
                                    <div class="card-footer ">
                                        <div class="author">
                                            <a href="#pablo">
                                                <img src="./assets/img/faces/marc.jpg" alt="..." class="avatar img-raised">
                                                <span>Mike John</span>
                                            </a>
                                        </div>
                                        <div class="stats ml-auto">
                                            <i class="material-icons">schedule</i> 5 min read
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="card card-blog">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="./assets/img/examples/blog8.jpg">
                                                </a>
                                            </div>
                                            <div class="card-body ">
                                                <h6 class="card-category text-danger">
                                                    <i class="material-icons">trending_up</i> Trending
                                                </h6>
                                                <h4 class="card-title">
                                                    <a href="#pablo">To Grow Your Business Start Focusing on Your Employees</a>
                                                </h4>
                                            </div>
                                            <div class="card-footer ">
                                                <div class="author">
                                                    <a href="#pablo">
                                                        <img src="./assets/img/faces/marc.jpg" alt="..." class="avatar img-raised">
                                                        <span>Mike John</span>
                                                    </a>
                                                </div>
                                                <div class="stats ml-auto">
                                                    <i class="material-icons">schedule</i> 5 min read
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="card bg-success">
                                            <div class="card-body ">
                                                <h5 class="card-category card-category-social">
                                                    <i class="fa fa-newspaper-o"></i> TechCrunch
                                                </h5>
                                                <h4 class="card-title">
                                                    <a href="#pablo">&quot;Focus on Your Employees&quot;</a>
                                                </h4>
                                                <p class="card-description">
                                                    Don&apos;t be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens&#x2019; bed design but the back is...
                                                </p>
                                                <div class="card-stats justify-content-center">
                                                    <a href="#pablo" class="btn btn-white btn-round">Read Article</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}

                <div class="cards">
                  <div class="container">
                      <div class="row">
                          @foreach($feedPosts as $feedPost)
                              <div class="col-lg-4 col-md-6">
                                  <div class="card card-blog">
                                      <div class="card-header card-header-image">
                                          <a href="{{ $feedPost->url }}" target="_blank">
                                              <img class="img" src="{{ $feedPost->image }}">
                                          </a>
                                      </div>
                                      <div class="card-body">
                                          <h6 class="card-category text-danger">
                                              <i class="material-icons">trending_up</i> Trending
                                          </h6>
                                          <h4 class="card-title">
                                              <a href="{{ $feedPost->url }}" target="_blank">{{ $feedPost->title }}</a>
                                          </h4>
                                      </div>
                                      <div class="card-footer">
                                          <div class="author">
                                              <a href="#pablo">
                                                  <img src="{{ $feedPost->publication->image }}" title="{{ $feedPost->publication->name }}" alt="{{ $feedPost->publication->name }}" class="avatar img-raised">
                                                  <span>{{ $feedPost->publication->name }}</span>
                                              </a>
                                          </div>
                                          <div class="stats ml-auto">
                                              {{--<a href="#" class="card-link ml-1">
                                                  <i class="material-icons" style="font-size: 20px;">comment</i>
                                              </a>--}}
                                              <a href="#" class="card-link ml-1" title="2.4k">
                                                  <i class="material-icons" style="font-size: 20px;">favorite_border</i>
                                              </a>
                                              <a href="#" class="card-link ml-1" title="45">
                                                  <i class="material-icons" style="font-size: 20px;">share</i>
                                              </a>
                                              <a href="#" class="card-link ml-1">
                                                  <i class="material-icons" style="font-size: 20px;">bookmark_border</i>
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>

                <!--     *********    END BLOG CARDS      *********      -->
            </div>
        </div>
        <!--         end cards         -->
    </div>

    @include('_page_footer')

@endsection