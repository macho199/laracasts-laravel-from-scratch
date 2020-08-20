<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::raw('It Works!', function ($message) {
           $message->to(request('email'))
               ->subject('Hello There');
        });

        return redirect('/contact')
            ->with('message', 'Email Sent!');
    }
}
