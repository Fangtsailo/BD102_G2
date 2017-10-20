<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 


	$seachIdName=$_REQUEST["searchId.php"];


	try{
		require_once("php/pdo/connectPDO.php");
	$sql="select * from activity where AC_NO=:searchId.php or SI_NUM=:seachIdName";
	$search=$connectPDO->prepare($sql);
	$search->bindValue(':searchId',$saerchIdName);
	$search->execute();
	header("Location:..")
	}
	catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}


 ?>



</body>
</html>