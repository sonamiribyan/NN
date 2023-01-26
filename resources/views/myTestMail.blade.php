<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
 <h1>Approve</h1>
 @php
$token=$details['token']
 @endphp
 <h1>{{$token}} </h1>
 <a href="http://127.0.0.1:8000/verify?token={{$token}}">approve a link<a>
</body>
</html>