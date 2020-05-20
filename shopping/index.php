<?php
	require "data/shopping.php";
	$listProduct = getDataProduct();
	define("PATH_IMG","public/img/");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Shopping</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($listProduct as $key => $item): ?>
			<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
				<div class="card">
					<img height="250" src="<?php echo PATH_IMG . $item['image'] ?>" class="card-img-top" alt="<?php echo $item['name']; ?>">
					<div class="card-body">
						<h5 class="card-title"><?php echo $item['name']; ?></h5>
						<p class="card-text">price: <?php echo number_format($item['price']); ?></p>
						<a href="add-cart.php?id=<?php echo $item['id']; ?>" class="btn btn-primary">Add Cart</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>
