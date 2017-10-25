
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
	$acNo = $_REQUEST["acNo"];
	$connectPDO->beginTransaction();
	$editActSQL = "UPDATE activity SET AC_NAME=:acName,AC_TIME=:acTime,AC_MEM_COUNT=:acParticipants,AC_DETAIL1=:ac_detail1,AC_DETAIL2=:ac_detail2,AC_DETAIL3=:ac_detail3,AC_BANNER1=:image0,AC_BANNER2=:image1,AC_PIC=:image2,AC_PIC2=:image3,AC_PIC3=:image4,AC_INGREDIENT_PIC=:image5,AC_INGREDIENT_PIC2=:image6,AC_INGREDIENT_PIC3=:image7,AC_PRODUCT_PIC=:image8,AC_PRODUCT_PIC2=:image9,AC_PRODUCT_PIC3=:image10,AC_CHECKSTAY=null WHERE AC_NO='$acNo' ";
	$editActivity = $connectPDO->prepare($editActSQL);
	$editActivity->bindValue(":acName",$_REQUEST["acName"]);
	$editActivity->bindValue(":acTime",$_REQUEST["acTime"]);
	$editActivity->bindValue(":acParticipants",$_REQUEST["acParticipants"]);
	$editActivity->bindValue(":ac_detail1",$_REQUEST["ac_detail1"]);
	$editActivity->bindValue(":ac_detail2",$_REQUEST["ac_detail2"]);
	$editActivity->bindValue(":ac_detail3",$_REQUEST["ac_detail3"]);

	for ($i=0; $i <=10 ; $i++) {
	$editActivity->bindValue(":image[$i]",$GLOBALS["newFileName"][$i]);
	}

	$editActivity->execute();
	$connectPDO->commit(); //確認交易完成
	// header('Location:../../../bossActivity.php');
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}

 ?>


</body>
</html>