<?php
// cac kien thuc ve bieu thuc chinh quy : regular expression
// Biểu thức chính quy là một chuỗi mô tả một bộ các chuỗi khác, theo quy tắc cú pháp nhất định
$string = "chung ta dang hoc php co ban";
// tu php co nam trong chuoi ko chang han?
// so khop - so sanh chuoi "php" thoa man dieu kien nao do cua chuoi "chung ta dang hoc php co ban"

// viet bieu thuc chinh quy kiem tra dieu kien dua ra
$expression = '/php/'; // bat buoc nam trong /noi_dung_BTCQ/

// viet bieu thuc chinh quy kiem tra "php" co bat dau o trong chuoi "chung ta dang hoc php co ban";
$expression2 = '/^php/';
$expression3 = '/php$/';

$string2 = "c";
$exp1 = "/^c$/";
$string3= 'aab';
$exp3 = '/^[a-z]{3}+$/';
$stringNumber = "123";
$exp4 = '/^[0-9]+$/';

$strNum = '123';
$exp5 ='/^[1-9]{1}[0-9]{1}[^1,3,5,7,9]{1}$/';

// kiem tra chuoi so co phai la so dien thoai cua nha mang viettel ko
$phone = '0975091304';
// \d ~~ [0-9]
$btcq = '/^[0](9[6-8]|3[2-9])\d{7}$/';
// kiem tra trong chuoi co the mo cua the html hay the dong noa do hay ko
$html = "Toi dang hoc <strong>sas</strong>php co ban";
$chkTagHtml = '/<.*?>|<\/.*?>/';
// viet bieu thuc chinh quy kiem tra dinh dang ngay thang
// dd/mm/yyyy
$date = "30/02/2020";
$checkDate = '/(0[1-9]|[1-2]\d|3[0-1])\/(0[1-9]|1[0-2])\/(\d{1,})/';

// preg_match - kiem tra bieu thuc chinh quy
if(preg_match($checkDate, $date, $match)){
	echo "Thoa man dieu kien";
	echo "<pre>";
	print_r($match);
	
	$day = (int)$match[1];
	$month = (int)$match[2];
	$year = (int)$match[3];
	if($month === 2){
		if($day === 29) {
			// kiem tra nam
			if($year % 400 == 0){
				echo "Dung dinh dang";
			} elseif ($year % 4 == 0 && $year % 100 !== 0) {
				echo "Dung dinh dang";
			} else {
				echo "khong dung dinh dang";
			}
		} elseif ($day > 29) {
			echo "Sai dinh dang";
		} else {
			echo "Dinh dang dung";
		}
	}
} else {
	echo "Khong thoa man dieu kien";
}

$bienSoXe = "19P1-523.62";
$chkBienSoXe = '/^(1[1-9]|[2-9]\d)([P,C,L,G]1)-\d{3}\.\d{2}$/';

echo "<br/>";
if(preg_match($chkBienSoXe, $bienSoXe, $match)){
	echo "Bien so xe dung dinh dang";
	echo "<pre>";
	print_r($match);
}
// viet bieu thuc chinh quy kiem tra - do manh yeu cua mat khau :
// mk tu 8 ki tu tro len, it nhat 1 chu hoa, it nhat 1 chu thuong, 1 nhat 1 chu so