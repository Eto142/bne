<?php
namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationConfirmation;
use App\Mail\RegistrationNotification;



class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:registrations,email',
        ]);

        $registration = Registration::create($validated);

        // Optional: send email to user
       
        Mail::to($registration->email)
            ->send(new RegistrationConfirmation($registration));
        

        // Optional: notify admin
       
        Mail::to('support@brainznationzentertainment.com')
            ->send(new RegistrationNotification($registration));
       
        return redirect()->back()
            ->with('success', 'Registration successful. Thank you for signing up.');
    }
}

