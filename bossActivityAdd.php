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
<!-- ==============left fixed content======END======= -->
	<div class="bossActContent">
		<form action="php/activity/add/addActivity.php" method="post" id="addActForm" enctype="multipart/form-data"> <?php  ?>
			<input type="hidden" name="acNo" value="">
			<img src="img/icon/bossActivity.svg" alt="#" class="bigTitle">
			<h2>新增活動</h2>
			<div class="actManageTable">
				<table>
					<tr>
						<th><div>活動名稱</div></th>
						<td>
							<input type="text" name="acName" placeholder="請輸入活動名稱">
						</td>
					</tr>
					<tr>
						<th><div>活動時間</div></th>
						<td>
							<input type="text" name="acTime" placeholder="例如：2017-10-10上午10:00">
						</td>
					</tr>
					<tr>
						<th><div>人數限制</div></th>
						<td>
							<input type="number" name="acParticipants" placeholder="請輸入人數">
						</td>
					</tr>
					<tr>
						<th><div>目的</div></th>
						<td>
							<textarea name="ac_detail1" placeholder="限70字" maxlength="70"></textarea>
						</td>
					</tr>
					<tr>
						<th><div>詳情</div></th>
						<td>
							<textarea name="ac_detail2" placeholder="限55字" maxlength="55"></textarea>
						</td>
					</tr>
					<tr>
						<th><div>食材準備</div></th>
						<td>
							<textarea name="ac_detail3" placeholder="限80字" maxlength="80"></textarea>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>封面照片(限兩張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]">
								<span></span>
								</label>
							
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>活動照片(限3張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>食材照片(限3張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
						</td>
					</tr>
					<tr>
						<th class="uploadPic"><div>成品照片(限3張)</div></th>
						<td class="uploadPic">
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
							<label class="upload">
								<img src="img/icon/camera.png">
								<span>上傳照片</span>
								<input type="file" name="upfile[]"></label>
						</td>
					</tr>
				</table>
				<button class="globalOkBtn" id="addActBtn" type="button">編輯完成</button>
			</div>
		</form>
	</div>
		




	</div>





	 <?php 

	 	require_once('footer.php');

	  ?>
<script type="text/javascript">
	$(function(){
		$("#addActBtn").click(function(){
            $.sweetModal.confirm('確認送出?', function() {
				$.sweetModal({
					content: '修改完成',
					icon: $.sweetModal.ICON_SUCCESS,
					width: '300px',
					theme: $.sweetModal.THEME_MIXED,
					timeout: 1000,
					onClose: function(){
		              	$("#addActForm").submit();
		           	}
		        });
			});
		});
	});

</script>
</body>
</body>
</html>