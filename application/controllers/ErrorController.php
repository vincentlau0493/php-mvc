<?php
 
class ErrorController extends Controller {

	function __construct() {
		//define model, template
	}

  function notFound() {
  		$this->_template = new Template('404');
  		$this->set('title','PHP - MVC');
  }
 
}