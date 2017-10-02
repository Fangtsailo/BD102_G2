<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>TREPUN</title>
	<link rel="stylesheet" type="text/css" href="css/homepage.css">
	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
</head>
<body>
	<?php 

require_once("header.php");

 ?>

<!-- ======================================================內頁開始========================================================= -->	


<div class="homeContainer">
	






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
				
					<div class="filter" id="filterTops">
						<span>熱門</span>
					</div>
					<div class="filter" id="filterzstars">
						<span>評價</span>
					</div>
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
		
		<div class="showContent">

			<div class="contentTitle">
				<img id="titleIcon" src="img/homepage/topChartIcon.png">
				<h3>精選熱門店家</h3>
				<p>Top Charts</p>
			</div>
			<div class="shopContent">
				<h3 class="shopName">Bakki烘焙屋</h3>
				<ul class="shopPlace">
					<li>
						<svg viewBox="0 0 38 38">
							<style type="text/css">
										.st0{fill:url(#SVGID_1_);}
										.st1{fill:#FFFFFF;}
							</style>
							<g>
								<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="7.5023" y1="19" x2="30.4977" y2="19">
									<stop  offset="0" style="stop-color:#B41526"/>
									<stop  offset="1" style="stop-color:#E95513"/>
								</linearGradient>
								<path class="st0" d="M30.5,11.9c0-6.4-5.1-11.5-11.5-11.5c-6.4,0-11.5,5.1-11.5,11.5c0,7.1,11.4,25.6,11.4,25.6
									S30.5,19.3,30.5,11.9z"/>
								<circle class="st1" cx="19.6" cy="11.9" r="7"/>
							</g>
						</svg>
					</li>
					<li>桃園 中壢市</li>
				</ul>
				<ul class="shopInfo">
					<li>
						<span><img src="img/icon/follow.svg"></span>
						<span>220人追蹤</span>
						</li>
					<li>
						<span><img src="img/icon/star.svg"></span>
						<span>4.5顆星評價</span>
					</li>
				</ul>
				<div class="messageBoard">
					<div id="memPic"></div>
					<span id="memName">AJay</span>
					<span id="messageTime">2小時前</span>
					<div class="messageContent">
						<p id="messageTxt">居然還有自製果醬，跟他們家的白土司是絕配啊！</p>
					</div>
				</div>
			</div>
			<div class="shopArea" id="shopTaipei">
				<h3>台北</h3>
			</div>
			<div class="shopArea" id="shopNewTpe">
				<h3>新北</h3>
			</div>
			<div class="shopArea" id="shopTaoyuan">
				<h3>桃園</h3>
			</div>
			<div class="shopArea" id="shopTaichung">
				<h3>台中</h3>
			</div>
			<div class="shopArea" id="shopTainan">
				<h3>台南</h3>
			</div>
			<div class="shopArea" id="shopKaohsiung">
				<h3>高雄</h3>
			</div>
		</div>
		
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
			<div id="chooseActUp">
				<div class="svg">
					<svg viewBox="0 0 38 38" >
					<polygon points="19.4,14.4 28.2,25.4 26.6,26.6 19.4,17.6 12.2,26.6 10.6,25.4 "/>
					</svg>
				</div>
			</div>
			<div id="actBanner"></div>
			<div id="chooseActDown">
				<div class="svg">
					<svg viewBox="0 0 38 38">
						<polygon points="28.2,15.5 26.6,14.2 19.4,23.2 12.2,14.2 10.6,15.5 19.4,26.4 "/>
					</svg>
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
				<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder">
				<div class="shopContent">
					<h3>XXX麵包店</h3>
					<span class="newShopPlace">桃園 中壢市</span>
					<span class="postTime">2小時前</span>
				</div>
			</div>
			<div class="newShopItem">
				<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder">
				<div class="shopContent">
					<h3>店名</h3>
					<span class="newShopPlace">地點</span>
					<span class="postTime">發布時間</span>
				</div>
			</div>
			<div class="newShopItem">
				<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder">
				<div class="shopContent">
					<h3>店名</h3>
					<span class="newShopPlace">地點</span>
					<span class="postTime">發布時間</span>
				</div>
			</div>
			<div class="newShopItem">
				<img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder">
				<div class="shopContent">
					<h3>店名</h3>
					<span class="newShopPlace">地點</span>
					<span class="postTime">發布時間</span>
				</div>
			</div>
		</div>
	</section>

<!-- ======================================================6th首頁聯絡我們========================================================= -->
	


	<section class="homeContact">
		<div class="addShop">
				
			<p>想跟全世界分享吃到好麵包的感動？</p>
			<h3>新增店家</h3>
			<img src="img/icon/addshop.svg">
		</div>
		<div class="contactUs">
			<p>遇到問題無法解決，或有更多建議想讓我們知道？</p>
			<h3>客服中心</h3>
			<img src="img/icon/report.svg">	
		</div>
	</section>



 	<?php 

require_once("footer.php");
 	 ?>
</body>
</html>

