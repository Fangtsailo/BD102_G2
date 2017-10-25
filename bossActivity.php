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
</head>
<body>
	<?php 
		require_once('header.php');
	 ?>


	<div class="container">

	<div class="bossHead">
			<h1>店長專區</h1>
	</div>

<!-- ==============left fixed content================== -->



		<div class="LeftBusiness">

			<div class="nav-Group1"> <!-- Groupmember -->



				<div>
					<h2>會員專區</h2>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210 60">
						<defs>
<!-- 							<style>
								.cls-ma-1{fill:#3eb155;}
								.cls-ma-2{fill:#fff;}
							</style> -->
						</defs>
						<title>messageManage</title>
						<rect class="cls-ma-1" width="180" height="60"/>
						<circle class="cls-ma-1" cx="180" cy="30" r="30"/>
						<path class="cls-ma-2" d="M190.33,24.61c-10.48,0-19,6.73-19,15,0,5.37,3.61,10.07,9,12.72V50.09c-4.23-2.36-7-6.17-7-10.48,0-7.17,7.63-13,17-13s17,5.83,17,13-7.63,13-17,13a21.76,21.76,0,0,1-2.65-.18l-3.35,3.35v-4a19.83,19.83,0,0,1-2-.7v9.56l6.08-6.08q.95.08,1.92.08c10.48,0,19-6.73,19-15S200.81,24.61,190.33,24.61Z" transform="translate(-10.33 -12.61)"/>
						<path class="cls-ma-2" d="M188.11,42c-3.41,1.23-4.55,2.23-5.1,6l-.14,1h16l-.14-1c-.54-3.77-1.68-4.79-5.08-6.13a.82.82,0,0,1-.47-.5,5.29,5.29,0,0,0,.58-.36l.21-.16.06-.05a5,5,0,0,0,.43-.38,4.86,4.86,0,0,0,1.27-2.17l.05-.19h0a5.43,5.43,0,0,0,.15-1.26V34a5,5,0,0,0-1.45-3.53l-.26-.24v0A5,5,0,0,0,190.88,29a6.15,6.15,0,0,0-3.07.84,3.77,3.77,0,0,1-1.85.57h-.15v1.71H186a5.41,5.41,0,0,0,2.63-.75,4.56,4.56,0,0,1,2.29-.65,3.37,3.37,0,0,1,3.37,3.37v2.81a3.37,3.37,0,0,1-6.73,0V33.21h-1.71v3.67a5.11,5.11,0,0,0,2.76,4.51A.82.82,0,0,1,188.11,42Zm.58,1.6a2.48,2.48,0,0,0,1.51-1.67,5.21,5.21,0,0,0,1.38,0,2.53,2.53,0,0,0,1.48,1.57c2.63,1,3.39,1.61,3.84,3.81h-12C185.32,45.09,186.13,44.5,188.69,43.57Z" transform="translate(-10.33 -12.61)"/>
					</svg>
				</div>
				


			</div><!-- Group4 -->



			<div class=""> <!-- Group1 -->



				<div>
					<h2>麵包店</h2>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210 60">
					<defs>
						<style>
							.cls-bs-1{fill:#f1f6fc;}
							.cls-bs-2{fill:#4289FF;}
							.cls-bs-3{fill:#fff;}
						</style>
					</defs>
					<title>breadStore</title>
					<rect class="cls-bs-1" y="30" width="210" height="30"/>
					<rect class="cls-bs-2" width="180" height="60"/>
					<circle class="cls-bs-2" cx="180" cy="30" r="30"/>
					<path class="cls-bs-3" d="M188.53,25.73l-17,10h4v4.11a7.87,7.87,0,0,1,2-.79V34.52l11-6.47,11,6.47V49H195.8A7.38,7.38,0,0,0,189,40.52a6,6,0,0,0-1.88.3.14.14,0,0,1-.13,0,5.6,5.6,0,0,0-6.55.06.16.16,0,0,1-.11,0,6,6,0,0,0-4.71,1.36.16.16,0,0,1-.13.05h-.14a6.18,6.18,0,0,0-5.79,5.45A6.09,6.09,0,0,0,171,52.58a8.59,8.59,0,0,0,6.1,2.57h10.26v-2H177.13a6.58,6.58,0,0,1-4.62-1.92,4.09,4.09,0,0,1-1-3.29,4.21,4.21,0,0,1,2.71-3.38,4.68,4.68,0,0,0-.24,1.68c.06,1.15,1.86,1.16,1.8,0a2.91,2.91,0,0,1,1-2.43l0,0a2.31,2.31,0,0,1,.32-.2.82.82,0,0,0,.11-.09,4,4,0,0,1,2.1-.66,6.63,6.63,0,0,0-.73,3.94c.15,1.13,2,1.15,1.8,0a5.19,5.19,0,0,1,1.5-4.44.87.87,0,0,0,.11-.17,3.57,3.57,0,0,1,3.24-.05,5.45,5.45,0,0,0-1.37,4.9c.17,1.14,1.9.66,1.74-.48a3.37,3.37,0,0,1,1.68-3.76,2.14,2.14,0,0,0,.37-.07,4,4,0,0,1,1.26-.2,5.37,5.37,0,0,1,3.72,8.74,5.32,5.32,0,0,1-3.29,1.81v2a7.43,7.43,0,0,0,4.82-2.54,7.12,7.12,0,0,0,1-1.52h6.35V35.73h4Z" transform="translate(-7.5 -10.44)"/>
				</svg>
				</div>
				
				
				<div>
					<h3>基本資料</h3>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.23 17.56" width="20" height="20">
						<defs>

						</defs>
						<title>arrow</title>
						<polygon class="cls-ar" points="1.25 17.56 0 16 9.02 8.78 0 1.56 1.25 0 12.23 8.78 1.25 17.56"/>
					</svg>
				</div>



				<div>
					<h3>商品</h3>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.23 17.56" width="20" height="20">
						<defs>

						</defs>
						<title>arrow</title>
						<polygon class="cls-ar" points="1.25 17.56 0 16 9.02 8.78 0 1.56 1.25 0 12.23 8.78 1.25 17.56"/>
					</svg>
				</div>


				


			</div><!-- Group1 -->









<div> <!-- Group2 -->



				<div>
					<h2>胖小車</h2>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210 60">
						<defs>
							<style>
								.cls-bc-1{fill:#f1f6fc;}
								.cls-bc-2{fill:#4289FF;}
								.cls-bc-3{fill:#fff;}
							</style>
						</defs>
						<title>breadCar</title>
						<rect class="cls-bc-1" y="30" width="210" height="30"/>
						<rect class="cls-bc-2" width="180" height="60"/>
						<circle class="cls-bc-2" cx="180" cy="30" r="30"/>
						<path class="cls-bc-3" d="M198.33,25.94h-20a4.82,4.82,0,0,0-5,5v13h-2v2h4V31a2.86,2.86,0,0,1,3-3h1v8h27.46a21.24,21.24,0,0,1,.54,5v2a.91.91,0,0,1-1,1h-1.1a5,5,0,0,0-9.8,0h-8.2a5,5,0,1,0,0,2h8.2a5,5,0,0,0,9.8,0h1.1a2.91,2.91,0,0,0,3-3v-2C209.33,26.11,198.44,25.94,198.33,25.94Zm-11,8h-6v-6h6Zm8,0h-6v-6h6Zm2,0v-6h1c.28,0,5.47.09,7.83,6Zm-15,14a3,3,0,1,1,3-3A3,3,0,0,1,182.33,47.94Zm18,0a3,3,0,1,1,3-3A3,3,0,0,1,200.33,47.94Z" transform="translate(-10.33 -7.94)"/>
					</svg>
				</div>
				
				
				<div>
					<h3>定位位置</h3>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.23 17.56" width="20" height="20">
						<defs>

						</defs>
						<title>arrow</title>
						<polygon class="cls-ar" points="1.25 17.56 0 16 9.02 8.78 0 1.56 1.25 0 12.23 8.78 1.25 17.56"/>
					</svg>
				</div>



				<div>
					<h3>基本資料</h3>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.23 17.56" width="20" height="20">
						<defs>

						</defs>
						<title>arrow</title>
						<polygon class="cls-ar" points="1.25 17.56 0 16 9.02 8.78 0 1.56 1.25 0 12.23 8.78 1.25 17.56"/>
					</svg>
				</div>


				<div>
					<h3>商品</h3>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.23 17.56" width="20" height="20">
						<defs>

						</defs>
						<title>arrow</title>
						<polygon class="cls-ar" points="1.25 17.56 0 16 9.02 8.78 0 1.56 1.25 0 12.23 8.78 1.25 17.56"/>
					</svg>
				</div>


				


			</div><!-- Group2 -->






             <div> <!-- Group3 -->



				<div>
					<h2>活動管理</h2>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210 60">
						<defs>
							<style>
								.cls-am-1{fill:#4289FF;}
								.cls-am-2{fill:#fff;}
							</style>
						</defs>
						<title>activityManage</title>
						<rect class="cls-am-1" width="180" height="60"/>
						<circle class="cls-1" cx="180" cy="30" r="30"/>
						<path class="cls-am-2" d="M180,54.85a3.75,3.75,0,0,1-2.09-4.9l3.9-9.48,7,2.83L185,52.78A3.82,3.82,0,0,1,180,54.85Zm2.78-12.11-3.23,7.87a2,2,0,0,0,1.12,2.62,2,2,0,0,0,2.65-1.11l3.23-7.87Z" transform="translate(-8.33 -10.61)"/>
						<path class="cls-am-2" d="M179.39,45.23,179.17,44c-.93-5.22-1.46-8.27-1.48-8.46A6.67,6.67,0,0,1,179.77,30a8.12,8.12,0,0,1,1.33-1,7,7,0,0,1,2.94-.86,6.56,6.56,0,0,1,1,0,8.59,8.59,0,0,1,.69-2.06,9.15,9.15,0,0,0-3.11.06,9,9,0,0,0-5.35,3.33,8.72,8.72,0,0,0-1.76,6.4c0,.28.74,4.31,2,11.55l.26,1.47Z" transform="translate(-8.33 -10.61)"/>
						<path class="cls-am-2" d="M200.92,39.43A4.94,4.94,0,0,0,199,36.9a5,5,0,0,0-3-.92,5.22,5.22,0,0,0-2,.46l-.18.08s-.18-.9-.38-2l0-.17c-.54.55-1.18,1.13-1.88,1.72l.18,1c.38,2.11.69,3.84.7,3.84l.74-.88c.4-.48.8-1,.89-1a2.86,2.86,0,0,1,4.39.28,2.62,2.62,0,0,1,.5,1.17,2.71,2.71,0,0,1-.24,1.74c-.07.15-.91,1.38-2.46,3.62l-2.36,3.39.05.29.05.29L187.31,51l-1.2.21-.73,1.79a4.21,4.21,0,0,1-.29.56l2.6-.45,6.69-1.17.17,1,.17,1L188,55l-6.69,1.17-2.13.37.37,2.08,8.82-1.54,8.82-1.54-.52-2.92-.52-2.92,1.66-2.39,2.12-3c.25-.36.51-.76.58-.88a5,5,0,0,0,.63-2.59A6.23,6.23,0,0,0,200.92,39.43Z" transform="translate(-8.33 -10.61)"/>
						<path class="cls-am-2" d="M196.55,28.45a5.11,5.11,0,0,0-.06-1.54,4.49,4.49,0,0,0-1.63-2.75,7.52,7.52,0,0,0-3.7-1.53,4.8,4.8,0,0,0-2.65.45A6.08,6.08,0,0,0,186,25.78a9.82,9.82,0,0,0-1.1,4.82,37.28,37.28,0,0,0,1,7.85l-1.62,3.94,1.63.65,1.64-4a32.58,32.58,0,0,0,6.76-5.61l.35-.41a13.24,13.24,0,0,0,.81-1.19A8.87,8.87,0,0,0,196.55,28.45Zm-10,5.26c0-.23-.06-.49-.07-.57a17,17,0,0,1,.07-4.68,7.33,7.33,0,0,1,1.28-2.87,3.9,3.9,0,0,1,1-1,2.51,2.51,0,0,1,1.11-.46l.37-.07-.22.27a14.32,14.32,0,0,0-1.74,3.18,26.84,26.84,0,0,0-1.57,5.66l-.18.94Zm4.42-2.54c-.47.86-1.22,2.09-1.88,3.08-.33.49-1.07,1.55-1.19,1.7s-.09.1-.09.07.35-2.24.56-3.29a22.32,22.32,0,0,1,2-6c1-1.87,1.92-2.7,2.37-2.06.07.1.09.16.13.46a2.64,2.64,0,0,1,0,.62A16.13,16.13,0,0,1,190.94,31.18Zm3.31-.19a17.21,17.21,0,0,1-4.09,4.38l-.16.12.27-.41a40.3,40.3,0,0,0,2.31-3.84,19.42,19.42,0,0,0,1.58-4.3,9.39,9.39,0,0,0,.17-1.13l0-.13.23.33a2.49,2.49,0,0,1,.45,1,4,4,0,0,1,.07,1.4A7.58,7.58,0,0,1,194.25,31Z" transform="translate(-8.33 -10.61)"/>
					</svg>
				</div>
				


			</div><!-- Group3 -->




             <div> <!-- Group4 -->



				<div>
					<h2>留言管理</h2>
					<svg id="圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 210 60">
						<defs>
							<style>
								.cls-mm-1{fill:#4289FF;}
								.cls-mm-2{fill:#fff;}
							</style>
						</defs>
						<title>messageManage</title>
						<rect class="cls-mm-1" width="180" height="60"/>
						<circle class="cls-mm-1" cx="180" cy="30" r="30"/>
						<path class="cls-mm-2" d="M190.33,24.61c-10.48,0-19,6.73-19,15,0,5.37,3.61,10.07,9,12.72V50.09c-4.23-2.36-7-6.17-7-10.48,0-7.17,7.63-13,17-13s17,5.83,17,13-7.63,13-17,13a21.76,21.76,0,0,1-2.65-.18l-3.35,3.35v-4a19.83,19.83,0,0,1-2-.7v9.56l6.08-6.08q.95.08,1.92.08c10.48,0,19-6.73,19-15S200.81,24.61,190.33,24.61Z" transform="translate(-10.33 -12.61)"/>
						<path class="cls-mm-2" d="M188.11,42c-3.41,1.23-4.55,2.23-5.1,6l-.14,1h16l-.14-1c-.54-3.77-1.68-4.79-5.08-6.13a.82.82,0,0,1-.47-.5,5.29,5.29,0,0,0,.58-.36l.21-.16.06-.05a5,5,0,0,0,.43-.38,4.86,4.86,0,0,0,1.27-2.17l.05-.19h0a5.43,5.43,0,0,0,.15-1.26V34a5,5,0,0,0-1.45-3.53l-.26-.24v0A5,5,0,0,0,190.88,29a6.15,6.15,0,0,0-3.07.84,3.77,3.77,0,0,1-1.85.57h-.15v1.71H186a5.41,5.41,0,0,0,2.63-.75,4.56,4.56,0,0,1,2.29-.65,3.37,3.37,0,0,1,3.37,3.37v2.81a3.37,3.37,0,0,1-6.73,0V33.21h-1.71v3.67a5.11,5.11,0,0,0,2.76,4.51A.82.82,0,0,1,188.11,42Zm.58,1.6a2.48,2.48,0,0,0,1.51-1.67,5.21,5.21,0,0,0,1.38,0,2.53,2.53,0,0,0,1.48,1.57c2.63,1,3.39,1.61,3.84,3.81h-12C185.32,45.09,186.13,44.5,188.69,43.57Z" transform="translate(-10.33 -12.61)"/>
					</svg>
				</div>
				


			</div><!-- Group4 -->


			



			
		</div> <!-- LeftBusiness -->
		
	



<!-- ==============left fixed content======END======= -->






		
	

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