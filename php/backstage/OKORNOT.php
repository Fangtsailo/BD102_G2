<?php 

ob_start();

session_start();

 ?>


<?php 
		try{
		
		require_once("../pdo/connectPDO.php");

		$SI_NUM = $_REQUEST["si_num"];
		

	if(isset($_GET["refuseone"])){


      		$sql = "UPDATE store_imformation SET SI_CHECKSTAY=0 WHERE SI_NUM = '$SI_NUM'";

      		$update = $connectPDO->query($sql);

      		header("Location:../../shopManage.php"); 

     }else if(isset($_GET["okone"])){


      		$sql = "UPDATE store_imformation set SI_CHECKSTAY=1 where SI_NUM = '$SI_NUM' ";

      		$update = $connectPDO->query($sql);

      		header("Location:../../shopManage.php");
    }

		}//try
		catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
		}

		 ?>