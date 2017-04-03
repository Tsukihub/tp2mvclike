<?php
use Core\Auth\DBAuth;

define('ROOT', dirname(__DIR__));
require ROOT.'/app/App.php';
App::load();

if (isset($_GET['p'])) {
	$page = $_GET['p'];
}else{
	$page = "home";
}

$app = App::getInstance();
$auth = new DBAuth($app->getDb());

//connexion client via login.php
if ($_POST) {
	if (isset($_POST['username'], $_POST['password'])) {
		if ($auth->login($_POST['username'], $_POST['password'])) {
			//prevoir un message flash
		}else{
			header('location: index.php?p=login');
			exit();
		}
	}
}
//fin connexion client via login.php

if (!$auth->logged()) {
	$app->forbidden();
}

$connect = "Disconnect";

ob_start();
if ($page==='home') {
	require ROOT.'/pages/admin/index.php';
	/////suite pour post
}elseif($page==='clients'){
	require ROOT.'/pages/admin/clients/index.php';
}elseif($page==='clients.delete'){
	require ROOT.'/pages/admin/clients/delete.php';

///////////////suite services
}elseif ($page==='clients.add') {
	require ROOT.'/pages/admin/clients/add.php';
	////////suite root basique
}elseif($page==='services'){
	require ROOT.'/pages/admin/services/index.php';
}elseif($page==='services.delete'){
	require ROOT.'/pages/admin/services/delete.php';
}elseif($page==='credits.add'){
	require ROOT.'/pages/admin/credits/add.php';
}elseif($page==='credits'){
	require ROOT.'/pages/admin/credits/index.php';
}else{
	require ROOT.'/pages/errors/404.php';
}
$content = ob_get_clean();
require ROOT.'/pages/templates/default.php'; 




