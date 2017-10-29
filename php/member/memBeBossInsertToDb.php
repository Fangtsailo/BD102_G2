<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="img/trepun4.png">
<title>TrePun</title>
</head>
<body>

<?php 
try {
	//連線到資料庫
	require_once("../pdo/connectPDO.php");
	//取得前端送的資料
	$siType = $_SESSION["SI_TYPE"];
	$siName = $_SESSION["SI_NAME"];
	$siComfirmId = $_REQUEST["SI_COMFIRM_ID"];
	$siName = $_REQUEST["SI_NAME"];
	$siPhone = $_REQUEST["SI_PHONE"];
	$siStartTime = $_REQUEST["SI_STARTTIME"];
	$siEndTime = $_REQUEST["SI_ENDTIME"];
	$siStory = $_REQUEST["SI_STORY"];

	//編譯該指令
	$sql = "insert into store_imformation (SI_TYPE, SI_NAME, SI_COMFIRM_ID, SI_NAME, SI_PHONE, SI_STARTTIME, SI_ENDTIME, SI_STORY)
			value (:siType, :siName, :siComfirmId, :siName, :siPhone, :siStartTime, :siEndTime, :siStory)";

	//編譯該指令
	$siRow = $connectPDO->prepare($sql);

	//帶入實際參數資料 (":參數", $實際資料)
	$siRow->bindValue(":siType",$siType);
	$siRow->bindValue(":siName",$siName);
	$siRow->bindValue(":siComfirmId",$siComfirmId);
	$siRow->bindValue(":siName",$siName);
	$siRow->bindValue(":siPhone",$siPhone);
	$siRow->bindValue(":siStartTime",$siStartTime);
	$siRow->bindValue(":siEndTime",$siEndTime);
	$siRow->bindValue(":siStory",$siStory);

	//執行該指令
	if($siRow->execute()){
		echo "感謝您！表單已送出！請靜候我們的聯絡！";
		header("Refresh:5; url=../../memBeBoss1.php");
	}

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
} //try..catch
?>    
</body>
</html>