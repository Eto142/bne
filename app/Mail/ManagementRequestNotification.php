<?php

namespace App\Mail;

use App\Models\ManagementRequest;
use Illuminate\Mail\Mailable;

class ManagementRequestNotification extends Mailable
{
    public $requestData;

    public function __construct(ManagementRequest $requestData)
    {
        $this->requestData = $requestData;
    }

    public function build()
    {
        return $this->subject('New Speak to Management Request')
            ->view('emails.management-notification');
    }
}
