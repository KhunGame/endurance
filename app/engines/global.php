<?php
function &retrieveClass($class, $location = 'handlers') {

	static $classes = array();

	if(isset($classes[$class])) return $classes[$class];

	$file = APP.rtrim($location.'/').'/'.$class.'.php';

	if(!file_exists($file)) die('The requested file does not exist, please make sure the file exists');

	require_once $file;

	if(!class_exists($class)) die('The requested class does not exist or invalid');

	$classes[$class] = new $class();

	trackClass($class);

	return $classes[$class];

}

function &trackClass($class = '') {

	static $_loaded_classes = array();

	if($class != '') $_loaded_classes[strtolower($class)] = $class;

	return $_loaded_classes;
}
?>