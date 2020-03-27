@extends('layouts.travel')
@section('content')
    <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="under" href="{{ route('welcome') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Admin</span></li>
            </ol>
        </div>
    </nav>
    <div class="page-content">
        <div class="container">
    @include('partials.success')
            <div class="row">
                <aside class="sidebar col-lg-3 order-1 order-lg-0">
                    <div class="sidebar__content js-sticky-top">
                        <section class="sidebar__card card">
                            <div class="sidebar__card-title">
                                <h4 class="card-title mb-1">Reform Travel</h4>
                                <ul class="sidebar__card-meta d-flex align-items-center">
                                    <li>
                                        <div class="rating">
                                            <select class="js-rating-stat" data-current-rating="5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <hr class="my-3 mt-2"/>
                            </div>
                            <ul class="sidebar__payment">
                                <li class="d-inline-block align-top mr-5 mb-2">
                                    <div class="fw-bold">Reform Travel</div>
                                    <ul>
                                        <li>Accompany any category of person by providing them with assistance from A to Z thanks to our experts</li>
                                    </ul>
                                </li>
                                <li class="d-inline-block align-top mr-5 mb-2">
                                    <div class="fw-bold">Obtention Visa</div>
                                    <ul>
                                        <li>Give us your file and travel free</li>
                                    </ul>
                                </li>
                                <li class="d-inline-block align-top mr-5 mb-2">
                                    <div class="fw-bold">Hebergement</div>
                                    <ul>
                                        <li>We take care of your reservations, with our teams of experts</li>
                                    </ul>
                                </li>
                                <li class="d-inline-block align-top mr-5 mb-2">
                                    <div class="fw-bold">Billet</div>
                                    <ul>
                                        <li>With experience and our affiliate we help our clients according to their means</li>
                                    </ul>
                                </li>
                            </ul>
                            <hr class="mt-2">
                            <ul class="sidebar__payment-total">
                                <li class="h4 fw-bold f-primary mb-0">Promotion Billet</li>
                                <li>Up to 30% reduction</li>
                            </ul>
                        </section>
                        <section class="sidebar__card card">
                            <div class="sidebar__card-title">
                                <h4 class="card-title mb-1">Need Help Reform?</h4>
                                <hr class="my-3 mt-2"/>
                            </div>
                            <p>Call our customer services team on the number below to speak to one of our advisors who will help you with all of you needs.</p>
                            <ul class="sidebar__contacts">
                                <li class="d-flex align-items-center"><i class="icon icon-phone mr-2"></i><a class="fw-bold" href="tel:784706133">78-470-61-33</a></li>
                            </ul>
                        </section>
                    </div>
                </aside>
                <div class="card card-default col-lg-9 d-flex">
                    <div class="card-header text-center h3 text-uppercase">Activity general of page</div>
                    <div class="card-body">
                        <table class="table table-bordered table-lg table-v2 table-striped mb-3">
                                <thead>
                                <h4>visa demande info</h4>
                                <hr class="mb-3">
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Action</th>
                                <th>Completed</th>
                                </thead>
                                <tbody>
                                @foreach($visas->sortByDesc('created_at') as $visa)
                                    <tr>
                                        <td class="text-uppercase">
                                            {{ $visa->first_name }} {{ $visa->last_name }}
                                        </td>
                                        <td>
                                            {{ $visa->email }}
                                        </td>
                                        <td>
                                            <a href="{{ route('visa.show', $visa->id) }}" class="btn btn-outline-info btn--round" type="button">Voir</a>
                                            <a href="#" class="btn btn-primary btn--round">Completer</a>
                                        </td>
                                        <td>
                                            <div class="status-pill js-tooltip-call green" data-toggle="tooltip" data-placement="top" title="completed"></div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        <table class="table table-bordered table-lg table-v2 table-striped mb-3">
                            <thead>
                            <h4>contact info</h4>
                            <hr class="mb-3">
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Completed</th>
                            </thead>
                            <tbody>
                            @foreach($contacts->sortByDesc('created_at') as $contact)
                                <tr>
                                    <td>
                                        <a href="{{ route('contact.show', $contact->id) }}">{{ $contact->name }}</a>
                                    </td>
                                    <td>
                                        {{ $contact->email }}
                                    </td>
                                    <td>
                                        <a href="{{ route('contact.show', $contact->id) }}" class="btn btn-outline-info btn--round" type="button">Voir</a>
                                        <a href="#" class="btn btn-primary btn--round">Completer</a>
                                    </td>
                                    <td>
                                        <div class="status-pill js-tooltip-call green" data-toggle="tooltip" data-placement="top" title="completed"></div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
