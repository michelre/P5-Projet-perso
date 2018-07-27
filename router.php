<?php 
	
	require_once('controller/FrontendController.php'); 

$frontendController = new FrontendController();

if($_GET['action'] == 'addComment'){
    $frontendController->addComment($_POST);
    return;