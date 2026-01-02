<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0; padding:0; background-color:#eef1f5; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#eef1f5;">
    <tr>
        <td align="center" style="padding:40px 15px;">

            <!-- Email Container -->
            <table width="600" cellpadding="0" cellspacing="0" role="presentation"
                   style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.05);">

                <!-- Header -->
                <tr>
                    <td align="center" style="background-color:#0f172a; padding:25px;">
                        <img src="{{ asset('assets/images/logo.png') }}"
                             alt="Your Company Logo"
                             width="140"
                             style="display:block; max-width:140px; height:auto;">
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:35px; color:#334155; font-size:15px; line-height:1.7;">

                        <h1 style="margin:0 0 15px; font-size:22px; color:#0f172a;">
                            Appointment Confirmed
                        </h1>

                        <p style="margin:0 0 15px;">
                            Hello <strong>{{ $appointment->name }}</strong>,
                        </p>

                        <p style="margin:0 0 25px;">
                            Thank you for booking an appointment with us.
                            We’ve successfully received your request. Below are the details for your reference:
                        </p>

                        <!-- Appointment Details Card -->
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                               style="background-color:#f8fafc; border:1px solid #e5e7eb; border-radius:6px; padding:20px;">
                            <tr>
                                <td style="padding:8px 0; width:140px; color:#475569;"><strong>Email</strong></td>
                                <td style="padding:8px 0; color:#111827;">{{ $appointment->email }}</td>
                            </tr>
                            <tr>
                                <td style="padding:8px 0; color:#475569;"><strong>Phone</strong></td>
                                <td style="padding:8px 0; color:#111827;">{{ $appointment->phone }}</td>
                            </tr>
                            <tr>
                                <td style="padding:8px 0; color:#475569;"><strong>Purpose</strong></td>
                                <td style="padding:8px 0; color:#111827;">
                                    {{ ucfirst(str_replace('_',' ', $appointment->topic)) }}
                                </td>
                            </tr>
                        </table>

                        <p style="margin:25px 0 0;">
                            Our team will review your appointment and contact you shortly with the next steps.
                        </p>

                        <p style="margin:25px 0 0;">
                            Kind regards,<br>
                            <strong>Your Team</strong>
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color:#f1f5f9; padding:25px; text-align:center; font-size:12px; color:#64748b;">
                        <p style="margin:0;">
                            © {{ date('Y') }} Brainz Entertainment. All rights reserved.
                        </p>
                        <p style="margin:6px 0 0;">
                            This email was sent because you booked an appointment on our website.
                        </p>
                    </td>
                </tr>

            </table>
            <!-- End Email Container -->

        </td>
    </tr>
</table>

</body>
</html>
