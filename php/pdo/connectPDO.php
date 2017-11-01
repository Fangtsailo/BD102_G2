<?php 

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
<<<<<<< HEAD
	$user = "HaHa";
	$password = "bb222";
=======
	$user = "root";
	$password = "root";
>>>>>>> 3c017cb9af939d5780682a06997b4804d592fc49

	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>