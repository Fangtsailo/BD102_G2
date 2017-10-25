<?php 


	ob_start();
	session_start();


	try{


		// $dsn = "mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
		// $user = "root";
		// $password = "root";
		// $options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		// $pdo = new PDO($dsn, $user, $password, $options);


		require_once("../../../pdo/connectPDO.php");

		//$mem_ID=$_SESSION["memId"];
		//$mem_No=$_SESSION["memNo"];


		if(isset($_GET["delLogo"])){

			

			$sql = "UPDATE store_imformation SET SI_LOGO=null WHERE SI_MEMNO ='4'";

      		$update = $pdo->query($sql);

      		header("Location:../../../../FMybusinessStore.php");
      

      }else if(isset($_GET["delImg1"])){

			

			$sql = "UPDATE store_imformation SET SI_BIMG_1=null WHERE SI_MEMNO ='4'";

      		$update = $pdo->query($sql);

      		header("Location:../../../../FMybusinessStore.php");
      

      }




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}



 ?>



