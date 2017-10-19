<?php 
try {
	require_once("php/common/globalVar.php");
	require_once("php/pdo/connectPDO.php");
	require_once("Store.php");
	require_once("BreadCarPath.php");
	require_once("Bread.php");
	$GLOBALS["connectPDO"] = $connectPDO;
	$GLOBALS["store"] = new Store();
//會員基資======================================
	$memID = "default";
//留言板======================================
	$messageItemArr = array(
		array("default", "小架純1", "2017/10/08", "吃完之後回味無窮，值得再買一次"),
		array("default", "小架純2", "2017/10/08", "吃完之後回味無窮，值得再買一次"),
		array("default", "小架純3", "2017/10/08", "吃完之後回味無窮，值得再買一次"),
		array("default", "小架純", "2017/10/08", "吃完之後回味無窮，值得再買一次"),
		array("default", "小架純", "2017/10/08", "吃完之後回味無窮，值得再買一次")
	);	
//活動=======================================================
	// $actTitle = "牛角麵包簡單學";
	// $actAddress = "桃園市中壢區中央路55號 烘焙王麵包坊";
	// $actTime = "105.9.29  下午1:00(預計3小時)";
	// $actPeopleLimit = 10;
	// $actPhone = "(03)3335567";
	// $actIngredient = "麵包坊提供";
	// $price = "報名費與材料一共1000元(現場收費)";
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

	function getActivityInfoByStoreId($storeId) {
		$activityArr = array();
		$sql = "SELECT * FROM trepun.activity where AC_STORE_NUM=:storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($row = $stmt->fetchObject()) {
				$activity = new Bread($row->AC_NAME, $row->AC_ADDRESS, $row->AC_TIME, $row->AC_MEM_COUNT, $row->AC_INGREDIENT, $row->AC_PRICE, $row->AC_BANNER1);
				array_push($activityArr, $activity);
			}
			return $activityArr;
		}
	}
	function getProductsByStoreId($storeId) {
		$productsArr = array();
		$sql = "SELECT * FROM trepun.product where PD_SHOPNO=:storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($row = $stmt->fetchObject()) {
				$product = new Bread($row->PD_NAME,$row->PD_PIC, $row->PD_INTRO, $row->PD_PRICE);
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
			$GLOBALS["store"] = new Store($tmpStore->SI_NAME, $tmpStore->SI_LOGO, 3, 123, $tmpStore->SI_ADDR, $tmpStore->SI_STARTTIME, $tmpStore->SI_ENDTIME, $tmpStore->SI_PHONE, $tmpStore->SI_RESTDAY, $tmpStore->SI_STORY, $tmpStore->SI_TYPE);
		}
	}
	function getBreadCarPathByStoreId($storeId) {
		$breadCarPathArr = array();
		$sql = "select path.bcp_location,path.bcp_describe, store.si_lat, store.si_lng from trepun.bread_car_path path, trepun.store_imformation store where path.BCP_STORE_NUM = :storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($path = $stmt->fetchObject()) {
				$nowLocationStr = "{lat:".$path->si_lat.", lng:".$path->si_lng."}";
				$breadCarPath = new BreadCarPath($path->bcp_describe, $nowLocationStr, $path->bcp_location);
				array_push($breadCarPathArr, $breadCarPath);
			}
			return $breadCarPathArr;
		}
	}
 ?>