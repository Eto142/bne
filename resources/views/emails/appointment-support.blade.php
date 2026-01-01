<h2>New Appointment Booking</h2>

<p>A new appointment has been booked:</p>

<ul>
    <li><strong>Name:</strong> {{ $appointment->name }}</li>
    <li><strong>Email:</strong> {{ $appointment->email }}</li>
    <li><strong>Phone:</strong> {{ $appointment->phone }}</li>
    <li><strong>Purpose:</strong> {{ ucfirst(str_replace('_',' ', $appointment->topic)) }}</li>
    <li><strong>Message:</strong> {{ $appointment->message }}</li>
</ul>
