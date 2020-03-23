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
                                    <h2>01 Information Sheet</h2>
                                    <h4>Please complete the form</h4>
                                    <hr class="mb-4">
                                </div>
                                @include('partials.error')
                                <form class="search-hotels__form" action="{{ route('visa-demande') }}" method="POST" data-toggle="validator">
                                    @csrf
                                    @method('PUT')
                                    <div class="row pad-lg-20">
                                        <div class="form-group col-12 col-sm-6 border-0">
                                            <label class="label-text">Type of Visa you want:</label>
                                            <div class="d-flex">
                                                <span class="select-local d-flex">
                                                      <select class="form-control select2 js-form-select" name="typevisa">
                                                          <option value="Visa to Study Abroad">Visa to Study Abroad</option>
                                                          <option value="Tourist visa">Tourist visa</option>
                                                          <option value="Business Visa">Business Visa</option>
                                                          <option value="Business / Professional Visa">Business / Professional Visa</option>
                                                          <option value="Sports Visa">Sports Visa</option>
                                                          <option value="Airport Transit Visa">Airport Transit Visa</option>
                                                          <option value="Autonomous Work Visa">Autonomous Work Visa</option>
                                                          <option value="Visa for Medical Treatment">Visa for Medical Treatment</option>
                                                          <option value="Visa Mission">Visa Mission</option>
                                                          <option value="Family Reunification Visa">Family Reunification Visa</option>
                                                          <option value="Visa Invitation">Visa Invitation</option>
                                                          <option value="Religious Visa">Religious Visa</option>
                                                          <option value="Other">Other</option>
                                                      </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-6 border-0">
                                            <label class="label-text">Select destination:</label>
                                            <div class="d-flex">
                                                <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                      <select class="select2 js-select-locality" name="destination" data-placeholder="">
                                                          @foreach($countries as $country)
                                                              <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                          @endforeach
                                                      </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-6 border-0">
                                            <label class="label-text">Profession:</label>
                                            <div class="d-flex">
                                                <span class="select-local d-flex">
                                                      <select class="form-control select2 js-form-select" name="profession">
                                                          <option value="Trader">Trader</option>
                                                          <option value="Employee">Employee</option>
                                                          <option value="Student">Student</option>
                                                          <option value="Contractor">Contractor</option>
                                                          <option value="Unemployed">Unemployed</option>
                                                          <option value="Athletic">Athletic</option>
                                                          <option value="Official">Official</option>
                                                          <option value="Other">Other</option>
                                                      </select>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <div class="row pad-lg-20">
                                        <div class="form-group col-12 col-sm-6 border-0">
                                            <label class="label-text">Marital status:</label>
                                            <div class="d-flex">
                                                <span class="select-local d-flex">
                                                      <select class="form-control select2 js-form-select" name="maritalstatus">
                                                          <option value="Single">Single</option>
                                                          <option value="Widower">Widower</option>
                                                          <option value="Divorced">Divorced</option>
                                                          <option value="Marry">Marry</option>
                                                          <option value="Other">Other</option>
                                                      </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group col-12 col-sm-6 border-0">
                                            <label class="label-text">Civility:</label>
                                            <div class="d-flex">
                                                <span class="select-local d-flex">
                                                      <select class="form-control select2 js-form-select" name="civility">
                                                          <option value="Sir">Sir</option>
                                                          <option value="Mrs">Mrs</option>
                                                          <option value="Miss">Miss</option>
                                                          <option value="Other">Other</option>
                                                      </select>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <div class="row pad-lg-20">
                                        <div class="row">
                                            <div class="form-group col-12 col-sm-6">
                                                <input class="form-control @error('first_name') is-invalid @enderror" id="name" type="text" name="first_name" placeholder="First name" required="required"/>
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-sm-6">
                                                <input class="form-control @error('last_name') is-invalid @enderror" id="name" type="text" name="last_name" placeholder="Last name" required="required"/>
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-sm-6">
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" placeholder="Email address" required="required"/>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-sm-6">
                                                <input class="form-control @error('phone_number') is-invalid @enderror" id="phone" type="tel" name="phone_number" placeholder="Phone number : +33 6 000 000" required="required"/>
                                                @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-sm-6">
                                                <input class="form-control @error('street') is-invalid @enderror" type="text" name="street" placeholder="Street Address and Number" required="required"/>
                                                @error('street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-sm-6 border-0">
                                                <label class="label-text">Your country:</label>
                                                <div class="d-flex">
                                                    <span class="select-local d-flex"><i class="icon icon-label mr-2 text-secondary"></i>
                                                          <select class="select2 js-select-locality" name="country">
                                                              @foreach($countries as $country)
                                                                  <option value="{{ $country->name }}">{{ $country->name }}</option>
                                                              @endforeach
                                                          </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <p class="fw-sm mb-3">Special requirements: (Not Guaranteed)</p>
                                                <textarea class="form-control @error('message') is-invalid @enderror" rows="6" name="message"  required="required"></textarea>
                                                @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn btn-secondary btn--round p-2 ml-sm-0" type="submit">Proceed to next step
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-nav btn-nav--up js-scroll-up" type="button"><i class="fa fa-angle-up"></i></button>
    </div>
@endsection
