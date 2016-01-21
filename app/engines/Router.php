<?php
/**
 * ENDURANCE 0.9 BETA
 * ROUTER CLASS
 * Description : All routing functions & url management
 * Developer : KoldieVilla Framework Development Team
 * @package Endurance - Core
 * @access public
 * 
 */

class Router {

	// Pre define the config class
	var $config;

	// Store the current class
	var $class = '';

	// Store the current method
	var $method = '';

	public function __construct() {
		$this->config =& retrieveClass('Config', 'engines');
	}

	public function detect_routes() {
		if ($this->config->retrieveConfig('configuration', 'querystring_mode') === TRUE) {
			parse_str($_SERVER['QUERY_STRING'], $output);
			$routes = $this->reindex($output);
			if (!isset($routes) OR !is_array($routes) OR count($routes) == 0) {
				$this->setClass($this->config->retrieveConfig('routes', 'default_controller'));
				$this->setMethod($this->config->retrieveConfig('routes', 'default_method'));
			} else {
				$this->setClass($routes[0]);
				unset($routes[0]);
				$this->setMethod($routes[1]);
				unset($routes[1]);
			}
		} else {
			$raw = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)).'/';
			$uri = substr($_SERVER['REQUEST_URI'], strlen($raw));
			if(strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
			$routes = explode('/', $uri);
			if($routes[0] == '')
				$routes = array();
			if (count($routes) == 0) {
				$this->setClass($this->config->retrieveConfig('routes', 'default_controller'));
				$this->setMethod($this->config->retrieveConfig('routes', 'default_method'));
			} else {
				if(count($this->config->retrieveConfig('route_presets')) > 0) {
					$presets = $this->config->retrieveConfig('route_presets');
					$rstring = implode('/', $routes);
					if(isset($presets[$rstring]))
						$routes = explode('/', $presets[$rstring]);
				}
				$this->setClass($routes[0]);
				unset($routes[0]);
				$this->setMethod($routes[1]);
				unset($routes[1]);
			}
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