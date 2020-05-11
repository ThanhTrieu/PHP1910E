<?php
// can kiem tra xem du lieu tu form da dc gui len chua?
// kiem tra xem nguoi dung bam nut login
if(isset($_GET['btnLogin'])){
	$username = $_GET['user'] ?? '';
	$password = $_GET['pass'] ?? '';
	
	echo "user: {$username} - password: {$password}";
}