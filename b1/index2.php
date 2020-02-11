<?php
	echo "learning php";
	// khai bao bien
	// su dung ky tu $ dat truoc ten bien
	// bien trong php khong duoc bat dau bang so
	// ki tu $ khong duoc phep co khoang trang dung ngay sau
	// vi du cac bien khai bao sai:
	//$1myName = 'ABC'; // sai
	//$ myname = 'ADASD'; // sai
	echo "<br/>";
	$nameClass = "LPHP1910E";
	echo $nameClass;
	echo "<br/>";
	
	$hello = "Hi you";
	$hi = "hello";
	echo $$hi; //Hi you : tham chieu den gia tri cua bien khac
	// $$ khong phai la cu phap de khai bao bien
	
	// dinh nghia hang so
	// 1 - su dung tu khoa define
	define('PI', 3.14);
	define('NAME_SCHOOL', 'HAUI');
	// su dung hang so
	echo "<br/>";
	echo NAME_SCHOOL; // khong co ki tu $ dung truoc
	// 2 - su dung tu khoa const
	const MY_ADDRESS = 'Ha Noi';
	echo "<br/>";
	// kiem tra xem hang so co ton tai ko?
	if(defined('MY_ADDRESS')){
		echo "yes";
	} else {
		echo "no";
	}