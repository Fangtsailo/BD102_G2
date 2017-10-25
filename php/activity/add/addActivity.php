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
<body>
	
<?php 
require_once('../../common/globalVar.php');

$acNo = $_REQUEST["acNo"];
foreach( $_FILES["upfile"]["error"] as $i=>$data ){
	// 查看陣列裡的每個值
	switch($_FILES["upfile"]["error"][$i]){
		// 寫法順序[$i]在最後
		case 0:

			switch ($i) {
				case ($i==0 || $i==1):

					$from = $_FILES["upfile"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upfile"]["name"][$i],"big5","utf-8");
					$GLOBALS["newFileName"][$i]= $acNo."-".$i.substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_BANNER_PIC_PATH.$GLOBALS["newFileName"][$i] ;
					copy($from, $to);
					echo "上傳成功";
					echo $GLOBALS["newFileName"][$i]."<br>";
					break;

				case ($i==2 || $i==3 || $i==4):		

					$from = $_FILES["upfile"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upfile"]["name"][$i],"big5","utf-8");
					$GLOBALS["newFileName"][$i]= $acNo."-".$i.substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_ACT_PIC_PATH.$GLOBALS["newFileName"][$i] ;
					copy($from, $to);
					echo "上傳成功";
					echo $GLOBALS["newFileName"][$i]."<br>";
					// echo "上傳成功";
					break;

				case ($i==5 || $i==6 || $i==7):		

					$from = $_FILES["upfile"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upfile"]["name"][$i],"big5","utf-8");
					$GLOBALS["newFileName"][$i]= $acNo."-".$i.substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH.$GLOBALS["newFileName"][$i] ;
					copy($from, $to);
					echo "上傳成功";
					echo $GLOBALS["newFileName"][$i]."<br>";
					break;

				case ($i==8 || $i==9 || $i==10):

					$from = $_FILES["upfile"]["tmp_name"][$i];
					$FileName = mb_convert_encoding($_FILES["upfile"]["name"][$i],"big5","utf-8");
					$GLOBALS["newFileName"][$i]= $acNo."-".$i.substr($FileName,strpos($FileName,'.'));
					$to = "../../../".GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.$GLOBALS["newFileName"][$i] ;
					copy($from, $to);
					echo "上傳成功";
					echo $GLOBALS["newFileName"][$i]."<br>";
					break;

				default:
					
				break;
			}
		
		break;


		case 1:
		  echo "上傳失敗,不可超過" , ini_get("upload_max_filesize"),"<br>";
		  break;	
		case 2:
		  echo "上傳失敗,不可超過", $_REQUEST["MAX_FILE_SIZE"],"<br>";
		  break;	
		case 3:
		  echo "上傳失敗,上傳檔案不完整<br>";
		  break;	
		case 4:
		  echo "檔案未選<br>";
		  break;	
		default:
			echo "error : " , $_FILES["upFile"]["error"][$i];
	}	
}

try{
	require_once("../../PDO/connectPDO.php");
	$memNo = $_SESSION["memNo"];
	$queryActNumSQL = "SELECT SI_NUM FROM store_imformation WHERE SI_MEMNO = '$memNo'";
	$queryActNum=$connectPDO->query($queryActNumSQL);
	$queryActNumRow = $queryActNum->fetchObject();
	$actNum = $queryActNumRow->SI_NUM;
	$connectPDO->beginTransaction();
	$addActSQL = "INSERT INTO activity (AC_STORE_NUM,AC_NAME,AC_TIME,AC_MEM_COUNT,AC_DETAIL1,AC_DETAIL2,AC_DETAIL3,AC_BANNER1,AC_BANNER2,AC_PIC,AC_PIC2,AC_PIC3,AC_INGREDIENT_PIC,AC_INGREDIENT_PIC2,AC_INGREDIENT_PIC3,AC_PRODUCT_PIC,AC_PRODUCT_PIC2,AC_PRODUCT_PIC3,AC_CHECKSTAY) VALUE ('$actNum',:acName,:acTime,:acParticipants,:ac_detail1,:ac_detail2,:ac_detail3,:image0,::image1,::image2,::image3,::image4,::image5,::image6,::image7,::image8,::image9,::image10,null)";
	$addActivity = $connectPDO->prepare($addActSQL);
	$addActivity->bindValue(":acName",$_REQUEST["acName"]);
	$addActivity->bindValue(":acTime",$_REQUEST["acTime"]);
	$addActivity->bindValue(":acParticipants",$_REQUEST["acParticipants"]);
	$addActivity->bindValue(":ac_detail1",$_REQUEST["ac_detail1"]);
	$addActivity->bindValue(":ac_detail2",$_REQUEST["ac_detail2"]);
	$addActivity->bindValue(":ac_detail3",$_REQUEST["ac_detail3"]);
	for ($i=0; $i <=10 ; $i++) {
	$addActivity->bindValue(":image[$i]",$GLOBALS["newFileName"][$i]);
	}
	$connectPDO->commit(); //確認交易完成
	// header('Location:../../../bossActivity.php');
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}

 ?>


</body>
</html>