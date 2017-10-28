<?php 
ob_start();
session_start();
?>
<?php
try{
	require_once("../../PDO/connectPDO.php");
	$login = "select * from member where MEM_ID =:memId and MEM_PSW =:memPsw" ;
	$jsonStr = $_REQUEST["jsonStr"];
	$jsonObj = json_decode($jsonStr);
	$member = $connectPDO->prepare($login);
	$member -> bindValue(":memId",$jsonObj->memId);
	$member -> bindValue(":memPsw",$jsonObj->memPsw);
	$member -> execute();
	$memRow = $member->fetchObject();
	if( $member->rowCount()== 0 ){
		echo "error";
	}else{
		$_SESSION["memNo"] = $memRow->MEM_NO;
		$_SESSION["memId"] = $memRow->MEM_ID;
		$_SESSION["memName"] = $memRow->MEM_NAME;
	    $_SESSION["memRole"] = $memRow->MEM_ROLE;
<<<<<<< HEAD
	    $_SESSION["memPic"] = $memRow->MEM_PIC;

	    echo $memRow->MEM_ID;
=======
	    $_SESSION["memPic"] = $memRow->MEM_PIC==""?"default.png":$memRow->MEM_PIC;
>>>>>>> 2e43e4d13501f58a0c1c374a294499936f676d44
	    // header("Location:../../../homepage.php");
	}
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>	