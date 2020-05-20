<?php
	// xoa cookie
	setcookie('LPHP1910', "", time() - 60, "/", "", 0);
	// quay ve lai index2 xem cookie con hay ko?
	header("Location: index2.php");
