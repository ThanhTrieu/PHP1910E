<?php
// khoi dong lai session
session_start();
// xoa cac session da duoc tao ra
// xoa tat session
// session_destroy();
// xoa tung session
if(isset($_SESSION['username']) && isset($_SESSION['email'])) {
	unset($_SESSION['username']);
	unset($_SESSION['email']);
}
// quay ve trang session2.php
header("Location: session2.php");