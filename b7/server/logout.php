<?php
session_start();
if(isset($_POST['btnLogout'])) {
	if (isset($_SESSION['username'])) {
		unset($_SESSION['username']);
	}
	// quay ve lai login
	header("Location: ../login.php");
}