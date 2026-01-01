<?php

namespace App\Http\Controllers;

use App\Models\ManagementRequest;
use App\Mail\ManagementRequestConfirmation;
use App\Mail\ManagementRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManagementRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'topic'   => 'required|string',
            'message' => 'required|string',
        ]);

        $requestData = ManagementRequest::create($validated);

        // Send confirmation to user
        Mail::to($requestData->email)
            ->send(new ManagementRequestConfirmation($requestData));

        // Send notification to management/support
        Mail::to('management@yourdomain.com')
            ->send(new ManagementRequestNotification($requestData));

        return redirect()->back()
            ->with('success', 'Your request has been sent. A confirmation email has been delivered.');
    }
}
