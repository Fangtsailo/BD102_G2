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

		//require_once("php/common/globalVar.php");


		//$mem_ID=$_SESSION["memId"];
		//$mem_No=$_SESSION["memNo"];

		$mem_No=$_SESSION["memNo"];

		if($_REQUEST["delLogo"]==="1"){

			

			$sql = "UPDATE store_imformation SET SI_LOGO= null WHERE SI_MEMNO =$mem_No and SI_TYPE=0";
      		$update = $connectPDO->query($sql);

      		//header("Location:../../../../FMybusinessStore.php");
      

      	}


      	if($_REQUEST["delImg1"]==="1"){

			$sql = "UPDATE store_imformation SET SI_BIMG_1= null WHERE SI_MEMNO =$mem_No and SI_TYPE=0";

      		$update = $connectPDO->query($sql);

      		//header("Location:../../../../FMybusinessStore.php");
      

      	}



      	if($_REQUEST["delImg2"]==="1"){

			

			$sql = "UPDATE store_imformation SET SI_BIMG_2= null WHERE SI_MEMNO =$mem_No and SI_TYPE=0";

      		$update = $connectPDO->query($sql);

      		//header("Location:../../../../FMybusinessStore.php");
      

      	}



      	if($_REQUEST["delImg3"]==="1"){

			

			$sql = "UPDATE store_imformation SET SI_BIMG_3= null WHERE SI_MEMNO =$mem_No and SI_TYPE=0";

      		$update = $connectPDO->query($sql);

      		//header("Location:../../../../FMybusinessStore.php");
      

      	}

		//這要接ＳＥＳＳＩＯＮ============================
		//$mem_ID='ccc';
		//$mem_No='7';
		//這要接ＳＥＳＳＩＯＮ============================

		$SI_NAME = $_REQUEST["SI_NAME"];

		$sql = "select * from store_imformation where SI_MEMNO='$mem_No' and SI_TYPE='0'";

		$store_imformation = $connectPDO->query($sql);

		$store_imformation_Row=$store_imformation->fetchObject();

		//$SI_NUM = $store_imformation_Row->SI_NUM;


//exit($SI_NUM);



		$shopPosition= mb_substr($_REQUEST["SI_ADDR"],0,2,"UTF-8");
			$position = 0;
						switch($shopPosition){
							case '桃園':
								$position= 0;
								break;
							case '台北':
								$position= 0;
								break;
							case '臺北':
								$position= 0;
								break;
							case '新北':
								$position= 0;
								break;	
							case '宜蘭':
								$position= 0;
								break;
							case '基隆':
								$position= 0;
								break;
							case '新竹':
								$position= 0;
								break;
							case '苗栗':
								$position= 1;
								break;	
							case '台中':
								$position= 1;
								break;
							case '臺中':
								$position= 1;
								break;
							case '彰化':
								$position= 1;
								break;
							case '雲林':
								$position= 1;
								break;
							case '南投':
								$position= 1;
								break;
							case '嘉義':
								$position= 2;
								break;
							case '台南':
								$position= 2;
								break;
							case '臺南':
								$position= 2;
								break;
							case '高雄':
								$position= 2;
								break;
							case '屏東':
								$position= 2;
								break;
							case '台東':
								$position= 3;
								break;
							case '臺東':
								$position= 3;
								break;
							case '花蓮':
								$position= 3;
								break;
						} //switch







				$addDate=$_REQUEST['addShopDate'];


				//date("Y/m/d H:i", $shop_message_row->SPMSG_TIME)

				









		if ($store_imformation->rowCount()==0) {

<<<<<<< HEAD
			$sql_insert = "INSERT INTO store_imformation (SI_MEMNO,SI_NAME,SI_PHONE,SI_ADDR,SI_RESTDAY,SI_STARTTIME,SI_ENDTIME,SI_STORY,SI_TYPE,SI_CHECKSTAY)
    			VALUES (:SI_MEMNO,:SI_NAME,:SI_PHONE,:SI_ADDR,:SI_RESTDAY,:SI_STARTTIME,:SI_ENDTIME,:SI_STORY,0,null)";
=======
			$sql_insert = "INSERT INTO store_imformation (SI_MEMNO,SI_NAME,SI_PHONE,SI_ADDR,SI_RESTDAY,SI_STARTTIME,SI_ENDTIME,SI_STORY,SI_TYPE,SI_CHECKSTAY,SI_POSITION,SI_ADDDATE,SI_LAT,SI_LNG)
    			VALUES (:SI_MEMNO,:SI_NAME,:SI_PHONE,:SI_ADDR,:SI_RESTDAY,:SI_STARTTIME,:SI_ENDTIME,:SI_STORY,0,null,$position,:SI_ADDDATE,:SI_LAT,:SI_LNG)";
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

    		$store_imformation_insert = $connectPDO ->prepare($sql_insert);
    		$store_imformation_insert -> bindValue(":SI_MEMNO",$mem_No);
    		$store_imformation_insert -> bindValue(":SI_NAME",$_REQUEST["SI_NAME"]);
    		$store_imformation_insert -> bindValue(":SI_PHONE",$_REQUEST["SI_PHONE"]);
    		$store_imformation_insert -> bindValue(":SI_ADDR",$_REQUEST["SI_ADDR"]);
    		$store_imformation_insert -> bindValue(":SI_RESTDAY",$_REQUEST["SI_RESTDAY"]);
    		$store_imformation_insert -> bindValue(":SI_STARTTIME",$_REQUEST["SI_STARTTIME"]);
    		$store_imformation_insert -> bindValue(":SI_ENDTIME",$_REQUEST["SI_ENDTIME"]);
    		$store_imformation_insert -> bindValue(":SI_STORY",$_REQUEST["SI_STORY"]);
    		$store_imformation_insert -> bindValue(":SI_ADDDATE",$_REQUEST["addShopDate"]);
    		$store_imformation_insert -> bindValue(":SI_LAT",$_REQUEST["SI_LAT"]);
    		$store_imformation_insert -> bindValue(":SI_LNG",$_REQUEST["SI_LNG"]);
    		$store_imformation_insert -> execute();



    		$sql_find_SI_NUM ="select * from store_imformation where SI_MEMNO=$mem_No and SI_TYPE='0'";
    		$store_imformation_find_SI_NUM = $connectPDO->query($sql_find_SI_NUM);
    		$store_imformation_find_SI_NUM_Row = $store_imformation_find_SI_NUM -> fetchObject();

    		$SI_NUM=$store_imformation_find_SI_NUM_Row->SI_NUM;




    // 		foreach( $_FILES["uploadImg"]["error"] as $i=>$data ){
				// // 以foreach叫出每一陣列
				// 	if($_FILES["uploadImg"]["error"][$i]==0){
						
				// 			  $from = $_FILES["uploadImg"]["tmp_name"][$i];
				// 			  $to = "../../../../img/store/banners/".$SI_NUM."_BgIMG_00".($i+1).".jpg";
				// 			  copy($from, $to);
				// 			  $SI_NUM_file=$SI_NUM."_BgIMG_00".($i+1);
				// 			  $SI_BGIMG_COL="SI_BIMG_".($i+1);
	   //  					  $sql_update_logo = "UPDATE store_imformation SET $SI_BGIMG_COL='$SI_NUM_file' WHERE SI_MEMNO=$mem_No and SI_TYPE='0'";
	   //  					  $update_logo = $connectPDO->query($sql_update_logo);

				// 				//echo "error : " , $_FILES["uploadImg"]["error"][$i];
						
				// 	}	
				// }



				foreach( $_FILES["uploadImg"]["error"] as $i=>$data ){
				// 以foreach叫出每一陣列
					if($_FILES["uploadImg"]["error"][$i]==0){
						
							  $from = $_FILES["uploadImg"]["tmp_name"][$i];
							  $FileName = mb_convert_encoding($_FILES["uploadImg"]["name"][$i],"big5","utf-8");
							  $to = "../../../../img/store/banners/".$SI_NUM."_BgIMG_00".($i+1).substr($FileName,strpos($FileName,'.'));
							  copy($from, $to);
							  $SI_NUM_file=$SI_NUM."_BgIMG_00".($i+1).substr($FileName,strpos($FileName,'.'));
							  $SI_BGIMG_COL="SI_BIMG_".($i+1);
	    					  $sql_update_logo = "UPDATE store_imformation SET $SI_BGIMG_COL='$SI_NUM_file' WHERE SI_MEMNO=$mem_No and SI_TYPE='0'";
	    					  $update_logo = $connectPDO->query($sql_update_logo);

								//echo "error : " , $_FILES["uploadImg"]["error"][$i];
						
					}	
				}


			

<<<<<<< HEAD


=======


>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
				foreach( $_FILES["uploadLogoImg"]["error"] as $i=>$data ){
				// 以foreach叫出每一陣列
					if($_FILES["uploadLogoImg"]["error"][$i]==0){
						
							  $from = $_FILES["uploadLogoImg"]["tmp_name"][$i];
							  $FileName = mb_convert_encoding($_FILES["uploadLogoImg"]["name"][$i],"big5","utf-8");
							  $to = "../../../../img/store/logo/".$SI_NUM."_logo".substr($FileName,strpos($FileName,'.'));
							  copy($from, $to);
							  $SI_NUM_file=$SI_NUM."_logo".substr($FileName,strpos($FileName,'.'));
	    					  $sql_update_logo = "UPDATE store_imformation SET SI_LOGO='$SI_NUM_file' WHERE SI_MEMNO=$mem_No and SI_TYPE='0'";
	    					  $update_logo = $connectPDO->query($sql_update_logo);
							 
						
					}

				}


    		// $SI_NAME=$store_imformation_find_SI_NUM_Row->SI_NAME;

    		// $SI_NUM=$store_imformation_find_SI_NUM_Row->SI_NUM;

    		// $sql_insert_img = "UPDATE store_imformation SET SI_LOGO=:SI_LOGO,SI_BIMG_1=:SI_BIMG_1,SI_BIMG_2=:SI_BIMG_2,SI_BIMG_3=:SI_BIMG_3 where SI_NUM=$SI_NUM";

    		// $store_imformation_insert_img =  $connectPDO -> prepare($sql_insert_img);
    		// $store_imformation_insert_img -> bindValue(":SI_LOGO",$SI_NUM."_logo");
    		// $store_imformation_insert_img -> bindValue(":SI_BIMG_1",$SI_NUM."_BgIMG_001");
    		// $store_imformation_insert_img -> bindValue(":SI_BIMG_2",$SI_NUM."_BgIMG_002");
    		// $store_imformation_insert_img -> bindValue(":SI_BIMG_3",$SI_NUM."_BgIMG_003");
    		// $store_imformation_insert_img -> execute();


    		header("Location:../../../../FMybusinessStore.php");


		}else{ // if($store_imformation->rowCount()==0) 


			//if(isset($_FILES["uploadImg"])){

			$SI_NUM = $store_imformation_Row->SI_NUM;

				foreach( $_FILES["uploadImg"]["error"] as $i=>$data ){
				// 以foreach叫出每一陣列
					if($_FILES["uploadImg"]["error"][$i]==0){
						
							  $from = $_FILES["uploadImg"]["tmp_name"][$i];
							  $FileName = mb_convert_encoding($_FILES["uploadImg"]["name"][$i],"big5","utf-8");
							  $to = "../../../../img/store/banners/".$SI_NUM."_BgIMG_00".($i+1).substr($FileName,strpos($FileName,'.'));
							  copy($from, $to);
							  $SI_NUM_file=$SI_NUM."_BgIMG_00".($i+1).substr($FileName,strpos($FileName,'.'));
							  $SI_BGIMG_COL="SI_BIMG_".($i+1);
	    					  $sql_update_logo = "UPDATE store_imformation SET $SI_BGIMG_COL='$SI_NUM_file' WHERE SI_MEMNO=$mem_No and SI_TYPE='0'";
	    					  $update_logo = $connectPDO->query($sql_update_logo);

								//echo "error : " , $_FILES["uploadImg"]["error"][$i];
						
					}	
				}


			



				foreach( $_FILES["uploadLogoImg"]["error"] as $i=>$data ){
				// 以foreach叫出每一陣列
					if($_FILES["uploadLogoImg"]["error"][$i]==0){
						
							  $from = $_FILES["uploadLogoImg"]["tmp_name"][$i];
							  $FileName = mb_convert_encoding($_FILES["uploadLogoImg"]["name"][$i],"big5","utf-8");
							  $to = "../../../../img/store/logo/".$SI_NUM."_logo".substr($FileName,strpos($FileName,'.'));
							  copy($from, $to);
							  $SI_NUM_file=$SI_NUM."_logo".substr($FileName,strpos($FileName,'.'));
	    					  $sql_update_logo = "UPDATE store_imformation SET SI_LOGO='$SI_NUM_file' WHERE SI_MEMNO=$mem_No and SI_TYPE='0'";
	    					  $update_logo = $connectPDO->query($sql_update_logo);
							 
						
					}

				}

				// $SI_NUM_file=$SI_NUM."_logo";

    // 			$sql_update_logo = "UPDATE store_imformation SET SI_LOGO='$SI_NUM_file' WHERE SI_MEMNO=$mem_No";

    // 			$update_logo = $connectPDO->query($sql_update_logo);

    			// echo "string";

    			// echo $_FILES["uploadLogoImg"]["error"][0];


			//}













<<<<<<< HEAD
			$sql_update = "UPDATE store_imformation SET SI_NAME=:SI_NAME,SI_PHONE=:SI_PHONE,SI_ADDR=:SI_ADDR,SI_RESTDAY=:SI_RESTDAY,SI_STARTTIME=:SI_STARTTIME,SI_ENDTIME=:SI_ENDTIME,SI_STORY=:SI_STORY,SI_TYPE=0,SI_CHECKSTAY=1 where SI_MEMNO=$mem_No and SI_TYPE='0'";
=======
			$sql_update = "UPDATE store_imformation SET SI_NAME=:SI_NAME,SI_PHONE=:SI_PHONE,SI_ADDR=:SI_ADDR,SI_RESTDAY=:SI_RESTDAY,SI_STARTTIME=:SI_STARTTIME,SI_ENDTIME=:SI_ENDTIME,SI_STORY=:SI_STORY,SI_TYPE=0,SI_CHECKSTAY=1,SI_ADDDATE=:SI_ADDDATE,SI_LAT=:SI_LAT,SI_LNG=:SI_LNG,SI_POSITION=$position where SI_MEMNO=$mem_No and SI_TYPE='0'";
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

			//SI_LOGO=:SI_LOGO,SI_BIMG_1=:SI_BIMG_1,SI_BIMG_2=:SI_BIMG_2,SI_BIMG_3=:SI_BIMG_3

			$store_imformation_insert = $connectPDO->prepare($sql_update);
			$store_imformation_insert -> bindValue(":SI_NAME",$_REQUEST["SI_NAME"]);
    		$store_imformation_insert -> bindValue(":SI_PHONE",$_REQUEST["SI_PHONE"]);
    		$store_imformation_insert -> bindValue(":SI_ADDR",$_REQUEST["SI_ADDR"]);
    		$store_imformation_insert -> bindValue(":SI_RESTDAY",$_REQUEST["SI_RESTDAY"]);
    		$store_imformation_insert -> bindValue(":SI_STARTTIME",$_REQUEST["SI_STARTTIME"]);
    		$store_imformation_insert -> bindValue(":SI_ENDTIME",$_REQUEST["SI_ENDTIME"]);
    		$store_imformation_insert -> bindValue(":SI_STORY",$_REQUEST["SI_STORY"]);
    		$store_imformation_insert -> bindValue(":SI_ADDDATE",$_REQUEST["addShopDate"]);
    		$store_imformation_insert -> bindValue(":SI_LAT",$_REQUEST["SI_LAT"]);
    		$store_imformation_insert -> bindValue(":SI_LNG",$_REQUEST["SI_LNG"]);
    		// $store_imformation_insert -> bindValue(":SI_LOGO",$SI_NUM."_logo");
    		// $store_imformation_insert -> bindValue(":SI_BIMG_1",$SI_NUM."_BgIMG_001");
    		// $store_imformation_insert -> bindValue(":SI_BIMG_2",$SI_NUM."_BgIMG_002");
    		// $store_imformation_insert -> bindValue(":SI_BIMG_3",$SI_NUM."_BgIMG_003");
    		$store_imformation_insert -> execute();



    		// if($store_imformation_Row->SI_LOGO != null){

    		// 	$SI_NUM_file=$SI_NUM."_logo";

    		// 	$sql_update_logo = "UPDATE store_imformation SET SI_LOGO=$SI_NUM_file WHERE SI_MEMNO=$mem_No";

    		// 	$update_logo = $connectPDO->prepare($sql_update_logo);

    		// }


    		// if($store_imformation_Row->SI_LOGO != null){

    		// 	$SI_NUM_file=$SI_NUM."_logo";

    		// 	$sql_update_logo = "UPDATE store_imformation SET SI_LOGO=$SI_NUM_file WHERE SI_MEMNO=$mem_No";

    		// 	$update_logo = $connectPDO->prepare($sql_update_logo);

    		// }


    		header("Location:../../../../FMybusinessStore.php");


		}//else




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}



 ?>



