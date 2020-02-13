<?php
	// cac toan tu va phep toan trong php
	$a = 10;
	$b = $d ?? 11; // isset($d) ? $d : 11;
	$c = $a + $b ;
	echo $c;
	// toan tu nay chi lam viec voi phien ban php 7.0 tro len
	echo "<br/>";
	
	$x = 10;
	$y = 10;
	$z = $x <=> $y;
	echo $z;
	// ket qua tra ve la 1 : thi bieu thuc ben tay trai lon hon bieu thuc ben tay phai
	// ket qua tra ve la -1 : thi bieu thuc ben tay trai nho hon bieu thuc ben tay phai
	// ket qua tra ve la 0 : thi 2 bieu thuc bang nhau
	echo "<br/>";
	$check = 100;
	//$t = 'wewe56767';
	//$t = (int)$t;
	if($check == '100'){
		echo "yes";
	} elseif($check == '99') {
		echo "No";
	} elseif ($check == '88') {
		echo 'A';
	} else {
		echo 'B';
	}
	$month = 1;
	switch ($month) {
		case 1:
			// do something
			break;
		case 2:
			///
			break;
		default:
			//
	}
	// for
	for($i = 1; $i <= 10; $i++){
		echo $i . "<br/>";
	}
	// while
	$j = 10;
	while ($j < 30) {
		echo $j;
		$j++;
	}
//	while (true){
//
//	}
	// do ... while
	do {
		echo $j . "<br/>";;
		$j++;
	} while($j < 20);
	// dung do..while lay ra cac so chan tu 1 - 100;
	$k = 1;
	do {
		if($k % 2 == 0){
			echo $k . "<br/>";
		}
		$k++;
	}while($k <= 100);
	
	$t = 10;
	$v = 9;
	$u = ($t++) + (++$v) - (++$t) - (--$v) + ($v--);
	//     10    +  10   -   12    -  9    +   9
	echo $u;
	// 9
	//echo  10    +  10   -   12    -  9    +   9;
