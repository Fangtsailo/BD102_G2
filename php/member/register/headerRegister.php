<?php 
ob_start();
session_start();
?>

<?php 

function StringValidate($theValue,$theType){

	switch ($theType) {

		case "string" :
		$theValue = ($theValue !="") ? filter_var($theValue, FILTER_SANITIZE_MAGIC_QUOTES) : "" ;
		break;

		case "int" :
		$theValue = ($theValue != "") ? filter_var($theValue, FILTER_SANITIZE_NUMBER_INT) : "";
		break;

		case "email" :
		$theValue = ($theValue != "") ? filter_var($theValue, FILTER_VALIDATE_EMAIL) : "";
		break;

		case "url" :
		$theValue = ($theValue != "") ? filter_var($theValue, FILTER_VALIDATE_URL) : "";
		break;

	}
	return $theValue;
}


 ?>


<?php 

try {
		require_once("../../PDO/connectPDO.php");
		//啟動交易管理
		$connectPDO->beginTransaction();
		//寫入主檔

		$newMemberSQL = "insert into member(MEM_ID,MEM_PSW,MEM_NAME,MEM_PHONE,MEM_PIC,MEM_ABSENT,MEM_ROLE,MEM_MAIL,MEM_STATUS) values (:memId,:memPsw,null,null,:memPic,0,0,:email,1)";
		$register = $connectPDO->prepare( $newMemberSQL );
		$register->bindValue(":memId" , StringValidate( $_REQUEST["newMemId"],"string" )  );
		$register->bindValue(":memPsw" ,$_REQUEST["newMemPsw"] );
		$register->bindValue(":email" , StringValidate( $_REQUEST["newMemMail"], "email" ) );
		$register->bindValue(":memPic" ,"default.png" );
		$register->execute();
		$connectPDO->commit(); //確認交易完成
		// $register->close();

		$newMemId = $_REQUEST["newMemId"];

		$addSessionSQL = "select * from member where MEM_ID = '$newMemId' ";
		$addSession = $connectPDO->query($addSessionSQL);
		
		    $registerRow = $addSession->fetchObject();

			//將登入者資訊寫入session
	        $_SESSION["memNo"] = $registerRow->MEM_NO;
	        $_SESSION["memId"] = $registerRow->MEM_ID;
	        $_SESSION["memName"] = $registerRow->MEM_NAME;
	        $_SESSION["memRole"] = $registerRow->MEM_ROLE;
	         $_SESSION["memPic"] = $registerRow->MEM_PIC;

		header("Location:../../../homepage.php");
?>



<?php

	} catch (PDOException $e) {
		$connectPDO->rollback();
		echo "錯誤原因 : " , $e->getMessage(),"<br>";
		echo "行號 : " , $e->getLine(),"<br>";	
	}//try...catch




 ?>