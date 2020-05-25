<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send email</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <form class="my-3 border p-3" action="server/emailv2.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="txtEmail" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" name="txtSubject" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">content</label>
                        <textarea class="form-control" id="content" name="txtContent" rows="5"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btnSend">Send</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>