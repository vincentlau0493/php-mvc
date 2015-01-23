<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(dirname(__FILE__)));
	$actualURL = "$_SERVER[REQUEST_URI]";
	if (isset($_GET['url'])) {
		$url = $_GET['url'];
	} else {
		$url = '/';
	}
	// echo '<h1>' . $actualURL . '</h1>';
	$dir = substr($actualURL, 0, -strlen($url));
	if (substr($dir, -1) != '/') {
		$dir .= '/';
	}
	define('DIR', $dir);
	// echo '<h1>' . DIR . '</h1>';

 	if (file_exists(ROOT . DS . 'lib' . DS . 'functions.php')) {
		require_once (ROOT . DS . 'lib' . DS . 'functions.php');
 	}

	require_once (ROOT . DS . 'config' . DS . 'config.php');
	require_once (ROOT . DS . 'lib' . DS . 'utility.php');
	require_once (ROOT . DS . 'application' . DS . 'routes.php');
	
?>