<?php
$app_folder = 'app';

if(!is_dir($app_folder)) die('The application folder is invalid or incorrectly specified, please inspect the directory name');

$app_path = rtrim(realpath($app_folder), '/').'/';

define('APP', $app_path);
define('BASE', 'http://localhost/endurance/');

require_once APP.'engines/Init.php';
?>