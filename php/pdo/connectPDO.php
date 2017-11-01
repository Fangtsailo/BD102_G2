<?php 

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
<<<<<<< HEAD

	$user = "root";
	$password = "root";


=======
	$user = "root";
	$password = "zxc123";
>>>>>>> c1f965d78434f609f787f7576baa85989d20d485
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>