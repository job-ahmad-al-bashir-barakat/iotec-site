<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ $image ?? '' }});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                @isset($header)
                    <h1 class="title">{{ $header }}</h1>
                @endisset

                @isset($sub_header)
                    <h4>{{ $sub_header }}</h4>
                @endisset
            </div>
        </div>
    </div>
</div>