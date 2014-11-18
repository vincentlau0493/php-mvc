<?php

	class Router {

		public static $isMatch = false;


		public static function parsePattern($pattern) {

			$tmp = $pattern;
			if (substr($tmp, 0, 1) != '/') {
				// $tmp = substr($tmp, 1);
				$tmp = '/' . $tmp;
			}

			if (substr($tmp, -1) != '/') {
				// $tmp = substr($tmp, 0, -1);
				$tmp = $tmp . '/';
			}

			$tmp = preg_replace('/\//','\/',$tmp);
			$tmp = '/^' . $tmp . '$/';

			return $tmp;

		}

		public static function get($pattern, $controller, $method) {
			if (self::$isMatch) {
				return;
			}
			global $url;
			if ($_SERVER['REQUEST_METHOD'] == 'GET') {
				$realPattern = self::parsePattern($pattern);
				if (substr($url, -1) != '/') {
					$url = $url . '/';
				}
				if (substr($url, 0, 1) != '/') {
					$url = '/' . $url;
				}

				preg_match($realPattern, $url, $matches);
				if (count($matches) > 0 ) {
					self::$isMatch = true;

					array_shift($matches);		
					$tmp_controller = new $controller;
					call_user_func_array(array($tmp_controller,$method),$matches);
				}

			}
		}

		public static function post($pattern, $controller, $method) {
			if (self::$isMatch) {
				return;
			}

			global $url;
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$realPattern = self::parsePattern($pattern);

				if (substr($url, -1) != '/') {
					$url = $url . '/';
				}
				if (substr($url, 0, 1) != '/') {
					$url = '/' . $url;
				}

				preg_match($realPattern, $url, $matches);
				if (count($matches) > 0 ) {
					self::$isMatch = true;

					array_shift($matches);		
					$tmp_controller = new $controller;
					call_user_func_array(array($tmp_controller,$method),$matches);
				}				
			}
		}

		public static function put($pattern, $controller, $method) {
			if (self::$isMatch) {
				return;
			}

			global $url;
			if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
				$realPattern = self::parsePattern($pattern);

				if (substr($url, -1) != '/') {
					$url = $url . '/';
				}
				if (substr($url, 0, 1) != '/') {
					$url = '/' . $url;
				}

				preg_match($realPattern, $url, $matches);
				if (count($matches) > 0 ) {
					self::$isMatch = true;

					array_shift($matches);		
					$tmp_controller = new $controller;
					call_user_func_array(array($tmp_controller,$method),$matches);
				}				
			}
		}

		public static function delete($pattern, $controller, $method) {
			if (self::$isMatch) {
				return;
			}

			global $url;
			if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
				$realPattern = self::parsePattern($pattern);

				if (substr($url, -1) != '/') {
					$url = $url . '/';
				}
				if (substr($url, 0, 1) != '/') {
					$url = '/' . $url;
				}

				preg_match($realPattern, $url, $matches);
				if (count($matches) > 0 ) {
					self::$isMatch = true;

					array_shift($matches);		
					$tmp_controller = new $controller;
					call_user_func_array(array($tmp_controller,$method),$matches);
				}				
			}
		}


		public static function errorHandle($controller, $method){
			//raise 404
			if (!self::$isMatch) {
				$errorController = new $controller;
				call_user_func_array(array($errorController,$method),[]);
			}

		}




	}