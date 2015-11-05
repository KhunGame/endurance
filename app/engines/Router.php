<?php
class Router {

	var $config;

	var $class = '';

	var $method = '';

	public function __construct() {
		$this->config =& retrieveClass('Config', 'engines');
	}

	public function detect_routes() {
		if ($this->config->config['configuration']['querystring_mode'] === TRUE) {
			parse_str($_SERVER['QUERY_STRING'], $output);
			$routes = $this->reindex($output);
			return $routes;
		} else {
			$raw = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)).'/';
			$uri = substr($_SERVER['REQUEST_URI'], strlen($raw));
			if(strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
			$routes = explode('/', $uri);
			return $routes;
		}
	}

	public function setClass($class) {
		$this->class = $class;
	}

	public function setMethod($method) {
		$this->method = $method;
	}

	public function &retrieveCurrentClass() {
		return $this->class;
	}

	public function &retrieveCurrentMethod() {
		return $this->method;
	}

	public function reindex($request) {
		if(!is_array($request))
			return false;
		$raw = array();
		foreach ($request as $key => $value) {
			$raw[] = $value;
		}
		return $raw;
	}
}
?>