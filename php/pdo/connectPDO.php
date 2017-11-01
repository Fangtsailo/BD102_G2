<?php 

<<<<<<< HEAD

	$dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
	$user = "root";
	$password = "root";


	$dsn = "mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "TREPUN";
	$password = "1234";


	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
	
=======
	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "root";
	$password = "zxc123";
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
 ?>