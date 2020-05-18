<?php
	require "../helpers/common.php";
	define("PATH_UPLOAD_FILE", "../uploads/images/");
	// day la noi nhan du lieu file gui len
	if(isset($_POST['btnUpload'])){
		// kiem tra nguoi dung chon file upload len chua ?
		if(isset($_FILES['file'])){

			$tmpName = $_FILES['file']['tmp_name'];
			$nameFile = $_FILES['file']['name'];
			$errorFile = $_FILES['file']['error'];
			$typeFile = $_FILES['file']['type'];
			$sizeFile = $_FILES['file']['size'];
			
			if($errorFile == 0 && !empty($tmpName)){
				// tien hanh upload file
				// can kiem tra no la 1 buc anh va khong lon hon 3 mb
				if(checkTypeFile($typeFile) && checkSizeFile($sizeFile)) {
					$upload = move_uploaded_file($tmpName, PATH_UPLOAD_FILE . $nameFile);
					if ($upload) {
						header("Location: ../form-upload.php?state=success&img={$nameFile}");
					} else {
						header("Location: ../form-upload.php?state=fail");
					}
				} else {
					header("Location: ../form-upload.php?state=cancel");
				}
			} else {
				// quay ve lai form upload file
				header("Location: ../form-upload.php?state=error");
			}
		}
	}
