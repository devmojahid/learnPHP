<?php 
spl_autoload_register(function($className){
	$path = str_replace("CloudStorage\\","",$className);
	$path = strtolower($path);
	$path = str_replace("\\",'/',$path).".php";
	include_once($path);
});