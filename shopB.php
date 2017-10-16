<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="libs/slick-1.8.0/slick/slick-theme.css">
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCAy_Zw-sc6u3IYn0CFQc9vKn7wA3JNJ4Y"></script>
    <script src="js/spB_map.js"></script>

    <script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>

    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="js/parallax.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.theme.default.min.css"></link>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/owl.carousel.min.js"></script>

	<script type="text/javascript" src="js/header.js"></script>

    <title>Document</title>
    <link rel="stylesheet" href="css/shopB.css">
    <link rel="stylesheet" type="text/css" href="css/basic.css">
</head>
<body>

<!-- ======================================= header 頁首 ======================================================= -->

<?php require_once("header.php"); ?>

	<!-- <div class="container-template"></div> -->
	





<div id="trigger1"></div>
	<section class="SHOPB_SHOP">
		
		<div class="banners">
		</div>



		<div class="col-xs-10 col-sm-3" id="SPNAME">MONOCLE 麵包屋</div>
		<div class="col-xs-10 col-sm-3" id="SPINFO">
			<p>桃園市中壢區中央路123號</p>
			<p>週二 - 週六 09:30 - 22:30</p>
			<p>週日 09:30 - 17:30</p>
			<p>每週一公休</p>
			<p>03 - 1234567</p>
		</div>
		<div id="SPGRADE" >
			<div class="star star1">
				<img src="img/SHOPB/star.svg">
				<img src="img/SHOPB/star2.svg">
			</div>
			<div class="star star2"><img src="img/SHOPB/star.svg"></div>
			<div class="star star3"><img src="img/SHOPB/star.svg"></div>
			<div class="star star4"><img src="img/SHOPB/star.svg"></div>
			<div class="star star5"><img src="img/SHOPB/star.svg"></div>
			<div id="GIVESTAR">
			<a href="#"><input  type="hidden" name="" value="" placeholder="">送出</a>
			</div>
		</div>

<!-- <script>
	 $(function(){ 
	 $(".star").mouseenter(function(){
	 $(".star").css("background","#f60");
	 $(this).css("background","#f60");
	 $(this).nextAll().css("background","#ccc");
 })
});
</script> -->

		<div id="getstar">
			<span>好評</span>
			<span>&nbsp3.5&nbsp</span>
			<span>分</span>
		</div>
		<div id="SPFOLLOW">
			<img src="img/SHOPB/heart.png" id="heart" title="收藏到口袋！">
			<p id="getfollow">(123)</p>
		</div>

		<script>
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
		</script> 



		<div class="col-xs-6 col-sm-4" id="SPSTORY">
			<p id="story1">烘焙是一間以手工製做麵包為出發的複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味。</p><p id="story2">麵包店，提供客人複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味。 烘焙是一間以手工製做麵包為出發的複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味， 提供客人複合式麵包店。</p><p id="story3">烘焙是一間以手工製做麵包為出發的複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味。</p>
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
			<p id="story1">　　烘焙是一間以手工製做麵包為出發的複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味。</p><p id="story2">　　麵包店提供客人，複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味。 烘焙是一間以手工製做麵包為出發的複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味， 提供客人複合式麵包店。</p><p id="story3">　　烘焙是一間以手工製做麵包為出發的複合式麵包店。嚴選天然食材、自製天然、強調原味即是美味。</p>
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
		<div id="pd1">
			<img src="img/SHOPB/PD_001.jpg">
			<p id="dis">辮子丹麥麵包</p>
			<div class="pd1_DTL">
				<h3>辮子丹麥麵包</h3>
				<p>	表皮香酥層層疊疊層層疊<br>
					內在柔軟綿綿密密綿綿蜜<br>NT.50</p>
			</div>
		</div>
		<div id="pd2">
			<img src="img/SHOPB/PD_002.jpg">
			<p id="dis">巧克力閃電泡芙</p>
			<div class="pd2_DTL">
				<h3>巧克力閃電泡芙</h3>
				<p>	表皮香酥層層疊疊<br>
					內在柔軟綿綿密密<br>NT.50</p>
			</div>
		</div>
		<div id="pd3">
			<img src="img/SHOPB/PD_003.jpg">
			<p id="dis">麥麥香香麵包</p>
			<div class="pd3_DTL">
				<h3>麥麥香香麵包</h3>
				<p>	表皮香酥層層疊疊<br>
					內在柔軟綿綿密密<br>NT.50</p>
			</div>
		</div>
		<div id="pd4">
			<img src="img/SHOPB/PD_004.jpg">
			<p id="dis">秘製清爽多拿滋</p>
			<div class="pd4_DTL">
				<h3>秘製清爽多拿滋</h3>
				<p>	表皮香酥層層疊疊<br>
					內在柔軟綿綿密密<br>NT.50</p>
			</div>
		</div>
		<div id="pd5">
			<img src="img/SHOPB/PD_005.jpg">
			<p id="dis">短棍法國麵包</p>
			<div class="pd5_DTL">
				<h3>短棍法國麵包</h3>
				<p>	表皮香酥層層疊疊<br>
					內在柔軟綿綿密密<br>NT.50</p>
			</div>
		</div>
		<div id="pd6">
			<img src="img/SHOPB/PD_006.jpg">
			<p id="dis">楓糖可頌</p>
			<div class="pd6_DTL">
				<h3>楓糖可頌</h3>
				<p>	表皮香酥層層疊疊<br>
					內在柔軟綿綿密密<br>NT.50</p>
			</div>
		</div>
	</section>





	<section class="SHOPB_ACT col-xs-12 col-sm-12">
		<img src="img/SHOPB/ACT_01.jpg">
		<div id="BOTTOMAREA"></div>
		<div id="ACTIMG">
			<img src="img/SHOPB/act.png">
		</div>
		<div id="SKINAREA"></div>
		<div id="ACTTXT">
			<p id="tt">牛角麵包簡單學</p>
			<p id="cc">
				體驗地點 : 桃園市中壢區中央路55號<br>  
           		烘焙王麵包坊<br>
				時間 : 105.9.29  下午1:00(預計3小時)<br>
				人數限制 : 10~12人<br>
				聯絡方式 : (03)3335567<br>
				材料 : 麵包坊提供<br>
				費用 : 報名費與材料一共1000元(現場收費)
			</p>
			<input type="button" id="ACTBT" name="" value="報名活動">
		</div>
	</section>


	<div class="clearfix"></div>
	<section class="SHOPB_MAP col-xs-12 col-sm-12">
		<div id="myMap"></div>
	</section>
	<div class="clearfix"></div>



	<section class="SHOPB_MSG">

		<div class="MSG_CON">
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
				<div class="clearfix"></div>
				<div class="MSG_RES">
					<div class="MSG_RES_PROFILE">
						<img src="img/SHOPB/PROFILE2.png">
					</div>
					<div class="MSG_RES_TXT">
					<p>搜索引擎歷史魔獸讓我們正常天氣無論視頻笑容求助理想機構正在，創造指標媽媽。
					</p>					
				</div> <!-- MSG_RES -->

			</div>	<!-- MSG_TXT -->		
			
		</div><div class="clearfix"></div>



	</section>







	<div class="clearfix"></div>
	<section class="SHOPB_OTHERS">
		<div class="OTHERSTITLE">
			<p>還想逛逛 . . .</p>
		</div>


		<div class="OTHERSPHOTOS">
    		<div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_01.jpg"></a> </div>
    		<div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_02.jpg"></a> </div>
    		<div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_03.jpg"></a> </div>
    		<div><a href="#"><img id="IIImg" src="img/SHOPB/OTHER_04.jpg"></a> </div>

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

</body>
</html>