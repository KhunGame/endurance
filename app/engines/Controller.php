<?php
class Controller {

	private static $instance;

	public function __construct() {

		self::$instance =& $this;

		foreach (trackClass() as $key => $class) {
			$this->$key =& retrieveClass($class);
		}

		$this->view =& retrieveClass('View', 'engines');

	}

	public static function &getInstance() {
		return self::$instance;
	}

}
?>