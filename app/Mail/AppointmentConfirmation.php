<?php

namespace App\Mail;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function build()
    {
        return $this
            ->from('support@brainznationzentertainment.com', 'Brainz Nation Z Entertainment')
            ->replyTo('support@brainznationzentertainment.com')
            ->subject('Your Appointment Has Been Confirmed')
            ->view('emails.appointment-confirmation')
            ->text('emails.appointment-confirmation-text');
    }
}
