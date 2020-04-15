@extends('layouts.travel')
@section('content')
    <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="under" href="{{ route('welcome') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span> Voir | {{ $contact->name }}</span></li>
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
                    <div class="card-header text-center h3 text-uppercase">Voir message</div>
                    <div class="card-body">
                        <table class="table table-bordered table-lg table-v2 table-striped">
                            <thead>
                            <th class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                <div class="fw-sm">Name:</div><span>{{ $contact->name }}</span>
                            </th>
                            <th class="d-flex justify-content-between flex-wrap flex-column flex-sm-row mb-3">
                                <div class="fw-sm">Email:</div><span>{{ $contact->email }}</span>
                            </th>
                            <hr class="mb-4">
                            </thead>
                            <tbody>
                                <tr>
                                    <td><p>{{ $contact->message }}</p></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


