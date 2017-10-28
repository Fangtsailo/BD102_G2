<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>會員專區</title>
	<link rel="stylesheet" type="text/css" href="css/grid.css">
	<link rel="stylesheet" type="text/css" href="css/memEdit.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
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

		<?php 
		$memNo = $_SESSION["memNo"];
		try{
			require_once("php/PDO/connectPDO.php");
			$selectActSQL = "SELECT act.AC_NO ,act.AC_NAME,act.AC_TIME,act.AC_ADDRESS,act.AC_PRICE,act.AC_BANNER1,s.SI_NAME FROM activity act JOIN ac_info info ON act.AC_NO = info.AC_NO JOIN store_imformation s ON s.SI_NUM = act.AC_STORE_NUM  WHERE info.MEM_NO='$memNo' GROUP BY info.AC_NO ";
			$selectAct = $connectPDO->query($selectActSQL);
			while ( $selectActRow = $selectAct->fetchObject() ){

		 ?>

		
				<div class="myentry">
					<img src="img/store/activity/banner/<?php echo $selectActRow->AC_BANNER1 ; ?>" class="actpic">
					<div class="info">
						<h2><a href="activity_act.php?actNum=<?php echo $selectActRow->AC_NO;?>"><?php echo $selectActRow->AC_NAME ; ?></a></h2>
						<a href="javascript:;" class="btn50" id="cancelentry">
							<img src="img/memimg/cancel.svg">
						</a>
						<address>
							<ul>
								<li><a href="#"><?php echo $selectActRow->SI_NAME ; ?></a></li>
						        <li>活動時間: <?php echo $selectActRow->AC_TIME ; ?></li>
						        <li><a href="activity_act.php?actNum=<?php echo $selectActRow->AC_NO;?>">活動詳情</a></li>
							</ul>
						</address>
					</div>
				</div>
				

			<?php 
			}//while
		}catch(PDOException $ex){
				echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
				echo "行號：",$ex->getLine(),"<br>";
		}


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