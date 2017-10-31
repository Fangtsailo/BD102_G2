<?php 
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

	<!-- 店名未輸入警示 -->
 	<!-- <script type="text/javascript">
		$(document).ready(function(){

			$( "#check" ).click(function() {

				if($( "#SI_NAME" ).val().length==0){
			  		alert ("沒有輸入店名");
			  	}else{
			  		$( ".searchSi" ).submit();
			  	}
			});
		});	
	</script> -->
	<script type="text/javascript">
		$(document).ready(function(){

			$("#check").click(function(){

		        if ( $("#SI_NAME").val().length==0 ){

					$.sweetModal({
						content: '沒有輸入店名喔~',
						icon: $.sweetModal.ICON_WARNING,
						width: '300px',
						theme: $.sweetModal.THEME_MIXED,
						buttons: [
							{
								label: '知道了',
								classes: 'brownB'
							}
						]
					});//sweetModal

					// $("#SI_NAME").focus();
					// return;
				} else{
					$( ".searchSi" ).submit();	
				}//if else
			});//$("#check").click();
		});//$(document).ready();
	</script>
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
			<!-- 成為店長_第一頁 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-3 memBeBoss">
				<div class="memfigure">
					<figure>
	                    <img src="img/memimg/memBk01.png" alt="免費申請">
	                </figure>
	                <figcaption>
	                    <h2>免費24小時數位服務</h2>
	                    <p>讓數位服務24小時幫你吸引人潮、增加營收、好感度！</p>
	                </figcaption>
	            </div>

				<div class="memfigure">
					<figure>
	                    <img src="img/memimg/memBk02.png" alt="讓店更有吸引力">
	                </figure>
	                <figcaption>
	                    <h2>讓您的店更有吸引力</h2>
	                    <p>您可以輕鬆上傳店頭照片和美食照片，吸引網友上門。</p>
	                </figcaption>
	            </div>

				<div class="memfigure">
					<figure>
	                    <img src="img/memimg/memBk03.png" alt="在Google找到">
	                </figure>
	                <figcaption>
	                    <h2>容易在Google找到</h2>
	                    <p>我們是Google合作夥伴，您的店會在Google map出現!</p>
	                </figcaption>
	            </div>

				<div class="memfigure">
					<figure>
	                    <img src="img/memimg/memBk04.png" alt="讓更多人知道">
	                </figure>
	                <figcaption>
	                    <h2>讓更多人知道您的店</h2>
	                    <p>隨時更新店家簡介及位置資訊，讓網友即時接獲新訊。</p>
	                </figcaption>
	            </div>
			</section>

			<section class="col-xs-12 col-sm-12 section1000 memBeBoss1">
				<h1>想和我們合作嗎？</h1>
                <p>請填寫以下表單，<br>我們將有專人盡快與你聯繫！</p>

                <form class="form-horizontal searchSi" action="php/member/beBossSearch.php" method="get">
	                <p>
	                	<label for="SI_TYPE"><span class="required">*</span>選擇店型</label>
	                	<input type="radio" name="SI_TYPE" value="0" class="radio" checked>麵包店
	                	<input type="radio" name="SI_TYPE" value="1" class="radio">麵包車
	            	</p>

	            	<p>
	                 	<label for="SI_NAME"><span class="required">*</span>輸入店名</label>
	                 	<input type="text" name="SI_NAME" placeholder="請輸入完整店名" id="SI_NAME" autofocus>
	             	</p>
					
	             	<input type="button" class="btn" value="下一步" id="check">

					
	            	
	            </form>
			</section>
		</div>
	<!-- footer -->
	<?php
		require_once("footer.php");

	   $info = isset($_REQUEST["info"]) ?  $_REQUEST["info"] :"";

	?>
<script type="text/javascript">
		//宣告var info來接php的$info
		var info = '<?php echo $info; ?>' ;		
		$(document).ready(function(){
			if ( info == "error" ) {
				$.sweetModal({
					content: '本店已有店長  下次請早 >.^',
					icon: $.sweetModal.ICON_SUCCESS,
					width: '300px',
					timeout:2000,
					theme: $.sweetModal.THEME_MIXED,
					onClose: function(){
						location.href="memBeBoss1.php"; 
					}
				});

				
			}
		});//$(document).ready();


	</script>
</body>
</html>