<?php

namespace App\Mail;

use App\Models\AcademyApplication;
use Illuminate\Mail\Mailable;

class AcademyApplicationConfirmation extends Mailable
{
    public $application;

    public function __construct(AcademyApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this->subject('Academy Application Received')
            ->view('emails.academy-confirmation');
    }
}
