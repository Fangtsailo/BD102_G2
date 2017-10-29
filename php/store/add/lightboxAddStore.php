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
			$shopPosition= mb_substr($_REQUEST["address"],0,2,"UTF-8");
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

		require_once("../../PDO/connectPDO.php");
		//啟動交易管理
		$connectPDO->beginTransaction();
		//寫入主檔
		$newShopSQL = "insert into store_imformation (SI_NAME,SI_STORY,SI_ADDR,SI_STARTTIME,SI_ENDTIME,SI_TYPE,SI_PHONE,SI_ADDDATE,SI_POSITION,SI_SELLSTAY,SI_LNG,SI_LAT) values (:storeName,:story,:address,:startTime,:endTime,:storeType,:tel,:addDate,:position,1,:lng,:lat)";
		$addShop = $connectPDO->prepare( $newShopSQL );
		$addShop->bindValue(":storeName" ,$_REQUEST["storeName"] );
		$addShop->bindValue(":story" ,$_REQUEST["story"] );
		$addShop->bindValue(":address" ,$_REQUEST["address"] );
		$addShop->bindValue(":tel" ,$_REQUEST["tel"] );
		$addShop->bindValue(":startTime" ,$_REQUEST["startTime"] );
		$addShop->bindValue(":endTime" ,$_REQUEST["endTime"] );
		$addShop->bindValue(":storeType" ,$_REQUEST["storeType"] );
		$addShop->bindValue(":addDate" ,$_REQUEST["addShopDate"] );
		$addShop->bindValue(":position" ,$position );
		$addShop->bindValue(":lng" ,$_REQUEST["SI_lng"] );
		$addShop->bindValue(":lat" ,$_REQUEST["SI_lat"] );
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
