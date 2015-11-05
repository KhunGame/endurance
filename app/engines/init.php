<?php
require_once APP.'engines/global.php';
$ROUTER =& retrieveClass('Router', 'engines');
$routes = $ROUTER->detect_routes();
print_r($routes);
?>