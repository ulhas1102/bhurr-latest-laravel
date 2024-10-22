<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Enquiry</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 24px;
            color: #007bff;
        }

        .content {
            line-height: 1.6;
        }

        .content h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #343a40;
        }

        .content p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .content .btn {
            display: inline-block;
            margin-top: 20px;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Enquiry</h1>
        </div>
        <div class="content">
            <h2>Hello Admin,</h2>
            <p>You have received a new contact enquiry from your website. Here are the details:</p>
            <p><strong>Name:</strong> {{$contact->first_name}}</p>
            <p><strong>Email:</strong> {{$contact->email}}</p>
            <p><strong>Message:</strong> {{$contact->description}}</p>
            <a href="{{url('dashboard')}}" class="btn">View in Dashboard</a>
        </div>
        <div class="footer">
          	<p>&copy; 2024 <a href="https://www.bhurr.co.in/" target="_blank">https://www.bhurr.co.in/</a>. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
