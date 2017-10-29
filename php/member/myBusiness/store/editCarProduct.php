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

		//$mem_ID=$_SESSION["memId"];
		//$mem_No=$_SESSION["memNo"];

		// $mem_No="4";

		// $sql_mem_No_FIND_PD_SHOPNO="select * from store_imformation where SI_MEMNO=$mem_No and SI_TYPE=0";

		// $mem_No_FIND_PD_SHOPNO=$connectPDO->query($sql_mem_No_FIND_PD_SHOPNO);

		// $mem_No_FIND_PD_SHOPNO_ROW = $mem_No_FIND_PD_SHOPNO->fetchObject();

		// $PD_SHOPNO_By_Mem_No=$mem_No_FIND_PD_SHOPNO_ROW->SI_NUM;






		$PD_NO=$_REQUEST["PD_NO"];

		$sql="select * from product where PD_NO=$PD_NO";

		$product_one=$connectPDO->query($sql);

		$product_one_Row=$product_one->fetchObject();

		if($_REQUEST["delProduct"]==="1"){


			echo $_REQUEST["delProduct"];


			

			$sql = "UPDATE product SET PD_PIC= null WHERE PD_NO =$PD_NO";

      		$update = $connectPDO->query($sql);


      		echo $PD_NO;

      		


      		//header("Location:../../../../FMybusinessStore.php");
      

      	}


      	$sql_insert = "UPDATE product SET PD_SHOPNO=:PD_SHOPNO,PD_PRICE=:PD_PRICE,PD_NAME=:PD_NAME,PD_INTRO=:PD_INTRO where PD_NO =$PD_NO";
    	$product_insert = $connectPDO->prepare($sql_insert);
    	$product_insert->bindValue(":PD_SHOPNO",$product_one_Row->PD_SHOPNO);
    	$product_insert->bindValue(":PD_PRICE",$_REQUEST["PD_PRICE"]);
    	$product_insert->bindValue(":PD_NAME",$_REQUEST["PD_NAME"]);
    	$product_insert->bindValue(":PD_INTRO",$_REQUEST["PD_INTRO"]);
		$product_insert->execute();



		foreach( $_FILES["PD_PIC"]["error"] as $i=>$data ){
				// 以foreach叫出每一陣列
			if($_FILES["PD_PIC"]["error"][$i]==0){

						$sql_pic="select * from product where PD_NO =$PD_NO";
						$product=$connectPDO->query($sql_pic);
						$productRow=$product->fetchObject();

						$PD_SHOPNO=$productRow->PD_SHOPNO;

					  $from = $_FILES["PD_PIC"]["tmp_name"][$i];
					  $FileName = mb_convert_encoding($_FILES["PD_PIC"]["name"][$i],"big5","utf-8");
					  $to = "../../../../img/store/products/".$PD_NO."-".$PD_SHOPNO.substr($FileName,strpos($FileName,'.'));
					  copy($from, $to);
					  $PD_PIC=$PD_NO."-".$PD_SHOPNO.substr($FileName,strpos($FileName,'.'));
					  $sql_update_PD_PIC = "UPDATE product SET PD_PIC='$PD_PIC' WHERE PD_NO=$PD_NO";
					  $update_PD_PIC = $connectPDO->query($sql_update_PD_PIC);
					 
				
			}

		}



		header("Location:../../../../FMybusinessCarProductList.php");

		  	






      	
      	

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



