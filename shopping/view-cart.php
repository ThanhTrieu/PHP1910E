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
							<tr class="row-<?php echo $item['id']; ?>">
								<td><?= $item['id']; ?></td>
								<td><?= $item['name']; ?></td>
								<td>
									<img src="<?= PATH_IMG . $item['image']; ?>" width="120" height="120">
								</td>
                                <td>
                                    <input class="qty-cart-<?php echo $item['id'];?>" type="number" value="<?= $item['qty']; ?>" />
                                </td>
                                <td>
                                    <?= $item['price']; ?>
                                </td>
                                
                                <td class="money-cart-<?= $item['id']; ?>">
                                    <?= number_format($item['qty']*$item['price']); ?>
                                </td>
                                
                                <td>
                                    <button id="<?php echo $item['id']; ?>" class="btn btn-info js-update-cart">Update</button>
                                </td>
                                <td>
                                    <button id="<?php echo $item['id']; ?>" class="btn btn-danger js-remove-cart">Delete</button>
                                </td>
							</tr>
						<?php endforeach; ?>
					</tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">Tong tien</td>
                            <td class="js-total-money"><?= number_format($totalMoney); ?></td>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
				</table>
                <br>
                <a class="btn btn-primary" href="index.php">Tiep tuc mua hang</a>
			</div>
		</div>
	</div>
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            //remove cart
            $('.js-remove-cart').click(function () {
                var self = $(this);
                var idCart = self.attr('id').trim();
                // kiem tra idCart la so
                if($.isNumeric(idCart)){
                    // thuc hien call ajax xoa san pham trong gio hang
                    $.ajax({
                        url: "remove-cart.php",
                        type: "POST",
                        data: {id: idCart},
                        beforeSend:function () {
                            self.text('Loading...');
                        },
                        success: function (result) {
                            self.text('Delete');
							result = $.trim(result);
							if(result === 'fail'){
							    alert('co loi xay ra');
							} else if (result === 'ok') {
							    alert('xoa thanh cong');
							    $('.row-'+idCart).hide();
							}
                        }
                    });
                }
            });
            
            // update cart
	        $('.js-update-cart').click(function () {
				var self = $(this);
				var id = self.attr('id').trim();
				// lay dc so luong nguoi dung thay doi
		        var qtyCart = $('.qty-cart-'+id).val().trim();
		        if($.isNumeric(qtyCart) && qtyCart > 1 && qtyCart <= 10){
		            $.ajax({
			            url: "update-cart.php",
			            type: "POST",
			            data: {id: id, qty: qtyCart},
                        beforeSend:function () {
                            self.text('Loading...');
                        },
			            success: function (data) {
                            self.text('Update');
                            data = $.trim(data);
                            if(data === 'fail'){
                                alert('co loi xay ra');
                            } else {
                                var res = $.parseJSON(data);
                                var money = res.money;
                                var totalMoney = res.totalMoney;
                                $('.money-cart-'+id).text(money);
                                $('.js-total-money').text(totalMoney);
                            }
                        }
		            })
		        } else {
		            alert("so luong mua khong vuot qua 10 san pham hoac toi thieu 1 san pham")
		        }
            });
        });
    </script>
</body>
</html>