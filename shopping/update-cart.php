<?php
session_start();
$id = $_POST['id'] ?? ''; // id san pham trong  cart
$id = is_numeric($id) ? $id : 0;

$qty = $_POST['qty'] ?? ''; // so luong mua cua tung san pham trong cart
$qty = is_numeric($qty) && ($qty > 0 && $qty <= 10) ? $qty : 0;

if($id == 0 || $qty == 0){
	// ko cho update
	echo "fail";
} else {
	// tien hanh cap nhat lai so luong san pham trong cart
	// kiem tra san pham can cap nhat co ton tai trong cart ko ?
	if(isset($_SESSION['cart'][$id])){
		// se dc cap nhat
		$_SESSION['cart'][$id]['qty'] = $qty;
		// tra ve thanh tien de view ra ngoai giao dien
		$money = number_format($_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price']);
		
		// tinh tong tien
		$totalMoney = 0;
		foreach ($_SESSION['cart'] as $key => $item) {
			$totalMoney += ($item['qty'] * $item['price']);
		}
		
		echo json_encode([
			'id' => $id,
			'money' => $money,
			'qty' => $qty,
			'totalMoney' => number_format($totalMoney)
		]);
	} else {
		echo 'fail';
	}
}
