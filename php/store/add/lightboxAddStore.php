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
try {
		require_once("../../PDO/connectPDO.php");
		//啟動交易管理
		$connectPDO->beginTransaction();
		//寫入主檔
		$newShopSQL = "insert into store_imformation (SI_MEMNO,SI_NAME,SI_STORY,SI_ADDR,SI_STARTTIME,SI_ENDTIME,SI_TYPE,SI_PHONE,SI_ADDDATE) values (:memNo,:storeName,:story,:address,:startTime,:endTime,:storeType,:tel,:addDate)";
		$addShop = $connectPDO->prepare( $newShopSQL );
		$addShop->bindValue(":memNo" ,$_SESSION["memNo"] );
		$addShop->bindValue(":storeName" ,$_REQUEST["storeName"] );
		$addShop->bindValue(":story" ,$_REQUEST["story"] );
		$addShop->bindValue(":address" ,$_REQUEST["address"] );
		$addShop->bindValue(":tel" ,$_REQUEST["tel"] );
		$addShop->bindValue(":startTime" ,$_REQUEST["startTime"] );
		$addShop->bindValue(":endTime" ,$_REQUEST["endTime"] );
		$addShop->bindValue(":storeType" ,$_REQUEST["storeType"] );
		$addShop->bindValue(":addDate" ,$_REQUEST["addShopDate"] );
		$addShop->execute();
		$connectPDO->commit(); //確認交易完成
		header("Location:../../../homepage.php");
?>


<?php

	} catch (PDOException $e) {
		$connectPDO->rollback();
		echo "錯誤原因 : " , $e->getMessage(),"<br>";
		echo "行號 : " , $e->getLine(),"<br>";	
	}//try...catch

 ?>

	</body>
	</html>	
