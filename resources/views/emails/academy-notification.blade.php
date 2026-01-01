<h2>New Academy Application</h2>

<ul>
    <li><strong>Name:</strong> {{ $application->name }}</li>
    <li><strong>Email:</strong> {{ $application->email }}</li>
    <li><strong>Phone:</strong> {{ $application->phone }}</li>
    <li><strong>Age:</strong> {{ $application->age }}</li>
    <li><strong>Instrument:</strong>
        {{ ucfirst(str_replace('_',' ', $application->instrument)) }}
    </li>
</ul>

<p><strong>Experience:</strong></p>
<p>{{ $application->experience ?? 'None provided' }}</p>

<p><strong>Why they want to join:</strong></p>
<p>{{ $application->message }}</p>
