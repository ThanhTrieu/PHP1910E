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
	],
	[
		'id' => 5,
		'name' => 'Bong da Phap',
		'parent_id' => 1
	],
	[
		'id' => 6,
		'name' => 'Thoi trang cong so',
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

// lay tat ca nhung thang aon vao ben trong
foreach ($categories as $key => $val) {
	foreach ($data as $k => $item) {
		// kiem tra nhung parent_id cua con bang id cua cha
		if($val['parent_id'] == $item['id'] && $val['parent_id'] != 0){
			$data[$item['id']]['sub_cat'][$val['id']] = $val;
		}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Categories</title>
</head>
<body>
	<ul>
	<?php foreach ($data as $key => $item): ?>
		<li>
			<a href="#"><?= $item['name']; ?></a>
			<?php if(isset($item['sub_cat']) && !empty($item['sub_cat'])): ?>
				<ul>
				<?php foreach ($item['sub_cat'] as $k => $val): ?>
					<li>
						<a href="#"><?= $val['name']; ?></a>
					</li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>
