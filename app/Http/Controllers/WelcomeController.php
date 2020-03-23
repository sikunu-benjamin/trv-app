<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('reform');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.travels.about');
    }

    public function visa()
    {
        return view('pages.visa_demande')->with('countries', Country::all());
    }
}
