<?php 
ob_start();
session_start();
 ?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>店長專區-活動管理</title>
	<link rel="stylesheet" type="text/css" href="libs/jquery.sweet-modal-1.3.3/dev/jquery.sweet-modal.css">
	<link rel="stylesheet" type="text/css" href="css/bossActivityList.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<!-- =====side bar==== -->
	<link rel="stylesheet" type="text/css" href="css/memberSideBar.css">
	<script type="text/javascript" src="js/memberSideBar.js"></script>

	<!-- =====subTitle==== -->
	<link rel="stylesheet" type="text/css" href="css/subtitle.css">
	<script type="text/javascript" src="js/subtitle.js"></script>
	
</head>
<body>
		<?php 
		require_once('header.php');
	 ?>
	<?php 

		require_once('subtitle.php');

	 ?>

	<div class="container">

	
	<?php 

		require_once('memberSideBar.php');

			 ?>	

		
	<div class="bossActContent">
			<img src="img/icon/bossActivity.svg" alt="#" class="bigTitle">
			<h2>報名名單</h2>
			<div class="actManageTable">
				<table>
					<tr>
						<th>活動編號</th>
						<th>會員ID</th>
						<th>會員姓名</th>
						<th>電話</th>
						<th>信箱</th>
						<th>操作</th>
					</tr>

<?php 
	try{
		require_once("php/PDO/connectPDO.php");
		$memNo = $_SESSION["memNo"];
		$ac_no = $_GET['AC_NO'];
		$activityPartcipantSQL = "SELECT a.AC_NO,a.MEM_NO,m.MEM_PHONE,m.MEM_MAIL,m.MEM_ID,m.MEM_REALNAME FROM ac_info a JOIN member m ON a.MEM_NO=m.MEM_NO WHERE a.AC_NO = '$ac_no'";
		$participants = $connectPDO->query($activityPartcipantSQL);
		while ($participantsRow = $participants->fetchObject()) {
?>
					<tr>
						<td data-th="活動編號"><?php echo $participantsRow->AC_NO ?></td>
						<td data-th="會員ID"><?php echo $participantsRow->MEM_ID?></td>
						<td data-th="會員姓名"><?php echo $participantsRow->MEM_REALNAME?></td>
						<td data-th="電話"><?php echo $participantsRow->MEM_PHONE?></td>
						<td data-th="信箱"><?php echo $participantsRow->MEM_MAIL?></td>
						<td data-th="操作">
							<form id="updateAbsentForm" action="php/activity/manage/updateAbsent.php" method="post">
							<button type="button" id="updateAbsentBtn">
								<span class="tableIcon">
									<svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><path d="M36,26.5c-0.7-0.7-3.1-3-5.7-5.4L30.2,21c-2.9-2.7-6.1-5.7-7.2-6.9c-1.2-1.2-2.7-1.8-4.3-1.8c-1.6,0-3.2,0.6-4.3,1.8c-1.2,1.1-1.8,2.7-1.8,4.3s0.6,3.2,1.8,4.3c2.1,2.1,11.4,10.8,11.5,10.9l0.1,0.1l1-1.1l-0.2-0.2c-2.2-2.1-9.6-8.9-11.4-10.7c-0.9-0.9-1.3-2-1.3-3.3s0.5-2.4,1.3-3.3c0.9-0.9,2-1.3,3.3-1.3c1.2,0,2.4,0.5,3.3,1.3c1.1,1.1,4.2,4.1,7.2,6.9c2.3,2.2,5,4.7,5.7,5.4c0.6,0.6,1,1.4,1,2.3c0,0.9-0.3,1.7-1,2.3c-1.3,1.3-3.3,1.3-4.6,0c-0.9-0.9-4.1-3.9-7-6.6l0,0c-2.3-2.2-4.5-4.2-5-4.7c-0.4-0.4-0.6-0.8-0.6-1.4s0.2-1,0.6-1.4c0.8-0.8,2-0.8,2.7,0c1,1,9.6,9,10.6,9.9l0.1,0.1l1-1.1l-0.1-0.1c-0.1-0.1-9.5-8.8-10.5-9.9c-1.3-1.3-3.5-1.3-4.8,0c-1.3,1.3-1.3,3.5,0,4.8c0.5,0.5,2.7,2.6,5,4.7l0,0c2.9,2.7,6.1,5.7,7,6.6c0.9,0.9,2.1,1.4,3.4,1.4c1.3,0,2.5-0.5,3.4-1.4c0.9-0.9,1.4-2.1,1.4-3.4C37.4,28.6,36.9,27.4,36,26.5z"/></svg>
								</span>
								<span>缺席</span>
							</button>
							
						</td>
					</tr>
					</form>

<?php
	
	} //while
}catch(PDOException $ex){
	echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}

 ?>

				</table>
			</div>
		</div>
		




	</div>





	 <?php 

	 	require_once('footer.php');

	  ?>
<script type="text/javascript">
	$(function(){
		$("#updateAbsentBtn").click(function(){
			$.sweetModal({
                content: '修改完成',
                icon: $.sweetModal.ICON_SUCCESS,
                width: '300px',
                theme: $.sweetModal.THEME_MIXED,
                timeout: 1000,
                onClose: function(){
              		$("#updateAbsentForm").submit();
           		 }
            });
		});
	});

</script>
</body>
</html>