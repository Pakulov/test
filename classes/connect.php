<?php 
session_start();
$_pdo = new PDO('mysql:dbname=project_01;host=localhost', 'root', '');

# Auto connect
spl_autoload_register(function($class){
   	require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/'.$class.'.php';
});

?>