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
			<!-- 我的追蹤 -->
			<h1><img src="img/memimg/myfollowtl.svg" alt="我的追蹤"></h1>
			<section class="col-xs-12 col-sm-3 section1000">

				<?php
				// phpinfo();
				
				// try{
				// 	require_once("php/pdo/connectPDO.php");
				// 	$sql = "select * from follow where MEM_NO='$memNo'";
				// 	$follow = $connectPDO->query($sql);

				// 	while( $followRow = $follow->fetchObject() ){
				?>
	
				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/memimg/follow3.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
					<time>
                    	收藏日期：2017-10-6
                    </time>
				</div>

				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/memimg/follow3.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
					<time>
                    	收藏日期：2017-10-6
                    </time>
				</div>

				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/memimg/follow3.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
					<time>
                    	收藏日期：2017-10-6
                    </time>
				</div>

		       
		       
				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2><?php //echo $followRow["SI_NAME"];?>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/memimg/follow3.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
					<time>
                    	收藏日期：2017-10-6
                    </time>
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