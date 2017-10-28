<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" type="image/x-icon" href="img/icon/trepun3.ico">
	<title>會員專區</title>
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
			<!-- 編輯個人資料 -->
			<h1><img src="img/memimg/mytl.svg" alt="編輯個人資料"></h1>
			<section class="col-xs-12 col-sm-12 section1000">

				<?php
				// phpinfo();
				
				$memId=isset($_SESSION["memId"])? $_SESSION["memId"] : "";
				
				try{
					require_once("php/pdo/connectPDO.php");
					$sql = "select * from member where MEM_ID='$memId'";
					$member = $connectPDO->query($sql);
					if($member->rowCount()==0){
						echo "<center>查無此帳號</center>";
					}else{
						$memRow = $member->fetchObject();
				?>

				<form class="form-horizontal" action="memUpdateToDb.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="memId" value="<?php echo $memRow->MEM_ID;?>">
					<div class="userpic">
						<img src="img/mempic/followimg1.jpg">
					</div>
					<p>
						<label for="MEM_PIC">變更頭像</label>
						<a href="javascript:;" class="upload">上傳照片
							<input type="file" name="MEM_PIC" id="MEM_PIC">
							<input type="hidden" name="oldImage" value="<?php echo $memRow->MEM_PIC;?>">
						</a>
					</p>
					<p>
						<label for="MEM_ID">帳號</label>
						<strong><?php echo $memId ?></strong>
						<span class="note">※已註冊帳號無法變更</span>
					</p>
					<p>
						<label for="MEM_NAME">姓名</label>
						<input type="text" name="MEM_NAME" maxlength="8" placeholder="請輸入真實姓名" autofocus value="<?php echo $memRow->MEM_NAME;?>">
					</p>
					<p>
						<label for="MEM_MAIL">信箱</label>
						<strong><?php echo  $memRow->MEM_MAIL ?></strong>
						<span class="note">※已註冊信箱無法變更</span>
					</p>
					<p>
						<label for="MEM_PHONE">手機</label>
						<input type="tel" name="MEM_PHONE" pattern="\d{10}" placeholder="輸入格式:0900888888" id="" value="<?php echo $memRow->MEM_PHONE;?>">
					</p>
					<div class="checkbox">
						<label class="openlightbox">變更密碼</label>
						<input type="submit" value="儲存">
					</div>
					<!-- 變更密碼光箱 -->
					<div class="box">
					    <div class="changepsw">
					    	<h1>變更密碼</h1>
					    	<p>
					    		<label for="MEM_PSW">舊密碼</label>
								<input type="password" name="MEM_PSW" maxlength="8" value="<?php echo $memRow->MEM_PSW;?>">
					    	</p>
					    	<p>
					    		<label for="MEM_PSW">新密碼</label>
								<input type="password" name="MEM_PSW" maxlength="8">
					    	</p>
					    	<p>
					    		<input type="submit" value="變更密碼">
					    	</p>
							<!-- 關閉光箱按鈕 -->
							<img src="img/memimg/micon_cancel3.svg" class="closelightbox">
					    </div>
					</div>
				</form>
				<?php
					}//if...else
				}catch(PDOException $e){
				 	echo "錯誤原因 : " , $e->getMessage(),"<br>";
					echo "行號 : " , $e->getLine(),"<br>";
				 }//catch end
				?>
			</section>
		</div>
	</div>
	<!-- footer -->
	<?php
		require_once("footer.php");
	?>

</body>
</html>