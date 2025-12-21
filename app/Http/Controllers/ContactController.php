<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact.index');
    }
    
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'company' => 'nullable|string',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);
        
        // Handle contact form submission
        // You can add email sending or database storage here
        
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
