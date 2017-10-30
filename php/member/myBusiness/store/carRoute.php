<?php 


	ob_start();
	session_start();


	try{



		require_once("../../../pdo/connectPDO.php");

		$memNo=$_SESSION["memNo"];
		



		 $sql_mem_No_FIND_SI_NUM="select * from store_imformation where SI_MEMNO=$memNo and SI_TYPE=1";
		 $mem_No_FIND_SI_NUM=$connectPDO->query($sql_mem_No_FIND_SI_NUM);
		$mem_No_FIND_SI_NUM_ROW=$mem_No_FIND_SI_NUM->fetchObject();

				$SI_NUM= $mem_No_FIND_SI_NUM_ROW->SI_NUM;
				echo $SI_NUM;



		if($_REQUEST["route1"]!=""){

			$sql_insert = "INSERT INTO bread_car_path (BCP_STORE_NUM,BCP_LOCATION,BCP_DESCRIBE) VALUES (:BCP_STORE_NUM,:BCP_LOCATION,:BCP_DESCRIBE)";
				 $bread_car_path_insert=$connectPDO->prepare($sql_insert);

				 $bread_car_path_insert->bindValue(":BCP_STORE_NUM",$SI_NUM);
				 $bread_car_path_insert->bindValue(":BCP_LOCATION",$_REQUEST["route1"]);
				 $bread_car_path_insert->bindValue(":BCP_DESCRIBE",$_REQUEST["BCP_DESCRIBE_1"]);
				 $bread_car_path_insert->execute();






  //   	$product_insert = $connectPDO->prepare($sql_insert);
  //   	$product_insert->bindValue(":PD_SHOPNO",$PD_SHOPNO_By_Mem_No);
  //   	$product_insert->bindValue(":PD_PRICE",$_REQUEST["PD_PRICE"]);
  //   	$product_insert->bindValue(":PD_NAME",$_REQUEST["PD_NAME"]);
  //   	$product_insert->bindValue(":PD_INTRO",$_REQUEST["PD_INTRO"]);
		// $product_insert->execute();

		}



		if($_REQUEST["route2"]!=""){

			echo "string2";
			$sql_insert = "INSERT INTO bread_car_path (BCP_STORE_NUM,BCP_LOCATION,BCP_DESCRIBE) VALUES (:BCP_STORE_NUM,:BCP_LOCATION,:BCP_DESCRIBE)";
				 $bread_car_path_insert=$connectPDO->prepare($sql_insert);

				 $bread_car_path_insert->bindValue(":BCP_STORE_NUM",$SI_NUM);
				 $bread_car_path_insert->bindValue(":BCP_LOCATION",$_REQUEST["route2"]);
				 $bread_car_path_insert->bindValue(":BCP_DESCRIBE",$_REQUEST["BCP_DESCRIBE_2"]);
				 $bread_car_path_insert->execute();

		}



		if($_REQUEST["route3"]!=""){

			echo "string3";
			$sql_insert = "INSERT INTO bread_car_path (BCP_STORE_NUM,BCP_LOCATION,BCP_DESCRIBE) VALUES (:BCP_STORE_NUM,:BCP_LOCATION,:BCP_DESCRIBE)";
			 $bread_car_path_insert=$connectPDO->prepare($sql_insert);

			 $bread_car_path_insert->bindValue(":BCP_STORE_NUM",$SI_NUM);
			 $bread_car_path_insert->bindValue(":BCP_LOCATION",$_REQUEST["route3"]);
			 $bread_car_path_insert->bindValue(":BCP_DESCRIBE",$_REQUEST["BCP_DESCRIBE_3"]);
			 $bread_car_path_insert->execute();


		}


		if($_REQUEST["route1_del"]!=""){

			$route_del=$_REQUEST["route1_del"];

			$sql="delete from bread_car_path where BCP_NO=$route_del";

			$delBCP=$connectPDO->query($sql);
			


		}



		if($_REQUEST["route2_del"]!=""){

			$route_del=$_REQUEST["route2_del"];

			$sql="delete from bread_car_path where BCP_NO=$route_del";

			$delBCP=$connectPDO->query($sql);

			echo "11111";
			


		}



		if($_REQUEST["route3_del"]!=""){

			$route_del=$_REQUEST["route3_del"];

			$sql="delete from bread_car_path where BCP_NO=$route_del";

			$delBCP=$connectPDO->query($sql);
			


		}

		//echo $_REQUEST["route1"];






		//echo $_REQUEST["route3"];

		//$mem_No=$_SESSION["memNo"];

		// $mem_No=$_SESSION["memNo"];

		// $sql_mem_No_FIND_PD_SHOPNO="select * from store_imformation where SI_MEMNO=$mem_No and SI_TYPE=0";

		// $mem_No_FIND_PD_SHOPNO=$connectPDO->query($sql_mem_No_FIND_PD_SHOPNO);

		// $mem_No_FIND_PD_SHOPNO_ROW = $mem_No_FIND_PD_SHOPNO->fetchObject();

		// $PD_SHOPNO_By_Mem_No=$mem_No_FIND_PD_SHOPNO_ROW->SI_NUM;





		


  //     	$sql_insert = "INSERT INTO product (PD_SHOPNO,PD_PRICE,PD_NAME,PD_INTRO)
  //   			VALUES (:PD_SHOPNO,:PD_PRICE,:PD_NAME,:PD_INTRO)";
  //   	$product_insert = $connectPDO->prepare($sql_insert);
  //   	$product_insert->bindValue(":PD_SHOPNO",$PD_SHOPNO_By_Mem_No);
  //   	$product_insert->bindValue(":PD_PRICE",$_REQUEST["PD_PRICE"]);
  //   	$product_insert->bindValue(":PD_NAME",$_REQUEST["PD_NAME"]);
  //   	$product_insert->bindValue(":PD_INTRO",$_REQUEST["PD_INTRO"]);
		// $product_insert->execute();



		

		header("Location:../../../../FMybusinessCarRouteAdd.php");

		  	






      	
      	






	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}



 ?>



