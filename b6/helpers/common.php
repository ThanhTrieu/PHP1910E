<?php
	// kiem tra dinh dang file
	function checkTypeFile($typeFile)
	{
		// can kiem tra $typeFile co phai la anh : png, jpg, jpeg
		$allowType = ['image/png','image/jpg','image/jpeg'];
		// can xem $typeFile co nam trong mang $allowType
		if(in_array($typeFile, $allowType)){
			return true;
		}
		return false;
	}
	function checkSizeFile($sizeFile)
	{
		// can kiem tra xem $sizeFile co nho hon 3 Mb ko?
		if($sizeFile > 3 * 1024 * 1024){
			return false;
		}
		return true;
	}
