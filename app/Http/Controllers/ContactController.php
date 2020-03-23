<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\CreateContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(CreateContactRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        session()->flash('success', 'Message send successfully.');
        return redirect()->route('contact');
    }
}
