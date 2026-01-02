<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin:0; padding:0; background-color:#0b0b0f; font-family:Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#0b0b0f;">
    <tr>
        <td align="center" style="padding:40px 15px;">

            <!-- Container -->
            <table width="600" cellpadding="0" cellspacing="0" role="presentation"
                   style="background-color:#111827; border-radius:12px; overflow:hidden; box-shadow:0 15px 40px rgba(0,0,0,0.6);">

                <!-- Header -->
                <tr>
                    <td align="center" style="padding:35px;
                        background:linear-gradient(135deg,#7c3aed,#ec4899);">

                        <img src="{{ asset('assets/images/logo.png') }}"
                             alt="Brainznation Entertainment"
                             width="150"
                             style="display:block; max-width:150px; height:auto;">

                        <p style="margin:15px 0 0; font-size:12px; letter-spacing:2px; color:#fdf4ff;">
                            MUSIC • CREATIVE • CULTURE
                        </p>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:40px; color:#e5e7eb; font-size:15px; line-height:1.8;">

                        <h1 style="margin:0 0 15px; font-size:26px; color:#ffffff;">
                            Appointment Confirmed
                        </h1>

                        <p style="margin:0 0 18px;">
                            Hello <strong style="color:#f9fafb;">{{ $appointment->name }}</strong>,
                        </p>

                        <p style="margin:0 0 30px; color:#d1d5db;">
                            Thank you for booking an appointment with <strong>Brainznation Entertainment</strong>.
                            Your request has been successfully received and logged by our team.
                        </p>

                        <!-- Divider -->
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td style="border-top:1px solid #27272a; padding:20px 0;"></td>
                            </tr>
                        </table>

                        <!-- Appointment Details -->
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation"
                               style="background-color:#020617; border-radius:10px; border:1px solid #27272a;">
                            <tr>
                                <td style="padding:22px;">

                                    <p style="margin:0 0 12px; font-size:13px; letter-spacing:1px; color:#a78bfa;">
                                        APPOINTMENT DETAILS
                                    </p>

                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                        <tr>
                                            <td style="padding:8px 0; width:120px; color:#9ca3af;">Email</td>
                                            <td style="padding:8px 0; color:#f9fafb;">{{ $appointment->email }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:8px 0; color:#9ca3af;">Phone</td>
                                            <td style="padding:8px 0; color:#f9fafb;">{{ $appointment->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:8px 0; color:#9ca3af;">Purpose</td>
                                            <td style="padding:8px 0; color:#f9fafb;">
                                                {{ ucfirst(str_replace('_',' ', $appointment->topic)) }}
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>

                        <p style="margin:30px 0 0; color:#d1d5db;">
                            Our team will review your appointment and reach out shortly with confirmation details
                            or next steps.
                        </p>

                        <p style="margin:30px 0 0;">
                            Best regards,<br>
                            <strong style="color:#ffffff;">Brainznation Entertainment</strong>
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="padding:25px; text-align:center; background-color:#020617; font-size:12px; color:#9ca3af;">
                        <p style="margin:0;">
                            © {{ date('Y') }} Brainznation Entertainment. All rights reserved.
                        </p>
                        <p style="margin:8px 0 0;">
                            This email was sent because you booked an appointment on our website.
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
