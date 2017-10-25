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

      		header("Location:../../../../BOrdinaryMember.php");

      }else if(isset($_GET["dutyZero"])){

      		$mem_ID=$_GET["dutyZero"];

      		$sql = "UPDATE member set MEM_STATUS=0 where MEM_ID ='$mem_ID' ";

      		$update = $connectPDO->query($sql);

      		header("Location:../../../../BOrdinaryMember.php");

      }else if( isset($_GET["searchBar"]) ){ //not proper add condition at else if???

      		$searchBar = $_GET["searchBar"];


      		$sql = "select * from member where MEM_ROLE=0 and ( MEM_ID='$searchBar' or MEM_NAME='$searchBar')";

      		$memberSearch = $connectPDO->query($sql);

      		if($memberSearch->rowCount()!==0){

      		header("Location:../../../../BOrdinaryMember.php?searchBar=$searchBar");

      		}else{
      			header("Location:../../../../BOrdinaryMember.php");
      		}




      }




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}





?>