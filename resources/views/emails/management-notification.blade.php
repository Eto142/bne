<h2>New Management Request</h2>

<ul>
    <li><strong>Name:</strong> {{ $requestData->name }}</li>
    <li><strong>Email:</strong> {{ $requestData->email }}</li>
    <li><strong>Reason:</strong>
        {{ ucfirst(str_replace('_',' ', $requestData->topic)) }}
    </li>
</ul>

<p><strong>Message:</strong></p>
<p>{{ $requestData->message }}</p>
