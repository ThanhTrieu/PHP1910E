<?php
// kieu du lieu trong php
// 1 - integer (int) : so nguyen
$myNumber = 100;
// trong php khong quy dinh san kieu du lieu cho bien, bien chi nhan kieu du lieu khi dc gan gia tri
// kiem tra kieu du lieu cua bien
// - su dung ham gettype
echo gettype($myNumber); // tra ve kieu du lieu - khong in ra gia tri
echo "<br>";
var_dump($myNumber); // in ra kieu du lieu va gia tri

// 2 - boolean (bool)
$checking = true;
$flagCheck = false;
echo "<br>";
echo gettype($flagCheck);

// 3 - float and double
$pi = 3.14;
echo "<br>";
var_dump($pi);

// 4 - string
$string = 'Dang hoc php co ban';
echo "<br>";
echo gettype($string);

// 5 - null
$myAge = null;
echo "<br>";
echo gettype($myAge);
echo "<br>";

/**************** Cac ham xu ly ve bien *********************/
// 1- settype : chuyen doi kieu du lieu
$number = 200;
settype($number, 'string');
echo gettype($number);
echo "<br>";

$number2 = 300;
$number2 = (string)$number2; // muon cua ngon ngu c/c++
echo gettype($number2);
echo "<br>";

$money = 100.101; // lay ra phan nguyen
//echo intval($money);
echo strval($money);
echo "<br>";

$idPost = "100abc";
//echo intval($idPost);
echo strval($idPost);
echo "<br>";
// kiem tra bien rong
//$myCharater = '';
//$myCharater = false;
//$myCharater = 0;
$myCharater = '0';
if(empty($myCharater)){
	echo 'ok';
} else {
	echo 'error';
}
// kiem tra xem bien co ton tai hay ko?
if(isset($myCharater)){
	echo 'ton tai';
} else {
	echo 'chua ton tai';
}

// true == 1 ve mat gia tri
$test = true;
if($test === 1){
	echo "dung";
}

