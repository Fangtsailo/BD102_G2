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
	$siType=isset($_REQUEST["SI_TYPE"])? $_REQUEST["SI_TYPE"] : "";
	$siName=isset($_REQUEST["SI_NAME"])? $_REQUEST["SI_NAME"] : "";

	$_SESSION["SI_TYPE"] = $siType;
	$_SESSION["SI_NAME"] = $siName;

	//連線到資料庫
	require_once("../PDO/connectPDO.php");

	//比對資料庫中是否有此店型的店名
	$sql = "select * from store_imformation where SI_TYPE='$siType' and SI_NAME = '$siName'";
	
	//echo $sql;

	//用query();把從$sql取得的資料放在$searchSi
	$searchSi=$connectPDO->query($sql);

	//取得搜尋結果
	if( $searchRow = $searchSi->fetchObject() ){

		if($searchRow->SI_MEMNO != null){

			
		//若有資料，跳轉至結果頁面
		  header("Location: ../../memBeBoss1.php?info=error");

		}else{
			
			header("Location: ../../memBeBoss2.php");

		}
		
	}elseif($siType == 1){
		//若資料庫無此麵包車，則跳轉至新增麵包車頁
		header("Location: ../../memBeBoss4van.php");
	
	}else{
		//若資料庫無此麵包店，則跳轉至新增麵包店頁
		header("Location: ../../memBeBoss4.php");

	}//else end
}catch(PDOException $e){
 	echo "錯誤原因 : " , $e->getMessage(),"<br>";
	echo "行號 : " , $e->getLine(),"<br>";
}//catch end
?>

</body>
</html>