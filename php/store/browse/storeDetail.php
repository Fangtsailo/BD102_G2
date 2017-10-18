<?php 
try {
	require_once("php/pdo/connectPDO.php");
	require_once("Store.php");
	$GLOBALS["connectPDO"] = $connectPDO;
	$GLOBALS["store"] = new Store();
	$GLOBALS["breadCarPathArr"] = new BreadCarPath();
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
	function getBreadCarPathById($storeId) {
		$breadCarPathArr = array();
		$sql = "SELECT * FROM bread_car_path WHERE BCP_STORE_NUM = :storeId";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {//找不到對應商家導回首頁
			return null;
		} else {
			while($path = $stmt->fetchObject()) {
				$breadCarPath = new BreadCarPath($path->BCP_DESCRIBE, now, $path->BCP_LOCATION);
				array_push($breadCarPathArr, $breadCarPath);
			}
			return $breadCarPathArr;
		}
	}
 ?>