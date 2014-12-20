<?php
/**
 * BungeeAdminTools - WebInterface
 * Author : Alphart
 * Version 1.3
 * License : GPL V3 -> https://github.com/alphartdev/BungeeAdminTools/blob/master/LICENSE
 */
if(is_dir("__install")){
	echo "Once you installed the WebInterface, you must delete the install folder to use the interface.";
	exit;
}

// Load Composer autoload
require_once("vendor/autoload.php");

session_start();

$router = new Router($_GET);
$controller = $router->getController();

$controller->executeAction();
