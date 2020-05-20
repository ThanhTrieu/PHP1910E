<?php
	// khoi tao session
	session_start();
	// tao ra session
	// su dung bien toan cuc kieu mang $_SESSION
	$_SESSION['username'] = 'admin';
	$_SESSION['email'] = 'test@gmail.com';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Session</title>
</head>
<body>
	<a href="session2.php">sang session 2 lay gia tri session 1 tao ra</a>
 
</body>
</html>
