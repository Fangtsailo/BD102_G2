<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>TEMPLATE</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="libs/slick-master/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="css/storeBrowse.css">
	<link rel="stylesheet" type="text/css" href="libs/slick-master/slick/slick-theme.css">	
	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="libs/slick-master/slick/slick.min.js"></script>
	<script src="libs/gsap/src/minified/TweenMax.min.js"></script>
	<script src="libs/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script src="libs/ScrollMagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
	<script src="libs/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script src="js/storeBrowse.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZlV8XEYyGoIi9poFgwFzwc5X_rfvtXsE&callback">
    </script>
    <script src="js/header.js"></script>
</head>
<body>

<!-- ======================================================header 頁首========================================================= -->
<?php 
	require_once("header.php");
	require_once("php/common/globalVar.php");	
	require_once("php/store/browse/storeDetail.php");
 ?>
<div class="navigator">
	<div class="item">
		<a href=""><p>123</p></a>
	</div>
	<div class="item">
		<div class="name"><p>123</p></div><div class="point"></div>
	</div>
	<div class="item">
		<div class="name"><p>123</p></div><div class="point"></div>
	</div>
	<div class="item">
		<div class="name"><p>123</p></div><div class="point"></div>
	</div>
	<div class="item">
		<div class="name"><p>123</p></div><div class="point"></div>
	</div>
	<div class="item">
		<div class="name"><p>123</p><div class="point"></div>
	</div>
</div>
</div>
<!-- <div class="navigator">
	<div class="nav-selected item pointer">
		<div class="name"><p>店家故事</p></div>
	</div>
	<div class="item pointer">
		<div class="name"><p>胖小車路線</p></div>
	</div>
	<div class="item pointer">
		<div class="name"><p>商品</p></div>
	</div>
	<div class="item pointer">
		<div class="name"><p>體驗活動</p></div>
	</div>
	<div class="item pointer">
		<div class="name"><p>留言板</p></div>
	</div>
	<div class="item pointer">
		<div class="name"><p>其他店家推薦</p></div>
	</div>
</div> -->	
<div class="screen screen-1">
	<div class="banners">
	</div>
	<div class="detail-box">
		<div class="store-logo"><img alt="store-logo1.png" src="img/store/browse/store-logo1.png"></div>
		<div class="title">
			<div class="container">
				<h1 class="store-name"><?php echo $storeName ?></h1>
			</div>
		</div>
		<div class="detail">
			<ul class="follow col-xs-9">
				<?php 
					// for ($i = 0; $i < 5; $i++) {
					// 	if ($review > 0) {

					// 	}
					// 	$review--;
					// }
				 ?>
				<li class="star pointer"><img alt="star.svg" src="img/store/browse/star.svg"></li>
				<li class="star pointer"><img alt="star.svg" src="img/store/browse/star.svg"></li>
				<li class="star pointer"><img alt="star.svg" src="img/store/browse/star.svg"></li>
				<li class="star pointer"><img alt="star.svg" src="img/store/browse/star.svg"></li>
				<li class="star pointer"><img alt="star.svg" src="img/store/browse/star.svg"></li>
			</ul>
			<div class="trace pointer col-xs-3"><img alt="follow.svg" src="img/store/browse/follow.svg">(<?php echo $follow ?>)</div>
			<div class="info-box">
				<div class="address overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">地址:</p>
					<p class="content col-lg-9 col-xs-8"><?php echo $address ?></p>
				</div>
				<div class="open-time overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">營業時間:</p>
					<p class="content col-lg-9 col-xs-8"><?php echo $openStartTime ?>點 - <?php echo $openEndTime ?>點</p>
				</div>
				<div class="phone overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">電話:</p>
					<p class="content col-lg-9 col-xs-8"><?php echo $phone ?></p>
				</div>
				<div class="close-day overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">公休日:</p>
					<p class="content col-lg-9 col-xs-8">
					<?php 
						for ($i = 0; $i < count($closeDarArr); $i++) {
							if ($i != count($closeDarArr) - 1) {
								echo "星期", $i, ", ";
							} else {
								echo "星期", $i;
							}
						}
					 ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="right-describe">
		<p>
			自創業以來因為引進歐美的先進技術而卓越成長並希望以此經驗技術可以對東南亞吃的文化帶來貢獻 。故於1985年進駐香港，之後在香港廣受各方好評，於1988年設立了中央工廠，自此開始了海外的連鎖烘焙事業。而後陸續在泰國、馬來西亞、新加坡都有展店，也都有不錯的成績。
		<p>
        1987年於台北市百貨公司成立台灣麵包專賣店，為了提供給顧客更多元且完整的產品及服務，於2000年在板橋火車站開了咖啡複合式店面，至今包含複合式店面已有多家分店分佈全台。未來更以積極培育當地人才，每年至少成立2家專賣店為目標，持續教育訓練以提高服務品質。</p>
        <p>
        自創始以來一直堅持慎選原料，每天現場烘焙提供最新鮮的產品，且不斷開發新產品，如：手工現做的三明治、柔軟的吐司、銅鑼燒、大福等多樣的日式風味的點心，讓顧客無論何時都可以買到自己喜愛的產品，享受美味的麵包。</p>
	</div>
	<div id="bottom-city">
	    <div class="cloud cloud-1"></div>
	    <div class="cloud cloud-2"></div>
	    <div class="cloud cloud-3"></div>
	    <div class="city"></div>
	    <div class="marker marker-1"><img alt="bread_marker5.png" src="img/store/browse/bread_marker5.png"></div>
	    <div class="marker marker-2"><img alt="bread_marker3.png" src="img/store/browse/bread_marker3.png"></div>
	    <div class="marker marker-3"><img alt="bread_marker2.png" src="img/store/browse/bread_marker2.png"></div>
	    <div class="marker marker-4"><img alt="bread_marker.png" src="img/store/browse/bread_marker.png"></div>
	</div>
	<div id="screen1-trigger" class="spacer s0"></div>	
</div>
<div class="screen screen-bread-car-map">
	<div id="bread-car-trigger" class="spacer s0"></div>
	<div class="perspective">
	<div class="title">
		<div class="front">胖小車路線圖</div>
		<div class="down">
			<h2>胖小車路線圖</h2>
		</div>
	</div>
	</div>
	<ul class="tabs">
		<li class="item pointer item-selected">
			即時位置
		</li>
		<li class="item pointer">
			禮拜一路線
		</li>
		<li class="item pointer">
			禮拜三路線
		</li>
		<li class="item pointer">
			禮拜日路線
		</li>
	</ul>
	<div id="bread-car"></div>
	<div class="maps">
		<div class="map" id="map-now"></div>
		<div class="map" id="map-now2"></div>
		<div class="map" id="map-now3"></div>
		<div class="map" id="map-now4"></div>
	</div>
	
</div>
<div class="screen screen-product">
	<div id="product-trigger" class="spacer s0"></div>
	<div id="product-trigger2" class="spacer s0"></div>
	<div id="product-star-light-trigger" class="spacer s0"></div>
	<div class="perspective">
	<div class="title">
		<div class="front">商品</div>
		<div class="down">
			<h2>商品</h2>
		</div>
	</div>
	</div>
	<div class="star-light"></div>
	<div class="product">
		<div class="item">
			<div class="image"><img alt="big_product1.png" src="img/store/browse/big_product1.png"></div>
			<div class="describe">
			<h3>烤焦三角麵包<button id="bread-detail">詳情</button></h3>

			<p>普遍半年無奈明顯各自，相關圖片住宅市委中有背景概念顯卡上傳外面醫學，每日明確激動找到年輕人造成，唱。</p>
			</div>
		</div>
		<div class="item">
			<div class="image"><img alt="big_product2.png" src="img/store/browse/big_product2.png"></div>
			<div class="describe">
			<h3>圖騰麵包</h3>
			<p>普遍半年無奈明顯各自，相關圖片住宅市委中有背景概念顯卡上傳外面醫學，每日明確激動找到年輕人造成，唱。</p>
			</div>
		</div>
		<div class="item">
			<div class="image"><img alt="big_product3.png" src="img/store/browse/big_product3.png"></div>
			<div class="describe">
			<h3>綜合派</h3>
			<p>普遍半年無奈明顯各自，相關圖片住宅市委中有背景概念顯卡上傳外面醫學，每日明確激動找到年輕人造成，唱。</p>
			</div>
		</div>
		<div class="item">
			<div class="image"><img alt="big_product4.png" src="img/store/browse/big_product4.png"></div>
			<div class="describe">
			<h3>香蔥</h3>
			<p>普遍半年無奈明顯各自，相關圖片住宅市委中有背景概念顯卡上傳外面醫學，每日明確激動找到年輕人造成，唱。</p>
			</div>
		</div>
		<div class="item">
			<div class="image"><img alt="big_product5.png" src="img/store/browse/big_product5.png"></div>
			<div class="describe">
			<h3>黃金牛角</h3>
			<p>普遍半年無奈明顯各自，相關圖片住宅市委中有背景概念顯卡上傳外面醫學，每日明確激動找到年輕人造成，唱。</p>
			</div>
		</div>
	</div>
	<div class="product-list">
		<div class="item pointer col-xs-4">
			<img alt="small_product1.png" src="img/store/browse/small_product1.png">
			<p>烤焦三角</p>
		</div>
		<div class="item pointer col-xs-4">
			<img alt="small_product2.png" src="img/store/browse/small_product2.png">
			<p>圖騰</p>
		</div>
		<div class="item pointer col-xs-4">
			<img alt="small_product3.png" src="img/store/browse/small_product3.png">
			<p>綜合派</p>
		</div>
		<div class="item pointer">
			<img alt="small_product4.png" src="img/store/browse/small_product4.png">
			<p>香蔥</p>
		</div>
		<div class="item pointer">
			<img alt="small_product5.png" src="img/store/browse/small_product5.png">
			<p>黃金牛角</p>
		</div>
	</div>
</div>
<div class="screen screen-activity">
	<div id="activity-trigger" class="spacer s0"></div>
	<div class="perspective">
		<div class="title">
			<div class="front">體驗活動</div>
			<div class="down">
				<h2>體驗活動</h2>
			</div>
		</div>
	</div>
	<div id="activity-parallax">
		<div data-depth="1" class="layer">
			<div class="parallax-item normail-move egg"><img alt="activity_egg.png" src="img/store/browse/activity_egg.png"></div>
		</div>
		<div data-depth="1" class="layer shadow">
			<div class="normail-move parallax-item egg-shadow shadow"><img alt="activity_egg_shadow.png" src="img/store/browse/activity_egg_shadow.png"></div>
		</div>
<!-- 		<div data-depth="0.2" class="layer">
			<div class="depth-move parallax-item  board"><img alt="activity_board.png" src="img/store/browse/activity_board.png"></div>
		</div>
		<div data-depth="0.4" class="layer shadow">
			<div class="depth-move parallax-item board-shadow"><img alt="activity_board_shadow.png" src="img/store/browse/activity_board_shadow.png"></div>
		</div> -->
		<div data-depth="1" class="layer">
			<div class="normail-move parallax-item  spoon"><img alt="activity_spoon.png" src="img/store/browse/activity_spoon.png"></div>
		</div>
		<div data-depth="1.2" class="layer shadow">
			<div class="normail-move parallax-item spoon-shadow shadow"><img alt="activity_spoon_shadow.png" src="img/store/browse/activity_spoon_shadow.png"></div>
		</div>
		<div data-depth="0.2" class="layer">
			<div class="depth-move parallax-item  tool"><img alt="activity_tool.png" src="img/store/browse/activity_tool.png"></div>
		</div>
		<div data-depth="0.4" class="layer shadow">
			<div class="depth-move parallax-item tool-shadow shadow"><img alt="activity_tool_shadow.png" src="img/store/browse/activity_tool_shadow.png"></div>
		</div>
	</div>

	<div class="banner-area">
		<div class="item">
			<div class="detail col-lg-6 col-xs-12">
				<h2>牛角麵包簡單學</h2>
				<div class="row">
					<div class="label col-lg-3 col-xs-4">地點:</div>
					<div class="content col-lg-9 col-xs-8">桃園市中壢區中央路55號  
           烘焙王麵包坊</div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">時間:</div>
				<div class="content col-lg-9 col-xs-8">105.9.29  下午1:00(預計3小時)</div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">人數限制:</div>
				<div class="content col-lg-9 col-xs-8">10~12人</div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">聯絡方式:</div>
				<div class="content col-lg-9 col-xs-8">(03)3335567</div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">材料:</div>
				<div class="content col-lg-9 col-xs-8">麵包坊提供</div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">費用:</div>
				<div class="content col-lg-9 col-xs-8">報名費與材料一共1000元(現場收費)</div>
       			</div>
       			<div class="activity-detail button">活動詳情</div>
			</div>
			<div class="banner col-lg-6 col-xs-12">
				<img alt="activity_banner2.png" src="img/store/browse/activity_banner.png">
			</div>
		</div>
	</div>
</div>
<div class="screen screen-messages">
	<div id="messages-trigger" class="spacer s0"></div>
	<div id="messages-icon-trigger" class="spacer s0"></div>
	<div class="message-icons">
		<img alt="cloud.png" class="icon small-icon" class="icon small-icon" src="img/store/browse/cloud.png">
		<img alt="cloud.png" class="icon normal-icon" src="img/store/browse/cloud.png">
		<img alt="cloud.png" class="icon normal-icon" src="img/store/browse/cloud.png" alt="cloud.png">
		<img alt="cloud.png" class="icon small-icon" src="img/store/browse/cloud.png">
		<img alt="cloud.png" class="icon small-icon" src="img/store/browse/cloud.png">
		<img alt="cloud.png" class="icon small-icon" src="img/store/browse/cloud.png">
	</div>
	<div class="perspective">
		<div class="title">
			<div class="front">留言板</div>
			<div class="down">
				<h2>留言板</h2>
			</div>
		</div>
	</div>
	<div class="send-message-area">
		<div class="message-box" id="MSG123">
			<div class="mem-pic col-lg-2"><img alt="member_photo_test.png" src="<?php echo GLOBAL_MEM_PIC_PATH, $memID, ".png" ?>"></div>
			<div class="content col-lg-10"><textarea placeholder="登入後開始留言..." rows="5"></textarea>
			<button id="send-message-btn" class="button">留言</button>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="messages-area">
		<?php 
			foreach ($messageItemArr as $messageItem) {
		?>
					<div class="message-box" id="MSG123">
						<div class="mem-pic col-lg-2"><img alt="member_photo_test.png" src="<?php echo GLOBAL_MEM_PIC_PATH, $messageItem[0], ".png" ?>"></div>
						<div class="content col-lg-10">
							<div class="name"><?php echo $messageItem[1] ?><span class="datetime"><?php echo $messageItem[2] ?></span></div>
							<p><?php echo $messageItem[3] ?></p>
							<div class="setting-area">
								<div class="report pointer">
									<div class="img-icon"><img alt="report.png" src="img/store/browse/report.png"></div><p>檢舉</p></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>	
		<?php
			}
		 ?>
		<div class="more-message button">看更多</div>
	</div>
</div>
<div class="screen screen-other-store">
	<div id="other-store-trigger" class="spacer s0"></div>
	<div class="perspective">
		<div class="title">
			<div class="front">其他店家推薦</div>
			<div class="down">
				<h2>其他店家推薦</h2>
			</div>
		</div>
	</div>
	<div class="store-list">
		<div class="top-list">
			<?php 
				foreach ($otherStoreItemArr as $otherStore) {
			?>
					<div class="item pointer col-lg-4 col-xs-6 col-xs-6" data-store-id="<?php echo $otherStore[0]; ?>">
						<div class="color-img"><img alt="other_store1.png" src="img/store/browse/other_store1.png"></div>
						<div class="detail">
							<h3 class="name"><?php echo $otherStore[1]; ?></h3>
							<p class="describe"><?php echo $otherStore[2]; ?></p>
						</div>
					</div>
			<?php
				}
			 ?>

		</div>
	</div>
</div>


<!-- ======================================================footer 頁尾========================================================= -->
<?php 
	require_once("footer.php");
 ?>
	
<script type="text/javascript">
$(document).ready(function(){
	initParallax("activity-parallax");
	allSlickSetting();
	initAllScrollMagicScene();
	initBreadCarNowLocationMap("map-now");
	initBreadCarRouteMap("map-now2","test",{lat: 24.960439, lng: 121.190096});
	initBreadCarRouteMap("map-now3","test",{lat: 24.960439, lng: 121.190096});
	initBreadCarRouteMap("map-now4","test",{lat: 24.960439, lng: 121.190096});
	setTimeout(function() {animate_illustration("bottom-city", "start");}, 1000);
});	
</script>
</body>
</html>