<?php 
try {
	require_once("php/common/globalVar.php");
	require_once("php/pdo/connectPDO.php");
	require_once("Store.php");
	require_once("BreadCarPath.php");
	require_once("Bread.php");
	require_once("ActivityObj.php");
	require_once("Message.php");
	$GLOBALS["connectPDO"] = $connectPDO;
	$GLOBALS["store"] = new Store();
//其他店家推薦======================================
	$otherStoreItemArr = array(
		array("123", "山上麵包", "新興店家，主推自家創意麵包..."),
		array("123", "山上麵包", "新興店家，主推自家創意麵包..."),
		array("123", "山上麵包", "新興店家，主推自家創意麵包..."),
		array("123", "山上麵包", "新興店家，主推自家創意麵包..."),
		array("123", "山上麵包", "新興店家，主推自家創意麵包..."),
		array("123", "山上麵包", "新興店家，主推自家創意麵包...")
	);
} catch(PDOException $e) {
	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";
}
	//轉換數字成星期文字
	function transNumToWord($num) {
		$word = "一";
		switch ($num) {
			case 1:
				$word = "一";
				break;
			case 2:
				$word = "二";
				break;
			case 3:
				$word = "三";
				break;
			case 4:
				$word = "四";
				break;
			case 5:
				$word = "五";
				break;
			case 6:
				$word = "六";
				break;
			case 7:
				$word = "日";
				break;
			default:
				$word = "國定假日";
		}
		return $word;
	}
	//特定num的會員有沒有追蹤特定店家
	function isFollowStoreByMemNum($memNum, $storeId) {
		$isFollow = false;
		if ($memNum != -1) {
			$sql = "SELECT * FROM follow WHERE SI_NUM=$storeId AND MEM_NO=$memNum";
			$stmt = $GLOBALS["connectPDO"] ->query($sql);
			while ($count = $stmt->fetchObject()) {
				//有追蹤
				$isFollow = true;
			}
		}
		return $isFollow==true?"true":"false";
	}
	
	function getFollowCountByStoreId($storeId) {
		$followCount = 0;
		$sql = "SELECT count(*) count FROM follow WHERE SI_NUM=$storeId";
		$stmt = $GLOBALS["connectPDO"] ->query($sql);
		while ($count = $stmt->fetchObject()) {
			$followCount = $count->count;
		}
		return $followCount;
	}
	function getOtherStoreByRandom($StoreCountToGet) {
		//隨機產生:  random(1,可以先得到店家總數-6) > SQL LIMIT x, x+6
		$totalStoreCount = 0;
		$randomStart = 1;
		$sql = "SELECT count(*) count FROM store_imformation;";
		$stmt = $GLOBALS["connectPDO"] ->query($sql);
		while ($count = $stmt->fetchObject()) {
			$totalStoreCount = $count->count;
		}
		if ($totalStoreCount - $StoreCountToGet > 0) {
			$randomStart = rand(1, $totalStoreCount - $StoreCountToGet);
		}
		//start 找6家 random 店家
		$followCount = 0;
		$otherStoreArr = array();
		$sql = "SELECT * FROM store_imformation limit $randomStart, $StoreCountToGet";
		$stmt = $GLOBALS["connectPDO"] ->query($sql);
		while ($store = $stmt->fetchObject()) {
			$otherStore = new Store($store->SI_NUM, $store->SI_NAME, $store->SI_LOGO, $store->SI_ADDR, $store->SI_STARTTIME, $store->SI_ENDTIME, $store->SI_PHONE, $store->SI_RESTDAY, $store->SI_STORY, $store->SI_TYPE, $store->SI_BIMG_1, $store->SI_BIMG_2, $store->SI_BIMG_3, $store->SI_LAT, $store->SI_LNG, $store->SI_AVG_REVIEW);
					$followCount = 0;
			// $sql = "SELECT count(*) FROM follow WHERE SI_NUM=$storeId";
			// $stmt = $GLOBALS["connectPDO"] ->query($sql);
			// while ($count = $stmt->fetchObject()) {
			// 	$followCount = $count->count;
			// }
			// $otherStore->follow = $count;
			array_push($otherStoreArr, $otherStore);
		}
		return $otherStoreArr;
	}
	function getMessagesByStoreId($storeId, $loginMemNum) {
		$messageArr = array();
		$limitCount = 5;//一次載入5筆
		$sql = "SELECT message.SPMSG_MEMNO,message.SPMSG_NO, message.SPMSG_CON, message.SPMSG_TIME, member.MEM_NAME, member.MEM_PIC FROM shop_message message, member WHERE message.SPMSG_SPNO=:storeId and message.SPMSG_MEMNO=member.MEM_NO ORDER BY SPMSG_TIME DESC limit $limitCount";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();

		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($row = $stmt->fetchObject()) {
				$message = new Message($row->SPMSG_NO, $row->MEM_NAME, $row->SPMSG_TIME, $row->SPMSG_CON, $row->MEM_PIC);
				//這筆留言有沒有被此登入的 member 檢舉過
				$sql = "SELECT * FROM report WHERE SPMSG_NO=$row->SPMSG_NO and MEM_NO=$loginMemNum";
				$stmt2 = $GLOBALS["connectPDO"]->query($sql);
				if ($row = $stmt2->fetchObject()) {
					$message->isReportByMe = true;
				}
				array_push($messageArr, $message);
			}
			return $messageArr;
		}
	}
	function getActivityInfoByStoreId($storeId) {
		$activityArr = array();
		$sql = "SELECT * FROM activity where AC_STORE_NUM=:storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($row = $stmt->fetchObject()) {
				$activity = new ActivityObj($row->AC_NO,$row->AC_NAME, $row->AC_ADDRESS, $row->AC_TIME, $row->AC_MEM_COUNT, $row->AC_INGREDIENT, $row->AC_PRICE, $row->AC_BANNER1, $row->AC_PIC, $row->AC_PIC2, $row->AC_PIC3, $row->AC_PRODUCT_PIC, $row->AC_PRODUCT_PIC2, $row->AC_PRODUCT_PIC3 );
				array_push($activityArr, $activity);
			}
			return $activityArr;
		}
	}
	function getProductsByStoreId($storeId) {
		$productsArr = array();
		$sql = "SELECT * FROM product where PD_SHOPNO=:storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($row = $stmt->fetchObject()) {
				$product = new Bread($row->PD_NO,$row->PD_NAME,$row->PD_PIC, $row->PD_INTRO, $row->PD_PRICE);
				array_push($productsArr, $product);
			}
			return $productsArr;
		}
	}
	function getStoreInfoById($storeId) {
		$sql = "select * from STORE_IMFORMATION where SI_NUM = :storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {//找不到對應商家導回首頁
			header("location:homepage.php");

		} else {
			$tmpStore = $stmt->fetchObject();
			$GLOBALS["store"] = new Store($tmpStore->SI_NUM,$tmpStore->SI_NAME, $tmpStore->SI_LOGO, $tmpStore->SI_ADDR, $tmpStore->SI_STARTTIME, $tmpStore->SI_ENDTIME, $tmpStore->SI_PHONE, $tmpStore->SI_RESTDAY, $tmpStore->SI_STORY, $tmpStore->SI_TYPE, $tmpStore->SI_BIMG_1, $tmpStore->SI_BIMG_2, $tmpStore->SI_BIMG_3, $tmpStore->SI_LAT, $tmpStore->SI_LNG, $tmpStore->SI_AVG_REVIEW);
			$followCount = getFollowCountByStoreId($storeId);
			$GLOBALS["store"]->follow = $followCount;
		}
	}
	function getBreadCarPathByStoreId($storeId) {
		$breadCarPathArr = array();
		$sql = "select path.bcp_location,path.bcp_describe, store.si_lat, store.si_lng from bread_car_path path, store_imformation store where path.BCP_STORE_NUM = :storeId and path.bcp_store_num=store.si_num";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($path = $stmt->fetchObject()) {
				$breadCarPath = new BreadCarPath($path->bcp_describe, $path->si_lat, $path->si_lng, $path->bcp_location);
				array_push($breadCarPathArr, $breadCarPath);
			}
			return $breadCarPathArr;
		}
	}
 ?>