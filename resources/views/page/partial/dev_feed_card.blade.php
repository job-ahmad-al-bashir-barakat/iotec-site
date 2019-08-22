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
    <div class="card-body pt-0">
        @foreach($feedPost->tags as $tag)
            <span class="badge badge-pill badge-primary">{{ $tag }}</span>
        @endforeach
    </div>
    <div class="card-footer">
        <div class="author">
            <a href="#pablo" class="d-flex align-items-center">
                <img src="{{ $feedPost->publication->image }}"
                     title="{{ $feedPost->publication->name }}"
                     alt="{{ $feedPost->publication->name }}"
                     class="avatar img-raised mr-3">
                <span class="d-inline-block text-truncate" style="max-width: 100px;" title="{{ $feedPost->publication->name }}">{{ $feedPost->publication->name }}</span>
            </a>
        </div>
        <div class="stats ml-auto">
            <a href="#" class="card-link ml-1">
                <i class="material-icons"
                   style="font-size: 20px;">bookmark_border</i>
            </a>
        </div>
    </div>
</div>