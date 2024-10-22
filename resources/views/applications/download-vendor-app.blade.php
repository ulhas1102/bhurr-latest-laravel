<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendor App - Bhurr Technologies</title>
	<link rel="shortcut icon" href="../assets/image/logo/Favicon17x17.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Open Sans', 'sans-serif';
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f4f4f4;
    }

    ul {
      list-style-type: none;
      display: flex;
      justify-content: center;
    }

    li {
      margin: 10px;
    }

    .download {
      width: 200px;
      height: 75px;
      background: black;
      display: flex;
      align-items: center;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      border: 1px solid #fff;
      text-decoration: none;
      transition: background 0.3s ease;
    }

    .download > .fa {
      margin-left: 15px;
      font-size: 2em;
    }

    .df,
    .dfn {
      margin-left: 20px;
      text-align: left;
    }

    .df {
      font-size: 0.68em;
      line-height: 1.2em;
    }

    .dfn {
      font-size: 1.08em;
      line-height: 1.5em;
    }

    .download:hover {
      background-color: #333;
      transition: 0.3s;
    }
  </style>
</head>
<body>
<ul>
  <li>
    <a class="download android" href="{{ asset('applications/vendor_app.apk') }}" download>
      <i class="fa fa-android"></i>
      <div>
        <span class="df">Click To Download</span>
        <span class="dfn">Vendor App</span>
      </div>
    </a>
  </li>
</ul>
</body>
</html>
