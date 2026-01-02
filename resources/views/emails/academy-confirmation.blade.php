<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Application Received</title>
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
     alt="Brainznation Music Academy"
     width="150"
     style="display:block; max-width:150px; height:auto;">

<p class="gold" style="margin:15px 0 0; font-size:12px; letter-spacing:2px; color:#c9a24d;">
    MUSIC EDUCATION • SKILL • GROWTH
</p>
</td>
</tr>

<!-- Body -->
<tr>
<td style="padding:40px; font-size:15px; line-height:1.8;" class="text">

<h1 style="margin:0 0 15px; font-size:26px; color:#000000;" class="text">
    Application Received
</h1>

<p>
    Hello <strong>{{ $application->name }}</strong>,
</p>

<p class="muted" style="color:#555555;">
    Thank you for applying to the
    <strong class="gold" style="color:#c9a24d;">Brainznation Music Academy</strong>.
    We have successfully received your application and supporting details.
</p>

<!-- Divider -->
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="border-top:1px solid #dddddd; padding:20px 0;"></td>
</tr>
</table>

<!-- Application Details -->
<table width="100%" cellpadding="0" cellspacing="0" role="presentation"
       class="card"
       style="background-color:#f9f9f9; border-radius:10px; border:1px solid #dddddd;">
<tr>
<td style="padding:22px;">

<p class="gold" style="margin:0 0 12px; font-size:13px; letter-spacing:1px; color:#c9a24d;">
    APPLICATION DETAILS
</p>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td style="padding:8px 0; width:160px; color:#777777;">
    Area of Interest
</td>
<td>
    {{ ucfirst(str_replace('_',' ', $application->instrument)) }}
</td>
</tr>
</table>

</td>
</tr>
</table>

<p class="muted" style="margin:30px 0 0; color:#555555;">
    Our academy team will carefully review your application.
    If you are shortlisted, we will contact you with the next steps.
</p>

<p style="margin:30px 0 0;">
    Best regards,<br>
    <strong>The Academy Team</strong><br>
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
    This email confirms receipt of your academy application.
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
