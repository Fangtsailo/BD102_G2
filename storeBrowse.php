<?php 
	ob_start();
	// session_start();

 ?>
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
    <script src="libs/jquery-modal-master/jquery.modal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="libs/jquery-modal-master/jquery.modal.min.css">
    <script src="js/header.js"></script>
</head>
<body>

<!-- ======================================================header 頁首========================================================= -->
<?php 
try {
	require_once("header.php");
	require_once("php/common/globalVar.php");	
	require_once("php/store/browse/storeDetail.php");
	// $storeId = $_REQUEST["storeId"];
	$storeId = 2;
	//會員基資======================================
	$memNum = 5;
	$memPic = GLOBAL_MEM_PIC_PATH.$memNum.".png";
	getStoreInfoById($storeId);
	$GLOBALS["breadCarPathArr"] = getBreadCarPathByStoreId($storeId);
	$GLOBALS["produtsArr"] = getProductsByStoreId($storeId);
	$GLOBALS["activityArr"] = getActivityInfoByStoreId($storeId);
	$GLOBALS["activityArr"] = getActivityInfoByStoreId($storeId);
	$GLOBALS["messageArr"] = getMessagesByStoreId($storeId);
	$GLOBALS["otherStoreArr"] = getOtherStoreByRandom(6);
} catch (Exception $e) {
	echo "原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
}
 ?>
 <div id="review-modal" class="modal">
  <p>Thanks for clicking. That felt good.</p>
  <button onclick="alert('123');">456</button>
</div>
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
		<div id="banner1"></div>
		<div id="banner2"></div>
		<div id="banner3"></div>
	</div>
	<div class="detail-box">
		<div class="store-logo"><img alt="<?php echo $GLOBALS["store"]->storeLogo ?>" src="<?php echo GLOBAL_STORE_PIC_PATH, $GLOBALS["store"]->storeLogo ?>"></div>
		<div class="title">
			<div class="container">
				<h1 class="store-name"><?php echo $GLOBALS["store"]->name ?></h1>
			</div>
		</div>
		<div class="detail">
				<ul class="follow col-xs-9" id="review-btn">
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
			<div class="trace pointer col-xs-3"><img alt="follow.svg" src="img/store/browse/follow.svg">(<?php echo $GLOBALS["store"]->follow ?>)</div>
			<div class="info-box">
				<div class="address overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">地址:</p>
					<p class="content col-lg-9 col-xs-8"><?php echo $GLOBALS["store"]->address ?></p>
				</div>
				<div class="open-time overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">營業時間:</p>
					<p class="content col-lg-9 col-xs-8"><?php echo $GLOBALS["store"]->openStartTime ?>點 - <?php echo $GLOBALS["store"]->openEndTime ?>點</p>
				</div>
				<div class="phone overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">電話:</p>
					<p class="content col-lg-9 col-xs-8"><?php echo $GLOBALS["store"]->phone ?></p>
				</div>
				<div class="close-day overflow col-xs-12">
					<p class="title col-lg-3 col-xs-4">公休日:</p>
					<p class="content col-lg-9 col-xs-8">
					<?php 
						for ($i = 0; $i < count($GLOBALS["store"]->closeDayArr); $i++) {
							if ($i != count($GLOBALS["store"]->closeDayArr) - 1) {
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
		<p><?php echo $GLOBALS["store"]->story ?></p>
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
		<?php
			foreach ($GLOBALS["breadCarPathArr"] as $path) {
		?>
			<li class="item pointer">
				<?php echo $path->describe ?>
			</li>
		<?php
			}
		 ?>
	</ul>
	<div id="bread-car"></div>
	<div class="maps">
		<div class="map" id="map-now"></div>
		<?php
			foreach ($GLOBALS["breadCarPathArr"] as $key=>$path) {
		?>
			<div class="map" id="map-now<?php echo $key;?>"></div>
		<?php
			}
		 ?>
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
		<?php 
			foreach ($GLOBALS["produtsArr"] as $product) {
		?>
					<div class="item">
						<div class="image"><img alt="<?php echo $product->pictureName; ?>" src="<?php echo $product->pictureName; ?>"></div>
						<div class="describe">
						<h3><?php echo $product->name; ?><button id="bread-detail">詳情</button></h3>

						<p><?php echo $product->description ?></p>
						</div>
					</div>
		<?php
			}
		 ?>
	</div>
	<div class="product-list">
		<?php 
			foreach ($GLOBALS["produtsArr"] as $product) {
		?>
				<div class="item pointer col-xs-4">
					<img alt="<?php echo $product->pictureName; ?>" src="<?php echo $product->pictureName; ?>">
					<p><?php echo $product->name; ?></p>
				</div>
		<?php
			}
		 ?>
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
		<?php  
			foreach ($GLOBALS["activityArr"] as $activity) {
		?>
		<div class="item">
			<div class="detail col-lg-6 col-xs-12">
				<h2><?php echo $activity->title ?></h2>
				<div class="row">
					<div class="label col-lg-3 col-xs-4">地點:</div>
					<div class="content col-lg-9 col-xs-8"><?php echo $activity->address ?></div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">時間:</div>
				<div class="content col-lg-9 col-xs-8"><?php echo $activity->time ?></div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">人數限制:</div>
				<div class="content col-lg-9 col-xs-8"><?php echo $activity->peopleLimit ?>人</div>
       			</div>
       			<div class="row">
				<div class="label col-lg-3 col-xs-4">材料:</div>
				<div class="content col-lg-9 col-xs-8"><?php echo $activity->ingredient ?></div>
       			</div>
				<div class="row">
				<div class="label col-lg-3 col-xs-4">費用:</div>
				<div class="content col-lg-9 col-xs-8"><?php echo $activity->price ?></div>
       			</div>
       			<div class="activity-detail button">活動詳情</div>
			</div>
			<div class="banner col-lg-6 col-xs-12">
				<img alt="<?php echo $activity->bannerPicName ?>" src="<?php echo $activity->bannerfullPicName ?>">
			</div>
		</div>
		<?php 
		} 
		?>
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
			<div class="mem-pic col-lg-2"><img alt="<?php echo $memPic ?>" src="<?php echo $memPic ?>"></div>
			<div class="content col-lg-10"><textarea maxlength="250" placeholder="登入後開始留言..." rows="5" id="message-content"></textarea>
			<button id="send-message-btn" class="button">留言</button>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="messages-area" id="messages-area">
		<?php 
			foreach ($GLOBALS["messageArr"] as $messageItem) {
		?>
					<div class="message-box" id="MSG123">
						<div class="mem-pic col-lg-2"><img alt="<?php echo $messageItem->memberPicName ?>" src="<?php echo $messageItem->memberPicName ?>"></div>
						<div class="content col-lg-10">
							<div class="container">
								<div class="name"><?php echo $messageItem->memberName ?><span class="datetime"><?php echo $messageItem->dateStr ?></span></div>
								<p><?php echo $messageItem->content ?></p>
								<div class="setting-area">
									<div class="report pointer">
										<div class="img-icon" data-msg-id="<?php echo $messageItem->no ?>"><img alt="report.png" src="img/store/browse/report.png"></div><p>檢舉</p></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>	
		<?php
			}
		 ?>
		<div class="more-message button" id="more-message">看更多</div>
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
				foreach ($GLOBALS["otherStoreArr"] as $otherStore) {
			?>
					<div class="item pointer col-lg-4 col-xs-6 col-xs-6" data-store-id="<?php echo $otherStore->id; ?>">
						<div class="color-img"><img alt="other_store1.png" src="<?php echo $otherStore->banner1 ?>"></div>
						<div class="detail">
							<h3 class="name"><?php echo $otherStore->name; ?></h3>
							<p class="describe"><?php echo $otherStore->story ?></p>
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
	initBreadCarNowLocationMap("map-now", {lat: 24.960439, lng: 121.190096});
	<?php
	foreach ($GLOBALS["breadCarPathArr"] as $key=>$path) {
	?>
		initBreadCarRouteMap("map-now<?php echo $key;?>",<?php echo $path->locationsStr ?>,<?php echo $path->nowLocation?>);
	<?php
		}
	 ?>
	setTimeout(function() {animate_illustration("bottom-city", "start");}, 1000);
	var messageLoadMore = document.getElementById("more-message");
	//看更多留言事件--------------------
	messageLoadMore.addEventListener("click", function() {
		loadMoreMessage(<?php echo $GLOBALS["store"]->id; ?>);
	}, false);
	//寄發留言-------------------------
	$("#send-message-btn").click(function() {
		var content = $('#message-content').val();
		sendMessage(<?php echo $GLOBALS["store"]->id; ?>, <?php echo $memNum;?>, content);
	})
	//screen1 banner1 bgImg----------------
	 $('#banner1').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner1;?>")');
	 $('#banner2').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner2;?>")');
	 $('#banner3').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner3;?>")');
	 //評價-----------------------------
	 $('#review-btn').on('click', function() {
	 	$('#review-modal').modal({
		 	fadeDuration: 100
		 });
	 })
	 
});	
</script>
</body>
</html>