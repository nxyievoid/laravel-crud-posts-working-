<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }
    
    public function store(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required|min:1|max:245',
            'email' => 'required|min:1',
            'question' => 'required|min:10',
        ]);

        Contact::create($validated);

        return redirect()->route('contact.create')->with('success', 'Post has been created successfully! :3');
    }
}
