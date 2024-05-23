<?php

namespace group3\contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use group3\contactform\Models\Contact;

class ContactFormController extends Controller
{
    public function showForm()
    {
        return view('contactForm::form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($validated);

        return redirect()->route('thankyou');
    }
}
