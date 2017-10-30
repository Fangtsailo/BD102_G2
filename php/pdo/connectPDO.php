<?php 

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "HaHa";
	$password = "bb222";

	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>