<?php
//echo "doi 1 chut de chuyen sang trang home";
//sleep(5);
// dieu huong - di chuyen trang
// header("Location: home.php");
// trong doan code php mh can hien thi du lieu ra ngoai trinh duyet
// ho tro dinh dang cac ky tu utf8
header('Content-Type: text/html; charset=utf-8');

// dung ham filter_var de kiem tra tinh hop le cua du lieu
// 1 - kiem tra email

echo "<br/>";
$email = "test@abc.com.vn";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "dung dinh dang email";
} else {
	echo "Khong phai dinh dang email";
}
echo "<br/>";
$url = "http://abc.com.vn";
if(filter_var($url, FILTER_VALIDATE_URL)){
	echo "dung dinh dang url";
} else {
	echo "khong phai url";
}
echo "<br/>";
$url2 = "http://abc^&*$%#!~({})[]âuw ơ ợ ố ô .com.vn";
// loai bo di nhung ky tu bat hop le trong url2 nay
$newUrl = filter_var($url2, FILTER_SANITIZE_URL);
echo $newUrl;
echo "<br/>";

$numberString = "-abc100abc";
$newNumber = filter_var($numberString, FILTER_SANITIZE_NUMBER_INT);
echo $newNumber;