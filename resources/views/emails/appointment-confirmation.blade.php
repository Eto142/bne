<h2>Appointment Confirmed</h2>

<p>Hello {{ $appointment->name }},</p>

<p>Thank you for booking an appointment with us. Here are the details:</p>

<ul>
    <li><strong>Email:</strong> {{ $appointment->email }}</li>
    <li><strong>Phone:</strong> {{ $appointment->phone }}</li>
    <li><strong>Purpose:</strong> {{ ucfirst(str_replace('_',' ', $appointment->topic)) }}</li>
</ul>

<p>We’ll get back to you shortly.</p>

<p>Best regards,<br>Your Team</p>
