<?php
// bieu dien thong tin mang du lieu phong
$infoRooms = [
	[
		'id_room' => 101,
		'name_room' => 'To chuc',
		'leader_room' => 'Van Teo',
		'year' => 2019
	],
	[
		'id_room' => 102,
		'name_room' => 'IT',
		'leader_room' => 'Van Ty',
		'year' => 2015
	],
	[
		'id_room' => 103,
		'name_room' => 'Tai chinh',
		'leader_room' => 'Thi No',
		'year' => 2017
	]
];

// bieu dien thong tin nhan vien
$infoStafs = [
	[
		'id' => 1,
		'room_id' => 102,
		'name' => 'Van A',
		'email' => 'test@gmail.com',
		'phone' => '293230990',
		'add' => 'Ha Noi',
		'money' => 1000,
		'gender' => 0,
		'id_rank' => 1
	],
	[
		'id' => 2,
		'room_id' => 101,
		'name' => 'Van B',
		'email' => 'vab@gmail.com',
		'phone' => '293230990',
		'add' => 'Ha Nam',
		'money' => 2000,
		'gender' => 1,
		'id_rank' => 2
	],
	[
		'id' => 3,
		'room_id' => 103,
		'name' => 'Van C',
		'email' => 'vc@gmail.com',
		'phone' => '293230990',
		'add' => 'Hai Duong',
		'money' => 3000,
		'gender' => 0,
		'id_rank' => 3
	]
];

$ranks = [
	[
		'id' => 1,
		'name_rank' => 'CTO'
	],
	[
		'id' => 2,
		'name_rank' => 'CEO'
	],
	[
		'id' => 3,
		'name_rank' => 'COO'
	]
];

// can lay du lieu thong tin tu mang phong gan sang - do sang mang du lieu nhan vien
// duyet mang long nhau
foreach ($infoStafs as $key => $item) {
	$infoStafs[$key]['name_room'] = '';
	$infoStafs[$key]['manager_room'] = '';
	
	foreach ($infoRooms as $k => $val) {
		// can lay thong tin ten phong va ten truong phong gan vao thong tin tuong ung cua tung nhan vien
		if($item['room_id'] == $val['id_room']){
			$infoStafs[$key]['name_room'] = $val['name_room'];
			$infoStafs[$key]['manager_room'] = $val['leader_room'];
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
	<title>Thong tin nhan vien</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<table class="table">
				<thead>
					<tr>
						<th>Ma NV</th>
						<th>Ten</th>
						<th>Phong</th>
						<th>Truong phong</th>
						<th>Email</th>
						<th>Dien thoai</th>
						<th>Dia chi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($infoStafs as $key => $item): ?>
						<tr>
							<td><?= $item['id']; ?></td>
							<td><?php echo $item['name']; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
