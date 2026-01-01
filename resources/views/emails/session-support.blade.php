<h2>New Session Booking</h2>

<ul>
    <li><strong>Name:</strong> {{ $booking->name }}</li>
    <li><strong>Email:</strong> {{ $booking->email }}</li>
    <li><strong>Session Type:</strong>
        {{ ucfirst(str_replace('_',' ', $booking->service)) }}
    </li>
    <li><strong>Message:</strong> {{ $booking->message }}</li>
</ul>
