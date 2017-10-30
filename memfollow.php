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
			<!-- 我的追蹤 -->
			<h1><img src="img/memimg/myfollowtl.svg" alt="我的追蹤"></h1>
			<section class="col-xs-12 col-sm-3 section1000">
		<?php 
		$memNo = $_SESSION["memNo"];
		try{
			require_once("php/PDO/connectPDO.php");
			$selectFollowSQL = "SELECT s.SI_NUM,s.SI_NAME,s.SI_PHONE,s.SI_BIMG_1,s.SI_ADDR,SUBSTRING(f.FL_TIME,1,10) followTime,COUNT(f.FL_TIME) followers,ROUND(AVG(r.REVIEWS),1) reviews,f.SI_NUM ,r.SI_NUM FROM store_imformation s JOIN follow f ON s.SI_NUM = f.SI_NUM JOIN reviews r ON s.SI_NUM=r.SI_NUM WHERE f.MEM_NO='$memNo' AND s.SI_NUM = r.SI_NUM GROUP BY s.SI_NUM ";
			$selectFollow = $connectPDO->query($selectFollowSQL);
			while ( $selectFollowRow = $selectFollow->fetchObject() ){
				$shopBgd = (isset($selectFollowRow->SI_BIMG_1))?$selectFollowRow->SI_BIMG_1:"default";
		 ?>
				<div class="myfollow">
					
					<a href="storeBrowse.php?storeId=<?php echo $selectFollowRow->SI_NUM; ?>"><img src="img/storeBgImg/<?php echo $shopBgd;?>"><h2><?php echo $selectFollowRow->SI_NAME ; ?></h2></a>
					<ul>
						<?php 
							$starAmt = $selectFollowRow->reviews;
							for ($i=1; $i<$starAmt ; $i++) { 
								echo '<li class="star"><img src="img/memimg/star2.svg"></li>';
							}
						 ?>
					</ul>
					<a href="php/member/track/cancelFollow.php?SI_NUM=<?php echo $selectFollowRow->SI_NUM;?>" id="cancelfollow" class="btn50" id="cancelfollow">
						<img src="img/memimg/follow3.svg">
					</a>
					<address>
						<ul>
							<li>電話：<?php echo $selectFollowRow->SI_PHONE ; ?></li>
                            <li>地址：<?php echo $selectFollowRow->SI_ADDR ; ?></li>
						</ul>
					</address>
					<a href="javascript:;" class="btn50" id="mappointer">
						<img src="img/memimg/mappointer2.svg">
					</a>
					<time>
                    	收藏日期：<?php echo $selectFollowRow->followTime ; ?>
                    </time>
				</div>

		<?php 
			}//while
		}catch(PDOException $ex){
				echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
				echo "行號：",$ex->getLine(),"<br>";
		}


		?>

			</section>

		</div>
	</div>	
	<!-- footer -->
	<?php
		require_once("footer.php");
	?>
<script type="text/javascript">
	$(function(){
		$("#cancelfollow").click(function(e){
				e.preventDefault();
				$.sweetModal.confirm('取消追蹤?', function() {
            		theme: $.sweetModal.THEME_DARK,
					$.sweetModal({
						content: '修改完成',
						icon: $.sweetModal.ICON_SUCCESS,
						width: '300px',
						theme: $.sweetModal.THEME_MIXED,
						timeout: 1000,
						onClose: function(){
							var link = $("#cancelfollow").attr('href');
			              	location.href=link; 
			           	}
		        	});
				});
		});
	});


</script>
</body>
</html>