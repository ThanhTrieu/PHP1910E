<?php
session_start();
require "data/shopping.php";
$products = getDataProduct();

$idProduct = $_GET['id'] ?? '';
$idProduct = is_numeric($idProduct) ? $idProduct : 0;

// lay ra san pham theo id nam trong mang $products
$data = [];
foreach ($products as $key => $val) {
	if($val['id'] == $idProduct){
		$data = $val;
	}
}
if(!empty($data)) {
	// tien hanh add san pham vao gio hang
	// kiem tra xem gio hang rong ko?
	if(isset($_SESSION['cart'])){
		// gio hang da co it nhat 1 san pham
		if(isset($_SESSION['cart'][$idProduct])){
			$_SESSION['cart'][$idProduct]['qty'] += 1;
		} else {
			$_SESSION['cart'][$idProduct]['id'] = $data['id'];
			$_SESSION['cart'][$idProduct]['name'] = $data['name'];
			$_SESSION['cart'][$idProduct]['image'] = $data['image'];
			$_SESSION['cart'][$idProduct]['price'] = $data['price'];
			$_SESSION['cart'][$idProduct]['qty'] = 1;
		}
	} else {
		// them moi san pham vao gio hang - tao gio hang
		$_SESSION['cart'][$idProduct]['id'] = $data['id'];
		$_SESSION['cart'][$idProduct]['name'] = $data['name'];
		$_SESSION['cart'][$idProduct]['image'] = $data['image'];
		$_SESSION['cart'][$idProduct]['price'] = $data['price'];
		$_SESSION['cart'][$idProduct]['qty'] = 1;
	}
	
	// sang trang xem gio hang
	header("Location: view-cart.php");
} else {
	header("Location: index.php?state=empty");
}