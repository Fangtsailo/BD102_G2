
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memtry.css">
<<<<<<< HEAD
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
=======
	<script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
>>>>>>> be751a354b4549967bf45be3f100e72f80dd0ea3
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
			<!-- 編輯個人資料 -->
			<h1><img src="img/memimg/mytl.svg" alt="編輯個人資料"></h1>
			<section col-xs-12 col-sm-12">
				<form class="form-horizontal" action="" method="post">
					<div class="userpic">
						<img src="img/memimg/followimg1.jpg">
					</div>
					<p>
						<label for="MEM_PIC">變更頭像</label>
						<a href="javascript:;" class="upload">上傳照片
							<input type="file" name="上傳照片" id="MEM_PIC">
						</a>
					</p>
					<p>
						<label for="MEM_ID">帳號</label>
						<strong>trepunno1</strong>
						<span class="note">※已註冊帳號無法變更</span>
					</p>
					<p>
						<label for="MEM_NAME">姓名</label>
						<input type="text" name="MEM_NAME" maxlength="4" placeholder="請輸入真實姓名" autofocus>
					</p>
					<p>
						<label for="MEM_EMAIL???">信箱</label>
						<strong>trepunno1@gmail.com</strong>
						<span class="note">※已註冊信箱無法變更</span>
					</p>
					<p>
						<label for="MEM_PHONE">手機</label>
						<input type="tel" name="MEM_PHONE" pattern="\d{10}" placeholder="輸入格式:0900888888">
					</p>
					<div>
						<input type="checkbox" id="check" name="check">
						<label for="check"><a>變更密碼</a></label>
						<input type="submit" value="儲存">
					
					<!-- 變更密碼光箱 -->
					    <div class="box">
					    	<div class="changepsw">
					    		<h1>變更密碼</h1>
					    		<p>
					    			<label for="MEM_OLDPSW???">舊密碼</label>
									<input type="password" name="MEM_OLDPSW???" maxlength="10">
									
					    		</p>
					    		<p>
					    			<label for="MEM_OLDPSW???">新密碼</label>
									<input type="password" name="MEM_NEWPSW???" maxlength="10">
					    		</p>
					    		<p>
					    			<input type="submit" value="變更密碼">
					    		</p>
								<label for="check"><img src="img/memimg/micon_cancel3.svg"></label>
					    	</div>
					    </div>
					</div>
				</form>
			</section>

		</div>
	</div>
	
	<!-- header -->
	<?php
	require_once("footer.php");
	?>

</body>
</html>