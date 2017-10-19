
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memtry.css">
	<script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
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
			<!-- 我的追蹤 -->
			<h1><img src="img/memimg/myfollowtl.svg" alt="我的追蹤"></h1>
			<section col-xs-12 col-sm-3">
				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/icon/follow.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
						<a href="javascript:;" class="btn50" id="mappointer1">
							<img src="img/icon/mappointer1.svg">
						</a>
					</address>
					<time>
                    	收藏時間：<span>2017-10-6</span>
                    </time>
				</div>

				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/icon/follow.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
						<a href="javascript:;" class="btn50" id="mappointer1">
							<img src="img/icon/mappointer1.svg">
						</a>
					</address>
					<time>
                    	收藏時間：<span>2017-10-6</span>
                    </time>
				</div>

				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/icon/follow.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
						<a href="javascript:;" class="btn50" id="mappointer1">
							<img src="img/icon/mappointer1.svg">
						</a>
					</address>
					<time>
                    	收藏時間：<span>2017-10-6</span>
                    </time>
				</div>

				<div class="myfollow">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
						<li class="star"><img src="img/icon/star2.svg"></li>
					</ul>
					<a href="javascript:;" class="btn50" id="cancelfollow">
						<img src="img/icon/follow.svg">
					</a>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
						<a href="javascript:;" class="btn50" id="mappointer1">
							<img src="img/icon/mappointer1.svg">
						</a>
					</address>
					<time>
                    	收藏時間：<span>2017-10-6</span>
                    </time>
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