<?php 
try {
//檢舉"留言"
require_once("../Message.php");
require_once("../../../pdo/connectPDO.php");
	function reportMessages($memNum, $messageNum, $reason) {
		//寫一筆記錄到 REPORT table
		$sql = "INSERT INTO trepun.report(SPMSG_NO, MEM_NO, RE_CONTENT) VALUES(:messageNum, :memNum, :reason)";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":messageNum", $messageNum);
		$stmt->bindValue(":memNum", $memNum);
		$stmt->bindValue(":reason", $reason);
		$stmt->execute();
		return true;
	}
if (isset($_REQUEST["messageNum"]) && isset($_REQUEST["memNum"]) && isset($_REQUEST["reason"])) {
	$messageNum = $_REQUEST["messageNum"];
	$memNum = $_REQUEST["memNum"];
	$reason = $_REQUEST["reason"];
	$result = reportMessages($memNum, $messageNum, $reason);
	echo json_encode($result);
} 

} catch(PDOException $e) {
	echo "原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
} 

 ?>
