<?php
	$host = "localhost";
	$port = "3307";
	$db = "db";
	$user = "root";
	$pass = "usbw";
	$conexao = new mysqli($host,$user,$pass,$db,$port) or die ("Connection ERROR");
?>