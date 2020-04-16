<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WelcomeController extends Controller
{
    public function index()
    {
        /*$zff = '';
        $offset = '';
        $subcategory = '';
        $hotel_class = '';
        $currency = 'EUR';
        $amenities = '';
        $child_rm_ages = '9';
        $limit = '15';
        $checkin = '';
        $nights = '14';
        $location_id = '187147';
        $adults = '1'; $rooms = '1';
        $response = \Unirest\Request::get(
            "https://tripadvisor1.p.rapidapi.com/hotels/list?zff=$zff&offset=$offset&subcategory=$subcategory&hotel_class=$hotel_class&currency=$currency&amenities=$amenities&child_rm_ages=$child_rm_ages&limit=$limit&checkin=$checkin&order=asc&lang=en_US&sort=recommended&nights=$nights&location_id=$location_id&adults=$adults&rooms=$rooms",
            array(
                "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
                "X-RapidAPI-Key" => "29841e67dbmsh1771f08a18d6915p1d81bfjsn15504580f3f1"
            )
        );*/
                $token = "2f438e524d340ea9fe45bbc5e95df7f7";


        //$response = "http://yasen.hotellook.com/tp/public/widget_location_dump.json?currency=rub&language=ru&limit=5&id=12209&type=popularity&check_in=2020-05-02&check_out=2020-05-17&token=2f438e524d340ea9fe45bbc5e95df7f7";

        $response = \Unirest\Request::get(
            "http://api.travelpayouts.com/v2/prices/month-matrix?currency=usd&origin=LED&destination=HKT&show_to_affiliates=true&token=2f438e524d340ea9fe45bbc5e95df7f7",[]
        );


        /*$response = Http::get(
            'http://yasen.hotellook.com/tp/public/widget_location_dump.json?currency=rub&language=ru&limit=5&id=12209&type=popularity&check_in=2020-05-05&check_out=2020-06-17',
            array('token' => '2f438e524d340ea9fe45bbc5e95df7f7')
        )->json();*/
        // dd($response);
        return view('reform'); //->with('responses', $response->body->data);
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
