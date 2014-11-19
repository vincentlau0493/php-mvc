<?php
class Template {
		 
	protected $variables = array();
	protected $_prefix;
	protected $_view;
	 
	function __construct($view,$prefix='no_prefix_at_all') {
		$this->_prefix = $prefix;
		$this->_view = $view;
	}
 
	/** Set Variables **/

	function set($name,$value) {
		$this->variables[$name] = $value;
	}
 
	/** Display Template **/
	 
	function render() {
		extract($this->variables);
			 
		if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_prefix . DS . 'header.php')) {
			include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_prefix . DS . 'header.php');
		} else {
			include (ROOT . DS . 'application' . DS . 'views' . DS . 'header.php');
		}

		if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_prefix . DS . 'header.php')) {
			include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_prefix . DS . $this->_view . '.php');     
		} else {
			include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_view . '.php');
		}


		if (file_exists(ROOT . DS . 'application' . DS . 'views' . DS . $this->_prefix . DS . 'footer.php')) {
			include (ROOT . DS . 'application' . DS . 'views' . DS . $this->_prefix . DS . 'footer.php');
		} else {
			include (ROOT . DS . 'application' . DS . 'views' . DS . 'footer.php');
		}
	}
 
}