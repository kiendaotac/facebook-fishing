<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        .body_bgi{
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1479837524808-8bfbd8b0ce8d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=b22b2ea6a3a81e7427dfe2a2ff2bac9d&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, serif;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }
    </style>
</head>
<body class="body_bgi">
<video autoplay muted loop id="myVideo">
    <source src="https://www.w3schools.com/howto/rain.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
</body>
</html>