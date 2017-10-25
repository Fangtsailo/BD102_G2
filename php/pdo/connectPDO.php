<?php 
<<<<<<< HEAD
	$dsn ="mysql:host=localhost;dbname=trepun;port=3306;charset=utf8";
	$user = "joan";
	$password = "123456";
=======
	$dsn = "mysql:host=localhost;dbname=fake;port=3306;charset=utf8";
	$user = "HaHa";
	$password = "bb222";
>>>>>>> 13e364b5e12f73fc8acbc762f03ef8b2ba48ac2e
	$options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
	$connectPDO = new PDO($dsn, $user, $password, $options);
 ?> 