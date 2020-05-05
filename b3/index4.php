<?php
$infoStaf = [
	'101' => [
		'id' => 1,
		'name' => 'Van Teo',
		'Email' => 'vanteo@gmail.com'
	],
	'102' => [
		'id' => 2,
		'name' => 'Van Ty',
		'Email' => 'vanty@gmail.com'
	],
	'103' => [
		'id' => 3,
		'name' => 'Van Tu',
		'Email' => 'vantu@gmail.com'
	]
];
$rooms = [
	[
		'id' => 101,
		'name' => 'To chuc'
	],
	[
		'id' => 102,
		'name' => 'Hanh chinh'
	],
	[
		'id' => 103,
		'name' => 'IT'
	]
];

foreach ($rooms as $key => $room) {
	if(isset($infoStaf[$room['id']])){
		$infoStaf[$room['id']]['name_room'] = $room['name'];
	}
}

$categories = [
	[
		'id' => 1,
		'name' => 'Bong da',
		'parent_id' => 0,
	],
	[
		'id' => 2,
		'name' => 'Bong da anh',
		'parent_id' => 1
	],
	[
		'id' => 3,
		'name' => 'Thoi trang',
		'parent_id' => 0
	],
	[
		'id' => 4,
		'name' => 'Thoi trang Y',
		'parent_id' => 3
	]
];
// b1 : lay ra tat ca phan tu co parent_id = 0;
$data = []; // doi de lay du lieu vao day
foreach ($categories as $key => $val) {
	if($val['parent_id'] == 0){
		$data[$val['id']] = $val;
		$data[$val['id']]['sub_cat'] = [];
	}
}
echo "<pre>";
print_r($data);
// lay tat ca nhung thang aon vao ben trong