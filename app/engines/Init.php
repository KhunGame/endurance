<?php
/**
 * ENDURANCE 0.9 BETA
 *
 * ROUTER CLASS
 *
 * @package Endurance - Core
 * @author Lunarmind Intelligence Systems
 * @copyright Copyright (c) 2015 - 2025 Lunarmind Intelligence Systems
 * @copyright copyright (c) 2015 - 2018, Martin De Tour School of Management & Economics - Assumption University of Thailand(ABAC)
 * 
 * ---------------------------------------------------------------------------------------
 */

require_once APP.'engines/Global.php';
$ROUTER =& retrieveClass('Router', 'engines');
$ROUTER->detect_routes();
$class = $ROUTER->retrieveCurrentClass();
$method = $ROUTER->retrieveCurrentMethod();

// Load the base controller
require_once APP.'engines/Controller.php';

function &getInstance() {
	return Controller::getInstance();
}

// Check the existence of the requested class file
if(!file_exists(APP.'controllers/'.ucfirst($class).'.php')) {
	$EH =& retrieveClass('Handler', 'engines');
	$EH->error(404);
}

// Require the requested controller file because it exists
require_once APP.'controllers/'.ucfirst($class).'.php';

if (!class_exists($class)) {
	die('The requested class does not exist');
}

$ER = new $class();

if(!method_exists($ER, $method)) {
	$EH =& retrieveClass('Handler', 'engines');
	$EH->error(404);
}

call_user_func_array(array($ER,$method), array("one","two"));
?>