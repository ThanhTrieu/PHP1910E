<?php
// tiep cac kien thuc ve mang php
// cac ham co san trong php

$infoStudent = [
	'name' => 'Van A',
	'age' => 20,
	'email' => 'test@gmail.com'
];
// chuyen key cua mang tu chu thuong sang chu hoa hoac nguoc lai
$infoStudent = array_change_key_case($infoStudent, CASE_UPPER);
// CASE_UPPER: hang so tuong duong truyen so 1 vao ham
// CASE_LOWER: hang so tuong duong truyen 0 vao ham
echo "<pre>";
//print_r($infoStudent);
$arrNumber = [1,1,1,2,2,2,3,4,5,6,2,3,4];
// dem so luong phan tu giong nhau trong - xem tra ket qua ve nhu the nao
$result = array_count_values($arrNumber);
//print_r($result);

// them phan tu 100 vao cuoi mang
array_push($arrNumber, 100);

// xoa phan tu o cuoi mang - tra ve chinh phan tu do
$lastElement = array_pop($arrNumber);
echo $lastElement;
echo "<br/>";

// them phan tu vua bi xoa vao dau mang
array_unshift($arrNumber, $lastElement);

// xoa phan tu vua them vao dau mang - tra ve phan tu do
$firstElement = array_shift($arrNumber);
echo $firstElement;
echo "<br/>";
print_r($arrNumber);

// tach mang thang cac mang con ben trong
$result = array_chunk($arrNumber, 3);
print_r($result);

echo "<br/>";
// kiem tra 1 bien co phai la mang ko?
if(is_array($result)){
	echo "oke";
} else {
	echo "err";
}
echo "<br/>";
// kiem tra 1 phan tu co nam trong mang hay ko?
$arrValue = [1,2,3,4,5,6,7,8,9];
if(in_array(5, $arrValue)){
	echo "Yes";
} else {
	echo "No";
}
echo "<br/>";

// kiem tra key - (chi so - index) co ton tai trong mang ko?
$fruits = [
	'name' => 'Tao',
	'color' => 'red'
];
if(array_key_exists('name', $fruits)){
	echo "Y";
} else {
	echo "N";
}
echo "<br/>";

// loai bo cac phan tu giong nhau trong mang - tra ve mang moi chua cac phan tu ko trung lap
$arrNumber2 = [1,1,1,2,2,2,3,4,5,6,2,3,4];
$arrUnique = array_unique($arrNumber2);
print_r($arrUnique);

// chuyen mang khong tuan tu ve mang tuan tu
$fruits = array_values($fruits);
// key cua mang ko con la name va color nua -  se chuyen ve so
print_r($fruits);

// tinh tong cac phan tu nam trong mang
$arrNumber3 = [1,2,3,4,5,6,7,8,9];
$sum = array_sum($arrNumber3);
echo $sum;
echo "<br/>";

// cat - tach - trich xuat mang con tu mang ban dau
$child = array_slice($arrNumber3,4, 3);
print_r($child);
echo "<br/>";
// kiem tra so luong phan tu trong mang
echo count($child);
echo "<br/>";

// thay the phan tu trong mang
array_splice($arrNumber3, 3, 3, [100,200,300]);
print_r($arrNumber3);

// ham end - tra ve phan tu cuoi cung cua mang nhung ko xoa phan tu do ra khoi mang
// https://vnexpress.net/chu-toa-vu-ho-duy-hai-khong-lam-oan-sai-bo-lot-toi-pham-4095218.html
// viet ham boc tach lay id bai viet tu url
function getIdPostsFromUrl($url)
{
	// chuyen chuoi ve mang
	$arrUrl = explode('-', $url);
	$strId = end($arrUrl); // 4095218.html
	$id = intval($strId);
	return $id;
}
$url = "https://vnexpress.net/chu-toa-vu-ho-duy-hai-khong-lam-oan-sai-bo-lot-toi-pham-4095218.html";
$id = getIdPostsFromUrl($url);
echo $id;
echo "<br/>";

// sap xep mang
// sap theo gia tri : asort - arsort
$random = [99,1,2,3,90,20,40,3,4,5,21];
//arsort($random); // giam dan
asort($random); // tang dan
print_r($random);

$sport = ['bong da', 'cau long', 'boi loi', 'dua xe', 'co vua'];
arsort($sport); // giam dan - theo bang chu cai tieng anh
print_r($sport);

// sap xep theo key - chi so cua mang
$covid = [
	'nhiem' => 122323,
	'khoi' => 212434,
	'chet' => 0
];
krsort($covid);
print_r($covid);

// sap xep mang ko dung ham.
$random2 = [99,1,2,3,90,20,40,3,4,5,21];
function sapXepMang($arr = []) {
	// foreach
	foreach ($arr as $key => $val) {
		foreach ($arr as $key2 => $val2) {
			if($arr[$key] > $arr[$key2]){
				$tmp = $arr[$key];
				$arr[$key] = $arr[$key2];
				$arr[$key2] = $tmp;
			}
		}
	}
	return $arr;
}
$kq = sapXepMang($random2);
print_r($kq);
// tim so lon nhat va nho nhat trong mang random 2
$arr1 = [1,2,3,4,5,6,7,8,9];
$arr2 = [1,2,3,4,5,6,7,8,9];
// viet ham tinh tong cua cac so le o mang 1 cong voi cac so chan o mang 2
function ghepSo($array1, $array2) {
	$result = [];
	foreach ($array1 as $key => $val) {
		foreach ($array2 as $key2 => $val2) {
			$num = (int)($val.$val2);
			if($num % 2 === 0 ){
				//array_push($result, $num);
				$result[] = $num;
			}
		}
	}
	return $result;
}
$k = ghepSo($arr1, $arr2);
print_r($k);