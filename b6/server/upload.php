<?php
	// day la noi nhan du lieu file gui len
	if(isset($_POST['btnUpload'])){
		// kiem tra nguoi dung chon file upload len chua ?
		if(isset($_FILES['file'])){
			echo "<pre>";
			print_r($_FILES['file']);
		}
	}
