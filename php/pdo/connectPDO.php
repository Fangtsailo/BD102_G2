<?php 




	$dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
	$user = "root";
	$password = "root";



	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>