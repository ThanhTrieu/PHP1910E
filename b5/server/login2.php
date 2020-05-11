<?php
// can kiem tra xem du lieu tu form da dc gui len chua?
// kiem tra xem nguoi dung bam nut login
if(isset($_REQUEST['btnLogin'])){
	$username = $_REQUEST['user'] ?? '';
	$password = $_REQUEST['pass'] ?? '';
	
	echo "user: {$username} - password: {$password}";
}