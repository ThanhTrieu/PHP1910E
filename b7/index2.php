<?php
// lay cookie tu index.php tao ra
// su dung bien toan cuc kieu mang $_COOKIE
$cookie = $_COOKIE['LPHP1910'] ?? '';
echo "gia tri cookie la : {$cookie}";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>cookie</title>
</head>
<body>
	<a href="index3.php">Xoa cookie</a>
    <br>
    <a href="index.php">Tao moi lai cookie</a>
</body>
</html>
