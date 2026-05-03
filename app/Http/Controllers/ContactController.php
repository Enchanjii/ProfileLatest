<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Change 'your-email@gmail.com' to your actual Gmail address where you want to receive the notifications
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMessage($validated));

        return redirect('/#contact')->with('success', 'Your message has been sent successfully!');
    }
}
