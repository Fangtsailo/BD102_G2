<?php 

ob_start();

session_start();

 ?>


<?php 
		try{
		
		require_once("../pdo/connectPDO.php");

		$SI_NUM = $_REQUEST["si_num"];
		

	if(isset($_GET["noooo"])){


      		$sql = "UPDATE store_imformation SET SI_SELLSTAY=0 WHERE SI_NUM = '$SI_NUM'";

      		$update = $connectPDO->query($sql);

      		header("Location:../../carUp.php"); 

     }else if(isset($_GET["okooo"])){


      		$sql = "UPDATE store_imformation set SI_SELLSTAY=1 where SI_NUM = '$SI_NUM' ";

      		$update = $connectPDO->query($sql);

      		header("Location:../../carUp.php");
    }

		}//try
		catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
		}

		 ?>