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

		$memNo=$_SESSION["memNo"];

		//$mem_ID=$_SESSION["memId"];
		//$mem_No=$_SESSION["memNo"];

		// $mem_No="4";

		// $sql_mem_No_FIND_PD_SHOPNO="select * from store_imformation where SI_MEMNO=$mem_No and SI_TYPE=0";

		// $mem_No_FIND_PD_SHOPNO=$connectPDO->query($sql_mem_No_FIND_PD_SHOPNO);

		// $mem_No_FIND_PD_SHOPNO_ROW = $mem_No_FIND_PD_SHOPNO->fetchObject();

		// $PD_SHOPNO_By_Mem_No=$mem_No_FIND_PD_SHOPNO_ROW->SI_NUM;

		 $livePosition=$_REQUEST['livePosition'];
		 $livePosition_data=$_REQUEST['livePosition_data'];

		 $position =explode(",",$livePosition_data);







		$sql = "UPDATE store_imformation SET SI_LAT='$position[0]',SI_LNG='$position[1]' WHERE SI_NUM =$livePosition";

		$connectPDO->query($sql);


		

		

			

			

      		

      		


      		//header("Location:../../../../FMybusinessStore.php");
      





		header("Location:../../../../FMybusinessCarPosition.php");

		  	






      	
      	

		//這要接ＳＥＳＳＩＯＮ============================
		//$mem_ID='ccc';
		//$mem_No='7';
		//這要接ＳＥＳＳＩＯＮ============================

		//$SI_NAME = $_REQUEST["SI_NAME"];

		// $sql = "select * from product where PD_SHOPNO='$mem_No'";

		// $store_imformation = $connectPDO->query($sql);

		// $store_imformation_Row=$store_imformation->fetchObject();

		// $SI_NUM = $store_imformation_Row->SI_NUM;

		// if ($store_imformation->rowCount()==0) {

		// 	$sql_insert = "INSERT INTO store_imformation (SI_MEMNO,SI_NAME,SI_PHONE,SI_ADDR,SI_RESTDAY,SI_STARTTIME,SI_ENDTIME,SI_STORY,SI_TYPE,SI_CHECKSTAY)
  //   			VALUES (:SI_MEMNO,:SI_NAME,:SI_PHONE,:SI_ADDR,:SI_RESTDAY,:SI_STARTTIME,:SI_ENDTIME,:SI_STORY,1,1)";

  //   		$store_imformation_insert = $connectPDO ->prepare($sql_insert);
  //   		$store_imformation_insert -> bindValue(":SI_MEMNO",$mem_No);
  //   		$store_imformation_insert -> bindValue(":SI_NAME",$_REQUEST["SI_NAME"]);
  //   		$store_imformation_insert -> bindValue(":SI_PHONE",$_REQUEST["SI_PHONE"]);
  //   		$store_imformation_insert -> bindValue(":SI_ADDR",$_REQUEST["SI_ADDR"]);
  //   		$store_imformation_insert -> bindValue(":SI_RESTDAY",$_REQUEST["SI_RESTDAY"]);
  //   		$store_imformation_insert -> bindValue(":SI_STARTTIME",$_REQUEST["SI_STARTTIME"]);
  //   		$store_imformation_insert -> bindValue(":SI_ENDTIME",$_REQUEST["SI_ENDTIME"]);
  //   		$store_imformation_insert -> bindValue(":SI_STORY",$_REQUEST["SI_STORY"]);
  //   		$store_imformation_insert -> execute();



  //   		$sql_find_SI_NUM ="select * from store_imformation where SI_MEMNO=$mem_No and SI_TYPE='1'";
  //   		$store_imformation_find_SI_NUM = $connectPDO->query($sql_find_SI_NUM);
  //   		$store_imformation_find_SI_NUM_Row = $store_imformation_find_SI_NUM -> fetchObject();

  //   		$SI_NUM=$store_imformation_find_SI_NUM_Row->SI_NUM;




  //   		foreach( $_FILES["uploadImg"]["error"] as $i=>$data ){
		// 		// 以foreach叫出每一陣列
		// 			if($_FILES["uploadImg"]["error"][$i]==0){
						
		// 					  $from = $_FILES["uploadImg"]["tmp_name"][$i];
		// 					  $to = "../../../../img/storeBgImg/".$SI_NUM."_BgIMG_00".($i+1).".jpg";
		// 					  copy($from, $to);
		// 					  $SI_NUM_file=$SI_NUM."_BgIMG_00".($i+1);
		// 					  $SI_BGIMG_COL="SI_BIMG_".($i+1);
	 //    					  $sql_update_logo = "UPDATE store_imformation SET $SI_BGIMG_COL='$SI_NUM_file' WHERE SI_MEMNO=$mem_No";
	 //    					  $update_logo = $connectPDO->query($sql_update_logo);

		// 						//echo "error : " , $_FILES["uploadImg"]["error"][$i];
						
		// 			}	
		// 		}



		// 	foreach( $_FILES["uploadLogoImg"]["error"] as $i=>$data ){
		// 		// 以foreach叫出每一陣列
		// 			if($_FILES["uploadLogoImg"]["error"][$i]==0){
						
		// 					  $from = $_FILES["uploadLogoImg"]["tmp_name"][$i];
		// 					  $to = "../../../../img/logo/".$SI_NUM."_logo.jpg";
		// 					  copy($from, $to);
		// 					  $SI_NUM_file=$SI_NUM."_logo";
	 //    					  $sql_update_logo = "UPDATE store_imformation SET SI_LOGO='$SI_NUM_file' WHERE SI_MEMNO=$mem_No";
	 //    					  $update_logo = $connectPDO->query($sql_update_logo);
							 
						
		// 			}

		// 		}


  //   		// $SI_NAME=$store_imformation_find_SI_NUM_Row->SI_NAME;

  //   		// $SI_NUM=$store_imformation_find_SI_NUM_Row->SI_NUM;

  //   		// $sql_insert_img = "UPDATE store_imformation SET SI_LOGO=:SI_LOGO,SI_BIMG_1=:SI_BIMG_1,SI_BIMG_2=:SI_BIMG_2,SI_BIMG_3=:SI_BIMG_3 where SI_NUM=$SI_NUM";

  //   		// $store_imformation_insert_img =  $connectPDO -> prepare($sql_insert_img);
  //   		// $store_imformation_insert_img -> bindValue(":SI_LOGO",$SI_NUM."_logo");
  //   		// $store_imformation_insert_img -> bindValue(":SI_BIMG_1",$SI_NUM."_BgIMG_001");
  //   		// $store_imformation_insert_img -> bindValue(":SI_BIMG_2",$SI_NUM."_BgIMG_002");
  //   		// $store_imformation_insert_img -> bindValue(":SI_BIMG_3",$SI_NUM."_BgIMG_003");
  //   		// $store_imformation_insert_img -> execute();


  //   		header("Location:../../../../FMybusinessStore.php");


		// }else{ // if($store_imformation->rowCount()==0) 


		// 	//if(isset($_FILES["uploadImg"])){

		// 		foreach( $_FILES["uploadImg"]["error"] as $i=>$data ){
		// 		// 以foreach叫出每一陣列
		// 			if($_FILES["uploadImg"]["error"][$i]==0){
						
		// 					  $from = $_FILES["uploadImg"]["tmp_name"][$i];
		// 					  $to = "../../../../img/storeBgImg/".$SI_NUM."_BgIMG_00".($i+1).".jpg";
		// 					  copy($from, $to);
		// 					  $SI_NUM_file=$SI_NUM."_BgIMG_00".($i+1);
		// 					  $SI_BGIMG_COL="SI_BIMG_".($i+1);
	 //    					  $sql_update_logo = "UPDATE store_imformation SET $SI_BGIMG_COL='$SI_NUM_file' WHERE SI_MEMNO=$mem_No";
	 //    					  $update_logo = $connectPDO->query($sql_update_logo);

		// 						//echo "error : " , $_FILES["uploadImg"]["error"][$i];
						
		// 			}	
		// 		}

		// 	//}//if(isset($_FILES["uploadImg"])){








		// 	//if($_FILES["uploadLogoImg"]["error"][0]==0){

		// 		foreach( $_FILES["uploadLogoImg"]["error"] as $i=>$data ){
		// 		// 以foreach叫出每一陣列
		// 			if($_FILES["uploadLogoImg"]["error"][$i]==0){
						
		// 					  $from = $_FILES["uploadLogoImg"]["tmp_name"][$i];
		// 					  $to = "../../../../img/logo/".$SI_NUM."_logo.jpg";
		// 					  copy($from, $to);
		// 					  $SI_NUM_file=$SI_NUM."_logo";
	 //    					  $sql_update_logo = "UPDATE store_imformation SET SI_LOGO='$SI_NUM_file' WHERE SI_MEMNO=$mem_No";
	 //    					  $update_logo = $connectPDO->query($sql_update_logo);
							 
						
		// 			}

		// 		}


		// 		// $SI_NUM_file=$SI_NUM."_logo";

  //   // 			$sql_update_logo = "UPDATE store_imformation SET SI_LOGO='$SI_NUM_file' WHERE SI_MEMNO=$mem_No";

  //   // 			$update_logo = $connectPDO->query($sql_update_logo);

  //   			// echo "string";

  //   			// echo $_FILES["uploadLogoImg"]["error"][0];


		// 	//}













		// 	$sql_update = "UPDATE store_imformation SET SI_NAME=:SI_NAME,SI_PHONE=:SI_PHONE,SI_ADDR=:SI_ADDR,SI_RESTDAY=:SI_RESTDAY,SI_STARTTIME=:SI_STARTTIME,SI_ENDTIME=:SI_ENDTIME,SI_STORY=:SI_STORY,SI_TYPE=1,SI_CHECKSTAY=1 where SI_MEMNO=$mem_No";

		// 	//SI_LOGO=:SI_LOGO,SI_BIMG_1=:SI_BIMG_1,SI_BIMG_2=:SI_BIMG_2,SI_BIMG_3=:SI_BIMG_3

		// 	$store_imformation_insert = $connectPDO->prepare($sql_update);
		// 	$store_imformation_insert -> bindValue(":SI_NAME",$_REQUEST["SI_NAME"]);
  //   		$store_imformation_insert -> bindValue(":SI_PHONE",$_REQUEST["SI_PHONE"]);
  //   		$store_imformation_insert -> bindValue(":SI_ADDR",$_REQUEST["SI_ADDR"]);
  //   		$store_imformation_insert -> bindValue(":SI_RESTDAY",$_REQUEST["SI_RESTDAY"]);
  //   		$store_imformation_insert -> bindValue(":SI_STARTTIME",$_REQUEST["SI_STARTTIME"]);
  //   		$store_imformation_insert -> bindValue(":SI_ENDTIME",$_REQUEST["SI_ENDTIME"]);
  //   		$store_imformation_insert -> bindValue(":SI_STORY",$_REQUEST["SI_STORY"]);
  //   		// $store_imformation_insert -> bindValue(":SI_LOGO",$SI_NUM."_logo");
  //   		// $store_imformation_insert -> bindValue(":SI_BIMG_1",$SI_NUM."_BgIMG_001");
  //   		// $store_imformation_insert -> bindValue(":SI_BIMG_2",$SI_NUM."_BgIMG_002");
  //   		// $store_imformation_insert -> bindValue(":SI_BIMG_3",$SI_NUM."_BgIMG_003");
  //   		$store_imformation_insert -> execute();



  //   		// if($store_imformation_Row->SI_LOGO != null){

  //   		// 	$SI_NUM_file=$SI_NUM."_logo";

  //   		// 	$sql_update_logo = "UPDATE store_imformation SET SI_LOGO=$SI_NUM_file WHERE SI_MEMNO=$mem_No";

  //   		// 	$update_logo = $connectPDO->prepare($sql_update_logo);

  //   		// }


  //   		// if($store_imformation_Row->SI_LOGO != null){

  //   		// 	$SI_NUM_file=$SI_NUM."_logo";

  //   		// 	$sql_update_logo = "UPDATE store_imformation SET SI_LOGO=$SI_NUM_file WHERE SI_MEMNO=$mem_No";

  //   		// 	$update_logo = $connectPDO->prepare($sql_update_logo);

  //   		// }


  //   		header("Location:../../../../FMybusinessStore.php");


		//else




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}



 ?>



