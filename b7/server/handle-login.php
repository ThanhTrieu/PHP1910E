<?php
session_start();

if(isset($_POST['btnLogin'])){
	$user = $_POST['user'] ?? '';
	$user = strip_tags($user); // xoa cac kys tu la ther html trong chuoi
	
	$pass = $_POST['pass'] ?? '';
	$pass = strip_tags($pass);
	
	$remember = $_POST['remember'] ?? '';
	
	// validate data
	if(empty($user) || empty($pass)){
		header("../login.php?state=empty");
	} else {
		// kiem tra user va password
		$fopen = fopen('data.txt','r');
		if($fopen){
			$data = fread($fopen, filesize('data.txt'));
			fclose($fopen);
			$arrDataUser = explode(',', $data);
			if($arrDataUser[0] === $user && $arrDataUser[1] === $pass){
				// tao ra session luu tru thong tin nguoi dung tren server
				$_SESSION['username'] = $user;
				// tao cookie
				if ($remember === 'on') {
					// set cookie trong vong 1h
					setcookie('T3H',"Login_user", time()+3600, "/", "", 0);
				} else {
					// set cookie trong vong 10s
					setcookie('T3H',"Login_user", time()+10, "/", "", 0);
				}
				// vao trang home
				header("Location: ../home.php");
			} else {
				header("../login.php?state=fail");
			}
		} else {
			header("../login.php?state=error");
		}
	}
}