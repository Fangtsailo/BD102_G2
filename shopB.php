<?php 
ob_start();
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSSHOP</title>
    <link rel="icon" href="img/trepun4.png">
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick-theme.css">
    <link rel="stylesheet" href="css/shopB.css">
 	<script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCAy_Zw-sc6u3IYn0CFQc9vKn7wA3JNJ4Y"></script>
    <script src="js/spB_map.js"></script>
    <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>  
    <script src="js/storeBrowse.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	
    	
</head>
<body>

<!-- ======================================= header 頁首 
	======================================================= -->
<?php 
require_once("header.php");
 ?>
<?php 
	try{
	
	require_once("php/common/globalVar.php");	
	require_once("php/store/browse/storeDetail.php");

	$memNum = -1;
	$isLogin = false;
	if ( isset($_SESSION["memNo"]) ===true ) {
		$memNum = $_SESSION["memNo"];
		$isLogin = true;
	}
	$storeId = 1;
	if ( isset($_REQUEST["storeId"]) === true) {
		$storeId = $_REQUEST["storeId"];
	}

	//======================================
	$memPic = GLOBAL_MEM_PIC_PATH."default.png";
	if ($memNum != -1) {
		$memPic = GLOBAL_MEM_PIC_PATH.$_SESSION["memPic"];
	}
	getStoreInfoById($storeId);

	// $GLOBALS["breadCarPathArr"] = getBreadCarPathByStoreId($storeId);
	$GLOBALS["produtsArr"] = getProductsByStoreId($storeId);
	$GLOBALS["activityArr"] = getActivityInfoByStoreId($storeId);
	//*****
	$GLOBALS["messageArr"] = getMessagesByStoreId($storeId, $memNum);
	$GLOBALS["otherStoreArr"] = getOtherStoreByRandom(6);
	$isThisMemFollowThisStore = isFollowStoreByMemNum($memNum, $storeId);

	 } catch (Exception $e) {
	echo "原因：",$e->getMessage(),"<br>";
	echo "行號：",$e->getLine(),"<br>";
	 }
  ?>

	<!-- <div class="container-template"></div> -->
	





<div id="trigger1"></div>
	<section class="SHOPB_SHOP">
		
		<div class="banners">
			<!-- <img src="img/SHOPB/BN_01.JPG" alt="">
			<img src="img/SHOPB/BN_02.JPG" alt="">
			<img src="img/SHOPB/BN_03.JPG" alt=""> -->
			<div id="banner1"></div>
			<div id="banner2"></div>
			<div id="banner3"></div>
		</div>

		<!-- <script type="text/javascript">
			var counter = 0, // 一開始要顯示的圖，0 的話就是顯示第一張
		    slide = document.querySelector('.banners'),
		    items = slide.querySelectorAll('img'),
		    itemsCount = items.length, 
		    prevBtn = document.createElement('a'),
		    nextBtn = document.createElement('a'),
		    timer = 5000, // 4 秒換圖
		    interval = window.setInterval(showNext, timer);  // 設定循環
		
		prevBtn.classList.add('prev'); // 幫上一張按鈕加 class＝"prev" 給 CSS 指定樣式用
		nextBtn.classList.add('next'); // 幫下一張按鈕加 class＝"next" 給 CSS 指定樣式用
		slide.appendChild(prevBtn); // 將按鈕加到 #slide 裡
		slide.appendChild(nextBtn);

		// 帶入目前要顯示第幾張圖 
		var showCurrent = function(){
		    var itemToShow = Math.abs(counter % itemsCount); // 取餘數才能無限循環
		    [].forEach.call( items, function(el){
		        el.classList.remove('show'); // 將所有 img 的 class="show" 移除
		    });
		    items[itemToShow].classList.add('show'); // 將要顯示的 img 加入 class="show"
		};
		
		function showNext(){
		    counter++; // 將 counter+1 指定下一張圖
		    showCurrent();
		}
		
		function showPrev(){
		    counter//--; // 將 counter－1 指定上一張圖
		    showCurrent();
		}
		
		// 綁定點擊上一張，下一張按鈕的事件
		nextBtn.addEventListener('click', showNext, false);
		prevBtn.addEventListener('click', showPrev, false);
		
		// 一開始秀出第一張圖，也可以在 HTML 的第一個 img 裡加上 class="show"
		items[0].classList.add('show');
		</script> -->
		
		






		


		<div class="col-xs-10 col-sm-3" id="SPNAME">MONOCLE 麵包屋</div>

		<div class="col-xs-10 col-sm-3" id="biginfo">
		<div class="" id="SPINFO">
			<p><?php echo $GLOBALS["store"]->address ?></p>
			<p>營業時間 <?php echo $GLOBALS["store"]->openStartTime ?>:00 - <?php echo $GLOBALS["store"]->openEndTime ?>:00</p>
			<p>公休日 
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
			<p><?php echo $GLOBALS["store"]->phone ?></p>
			<div id="trace-btn">
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
				<!-- <img src="img/SHOPB/heart.png" id="heart" title="收藏到口袋！"> -->
				<p class="count">(<?php echo $GLOBALS["store"]->follow ?>)</p>
			</div>
		</div>
		<div class="clearfix"></div>
		<div id="SPGRADE" >
			
			<div class="rating">
			<label for="star1"></label>
        	<input type="radio" id="star1" name="rating" value="1" hidden/>
        	<label for="star2"></label>
       	 	<input type="radio" id="star2" name="rating" value="2" hidden/>
         	<label for="star3"></label>
       	 	<input type="radio" id="star3" name="rating" value="3" hidden/>
       	 	<label for="star4"></label>
       	 	<input type="radio" id="star4" name="rating" value="4" hidden/>
       	 	<label for="star5"></label>
       	 	<input type="radio" id="star5" name="rating" value="5" hidden/>
			</div>


			<div id="GIVESTAR">
			<a href="#"><input  type="hidden" name="" value="" placeholder="">送出</a>
			</div>
		</div>


		<div id="getstar">
			<span>好評</span>
			<span>&nbsp3.5&nbsp</span>
			<span>分</span>
		</div>
		</div>

		<!-- <div id="SPFOLLOW">
			<img src="img/SHOPB/heart.png" id="heart" title="收藏到口袋！">
			<p id="getfollow">(123)</p>
		</div> -->

<!-- 		<script>
			function switchFavorite(){
			  var heart = document.getElementById("heart");
			  if( heart.title == "收藏到口袋！"){
			  	heart.src="img/SHOPB/RED_heart.png";
			  	heart.title="取消收藏";
			  }else{
			  	heart.src="img/SHOPB/heart.png";
			  	heart.title="收藏到口袋！";
			  }
			}
			function init(){
			  document.getElementById("heart").onclick = switchFavorite;
			}
			window.onload = init;
		</script>  -->



		<div class="col-xs-6 col-sm-4" id="SPSTORY">
			<p id="story1"><?php echo $GLOBALS["store"]->story ?></p>
		</div>

			
		<div id="SPHAPPY">
			<img src="img/SHOPB/bread_parade.png">
		</div>
		<div id="SPHAPPYDON">
			<img id="btfly" src="img/SHOPB/BTFLY.png">
		</div>

		
	</section>
	<div class="clearfix"></div>
		<div class="SPSTORYRWD">
			<p id="story1"><?php echo $GLOBALS["store"]->story ?></p>
		</div>


	<div class="clearfix"></div>
	<section class="SHOPB_GUOGUOCHUNG">
		<div class="RRR"></div>
		<div class="LLL"></div>
	</section>



	<section class="SHOPB_PRODUCT col-xs-12 col-sm-12">
		<div id="trigger2"></div>
		<img src="img/SHOPB/BAKE.jpg">

		<div class="SHOPB_PRODUCT_title">
			<div class="bar"></div>
			<p>自慢商品</p>
		</div>


		<?php 
		// exit(print_r($GLOBALS["produtsArr"]));
			foreach ($GLOBALS["produtsArr"] as $key=>$product) {
		?>
		<div id="pd<?php echo ($key+1); ?>">
			<div class="pdimg">
			<img src="<?php echo $product->pictureName; ?>">
			</div>
			<p id="dis"><?php echo $product->name; ?></p>
			<div class="pd<?php echo ($key+1); ?>_DTL">
				<h3><?php echo $product->name; ?></h3>
				<p><?php echo $product->description ?><br>NT.<?php echo $product->price ?></p>
			</div>
		</div>
		<?php
			}
		 ?>
	</section>





	<section class="SHOPB_ACT col-xs-12 col-sm-12">
		<img src="img/SHOPB/ACT_01.jpg">
		<div id="BOTTOMAREA"></div>
		<!-- <div id="ACTIMG">
			<img src="img/SHOPB/act.png">
		</div> -->
		<div id="SKINAREA"></div>
		<div id="ACTTXT">
			<?php  
			foreach ($GLOBALS["activityArr"] as $activity) {
			?>
			<p id="tt"><?php echo $activity->title ?></p>
			<p id="cc">
				體驗地點 : <?php echo $activity->address ?> <br>
				時間 : <?php echo $activity->time ?> <br>
				人數限制 : <?php echo $activity->peopleLimit ?> 人<br>
				材料 : <?php echo $activity->ingredient ?> <br>
				費用 : <?php echo $activity->price ?>
			</p>
			<a href="activity_act.php?actNum=<?php echo $activity->num ?>" id="ACTBT">活動詳情</a>
			<div id="ACTIMG">
				<script type="text/javascript">
					$("#ACTIMG").css('background','url("<?php echo $activity->bannerfullPicName=="" ? "default.jpg" : $activity->bannerfullPicName; ?>") center center').css('background-size','cover');
				</script>
			<!-- <img src="<?php //echo $activity->bannerfullPicName ?>"> -->
			</div>
		</div>
		<?php 
		} ?>
	</section>


	<div class="clearfix"></div>
	<section class="SHOPB_MAP col-xs-12 col-sm-12">
		<div id="myMap"></div>
	</section>
	<div class="clearfix"></div>



	<section class="SHOPB_MSG">

		<!-- <div class="MSG_CON">
			<div class="MSG_PROFILE">
				<img src="img/SHOPB/PROFILE1.png">
			</div>
			<div class="MSG_TXT sp">
					<input type="text" name="msgmsg" placeholder="登入開始留言">
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="MSG_CON">
			<div class="MSG_PROFILE">
				<img src="img/SHOPB/PROFILE2.png">
			</div>
			<div class="MSG_TXT">
				<p>搜索引擎歷史魔獸讓我們正常天氣無論視頻笑容求助理想機構正在，創造指標媽媽不怕本身那麼多存在，調查基金來看中央選擇進來開口很，浪費未來傳來女性品種每個人結束無人。
				</p>
				<span id="respit">回覆</span>
				<span id="repoit">檢舉</span>
			</div>
			<div class="clearfix"></div>
		</div>


		<div class="MSG_CON">
			<div class="MSG_PROFILE">
				<img src="img/SHOPB/PROFILE2.png">
			</div>
			<div class="MSG_TXT">
				<p>搜索引擎歷史魔獸讓我們正常天氣無論視頻笑容求助理想機構正在，創造指標媽媽不怕本身那麼多存在，調查基金來看中央選擇進來開口很，浪費未來傳來女性品種每個人結束無人。
				</p>
				<span id="respit">回覆</span>
				<span id="repoit">檢舉</span>
				
				<div class="MSG_RES">
					<div class="MSG_RES_PROFILE">
						<img src="img/SHOPB/PROFILE2.png">
					</div>
					<div class="MSG_RES_TXT">
					<p>搜索引擎歷史魔獸讓我們正常天氣無論視頻笑容求助理想機構正在，創造指標媽媽不怕本身那麼多存在。
					</p>
					</div>					
				</div> <!-- MSG_RES -->
<!-- 				<div class="clearfix"></div>
				<div class="MSG_RES">
					<div class="MSG_RES_PROFILE">
						<img src="img/SHOPB/PROFILE2.png">
					</div>
					<div class="MSG_RES_TXT">
					<p>搜索引擎歷史魔獸讓我們正常天氣無論視頻笑容求助理想機構正在，創造指標媽媽。
					</p>					
				</div> <!-- MSG_RES -->

<!-- 			</div>	<!-- MSG_TXT -->		
			
<!-- 		</div><div class="clearfix"></div> -->

		<div class="perspective">
		<div class="title">
			<!-- <div class="front">留言板</div> -->
			<div class="down">
				<p>留言板</p>
			</div>
		</div>
	</div>
	<div class="send-message-area">
		<div class="message-box" id="MSG123">
			<div class="mem-pic col-lg-2"><img alt="<?php echo $memPic ?>" src="<?php echo $memPic ?>"></div>
			<div class="content col-lg-10"><textarea wrap="physical" id="message-box-txtarea" maxlength="200" placeholder="登入後開始留言..." rows="5"></textarea>
			<button id="send-message-btn" class="button">留言</button>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="messages-area" id="messages-area">
		<?php 
			foreach ($GLOBALS["messageArr"] as $messageItem) {
		?>
					<div class="message-box">
						<div class="mem-pic col-lg-2"><img alt="<?php echo $messageItem->memberPicName ?>" src="<?php echo $memPic ?>"></div>
						<div class="content col-lg-10">
							<div class="container">
								<div class="name"><?php echo $messageItem->memberName ?><span class="datetime"><?php echo $messageItem->dateStr ?></span></div>
								<p><?php echo $messageItem->content ?></p>
								<div class="setting-area">
									<div class="report pointer button" id="msg-<?php echo $messageItem->no ?>">
										<p>檢舉</p></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>	
		<?php
			}
		 ?>
		<div class="more-message button" id="more-message">看更多</div>
	</div>




	</section>







	<div class="clearfix"></div>
	<section class="SHOPB_OTHERS">
		<div class="OTHERSTITLE">
			<p>還想逛逛 . . .</p>
		</div>


		<div class="OTHERSPHOTOS">
			<?php 
				foreach ($GLOBALS["otherStoreArr"] as $otherStore) {
			?>
    		<div><a href="shopB.php?storeId=<?php echo $otherStore->id; ?>"><img id="IIImg" src="<?php echo $otherStore->banner1; ?>"></a> </div>
    		<?php
				}
	 		?>	
    		<!-- <div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_02.jpg"></a> </div>
    		<div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_03.jpg"></a> </div>
    		<div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_04.jpg"></a> </div> -->

  		</div>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
		<script type="text/javascript" src="libs/slick-1.8.0/slick/slick.min.js"></script>

  		<script type="text/javascript">
			$('.OTHERSPHOTOS').slick({
				dots: true,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true
			});
  		</script>
			
		
	</section>

















<!-- ======================================================footer 頁尾========================================================= -->

<?php require_once("footer.php"); ?>

<script type="text/javascript" src="js/spB_don.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	initShopBMap(<?php echo $GLOBALS["store"]->lat ?>,<?php echo $GLOBALS["store"]->lng ?>);
	isLogin = <?php echo $isLogin==true?"true":"false"; ?>;
	isThisMemFollowThisStore = <?php echo $isThisMemFollowThisStore; ?>;
	//initParallax("activity-parallax");
	//allSlickSetting();
	//initAllScrollMagicScene();
	// initBreadCarNowLocationMap("map-now", <?php //echo $GLOBALS["store"]->lat;?>, <?php //echo $GLOBALS["store"]->lng ?>);
	// <?php
	// foreach ($GLOBALS["breadCarPathArr"] as $key=>$path) {
	// ?>
	// 	initBreadCarRouteMap("map-now<?php //echo $key;?>",<?php //echo $path->locationsStr ?>,<?php //echo $path->nowLocation?>);
	// <?php
	// 	}
	//  ?>
	// setTimeout(function() {animate_illustration("bottom-city", "start");}, 1000);

	$('#banner1').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner1;?>")');
	 $('#banner2').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner2;?>")');
	 $('#banner3').css('background-image', 'url("<?php echo $GLOBALS["store"]->banner3;?>")');

	screen1BannerImgDivNum = "1";
 	setInterval(function(){ 
 	var tmpNum = screen1BannerImgDivNum;
 	screen1BannerImgDivNum = (screen1BannerImgDivNum + 1) % 3;
 	screen1BannerImgDivNum = screen1BannerImgDivNum == 0?3:screen1BannerImgDivNum;
 	$('#banner' + screen1BannerImgDivNum).fadeIn(2000);
 	$('#banner' + tmpNum).fadeOut(2000);
  	}, 5000);

	var messageLoadMore = document.getElementById("more-message");
	//看更多留言事件--------------------
	messageLoadMore.addEventListener("click", function() {
		loadMoreMessage(<?php echo $GLOBALS["store"]->id; ?>);
	}, false);
	//寄發留言-------------------------
	
	$("#send-message-btn").click(function() {
		var content = $("#message-box-txtarea").val();
		if (content.length > 0) {
		sendMessage(<?php echo $GLOBALS["store"]->id; ?>, <?php echo $memNum;?>, content);
		} else {
			$.sweetModal({
                content: '先輸入文字',
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
	 // $('#banner1').css('background-image', 'url("<?php //echo $GLOBALS["store"]->banner1;?>")');
	 // $('#banner2').css('background-image', 'url("<?php //echo $GLOBALS["store"]->banner2;?>")');
	 // $('#banner3').css('background-image', 'url("<?php //echo $GLOBALS["store"]->banner3;?>")');
	 //評價-----------------------------
	 $('#review-btn').on('click', function() {

	 });
	 navigatorDotScroll();
	 //商品詳情-------------------------
	//  $(".textLightBox .closeBtn").on('click', function(){
	//  	$('.textLightBox').fadeOut(500);
	//  });
	//  <?php
	//  	foreach ($GLOBALS["produtsArr"] as $product) {
	//  ?>
	//  	$("#bread-detail-<?php //echo $product->num; ?>").on('click', function(){
	//  	var detailContent = $('#big-bread-<?php //echo $product->num; ?> p').text();
	//  	$('.textLightBox .content p').text(detailContent);
	//  	$('.textLightBox').fadeIn(500);
	//  });
	//  <?php
	//  	}
	// ?>
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
			reportMessage(<?php echo $messageItem->no ?>, <?php echo $memNum;?>, "test reason");
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
});	
</script>	

</body>
</html>