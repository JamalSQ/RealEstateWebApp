<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to [Your Company Name]</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .email-header h1 {
            color: #333;
            font-size: 24px;
            margin: 0;
        }

        .email-body {
            font-size: 16px;
            line-height: 1.5;
        }

        .email-footer {
            text-align: center;
            font-size: 14px;
            margin-top: 30px;
            color: #777;
        }

        .email-footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <div class="email-header">
            <h1>Welcome to JSQ Real Estate Website</h1>
        </div>

        <div class="email-body">
            <p>Hello {{ $name }},</p>
            <p>Congratulations! Your account has been successfully created at <strong>JSQ Real Estate Website</strong>.</p>
            <p>We're excited to have you on board. You can now log in to your account and start exploring the services we offer.</p>

            <p><strong>Your account details:</strong></p>
            <ul>
                <li><strong>Username:</strong> {{ $name }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
            </ul>

            <p>If you did not create this account, please contact us immediately at <a href="mailto:dummyemail@gmail.com">here</a>.</p>

            <a href="#" class="button">Visit Our Website</a>
        </div>

        <div class="email-footer">
            <p>Thank you for joining <strong>JSQ Real Estate Website</strong>!</p>
            <p><a href="#">JSQ Real Estate Website</a></p>
        </div>
    </div>
</body>

</html>