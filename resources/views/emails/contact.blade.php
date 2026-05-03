<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #f5f5f5;
            padding: 20px;
            margin-bottom: 20px;
        }

        .content {
            padding: 20px 0;
        }

        .footer {
            color: #666;
            font-size: 12px;
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
        </div>

        <div class="content">
            <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
            <p><strong>Email:</strong> {{ $contactData['email'] }}</p>

            <h3>Message:</h3>
            <p>{{ nl2br($contactData['message']) }}</p>
        </div>

        <div class="footer">
            <p>{{ config('app.name') }}</p>
        </div>
    </div>
</body>

</html>