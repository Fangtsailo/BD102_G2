<?php 


	ob_start();
	session_start();
	
	



	try{


		// $dsn = "mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
		// $user = "root";
		// $password = "root";
		// $options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		// $connectPDO = new PDO($dsn, $user, $password, $options);


		require_once("../../pdo/connectPDO.php");

      
      if(isset($_GET["dutyOne"])){

      		$emp_ID=$_GET["dutyOne"];

      		$sql = "UPDATE employee SET EMP_STATUS=1 WHERE EMP_ID ='$emp_ID'";


      		$update = $connectPDO->query($sql);

      		header("Location:../../../BAuthority.php");

      }else{

      		$emp_ID=$_GET["dutyZero"];

      		$sql = "UPDATE employee set EMP_STATUS=0 where EMP_ID ='$emp_ID' ";

      		$update = $connectPDO->query($sql);

      		header("Location:../../../BAuthority.php");

      }
		




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}





?>