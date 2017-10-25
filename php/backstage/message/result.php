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


	$RE_NO=$_REQUEST["msgNo"];


	try{
		require_once("../../pdo/connectPDO.php");

		if (isset($_REQUEST["MsDelete"])) {
		
		$sql="update report set RE_STATUS=0 where RE_NO='$RE_NO'";
		$update= $connectPDO->query($sql);
		
		 header("Location:../../../BMessage.php");
		}
	
	else if (isset($_REQUEST["MsPass"])) {
		$sql="update report set RE_STATUS=1 where RE_NO='$RE_NO'";
		$update= $connectPDO->query($sql);
		
      	  header("Location:../../../BMessage.php");

      }






	
	}
	catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}


 ?>



</body>
</html>