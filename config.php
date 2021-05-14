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
	define("BASE_URL", "https://bsbclub.com.br/");
	$config['dbname'] = 'bsbclubc_blog';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'bsbclubc_bucker';
	$config['dbpass'] = 'Bm}YSYrkw_a{';
}

$config['facebook'] = "";
$config['twitter'] = "";
$config['instagram'] = "";

define("SITE_NAME", 'BCSClub');
define("PATH_SITE", dirname(__FILE__));
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Falta fazer
// Paginação de Posts e categorias


// filtro de categorias
// pagina de categorias
// Paginação de posts

// typewrite das paginas
// slider em todas as paginas


// sistema de newslatter
// pagina de contato funcional



// FEITOS

// editar/excluir posts
// editar/excluir categorias
// upload de imagens para o slider
// Corrigir editar nome do autor
// corrigir imagens gerais
// upload de icones das categorias

//Campo de texto inserir e editar Post (atualização EDITOR DE TEXTO)
?>