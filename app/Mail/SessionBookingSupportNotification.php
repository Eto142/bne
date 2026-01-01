<?php

namespace App\Mail;

use App\Models\SessionBooking;
use Illuminate\Mail\Mailable;

class SessionBookingSupportNotification extends Mailable
{
    public $booking;

    public function __construct(SessionBooking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('New Session Booking')
            ->view('emails.session-support');
    }
}
