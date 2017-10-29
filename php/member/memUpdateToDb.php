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
	//連線到資料庫
	require_once("../pdo/connectPDO.php");
	//取得暫存區的帳號
	$memId = $_SESSION["memId"];
	//取得在編輯頁輸入的舊密碼 (此行可以不寫，因除未選的單選鈕不會傳值外，其餘都會傳值)
	$oldPsw = $_REQUEST["oldPsw"]  ;

	//是否有傳舊密碼，若有就和資料庫比對帳密
	if( $_REQUEST["oldPsw"] != "" ){

		$sql = "select * from member where MEM_ID='$memId' and MEM_PSW='{$_REQUEST["oldPsw"]}'";

		//用query();把從$sql取得的會員資料放在$searchMem
		$searchMem = $connectPDO->query($sql);
			//若查無此帳密，就跳回上一頁並夾帶error訊息
			//info=不可寫中文，以防亂碼
			if ($searchMem->rowCount() == 0) {
			header("Location:../../memedit.php?info=error");
			exit();
		}
	}

	//取得前端送的資料
	$memName = $_REQUEST["MEM_NAME"];
	$memPhone = $_REQUEST["MEM_PHONE"];
	$memPsw = $_REQUEST["MEM_PSW"]; //新密碼
	$memPic = $_REQUEST["oldImage"]; //既有在資料庫的圖檔


	//$_FILES["input屬性name的值"]["上傳檔案時的錯誤代碼"]
	switch($_FILES["mempic"]["error"]){  
		case 0:  //0表示有重新上傳圖檔
		  if( file_exists("member_pic") === false){
		  	mkdir("member_pic");
		  } //若無member_pic資料夾則新增此資料夾
		  $from = $_FILES["mempic"]["tmp_name"];
		  $to = "member_pic//" . $_FILES["mempic"]["name"];
		  copy($from, $to);  //將暫存檔儲存在伺服器指定的$to路徑
		  
		   //宣告一個新圖檔的全域變數來接暫存區圖檔
		  $GLOBALS["newMemPic"] = $_FILES["mempic"]["name"];
		  break;
		case 1: //超過ini檔限制的檔案大小
		  echo "上傳失敗,不可超過", ini_get("upload_max_filesize"),"<br>";
		  break;	
		case 2: //超過前端限制的檔案大小
		  echo "上傳失敗,不可超過", $_REQUEST["MAX_FILE_SIZE"],"<br>";
		  break;	
		case 3:
		  echo "上傳失敗,上傳檔案不完整<br>";
		  break;	
		case 4: // 如果未上傳檔案，則維持舊照片";
		  $GLOBALS["newMemPic"] = $_REQUEST["oldImage"];
		  break;
		default:
			echo "error : ", $_FILES["mempic"]["error"];
	} //switch

	$newMemPic = ($GLOBALS["newMemPic"]!=null)? $GLOBALS["newMemPic"] : $_REQUEST["oldImage"] ;

	echo" $memPsw <br>";
	echo "$memName <br>";
	echo" $memPhone <br>";
	echo $newMemPic."<br>";

	//更新資料庫中的姓名、電話
	$sql = "update member set MEM_NAME=:memName, MEM_PHONE=:memPhone";
	
	//判斷$memPsw是否有值，有的話
	//就用.=把,MEM_PSW=:memPsw加到$sql指令的後面
	if ($memPsw != "") {
		$sql .= ",MEM_PSW=:memPsw";
	}

	//用.=把,MEM_PIC=:newMemPic where MEM_ID=:memId再加到$sql指令的後面
	$sql .= ",MEM_PIC=:newMemPic where MEM_ID=:memId";

	//帶入實際參數資料 (":參數", $實際資料)
	$memRow = $connectPDO->prepare($sql);
	$memRow->bindValue( ":memName", $memName);
	$memRow->bindValue( ":memPhone", $memPhone);
	//判斷$memPsw是否有值，有的話才bindValue
	if ($memPsw != "") {
		$memRow->bindValue( ":memPsw", $memPsw);
	}
	$memRow->bindValue( ":newMemPic", $newMemPic);
	$memRow->bindValue( ":memId", $memId);
	//執行該指令
	$memRow->execute();

	//將更新的姓名和照片放暫存區，並跳回上一頁夾帶OK訊息
	$_SESSION["memName"]= $memName;
	$_SESSION["memPic"]= $newMemPic;
	header("Location:../../memedit.php?info=ok");

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
} //try..catch
?>    
</body>
</html>