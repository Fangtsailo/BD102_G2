<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>TREPUN</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
</head>
<body>
	<?php 

require_once("header.php");

 ?>

<!-- ======================================================內頁開始========================================================= -->	
	






<!-- ======================================================1st首頁搜尋========================================================= -->	
	<section class="homeSearchBar">
		
		<!-- <img src="img/homepage/homepage_bg1.png"> -->
		
		<div class="itemGrp">
			<div class="bigLogo">
				<img src="img/trepunLogoWhite.svg">
			</div>
			<h2>尋找台灣巷弄間的麵包香</h2>
			<div class="searchPart">
				<ul class="tabs">
					<li class="tab_contents" id="searchShops">
						<a href="#">店家</a>
					</li>
					<li class="tab_contents" id="searchVans">
						<a href="#">胖小車</a>
					</li>
				</ul>
				<div class="searchContent">
					<span class="filterTitle">篩選條件</span>
					
					<div class="filter">
						<select name="" id="filterArea">
								<option>地區</option>
								<option>台北市</option>
								<option>新北市</option>
								<option>桃園市</option>
						</select>
					</div>
				
					<button class="filter" id="filterTops">
						<span>熱門</span>
					</button>
					<button class="filter" id="filterstars">
						<span>評價</span>
					</button>
					<div class="searchbar">
					<input type="search" name="searchStore" placeholder="尋找你附近的麵包香">
					<button type="submit">搜尋</button>
					</div>
				</div>
			</div>
			


		</div>



	</section>





<!-- ======================================================2nd首頁熱門店家========================================================= -->
	<section class="homeTopChart">
		<p class="topChartDescrp">為您篩選出各地區的熱門麵包香，<br>尋找附近地區最熱門的麵包小店！</p>
		<div class="titleGrp">
			<img src="img/homepage/topChartIcon.png">
			<h1 class="topChartTitle">精選熱門店家</h1>
		</div>
		<div class="shopItem">
			<div class="shopPic">
				<img src="img/homepage/shop1.jpg">
				<h3>巴奇手做麵包</h3>
				<div class="shopInfo">
					<ul>
						<li><img src="img/icon/mappointer1.svg"><span>新北市</span></li>
						<li><img src="img/icon/star.svg"><span>4顆星</span></li>
						<li><img src="img/icon/follow.svg"><span>235人追蹤</span></li>
					</ul>
				</div>
			</div>
			<div class="shopMessage">
				<div class="memPic">
					<img src="">
				</div>
				<span>Chris</span>
				<span id="messageTime">2小時前</span>
				<div class="clearfix"></div>
				<div class="message">
					<p>居然還有自製果醬，跟他們家的白土司是絕配啊！</p>
				</div>
			</div>
		</div>
		
		<div class="chooseBtn">看下一家</div>
	</section>


<!-- ======================================================3rd首頁胖小車地圖========================================================= -->

	<section class="homeCarMap">
		<div class="carMap">
			<h1 class="mapTitle">胖小車地圖</h1>
			<div class="carList">
				
			</div>
		</div>
	</section>

<!-- ======================================================4th首頁活動體驗========================================================= -->

	<section class="homeActivity">
		<div class="activityTitle">
			<img src="img/homepage/actIcon.png">
			<h1>體驗活動精選</h1>
			<p>適合全家大小一起動手製作的烘焙課程</p>
		</div>
		<div class="activityItem">
			
			<div class="activityRight">
				<div id="chooseActUp">
					<div class="svg">
						<svg width="100" height="100" viewBox="0 0 38 38" >
						<polygon style="fill:#fbf8f1" points="19.4,14.4 28.2,25.4 26.6,26.6 19.4,17.6 12.2,26.6 10.6,25.4 "/>
						</svg>
					</div>
				</div>
				<div id="actBanner"></div>
				<div id="chooseActDown">
					<div class="svg">
						<svg width="100" height="100" viewBox="0 0 38 38">
							<polygon style="fill:#fbf8f1" points="28.2,15.5 26.6,14.2 19.4,23.2 12.2,14.2 10.6,15.5 19.4,26.4 "/>
						</svg>
					</div>
				</div>
			</div>

		</div>
	</section>
<!-- ======================================================5th首頁新進店家========================================================= -->
	<section class="homeNewshop">
		<div class="newShopTitle">
			<img src="img/homepage/titleDecor1.png">
			<h1>新進店家精選</h1>
			<img src="img/homepage/titleDecor2.png">
		</div>
		<div class="newShops">
				<div class="newShopItem">
					<img src="img/homepage/shop1.jpg">
					<div class="shopContent">
						<h2>裕馥西點麵包店</h2>
						<p>黃師傅對於麵包的熱愛來自於愛吃麵包的夫人，早期在台灣如果能吃上一個蔥花麵包那是多麼棒的一餐呀！於是兩人攜手打造『裕馥西點麵包店』，位於景美及永和兩間在地老店。</p>
						<ul>
							<li>
								<img src="img/icon/mappointer1.svg">
								<span class="newShopPlace">新北市 永和</span>
							</li>
							<li>
								<img src="img/icon/reply.svg">
								<span class="postTime">2小時前</span>
							</li>
							<div class="clearfix"></div>
						</ul>
						<a class="exploreBtn" href="#">探索更多</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>   
		</div>

	</section>

<!-- ======================================================6th首頁聯絡我們========================================================= -->
	


	<section class="homeContact">
		<div class="addShop">
				
			<p>想跟全世界分享吃到好麵包的感動？</p>
			<img src="img/icon/addshop.svg">
			<h3>新增店家</h3>
			
		</div>
		<div class="contactUs">
			<p>遇到問題無法解決，或有更多建議想讓我們知道？</p>
			<img src="img/icon/report.svg">	
			<h3>客服中心</h3>
			
		</div>
		<div class="clearfix"></div>
	</section>



 	<?php 

require_once("footer.php");
 	 ?>
<script type="text/javascript" src="js/header.js"></script>
<script type="text/javascript" src="js/homepage.js"></script>

</body>
</html>

