<?php 
ob_start();
session_start();
?>

<?php
//=====連資料庫，做測試
try{
	require_once("php/pdo/connectPDO.php");
	$sql = "select * from member where MEM_ID =:memId and MEM_PSW =:memPsw";
	$member = $pdo->prepare($sql);
	$member -> bindValue(":memId",$_REQUEST["memId"]);
	$member -> bindValue(":memPsw",$_REQUEST["memPsw"]);
	$member -> execute();

	if( $member->rowCount() !=0 ){
	    $memRow = $member->fetchObject();
		//登入成功，將登入者資訊寫入session
        $_SESSION["memNo"] = $memRow->MEM_NO;
		$_SESSION["memId"] = $memRow->MEM_ID;
		$_SESSION["memName"] = $memRow->MEM_NAME;
	    $_SESSION["memRole"] = $memRow->MEM_ROLE;
	    header("Location:homepage.php");
	}
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>	