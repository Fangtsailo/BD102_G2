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

		

		$sql = "INSERT INTO employee (EMP_ID,EMP_PSW,EMP_STATUS,EMP_GRADE)
    			VALUES (:emp_id,:emp_psw,1,0)";

		

    	$sql_check = "select * from employee where EMP_ID =:emp_id and EMP_PSW =:emp_psw";

		


		$employee_check = $connectPDO ->prepare($sql_check);

		$employee_check -> bindValue(":emp_id",$_GET["emp_id"]);
		$employee_check -> bindValue(":emp_psw",$_GET["emp_psw"]);

		$employee_check -> execute();

		



		 if($employee_check->rowCount() === 0){
		  

		  	$employee = $connectPDO ->prepare($sql);

			$employee -> bindValue(":emp_id",$_GET["emp_id"]);
			$employee -> bindValue(":emp_psw",$_GET["emp_psw"]);

			$employee -> execute();





		 }else{

		  

		  echo "帳號已存在";

          

		 }








	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}





?>