<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Booking Confirmed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        /* LIGHT MODE (Fallback / Default for unsupported clients) */
        body {
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            font-family: Arial, Helvetica, sans-serif;
        }

        .wrapper {
            background-color: #f3f4f6;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
        }

        .body-text {
            color: #374151;
            font-size: 15px;
            line-height: 1.8;
        }

        .heading {
            color: #111827;
        }

        .muted {
            color: #6b7280;
        }

        .card {
            background-color: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
        }

        .footer {
            background-color: #f9fafb;
            color: #6b7280;
            font-size: 12px;
        }

        /* DARK MODE */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #0b0b0f !important;
            }

            .wrapper {
                background-color: #0b0b0f !important;
            }

            .container {
                background-color: #111827 !important;
                box-shadow: 0 15px 40px rgba(0,0,0,0.6);
            }

            .body-text {
                color: #e5e7eb !important;
            }

            .heading {
                color: #ffffff !important;
            }

            .muted {
                color: #9ca3af !important;
            }

            .card {
                background-color: #020617 !important;
                border: 1px solid #27272a !important;
            }

            .footer {
                background-color: #020617 !important;
                color: #9ca3af !important;
            }
        }
    </style>
</head>

<body>
<table width="100%" cellpadding="0" cellspacing="0" role="presentation" class="wrapper">
    <tr>
        <td align="center" style="padding:40px 15px;">

            <!-- Container -->
            <table width="600" cellpadding="0" cellspacing="0" role="presentation" class="container">

                <!-- Header -->
                <tr>
                    <td align="center" style="padding:35px;
                        background:linear-gradient(135deg,#7c3aed,#ec4899);">

                        <img src="{{ asset('assets/images/logo.png') }}"
                             alt="Brainznation Entertainment"
                             width="150"
                             style="display:block; max-width:150px; height:auto;">

                        <p style="margin:15px 0 0; font-size:12px; letter-spacing:2px; color:#fdf4ff;">
                            RECORDING • PRODUCTION • CREATIVE
                        </p>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:40px;" class="body-text">

                        <h1 class="heading" style="margin:0 0 15px; font-size:26px;">
                            Session Booking Confirmed
                        </h1>

                        <p style="margin:0 0 18px;">
                            Hello <strong>{{ $booking->name }}</strong>,
                        </p>

                        <p class="muted" style="margin:0 0 30px;">
                            Your session booking has been successfully received by our studio team.
                            We’re preparing the next steps to get everything locked in.
                        </p>

                        <!-- Divider -->
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td style="border-top:1px solid #e5e7eb; padding:20px 0;"></td>
                            </tr>
                        </table>

                        <!-- Session Details -->
                        <table width="100%" cellpadding="0" cellspacing="0" role="presentation" class="card">
                            <tr>
                                <td style="padding:22px;">

                                    <p style="margin:0 0 12px; font-size:13px; letter-spacing:1px; color:#8b5cf6;">
                                        SESSION DETAILS
                                    </p>

                                    <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                                        <tr>
                                            <td style="padding:8px 0; width:140px;" class="muted">
                                                Session Type
                                            </td>
                                            <td style="padding:8px 0;">
                                                <strong>{{ ucfirst(str_replace('_',' ', $booking->service)) }}</strong>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>

                        <p class="muted" style="margin:30px 0 0;">
                            A member of our studio team will contact you shortly to confirm scheduling
                            and any additional requirements.
                        </p>

                        <p style="margin:30px 0 0;">
                            Best regards,<br>
                            <strong>Your Studio Team</strong>
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td class="footer" style="padding:25px; text-align:center;">
                        <p style="margin:0;">
                            © {{ date('Y') }} Brainznation Entertainment. All rights reserved.
                        </p>
                        <p style="margin:8px 0 0;">
                            This email confirms receipt of your session booking request.
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
