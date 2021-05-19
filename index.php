<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Inova\Page;
use \Inova\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/suporte', function() {

	$page = new Page();

	$page->setTpl("suporte");
});

$app->get('/cadastro', function() {

	$page = new Page();

	$page->setTpl("cadastro");
});

$app->get('/indice', function() {

	$page = new Page();

	$page->setTpl("indice");
});

$app->get('/login', function() {

	User::verifyLogin();

	$page = new Page();

	$page->setTpl("login");
});

$app->post('/login', function() {

	User::verifyLogin();

	$user = new User();

	User::login($_POST["login"], $_POST['password']);

	header("Location: /indice");
	exit;

});

$app->run();

 ?>