<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Request Received</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
:root {
    color-scheme: light dark;
    supported-color-schemes: light dark;
}

/* Apple Mail / iOS */
@media (prefers-color-scheme: dark) {
    body {
        background-color:#0a0a0a !important;
        color:#e5e5e5 !important;
    }
    .container {
        background-color:#111111 !important;
    }
    .header,
    .footer {
        background-color:#000000 !important;
    }
    .text {
        color:#e5e5e5 !important;
    }
    .muted {
        color:#b3b3b3 !important;
    }
    .gold {
        color:#c9a24d !important;
    }
    .card {
        background-color:#0b0b0b !important;
        border-color:#2a2a2a !important;
    }
}
</style>
</head>

<body style="margin:0; padding:0; background-color:#f4f4f4; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#f4f4f4;">
<tr>
<td align="center" style="padding:40px 15px;">

<!-- Container -->
<table width="600" cellpadding="0" cellspacing="0" role="presentation"
       class="container"
       style="background-color:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 15px 40px rgba(0,0,0,0.15);">

<!-- Header -->
<tr>
<td align="center" class="header"
    style="padding:35px; background-color:#000000; border-bottom:1px solid #2a2a2a;">

<img src="{{ asset('assets/images/logo.png') }}"
     alt="Brainznation Entertainment"
     width="150"
     style="display:block; max-width:150px; height:auto;">

<p class="gold" style="margin:15px 0 0; font-size:12px; letter-spacing:2px; color:#c9a24d;">
    MANAGEMENT • MUSIC • CULTURE
</p>
</td>
</tr>

<!-- Body -->
<tr>
<td style="padding:40px; font-size:15px; line-height:1.8;" class="text">

<h1 style="margin:0 0 15px; font-size:26px; color:#000000;" class="text">
    Request Received
</h1>

<p>
    Hello <strong>{{ $requestData->name }}</strong>,
</p>

<p class="muted" style="color:#555555;">
    Your request to speak with management has been successfully received
    and logged in our system.
</p>

<!-- Divider -->
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="border-top:1px solid #dddddd; padding:20px 0;"></td>
</tr>
</table>

<!-- Request Details -->
<table width="100%" cellpadding="0" cellspacing="0" role="presentation"
       class="card"
       style="background-color:#f9f9f9; border-radius:10px; border:1px solid #dddddd;">
<tr>
<td style="padding:22px;">

<p class="gold" style="margin:0 0 12px; font-size:13px; letter-spacing:1px; color:#c9a24d;">
    REQUEST DETAILS
</p>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="padding:8px 0; width:120px; color:#777777;">
    Reason
</td>
<td>
    {{ ucfirst(str_replace('_',' ', $requestData->topic)) }}
</td>
</tr>
</table>

</td>
</tr>
</table>

<p class="muted" style="margin:30px 0 0; color:#555555;">
    Our management team will review your message and follow up
    if further discussion is required.
</p>

<p style="margin:30px 0 0;">
    Respectfully,<br>
    <strong>Management Team</strong><br>
    Brainznation Entertainment
</p>

</td>
</tr>

<!-- Footer -->
<tr>
<td align="center" class="footer"
    style="padding:25px; background-color:#f0f0f0; font-size:12px; color:#777777;">

<p style="margin:0;">
    © {{ date('Y') }} Brainznation Entertainment. All rights reserved.
</p>
<p style="margin:8px 0 0;">
    This message confirms receipt of your request.
</p>

</td>
</tr>

</table>
<!-- End Container -->

</td>
</tr>
</table>

</body>
</html>
