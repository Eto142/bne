<?php

namespace App\Http\Controllers;

use App\Models\AcademyApplication;
use App\Mail\AcademyApplicationConfirmation;
use App\Mail\AcademyApplicationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AcademyApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'required|string|max:20',
            'age'        => 'required|integer|min:5|max:100',
            'instrument' => 'required|string',
            'experience' => 'nullable|string',
            'message'    => 'required|string',
        ]);

        $application = AcademyApplication::create($validated);

        // Send confirmation to applicant
        Mail::to($application->email)
            ->send(new AcademyApplicationConfirmation($application));

        // Notify academy/admin
        Mail::to('academy@yourdomain.com')
            ->send(new AcademyApplicationNotification($application));

        return redirect()->back()
            ->with('success', 'Your application has been submitted successfully. A confirmation email has been sent.');
    }
}
