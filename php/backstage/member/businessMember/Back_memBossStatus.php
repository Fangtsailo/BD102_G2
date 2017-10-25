<?php 


	ob_start();
	session_start();
	
	



	try{


		// $dsn = "mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
		// $user = "root";
		// $password = "root";
		// $options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		// $connectPDO = new PDO($dsn, $user, $password, $options);


		require_once("../../../pdo/connectPDO.php");

      
      if(isset($_GET["dutyOne"])){

      		$mem_ID=$_GET["dutyOne"];

      		$sql = "UPDATE member SET MEM_STATUS=1 WHERE MEM_ID ='$mem_ID'";


      		$update = $connectPDO->query($sql);

      		header("Location:../../../../BBusinessMember.php");

      }else if(isset($_GET["dutyZero"])){

      		$mem_ID=$_GET["dutyZero"];

      		$sql = "UPDATE member set MEM_STATUS=0 where MEM_ID ='$mem_ID' ";

      		$update = $connectPDO->query($sql);

      		header("Location:../../../../BBusinessMember.php");

      }else if( isset($_GET["searchBar"]) ){ //not proper add condition at else if???

      		$searchBar = $_GET["searchBar"];


      		$sql = "select * from member where MEM_ROLE=1 and ( MEM_ID='$searchBar' or MEM_NAME='$searchBar')";

      		$memberSearch = $connectPDO->query($sql);

      		if($memberSearch->rowCount()!==0){

      		header("Location:../../../../BBusinessMember.php?searchBar=$searchBar");

      		}else{
      			header("Location:../../../../BBusinessMember.php");
      		}




      }else if(isset($_GET["storeChargeZero"])){

      			$SI_NO=$_GET["storeChargeZero"];

      			$sql = "UPDATE store_imformation set SI_CHECKSTAY=0 where SI_NUM ='$SI_NO' ";

      			$update = $connectPDO->query($sql);

      			header("Location:../../../../BBusinessMember.php");


      }else if(isset($_GET["storeChargeOne"])){

      			$SI_NO=$_GET["storeChargeOne"];

      			$sql = "UPDATE store_imformation set SI_CHECKSTAY=1 where SI_NUM ='$SI_NO' ";

      			$update = $connectPDO->query($sql);

      			header("Location:../../../../BBusinessMember.php");


      }




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}





?>