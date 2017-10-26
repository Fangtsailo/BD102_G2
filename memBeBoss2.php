
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="icon" type="image/x-icon" href="img/icon/trepun3.ico">
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
			<!-- 成為店長_第二頁 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-6 section1000">
				<h1 class="find">這裡有您想新增的店嗎?</h1>

				<?php
					$siType=$_REQUEST["SI_TYPE"];
					$siName=$_REQUEST["SI_NAME"];
					$sql = "select * from store_imformation where SI_TYPE=$siType and SI_NAME=$siName";

					$searchSi=$connectPDO->prepare($sql);
					$searchSi->bindValue(':SI_TYPE',$siType);
					$searchSi->bindValue(':SI_NAME',$siName);
					$searchSi->execute();

					if($searchSi->rowCount()!==0){
						echo "<center>查無此帳號</center>";
					}else{
						$searchRow = $searchSi->fetchObject();
				?>
				
				<div class="myfollow find">
					<a href="#"><img src="img/memimg/followimg1.jpg"><h2>小木屋鬆餅屋</h2></a>
					<ul>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
						<li class="star"><img src="img/memimg/star3.svg"></li>
					</ul>
					<address>
						<ul>
							<li>電話：03 426 5215</li>
                            <li>地址：桃園市中壢區中大路300號</li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
				</div>

				<div class="action">
                    <img src="img/memimg/memaddshop.svg" class="">
                    <a href="memBeBoss3.php" class="btn">是的! 下一步</a>
                </div>
                <!-- 新增店家光箱 -->
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