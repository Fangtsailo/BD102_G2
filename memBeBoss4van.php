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
			<!-- 成為店長_第四頁_新增麵包店店家 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-12 section1000 memBeBoss1">
				<h1>新增店家</h1>
                <p>查無此店！請填寫以下表單簡介您的店舖！完成後請按送出，<br>我們將與您進行審核作業！</p>

				<?php
				// phpinfo();
				$siType=isset($_SESSION["SI_TYPE"])? $_SESSION["SI_TYPE"] : "";
				$siName=isset($_SESSION["SI_NAME"])? $_SESSION["SI_NAME"] : "";

				?>

				<form class="form-horizontal" action="php/member/memBeBossInsertToDb.php" method="get">
					<p>
						<label for="SI_TYPE">&nbsp;店&nbsp;&nbsp;型</label>
	                	<strong><?php
	                		if ($siType==1){
								echo "麵包車";
							}else{
								echo "麵包店";	
							}
	                	?></strong>
					</p>
					<p>
						<label for="SI_NAME">&nbsp;店&nbsp;&nbsp;名</label>
	                 	<strong><?php echo $siName ?></strong>
					</p>
					<p>
						<label for="SI_COMFIRM_ID"><span class="required">*</span>車牌號碼</label>
						<input type="text" name="SI_COMFIRM_ID" maxlength="8" placeholder="輸入格式:80088888" autofocus>
					</p>
					<p>
						<label for="SI_NAME"><span class="required">*</span>店長姓名</label>
						<input type="text" name="SI_NAME" maxlength="8" placeholder="輸入真實姓名" autofocus>
					</p>
					<p>
						<label for="SI_PHONE"><span class="required">*</span>電&nbsp;&nbsp;話</label>
						<input type="tel" name="SI_PHONE" placeholder="輸入手機或市話">
					</p>
					<p>
						<label><span class="required">*</span>營業時間</label>
						<input type="number" name="SI_STARTTIME" max="24" min="1" value="9">點至
						<input type="number" name="SI_ENDTIME" max="24" min="1" value="21">點
					</p>
					<p>
						<label for="SI_STORY">&nbsp;故事介紹</label>
						<textarea name="SI_STORY" maxlength="250" minlength="10" placeholder="字數限250字??">紅色就</textarea>
					</p>
					<p>
						<input type="submit" class="btn" value="送出" id="check">
					</p>
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