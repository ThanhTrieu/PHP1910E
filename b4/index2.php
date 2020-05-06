<?php
// mo file
$file = fopen('../data/test.txt', 'a+');
if($file){
	//echo "mo file thanh cong";
	// doc du lieu nam trong file -  doc tu dau file den cuoi file
	// filesize : kic thuoc cua file
	$news = "hi you 123";
	fwrite($file, $news);
	
	// doc du lieu ra
	$file2 = fopen('../data/test.txt', 'r');
	$data = fread($file2, filesize('../data/test.txt'));
	// dong file
	fclose($file);
	fclose($file2);
	
	echo $data;
} else {
	echo "khong mo duoc file";
}