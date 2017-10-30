<?php 


	$dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
	$user = "root";
	$password = "root";

<<<<<<< HEAD
	$dsn = "mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "TREPUN";
	$password = "1234";
=======
>>>>>>> a12a560f36a3182633d470094fd871a854f2bf29

	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>