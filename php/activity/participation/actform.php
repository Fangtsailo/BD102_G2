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
		$memNo=$_SESSION["memNo"];
		$memName=$_REQUEST["memName"];
		$memPhone=$_REQUEST["memPhone"];
		$memEmail=$_REQUEST["memEmail"];
 		$acNo=$_REQUEST['acNo'];


		try{
			require_once("../../pdo/connectPDO.php");
			$sql="update member  set MEM_REALNAME=:memName, MEM_MAIL=:memEmail, MEM_PHONE=:memPhone where MEM_NO='$memNo'";
			$reset=$connectPDO->prepare($sql);
			$reset->bindValue(':memName',$memName);
			$reset->bindValue(':memPhone',$memPhone);
			$reset->bindValue(':memEmail',$memEmail);
			$reset->execute();

			$sql="insert into ac_info value('$memNo', '$acNo')";
			$newin=$connectPDO->exec($sql);


			header("Location:../../../Activity_act.php?actNum=$acNo");














		}catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}




 	?>
	










</body>
</html>