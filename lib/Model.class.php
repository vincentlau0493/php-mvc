<?php
class Model extends SQLQuery {
	// protected $_model;
	protected $_table;
	static public $isConnect = false;
	
	function __construct() {
			
		if (!self::$isConnect) {
			$this->connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			self::$isConnect = true;
		}

		// $this->_model = get_class($this);
		// $this->_table = strtolower($this->_model)."s";
	}

	function __destruct() {
		$this->disconnect();
	}
}