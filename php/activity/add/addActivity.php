<?php 
ob_start();
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php 
require_once('../../common/globalVar.php');

try{


	require_once("../../PDO/connectPDO.php");
	$memNo = $_SESSION["memNo"]; //取得店長的會員編號
	$storeType = $_REQUEST['storeType'];
	$queryActNumSQL = "SELECT SI_NUM FROM store_imformation WHERE SI_MEMNO = '$memNo'AND SI_TYPE = '$storeType' ";//以店長會員編號與店家型態找到要新增活動的店家編號
	$queryActNum=$connectPDO->query($queryActNumSQL);
	$queryActNumRow = $queryActNum->fetchObject();
	$ac_StoreNum = $queryActNumRow->SI_NUM;//抓出該店家編號

	$connectPDO->beginTransaction();
	//先新增活動文字資訊以取得活動編號
	$addActSQL = "INSERT INTO activity (AC_STORE_NUM,AC_NAME,AC_TIME,AC_MEM_COUNT,AC_DETAIL1,AC_DETAIL2,AC_DETAIL3,AC_CHECKSTAY) VALUE (:ac_StoreNum,:acName,:acTime,:acParticipants,:ac_detail1,:ac_detail2,:ac_detail3,null)";
	$addActTxt = $connectPDO->prepare($addActSQL);
	$addActTxt->bindValue(":ac_StoreNum",$ac_StoreNum);
	$addActTxt->bindValue(":acName",$_REQUEST["acName"]);
	$addActTxt->bindValue(":acTime",$_REQUEST["acTime"]);
	$addActTxt->bindValue(":acParticipants",$_REQUEST["acParticipants"]);
	$addActTxt->bindValue(":ac_detail1",$_REQUEST["ac_detail1"]);
	$addActTxt->bindValue(":ac_detail2",$_REQUEST["ac_detail2"]);
	$addActTxt->bindValue(":ac_detail3",$_REQUEST["ac_detail3"]);
	$addActTxt -> execute();
	
	//取得該筆新增活動的活動編號
	$acNum = $connectPDO->lastInsertId();
	

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
					$newFileName= $acNum."-ingrd-".($i+1).substr($FileName,strpos($FileName,'.'));
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
</html>