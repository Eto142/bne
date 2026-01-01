<h2>Session Booking Confirmed</h2>

<p>Hello {{ $booking->name }},</p>

<p>Your session booking has been received.</p>

<ul>
    <li><strong>Session Type:</strong>
        {{ ucfirst(str_replace('_',' ', $booking->service)) }}
    </li>
</ul>

<p>We’ll contact you shortly to confirm scheduling.</p>

<p>Thank you,<br>Your Studio Team</p>
