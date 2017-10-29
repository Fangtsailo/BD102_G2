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
	<link rel="stylesheet" type="text/css" href="css/subTitleAmination.css">
	<script type="text/javascript" src="js/subtitle.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
</head>

<body>
	<?php require_once('header.php');?>
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
			<div class="subtitle">
			<svg id="圖層_1" class="mysvg" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 331.16 104.99" width="300" height="100"><defs><style>.cls-1{font-size:36px;font-family:NotoSansCJKtc-Regular-B5pc-H, Noto Sans CJK TC;}.cls-1,.cls-6{fill:#4b7cbf;}.cls-2{opacity:0.7;}.cls-3,.cls-4,.cls-5{fill:none;stroke:#4b7cbf;stroke-miterlimit:10;}.cls-3{stroke-width:3px;}.cls-4{stroke-width:2px;}</style></defs><title>breadstoreTitile</title>

		<text class="cls-1" transform="translate(101.5 67.26)">

			編輯活動詳情

		</text><g class="line"><line class="line-g" x1="20" y1="53.89" y2="53.89"/><line class="line-g" x1="22.67" y1="45.26" x2="6.67" y2="39.26"/><line class="line-g" x1="29.33" y1="37.57" x2="20" y2="30.57"/><line class="line-g" x1="21.36" y1="64.57" x2="5.36" y2="70.57"/><line class="line-g" x1="28.03" y1="72.26" x2="18.7" y2="79.26"/><line class="line-g" x1="311.16" y1="53.89" x2="331.16" y2="53.89"/><line class="line-g" x1="308.5" y1="45.26" x2="324.5" y2="39.26"/><line class="line-g" x1="301.83" y1="37.57" x2="311.16" y2="30.57"/><line class="line-g" x1="309.8" y1="64.57" x2="325.8" y2="70.57"/><line class="line-g" x1="303.13" y1="72.26" x2="312.46" y2="79.26"/><path class="line-g" d="M137.11,101.37c-25,19.48-63.26,12.55-79.2-12.94a32.7,32.7,0,0,1,2.5,2.39c11.18,13.11,25.29,20.06,42.59,19.94,11.22-.08,21.16-4.33,30.5-10.23C135.52,99.24,135.55,99.29,137.11,101.37Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M265.1,41.15c-19.71-3.59-40.43-.81-45.44,6,.19.06.41.22.56.17a22.62,22.62,0,0,0,2.56-1c9.61-4.93,19.94-6.14,30.51-5.52a22.28,22.28,0,0,1,8.73,2.4C264.78,44.57,264.63,43,265.1,41.15Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M289.71,51.45c-.94.26-2.3,1.22-2.35,1.94a4.08,4.08,0,0,0,1.53,3,6.46,6.46,0,0,0,3.44.95c2.56.13,5.12,0,8,0C298.4,53.07,293.57,50.4,289.71,51.45Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M293.23,59.95c-.76,1.71,1.29,4.19,4.34,5,2.44.62,4.94,1,7.53,1.5-.89-3-2.22-5.81-5.37-7.24C297.35,58.08,293.85,58.54,293.23,59.95Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M279.87,48.58c4.44,5.11,9.37.49,14.48,1.53C289.44,44.8,282.78,44.17,279.87,48.58Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M285.77,55.85c-.67-.22-2.12.69-2.65,1.48-1.84,2.75-.21,8.15,2.75,9.87.47-1.22,1-2.43,1.4-3.69.49-1.7,1.19-3.48,1.07-5.17C288.27,57.4,286.83,56.19,285.77,55.85Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M303.47,67.73c-1.65-1.23-3.74-2.05-5.19-.09s.19,3.5,1.64,4.69a12.07,12.07,0,0,0,3,1.55c1.31.55,2.66,1,4.09,1.53A8.17,8.17,0,0,0,303.47,67.73Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M291.21,61.83c-1.08,1-2.69,1.78-3.13,3-1.12,3.06-.4,6,2.3,8.86,1.24-2.82,2.74-5.21,3.25-7.81C293.84,64.73,292.07,63.19,291.21,61.83Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M275.75,42c-1,.37-1.69,1.71-2.51,2.6,1.06.59,2.2,1.78,3.17,1.66,3.29-.41,6.52-1.28,10.31-2.09C283,41.65,279.5,40.61,275.75,42Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M280.22,50.94a2.53,2.53,0,0,0-2.35.68c-1.52,2.59-1.11,8.7,3.25,10.06.33-3,.79-5.81.88-8.68C282,52.3,281,51.24,280.22,50.94Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M272.46,46.61c-.59,1-1.54,1.95-1.7,3-.51,3.33,1.17,5.64,5,7.93,0-3.34.32-5.91-.15-8.33C275.39,48.19,273.55,47.48,272.46,46.61Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M297.68,73.22c-.18-1.4-1.24-2.68-1.92-4-1.14.94-2.9,1.67-3.3,2.86a6.67,6.67,0,0,0,1.79,7.36c.75-1.09,1.46-2,2-2.93S297.81,74.24,297.68,73.22Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M266,44a3.84,3.84,0,0,0-1.75,3.2,7.32,7.32,0,0,0,5.08,6.27c0-2.42.16-4.66-.05-6.86C269.1,44.76,267.87,43.31,266,44Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M277.79,38.94a57.75,57.75,0,0,0-8.42.07c-1.12.16-2,1.8-3,2.77,1.41.46,3,1.55,4.19,1.24,2.52-.64,4.86-2,7.28-3.1Q277.79,39.43,277.79,38.94Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M301.2,76.31a10.39,10.39,0,0,0,1.71,4.32c1.15,1.32,2.91,2.11,5.25,3.71-.63-2.72-.71-4.73-1.58-6.3C305.87,76.76,301.14,76,301.2,76.31Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M298.66,76.59c-.94,1-2.51,1.9-2.66,3-.24,1.77,1.47,5.59,1.83,5.63.9-1.55,2.29-3,2.55-4.68C300.57,79.35,299.28,77.92,298.66,76.59Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M301.83,82.1c-.54.85-1.64,1.81-1.5,2.54.34,1.9,2.81,5.52,3.27,5.5a32.22,32.22,0,0,0,.75-6C304.32,83.4,302.72,82.77,301.83,82.1Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M233.07,28.72c-10.91,6.16-19.76,15.8-19.45,21.08.12,0,.29-.06.33-.14a14.15,14.15,0,0,0,.81-1.53c2.65-6.22,7.13-10.94,12.46-14.87a13.94,13.94,0,0,1,5.16-2.34C234.29,30.49,233.6,29.81,233.07,28.72Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M249,23.82c-.35.5-.62,1.51-.35,1.87a2.56,2.56,0,0,0,1.93.83,4,4,0,0,0,2-.92c1.28-1,2.48-2,3.85-3.17C253.85,21.11,250.46,21.77,249,23.82Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M254.12,26.49c.32,1.13,2.3,1.5,4.07.65,1.42-.68,2.77-1.5,4.22-2.3-1.65-1.11-3.39-1.9-5.48-1.34C255.36,23.95,253.86,25.57,254.12,26.49Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M243.15,26.37c4.18.68,4.7-3.52,7.58-5.06C246.24,20.73,242.78,23.09,243.15,26.37Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M248.89,27.51c-.41.16-.75,1.18-.68,1.77.22,2.06,3.16,4,5.28,3.65-.26-.78-.48-1.58-.81-2.34a9.87,9.87,0,0,0-1.56-2.91A2.52,2.52,0,0,0,248.89,27.51Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M262.16,26.13c-1.29.07-2.62.51-2.53,2s1.49,1.61,2.67,1.6a7.55,7.55,0,0,0,2.05-.45c.85-.26,1.68-.58,2.58-.9A5.11,5.11,0,0,0,262.16,26.13Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M253.9,28.2c-.12.91-.58,1.93-.31,2.7.69,1.92,2.21,3,4.65,3.34a25.13,25.13,0,0,0-1.56-5.05C256.33,28.55,254.86,28.51,253.9,28.2Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M238.51,24.84c-.34.58-.13,1.49-.17,2.26.75-.14,1.77,0,2.19-.47,1.42-1.51,2.62-3.23,4.12-5.13C241.86,21.8,239.77,22.69,238.51,24.84Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M244.26,27.37a1.58,1.58,0,0,0-.86,1.27c.31,1.86,3,4.63,5.59,3.54-1-1.55-1.95-3.11-3-4.52A1.89,1.89,0,0,0,244.26,27.37Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M238.79,28.4a6.24,6.24,0,0,0,.39,2.13c1.09,1.8,2.82,2.25,5.57,1.82a29.79,29.79,0,0,0-3.41-3.95C240.84,28,239.67,28.37,238.79,28.4Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M261.57,31.09A8.65,8.65,0,0,0,259,29.93c-.17.91-.73,2-.44,2.69a4.17,4.17,0,0,0,3.81,2.82c-.07-.82-.09-1.53-.21-2.21S262,31.53,261.57,31.09Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M234.62,29.71a2.4,2.4,0,0,0,.44,2.24,4.58,4.58,0,0,0,5,1c-1-1.16-1.79-2.3-2.77-3.28C236.44,28.85,235.26,28.65,234.62,29.71Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M238.29,22.57a36.13,36.13,0,0,0-4,3.4c-.48.52-.25,1.68-.35,2.55.86-.34,2-.45,2.51-1.08a29.41,29.41,0,0,0,2.26-4.4Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M264.51,31.17a6.5,6.5,0,0,0,2.55,1.39,18.4,18.4,0,0,0,4-.32,17.1,17.1,0,0,0-3.29-2.4C266.93,29.51,264.37,31.06,264.51,31.17Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M263.39,32.32c-.05.85-.44,1.92-.08,2.51a6.53,6.53,0,0,0,3.13,2c-.19-1.11-.11-2.37-.65-3.27C265.42,32.88,264.23,32.71,263.39,32.32Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M267.13,33.7c.08.63-.06,1.52.29,1.82a7.82,7.82,0,0,0,3.78,1.34,20.16,20.16,0,0,0-2.06-3.21C268.84,33.33,267.82,33.67,267.13,33.7Z" transform="translate(-18.41 -21.22)"/>
			</g>
			</svg>
		</div>
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