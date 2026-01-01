<h2>Request Received</h2>

<p>Hello {{ $requestData->name }},</p>

<p>Your request to speak with management has been received.</p>

<p><strong>Reason:</strong>
    {{ ucfirst(str_replace('_',' ', $requestData->topic)) }}
</p>

<p>Our management team will review your message and respond if necessary.</p>

<p>Thank you,<br>Management Team</p>
