<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#f4f6f8;">
    <tr>
        <td align="center" style="padding:30px 15px;">

            <!-- Main Container -->
            <table width="600" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#ffffff; border-radius:6px; overflow:hidden;">

                <!-- Header / Logo -->
                <tr>
                    <td align="center" style="padding:25px;">
                        <img src="https://yourdomain.com/logo.png"
                             alt="Your Company Logo"
                             width="150"
                             style="display:block; max-width:150px; height:auto;">
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:0 30px 30px; color:#333333; font-size:15px; line-height:1.6;">
                        <h2 style="color:#111111; font-size:20px; margin-top:0;">
                            Appointment Confirmed
                        </h2>

                        <p>Hello {{ $appointment->name }},</p>

                        <p>
                            Thank you for booking an appointment with us.
                            Below are your appointment details for your records:
                        </p>

                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="margin:20px 0;">
                            <tr>
                                <td style="padding:8px 0;"><strong>Email:</strong></td>
                                <td style="padding:8px 0;">{{ $appointment->email }}</td>
                            </tr>
                            <tr>
                                <td style="padding:8px 0;"><strong>Phone:</strong></td>
                                <td style="padding:8px 0;">{{ $appointment->phone }}</td>
                            </tr>
                            <tr>
                                <td style="padding:8px 0;"><strong>Purpose:</strong></td>
                                <td style="padding:8px 0;">
                                    {{ ucfirst(str_replace('_',' ', $appointment->topic)) }}
                                </td>
                            </tr>
                        </table>

                        <p>
                            Our team will review your request and get back to you shortly.
                        </p>

                        <p style="margin-bottom:0;">
                            Best regards,<br>
                            <strong>Your Team</strong>
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color:#f0f2f5; padding:20px; text-align:center; font-size:12px; color:#666666;">
                        <p style="margin:0;">
                            © {{ date('Y') }} Your Company Name. All rights reserved.
                        </p>
                        <p style="margin:5px 0 0;">
                            You are receiving this email because you booked an appointment with us.
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
