<?php 
namespace PHPMVC;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Template;
use PHPMVC\LIB\Language;


require_once '..'  .'/'. 'app' .'/'. 'config' .'/'. 'config.php';

require_once APP_PATH . DS . 'lib' . DS .'autoload.php';

session_start();

if(!isset($_SESSION['lang']))
{
	$_SESSION['lang'] = 'en';
}

$template_parts = require_once '..' . DS . 'app' . DS . 'config' . DS . 'templateconfig.php';



$template = new Template($template_parts);

$lang = new Language();

$frontCon = new FrontController($template, $lang);

$frontCon->dispatch();


 ?>