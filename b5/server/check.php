<?php
if(isset($_POST['btnCheck'])){
	$numberString = $_POST['numberString'] ?? '';
	if(empty($numberString)){
		// quay ve form nhap du lieu
		header("Location: ../index3.php?state=empty");
	} else {
		// chuyen chuoi ve mang
		$arrNumber = explode(',', $numberString);
		$result = '';
		foreach ($arrNumber as $key => $item) {
			if(kiemTraSoNguyenTo($item)){
				$result .= ($result == '') ? $item : ',' . $item;
			}
		}
		header("Location: ../index3.php?state=ok&result={$result}&input={$numberString}");
	}
}

function kiemTraSoNguyenTo($number)
{
	if($number <= 1){
		return false;
	} elseif ($number == 2) {
		return true;
	} else {
		for ($i = 2; $i <= sqrt($number); $i++) {
			if($number % $i == 0){
				return false;
			}
		}
		return true;
	}
}