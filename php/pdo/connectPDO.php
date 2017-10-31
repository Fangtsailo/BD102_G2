<?php 

<<<<<<< HEAD
	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "root";
	$password = "root";

=======
	$dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";

	$user = "root";
	$password = "root";
>>>>>>> e4b3824e8ecf1d5a1df1556795baef3bcd658df1
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>