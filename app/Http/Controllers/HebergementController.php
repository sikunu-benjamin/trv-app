<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class HebergementController extends Controller
{
    public function index()
    {
        return view('pages.travels.hebergementIndex')->with('countries', Country::all());
    }
}
