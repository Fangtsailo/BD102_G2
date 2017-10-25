<?php 

		/* 檢查是否有相同的email帳號 */
	require_once("php/pdo/connectPDO.php");
	
	// $type = ( isset($_POST['type']) ) ? $_POST['type'] : $_GET['type'];
	$sql = "SELECT MEM_ID FROM member WHERE MEM_ID=:memId";
	$member = $connectPDO->prepare($sql);
	$member -> bindValue(":memId",$_GET['user_name']);
	$member -> execute();
	$memRow = $member->fetchObject();
	if( $member->rowCount()!= 0 ){

	 	$ret = "此帳號已被使用過囉";
	
	}else{
	
	 $ret = "沒問題!帳號名稱可以使用";
	 
	}
	
	echo  $ret;

?>