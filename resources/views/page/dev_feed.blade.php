@extends('layout.master')

@section('styles')
    <link href="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet"/>
@endsection

@section('content')

    @component('layout._nav')
        <li class="dropdown nav-item nav-dev-feed-list">
            <a href="#pablo" class="nav-link" data-toggle="dropdown">
                <i class="material-icons">rss_feed</i>
                <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-prevent-close p-0">
                <a class="btn btn-primary btn-link float-right"><i class="material-icons">sd_storage</i></a>
                <h6 class="dropdown-header">Dev Feed Resources</h6>
                <div class="dropdown-divider mb-0"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div class="has-default">
                                <input type="text" class="form-control form-control-default p-3"
                                       placeholder="Filter Resources">
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

    @include('layout._page_header',[
        'header' => 'Dev Feed',
        'image'  => url('assets/img/examples/card-project4.jpg'),
    ])

    <div class="main main-raised">

        <!--         cards -->
        <div id="cards" class="cd-section">
            <div class="section section-dark border-radius-5">
                <div class="cards">
                    <div class="container">
                        <div class="row">
                            @php($feedPosts = collect($feedPosts))
                            <div class="col-lg-4 col-md-12">
                                @for($i = 0; $i < $feedPosts->count(); $i = $i + 3)
                                    @include('page.partial.dev_feed_card',[
                                        'index' => $i,
                                        'feedPost' => $feedPosts->get($i)
                                    ])
                                @endfor
                            </div>
                            <div class="col-lg-4 col-md-12">
                                @for($i = 1; $i < $feedPosts->count(); $i = $i + 3)
                                    @include('page.partial.dev_feed_card',[
                                        'index' => $i,
                                        'feedPost' => $feedPosts->get($i)
                                    ])
                                @endfor
                            </div>
                            <div class="col-lg-4 col-md-12">
                                @for($i = 2; $i < $feedPosts->count(); $i = $i + 3)
                                    @include('page.partial.dev_feed_card',[
                                        'index' => $i,
                                        'feedPost' => $feedPosts->get($i)
                                    ])
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--         end cards         -->
    </div>

    @include('layout._page_footer')

@endsection

@section('scripts')
    <!-- Plugin for Owl -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>
@endsection