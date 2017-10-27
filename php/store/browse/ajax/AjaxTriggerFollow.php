<?php 
//user 按下"追蹤" 店家
require_once("../../../pdo/connectPDO.php");
if (isset($_REQUEST["memNum"]) && isset($_REQUEST["storeId"]) && isset($_REQUEST["mode"])) {
	$memNum = $_REQUEST["memNum"];
	$storeId = $_REQUEST["storeId"];
	$mode = $_REQUEST["mode"];
	if ($mode == "follow") {
		triggerFollow($memNum, $storeId);
	} else {
		cancelFollow($memNum, $storeId);
	}
	$followCount = getFollowCount($storeId);
	echo $followCount;
} 
function triggerFollow($memNum, $storeId) {
		$sql = "insert into follow(SI_NUM, MEM_NO, FL_TIME) values(:storeId,:memNum,:time)";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->bindValue(":memNum", $memNum);
		$stmt->bindValue(":time", time());
		$stmt->execute();
}
function cancelFollow($memNum, $storeId) {
		$sql = "delete from follow where SI_NUM=:storeId and MEM_NO=:memNum";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->bindValue(":memNum", $memNum);
		$stmt->execute();
}
function getFollowCount($storeId) {
	$followCount = 0;
	$sql = "SELECT count(*) count FROM follow WHERE SI_NUM=$storeId";
	$stmt = $GLOBALS["connectPDO"] ->query($sql);
	while ($count = $stmt->fetchObject()) {
		$followCount = $count->count;
	}
	return $followCount;	
}
?>
