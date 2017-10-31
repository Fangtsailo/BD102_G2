<?php 

<<<<<<< HEAD
	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "TREPUN";
	$password = "1234";
=======



	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "root";
	$password = "zxc123";


>>>>>>> 18ee2cb906c1a91e9a459a7255487e612c9a7571

	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>