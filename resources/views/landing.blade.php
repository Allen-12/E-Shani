@extends('layouts.site')
@section('title','E-shani-Home')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img0/bg3.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-center">
                        <h1>Supplement your childs education</h1>
                        <h3 class="title text-center">CBC content from Kenya’s leading teachers. Expand your child's mind </h3>
                        <p>
                            <button type="button" class="btn btn-primary btn-lg">Sign up</button>
                            <button type="button" class="btn btn-info btn-lg">Log in</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="container">
                    <h1 class="display-4">Content for all ages</h1>
                    <p class="lead">More Catchy words</p>
                </div>
                <ul class="nav nav-pills nav-pills-rose justify-content-center">
                    <li class="nav-item"><a class="nav-link active" href="#pill1" data-toggle="tab">3 year olds - 6 year olds</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pill2" data-toggle="tab">7 year olds - 10 year olds</a></li>

                </ul>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="pill1">

                        <div class="uk-child-width-1-2@m" uk-grid>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l6.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">For 3-4 year olds</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        <button class="btn btn-rose btn-round">Get started</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l3.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">For 5-6 year olds</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        <button class="btn btn-rose btn-round">Get started</button>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>

                    <div class="tab-pane" id="pill2">
                        <div class="uk-child-width-1-2@m" uk-grid>
                            <div >
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l1.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">For 7-8 year olds</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        <button class="btn btn-rose btn-round">Get started</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l5.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">For 9-10 Year olds</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                        <button class="btn btn-rose btn-round">Get started</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- <div class="jumbotron jumbotron-fluid"> -->
                <div class="container">
                    <h1 class="display-4">Our stats</h1>
                    <p class="lead">More Catchy words</p>
                </div>
                <!-- </div> -->

                <div class="container">
                    <div class="row">
                        <br/>

                    </div>
                    <div class="row text-center">
                        <div class="col">
                            <div class="counter">
                                <i class="fa fa-users fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                                <p class="count-text "> learners</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="counter">
                                <i class="fa fa-play-circle fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="700" data-speed="1500"></h2>
                                <p class="count-text ">Videos</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="counter">
                                <i class="fa fa-book fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="10" data-speed="1500"></h2>
                                <p class="count-text ">Topics</p>
                            </div></div>
                        <div class="col">
                            <div class="counter">
                                <i class="fa fa-globe  fa-2x"></i>
                                <h2 class="timer count-title count-number" data-to="7" data-speed="1500"></h2>
                                <p class="count-text ">Counties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <!-- courosell -->
                <!-- <div class="jumbotron jumbotron-fluid"> -->
                <div class="container">
                    <h1 class="display-4">Testimonials</h1>
                    <p class="lead">More Catchy words</p>
                </div>
                <!-- </div> -->
                <div uk-slider="center: true">

                    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l1.jpg" alt="" class="rounded img-fluid">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Headline</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l1.jpg" alt="" class="rounded img-fluid">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Headline</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l1.jpg" alt="" class="rounded img-fluid">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Headline</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="img/l1.jpg" alt="" class="rounded img-fluid">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">Headline</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </li>

                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
                <!-- courosell -->


                <div class="section section-contacts">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="text-center title">Have any question?</h2>
                            <h4 class="text-center description"> The E-shani team will be more than ready to sort out your queries</h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Your Name</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Your Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                                    <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 ml-auto mr-auto text-center">
                                        <button class="btn btn-rose btn-raised">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
