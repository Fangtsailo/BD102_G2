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
	<link rel="stylesheet" type="text/css" href="css/bossActivityAdd.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	
	<!-- =====side bar==== -->
	<link rel="stylesheet" type="text/css" href="css/memberSideBar.css">
	<script type="text/javascript" src="js/memberSideBar.js"></script>
	<!-- =====subTitle==== -->
	<link rel="stylesheet" type="text/css" href="css/subtitle.css">
	<script type="text/javascript" src="js/subtitle.js"></script>

	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
</head>

<body>
	<?php require_once('header.php');?>
	<?php require_once('subtitle.php') ?>
	 
	<div class="container">

	<?php require_once('memberSideBar.php');?>	
					
<?php

try{

	require_once("php/PDO/connectPDO.php");
	$acNo = $_GET["AC_NO"];
	$queryActSQL = "SELECT * FROM activity WHERE AC_NO = '$acNo' ";
	$queryAct = $connectPDO->query($queryActSQL);
	$queryActRow = $queryAct->fetchObject();

 ?>
<!-- ==============left fixed content======END======= -->
		
	<div class="bossActContent">
		<form action="php/activity/manage/editActivity.php" method="post" id="editActForm" enctype="multipart/form-data">
			<input type="hidden" name="acNo" value="<?php echo $queryActRow->AC_NO;?>">
			<!-- <input type="hidden" name="MAX_FILE_SIZE" value="2048"> -->
			<img src="img/icon/bossActivity.svg" alt="#" class="bigTitle">
			<h2>編輯活動詳情</h2>
			<div class="actManageTable">
				<table>
					<tr>
						<th><div>活動名稱</div></th>
						<td>
							<input type="text" name="acName" value="<?php echo $queryActRow->AC_NAME;?>">
						</td>
					</tr>
					<tr>
						<th><div>活動時間</div></th>
						<td>
							<input type="text" name="acTime" value="<?php echo $queryActRow->AC_TIME;  ?>">
						</td>
					</tr>
					<tr>
						<th><div>活動費用</div></th>
						<td>
							<input type="text" name="acPrice" value="<?php echo $queryActRow->AC_PRICE;?>">
						</td>
					</tr>
					<tr>
						<th><div>活動材料</div></th>
						<td>
							<input type="text" name="acIngrd" value="<?php echo $queryActRow->AC_INGREDIENT;?>">
						</td>
					</tr>
					<tr>
						<th><div>人數限制</div></th>
						<td>
							<input type="number" name="acParticipants" value="<?php echo $queryActRow->AC_MEM_COUNT;?>">
						</td>
					</tr>
					<tr>
						<th><div>目的</div></th>
						<td>
							<textarea name="ac_detail1" maxlength="70"><?php echo $queryActRow->AC_DETAIL1;?></textarea>
						</td>
					</tr>
					<tr>
						<th><div>詳情</div></th>
						<td>
							<textarea name="ac_detail2" maxlength="55"><?php echo $queryActRow->AC_DETAIL2;  ?></textarea>
						</td>
					</tr>
					<tr>
						<th><div>食材準備</div></th>
						<td>
							<textarea name="ac_detail3" maxlength="80"><?php echo $queryActRow->AC_DETAIL3;  ?></textarea>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>封面照片(限兩張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upBanner[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upBanner[]"></label>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>活動照片(限3張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upAct[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upAct[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upAct[]"></label>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>食材照片(限3張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upIngrd[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upIngrd[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upIngrd[]"></label>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>成品照片(限3張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upProd[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upProd[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upProd[]"></label>
						</td>
					</tr>
				</table>
				<button class="globalOkBtn" id="editActBtn" type="button">編輯完成</button>
			</div> 
		</form>
	</div>
</div>

		


<?php 

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
}


 ?>

	





	 <?php 

	 	require_once('footer.php');

	  ?>

<script type="text/javascript">
	$(function(){
		$("#editActBtn").click(function(){
            $.sweetModal.confirm('確認送出?', function() {
            	width: '300px',
				$.sweetModal({
					content: '修改完成',
					icon: $.sweetModal.ICON_SUCCESS,
					width: '300px',
					theme: $.sweetModal.THEME_MIXED,
					timeout: 1000,
					onClose: function(){
		              	$("#editActForm").submit();
		           	}
		        });
			});
		});
	});

</script>
</body>
</body>
</html>