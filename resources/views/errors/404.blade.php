@extends('layouts.travel')
@section('content')
    <div class="page-content">
        <div class="container text-center">
            <h1>Page not find</h1>
            <p>Do not desepert for it's, thanks</p>
            <button class="btn btn-secondary w-150 mr-2" type="button" onclick="window.history.back();">Go back</button>
            <a class="btn btn-secondary w-150" href="{{ route('home') }}">Return Home</a>
        </div>
    </div>
@endsection
