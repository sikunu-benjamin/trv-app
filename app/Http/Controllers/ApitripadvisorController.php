<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApitripadvisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = \Unirest\Request::get("https://tripadvisor1.p.rapidapi.com/airports/search?locale=en_US&query=new+york",
            array(
                "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
                "X-RapidAPI-Key" => "3e54dbbd67mshb8b56ab50cde144p1df851jsnad317cf27e7c"
            )
        );
    }

    public function find($location_id)
    {
        $zff = '';
        $offset = '';
        $subcategory = '';
        $hotel_class = '';
        $currency = 'EUR';
        $amenities = '';
        $child_rm_ages = '9';
        $limit = '15';
        $checkin = '';
        $nights = '14';
        $adults = '1'; $rooms = '1';
        $responses = \Unirest\Request::get(
            "https://tripadvisor1.p.rapidapi.com/hotels/get-details?adults=$adults&nights=$nights&currency=$currency&lang=en_US&child_rm_ages=$child_rm_ages&checkin=$checkin&location_id=$location_id",
            array(
                "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
                "X-RapidAPI-Key" => "29841e67dbmsh1771f08a18d6915p1d81bfjsn15504580f3f1"
            )
        );

        $limitePhoto = 10;
        $imageshotel = \Unirest\Request::get("https://tripadvisor1.p.rapidapi.com/photos/list?lang=en_US&currency=USD&limit=$limitePhoto&location_id=$location_id",
            array(
                "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
                "X-RapidAPI-Key" => "29841e67dbmsh1771f08a18d6915p1d81bfjsn15504580f3f1"
            )
        );

        /*$limitereview = 10;
        $revieuw = \Unirest\Request::get("https://tripadvisor1.p.rapidapi.com/reviews/list?limit=$limitereview&currency=USD&lang=en_US&location_id=$location_id",
            array(
                "X-RapidAPI-Host" => "tripadvisor1.p.rapidapi.com",
                "X-RapidAPI-Key" => "3e54dbbd67mshb8b56ab50cde144p1df851jsnad317cf27e7c"
            )
        );*/

        //dd($responses->body);
        //dump($revieuw->body->data);
        return view('pages.hotel.view')
            ->with('responses', $responses->body->data)
            ->with('images', $imageshotel->body->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
