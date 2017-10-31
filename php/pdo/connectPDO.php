<?php 

<<<<<<< HEAD


	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "root";
	$password = "zxc123";


=======
	$dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
	$user = "root";
	$password = "root";
>>>>>>> d0ed62ca86b399991b59d3df450eda0c57dbcce2

	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?>