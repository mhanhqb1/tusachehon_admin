<?php
defined('ADMIN_USERNAME') or define('ADMIN_USERNAME','anhmh'); 	// Admin Username
defined('ADMIN_PASSWORD') or define('ADMIN_PASSWORD','123456@1391');  	// Admin Password
if (!isset($_SERVER['PHP_AUTH_USER']) 
    || !isset($_SERVER['PHP_AUTH_PW']) 
    || isset($_GET['reset']) 
    || $_SERVER['PHP_AUTH_USER'] != ADMIN_USERNAME 
    || $_SERVER['PHP_AUTH_PW'] != ADMIN_PASSWORD) {
	header("WWW-Authenticate: Basic realm=\"MaiShop Login\"");
	header("HTTP/1.0 401 Unauthorized");  
    die ("Not authorized");
}
