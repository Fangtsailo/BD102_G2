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

	<?php
		//是否接到beBossUpdateToDb.php回傳的info?    有就傳此值  :沒有傳""
    	$info = isset($_REQUEST["info"]) ?  $_REQUEST["info"] :"";
	?>
	<script type="text/javascript">
		//宣告var info來接php的$info
		var info = '<?php echo $info; ?>' ;		
		$(document).ready(function(){
			if ( info == "ok" ) {
				$.sweetModal({
					content: '表單已送出！請靜候我們的聯絡！',
					icon: $.sweetModal.ICON_SUCCESS,
					width: '600px',
					theme: $.sweetModal.THEME_MIXED,
				});
			}
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
			<!-- 成為店長_第三頁 -->
			<h1><img src="img/memimg/bebosstl.svg" alt="成為店長"></h1>
			<section class="col-xs-12 col-sm-12 section1000">
				<h1>繼續完成店長資料登錄</h1>
				<p>完成後請按送出，<br>我們將與您進行審核作業！</p>

				<?php
				
				// phpinfo();

				$siType=isset($_SESSION["SI_TYPE"])? $_SESSION["SI_TYPE"] : "";
				$siName=isset($_SESSION["SI_NAME"])? $_SESSION["SI_NAME"] : "";
				
				try {
				require_once("php\pdo\connectPDO.php");

				//取得資料庫中符合店長編號為空值的資料
				$sql = "select * from store_imformation where SI_TYPE='$siType' and SI_NAME='$siName' and SI_MEMNO is null";

				//用query();把從$sql取得的資料放在$siQuery
				$siQuery = $connectPDO->query($sql);

				//用fetchObject();取出此店資料並放到$siQueryRow陣列中
				$siQueryRow = $siQuery->fetchObject();

				//宣告$siPhone變數以便從資料庫取出電話
				// $siPhone = $siQueryRow->SI_PHONE;
				?>

				<form class="form-horizontal" action="php\member\beBossUpdateToDb.php" method="get">
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
						<label for="SI_COMFIRM_ID"><span class="required">*</span>車牌號碼</label>
						<input type="text" name="SI_COMFIRM_ID" placeholder="輸入格式:KAQ-230" autofocus>
					</p>
					<p>
						<label for="MEM_REALNAME"><span class="required">*</span>店長姓名</label>
						<input type="text" name="MEM_REALNAME" placeholder="輸入真實姓名">
					</p>
					<!-- <p>
						<label for="SI_PHONE"><span class="required">*</span>電&nbsp;&nbsp;話</label>
						<input type="tel" name="SI_PHONE" value=" --><?php 
							// if ($siPhone != ""){
							// 	echo $siQueryRow->SI_PHONE; 
							// }else{
							// 	echo "輸入市話或手機";
							// }
						?><!-- " >
					</p> -->
			    	<input type="submit" value="送出">
				</form>

				<?php
				}catch(PDOException $e){
				 	echo "錯誤原因 : " , $e->getMessage(),"<br>";
					echo "行號 : " , $e->getLine(),"<br>";
				 }//catch end
				?>
			</section>
		</div>
	</div>

	<!-- footer -->
	<?php
		require_once("footer.php");
	?>

</body>
</html>