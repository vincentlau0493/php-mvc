<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(dirname(__FILE__)));
	
	if (isset($_GET['url'])) {
		$url = $_GET['url'];
	} else {
		$url = '/';
	}
 
	require_once (ROOT . DS . 'config' . DS . 'config.php');
	require_once (ROOT . DS . 'lib' . DS . 'utility.php');
	require_once (ROOT . DS . 'application' . DS . 'routes.php');
	
?>