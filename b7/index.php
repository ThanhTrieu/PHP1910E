<?php
	// tao ra cookie
	setcookie('LPHP1910', 'T3H_PHP',time() + 60, "/", "" , 0);
	// tham so 1 : ten cua cookie
	// tham so 2 : gia tri cua cookie
	// tham so 3 : thoi gian song cua cookie
	// tham so 4: chi ra duong dan ma cookie co hieu luc
	// 0: http - 1 : https
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cookie</title>
</head>
<body>
	<a href="index2.php">sang trang index2 de lay cookie cua index</a>
</body>
</html>
