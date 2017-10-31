<?php 

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
<<<<<<< HEAD
	$user = "HaHa";
	$password = "bb222";
=======
	$user = "root";
	$password = "root";
>>>>>>> 7570bf1bb8b1944c179893f78b9818094f2a9bfb

	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>