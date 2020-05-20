<?php
	// khoi dong session
	session_start();
	// lay gia tri session tu file session1 tao ra
	$user = $_SESSION['username'] ?? ''; // nen kiem tra ton tai hay ko
	$email = $_SESSION['email'] ?? '';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>session</title>
</head>
<body>
	<h1>hello <?= $user; ?> - Email : <?php echo $email; ?></h1>
	<a href="session3.php">Xoa session</a>
	<br>
	<a href="session1.php">Quay ve session1</a>
</body>
</html>
