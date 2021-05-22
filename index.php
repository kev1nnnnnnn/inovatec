<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Inova\Page;
use \Inova\Model\User;
use \Inova\Model\Questionario;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get("/questionario", function(){

	$page = new Page([
		"footer"=>false
	]);

	$page->setTpl("quest");

});

$app->get('/cadastro', function() {

	$page = new Page([
		"footer"=>false
	]);

	$page->setTpl("cadastro");
});

$app->get('/indice', function() {

	$quest = Questionario::listQuest();

	$page = new Page();

	$page->setTpl("indice", array(

		"quest"=>$quest
	));
});

$app->get('/dicas', function(){

	$page = new Page();

	$page->setTpl("/dicas");

});

$app->post('/indice', function() {

	$quest = new Questionario();

	$quest->setData($_POST);

	$quest->save();

	header("Location: /indice");
	exit;

});

$app->get('/login', function() {

	//User::verifyLogin();

	$page = new Page([
		"footer"=>false
	]);

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