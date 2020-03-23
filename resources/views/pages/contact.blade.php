@extends('layouts.travel')
@section('content')
    <nav class="breadcrumb-nav d-flex align-items-center" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="under" href="{{ route('home') }}">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Contacts</span></li>
            </ol>
        </div>
    </nav>
    <div class="page-content">
        <div class="container">

            <div class="row">
                <aside class="sidebar col-lg-3 order-1 order-lg-0">
                    <div class="sidebar__content js-sticky-top">
                        <section class="sidebar__card card">
                            <div class="sidebar__card-title">
                                <h4 class="card-title">Contacts</h4>
                                <hr class="my-3"/>
                            </div>
                            <ul class="sidebar__contacts">
                                <li class="d-flex align-items-baseline"><i class="icon icon-phone mr-2"></i><a href="tel:784706133">78-470-61-33</a></li>
                                <li class="d-flex align-items-baseline"><i class="icon icon-building mr-2"></i>
                                    <p class="mb-0">314-336 Bourke St,<br>Melbourne VIC 3000,<br>Australia</p>
                                </li>
                                <li class="d-flex align-items-baseline"><i class="icon icon-envelope-close mr-2"></i><a href="mailto:Reformtravel@gmail.com">Reformtravel@gmail.com</a></li>
                            </ul>
                        </section>
                        <section class="sidebar__card card">
                            <div class="sidebar__card-title">
                                <h4 class="card-title">Send us a message</h4>
                                <hr class="my-3"/>
                            </div>
                            <form class="sidebar__subscribe" action="{{ route('contactsend') }}" method="POST" data-toggle="validator">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control rounded @error('message') is-invalid @enderror" rows="7" name="message" placeholder="Your message..." required></textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-secondary btn--round mx-auto mx-lg-0" type="submit">Send
                                    </button>
                                </div>
                            </form>
                        </section>
                    </div>
                </aside>
                <div class="col-lg-9 d-flex">
                    <div class="contacts-layer card">
                        <div class="contacts-layer__box">
                            <div class="contacts-layer__map" id="map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
    </div>
@endsection
