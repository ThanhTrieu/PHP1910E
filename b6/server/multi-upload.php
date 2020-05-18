<?php
define("PATH_UPLOAD_FILE", "../uploads/images/");
if(isset($_POST['btnUpload'])){
	if(isset($_FILES['file'])){
		$arrTmpName = $_FILES['file']['tmp_name']; // la 1 array
		if(!empty($arrTmpName)){
			$flagUpload = false;
			$strNameFile = '';
			foreach ($arrTmpName as $key => $item) {
				// lay ra tat ca name file
				$nameFile = $_FILES['file']['name'][$key];
				$upload = move_uploaded_file($item, PATH_UPLOAD_FILE . $nameFile);
				$strNameFile .= ($strNameFile == '') ? $nameFile : ',' .$nameFile;
				if($upload){
					$flagUpload = true;
				}
			}
			if($flagUpload){
				header("Location: ../multi-form-upload.php?state=success&img={$strNameFile}");
			} else {
				header("Location: ../multi-form-upload.php?state=fail");
			}
		}
	}
}