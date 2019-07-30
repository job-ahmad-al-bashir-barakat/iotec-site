@extends('layout.master')

@section('content')

    <div class="posts">
        @include('layout._nav')
        @include('layout._page_header',[
            'header' => 'FAQ',
            'image'  => url('assets/img/examples/card-project4.jpg'),
        ])

        <div class="main main-raised">
            <div class="container">
                <div class="section" style="padding: 70px 0 100px ">
                    <!--                 collapse -->
                    <div id="collapse">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div id="accordion" role="tablist">
                                    <div class="card card-collapse">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Do you offer full support after purchase?
                                                    <i class="material-icons">keyboard_arrow_down</i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                            Yes. We provide full support with the guarentee of the product typically for 12Months.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-collapse">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What happens after my guarentee is over?                                                    <i class="material-icons">keyboard_arrow_down</i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                It will convert to support on demand "Remotely" for free, and if needed we can arrange paid visits when it's necessary.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-collapse">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Do you offer hosting services?
                                                    <i class="material-icons">keyboard_arrow_down</i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                We can provide hosting services within Syria, Egypt or Europe with reasonable prices.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                 end collapse -->
                </div>
            </div>
        </div>

        @include('layout._page_footer')
    </div>

@endsection
