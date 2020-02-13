<?php
	declare(strict_types=1); // giup thong bao loi khi code sai cu phap theo chuan php7 tro len
	// thong thuong se khai bao o dau file
	
	// dinh nghia ham trong php
	// ham do lap trinh vien tu dinh nghia
	// xay dung ham co the chay tren tat ca cac phien ban php khac nhau
	
	function sumNumber($number1 = 10, $number2 = 10)
	{
		// cu phap : keyword function + nameFunction (tham so neu co)
		return $number1 + $number2;
		// return tra ket qua ve cho ten ham va thoat khoi ham (cac cau lenh ben duoi se ko dc thuc thi)
	}
	
	// su dung ham
	// goi ten ham va truyen tham so vao neu co
	$sum = sumNumber(9,9);
	// echo $sum;
	
	// bien toan cuc va bien cuc bo
	$a = 10;
	function kiemTraChanLe()
	{
		// can khai bao cho ham biet $a la bien toan cuc
		global $a;
		$total = 100; // bien cuc bo
		// luu y: hay dat cau lenh nay ben tren cac lenh khac truoc khi goi bien do ra su dung
		if($a % 2 == 0) {
			return true;
		}
		
		return false;
	}
	var_dump(kiemTraChanLe());
	
	function checkStatic() {
		static $count = 0; // luu lai gia tri sau moi lan goi ham ra su dung
		$count++;
		echo $count;
		echo "<br/>";
	}
	checkStatic();
	checkStatic();
	checkStatic();
	checkStatic();
	echo "<br/>";
	
	/*********** Tham chieu - Tham tri ***********/
	$thamChieu = 10;
	function kiemTraThamchieu(&$tc)
	{
		$tc += 10;
		//echo $tc;
	}
	echo $thamChieu; // 10
	kiemTraThamchieu($thamChieu);
	echo "<br/>";
	echo $thamChieu; // 20
	echo "<br/>";
	
	$tc = 10;
	$tc+=10;
	$tt = &$tc;
	echo $tt;
	echo "<br/>";
	$s = 'php';
	$l = 's';
	echo $$l;
	echo "<br/>";
	// viet ham cho biet tu 1 -100 co bao nhieu so nguyen to
	// tach 2 ham : 1 ham kiem tra snt - 1 ham dem so nguyen to
	function kiemTraSoNguyenTo($a)
	{
		if($a <= 1){
			return false;
			//
		}
		if($a == 2){
			return true;
		}
		
		for ($i = 2; $i <= sqrt($a); $i++) {
			if($a % $i == 0){
				return false;
			}
		}
		return true;
	}
	
	function demSoNguyenTo($i, $j)
	{
		$count = 0;
		for ($k = $i; $k <= $j; $k++) {
			if(kiemTraSoNguyenTo($k)){
				$count++;
			}
		}
		return $count;
	}
	
	$dem = demSoNguyenTo(1, 100);
	echo $dem;
	echo "<br/>";
	
	// xay dung ham danh rieng cho phien ban php7 tro len
	// rang buoc kieu du lieu cua tham so truyen vao ham
	function chuViHCN(int $a, int $b)
	{
		return ($a+$b)*2;
	}
	$cv = chuViHCN(10, 2);
	//echo $cv;
	// rang buoc kieu du lieu ket qua ham tra ve
	function dienTichHT(int $a, int $b, float $h) : void
	{
		// ham bat buoc phai co return
		//$t = (($a+$b)*$h)/2;
		//$t = (string)$t;
		//return 100;
		echo 100;
	}
	$ht = dienTichHT(1,2,3);
	echo $ht;
	// viet ham theo chuan php 7 tim USCLN cua 120 va 300
	function timUSCLN(int $a, int $b) : int
	{
	
	}