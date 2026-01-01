<?php

namespace App\Mail;

use App\Models\SessionBooking;
use Illuminate\Mail\Mailable;

class SessionBookingConfirmation extends Mailable
{
    public $booking;

    public function __construct(SessionBooking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('Session Booking Confirmation')
            ->view('emails.session-confirmation');
    }
}
