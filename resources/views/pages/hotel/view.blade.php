@extends('layouts.travel')
@section('content')
    <main class="page-main">
        @foreach($responses as $response)
        <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="under" href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a class="under" href="category.html">Hotels</a></li>
                    <li class="breadcrumb-item"><a class="under" href="category.html">{{ $response->timezone }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>{{ $response->name }}</span></li>
                </ol>
            </div>
        </nav>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <aside class="sidebar col-lg-3">
                        <div class="sidebar__content js-sticky-top">
                            <div class="sidebar__finder card bg-primary text-white">
                                <h4 class="m-0 mb-lg-4">Search for hotels</h4>
                                <form class="collapse show d-lg-block mt-3" id="hotelFinder" action="#" method="POST" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label class="label">Place or name of the hotel / city</label><span class="form-select">
                          <select class="form-control select2 js-form-select" id="hotelName" name="hotel_name">
                            <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                            <option value="Black Pearl">Black Pearl</option>
                            <option value="Marsol">Marsol</option>
                            <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                            <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                          </select></span>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-lg-12 form-group">
                                                    <label class="label-text" for="hotelInDate">Check in date</label>
                                                    <div class="input-group-append"><i class="icon icon-calendar"></i>
                                                        <input class="form-control js-input-date " id="hotelInDate" type="text" name="hotel_date_in" required="required"/>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-12 form-group">
                                                    <label class="label-text" for="hotelOutDate">Check out date</label>
                                                    <div class="input-group-append"><i class="icon icon-calendar"></i>
                                                        <input class="form-control js-input-date " id="hotelOutDate" type="text" name="hotel_date_out" required="required"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="label">13 Nights</label>
                                            <div class="row">
                                                <div class="col-12 col-sm-6 form-group col-lg-12"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelAdults" name="hotel_adults">
                                <option value="1 Adult">1 Adult</option>
                                <option value="2 Adults">2 Adults</option>
                                <option value="3 Adults">3 Adults</option>
                                <option value="4 Adults">4 Adults</option>
                                <option value="5 Adults">5 Adults</option>
                              </select></span>
                                                </div>
                                                <div class="col-12 col-sm-6 form-group col-lg-6"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelChild" name="hotel__childs">
                                <option value="1 Child">1 Child</option>
                                <option value="2 Childs">2 Childs</option>
                                <option value="3 Childs">3 Childs</option>
                                <option value="4 Childs">4 Childs</option>
                                <option value="5 Childs">5 Childs</option>
                              </select></span>
                                                </div>
                                                <div class="col-12 col-sm-6 form-group col-lg-6"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelRoom" name="hotel_rooms">
                                <option value="1 Room">1 Room</option>
                                <option value="2 Rooms">2 Rooms</option>
                                <option value="3 Rooms">3 Rooms</option>
                                <option value="4 Rooms">4 Rooms</option>
                                <option value="5 Rooms">5 Rooms</option>
                              </select></span>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-12 form-group"><span class="form-select">
                              <select class="form-control select2 js-form-select" id="hotelDeparture" name="hotel_departure">
                                <option value="Resort Spa Hotel">Resort Spa Hotel</option>
                                <option value="Black Pearl">Black Pearl</option>
                                <option value="Marsol">Marsol</option>
                                <option value="Macronissos Village Bungalows">Macronissos Village Bungalows</option>
                                <option value="Iberotel Aquamarine Resort">Iberotel Aquamarine Resort</option>
                              </select></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-secondary btn--round mx-auto mt-2 w-100" type="submit">search
                                    </button>
                                </form>
                            </div>
                            <button class="btn-toggle btn btn-primary-light border-0 w-100 py-3 d-lg-none" data-target="#hotelFinder" data-toggle="collapse" aria-expanded="true" type="button"><span class="icon-bar"></span></button>
                            <div class="card d-none d-lg-flex">
                                <p class="fw-bold"><span class="count">9 803</span>
                                    guests liked this hotel
                                </p>
                                <ul class="guests-room">
                                    @foreach($response->room_tips as $review)
                                    <li class="guests-room__item">
                                        <div class="guests-room__desc">&quot;{{ $review->text }}&quot;</div>
                                        <div class="guests-room__bottom d-flex align-items-center">
                                            <div class="guests-room__avatar d-flex align-items-center pointer">
                                                <a class="media-object d-block rounded-circle" href="#">
                                                    <img class="img-fluid rounded-circle" src="{{ $review->user->avatar->small->url }}" alt="#"/>
                                                </a>
                                            </div>
                                            <div class="guests-room__right">
                                                <h5 class="mb-1">{{ $review->user->username }}</h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="country fz-xs">{{ $review->user->user_location->name }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9" id="barba-wrapper">
                        <div class="barba-container">
                            <nav class="hotel-nav">
                                <ul class="hotel-nav__menu nav nav-tabs" role="tablist">
                                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link active" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false"><span>Hotel information and room rates</span></a>
                                    </li>
                                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelServices" role="tab" aria-controls="hotelServices" aria-selected="true"><span>Facilities &amp; Services</span></a>
                                    </li>
                                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelAccommodation" role="tab" aria-controls="hotelAccommodation" aria-selected="true"><span>Accommodation conditions</span></a>
                                    </li>
                                    <li class="nav-item d-flex col-12 col-sm p-0"><a class="nav-link" data-toggle="tab" href="#hotelReviews" role="tab" aria-controls="hotelReviews" aria-selected="true"><span>Guest reviews</span></a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="hotel" role="tabpanel">
                                    <section>
                                        <h3 class="fw-md mb-1">{{ $response->name }}</h3>
                                        <ul class="hotel-title mb-3">
                                            <li class="stars mb-2">
                                                <div class="rating">
                                                    <select class="js-rating-stat" data-current-rating="5">
                                                        @for ($i = 0; $i < $response->rating; $i++)
                                                            <option value="{{ $i }}" selected="{{ $i <= $response->rating ? 'selected' : '' }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </li>
                                            <li class="d-flex">
                                                <div class="media-object"><i class="icon icon-label mr-2 text-primary"></i></div>
                                                <div class="local"><span>{{ $response->address }}</span><i class="bullet mx-2"></i><a href="#modalMap" data-toggle="modal" data-title="{{ $response->name }}">Show on map</a></div>
                                            </li>
                                        </ul>
                                        <div class="hotel-gallery">
                                            <div class="hotel-gallery__carousel swiper-container js-hotel-carousel">
                                                <div class="swiper-wrapper">
                                                    @foreach($images as $image)
                                                    <div class="swiper-slide"><img class="img-fluid img-cover" src="{{ $image->images->large->url }}" alt=" image"/>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="hotel-gallery__controls"><a class="hotel-gallery__arrow shadow-sm js-prev" role="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.119 44.237C9.922 44.237 0 34.315 0 22.119S9.922.001 22.119.001s22.119 9.922 22.119 22.118-9.924 22.118-22.119 22.118zm0-42.736C10.75 1.501 1.5 10.75 1.5 22.119c0 11.368 9.25 20.618 20.619 20.618s20.619-9.25 20.619-20.618c0-11.369-9.25-20.618-20.619-20.618z"/><path d="M24.667 29.884a.74.74 0 0 1-.53-.22l-7.328-7.334a.752.752 0 0 1 0-1.061l7.328-7.333a.75.75 0 1 1 1.061 1.061L18.4 21.8l6.798 6.805a.752.752 0 0 1 0 1.061.75.75 0 0 1-.531.218z"/></svg></i></a><a class="hotel-gallery__arrow shadow-sm js-next" role="button"><i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44"><path d="M22.118 44.236C9.922 44.236 0 34.314 0 22.118S9.922 0 22.118 0s22.118 9.922 22.118 22.118-9.922 22.118-22.118 22.118zm0-42.736C10.75 1.5 1.5 10.749 1.5 22.118c0 11.368 9.25 20.618 20.618 20.618 11.37 0 20.618-9.25 20.618-20.618 0-11.369-9.248-20.618-20.618-20.618z"/><path d="M19.341 29.884a.75.75 0 0 1-.53-1.281l6.796-6.804-6.796-6.803a.75.75 0 1 1 1.061-1.061l7.325 7.333a.75.75 0 0 1 0 1.061l-7.325 7.333a.742.742 0 0 1-.531.222z"/></svg></i></a></div>
                                            </div>
                                            <div class="hotel-gallery__thumbs swiper-container js-hotel-carousel-thumbs">
                                                <div class="swiper-wrapper">
                                                    @foreach($images as $image)
                                                    <div class="swiper-slide"><a class="hotel-gallery__thumb js-gallery-link" href="{{ $image->images->small->url }}" data-description="Joshua Tree Homesteader Cabin"><img class="img-cover" src="{{ $image->images->small->url }}" alt="#"/></a></div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12 col-md-8 d-flex">
                                                <div class="hotel__intro hotel-card w-100">
                                                    <section class="pb-4">
                                                        <h5 class="d-flex align-items-center text-primary mb-3"><i class="icon icon-badge mr-2"></i>{{ $response->name }}</h5>
                                                        <p>{{ $response->description }}</p>
                                                    </section>
                                                    <section>
                                                        <h5>Popular services in the hotel</h5>
                                                        <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row">
                                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-wifi mr-2"></i><span class="align-middle mr-2">Wi-Fi</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-24-hours mr-2"></i><span class="align-middle mr-2">24-hour front desk</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-freezer mr-2"></i><span class="align-middle mr-2">Air conditioning</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-food mr-2"></i><span class="align-middle mr-2">Food and beverage delivery to the room</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                            <li class="mr-2"><i class="align-middle icon text-secondary icon-parking mr-2"></i><span class="align-middle mr-2">Free parking</span><i class="bullet d-none d-md-inline-block"></i></li>
                                                        </ul>
                                                    </section>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 d-flex">
                                                <div class="hotel-stats hotel-card w-100">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-auto col-md-12">
                                                            <h3 class="mb-3">Guests like:</h3>
                                                            <ul class="hotel-stats__view mb-4">
                                                                <li class="item d-flex align-items-center">
                                                                    <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                    <div class="desc">
                                                                        <div class="fw-bold mb-1">Convenient location</div>
                                                                        <div class="amount">123 reviews</div>
                                                                    </div>
                                                                </li>
                                                                <li class="item d-flex align-items-center">
                                                                    <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                    <div class="desc">
                                                                        <div class="fw-bold mb-1">View from window</div>
                                                                        <div class="amount">95 reviews</div>
                                                                    </div>
                                                                </li>
                                                                <li class="item d-flex align-items-center">
                                                                    <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                    <div class="desc">
                                                                        <div class="fw-bold mb-1">Cleanliness of the room</div>
                                                                        <div class="amount">1325 reviews</div>
                                                                    </div>
                                                                </li>
                                                                <li class="item d-flex align-items-center">
                                                                    <div class="media-object"><i class="icon icon-check-button mr-2"></i></div>
                                                                    <div class="desc">
                                                                        <div class="fw-bold mb-1">Buffet breakfast</div>
                                                                        <div class="amount">1890 reviews</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-sm col-md-12">
                                                            <div class="hotel-stats__like d-flex flex-wrap justify-content-between align-items-center mb-3">
                                                                <div class="title mr-3 fw-bold">Guest ratings</div>
                                                                <div class="likes"><i class="icon icon-thumbs-up mr-2"></i><span class="amount">8,2 / 10</span></div>
                                                            </div>
                                                            <ul class="hotel-stats__progress js-point-progress">
                                                                <li class="item mb-1">
                                                                    <div class="title">Comfort</div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="progress progress--sm">
                                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div><span>8.2</span>
                                                                    </div>
                                                                </li>
                                                                <li class="item mb-1">
                                                                    <div class="title">Facilities</div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="progress progress--sm">
                                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div><span>9.3</span>
                                                                    </div>
                                                                </li>
                                                                <li class="item mb-1">
                                                                    <div class="title">Staff</div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="progress progress--sm">
                                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div><span>7.6</span>
                                                                    </div>
                                                                </li>
                                                                <li class="item mb-1">
                                                                    <div class="title">Food</div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="progress progress--sm">
                                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div><span>8.5</span>
                                                                    </div>
                                                                </li>
                                                                <li class="item mb-1">
                                                                    <div class="title">Price-quality ratio</div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="progress progress--sm">
                                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                                            </div>
                                                                        </div><span>8.2</span>
                                                                    </div>
                                                                </li>
                                                            </ul><a class="btn btn-secondary btn--round btn-block ml-sm-0" href="booking-traveler.html" role="button">book now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="hotel-card hotel-status" action="#" method="POST" data-toggle="validator">
                                            <h4>Seat availability</h4>
                                            <div class="row">
                                                <div class="col-12 text-center text-xl-left col-xl">
                                                    <div class="row">
                                                        <div class="form-group col-12 col-sm-4">
                                                            <label class="label-text">Check in date</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="statusDateFrom" type="text" name="date_from" required="required"/>
                                                                <label class="form-control date" for="statusDateFrom"></label>
                                                            </div><span>from 14:00</span>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-4">
                                                            <label class="label-text">Check out date</label>
                                                            <div class="input-date-group position-relative"><i class="mr-2 icon icon-calendar text-secondary"></i>
                                                                <input class="form-control js-input-date hidden " id="statusDateTo" type="text" name="date_to" required="required"/>
                                                                <label class="form-control date" for="statusDateTo"></label>
                                                            </div><span>13 Nights</span>
                                                        </div>
                                                        <div class="form-group col-12 col-sm-4">
                                                            <label class="text-label">Guests:</label><span class="position-relative">
                                  <input class="form-control" type="hidden" name="persons" value="2 Adults, 1 child"><span class="form-control d-inline pointer">2 Adults, 1 child</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto mx-auto">
                                                    <button class="btn btn-light btn--round" type="submit">change search parameters
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="hotel-card hotel-items">
                                            <div class="cart-header">
                                                <h4 class="card-title">Available rooms</h4>
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-8 order-1 order-md-0">
                                                    <div class="hotel-package mb-4">
                                                        <div class="hotel-package__row row mb-4">
                                                            <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="#"><img class="img-fluid" src="img/hotels/item-15.jpg" alt="#"/></a></div>
                                                            <div class="col-6">
                                                                <h4 class="hotel-package__title d-inline-block">Triple room</h4>
                                                                <ul class="hotel-package__props">
                                                                    <li class="mb-2 rooms"><span class="title mr-1">Rooms:</span><span class="form-select form-select--sm">
                                        <select class="form-control select2 js-form-select">
                                          <option value="rooms 1">1</option>
                                          <option value="rooms 2">2</option>
                                          <option value="rooms 3">3</option>
                                        </select></span>
                                                                    </li>
                                                                    <li class="mb-2 price"><span class="title mr-2">Price for 13 nights:</span><span class="d-inline-block pointer point-fade sale" data-toggle="popover" data-content="And here's some amazing content.
                    It's very engaging. Right?" data-trigger="hover" data-placement="bottom">1485 € <i class="hint" data-title="?"></i></span><span class="cost fw-bold">1 286 €</span>
                                                                    </li>
                                                                    <li class="mb-2 prepayment"><span class="title mr-1">Prepayment:</span><span class="fw-bold">30%</span></li>
                                                                    <li class="mb-2 guests"><span class="title mr-1">Max guests:</span><span><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i></span></li>
                                                                </ul>
                                                                <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                            </div>
                                                        </div>
                                                        <div class="collapse js-addition">
                                                            <div class="hotel-package__more">
                                                                <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                <ul class="hotel-package__menu">
                                                                    <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                </ul>
                                                                <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                <ul class="hotel-package__options list-inline">
                                                                    <li><span>Pay-per-view TV</span></li>
                                                                    <li><span>Telephone</span></li>
                                                                    <li><span>Radio</span></li>
                                                                    <li><span>Satellite TV</span></li>
                                                                    <li><span>Safety Deposit Box</span></li>
                                                                    <li><span>Work Desk</span></li>
                                                                    <li><span>Heating</span></li>
                                                                    <li><span>Carpeted Floor</span></li>
                                                                    <li><span>Wardrobe / Closet</span></li>
                                                                    <li><span>Shower</span></li>
                                                                    <li><span>Hairdryer</span></li>
                                                                    <li><span>Complimentary Toiletries</span></li>
                                                                    <li><span>Toilet</span></li>
                                                                    <li><span>Bidet</span></li>
                                                                    <li><span>Minibar</span></li>
                                                                    <li><span>Wake Up Service</span></li>
                                                                    <li><span>Towels</span></li>
                                                                    <li><span>Linen</span></li>
                                                                    <li><span>For access to the upper floors there is an elevator</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-bottom my-0">
                                                    </div>
                                                    <div class="hotel-package mb-4">
                                                        <div class="hotel-package__row row mb-4">
                                                            <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="#"><img class="img-fluid" src="img/hotels/item-16.jpg" alt="#"/></a></div>
                                                            <div class="col-6">
                                                                <h4 class="hotel-package__title d-inline-block">Quadruple Room</h4>
                                                                <ul class="hotel-package__props">
                                                                    <li class="mb-2 rooms"><span class="title mr-1">Rooms:</span><span class="form-select form-select--sm">
                                        <select class="form-control select2 js-form-select">
                                          <option value="rooms 1">1</option>
                                          <option value="rooms 2">2</option>
                                          <option value="rooms 3">3</option>
                                          <option value="rooms 4">4</option>
                                        </select></span>
                                                                    </li>
                                                                    <li class="mb-2 price"><span class="title mr-2">Price for 13 nights:</span><span class="cost fw-bold">1 982 €</span>
                                                                    </li>
                                                                    <li class="mb-2 prepayment"><span class="title mr-1">Prepayment:</span><span class="fw-bold">30%</span></li>
                                                                    <li class="mb-2 guests"><span class="title mr-1">Max guests:</span><span><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i></span></li>
                                                                </ul>
                                                                <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                            </div>
                                                        </div>
                                                        <div class="collapse js-addition">
                                                            <div class="hotel-package__more">
                                                                <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                <ul class="hotel-package__menu">
                                                                    <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                </ul>
                                                                <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                <ul class="hotel-package__options list-inline">
                                                                    <li><span>Pay-per-view TV</span></li>
                                                                    <li><span>Telephone</span></li>
                                                                    <li><span>Radio</span></li>
                                                                    <li><span>Satellite TV</span></li>
                                                                    <li><span>Safety Deposit Box</span></li>
                                                                    <li><span>Work Desk</span></li>
                                                                    <li><span>Heating</span></li>
                                                                    <li><span>Carpeted Floor</span></li>
                                                                    <li><span>Wardrobe / Closet</span></li>
                                                                    <li><span>Shower</span></li>
                                                                    <li><span>Hairdryer</span></li>
                                                                    <li><span>Complimentary Toiletries</span></li>
                                                                    <li><span>Toilet</span></li>
                                                                    <li><span>Bidet</span></li>
                                                                    <li><span>Minibar</span></li>
                                                                    <li><span>Wake Up Service</span></li>
                                                                    <li><span>Towels</span></li>
                                                                    <li><span>Linen</span></li>
                                                                    <li><span>For access to the upper floors there is an elevator</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-bottom my-0">
                                                    </div>
                                                    <div class="hotel-package mb-4">
                                                        <div class="hotel-package__row row mb-4">
                                                            <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="#"><img class="img-fluid" src="img/hotels/item-17.jpg" alt="#"/></a></div>
                                                            <div class="col-6">
                                                                <h4 class="hotel-package__title d-inline-block">Junior Suite</h4>
                                                                <ul class="hotel-package__props">
                                                                    <li class="mb-2 rooms"><span class="title mr-1">Rooms:</span><span class="form-select form-select--sm">
                                        <select class="form-control select2 js-form-select">
                                          <option value="rooms 1">1</option>
                                          <option value="rooms 2">2</option>
                                          <option value="rooms 3">3</option>
                                          <option value="rooms 4">4</option>
                                        </select></span>
                                                                    </li>
                                                                    <li class="mb-2 price"><span class="title mr-2">Price for 13 nights:</span><span class="cost fw-bold">2 690 €</span>
                                                                    </li>
                                                                    <li class="mb-2 prepayment"><span class="title mr-1">Prepayment:</span><span class="fw-bold">25%</span></li>
                                                                    <li class="mb-2 guests"><span class="title mr-1">Max guests:</span><span><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i></span></li>
                                                                </ul>
                                                                <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                            </div>
                                                        </div>
                                                        <div class="collapse js-addition">
                                                            <div class="hotel-package__more">
                                                                <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                <ul class="hotel-package__menu">
                                                                    <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                </ul>
                                                                <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                <ul class="hotel-package__options list-inline">
                                                                    <li><span>Pay-per-view TV</span></li>
                                                                    <li><span>Telephone</span></li>
                                                                    <li><span>Radio</span></li>
                                                                    <li><span>Satellite TV</span></li>
                                                                    <li><span>Safety Deposit Box</span></li>
                                                                    <li><span>Work Desk</span></li>
                                                                    <li><span>Heating</span></li>
                                                                    <li><span>Carpeted Floor</span></li>
                                                                    <li><span>Wardrobe / Closet</span></li>
                                                                    <li><span>Shower</span></li>
                                                                    <li><span>Hairdryer</span></li>
                                                                    <li><span>Complimentary Toiletries</span></li>
                                                                    <li><span>Toilet</span></li>
                                                                    <li><span>Bidet</span></li>
                                                                    <li><span>Minibar</span></li>
                                                                    <li><span>Wake Up Service</span></li>
                                                                    <li><span>Towels</span></li>
                                                                    <li><span>Linen</span></li>
                                                                    <li><span>For access to the upper floors there is an elevator</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-bottom my-0">
                                                    </div>
                                                    <div class="hotel-package mb-4">
                                                        <div class="hotel-package__row row mb-4">
                                                            <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="#"><img class="img-fluid" src="img/hotels/item-18.jpg" alt="#"/></a></div>
                                                            <div class="col-6">
                                                                <h4 class="hotel-package__title d-inline-block">Suite</h4>
                                                                <ul class="hotel-package__props">
                                                                    <li class="mb-2 rooms"><span class="title mr-1">Rooms:</span><span class="form-select form-select--sm">
                                        <select class="form-control select2 js-form-select">
                                          <option value="rooms 1">1</option>
                                          <option value="rooms 2">2</option>
                                          <option value="rooms 3">3</option>
                                          <option value="rooms 4">4</option>
                                        </select></span>
                                                                    </li>
                                                                    <li class="mb-2 price"><span class="title mr-2">Price for 13 nights:</span><span class="cost fw-bold">2 690 €</span>
                                                                    </li>
                                                                    <li class="mb-2 prepayment"><span class="title mr-1">Prepayment:</span><span class="fw-bold">20%</span></li>
                                                                    <li class="mb-2 guests"><span class="title mr-1">Max guests:</span><span><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i></span></li>
                                                                </ul>
                                                                <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                            </div>
                                                        </div>
                                                        <div class="collapse js-addition">
                                                            <div class="hotel-package__more">
                                                                <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                <ul class="hotel-package__menu">
                                                                    <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                </ul>
                                                                <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                <ul class="hotel-package__options list-inline">
                                                                    <li><span>Pay-per-view TV</span></li>
                                                                    <li><span>Telephone</span></li>
                                                                    <li><span>Radio</span></li>
                                                                    <li><span>Satellite TV</span></li>
                                                                    <li><span>Safety Deposit Box</span></li>
                                                                    <li><span>Work Desk</span></li>
                                                                    <li><span>Heating</span></li>
                                                                    <li><span>Carpeted Floor</span></li>
                                                                    <li><span>Wardrobe / Closet</span></li>
                                                                    <li><span>Shower</span></li>
                                                                    <li><span>Hairdryer</span></li>
                                                                    <li><span>Complimentary Toiletries</span></li>
                                                                    <li><span>Toilet</span></li>
                                                                    <li><span>Bidet</span></li>
                                                                    <li><span>Minibar</span></li>
                                                                    <li><span>Wake Up Service</span></li>
                                                                    <li><span>Towels</span></li>
                                                                    <li><span>Linen</span></li>
                                                                    <li><span>For access to the upper floors there is an elevator</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-bottom my-0">
                                                    </div>
                                                    <div class="hotel-package mb-4">
                                                        <div class="hotel-package__row row mb-4">
                                                            <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="#"><img class="img-fluid" src="img/hotels/item-18.jpg" alt="#"/></a></div>
                                                            <div class="col-6">
                                                                <h4 class="hotel-package__title d-inline-block">Superior Double Room </h4>
                                                                <ul class="hotel-package__props">
                                                                    <li class="mb-2 rooms"><span class="title mr-1">Rooms:</span><span class="form-select form-select--sm">
                                        <select class="form-control select2 js-form-select">
                                          <option value="rooms 1">1</option>
                                          <option value="rooms 2">2</option>
                                        </select></span>
                                                                    </li>
                                                                    <li class="mb-2 price"><span class="title mr-2">Price for 13 nights:</span><span class="cost fw-bold">850 €</span>
                                                                    </li>
                                                                    <li class="mb-2 prepayment"><span class="title mr-1">Prepayment:</span><span class="fw-bold">40%</span></li>
                                                                    <li class="mb-2 guests"><span class="title mr-1">Max guests:</span><span><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i></span></li>
                                                                </ul>
                                                                <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                            </div>
                                                        </div>
                                                        <div class="collapse js-addition">
                                                            <div class="hotel-package__more">
                                                                <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                <ul class="hotel-package__menu">
                                                                    <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                </ul>
                                                                <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                <ul class="hotel-package__options list-inline">
                                                                    <li><span>Pay-per-view TV</span></li>
                                                                    <li><span>Telephone</span></li>
                                                                    <li><span>Radio</span></li>
                                                                    <li><span>Satellite TV</span></li>
                                                                    <li><span>Safety Deposit Box</span></li>
                                                                    <li><span>Work Desk</span></li>
                                                                    <li><span>Heating</span></li>
                                                                    <li><span>Carpeted Floor</span></li>
                                                                    <li><span>Wardrobe / Closet</span></li>
                                                                    <li><span>Shower</span></li>
                                                                    <li><span>Hairdryer</span></li>
                                                                    <li><span>Complimentary Toiletries</span></li>
                                                                    <li><span>Toilet</span></li>
                                                                    <li><span>Bidet</span></li>
                                                                    <li><span>Minibar</span></li>
                                                                    <li><span>Wake Up Service</span></li>
                                                                    <li><span>Towels</span></li>
                                                                    <li><span>Linen</span></li>
                                                                    <li><span>For access to the upper floors there is an elevator</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-bottom my-0">
                                                    </div>
                                                    <div class="hotel-package mb-4">
                                                        <div class="hotel-package__row row mb-4">
                                                            <div class="col-6 pr-md-1"><a class="hotel-package__img d-block" href="#"><img class="img-fluid" src="img/hotels/item-18.jpg" alt="#"/></a></div>
                                                            <div class="col-6">
                                                                <h4 class="hotel-package__title d-inline-block">Double Room</h4>
                                                                <ul class="hotel-package__props">
                                                                    <li class="mb-2 rooms disabled"><span class="title mr-1">Rooms:</span><span class="form-select form-select--sm">
                                        <select class="form-control select2 js-form-select">
                                          <option value="rooms 1">1</option>
                                          <option value="rooms 2">2</option>
                                        </select></span><span class="d-inline-block pointer point-fade" data-toggle="popover" data-content="And here's some amazing content.
                    It's very engaging. Right?" data-trigger="hover" data-placement="bottom">No rooms available<i class="hint" data-title="?"></i></span>
                                                                    </li>
                                                                    <li class="mb-2 price"><span class="title mr-2">Price for 13 nights:</span><span class="cost fw-bold">650 €</span>
                                                                    </li>
                                                                    <li class="mb-2 prepayment disabled"><span class="title mr-1">Prepayment:</span><span class="fw-bold">40%</span></li>
                                                                    <li class="mb-2 guests disabled"><span class="title mr-1">Max guests:</span><span><i class="icon icon-user mr-1"></i><i class="icon icon-user mr-1"></i></span></li>
                                                                </ul>
                                                                <button class="btn-more fw-bold text-primary pointer point-fade js-hotel-show-more" type="button">More info +</button>
                                                            </div>
                                                        </div>
                                                        <div class="collapse js-addition">
                                                            <div class="hotel-package__more">
                                                                <p class="mb-2">The room has 1 single bed and 1 extra large double bed</p>
                                                                <ul class="hotel-package__menu">
                                                                    <li class="d-flex align-items-center mb-2"><i class="mr-2 icon icon-coffee-cup text-primary"></i><span class="mt-1 fw-sm">Breakfast is included in the room rate.</span></li>
                                                                </ul>
                                                                <h5 class="mb-3 fw-bold">Room Facilities</h5>
                                                                <ul class="hotel-package__options list-inline">
                                                                    <li><span>Pay-per-view TV</span></li>
                                                                    <li><span>Telephone</span></li>
                                                                    <li><span>Radio</span></li>
                                                                    <li><span>Satellite TV</span></li>
                                                                    <li><span>Safety Deposit Box</span></li>
                                                                    <li><span>Work Desk</span></li>
                                                                    <li><span>Heating</span></li>
                                                                    <li><span>Carpeted Floor</span></li>
                                                                    <li><span>Wardrobe / Closet</span></li>
                                                                    <li><span>Shower</span></li>
                                                                    <li><span>Hairdryer</span></li>
                                                                    <li><span>Complimentary Toiletries</span></li>
                                                                    <li><span>Toilet</span></li>
                                                                    <li><span>Bidet</span></li>
                                                                    <li><span>Minibar</span></li>
                                                                    <li><span>Wake Up Service</span></li>
                                                                    <li><span>Towels</span></li>
                                                                    <li><span>Linen</span></li>
                                                                    <li><span>For access to the upper floors there is an elevator</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <hr class="hr-bottom my-0">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 hotel-items__check">
                                                    <div class="py-3 js-sticky-top">
                                                        <p class="mb-4">You book 3 room for</p>
                                                        <ul class="text-danger mb-4">
                                                            <li class="price">3 976 €</li>
                                                            <li>You are lucky! Today, this room has a special price!</li>
                                                        </ul>
                                                        <p class="mb-2"><a class="btn btn-secondary btn--round btn-order" href="booking-traveler.html" role="button">book now</a>
                                                        </p>
                                                        <p>This is your fourth trip. Book 1 more trip and get a 10% discount!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane" id="hotelServices" role="tabpanel">
                                    <section>
                                        <h3 class="fw-md">Facilities & Services</h3>
                                        <hr class="mb-4">
                                        <div class="hotel-card">
                                            <h5>Most popular facilities</h5>
                                            <ul class="hotel-facilities d-flex flex-wrap flex-column flex-md-row mb-3">
                                                @foreach($response->amenities as $services)
                                                <li class="mr-2"><i class="align-middle icon text-secondary icon-wifi mr-2"></i>
                                                    <span class="align-middle mr-2">{{ $services->name }}</span><i class="bullet d-none d-md-inline-block"></i>
                                                </li>
                                                @endforeach
                                            </ul>
                                            {{--<div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-dinner mr-2"></i>
                                                            <h4 class="h4">Food and Beverages</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Wine / Champagne</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Special diet menus</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Snack bar</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Breakfast in the room</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Restaurant</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-cleaning mr-2"></i>
                                                            <h4 class="h4">Cleaning services</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Daily cleaning</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Ironing Service</span>
                                                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Dry Cleaning</span>
                                                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Laundry</span>
                                                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-parking mr-2"></i>
                                                            <h4 class="h4">Parking</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Is free! Free private parking is possible on site (reservation is not needed).</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Parking spaces for people with disabilities</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Secured parking</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-info mr-2"></i>
                                                            <h4 class="h4">General services</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Common lounge / lounge with TV</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Air conditioning</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Smoking is prohibited throughout the property.</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Soundproofed rooms</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Elevator</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Family rooms</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Facilities for disabled guests</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Food and beverage delivery to the room</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-disabled mr-2"></i>
                                                            <h4 class="h4">Availability</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Cord / button call help in the bathroom</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Suitable for wheelchair users</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-pets mr-2"></i>
                                                            <h4 class="h4">Pets</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Pets are allowed on request. This service can be paid.</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-family mr-2"></i>
                                                            <h4 class="h4">Entertainment and Family Services</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Children's TV channels</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Babysitting service</span>
                                                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Children's room</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-credits mr-2"></i>
                                                            <h4 class="h4">Business center services</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Fax / Photocopying</span>
                                                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Conference hall / banquet hall</span>
                                                                    <div class="w-100"></div><span class="available">(Paid separately)</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-receptionist mr-2"></i>
                                                            <h4 class="h4">Reseption</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Concierge Service</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Luggage office</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>24-hour front desk</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="hotel-service mb-4">
                                                        <div class="hotel-service__title d-flex mb-3"><i class="icon icon-bellboy mr-2"></i>
                                                            <h4 class="h4">Staff speaks</h4>
                                                        </div>
                                                        <ul class="hotel-service__list">
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>English</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>French</span>
                                                                </div>
                                                            </li>
                                                            <li class="d-flex"><i class="icon icon-check-button text-primary"></i>
                                                                <div class="d-block"><span>Italian</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </div>
                                        <div class="hotel-card">
                                            <h4 class="mb-4">Several reasons to choose accommodation option Hotel Ravena</h4>
                                            <ul class="hotel-options row">
                                                <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Reasonable prices</span></li>
                                                <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Staff speaks 3 languages</span></li>
                                                <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>One of the best options chosen by guests in the city of Milan</span></li>
                                                <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Manage reservations online</span></li>
                                                <li class="col-12 col-sm-6 d-flex mb-3"><i class="icon icon-check-button"></i><span>Free parking</span></li>
                                            </ul>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane" id="hotelAccommodation" role="tabpanel">
                                    <section>
                                        <h3 class="fw-md">Accommodation conditions</h3>
                                        <hr class="mb-4">
                                        <div class="hotel-checklist hotel-card">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <h5 class="title d-flex"><i class="icon icon-calendar mr-2"></i>Check-in:</h5>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <p>From 15:00 hours</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <h5 class="title d-flex"><i class="icon icon-calendar mr-2"></i>Check-out:</h5>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <p>15:00 hours</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <h5 class="title d-flex"><i class="icon icon-info mr-2"></i>Cancellation / prepayment</h5>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <p>Cancellation and prepayment policies vary by room category. <a href="#">Please enter the dates of your stay </a>and read the booking conditions for the requested room.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <h5 class="title d-flex"><i class="icon icon-family mr-2"></i>Accommodation of children</h5>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <p>All children are welcome.</p>
                                                    <p><span class="mark bg-primary-light"><span class="bold">strong Is free!  </span>One child under 2 years stays free of charge in a baby cot.</span></p>
                                                    <p>Maximum capacity of extra beds / babycots in a room is 1.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <h5 class="title d-flex"><i class="icon icon-pets mr-2"></i>Pets</h5>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <p>Pets are allowed on request. This service can be paid.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <h5 class="title d-flex"><i class="icon icon-credits mr-2"></i>Accepted for payment</h5>
                                                </div>
                                                <div class="col-12 col-sm-8">
                                                    <ul class="hotel-checklist__payment">
                                                        <li class="d-inline-block mr-2 mb-2"><img src="img/american-express.jpg" alt="american-express"></li>
                                                        <li class="d-inline-block mr-2 mb-2"><img src="img/visa.jpg" alt="visa"></li>
                                                        <li class="d-inline-block mr-2 mb-2"><img src="img/master-card.jpg" alt="master-card"></li>
                                                        <li class="d-inline-block mr-2 mb-2"><img src="img/maestro.jpg" alt="maestro"></li>
                                                        <li class="d-inline-block mr-2 mb-2"><img src="img/discover.jpg" alt="discover"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="hotel-popular">
                                        <h3>Popular hotels in the area</h3>
                                        <hr class="mb-4">
                                        <div class="row">
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-primary text-white">special price
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-15.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="5">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5" selected="selected">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">50 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">50 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-purple text-white">best seller
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-16.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="5">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5" selected="selected">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">110 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">110 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list"><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-17.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="4">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4" selected="selected">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">75 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">75 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list"><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-17.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="4">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4" selected="selected">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-purple text-white">best seller
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-16.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="5">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5" selected="selected">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">110 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">110 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-primary text-white">special price
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-15.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="5">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5" selected="selected">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">50 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">50 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-primary text-white">special price
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-15.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Al Moggar Garden Beach Club</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="5">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5" selected="selected">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Egypt</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Al Moggar Garden Beach Club">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">50 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">50 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-purple text-white">best seller
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-16.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Resort Spa Hotel</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="5">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5" selected="selected">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Thailand</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Resort Spa Hotel">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>8/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">110 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>A quiet and cozy spa hotel is located just 80 meters from the coast. Here you can relax, relax from everyday bustle, and also undergo various strengthening programs and spa treatments. All ... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="cost">110 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex mb-4 pb-2">
                                                <div class="product bg-white product--list">
                                                    <div class="product__special bg-danger text-white">hot deal
                                                    </div><a class="product__img-top d-block" href="hotel.html"><img class="img-fluid" src="img/hotels/item-18.jpg" alt="#"/></a>
                                                    <div class="product__body">
                                                        <h4 class="product__title"><a href="hotel.html">Macronissos Village Bungalows</a></h4>
                                                        <div class="product__rating mb-2">
                                                            <div class="rating">
                                                                <select class="js-rating-stat" data-current-rating="4">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4" selected="selected">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="product__stat d-flex flex-wrap justify-content-between align-items-center">
                                                            <li class="mr-3"><span>Cyprus</span><i class="bullet"></i><a href="#modalMap" data-toggle="modal" data-title="Macronissos Village Bungalows">Show on map</a></li>
                                                            <li class="d-inline-flex align-items-center"><i class="icon icon-thumbs-up mr-1"></i><span>9/10</span></li>
                                                        </ul>
                                                        <hr/>
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                            </li>
                                                        </ul>
                                                        <hr/>
                                                        <div class="product__desc">
                                                            <p>The air-conditioned rooms have a balcony with views of the sea or the garden. Each spacious room has a TV with satellite channels. The private bathrooms at the... </p><a class="product__link-more" href="hotel.html">Read more</a>
                                                        </div>
                                                    </div>
                                                    <hr class="d-none d-sm-block"/>
                                                    <div class="product__footer">
                                                        <ul class="product__price d-flex justify-content-between align-items-center">
                                                            <li class="mr-2"><span>Price per night from</span></li>
                                                            <li><span class="sale mr-2">95 €</span><span class="cost">75 €</span>
                                                            </li>
                                                        </ul><a class="product__btn-book btn btn-secondary btn--round" href="booking-traveler.html">book now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane" id="hotelReviews" role="tabpanel">
                                    <section>
                                        <h3 class="fw-md">Guest reviews</h3>
                                        <hr class="mb-4">
                                        <div class="hotel-card hotel-review">
                                            <div class="row">
                                                <div class="hotel-review__total col-12 col-sm-4">
                                                    <ul class="total d-flex mb-1">
                                                        <li class="total__item">8,2</li>
                                                        <li class="total__item">10</li>
                                                    </ul>
                                                    <p class="review">Based on  <span class="reviews">9803</span>
                                                        reviews
                                                    </p>
                                                    <hr>
                                                    <p>Guest reviews are written by our customers after their stay at Hotel Ravena</p>
                                                </div>
                                                <div class="hotel-review__progress col-12 col-sm-8 js-point-progress">
                                                    <div class="item pr-3">
                                                        <div class="mb-1">Comfort</div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress--lg">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div><span class="fw-bold">8.2</span>
                                                        </div>
                                                    </div>
                                                    <div class="item pr-3">
                                                        <div class="mb-1">Facilities</div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress--lg">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div><span class="fw-bold">9.3</span>
                                                        </div>
                                                    </div>
                                                    <div class="item pr-3">
                                                        <div class="mb-1">Staff</div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress--lg">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div><span class="fw-bold">7.6</span>
                                                        </div>
                                                    </div>
                                                    <div class="item pr-3">
                                                        <div class="mb-1">Food</div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress--lg">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div><span class="fw-bold">8.5</span>
                                                        </div>
                                                    </div>
                                                    <div class="item pr-3">
                                                        <div class="mb-1">Price-quality ratio</div>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress--lg">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 0%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div><span class="fw-bold">8.2</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hotel-card hotel-guests">
                                            <ul class="hotel-guests__list">
                                                @foreach($response->room_tips as $review)
                                                <li class="comment">
                                                    <div class="row flex-sm-nowrap">
                                                        <div class="comment__left col-12 col-sm-5 col-md-4 mb-4 align-items-center w-100">
                                                            <div class="d-flex">
                                                                <div class="comment__avatar rounded-circle">
                                                                    <img class="img-fluid rounded-circle" src="{{ $review->user->avatar->large->url }}" alt="avatar"/>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mt-3">
                                                                <div class="comment__right">
                                                                    <div class="comment__name mb-0">{{ $review->user->username }}</div>
                                                                    <ul class="d-flex align-items-center">
                                                                        <li class="comment__country fz-xs">{{ $review->user->user_location->name }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment__content col-12 col-sm-7 col-md-8">
                                                            <div class="pr-3">
                                                                <div class="comment__meta mb-3">
                                                                    <ul class="row justify-content-sm-between align-items-baseline">
                                                                        <li class="comment__level d-flex align-items-center mb-2">
                                                                            <div class="badge bg-primary">{{ $review->rating }}</div>
                                                                            <h4 class="level m-0">{{ $review->rating == 5 ? 'Excellent' : 'Good' }}</h4>
                                                                        </li>
                                                                        <li class="comment__date mb-2"><span>Review Date:</span>
                                                                            <time datetime="{{ $review->user->created_time }}">{{ $review->user->created_time }}</time>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="comment__desc">
                                                                    <div class="d-flex">
                                                                        <div class="media-object"><i class="icon icon-plus-inside text-success"></i></div>
                                                                        <div class="content">
                                                                            <p>{{ $review->text }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
        </div>
        @endforeach
    </main>
@endsection
