<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" href="img/trepun4.png">
	<title>TrePun</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memEdit.css">
	<link rel="stylesheet" type="text/css" href="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<script type="text/javascript" src="js/memlightbox.js"></script>
</head>

<body>
	<!-- header -->
	<?php
		require_once("header.php");
	?>

	<!-- 會員專區 -->
	<div class="container">
		<div class="sidebar">
			<ul>
				<li><a href="memfollow.php" class="myfollowsvg">我的追蹤</a></li>
				<li><a href="memcomment.php" class="mycommentsvg">我的留言</a></li>
				<li><a href="mementry.php" class="myentrysvg">我的報名</a></li>
				<li><a href="memedit.php" class="myeditsvg">編輯個人資料</a></li>
				<li><a href="memBeBoss1.php" class="bebosssvg">成為店長</a></li>
			</ul>
		</div>
		
		<div class="content">
			<!-- 成為店長_第三頁 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-12 section1000">
				<h1>繼續完成店長資料登錄</h1>
				<p>完成後請按送出，<br>我們將與您進行審核作業！</p>
				<form class="form-horizontal" action="" method="post">
					<p>
						<label for="MEM_NAME"><span class="required">*</span>店長姓名</label>
						<input type="text" name="MEM_NAME" maxlength="8" placeholder="輸入真實姓名" autofocus>
					</p>
					<!-- <p>
						<label for="SI_PHONE"><span class="required">*</span>商家電話</label>
						<input type="tel" name="SI_PHONE" pattern="\d{10}" placeholder="輸入手機或市話">
					</p> -->
					<p>
						<label for="SI_COMFIRM_ID"><span class="required">*</span>統一編號</label>
						<input type="text" name="SI_COMFIRM_ID" maxlength="8" placeholder="輸入格式:80088888">
					</p>
					<p>
						<label for="SI_COMFIRM_ID"><span class="required">*</span>車牌號碼</label>
						<input type="text" name="SI_COMFIRM_ID" maxlength="8" placeholder="輸入格式:KAQ-230">
					</p>
			    	<input type="submit" value="送出" onclick="location.href='FMybusinessStore.php'">
				</form>
			</section>
		</div>
	</div>

	<!-- footer -->
	<?php
		require_once("footer.php");
	?>

</body>
</html>