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

	
	
$Ac_No=$_REQUEST["AC_NO"];


	try{
		require_once("../../pdo/connectPDO.php");

	



	// $sql="select * from activity where AC_NO='$Ac_No'";
	// $search=$connectPDO->query($sql);
	if (isset($_REQUEST["AcRebut"])) {
		
		$sql="update activity set AC_CHECKSTAY=0 where AC_NO='$Ac_No'";
		$update= $connectPDO->query($sql);
		
		 header("Location:../../../BActivity.php");
	}
	
	else if (isset($_REQUEST["AcPass"])) {
		$sql="update activity set AC_CHECKSTAY=1 where AC_NO='$Ac_No'";
		$update= $connectPDO->query($sql);
		
      	  header("Location:../../../BActivity.php");

      }
	

	}catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}


 ?>



</body>
</html>