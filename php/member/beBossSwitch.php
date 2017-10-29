<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="../../img/trepun4.png">
<title>TrePun</title>
</head>

<body>

<?php

try {
	//看收到的店型為何
	//輸入店名為何
					   //判斷式有無成立? 有就回傳此值         : 沒有就回傳此值
	$siType=isset($_SESSION["SI_TYPE"])? $_SESSION["SI_TYPE"] : "";
	$siName=isset($_SESSION["SI_NAME"])? $_SESSION["SI_NAME"] : "";
	
	
	require_once("..\pdo\connectPDO.php");

	//比對資料庫中是否有此店型的店名
	$sql = "select * from store_imformation where SI_TYPE='$siType' and SI_NAME='$siName'";
	
	//echo $sql;

	//用query();把從$sql取得的資料放在switchSi
	$switchSi=$connectPDO->query($sql);

	//比對店型
	if($siType == 1){
		//若為麵包車，跳轉至麵包車店長輸入頁
		header("Location: ../../memBeBoss3van.php");
	
	}else{
		//若為麵包店，跳轉至麵包店店長輸入頁
		header("Location: ../../memBeBoss3.php");

	}//else end
}catch(PDOException $e){
 	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";
}//catch end
?>

</body>
</html>