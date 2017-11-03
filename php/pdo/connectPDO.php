<?php 

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";

	//$user = "root";
	//$password = "zxc123";
	$user = "root";
<<<<<<< HEAD
	$password = "root";
=======
	$password = "zxc123";
>>>>>>> a66d6bfa14c2e9ad4c1057be8c874342ca5f2afb
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>