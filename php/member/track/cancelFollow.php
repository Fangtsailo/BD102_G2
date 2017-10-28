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
	$storeNum = $_GET['SI_NUM'];
	$memNo = $_SESSION['memNo'];
	try{
		require_once("../../PDO/connectPDO.php");
		$cancelSQL = "DELETE FROM follow WHERE SI_NUM='$storeNum' AND MEM_NO = '$memNo' " ;
		$cancel = $connectPDO->prepare($cancelSQL);
		$cancel->execute();
		header('Location:../../../memfollow.php');
	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
	 ?>


</body>
</html>