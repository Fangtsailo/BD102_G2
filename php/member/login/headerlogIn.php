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
	    $_SESSION["memPic"] = ($memRow->MEM_PIC=="")?"default.png":$memRow->MEM_PIC;
=======
<<<<<<< HEAD
	    $_SESSION["memPic"] = ($memRow->MEM_PIC=="")?"default.png":$memRow->MEM_PIC;
=======
	    

	    
	    $_SESSION["memPic"] = $memRow->MEM_PIC==""?"default.png":$memRow->MEM_PIC;
>>>>>>> 8e2d0a255150d6e101a7d1f7daa9c3a562c53b9a
>>>>>>> e6f66a8320ec0a5abd1550a8751370615fea6523
	    // header("Location:../../../homepage.php");
	}
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
?>	