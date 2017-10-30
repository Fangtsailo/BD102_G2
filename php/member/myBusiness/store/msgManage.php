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

		$SPMSG_CON_REPLY_front='SPMSG_CON_REPLY_'.$SPMSG_NO;

		$SPMSG_CON_REPLY=$_REQUEST[$SPMSG_CON_REPLY_front];

		

		$sql_msg="UPDATE shop_message SET SPMSG_CON_REPLY=:SPMSG_CON_REPLY,SPMSG_CON_RETIME=:SPMSG_CON_RETIME where SPMSG_NO=$SPMSG_NO";

    	$sql_msg = $connectPDO->prepare($sql_msg);
    	$sql_msg->bindValue(":SPMSG_CON_REPLY",$SPMSG_CON_REPLY);
    	$sql_msg->bindValue(":SPMSG_CON_RETIME",date("Y-m-d H:i:s"));
		$sql_msg->execute();





		


		header("Location:../../../../FMybusinessMessage.php");  	






      	
      	

		




	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}



 ?>



