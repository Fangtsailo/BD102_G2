<?php 
<<<<<<< HEAD
	$dsn = "mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$pdo = new PDO($dsn, $user, $password, $options);
=======
  $dsn ="mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
  $user = "root";
  $password = "root";
  $options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
  $connectPDO = new PDO($dsn, $user, $password, $options);
>>>>>>> 54779622a5f41124b81cb2244cd43265ecd92df3
 ?>