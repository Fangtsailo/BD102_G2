<?php 
	ob_start();
	session_start();

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
	<!-- <link rel="stylesheet" type="text/css" href="libs/slick-master/slick/slick-theme.css">	 -->
	<script src="libs/jquery/dist/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<!-- <script src="libs/slick-master/slick/slick.min.js"></script> -->
	<script src="libs/slick-1.8.0/slick/slick.min.js"></script>
	<link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick-theme.css">
	<script src="libs/gsap/src/minified/TweenMax.min.js"></script>
	<script src="libs/ScrollMagic/scrollmagic/minified/ScrollMagic.min.js"></script>
	<script src="libs/ScrollMagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
	<script src="libs/ScrollMagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script src="js/storeBrowse.js"></script>
    </script>

    <script src="js/header.js"></script>
</head>
<body>

<!-- ======================================================header 頁首========================================================= -->
<?php 
try {
	require_once("header.php");
	require_once("php/common/globalVar.php");	
	require_once("php/store/browse/storeDetail.php");
	$memNum = -1;
	$isLogin = false;
	if ( isset($_SESSION["memNo"]) ===true ) {
		$memNum = $_SESSION["memNo"];
		$isLogin = true;
	}
	$storeId = 2;
	if ( isset($_REQUEST["storeId"]) === true) {
		$storeId = $_REQUEST["storeId"];
	}
	//會員基資======================================
	$memPic = GLOBAL_MEM_PIC_PATH."default.png";
	if ($memNum != -1) {
		$memPic = GLOBAL_MEM_PIC_PATH.$_SESSION["memPic"];
	}

	getStoreInfoById($storeId);

				//防呆, type 不是1的都導到 shopB.php
			if ($GLOBALS["store"]->type != 1) {
				header("location:shopB.php?storeId=$storeId");
			}

	$GLOBALS["breadCarPathArr"] = getBreadCarPathByStoreId($storeId);
	$breadCarPathCount = 1;//至少有"即時位置"
	$GLOBALS["produtsArr"] = getProductsByStoreId($storeId);
	$GLOBALS["activityArr"] = getActivityInfoByStoreId($storeId);
	$GLOBALS["messageArr"] = getMessagesByStoreId($storeId, $memNum);
	$GLOBALS["otherStoreArr"] = getOtherStoreByRandom(6);
	$isThisMemFollowThisStore = isFollowStoreByMemNum($memNum, $storeId);

	//預設至少一個商品跟活動圖
	if (count($GLOBALS["produtsArr"]) == 0 ) {
		array_push($GLOBALS["produtsArr"],new Bread());
	}
	if (count($GLOBALS["activityArr"]) == 0 ) {
		array_push($GLOBALS["activityArr"],new ActivityObj());
	}

} catch (Exception $e) {
	echo "原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
}
 ?>
<!--  <div id="loading-page">
 	<div class="content">Loading...</div>
 </div> -->
 <div class="report-mask mask">
 	<div class="report-modal modal">
 		<p>檢舉原因</p>
		<textarea id="report-reason" maxlength="50" placeholder="請填寫原因..." rows="2"></textarea>
		 <div class="btns">
		 	<div id="cancel-report-btn" class="globalCancelBtn">取消</div>
		 	<div id="submit-report-btn" class="globalOkBtn">檢舉</div>
		 </div>
 	</div>
 </div>
 <div class="review-mask">
	 <div id="give-reivew-modal">
	 	<p>給予評價</p>
	 	<ul> 	
	 		<li class="star pointer" id="review-star1" data-id="1"><img alt="star.svg" src="img/icon/star3.svg"></li>
		 	<li class="star pointer" id="review-star2" data-id="2"><img alt="star.svg" src="img/icon/star3.svg"></li>
		 	<li class="star pointer" id="review-star3" data-id="3"><img alt="star.svg" src="img/icon/star3.svg"></li>
		 	<li class="star pointer" id="review-star4" data-id="4"><img alt="star.svg" src="img/icon/star3.svg"></li>
		 	<li class="star pointer" id="review-star5" data-id="5"><img alt="star.svg" src="img/icon/star3.svg"></li>
		 </ul>
		 <div class="btns">
		 	<div id="cancel-review-btn" class="globalCancelBtn">取消</div>
		 	<div id="submit-review-btn" class="globalOkBtn">給評價</div>
		 </div>
		
	 </div>
 </div>
<div class="textLightBox">
	<div class="content">
		<div class="header"></div>
		<p></p>
		<div class="svg closeBtn">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
				<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2
					L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15
					s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
				</svg>
		</div>
	</div>
</div>
<div class="navigator">
		<a href="#screen1" class="item selected">
			<div class="name"><p>店家故事</p></div>
			<div class="point selected"></div>
		</a>
		<a href="#screen-bread-car" class="item">
			<div class="name"><p>胖小車路線</p></div>
			<div class="point"></div>
		</a>
		<a href="#screen-product" class="item">
			<div class="name"><p>商品</p></div>
			<div class="point"></div>
		</a>
		<a href="#screen-activity" class="item">
			<div class="name"><p>體驗活動</p></div>
			<div class="point"></div>
		</a>
		<a href="#screen-messages" class="item">
			<div class="name"><p>留言板</p></div>
			<div class="point"></div>
		</a>
		<a href="#screen-other-store" class="item">
			<div class="name"><p>其他店家推薦</p></div>
			<div class="point"></div>
		</a>
</div>
<div class="screen screen-1" id="screen1">
	<div class="banners">
		<div id="banner1"></div>
		<div id="banner2"></div>
		<div id="banner3"></div>
	</div>
	<div class="detail-box">
		<div class="store-logo"><img alt="<?php echo $GLOBALS["store"]->storeLogo ?>" src="<?php echo $GLOBALS["store"]->storeLogo ?>"></div>
		<div class="title">
			<div class="container">
				<h1 class="store-name"><?php echo $GLOBALS["store"]->name ?></h1>
			</div>
		</div>
		<div class="detail">
				<ul class="follow col-xs-9" id="review-btn">
					<?php 
						$reviewCount = $GLOBALS["store"]->reviews;
						for ($i = 0; $i < 5; $i++) {
							if ($reviewCount > 0) {
					?>
							<li class="star pointer"><img alt="star.svg" src="img/icon/star2.svg"></li>
					<?php
								$reviewCount--;
							} else {
					?>
							<li class="star pointer"><img alt="star.svg" src="img/icon/star3.svg"></li>
					<?php
							}
						}
					 ?>
				</ul>
			<div class="trace pointer col-xs-3" id='trace-btn'>
				<div class="icon">
				<?php 
					if ($isThisMemFollowThisStore == "true") {
				 ?>
				 	<img alt="follow.svg" src="img/icon/follow3.svg" id="follow-icon">
				 <?php 
				 	} else {
				 ?>
				  	<img alt="follow.svg" src="img/icon/follow2.svg" id="follow-icon">
				 <?php 
				  	}
				 ?>	
				</div>
				<div class="count">(<?php echo $GLOBALS["store"]->follow ?>)</div>		
			</div>
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
								if ($GLOBALS["store"]->closeDayArr[$i] != "") {
									if ($GLOBALS["store"]->closeDayArr[$i] == 0) {
										//國定假日
										echo transNumToWord($GLOBALS["store"]->closeDayArr[$i]), ", ";
									} else {
										echo "星期", transNumToWord($GLOBALS["store"]->closeDayArr[$i]), ", ";
									}	
								}
							} else {
								if ($GLOBALS["store"]->closeDayArr[$i] != "") {
									if ($GLOBALS["store"]->closeDayArr[$i] == 0) {
										//國定假日
										echo transNumToWord($GLOBALS["store"]->closeDayArr[$i]);
									} else {
										echo "星期", transNumToWord($GLOBALS["store"]->closeDayArr[$i]);
									}
								}
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
<div class="screen screen-bread-car-map" id="screen-bread-car">
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
		<li class="item pointer item-selected" id="bread-car-path-now-location">
			即時位置
		</li>
		<?php
			foreach ($GLOBALS["breadCarPathArr"] as $path) {
				if ($breadCarPathCount <=3) {
					$breadCarPathCount++;
				}
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
<div class="screen screen-product" id="screen-product">
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
					<div class="item" id="big-bread-<?php echo $product->num; ?>">
						<div class="image">
						</div>
						<div class="describe">
						<h3><?php echo $product->name; ?><button class="bread-detail" id="bread-detail-<?php echo $product->num; ?>">詳情</button></h3>

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
				<div class="item pointer col-xs-4" data-id="small-bread-<?php echo $product->num; ?>">
					<div class="image"></div>
					<p><?php echo $product->name; ?></p>
				</div>
		<?php
			}
		 ?>
	</div>
</div>
<div class="screen screen-activity" id="screen-activity">
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
       			<a href="activity_act.php?actNum=<?php echo $activity->num ?>" class="activity-detail button">活動詳情</a>
			</div>
			<div class="banner col-lg-6 col-xs-12" id="act-<?php echo $activity->num ?>">
				<div class="item col-lg-6">
				</div>
				<div class="item col-lg-6">
				</div>
				<div class="item col-lg-6">
				</div>
				<div class="item col-lg-6">
				</div>
			</div>
		</div>
		<?php 
		} 
		?>
	</div>
</div>
<div class="screen screen-messages" id="screen-messages">
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
			<div class="mem-pic col-lg-2"><div id="login-men-pic"></div></div>
			<div class="content col-lg-10"><textarea id="message-box-txtarea" maxlength="250" placeholder="登入後開始留言..." rows="5"></textarea>
			<button id="send-message-btn" class="button">留言</button>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="messages-area" id="messages-area">
		<?php 
			foreach ($GLOBALS["messageArr"] as $messageItem) {
		?>
					<div class="message-box">
						<div class="mem-pic col-lg-2">
							<div class="picture" style="background-image:url('<?php echo $messageItem->memberPicName ?>')"></div>
							</div>
						<div class="content col-lg-10">
							<div class="container">
								<div class="name"><?php echo $messageItem->memberName ?><span class="datetime"><?php echo $messageItem->dateStr ?></span></div>
								<p><?php echo $messageItem->content ?></p>
								<div class="setting-area">
									<div class="report pointer button" data-id="<?php echo $messageItem->no ?>" id="msg-<?php echo $messageItem->no ?>">
										<p>檢舉</p></div>
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
<div class="screen screen-other-store" id="screen-other-store">
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
				<a href="storeBrowse.php?storeId=<?php echo $otherStore->id; ?>">
					<div class="item pointer col-lg-4 col-xs-6 col-xs-6" id="other-<?php echo $otherStore->id; ?>">
						<div class="store-img"></div>
						<div class="detail">
							<h3 class="name"><?php echo $otherStore->name; ?></h3>
							<p class="describe"><?php echo $otherStore->story ?></p>
						</div>
					</div>
				</a>
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
	//loading page
	// $('#loading-page').delay(2000).fadeOut(1000);
	//$('#loading-page').hide();
	//檢舉公用變數
	reportMessageNum = -1;
	reviewIGave = 0;//若有給予評價的分數
	memNum = <?php echo $memNum; ?>;
	storeId = <?php echo $storeId; ?>;
	initReviewStarAction();
	initReportAction();
	isLogin = <?php echo $isLogin==true?"true":"false"; ?>;
	isThisMemFollowThisStore = <?php echo $isThisMemFollowThisStore; ?>;
	initParallax("activity-parallax");
	allSlickSetting(<?php echo $breadCarPathCount; ?>);
	initAllScrollMagicScene();
	initBreadCarNowLocationMap("map-now", <?php echo $GLOBALS["store"]->lat;?>, <?php echo $GLOBALS["store"]->lng ?>);
	<?php
	foreach ($GLOBALS["breadCarPathArr"] as $key=>$path) {
	?>
		initBreadCarRouteMap("map-now<?php echo $key;?>",[<?php echo $path->locationsStr ?>],<?php echo $path->nowLocationLat?>,<?php echo $path->nowLocationLng?>);
	<?php
		}
	 ?>
	setTimeout(function() {animate_illustration("bottom-city", "start");}, 1000);
	var messageLoadMore = document.getElementById("more-message");
	//看更多留言事件--------------------
	messageLoadMore.addEventListener("click", function() {
		loadMoreMessage(<?php echo $GLOBALS["store"]->id; ?>, <?php echo $memNum; ?>);
	}, false);
	//寄發留言-------------------------
	$('#login-men-pic').css('background-image', 'url("<?php echo $memPic;?>")')
	$("#send-message-btn").click(function() {
		var content = $("#message-box-txtarea").val();
		if (content.length > 0) {
		sendMessage(<?php echo $GLOBALS["store"]->id; ?>, <?php echo $memNum;?>, content);
		} else {
			$.sweetModal({
                content: '請先輸入文字',
                icon: $.sweetModal.ICON_WARNING,
                width: '300px',
                theme: $.sweetModal.THEME_MIXED
            });
		}
	})
	if (isLogin) {
		$("#send-message-btn").attr("disabled",false);
	} else {
		//留言板相關
		$("#send-message-btn").attr("disabled",true);
		$("#message-box-txtarea").on('click', function(){
				$('#loginBox').fadeIn(500);
			    $("#menu").removeClass("show");
			    $('#addShopBox').hide();
			});
	}
	//觸發追蹤店家
	$("#trace-btn").click(function() {
		triggerFollow(<?php echo $memNum;?>, <?php echo $GLOBALS["store"]->id; ?>);
	})
	
	//screen1 banner1 bgImg----------------
	 $('#banner1').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner1;?>")');
	 $('#banner2').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner2;?>")');
	 $('#banner3').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner3;?>")');
	 //評價-----------------------------
	 $('#review-btn').on('click', function() {

	 });
	 //導覽dot-------------------------
	 navigatorDotScroll();
	 //商品詳情-------------------------
	 $(".textLightBox .closeBtn").on('click', function(){
	 	$('.textLightBox').fadeOut(500);
	 });
	 <?php
	 	foreach ($GLOBALS["produtsArr"] as $product) {
	 ?>
	 	$("#bread-detail-<?php echo $product->num; ?>").on('click', function(){
	 	var detailContent = $('#big-bread-<?php echo $product->num; ?> p').text();
	 	$('.textLightBox .content p').text(detailContent);
	 	$('.textLightBox').fadeIn(500);
	 });
	 	//商品大背景圖
	 	$('#big-bread-<?php echo $product->num; ?> .image').css('background-image', 'url(<?php echo $product->pictureName; ?>)');
	 	//商品列表小背景圖
	 	$('[data-id=small-bread-<?php echo $product->num; ?>] .image').css('background-image', 'url(<?php echo $product->pictureName; ?>)');
	 	
	 <?php
	 	}
	?>
	//活動照片------------------------------
	<?php  
		foreach ($GLOBALS["activityArr"] as $activity) {
	?>
		$('#act-<?php echo $activity->num ?> .item:first-child').css('background-image', 'url(<?php echo $activity->actPicName1 ?>)');
		$('#act-<?php echo $activity->num ?> .item:nth-child(2)').css('background-image', 'url(<?php echo $activity->actProductPicName1 ?>)');
		$('#act-<?php echo $activity->num ?> .item:nth-child(3)').css('background-image', 'url(<?php echo $activity->actProductPicName2 ?>)');
		$('#act-<?php echo $activity->num ?> .item:nth-child(4)').css('background-image', 'url(<?php echo $activity->actPicName2 ?>)');
	<?php 
		} 
	?>
	//檢舉留言-----------------------------------
	<?php 
		foreach ($GLOBALS["messageArr"] as $messageItem) {
			//有被此登入者檢舉過就不給再檢舉
			if ($messageItem->isReportByMe == true) {
	?>
   		$('#msg-' + <?php echo $messageItem->no ?>).addClass('reported');
   		$('#msg-' + <?php echo $messageItem->no ?> + ' p').text('已檢舉');
	<?php 
			} else {
	 ?>
		$('#msg-<?php echo $messageItem->no ?>').on('click', function(){
				reportMessage(<?php echo $messageItem->no ?>, <?php echo $memNum;?>);
			});
	<?php 
			}
		}
	?>
	//其他店家列表用background-image
	<?php 
		foreach ($GLOBALS["otherStoreArr"] as $otherStore) {
	?>
			$('#other-<?php echo $otherStore->id; ?> .store-img').css('background-image', 'url("<?php echo $otherStore->banner1; ?>")');
	<?php
		}
	 ?>
	 //給評價-----------------------------
	 if (isLogin) {
			$("#review-btn").on('click', function(){
				$('.review-mask').fadeIn(500);
			});
	} else {
		$("#review-btn").on('click', function(){
				$('#loginBox').fadeIn(500);
			    $("#menu").removeClass("show");
			    $('#addShopBox').hide();
			});
	}	
});	
</script>
</body>
</html>