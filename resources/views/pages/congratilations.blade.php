@extends('layouts.travel')
@section('content')
    <div class="page-content">
        <div class="container">
            <div class="row">
                @include('partials.asideForm')
                <div class="col-lg-9 d-flex" id="barba-wrapper">
                    <div class="barba-container">
                        <div class="booking-card card">
                            <div class="card-body">
                                <div class="booking-card__title">
                                    <h2>02 Confirmation</h2>
                                    <hr class="mb-4">
                                </div>
                                @include('partials.success')
                                <section class="mb-5">
                                    <h4>Your info</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <ul class="booking-card__checklist text-uppercase">
                                                <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                    <div class="fw-sm">Fist name:</div><span>{{ $visas->first_name }}</span>
                                                </li>
                                                <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                    <div class="fw-sm">Last name:</div><span>{{ $visas->last_name }}</span>
                                                </li>
                                                <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                    <div class="fw-sm">E-mail address:</div><span>{{ $visas->email }}</span>
                                                </li>
                                                <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                    <div class="fw-sm">Street Address and number:</div><span>{{ $visas->street }}</span>
                                                </li>
                                                <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                    <div class="fw-sm">Phone:</div><span>{{ $visas->phone_number }}</span>
                                                </li>
                                                <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                    <div class="fw-sm">Your country</div><span>{{ $visas->country }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                <section class="mb-5">
                                    <h4>Special requirements</h4>
                                    <p>{{ $visas->message }}</p>
                                </section>
                                <section class="mb-5">
                                    <h4>what you want</h4>
                                    <div class="col-12 col-md-8">
                                        <ul class="booking-card__checklist text-uppercase">
                                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                <div class="fw-sm">Your destination</div><span>{{ $visas->destination }}</span>
                                            </li>
                                            <li class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                                <div class="fw-sm">Type of Visa</div><span>{{ $visas->typevisa }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                                <section class="mb-5">
                                    <h4>Reform Travel</h4>
                                    <p>Your registration has been successfully submitted. Thank you we will get back to you shortly!</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
    </div>
@endsection
