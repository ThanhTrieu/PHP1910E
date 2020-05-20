<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>shopping cart</title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php
		$cart = $_SESSION['cart'] ?? [];
		define("PATH_IMG",'public/img/');
	?>
	<div class="container">
		<div class="row">
			<div class="co-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Image</th>
							<th>QTY</th>
							<th>Price</th>
							<th>Money</th>
							<th colspan="2" width="5%">Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php $totalMoney = 0; ?>
						<?php foreach ($cart as $key => $item): ?>
                            <?php $totalMoney += ($item['qty']*$item['price']); ?>
							<tr>
								<td><?= $item['id']; ?></td>
								<td><?= $item['name']; ?></td>
								<td>
									<img src="<?= PATH_IMG . $item['image']; ?>" width="120" height="120">
								</td>
                                <td>
                                    <input type="number" value="<?= $item['qty']; ?>" />
                                </td>
                                <td>
                                    <?= $item['price']; ?>
                                </td>
                                <td>
                                    <?= number_format($item['qty']*$item['price']); ?>
                                </td>
                                <td>
                                    <button class="btn btn-info">Update</button>
                                </td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
							</tr>
						<?php endforeach; ?>
					</tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">Tong tien</td>
                            <td><?= number_format($totalMoney); ?></td>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
				</table>
                <br>
                <a class="btn btn-primary" href="index.php">Tiep tuc mua hang</a>
			</div>
		</div>
	</div>
</body>
</html>