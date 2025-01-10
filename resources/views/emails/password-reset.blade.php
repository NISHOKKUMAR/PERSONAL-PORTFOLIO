<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        .button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        .footer {
            font-size: 12px;
            color: #888;
            text-align: center;
            margin-top: 40px;
        }

        .footer a {
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Password Reset Request</h1>

        <p>Hello,</p>

        <p>We received a request to reset your password. You can reset your password by clicking the button below:</p>

        <p><a href="{{ $url }}" class="button">Reset Password</a></p>

        <p>If you didn't request password reset, please ignore this email. Your password will remain unchanged.</p>

        <p>Thank you,</p>
        <p>The BlogByte Team</p>

        <div class="footer">
            <p>For any issues, please contact our support team at <a href="mailto:nishokkumarsrm@gmail.com">nishokkumarsrm@gmail.com</a></p>
        </div></a></p>
        </div>
    </div>

</body>
</html>
