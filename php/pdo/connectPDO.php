<?php 

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "root";
<<<<<<< HEAD
	$password = "zxc123";

=======
	$password = "123456";
>>>>>>> d3d9152bb505eb95384fc236a71f0cb3d2c09268
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>