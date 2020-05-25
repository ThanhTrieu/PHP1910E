<?php
session_start();

$idCart = $_POST['id'] ?? '';
$idCart = is_numeric($idCart) ? $idCart : 0;

// xoa san pham trong gio hang
// kiem tra san pham can xoa co ton tai trong gio hang ko?
if(isset($_SESSION['cart'][$idCart])){
	unset($_SESSION['cart'][$idCart]);
	echo "ok";
} else {
	echo "fail";
}