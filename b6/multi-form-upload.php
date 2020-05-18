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
<?php
	$state = $_GET['state'] ?? '';
	$strImg = $_GET['img'] ?? '';
	$arrImg = explode(",", $strImg);
	define("PATH_UPLOAD_FILE", "uploads/images/");
?>
<form action="server/multi-upload.php" method="post" enctype="multipart/form-data">
	<label>Moi chon nhieu file de upload</label>
	<input multiple type="file" name="file[]" />
	<br/>
	<button type="submit" name="btnUpload">Upload</button>
</form>
<?php if($state === 'success' && !empty($arrImg)): ?>
	<?php foreach ($arrImg as $img): ?>
		<img src="<?php echo PATH_UPLOAD_FILE . $img; ?>"/>
	<?php endforeach; ?>
<?php endif; ?>
</body>
</html>
