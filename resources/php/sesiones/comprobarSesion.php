<?php
session_start();
$usuario = $_SESSION['email'];

if(!isset($usuario)){
	header("location: index.html");
}

?>
