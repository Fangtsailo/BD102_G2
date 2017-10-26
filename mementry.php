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
			<!-- 我的報名 -->
			<h1><img src="img/memimg/myentrytl.svg" alt="我的報名"></h1>
			<section class="col-xs-12 col-sm-4 section1000">
				<div class="myentry">
					<img src="img/memimg/followimg1.jpg" class="actpic">
					<div class="info">
						<h2><a href="#">創意鳳梨酥DIY</a></h2>
						<a href="javascript:;" class="btn50" id="cancelentry">
							<img src="img/memimg/cancel.svg">
						</a>
						<address>
							<ul>
								<li><a href="#">小木屋鬆餅屋</a></li>
						        <li>活動日期: 2017-10-20</li>
						        <li>活動時間: 上午10:00</li>
						        <li>報名狀態: 訂單成立</li>
							</ul>
						</address>
						<time>
						    報名日期：<span>2017-10-6</span>
						</time>
					</div>
				</div>
				<div class="myentry">
					<img src="img/memimg/followimg1.jpg" class="actpic">
					<div class="info">
						<h2><a href="#">創意鳳梨酥DIY</a></h2>
						<a href="javascript:;" class="btn50" id="cancelentry">
							<img src="img/memimg/cancel.svg">
						</a>
						<address>
							<ul>
								<li><a href="#">小木屋鬆餅屋</a></li>
						        <li>活動日期: 2017-10-20</li>
						        <li>活動時間: 上午10:00</li>
						        <li>報名狀態: 訂單成立</li>
							</ul>
						</address>
						<time>
						    報名日期：<span>2017-10-6</span>
						</time>
					</div>
				</div>
				<div class="myentry">
					<img src="img/memimg/followimg1.jpg" class="actpic">
					<div class="info">
						<h2><a href="#">創意鳳梨酥DIY</a></h2>
						<a href="javascript:;" class="btn50" id="cancelentry">
							<img src="img/memimg/cancel.svg">
						</a>
						<address>
							<ul>
								<li><a href="#">小木屋鬆餅屋</a></li>
						        <li>活動日期: 2017-10-20</li>
						        <li>活動時間: 上午10:00</li>
						        <li>報名狀態: 訂單成立</li>
							</ul>
						</address>
						<time>
						    報名日期：<span>2017-10-6</span>
						</time>
					</div>
				</div>
			</section>
		</div>
	</div>
	<!-- footer -->
	<?php
		require_once("footer.php");
	?>

</body>
</html>