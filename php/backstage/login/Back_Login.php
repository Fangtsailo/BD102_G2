<?php 


	ob_start();

	session_start();
	
	



	try{


		// $dsn = "mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
		// $user = "root";
		// $password = "root";
		// $options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		// $pdo = new PDO($dsn, $user, $password, $options);

		require_once("../../pdo/connectPDO.php");


		

		$sql = "select * from employee where EMP_ID =:emp_id and EMP_PSW =:emp_psw";

		


		$employee = $pdo ->prepare($sql);

		$employee -> bindValue(":emp_id",$_GET["emp_id"]);
		$employee -> bindValue(":emp_psw",$_GET["emp_psw"]);

		$employee -> execute();



		 if($employee->rowCount() === 0){
		  

		  header("Location:../../../BSLogin.html");

		  
		 }else{

		  $employeeRow = $employee->fetchObject();

		  $_SESSION["emp_id"]=$_GET["emp_id"];

		  // echo $employeeRow->EMP_ID, "帳密正確";


          header("Location:../../../BAuthority.php");



		 }








	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}





?>