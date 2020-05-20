<?php
	session_start();
	require "checklogin.php";
	if (loginUser()) {
		header("Location: home.php");
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>login</title>
</head>
<body>
	<form action="server/handle-login.php" method="post">
		<label>username</label>
		<input type="text" name="user"/>
		<br>
		<label>Password</label>
		<input type="password" name="pass" />
		<br>
		<label>remember</label>
		<input type="checkbox" name="remember">
		<br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>
