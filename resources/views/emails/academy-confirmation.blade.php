<h2>Application Received</h2>

<p>Hello {{ $application->name }},</p>

<p>Thank you for applying to our music academy.</p>

<p><strong>Area of Interest:</strong>
    {{ ucfirst(str_replace('_',' ', $application->instrument)) }}
</p>

<p>Our team will review your application and contact you if shortlisted.</p>

<p>Best regards,<br>The Academy Team</p>
