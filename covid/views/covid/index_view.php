<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Covid</title>
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row my-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                
                <h1 class="text-center">Thong tin dich benh virus corona</h1>
                
                <div class="text-center" id="loading" style="display: none;">
                    <img src="public/img/loading.gif"/>
                </div>
                
                <div id="result"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajax({
                url: "controllers/CovidController.php?c=handle",
                type: "GET",
                data: {},
                beforeSend: function () {
                    $('#loading').show();
                },
                success: function (data) {
                    $('#loading').hide();
                    // hien thi du lieu
                    $('#result').html(data);
                }
            })
        });
    </script>
</body>
</html>
