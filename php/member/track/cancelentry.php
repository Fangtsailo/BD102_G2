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
	$actNum = $_GET['actNum'];
	$memNo = $_SESSION['memNo'];
	try{
		require_once("../../PDO/connectPDO.php");
		$cancelSQL = "DELETE FROM ac_info WHERE AC_NO='$actNum' AND MEM_NO = '$memNo'" ;
		$cancel = $connectPDO->prepare($cancelSQL);
		$cancel->execute();
		header('Location:../../../mementry.php');
	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
	 ?>


</body>
</html>