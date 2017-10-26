<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
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
			<!-- 成為店長_第二頁 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-6 section1000">
				<h1 class="find">這裡有您想新增的店嗎?</h1>

				<?php
				try {
					//看收到的店型為何
					//輸入店名為何
									   //判斷式有無成立? 有就回傳此值         : 沒有就回傳此值
					$siType=isset($_REQUEST["SI_TYPE"])? $_REQUEST["SI_TYPE"] : "";
					$siName=isset($_REQUEST["SI_NAME"])? $_REQUEST["SI_NAME"] : "";

					if ($siName == "") {
						echo "<center>未輸入店名</center>";
						header("Refresh:3; url=memBeBoss1.php");
					} else {
					
					require_once("php\pdo\connectPDO.php");

					//比對資料庫中是否有此店型的店名
					$sql = "select * from store_imformation where SI_TYPE=:SI_TYPE and SI_NAME=:SI_NAME";

					$searchSi=$connectPDO->prepare($sql);
					$searchSi->bindValue(':SI_TYPE',$siType);
					$searchSi->bindValue(':SI_NAME',$siName);
					$searchSi->execute();

					

					//原本寫法 (可以動)
					if($searchSi->rowCount()==0){
						//若無，跳轉至新增店家頁
						echo "<center>查無此店</center>";
						header("Refresh:3; url=memBeBoss4.php");
					}else{
						//若有，顯示此店資料
						while ( $searchRow = $searchSi->fetchObject() ){
				?>
				
				<div class="myfollow find">
					<a href="shopB.php?SI_NUM=<?php echo $searchRow->SI_NAME;?>"> <!-- 店的網頁 -->
						<img src="img/store/banners/<?php echo $searchRow->SI_BIMG_1; ?>"> <!-- 店照 -->
						<h2><?php echo $searchRow->SI_NAME;?></h2> <!-- 店名 -->
					</a>
					<ul>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
					</ul>
					<address>
						<ul>
							<li>電話：<?php echo $searchRow->SI_PHONE;?></li>
                            <li>地址：<?php echo $searchRow->SI_ADDR;?></li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
				</div>
				<?php
						}//foreach end
				?>

				<div class="action">
                    <img src="img/memimg/memaddshop.svg" onclick="location.href='memBeBoss4.php'">
                    <a href="memBeBoss3.php" class="btn">是的! 下一步</a>
                </div>
                <!-- 新增店家光箱 -->
				<?php
					}//第二個if...else end
					}//第一個if...else end
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