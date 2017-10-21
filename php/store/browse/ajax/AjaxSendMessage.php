<?php 
require_once("../../../pdo/connectPDO.php");
require_once("../../../common/globalVar.php");
if (isset($_REQUEST["memId"]) && isset($_REQUEST["storeId"]) && isset($_REQUEST["content"])) {
	$storeId = $_REQUEST["storeId"];
	$memId = $_REQUEST["memId"];
	$content = $_REQUEST["content"];
	$result = sendMessageToDB($storeId, $memId, $content);
	// echo json_encode($result);
} 
	function sendMessageToDB($storeId, $memId, $content) {
		$sql = "INSERT INTO shop_message(spmsg_spno, spmsg_memno, spmsg_con, spmsg_time) values(:storeId, :memId, :content, :time)";
		$stmt = $GLOBALS["connectPDO"]->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->bindValue(":memId", $memId);
		$stmt->bindValue(":content", $content);
		$stmt->bindValue(":time", time());
		$result = $stmt->execute();
		return $result;
	}

 ?>