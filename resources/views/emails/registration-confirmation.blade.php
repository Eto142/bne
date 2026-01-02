<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You for Your Registration</title>

    <style>
        /* Default (Light Mode) */
        body {
            background-color: #f6f6f6;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
        }

        h2 {
            color: #333333;
        }

        p {
            color: #555555;
            font-size: 15px;
            line-height: 1.6;
        }

        .footer-text {
            color: #777777;
            margin-top: 30px;
        }

        .copyright {
            font-size: 12px;
            color: #999999;
            margin-top: 15px;
        }

        /* Dark Mode Support */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #0f0f0f !important;
            }

            .container {
                background-color: #1a1a1a !important;
            }

            h2 {
                color: #ffffff !important;
            }

            p {
                color: #d1d1d1 !important;
            }

            .footer-text {
                color: #bbbbbb !important;
            }

            .copyright {
                color: #888888 !important;
            }
        }
    </style>
</head>

<body>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="container" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <h2>
                                Hello {{ $registration->name }},
                            </h2>

                            <p>
                                Thank you for your interest in registering with
                                <strong>Brainz Nationz Entertainment</strong>.
                            </p>

                            <p>
                                We have successfully received your registration details and our team
                                is currently reviewing your submission.
                            </p>

                            <p>
                                <strong>Registered Email:</strong> {{ $registration->email }}
                            </p>

                            <p>
                                Once the review process is complete, we will get back to you with
                                the next steps and further information.
                            </p>

                            <p>
                                We appreciate your interest and look forward to connecting with you.
                            </p>

                            <p class="footer-text">
                                Kind regards,<br>
                                <strong>Brainz Nationz Entertainment Team</strong>
                            </p>
                        </td>
                    </tr>
                </table>

                <p class="copyright">
                    © {{ date('Y') }} Brainz Nationz Entertainment. All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
