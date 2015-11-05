<?php
class Config {

	var $config = array();

	public function __construct() {
		$file = APP.'settings/config.php';
		if(!file_exists($file))
			die('The config file does not exist');
		$this->config = require($file);
	}

	public function retrieveConfig($type, $item) {
		return $this->config[$type][$item];
	}

}
?>