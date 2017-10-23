<?php 
//動態讀取"更多留言"
require_once("../Message.php");
require_once("../../../pdo/connectPDO.php");
require_once("../../../common/globalVar.php");
if (isset($_REQUEST["messagePage"]) && isset($_REQUEST["storeId"])) {
	$messagePage = $_REQUEST["messagePage"];
	$storeId = $_REQUEST["storeId"];
	$messageArr = getMessagesByStoreId($storeId, $messagePage);
	echo json_encode($messageArr);
} 
	function getMessagesByStoreId($storeId, $messagePage) {
		$messageArr = array();
		$limitCount = 5;//一次載入5筆
		$limitStart = ($messagePage + 1) * $limitCount;//從第幾筆開始抓
		$sql = "SELECT message.SPMSG_MEMNO,message.SPMSG_NO, message.SPMSG_CON, message.SPMSG_TIME, member.MEM_NAME, member.MEM_PIC FROM shop_message message, member WHERE message.SPMSG_SPNO=:storeId and message.SPMSG_MEMNO=member.MEM_NO ORDER BY SPMSG_TIME DESC limit $limitStart, $limitCount";
		$stmt = $GLOBALS["connectPDO"] ->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		if ($stmt->rowCount() == 0) {
			return array();
		} else {
			while($row = $stmt->fetchObject()) {
				$message = new Message($row->SPMSG_NO, $row->MEM_NAME, $row->SPMSG_TIME, $row->SPMSG_CON, $row->MEM_PIC);
				array_push($messageArr, $message);
			}
			return $messageArr;
		}
	}

 ?>