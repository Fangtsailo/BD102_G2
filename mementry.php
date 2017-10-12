
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memtry.css">
	<script type="text/javascript" src="js/header.js"></script>

</head>
<body>
	<!-- header -->
	<?php
	require_once("header.php");
	?>

	<!-- 會員專區 -->
	<div class="container">
		<p class="subtitle">會員專區</p>
		<div class="sidebar">
			<ul>
				<li><a href="memfollow.php">我的追蹤<img src="img/icon/reply.svg"></a></li>
				<li><a href="memcomment.php">我的留言<img src="img/icon/reply.svg"></a></li>
				<li><a href="mementry.php">我的報名<img src="img/icon/reply.svg"></a></li>
				<li><a href="memedit.php">編輯個人資料<img src="img/icon/reply.svg"></a></li>
				<li><a href="memBeBoss1.php">成為店長<img src="img/icon/reply.svg"></a></li>
			</ul>
		</div>
		
		<div class="content">

			<!-- 我的報名 -->
			<h1><img src="img/memimg/myentrytl.svg" alt="我的報名"></h1>
			<section col-xs-12 col-sm-4">
				<div class="myentry">
					<img src="img/memimg/followimg1.jpg" class="actpic">
					<div class="info">
						<h2><a href="#">創意鳳梨酥DIY</a></h2>
						<a href="javascript:;" class="btn50" id="cancelentry">
							<img src="img/icon/follow.svg">
						</a>
						<address>
							<ul>
								<li><a href="#">小木屋鬆餅屋</a></li>
						        <li>活動日期: <span>2017-10-20</span></li>
						        <li>活動時間: <span>上午10:00</span></li>
						        <li>報名狀態: <span>訂單成立</span></li>
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
							<img src="img/icon/follow.svg">
						</a>
						<address>
							<ul>
								<li><a href="#">小木屋鬆餅屋</a></li>
						        <li>活動日期: <span>2017-10-20</span></li>
						        <li>活動時間: <span>上午10:00</span></li>
						        <li>報名狀態: <span>訂單成立</span></li>
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
							<img src="img/icon/follow.svg">
						</a>
						<address>
							<ul>
								<li><a href="#">小木屋鬆餅屋</a></li>
						        <li>活動日期: <span>2017-10-20</span></li>
						        <li>活動時間: <span>上午10:00</span></li>
						        <li>報名狀態: <span>訂單成立</span></li>
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
	
	<!-- header -->
	<?php
	require_once("footer.php");
	?>

</body>
</html>