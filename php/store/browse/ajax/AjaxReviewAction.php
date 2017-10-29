<?php 
require_once("../../../pdo/connectPDO.php");
if (isset($_REQUEST["reviewNum"]) && isset($_REQUEST["storeId"]) && isset($_REQUEST["memNum"])) {
	$storeId = $_REQUEST["storeId"];
	$memId = $_REQUEST["memNum"];
	$reviewNum = $_REQUEST["reviewNum"];
	$result = sendReviewNumToDB($storeId, $memId, $reviewNum);
	echo json_encode((int)$result);
} 
	function sendReviewNumToDB($storeId, $memId, $reviewNum) {
		$sql = "INSERT INTO reviews(SI_NUM, MEM_NO, REVIEWS) VALUES(:storeId,:memId,:reviewNum);";
		$stmt = $GLOBALS["connectPDO"]->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->bindValue(":memId", $memId);
		$stmt->bindValue(":reviewNum", $reviewNum);
		$stmt->execute();
		return calAvgReviewNumToStore($storeId, $memId, $reviewNum);
	}
	function calAvgReviewNumToStore($storeId, $memId, $reviewNum) {
		$sql = "select AVG(REVIEWS) AVG from reviews where SI_NUM=:storeId";
		$stmt = $GLOBALS["connectPDO"]->prepare($sql);
		$stmt->bindValue(":storeId", $storeId);
		$stmt->execute();
		$average = 0;
		while($row = $stmt->fetchObject()) {
			if ($row->AVG != null) {
				$average = $row->AVG;
			}
		}
		$sql = "update store_imformation set SI_AVG_REVIEW=:average where SI_NUM=:storeId;";
		$stmt = $GLOBALS["connectPDO"]->prepare($sql);
		$stmt->bindValue(":average", $average);
		$stmt->bindValue(":storeId", $storeId);
		$result = $stmt->execute();
		return $average;
	}
 ?>