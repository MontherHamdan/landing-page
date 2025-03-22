<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteMail;

class QuoteController extends Controller
{
    public function send(Request $request)
    {
        
        // Validate and process the form data
        $data = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email to info@sitemastersconstruction.com
        Mail::to('info@sitemastersco.com')->send(new QuoteMail($data));

        // Redirect or return a response
        return back()->with('success', 'Your message has been sent!');
    }
}
