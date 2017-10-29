<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" href="img/trepun4.png">
	<title>TrePun</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memEdit.css">
	<link rel="stylesheet" type="text/css" href="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/memlightbox.js"></script>
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
					
					
					require_once("..\pdo\connectPDO.php");

					//比對資料庫中是否有此店型的店名
					$sql = "select * from store_imformation where SI_TYPE='$siType' and SI_NAME='$siName'";
					
					//echo $sql;

					$searchSi=$connectPDO->query($sql);

					$searchRow = $searchSi->fetchObject();

					if( isset($searchRow->SI_NAME)){
						//若有，跳轉至比對結果
						header("Location: ../../memBeBoss2.php");
						
					}elseif($siType == 1){
						//若資料庫無輸入的麵包車，則跳轉至新增麵包車頁面
						// echo "<center>查無此店</center>";
						header("Location: ../../memBeBoss4van.php");
					
					}else{
						
						//若資料庫無輸入的麵包店，則跳轉至新增麵包店頁面
						header("Location: ../../memBeBoss4.php");

					}//else end
				}catch(PDOException $e){
				 	echo "錯誤原因 : " , $e->getMessage(),"<br>";
					echo "行號 : " , $e->getLine(),"<br>";
				 }//catch end
				?>
				


</body>
</html>