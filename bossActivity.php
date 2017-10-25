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
	<link rel="stylesheet" type="text/css" href="css/bossAcitivity.css">
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

<!-- <div class="LeftBusiness"> -->


	<?php 

		require_once('memberSideBar.php');

	?>	



			
<!-- </div> --> <!-- LeftBusiness -->

		
	<div class="container">


<?php 

		require_once('memberSideBar.php');

	?>


	<div class="bossActContent">
		<h2>活動管理</h2>
		<div class="actManage">
			<h3>活動列表</h3>
			<div class="addAct">
				
				<a href="bossActivityAdd.php">
				<span><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve"><style type="text/css">.plus{fill:#f06428;}</style><path class="plus" d="M36.4,19.9c0,9.4-7.6,17-17,17c-8.3,0-15.3-6-16.7-14h2c1.4,6.8,7.4,12,14.7,12c8.3,0,15-6.7,15-15s-6.7-15-15-15s-15,6.7-15,15c0,0.3,0,0.7,0.1,1H2.4v-1c0-9.4,7.6-17,17-17S36.4,10.5,36.4,19.9z M18.4,12.9v6h-6v2h6v6h2v-6h6v-2h-6v-6H18.4z"/></svg></span>新增活動
				</a>
			</div>
			<div class="clearfix"></div>
		</div>    
		<div class="actManageTable">
			<table>
				<tr>
					<th>活動編號</th>
					<th>活動名稱</th>
					<th>活動日期時間</th>
					<th>上架狀態</th>
					<th>參加人數</th>
					<th>操作</th>
				</tr>
<?php 
	try{
		require_once("php/PDO/connectPDO.php");
		$memNo = $_SESSION["memNo"];
		$selectActivitySQL = "SELECT a.AC_NO,a.AC_STORE_NUM,a.AC_NAME,a.AC_TIME,a.AC_CHECKSTAY,a.AC_MEM_COUNT,s.SI_NUM,s.SI_MEMNO FROM activity a JOIN store_imformation s ON a.AC_STORE_NUM=s.SI_NUM WHERE s.SI_MEMNO='$memNo' " ;
		$activity = $connectPDO->query($selectActivitySQL);
		while ($activityRow = $activity->fetchObject()) {
			switch ($activityRow->AC_CHECKSTAY) {
				case null:
					$status = '未審核';
					break;
				case '0':
					$status = '未通過審核';
					break;
				case '1':
					$status = '審核通過';
					break;
			}
?>
				<form>
						<input type="hidden" name="AC_NO" value="<?php echo $activityRow->AC_NO; ?>">
				<tr>
					<td data-th="活動編號"><?php echo $activityRow->AC_NO ; ?></td>
					<td data-th="活動名稱"><?php echo $activityRow->AC_NAME ; ?></td>
					<td data-th="活動日期時間"><?php echo $activityRow->AC_TIME ; ?></td>
					<td data-th="上架狀態"><?php echo $status ; ?></td>
					<td data-th="參加人數"><?php echo $activityRow->AC_MEM_COUNT ; ?></td>
					<td data-th="操作">
						<a href="bossActivityList.php?AC_NO=<?php echo $activityRow->AC_NO; ?>" class="joinlist">
							<!-- <img src="img/icon/entryform.svg"> -->
							<span class="tableIcon"><svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><g><rect x="20.4" y="23" width="9.3" height="1.5"/><rect x="20.4" y="30.7" width="9.3" height="1.5"/><path d="M32,34.6H18V15.4h9.6c0.1,0,0.5,0,0.5,0.5v3.1h-7.8v1.5h13.2l-0.1-0.2c0-0.1-3.9-5.3-4.3-5.7c-0.4-0.5-1-0.8-1.6-0.8H16.5v22.2h17V21.7H32V34.6z M29.6,17.7l1,1.3h-1V17.7z"/><rect x="20.4" y="26.8" width="9.3" height="1.5"/></g></svg></span><span>名單</span>
						</a>
						<a href="bossActivityEdit.php?AC_NO=<?php echo $activityRow->AC_NO; ?>" class="editAct">
							<span class="tableIcon"><svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><path d="M35.5,17.4c0.4-0.4,0.6-0.9,0.6-1.5c0-0.6-0.2-1.1-0.6-1.5c-0.8-0.8-2.1-0.8-2.9,0l-1.4,1.4c-1.9-1.3-4-1.9-6.2-1.9c-6.1,0-11.1,5-11.1,11.1v0.8h1.6l0-0.3c0-0.2,0-0.3,0-0.5c0-5.3,4.3-9.6,9.6-9.6c1.8,0,3.6,0.5,5.1,1.5l-7,7c-0.5,0.5-0.9,1.1-1.1,1.6c-0.3,0.7-0.3,1.3-0.3,1.3c0,0.2,0,0.4,0,0.7v0.8h0.8c1.8,0,2.8-0.7,3.5-1.3l7.2-7.2c1,1.6,1.5,3.3,1.5,5.2c0,5.3-4.3,9.6-9.6,9.6c-4.5,0-8.5-3.2-9.4-7.7l0-0.1H14l0,0.1c0.9,5.3,5.5,9.2,10.9,9.2c6.1,0,11.1-5,11.1-11.1c0-2.2-0.7-4.4-2-6.3L35.5,17.4z M23.3,26.7c0.1-0.8,0.5-1.2,1-1.7l9.5-9.5c0.1-0.1,0.2-0.1,0.4-0.1c0.1,0,0.3,0,0.4,0.1c0.1,0.1,0.2,0.2,0.2,0.4c0,0.1-0.1,0.3-0.2,0.4L25,25.8C24.5,26.2,24,26.6,23.3,26.7z"/></svg>
							</span><span>編輯</span>	
						</a>
						<a href="#" class="removeAct">
							<span class="tableIcon"><svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><g><rect x="20.4" y="24.3" width="9.3" height="1.5"/><path d="M25,13.9c-6.1,0-11.1,5-11.1,11.1v0.7h1.5l0-0.2c0-0.2,0-0.3,0-0.5c0-5.3,4.3-9.6,9.6-9.6s9.6,4.3,9.6,9.6s-4.3,9.6-9.6,9.6c-4.6,0-8.5-3.2-9.4-7.7l0-0.1h-1.5l0,0.1c0.9,5.3,5.5,9.1,10.9,9.1c6.1,0,11.1-5,11.1-11.1S31.1,13.9,25,13.9z"/></g></svg>
							</span><span>下架</span>	
						</a>
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
	  
</body>
</html>