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
            <div class="intro__search">
                <div class="container">
                    <div class="search-hotels shadow-sm">
                        <ul class="search-hotels__tabs nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tabHotel" role="tab" aria-controls="tabHotel" aria-selected="false"><span class="d-none d-md-block">Hotel</span><i class="icon icon-building d-md-none mx-1 text-secondary"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabFlight" role="tab" aria-controls="tabFlight" aria-selected="true"><span class="d-none d-md-block">Flight</span><i class="icon icon-airplane d-md-none mx-1 text-secondary"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tabFlightHotel" role="tab" aria-controls="tabFlightHotel" aria-selected="true"><span class="d-none d-md-block">Flight &amp; Hotel</span><i class="icon icon-airplane d-md-none mx-1 text-secondary"></i><i class="icon icon-building d-md-none mx-1 text-secondary"></i></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tabHotel" role="tabpanel">
                                <form class="search-hotels__form" action="#" method="GET" data-toggle="validator">
                                    <div class="row">
                                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-3">
                                            <label class="label-text">Place or name of the hotel</label>
                                            <div class="d-flex">
                                                <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                  <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or hotel">
                                                    <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                                    <option value="Black Pearl">Black Pearl</option>
                                                    <option value="Marsol">Marsol</option>
                                                    <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                                    <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                                                  </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
                                            <div class="form-group-date text-nowrap text-center">
                                                <div class="d-inline-block">
                                                    <label class="label-text">Check in date</label>
                                                    <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="hotelDate1" type="text" name="hotel_from" required="required"/>
                                                        <label class="form-control date" for="hotelDate1"></label>
                                                    </div>
                                                </div><i class="bullet mx-4"></i>
                                                <div class="d-inline-block">
                                                    <label class="label-text">Check out date</label>
                                                    <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="hotelDateTo1" type="text" name="hotel_to" required="required"/>
                                                        <label class="form-control date" for="hotelDateTo1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-lg-4 col-xl-3 d-flex justify-content-center">
                                            <div class="mx-2">
                                                <label class="label-text">Rooms</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="rooms" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Adults</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Children</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-xl-2 d-flex">
                                            <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tabFlight" role="tabpanel">
                                <form class="search-hotels__form" action="#" method="GET">
                                    <div class="row">
                                        <div class="col-12 col-xl-6">
                                            <div class="row">
                                                <div class="form-group col-12 col-sm-6 border-0">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="d-flex">
                                                        <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                          <select class="select2 js-select-locality" id="flying_from" name="flying_from" data-placeholder="Orly airport">
                                                            <option value="Gatwick Airport">Gatwick Airport</option>
                                                            <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                                            <option value="London Airport">London Airport</option>
                                                            <option value="Fort St John Airport">Fort St John Airport</option>
                                                            <option value="Rimouski Airport">Rimouski Airport</option>
                                                            <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                                            <option value="Whale Cove Airport">Whale Cove Airport</option>
                                                          </select>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-sm-6 border-0">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="d-flex">
                                                        <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                          <select class="select2 js-select-locality" name="flying_to" data-placeholder="Select">
                                                            <option value="Gatwick Airport">Gatwick Airport</option>
                                                            <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                                            <option value="London Airport">London Airport</option>
                                                            <option value="Fort St John Airport">Fort St John Airport</option>
                                                            <option value="Rimouski Airport">Rimouski Airport</option>
                                                            <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                                            <option value="Whale Cove Airport">Whale Cove Airport</option>
                                                          </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-7 col-md-6 col-xl-4 d-flex flex-wrap justify-content-center">
                                            <div class="form-group-date text-nowrap text-center">
                                                <div class="d-inline-block">
                                                    <label class="label-text">Departing</label>
                                                    <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="flyingDate1" type="text" name="departing" required="required"/>
                                                        <label class="form-control date" for="flyingDate1"></label>
                                                    </div>
                                                </div><i class="bullet mx-4"></i>
                                                <div class="d-inline-block">
                                                    <label class="label-text">Returning</label>
                                                    <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                        <input class="form-control js-input-date hidden " id="flyingDateTo1" type="text" name="returning" required="required"/>
                                                        <label class="form-control date" for="flyingDateTo1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-5 col-md-3 col-xl-2 d-flex justify-content-center">
                                            <div class="mx-2">
                                                <label class="label-text">Adults</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Children</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-md-3 col-xl-12 d-flex">
                                            <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tabFlightHotel" role="tabpanel">
                                <form class="search-hotels__form" action="#" method="GET" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 mb-2">
                                            <div class="row">
                                                <div class="form-group col-12 col-lg-4 border-0">
                                                    <label class="label-text">Place or name of the hotel</label>
                                                    <div class="d-flex">
                                                        <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                          <select class="select2 js-select-locality" name="search_hotel" data-placeholder="Enter here a place or hotel">
                                                            <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                                            <option value="Black Pearl">Black Pearl</option>
                                                            <option value="Marsol">Marsol</option>
                                                            <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                                            <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                                                          </select>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-sm-6 col-lg-4 border-0">
                                                    <label class="label-text">Flying from</label>
                                                    <div class="d-flex">
                                                        <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                          <select class="select2 js-select-locality" name="flying_from" data-placeholder="Orly airport">
                                                            <option value="Gatwick Airport">Gatwick Airport</option>
                                                            <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                                            <option value="London Airport">London Airport</option>
                                                            <option value="Fort St John Airport">Fort St John Airport</option>
                                                            <option value="Rimouski Airport">Rimouski Airport</option>
                                                            <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                                            <option value="Whale Cove Airport">Whale Cove Airport</option>
                                                          </select>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-sm-6 col-lg-4 border-0">
                                                    <label class="label-text">Flying to</label>
                                                    <div class="d-flex">
                                                        <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                          <select class="select2 js-select-locality" name="flying_to" data-placeholder="Orly airport">
                                                            <option value="Gatwick Airport">Gatwick Airport</option>
                                                            <option value="Saskatoon John G. Diefenbaker International Airport">Saskatoon John G. Diefenbaker International Airport</option>
                                                            <option value="London Airport">London Airport</option>
                                                            <option value="Fort St John Airport">Fort St John Airport</option>
                                                            <option value="Rimouski Airport">Rimouski Airport</option>
                                                            <option value="Sioux Lookout Airport">Sioux Lookout Airport</option>
                                                            <option value="Whale Cove Airport">Whale Cove Airport</option>
                                                          </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-lg-8">
                                            <div class="row">
                                                <div class="form-group col-12 col-md-6 d-flex justify-content-center mb-3">
                                                    <div class="form-group-date text-nowrap text-center">
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Departing</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="flyingDate2" type="text" name="departing" required="required"/>
                                                                <label class="form-control date" for="flyingDate2"></label>
                                                            </div>
                                                        </div><i class="bullet mx-4"></i>
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Returning</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="flyingDateTo2" type="text" name="returning" required="required"/>
                                                                <label class="form-control date" for="flyingDateTo2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12 col-md-6 d-flex justify-content-center">
                                                    <div class="form-group-date text-nowrap text-center">
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Check in date</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="hotelDate2" type="text" name="hotel_date_from" required="required"/>
                                                                <label class="form-control date" for="hotelDate2"></label>
                                                            </div>
                                                        </div><i class="bullet mx-4"></i>
                                                        <div class="d-inline-block">
                                                            <label class="label-text">Check out date</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="hotelDateTo2" type="text" name="hotel_date_to" required="required"/>
                                                                <label class="form-control date" for="hotelDateTo2"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-lg-4 d-flex justify-content-center">
                                            <div class="mx-2">
                                                <label class="label-text">Rooms</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="rooms" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Adults</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="adults" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                            <div class="mx-2">
                                                <label class="label-text">Children</label>
                                                <div class="qty">
                                                    <input class="js-qty" type="text" name="children" value="2" data-mask="00"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 d-flex">
                                            <button class="btn btn-secondary btn--round align-self-center" type="submit">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro__hotels">
                <div class="container-fluid p-0">
                    <div class="swiper-container js-intro-hotels">
                        <div class="swiper-wrapper">
                            {{-- @foreach($responses as $response)
                                <div class="swiper-slide">
                                    <div class="card-intro d-block" style="background-image: url( {{ $response->photo->images->medium->url }} );">
                                        <div class="card-price"><span class="mr-1">from</span><span class="count text-secondary">{{ $response->price }}</span></div>
                                        <div class="card-intro__footer">
                                            <h4 class="h4 f-primary">{{ $response->name }}</h4>
                                            <div class="card-intro__local d-flex align-items-center"><i class="icon icon-label mr-1"></i><span>{{ $response->location_string }}</span></div>
                                            <div class="card-intro__rating">
                                                <select class="js-rating-stat" data-current-rating="5">
                                                    @for ($i = 0; $i < $response->rating; $i++)
                                                        <option value="{{ $i }}" selected="{{ $i <= $response->rating ? 'selected' : '' }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-hover">
                                            <h3 class="h3 text-uppercase">{{ $response->name }}</h3><a class="btn btn-light btn--round card-hover__view" href="{{ route('hotel.view', $response->location_id) }}">VIEW</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach--}}
                        </div>
                    </div>
                    <div class="intro__hotels-controls">
                        <button class="btn btn-primary btn-nav btn-nav--left js-prev" type="button"><i class="fa fa-angle-left"></i></button>
                        <button class="btn btn-primary btn-nav btn-nav--right js-next" type="button"><i class="fa fa-angle-right"></i></button>
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
@section('script')
    <script type="text/javascript">
        $('#flying_from').change(function(){
            var countryID = $(this).val();
            if(countryID){
                $.ajax({
                    type:"GET",
                    url:"{{url('api/flight/')}}?query="+countryID,
                    success:function(res){
                        if(res){
                            $("#flying_from").empty();
                            $("#flying_from").append('<option>Select</option>');
                            /*$.each(res,function(key,value){
                                $("#flying_from").append('<option value="'+key+'">'+value+'</option>');
                            });*/

                        }else{
                            $("#flying_from").empty();
                        }
                    }
                });
            }else{
                $("#state").empty();
                $("#city").empty();
            }
        });
        $('#state').on('change',function(){
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:"GET",
                    url:"{{url('country/city-list')}}?state_id="+stateID,
                    success:function(res){
                        if(res){
                            $("#city").empty();
                            $.each(res,function(key,value,bar){
                                $("#city").append('<option value="'+key+'">'+value+'</option>');
                            });

                        }else{
                            $("#city").empty();
                        }
                    }
                });
            }else{
                $("#city").empty();
            }

        });
    </script>
@endsection
