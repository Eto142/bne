<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thank You for Your Registration</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f6f6f6; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" style="background: #ffffff; padding: 30px; border-radius: 8px;">
                    <tr>
                        <td>
                            <h2 style="color:#333;">
                                Hello {{ $registration->name }},
                            </h2>

                            <p style="color:#555; font-size:15px;">
                                Thank you for your interest in registering with
                                <strong>Brainz Nationz Entertainment</strong>.
                            </p>

                            <p style="color:#555; font-size:15px;">
                                We have successfully received your registration details and our team
                                is currently reviewing your submission.
                            </p>

                            <p style="color:#555; font-size:15px;">
                                <strong>Registered Email:</strong> {{ $registration->email }}
                            </p>

                            <p style="color:#555; font-size:15px;">
                                Once the review process is complete, we will get back to you with
                                the next steps and further information.
                            </p>

                            <p style="color:#555; font-size:15px;">
                                We appreciate your interest and look forward to connecting with you.
                            </p>

                            <p style="margin-top:30px; color:#777;">
                                Kind regards,<br>
                                <strong>Brainz Nationz Entertainment Team</strong>
                            </p>
                        </td>
                    </tr>
                </table>

                <p style="font-size:12px; color:#999; margin-top:15px;">
                    © {{ date('Y') }} Brainz Nationz Entertainment. All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
