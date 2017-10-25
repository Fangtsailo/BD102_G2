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


	$searchIdName=$_REQUEST["searchIdName"];


	try{
		require_once("../../pdo/connectPDO.php");

	



	$sql="select * from activity where AC_NO=:searchIdName or AC_STORE_NUM=:searchIdName ";
	$search=$connectPDO->prepare($sql);
	$search->bindValue(':searchIdName',$searchIdName);
	$search->execute();


      		if($search->rowCount()!==0){

      		header("Location:../../../BActivity.php?searchIdName=$searchIdName");

      		}else{

      			header("Location:../../../BActivity.php");

      		}




	
	}
	catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}


 ?>



</body>
</html>