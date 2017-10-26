<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="img/trepun4.png">
<title>TrePun</title>
</head>
<body>

<?php 
try {
	//連線到資料庫
	require_once("../pdo/connectPDO.php");
	//取得前端送的資料
	$memId = $_SESSION["memId"];
	$memName = $_REQUEST["MEM_NAME"];
	$memPhone = $_REQUEST["MEM_PHONE"];
	$memPsw = $_REQUEST["MEM_PSW"];
	$memPic = $_REQUEST["oldImage"]; //既有在資料庫的圖檔


	switch($_FILES["mempic"]["error"]){  
		case 0:  //0表示有重新上傳圖檔
		  if( file_exists("member_pic") === false){
		  	mkdir("member_pic");
		  } //若無mempic資料夾則新增此資料夾
		  $from = $_FILES["mempic"]["tmp_name"];
		  $to = "member_pic//" . $_FILES["mempic"]["name"];
		  copy($from, $to);  //將暫存檔儲存在伺服器指定的$to路徑
		  
		  $GLOBALS["newMemPic"] = $_FILES["mempic"]["name"]; //以新圖檔取代舊圖檔
		  break;
		case 1:
		  echo "上傳失敗,不可超過" , ini_get("upload_max_filesize"),"<br>"; //超過ini檔限制的檔案大小
		  break;	
		case 2:
		  echo "上傳失敗,不可超過", $_REQUEST["MAX_FILE_SIZE"],"<br>";  //超過前端限制的檔案大小
		  break;	
		case 3:
		  echo "上傳失敗,上傳檔案不完整<br>";
		  break;	
		case 4:
		  echo "檔案未選<br>";
		  break;
		default:
			echo "error : " , $_FILES["mempic"]["error"];
	} //switch

	//編譯該指令
	$sql = "update member set MEM_NAME=:memName, MEM_PHONE=:memPhone, MEM_PSW=:memPsw, MEM_PIC=:newMemPic where MEM_ID=:memId";
	//帶入實際參數資料 (":參數", $實際資料)
	$memRow = $connectPDO->prepare($sql);
	$memRow->bindValue( ":memId" , $memId);
	$memRow->bindValue( ":memName" , $memName);
	$memRow->bindValue( ":memPhone" , $memPhone);
	$memRow->bindValue( ":memPsw" , $memPsw);
	$memRow->bindValue( ":newMemPic" , $GLOBALS["newMemPic"]);
	$memRow->execute();
	//執行該指令
	if($memRow->execute()){
	// echo "異動成功~";
		header("Refresh:0; url=../../memedit.php");
	}

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
} //try..catch
?>    
</body>
</html>