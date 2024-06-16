<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        $details = $request->validated();

        // Here, you could process the data, such as sending an email
        Mail::to(config('mail.from.address'))->send(new ContactMail($details));

        return back()->with('success', 'Message sent successfully');
    }
}
