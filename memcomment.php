
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
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
			<!-- 我的留言 -->
			<h1><img src="img/memimg/mycommenttl.svg" alt="我的留言"></h1>
			<section col-xs-12 col-sm-6">
				<table>
					<tr>
						<td>
							<span class="storepic"></span>
							<div class="msg msg-l">
			                    <div class="action">
			                    	<ul>
			                    		<li><a href="" class="del"><img src="img/icon/del.svg"></a></li>
			                    		<li><a href="" class="reply"><img src="img/icon/reply.svg"></a></li>
			                    	</ul>
			                    </div>
								<p>TO: <span>小木屋鬆餅屋</span></p>
								<p>請問周日有營業嗎?</p>
								<time>
			                    	留言時間：<span>2017-10-6</span>
			                    </time>
							</div>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<span class="storepic storepic-r"></span>
							<div class="msg msg-r">
			                    <div class="action">
			                    	<ul>
			                    		<li><a href="" class="del"><img src="img/icon/del.svg"></a></li>
			                    		<li><a href="" class="reply"><img src="img/icon/reply.svg"></a></li>
			                    	</ul>
			                    </div>
								<p>TO: <span>小木屋鬆餅屋</span></p>
								<p>請問周日有營業嗎?</p>
								<time>
			                    	留言時間：<span>2017-10-6</span>
			                    </time>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<span class="storepic"></span>
							<div class="msg msg-l">
			                    <div class="action">
			                    	<ul>
			                    		<li><a href="" class="del"><img src="img/icon/del.svg"></a></li>
			                    		<li><a href="" class="reply"><img src="img/icon/reply.svg"></a></li>
			                    	</ul>
			                    </div>
								<p>TO: <span>小木屋鬆餅屋</span></p>
								<p>請問周日有營業嗎?</p>
								<time>
			                    	留言時間：<span>2017-10-6</span>
			                    </time>
							</div>
						</td>
						<td>
						</td>
					</tr>
				</table>
			</section>

		</div>
	</div>
	
	<!-- header -->
	<?php
	require_once("footer.php");
	?>

</body>
</html>