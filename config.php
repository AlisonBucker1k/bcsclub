<?php
require 'environment.php';
require 'vendor/autoload.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/bcsclub/");
	// define("PATH_SITE", "media/");
	$config['dbname'] = 'bcsclub';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	// define("PATH_SITE", "media/");
	define("BASE_URL", "https://bcsclub.com.br/");
	$config['dbname'] = 'isolutio_club';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'isolutio_bucker';
	$config['dbpass'] = 'Reo$+vZ-#=pZ';
}

$config['facebook'] = "https://www.facebook.com/BCS-Club-103043408701685/";
$config['twitter'] = "https://twitter.com/bcs_bank";
$config['instagram'] = "https://www.instagram.com/bcs_club/";

define("SITE_NAME", 'BCSClub');
define("PATH_SITE", dirname(__FILE__));
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>