<?php
 
class StaticController extends Controller {

	function __construct() {
		//define model
	}

	function index() {
		$this->_template = new Template('index');
		$this->set('title','PHP - MVC');
		$this->set('author','JIAYU');
	}
 
}