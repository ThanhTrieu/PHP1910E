<?php
// khai bao va xu ly chuoi trong php
// kieu du lieu : string
$myString = 'Dang hoc php';
$myString2 = "Dang hoc php basic";
// cu phap noi chuoi - ghep chuoi
echo $myString . $myString2;
$number = 10;
echo "<br/>";
$myString3 = "{$number} la so chan";
echo "<br/>";
$myString4 = $number . 'la so chan';
echo "<br/>";

$myString5 = 'Hien dang co dich cum \'NOVC-91\' ';
$myString6 = "Hien dang co dich cum \"NOVC-91\" ";
$myString7 = "Hien dang co dich cum 'NOVC-91' ";
echo $myString5;
echo "<br/>";
// khai niem number string : trong chuoi chi chua so
$n1 = '10';
$n2 = 10;
echo $n1+$n2;

/*************** Cac ham xu ly ve chuoi ************************/
// 1 - chuyen chuoi ve mang
$fruit = 'tao,oi,le';
$arrFruit = explode(',', $fruit);
print_r($arrFruit);
// 2 chuyen mang ve chuoi
$strFruit = implode($arrFruit, '*');
echo $strFruit;
echo "<br/>";
// 3 dem ki tu nam trong chuoi
$countLeng = strlen($fruit);
echo $countLeng;
echo "<br/>";
$str = 'Học php buổi tối';
echo strlen($str);
echo "<br/>";
echo mb_strlen($str);

echo "<br/>";
$str2 = "Dang hoc php - hoc php basic";
// dem so tu nam trong chuoi
echo str_word_count($str2);
echo "<br/>";
// lap chuoi
// echo str_repeat($str2, 3);
// thay the chuoi
echo "<br/>";
echo str_replace('php', 'nodejs', $str2);
// ma hoa chuoi
echo "<br/>";
$password = 'khong co dau';
echo md5($password);
echo "<br/>";
$html = "<script>alert('hi')</script>";
$htmlText = htmlentities($html);
//echo html_entity_decode($htmlText);

$title = "<h1><u><i>Hello you</i></u></h1>";
echo strip_tags($title);
echo "<br/>";
// cat chuoi tu mot vi tri cho truoc va cat ra bao nhieu ky tu
$newPass = substr($password, 3, 3);
echo $newPass;

$title2 = "Sinh vien van duoc nghi hoc vi co dich cum";
echo "<br/>";
echo strstr($title2, 'nghi');

echo "<br/>";
if(strpos($title2, 'hoc') !== false){
	// tim thay
	echo strpos($title2, 'hoc'); // vi tri
} else {
	echo "Khong thay";
}
echo "<br/>";
$title3 = "*Sap het dich cum roi*";
//echo trim($title3);
//echo ltrim($title3, '*');
echo rtrim($title3, '*');
echo "<br/>";
$title4 = 'abcefg';
echo $title4[0];