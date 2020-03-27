<?php

namespace App\Http\Controllers\Visa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Visa\CreateVisaRequest;
use App\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    public function store(CreateVisaRequest $request)
    {
        $visas = Visa::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
            'country' => $request->country,
            'street' => $request->street,
            'profession' => $request->profession,
            'destination' => $request->destination,
            'typevisa' => $request->typevisa,
            'civility' => $request->civility,
            'maritalstatus' => $request->maritalstatus,
        ]);
        session()->flash('success', 'Thank you your request has been send');
        return view('pages.congratilations')->with('visas', $visas);
    }

    public function show(Visa $visa)
    {
        return view('admin.visa_show')->with('visa', $visa);
    }
}
