<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email SetUp</title>
</head>
<body>
<h1>Dear <span>{{ $details['name'] }}</span></h1>
<p>We are Requesting you to verify your email Address please click below Link to verify your Account</p>
<a href="http://127.0.0.1:8000/auth/verify/{{ $details['token'] }}/{{ $details['HashEmail'] }}">Verify Here</a>
<br><br><br>
<h1>Thank You</h1>

</body>
</html>
