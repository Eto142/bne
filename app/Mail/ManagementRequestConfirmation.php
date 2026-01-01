<?php

namespace App\Mail;

use App\Models\ManagementRequest;
use Illuminate\Mail\Mailable;

class ManagementRequestConfirmation extends Mailable
{
    public $requestData;

    public function __construct(ManagementRequest $requestData)
    {
        $this->requestData = $requestData;
    }

    public function build()
    {
        return $this->subject('We Received Your Request')
            ->view('emails.management-confirmation');
    }
}
