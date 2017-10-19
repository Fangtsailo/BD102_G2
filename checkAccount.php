<?php 
// ob_start();
// session_start();
// try {
// 	require_once("php/pdo/connectPDO.php");
// 	//=============取得前端送來的jsonStr
// 	$jsonStr = $_REQUEST["jsonStr"];
// 	$loginObj = json_decode($jsonStr); //轉成物件
//     //=============

// 	$sql = "select * from member where MEM_ID=:memId and MEM_PSW=:memPsw";
// 	$member = $pdo->prepare( $sql );

// 	//=============
// 	$member->bindValue(":memId", $loginObj->memId); //操作物件
// 	$member->bindValue(":memPsw", $loginObj->memPsw);
// 	//=============

// 	$member->execute();
// 	if( $member->rowCount() === 0){//帳密失敗
// 		echo "error";
// 	}else{//登入成功
// 		$memRow = $member->fetchObject();
// 		$_SESSION["memNo"] = $memRow->no;
// 		$_SESSION["memId"] = $memRow->memId;
// 		$_SESSION["memName"] = $memRow->memName;
// 		$_SESSION["email"] = $memRow->email;
// 		echo $memRow->memName;
// 	}
// } catch (Exception $e) {
//   echo "行號: ",$e->getLine(), "<br>"; 
//   echo "訊息: ",$e->getMessage() , "<br>"; 	
// }

/* 取得GET傳送的資料內容
	if (isset($_GET['memId'])) {
	
		/* 檢查是否有相同的email帳號 */
	require_once("php/pdo/connectPDO.php");
	$type = ( isset($_POST['type']) ) ? $_POST['type'] : $_GET['type'];
	$sql = "SELECT MEM_ID FROM member WHERE MEM_ID = ' ".str_replace(" \' ", " '' ", $_GET['memId']) ." '   ";   
	$rs = $db->db_GetOne($sql);
	if($rs['UserName']=='')
	{  
	  $ret = "此帳號可以使用";
	}
	else
	{
	  $ret = "此帳號已經有人使用";
	}
	echo  $ret;
	
		// $checkResult = checkID($_GET['memId']);
		// if ($checkResult) {
		// 	echo 'invalid';
		// } else {
		// 	echo 'valid';
		// }	
	
	/**
	 * 
	 * @param email account
	 * @return boolean 是否重複email帳號
	 * 
	 */
	// function checkID($email = '') {
	// 	$rs = $connectPDO->db_GetOne($sql);
	// 	if($rs['member']=='')
	// 	{  
	// 	  $ret = "此帳號可以使用";
	// 	}
	// 	else
	// 	{
	// 	  $ret = "此帳號已經有人使用";
	// 	}
	// 	return  $ret;
	// 	// /* 讀取檔案 */
	// 	// $file = file_get_contents('file.txt',true);
	// 	// /* 分離字串 分隔點為逗點 */
	// 	// $data = explode(',', $file);
	// 	// /* 解析陣列中所有內容 比對是否有重複 */
	// 	// $result = in_array($email, $data);
	// 	// return $result;
	// }









?>