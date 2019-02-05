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
            <a href="{{ $feedPost->url }}"
               target="_blank">{{ $feedPost->title }}</a>
        </h4>
    </div>
    <div class="card-body">
        @foreach($feedPost->tags as $tag)
            <span class="badge badge-pill badge-primary">{{ $tag }}</span>
        @endforeach
    </div>
    <div class="card-footer">
        <div class="author">
            <a href="#pablo">
                <img src="{{ $feedPost->publication->image }}"
                     title="{{ $feedPost->publication->name }}"
                     alt="{{ $feedPost->publication->name }}"
                     class="avatar img-raised">
                <span class="d-inline-block text-truncate" style="max-width: 100px;" title="{{ $feedPost->publication->name }}">{{ $feedPost->publication->name }}</span>
            </a>
        </div>
        <div class="stats ml-auto">
            <a href="#feedback-{{ $index }}" class="card-link ml-1"
               data-toggle="collapse" aria-expanded="false"
               aria-controls="feedback-{{ $index }}">
                <i class="material-icons" style="font-size: 20px;">feedback</i>
            </a>
            <a href="#" class="card-link ml-1" title="2.4k">
                <i class="material-icons"
                   style="font-size: 20px;">favorite_border</i>
            </a>
            <a href="#" class="card-link ml-1" title="45">
                <i class="material-icons" style="font-size: 20px;">share</i>
            </a>
            <a href="#" class="card-link ml-1">
                <i class="material-icons"
                   style="font-size: 20px;">bookmark_border</i>
            </a>
        </div>
    </div>
    <div class="collapse" id="feedback-{{ $index }}">
        <hr class="mb-0">
        <div class="card-body p-0">
            <div class="form-group p-0 m-0">
                <div class="input-group">
                    <textarea type="text"
                              class="form-control form-control-default nicescroll p-3"
                              placeholder="Write feedback"
                              style="padding-right: 70px !important; box-shadow: 0px 2px 6px #d1d1d1;"></textarea>
                    <span class="input-group-btn position-absolute p-1" style="right: 0; z-index: 5;">
                        <button type="button" class="btn btn-link btn-sm btn-primary m-0 p-4">
                            <i class="material-icons">send</i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <hr class="mt-0">
        <div class="card-body p-2">
            <div class="owl-carousel owl-theme" data-responsive="false"
                 data-nav="true" data-dots="true" data-loop="false"
                 data-autoplay="false">
                <div class="item">
                    <div class="media">
                        <a class="float-left" href="#pablo">
                            <div class="avatar" style="width: 40px; height: 40px;">
                                <img class="media-object" alt="Tim Picture"
                                     src="./assets/img/faces/marc.jpg">
                            </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                John Camber
                                <small class="d-block">Yesterday</small>
                            </h4>
                            <p>Hello guys, nice to have you on the platform! There
                                will be a lot of great stuff coming soon. We will
                                keep you posted for the latest news.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <a class="float-left" href="#pablo">
                            <div class="avatar" style="width: 40px; height: 40px;">
                                <img class="media-object" alt="Tim Picture"
                                     src="./assets/img/faces/marc.jpg">
                            </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                John Camber
                                <small class="d-block">Yesterday</small>
                            </h4>
                            <p>Hello guys, nice to have you on the platform! There
                                will be a lot of great stuff coming soon. We will
                                keep you posted for the latest news.</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <a class="float-left" href="#pablo">
                            <div class="avatar" style="width: 40px; height: 40px;">
                                <img class="media-object" alt="Tim Picture"
                                     src="./assets/img/faces/marc.jpg">
                            </div>
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                John Camber
                                <small class="d-block">Yesterday</small>
                            </h4>
                            <p>Hello guys, nice to have you on the platform! There
                                will be a lot of great stuff coming soon. We will
                                keep you posted for the latest news.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>