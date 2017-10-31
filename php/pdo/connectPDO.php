<?php 

<<<<<<< HEAD

	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "root";
	$password = "root";


=======
	$dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
	$user = "root";
	$password = "root";
>>>>>>> 7390b219301e29e7579f5748cc44d6af81f1b304
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>