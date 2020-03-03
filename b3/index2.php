<?php
	// cac kien thuc ve mang trong php
// mang 1 chieu - mang tuan tu
$number = [1,2,3,4,5,6,7,8,9];
// in mang dang cay thu muc
echo "<pre>";
print_r($number);
// mang 1 chieu - mang khon tuan tu
$fruit = [
	'name' => 'apple',
	'color' => 'red',
	'wieght' => 3
];
print_r($fruit);
// mang da chieu
$students = [
	[
		'name' => 'Van Teo',
		'age' => 20,
		'money' => [100,200,300]
	],
	[
		'name' => 'Van Ty',
		'age' => 21,
		'work' => [
			['name_w' => 'abc', 'm' => 100],
			['name_w' => 'xyz', 'm' => 200]
		]
	]
];
print_r($students);
// cach truy cap vao 1 phan tu nam trong mang
echo $number[6];
echo "<br/>";
echo $fruit['name'];
echo "<br/>";
echo $students[1]['name'];
echo "<br/>";
// truy cap vao cac phan tu trong mang
// 1 - for ...
$countEl = count($number);
for ($i = 0; $i < $countEl; $i++) {
	echo $number[$i];
	echo "<br/>";
}
// 2 - foreach
foreach ($number as $k => $item) {
	echo "key - {$k} : value - {$item}";
	echo "<br/>";
}
