<?php 
ob_start();
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
</head>
<body>
 
<?php 
require_once('../../common/globalVar.php');

try{

	require_once("../../PDO/connectPDO.php");
	$acNum = $_REQUEST["acNo"];

	$connectPDO->beginTransaction();
	//先新增活動文字資訊以取得活動編號
	$addActSQL = "UPDATE activity SET AC_NAME=:acName,AC_TIME=:acTime,AC_PRICE=:acPrice,AC_INGREDIENT=:acIngrd,AC_MEM_COUNT=:acParticipants,AC_DETAIL1=:ac_detail1,AC_DETAIL2=:ac_detail2,AC_DETAIL3=:ac_detail3,AC_SECOND_NAME=:acSubName,AC_ADDRESS=:acAddress WHERE AC_NO = $acNum";

	$editActTxt = $connectPDO->prepare($editActSQL);
	$editActTxt->bindValue(":acName",$_REQUEST["acName"]);
	$editActTxt->bindValue(":acTime",$_REQUEST["acTime"]);
	$editActTxt->bindValue(":acPrice",$_REQUEST["acPrice"]);
	$editActTxt->bindValue(":acIngrd",$_REQUEST["acIngrd"]);
	$editActTxt->bindValue(":acParticipants",$_REQUEST["acParticipants"]);
	$editActTxt->bindValue(":ac_detail1",$_REQUEST["ac_detail1"]);
	$editActTxt->bindValue(":ac_detail2",$_REQUEST["ac_detail2"]);
	$editActTxt->bindValue(":ac_detail3",$_REQUEST["ac_detail3"]);
	$editActTxt->bindValue(":acSubName",$_REQUEST["acSubName"]);
	$editActTxt->bindValue(":acAddress",$_REQUEST["acAddress"]);
	$editActTxt -> execute();
	
	//取得該筆新增活動的活動編號
	
	
	// $queryAcNumSQL = "SELECT * FROM activity a JOIN store_imformation s ON a.AC_STORE_NUM = s.SI_NUM WHERE SI_MEMNO = '$memNo' AND SI_TYPE = '$storeType' ";
	// $queryAcNum = $connectPDO->query($queryAcNumSQL);
	// $queryAcNumRow = $queryAcNum->fetchObject();
	// $acNum = $queryAcNumRow->AC_NO;

	//上傳照片檔案
	foreach( $_FILES["upBanner"]["error"] as $i=>$data ){

		if( $_FILES["upBanner"]["error"][$i] ==0 ){

					$from = $_FILES["upBanner"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upBanner"]["name"][$i],"big5","utf-8");
					$newFileName= $acNum."-bnr-".($i+1).substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_PIC_PATH.$newFileName ;
					$AC_BANNER_COL = "AC_BANNER".($i+1);
					copy($from, $to);
					$UploadBannerSQL = "UPDATE activity SET $AC_BANNER_COL='$newFileName' WHERE AC_NO = $acNum";
					$UploadBanner = $connectPDO->query($UploadBannerSQL);
		}

	}

	foreach( $_FILES["upAct"]["error"] as $i=>$data ){

		if( $_FILES["upAct"]["error"][$i] ==0 ){

					$from = $_FILES["upAct"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upAct"]["name"][$i],"big5","utf-8");
					$newFileName= $acNum."-act-".($i+1).substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_ACT_PIC_PATH.$newFileName ;
					copy($from, $to);
					$AC_PIC_COL = "AC_PIC".($i+1);
					$UploadActPicSQL = "UPDATE activity SET $AC_PIC_COL='$newFileName' WHERE AC_NO = $acNum";
					$UploadActPic = $connectPDO->query($UploadActPicSQL);
		}
	}		

	foreach( $_FILES["upIngrd"]["error"] as $i=>$data ){

		if( $_FILES["upIngrd"]["error"][$i] ==0 ){
			
					$from = $_FILES["upIngrd"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upIngrd"]["name"][$i],"big5","utf-8");
					$newFileName= $acNum."-ingr-".($i+1).substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH.$newFileName;
					copy($from, $to);
					$AC_INGRD_COL = "AC_INGREDIENT_PIC".($i+1);
					$UploadIngrdPicSQL = "UPDATE activity SET $AC_INGRD_COL='$newFileName' WHERE AC_NO = $acNum";
					$UploadIngrdPic = $connectPDO->query($UploadIngrdPicSQL);
					

		}			
	}			

	foreach( $_FILES["upProd"]["error"] as $i=>$data ){

		if( $_FILES["upProd"]["error"][$i] ==0 ){
		

					$from = $_FILES["upProd"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upProd"]["name"][$i],"big5","utf-8");
					$newFileName= $acNum."-prod-".($i+1).substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.$newFileName;
					copy($from, $to);
					$AC_PROD_COL = "AC_PRODUCT_PIC".($i+1);
					$UploadProdPicSQL = "UPDATE activity SET $AC_PROD_COL='$newFileName' WHERE AC_NO = $acNum";
					$UploadProdPic = $connectPDO->query($UploadProdPicSQL);
					
		}			
	}			
		
	
		$connectPDO->commit(); //確認交易完成

		header('Location:../../../bossActivity.php');


}catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}



 ?>
 ?>


</body>
</html>