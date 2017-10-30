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

	<!-- 表單資料不齊警示 -->
	<script type="text/javascript">
		$(document).ready(function(){

			$("#check").click(function(){

		        if ( $(".beBossForm4").children('input').val().length=="" ){
					$.sweetModal({
						content: '請將所有表格填寫完畢~',
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

					// $("#SI_NAME").blur();
					// return;
				} else{
					$( ".beBossForm4" ).submit();	
				}//if else
			});//$("#check").click();
		});//$(document).ready();
	</script>

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
			<!-- 成為店長_第四頁_新增麵包店店家 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-12 section1000 memBeBoss1">
				<h1>OOPS！查無此店！</h1>
                <p>請填寫以下表單簡介您的店舖！完成後送出，<br>我們將協助您進行新增店家和店長審核作業！</p>

				<?php
				// phpinfo();
				$siType=isset($_SESSION["SI_TYPE"])? $_SESSION["SI_TYPE"] : "";
				$siName=isset($_SESSION["SI_NAME"])? $_SESSION["SI_NAME"] : "";
				
				?>

				<form class="form-horizontal" action="php/member/beBossInsertToDb.php" method="get" class="beBossForm4">
					<p>
						<label for="SI_TYPE">&nbsp;店型</label>
	                	<strong><?php
	                		if ($siType==0){
								echo "麵包店";
							}else{
								echo "麵包車";	
							}
	                	?></strong>
					</p>
					<p>
						<label for="SI_NAME">&nbsp;店名</label>
	                 	<strong><?php echo $siName ?></strong>
					</p>
					<p>
						<label for="SI_COMFIRM_ID"><span class="required">*</span>統一編號</label>
						<input type="text" name="SI_COMFIRM_ID" placeholder="輸入格式:80088888" autofocus>
					</p>
					<p>
						<label for="MEM_REALNAME"><span class="required">*</span>店長姓名</label>
						<input type="text" name="MEM_REALNAME" placeholder="輸入真實姓名">
					</p>
					<p>
						<label for="SI_PHONE"><span class="required">*</span>&nbsp;電話</label>
						<input type="tel" name="SI_PHONE" placeholder="輸入手機或市話">
					</p>
					<p>
						<label><span class="required">*</span>營業時間</label>
						<input type="number" name="SI_STARTTIME" max="24" min="1" value="9">點至
						<input type="number" name="SI_ENDTIME" max="24" min="1" value="21">點
					</p>
					<p>
						<label for="SI_ADDR"><span class="required">*</span>&nbsp;地址</label>
						<input type="text" name="SI_ADDR" placeholder="輸入地址門牌號碼">
					</p>
					<p>
						<label for="SI_STORY">&nbsp;故事介紹</label>
						<textarea name="SI_STORY" maxlength="250" minlength="5" placeholder="字數限250字??">紅色就</textarea>
					</p>
					<p>
						<input type="submit" class="btn" value="送出" id="check">
					</p>
				</form>
			</section>
		</div>
	</div>
	<!-- footer -->
	<?php
		require_once("footer.php");
	?>

</body>
</html>