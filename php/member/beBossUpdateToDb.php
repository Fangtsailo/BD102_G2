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
	//$memNo = $_SESSION["MEM_NO"];
	$memId = $_SESSION["memId"];

					   //判斷式有無成立? 有就回傳此值         : 沒有就回傳此值
	$siType=isset($_SESSION["SI_TYPE"])? $_SESSION["SI_TYPE"] : "";
	$siName=isset($_SESSION["SI_NAME"])? $_SESSION["SI_NAME"] : "";

	//連線到資料庫
	require_once("../pdo/connectPDO.php");

	//取得前端送的資料
	$siComfirmId = $_REQUEST["SI_COMFIRM_ID"];
	// $memRealName = $_REQUEST["MEM_REALNAME"];

	//將店長實名更新到會員資料表
	// $sql = "update member set MEM_REALNAME=:memRealName where MEM_ID=:memId and MEM_NO=:memNo";
	// $memRow = $connectPDO->prepare($sql);
	// $memRow->bindValue( ":memRealName", $memRealName);
	// $memRow->execute();
	// echo $sql;
	// exit();	

	//將統編或車牌更新到商家資料表
	$sql = "update store_imformation set SI_COMFIRM_ID=:siComfirmId where  SI_TYPE='$siType' and SI_NAME='$siName'";
	$siRow = $connectPDO->prepare($sql);
	$siRow->bindValue(":siComfirmId", $siComfirmId);
	$siRow->execute();
	// echo $sql;
	// exit();

	// $_SESSION["memRealName"]= $memRealName;
	$_SESSION["siComfirmId"]= $siComfirmId;

	if ($siType == 1) {
		//若為麵包車，跳轉至麵包車店長輸入頁
		header("Location: ../../memBeBoss3van.php?info=ok");
	}else{
		//若為麵包店，跳轉至麵包店店長輸入頁
		header("Location: ../../memBeBoss3.php?info=ok");
	}//else end


	//執行該指令
	//if($siRow->execute()){
		//echo "感謝您！表單已送出！請靜候我們的聯絡！";
		//header("Refresh:3; url=../../memBeBoss1.php");
		// echo "<script>alert('感謝您！表單已送出！請靜候我們的聯絡！'); location.href = 'memBeBoss1.php';</script>";
	//}

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
} //try..catch
?>    
</body>
</html>