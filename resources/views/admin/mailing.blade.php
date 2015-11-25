<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family:'Helvetica'; font-size:17px">
Hello {{ $name }}
<br>
Click this link to verify your Jobstalker account
<br>
<a href="{{ url('user'.'/'.$username.'/'.'verify'.'/'.$token) }}">Click this link</a>
</body>
</html>