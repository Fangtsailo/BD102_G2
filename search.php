<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Trepun</title>
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<!-- js區 -->
	 <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
	 	<script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	 	<script type="text/javascript" src="js/header.js"></script>
	<!-- map區 -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZlV8XEYyGoIi9poFgwFzwc5X_rfvtXsE&callback"></script>
</head>
<body>

<?php require_once("header.php");?>  
	<div class="search_content">
		<h1 class="search_title">搜尋結果</h1>
		<div class="search_result">
			<h1>找到
				<span id="numberOf">6</span>
				筆符合的店家</h1>
				<div class="tag-fa">
					<span class="tag" id="tag1"><span class="head"></span>桃園市</span>
					<span class="tag" id="tag2"><span class="head"></span>熱門</span>
					<span class="tag" id="tag3"><span class="head"></span>評價</span>
				</div>
				
			
		</div>
		<div class="search_store">
		
			<div class="search_storeOne">
				<div class="search_storeImg col-sm-3 col-xs-12">
					<!-- <img src="img/search-store.png"> -->
				</div>
				<div class="search_storeContent col-sm-6 col-xs-12">
					<h2><a href="#">山下麵包</a></h2>
					<div class="search_follow">
						<img src="img/icon/follow.svg">	
					</div>
					<div id="search_followNum">123</div>
					<div class="search_storeStar">
						<ul>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
						</ul>
					</div>
					<div class="search_storeInfor ">
						<ul>
							<li>電話： (03)3333551</li>
							<li>地址：  桃園市中壢區中大路300號
								<a href="#" id="search_map1"><img src="img/map_point.png"></a></li>
							<li>營業時間： 10:00~23:00</li>
						</ul>
					</div>
				</div>
				<div class="search_storeMap col-sm-3 col-xs-12">
					<div id="map-now2"></div>
				</div>
			</div>





		</div>


	</div>

	<?php require_once("footer.php");?>

	<script type="text/javascript" src="js/search.js"></script>
</body>
</html>