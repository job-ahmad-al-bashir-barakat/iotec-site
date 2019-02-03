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

    <div class="about-us">
        @include('_nav')
        @include('_page_header',[
            'header' => 'About Us',
            'image'  => url('assets/img/bg9.jpg'),
        ])
        <div class="main main-raised">
            <div class="container">
                <div class="about-description pt-5 pb-5">
                    <div class="row text-center">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="title">Our Goal</h2>
                            <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
                        </div>
                    </div>
                </div>
                <div class="about-office pt-5 pb-5">
                    <div class="row text-center">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="title">Our office is our second home</h2>
                            <h4 class="description">Here are some pictures from our office. You can see the place looks like a palace and is fully equiped with everything you need to get the job done.</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-raised rounded img-fluid" alt="Raised Image" src="../assets/img/examples/office2.jpg">
                        </div>
                        <div class="col-md-4">
                            <img class="img-raised rounded img-fluid" alt="Raised Image" src="../assets/img/examples/office4.jpg">
                        </div>
                        <div class="col-md-4">
                            <img class="img-raised rounded img-fluid" alt="Raised Image" src="../assets/img/examples/office3.jpg">
                        </div>
                        <div class="col-md-6">
                            <img class="img-raised rounded img-fluid" alt="Raised Image" src="../assets/img/examples/office5.jpg">
                        </div>
                        <div class="col-md-6">
                            <img class="img-raised rounded img-fluid" alt="Raised Image" src="../assets/img/examples/office1.jpg">
                        </div>
                    </div>
                </div>
                <div class="about-services pt-5 pb-5" >
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Our Services</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info info-horizontal">
                                <div class="icon icon-rose">
                                    <i class="material-icons">gesture</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">1. Design</h4>
                                    <p>The moment you use Material Kit, you know you&#x2019;ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
                                    <a href="#pablo">Find more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-horizontal">
                                <div class="icon icon-rose">
                                    <i class="material-icons">build</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">2. Develop</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                    <a href="#pablo">Find more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info info-horizontal">
                                <div class="icon icon-rose">
                                    <i class="material-icons">mode_edit</i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">3. Make Edits</h4>
                                    <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                                    <a href="#pablo">Find more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-5 about-collaborator-team section-image" style="background-image: url('../assets/img/bg10.jpg')">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-8 ml-auto mr-auto pb-5">
                                <h2 class="title">Our Collaborators Teams</h2>
                            </div>
                        </div>
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
            <div class="container">
                <div class="about-contact">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="text-center title">Want to work with us?</h2>
                            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will get back to you in a couple of hours.</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name" class="bmd-label-floating">Your name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email" class="bmd-label-floating">Your Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="selectpicker " data-style="select-with-transition" data-size="7">
                                            <option value="1" disabled>Speciality</option>>
                                            <option value="2">I&apos;m a Designer</option>
                                            <option value="3">I&apos;m a Developer</option>
                                            <option value="4">I&apos;m a Hero</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 ml-auto mr-auto text-center">
                                        <button class="btn btn-primary btn-round">
                                            Let&apos;s talk
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('_page_footer')
    </div>

@endsection

@section('scripts')
    <!-- Plugin for Owl -->
    <script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.js') }}" type="text/javascript"></script>
@endsection