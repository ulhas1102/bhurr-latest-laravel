<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Booking Form Submission - Thank You</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #ffffff;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
        }

        .header img {
            max-width: 150px;
        }

        .content {
            text-align: center;
        }

        .content h1 {
            font-size: 24px;
            color: #333333;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 16px;
            color: #666666;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 5px;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #999999;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <div class="header">
            <img src="https://www.bhurr.co.in/new-layouts/assets/image/logo/bhurr-logo.png" alt="Bhurr Logo">
        </div>
        <div class="content">
            <h1>Thank You for Contacting Us!!</h1>
            <p>Dear {{$specialBooking->name}},</p>
            <p> We appreciate your understanding and patience as we work to resolve
                your concerns. Thank you for choosing Bhurr!</p>
            <p>  For any further questions or support, feel free to reach out to us
                anytime. Your satisfaction is our priority!</p>
        </div>
       <div class="footer">
			<p>&copy; 2024 <a href="https://www.bhurr.co.in/" target="_blank">https://www.bhurr.co.in/</a>. All rights reserved.</p>
		</div>

    </div>

</body>

</html>
