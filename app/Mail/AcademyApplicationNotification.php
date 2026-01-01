<?php

namespace App\Mail;

use App\Models\AcademyApplication;
use Illuminate\Mail\Mailable;

class AcademyApplicationNotification extends Mailable
{
    public $application;

    public function __construct(AcademyApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('New Academy Application')
            ->view('emails.academy-notification');
    }
}
