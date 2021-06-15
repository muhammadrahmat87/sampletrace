<?php

if (!function_exists('checkAuth')) {
	function checkAuth(){
		$auth = new AuthLib();
		$auth->checkAuth();
	}
}