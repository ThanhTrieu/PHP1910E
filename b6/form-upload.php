<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Upload file to server</title>
</head>
<body>
    <form action="server/upload.php" method="post" enctype="multipart/form-data">
        <label>Moi chon file</label>
	    <input type="file" name="file" />
	    <br/>
	    <button type="submit" name="btnUpload">Upload</button>
    </form>
</body>
</html>
