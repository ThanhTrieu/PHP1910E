<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Movie</title>
	<link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row my-3">
			<div class="col-12 col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="input-group mb-3">
                    <input id="txtKeyword" type="text" class="form-control" placeholder="tim kiem thong tin phim">
                    <div class="input-group-append">
                        <button class="btn btn-primary" id="btnSearch">Tim kiem</button>
                    </div>
                </div>
				<div class="text-center" id="loading" style="display: none;">
					<img src="public/img/loading.gif"/>
				</div>
				<div id="result" class="my-2"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#btnSearch').click(function () {
				var keyword = $('#txtKeyword').val().trim();
				if(keyword.length > 0){
					$.ajax({
						url: "controllers/CovidController.php?c=movie",
						type: "GET",
						data: {keyword: keyword},
                        beforeSend: function () {
                            $('#loading').show();
                        },
						success:function (data) {
                            $('#loading').hide();
                        }
					})
				}
            });
        });
	</script>
</body>
</html>
