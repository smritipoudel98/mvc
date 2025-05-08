<?php 
spl_autoload_register(function($classname){
	
	require $filename ="../app/models/".ucfirst($classname).".php";
	return;
});
require 'config.php';
require 'function.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require_once 'App.php';