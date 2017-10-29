<?php 


	ob_start();
	session_start();


	try{


		// $dsn = "mysql:host=localhost;dbname=trepun;port=8889;charset=utf8";
		// $user = "root";
		// $password = "root";
		// $options = array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
		// $connectPDO = new PDO($dsn, $user, $password, $options);


		require_once("../../../pdo/connectPDO.php");

		$SPMSG_NO=$_REQUEST["SPMSG_NO"];

		$SPMSG_SPNO=$_REQUEST["SPMSG_SPNO"];

		$SPMSG_MEMNO=$_REQUEST["SPMSG_MEMNO"];

		$SPMSG_CON=$_REQUEST["SPMSG_CON"];


		$sql_report="INSERT INTO report(SPMSG_NO,MEM_NO,RE_CONTENT,RE_STATUS)VALUES(:SPMSG_NO,:MEM_NO,:RE_CONTENT,NULL)";
		$report=$connectPDO->prepare($sql_report);
		$report->bindValue(":SPMSG_NO",$SPMSG_NO);
		$report->bindValue(":MEM_NO",$SPMSG_MEMNO);
		$report->bindValue(":RE_CONTENT",$SPMSG_CON);
		$report->execute();








		// $SPMSG_CON_REPLY_front='SPMSG_CON_REPLY_'.$SPMSG_NO;

		// $SPMSG_CON_REPLY=$_REQUEST[$SPMSG_CON_REPLY_front];

		

		// $sql_msg="UPDATE shop_message SET SPMSG_CON_REPLY=:SPMSG_CON_REPLY,SPMSG_CON_RETIME=:SPMSG_CON_RETIME where SPMSG_NO=$SPMSG_NO";

  //   	$sql_msg = $connectPDO->prepare($sql_msg);
  //   	$sql_msg->bindValue(":SPMSG_CON_REPLY",$SPMSG_CON_REPLY);
  //   	$sql_msg->bindValue(":SPMSG_CON_RETIME",date("Y-m-d H:i:s"));
		// $sql_msg->execute();





		


		header("Location:../../../../FMybusinessMessage.php");  	






      	
      	

		




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}



 ?>



