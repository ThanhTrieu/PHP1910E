<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Send data by method get</title>
</head>
<body>
	<h1>Method GET</h1>
	<a href="index2.php?id=10&name=abc&age=20">send data</a>
	<br/><br/>
	<form action="server/login.php" method="get">
		<label>username:</label>
		<input type="text" name="user">
		<br><br>
		<label>password:</label>
		<input type="password" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
	<br><br>
	<h3>Login method post</h3>
	<form action="server/login2.php" method="post">
		<label>username:</label>
		<input type="text" name="user">
		<br><br>
		<label>password:</label>
		<input type="password" name="pass">
		<br><br>
		<button type="submit" name="btnLogin">Login</button>
	</form>
</body>
</html>
