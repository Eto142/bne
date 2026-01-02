<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentConfirmation;
use App\Mail\AppointmentSupportNotification;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
   
public function store(Request $request)
{
    $validated = $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'phone'   => 'required|string|max:20',
        'topic'   => 'required|string',
        'message' => 'required|string',
    ]);

    $appointment = Appointment::create($validated);

    // Send confirmation to user
    Mail::to($appointment->email)
        ->send(new AppointmentConfirmation($appointment));

    // Send notification to support
    Mail::to('support@brainznationzentertainment.com')
        ->send(new AppointmentSupportNotification($appointment));

    return redirect()->back()->with('success', 'Appointment booked successfully! A confirmation email has been sent.');
}
}
