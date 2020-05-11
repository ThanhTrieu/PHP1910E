<?php
// nhan du lieu tu index truyen sang qua method get
// data se xuat hien tren url cua trinh duyet - lay du lieu xuong
// php se ho tro mot bien kieu mang (toan cuc)
// $_GET
$id = $_GET['id'] ?? ''; // isset($_GET['id']) ? $_GET['id'] : '';
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
echo "id - {$id} / name - {$name} / age - {$age}";