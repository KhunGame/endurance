<?php
class Model {

	var $db;

	var $config;

	public function __construct() {
		$this->config =& retrieveClass('Config', 'engines');
		// $this->db = $this->getDbConnection();
	}

	private function getDbConnection($database) {
		$connection = $this->config->retrieveConfig('databases', $database);
		$db = new mysqli(
			$connection['server'],
			$connection['username'],
			$connection['password'],
			$connection['database_name']
		);
	}

}
?>