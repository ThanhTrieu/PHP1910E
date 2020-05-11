<?php
// thiet lap mui gio
date_default_timezone_set('Asia/Ho_Chi_Minh');

// xu ly ngay thang trong php
// 1- lay ra ngay thang hien tai trong php
$date = date("d-m-Y H:i:s"); // Y : lay full year - y : lay ra 2 chu so cuoi cung cua nam
//echo $date;
$today = "2020-05-11";
$yesterday = "2020-05-10";
// 3 -chuyen ngay thang ve so
$timeToday = strtotime($today);
$timeYesterday = strtotime($yesterday);
echo $timeToday;
echo "<br/>";
echo $timeYesterday;
echo "<br/>";

if($timeToday > $timeYesterday){
	echo "chinh xac";
} else {
	echo "sai";
}

// 4 - lay ra so giay dung thoi diem hien tai dang tiep dien
$time = time();
echo "<br/>";
echo $time;
// 5 - ding dang kieu du lieu date va datetime trong mysql
// 5.1 - date : mm-dd-yyyy (ko chap nhan bat ky dinh dang nao khac)
// 5.2 - datetime : mm-dd-yyy H:i:s

$currentMonth = date('m'); // m : number - M : string
echo "<br/>";
echo $currentMonth;

//6 - cong / tru ngay thang
$dateInt = mktime(0, 0, 0, 11, (20 + 12), 2019);
echo "<br/>";
echo $dateInt;
// 7 chuyen doi so giay(number) ra dinh dang chuoi ngay thang nam
$day = date('d-m-Y', $dateInt);
echo "<br/>";
echo $day;

echo "<br/>";
$testDay = date('d-m-Y', strtotime("-3days"));
echo $testDay;
