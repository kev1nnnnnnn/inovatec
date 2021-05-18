<?php 
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Inova\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>