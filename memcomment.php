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
			<!-- 我的留言 -->
			<h1><img src="img/memimg/mycommenttl.svg" alt="我的留言"></h1>
			<section class="col-xs-12 col-sm-4 section1000">
				<ul class="mycomment">
					<li>
						<div class="msg">
							<time>
			                    留言時間：2017-10-6 17:10:43
			                </time>
							<p>TO:小木屋鬆餅屋</p>
							<p>請問周日有營業嗎?</p>
							<div class="storepic">
								<img src="img/memimg/followimg1.jpg">
							</div>
							<a href="javascript:;" class="btn50" id="del">
								<img src="img/memimg/del.svg">
							</a>
						</div>
					</li>
					
					<li>
						<div class="msg">
							<time>
			                    留言時間：2017-10-6 17:10:43
			                </time>
							<p>TO:<a href="#">小木屋鬆餅屋</a> 店長</p>
							<p>請問周日有營業嗎?</p>
							<div class="storepic">
								<img src="img/memimg/followimg1.jpg">
							</div>
							<a href="javascript:;" class="btn50" id="del">
								<img src="img/memimg/del.svg">
							</a>
							<div class="reply">
								<time>
			                    	回覆時間：2017-10-6 18:30:00
			                	</time>
								<p>店長 ANS:</p>
								<p>您好! 不好意思~ 周日公休唷請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?</p>
							</div>
						</div>
					</li>

					<li>
						<div class="msg">
							<time>
			                    留言時間：2017-10-6 17:10:43
			                </time>
							<p>TO:<a href="#">小木屋鬆餅屋</a> 店長</p>
							<p>請問周日有營業嗎?</p>
							<div class="storepic">
								<img src="img/memimg/followimg1.jpg">
							</div>
							<a href="javascript:;" class="btn50" id="del">
								<img src="img/memimg/del.svg">
							</a>
							<div class="reply">
								<time>
			                    	回覆時間：2017-10-6 18:30:00
			                	</time>
								<p>店長 ANS:</p>
								<p>您好! 不好意思~ 周日公休唷請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?</p>
							</div>
						</div>
					</li>

					
					<li>
						<div class="msg">
							<time>
			                    留言時間：2017-10-6 17:10:43
			                </time>
							<p>TO:<a href="#">小木屋鬆餅屋</a> 店長</p>
							<p>請問周日有營業嗎?</p>
							<div class="storepic">
								<img src="img/memimg/followimg1.jpg">
							</div>
							<a href="javascript:;" class="btn50" id="del">
								<img src="img/memimg/del.svg">
							</a>
							<div class="reply">
								<time>
			                    	回覆時間：2017-10-6 18:30:00
			                	</time>
								<p>店長 ANS:</p>
								<p>您好! 不好意思~ 周日公休唷請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?請問周日有營業嗎?</p>
							</div>
						</div>
					</li>
				</ul>
			</section>
		</div>
	</div>
	<!-- footer -->
	<?php
		require_once("footer.php");
	?>

</body>
</html>