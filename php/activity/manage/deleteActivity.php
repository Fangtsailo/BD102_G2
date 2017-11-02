<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
</head>
<body>
 
<?php 
require_once('../../common/globalVar.php');

try{

	require_once("../../PDO/connectPDO.php");
	$acNum = $_REQUEST["acNo"];

	
	$deleteAcInfoSQL = "DELETE FROM ac_info WHERE AC_NO = $acNum";
	$deletetAcInfo = $connectPDO->prepare($deleteAcInfoSQL);
	$deletetAcInfo -> execute();
	$deleteActSQL = "DELETE FROM activity WHERE AC_NO = $acNum";
	$deletetAct = $connectPDO->prepare($deleteActSQL);
	$deletetAct -> execute();

	header('Location:../../../bossActivity.php?info=success');

}catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}

 ?>
 ?>


</body>
</html>