<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Registration</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f6f6f6; padding: 20px;">
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table width="600" style="background: #ffffff; padding: 30px; border-radius: 8px;">
                    <tr>
                        <td>
                            <h2 style="color:#333;">New Registration Alert</h2>

                            <p style="color:#555; font-size:15px;">
                                A new user has registered on the platform.
                            </p>

                            <hr style="margin:20px 0;">

                            <p><strong>Name:</strong> {{ $registration->name }}</p>
                            <p><strong>Email:</strong> {{ $registration->email }}</p>

                            <p style="margin-top:30px; color:#777;">
                                Please log in to the admin dashboard for more details.
                            </p>
                        </td>
                    </tr>
                </table>

                <p style="font-size:12px; color:#999; margin-top:15px;">
                    System Notification – Brainz Nationz Entertainment
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
