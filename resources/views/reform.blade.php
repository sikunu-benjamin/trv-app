@extends('layouts.travel')
@section('content')
    <section class="intro d-flex flex-column load">
        <div class="intro__bg js-intro-bg">
            <div class="over"></div>
            <div class="swiper-container js-intro-slider-bg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('img/intro/item-1.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('img/intro/item-2.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('img/intro/item-3.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('img/intro/item-4.jpg') }}" alt="#"></div>
                    <div class="swiper-slide"><img class="img-cover" src="{{ asset('img/intro/item-5.jpg') }}" alt="#"></div>
                </div>
            </div>
        </div>
        <div class="intro__desc js-intro-slider-desc swiper-container">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">Looking for something amazing?</h4>
                                <h1 class="h1 intro__title prlx-scroll">your best trip</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">We offer a variety of services and options</h4>
                                <h1 class="h1 intro__title prlx-scroll">discover places</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">Visit museum with a dedicated tour guide</h4>
                                <h1 class="h1 intro__title prlx-scroll">city tours</h1>
                                <p class="prlx-scroll">
                                    we have collected the best offers in
                                    <span class="js-counter">4 217</span>
                                    accommodation options - to see them, just enter the dates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">City tours / tour tickets / tour guides</h4>
                                <h1 class="h1 intro__title prlx-scroll">more tours</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="container w-100 text-center">
                        <div class="row">
                            <div class="col-12 col-lg-10 mx-auto">
                                <h4 class="h4 intro__caption prlx-scroll">Looking for something amazing?</h4>
                                <h1 class="h1 intro__title prlx-scroll">Your travel tours</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="intro__btn-scroll js-intro-btn-jump" type="button"><span></span></button>
        </div>
        <div class="intro__content d-flex flex-column justify-content-end js-intro-content">
            <div class="intro__hotels">
                <div class="container-fluid p-0">
                    <div class="swiper-container js-intro-hotels">
                    </div>
                    <div class="intro__hotels-controls">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="h2">Popular destinations around the world</h2>
                        <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
                        <p class="fz-norm mb-0"><em>The best choice of hotels we have</em></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-header">
                        <h2 class="h2">The opportunities we provide</h2>
                        <div class="section-header__stars mb-3"><i class="fa fa-star"></i><i class="fa fa-star center"></i><i class="fa fa-star"></i></div>
                        <p class="fz-norm mb-0"><em>Explore the features and benefits of our service</em></p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    <div class="card card-service w-100 mb-2">
                        <div class="card-header">
                            <h4 class="h4">Handpicked Hotels</h4>
                        </div>
                        <div class="card-body">
                            <p>All hotels on our website are tested according to various criteria. You can be sure of your choice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    <div class="card card-service w-100 mb-2">
                        <div class="card-header">
                            <h4 class="h4">Detailed Descriptions</h4>
                        </div>
                        <div class="card-body">
                            <p>In order for you to have the most complete idea about the hotel, we try to collect the most complete and detailed description.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    <div class="card card-service w-100 mb-2">
                        <div class="card-header">
                            <h4 class="h4">Best Price Guarantee</h4>
                        </div>
                        <div class="card-body">
                            <p>We offer the best hotels at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    <div class="card card-service w-100 mb-2">
                        <div class="card-header">
                            <h4 class="h4">Secure Booking</h4>
                        </div>
                        <div class="card-body">
                            <p>Book hotels with us easily and safely. All data on your credit card is encrypted and secure. You can be calm for your means.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    <div class="card card-service w-100 mb-2">
                        <div class="card-header">
                            <h4 class="h4">Better service</h4>
                        </div>
                        <div class="card-body">
                            <p>Our specialists visit various hotels to personally assess their quality and provide you with a detailed review.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-flex mb-4">
                    <div class="card card-service w-100 mb-2">
                        <div class="card-header">
                            <h4 class="h4">Any Questions?</h4>
                        </div>
                        <div class="card-body">
                            <p>Call us at 8-800-2000-6000 and we will answer your questions, help you find a hotel and make a reservation. Working 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
    </div>
@endsection
