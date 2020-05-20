<?php
	function loginUser()
	{
		if(!isset($_SESSION['username']) || !isset($_COOKIE['T3H'])){
			return false;
		}
		return true;
	}
