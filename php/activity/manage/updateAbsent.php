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

try{
	require_once("../../PDO/connectPDO.php");
	$memId = $_SESSION["memId"];
	$updateAbsentSQL = "UPDATE member set MEM_ABSENT =:memAbsent WHERE MEM_ID = '$memId'";
	$updateAbsent = $connectPDO->prepare($updateAbsentSQL);
	$updateAbsent->bindValue(':memAbsent','1');
	$updateAbsent->execute();
	header('Location:../../../bossActivityList.php');
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}

 ?>

</body>
</html>
