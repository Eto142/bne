<?php

namespace App\Http\Controllers;

use App\Models\SessionBooking;
use App\Mail\SessionBookingConfirmation;
use App\Mail\SessionBookingSupportNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SessionBookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'service' => 'required|string',
            'message' => 'required|string',
        ]);

        $booking = SessionBooking::create($validated);

        // Email user
        Mail::to($booking->email)
            ->send(new SessionBookingConfirmation($booking));

        // Email support/admin
        Mail::to('support@brainznationzentertainment.com')
            ->send(new SessionBookingSupportNotification($booking));

        return redirect()->back()
            ->with('success', 'Session booked successfully! Confirmation email sent.');
    }
}
