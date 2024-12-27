<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactRequest;
use App\Models\Contact;
use App\Models\Contact1;
use Illuminate\Http\Request;

class Contact1Controller extends Controller
{
    public function contact1($locale)
    {
        return view('frontend.contact');
    }

    public function store(CreateContactRequest $request)
    {
        $validatedData = $request->validated();
        Contact::create($validatedData);

        return redirect()->route('contact.create')->with('success', 'Message sent successfully');
    }
}
