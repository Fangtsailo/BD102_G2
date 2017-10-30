<?php 

ob_start();

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Trepun</title>
	<link rel="stylesheet" type="text/css" href="css/search_car.css">
	<!-- js區 -->
	 <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
	 	<script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	 	<script type="text/javascript" src="js/header.js"></script>
	<!-- map區 -->

	<script type="text/javascript" src="js/search_car.js"></script>
</head>
<body>

<?php require_once("header.php");?>  


<?php 
		
		$filter='';
		$shopPosition='';
		 
		$searchName='';
		$firstCarNum = -1;//為了預設顯示第一台車的位置
		if (isset($_REQUEST["filter"])){

			
			$filter=$_REQUEST["filter"]; 
		}

		if (isset($_REQUEST["shopPosition"])) {
			
			 $shopPosition=$_REQUEST["shopPosition"];
			
		} 

		if(isset($_REQUEST["searchName"])) {
			
			$searchName=$_REQUEST['searchName'];
		}


try{
	require_once("php/pdo/connectPDO.php");
	require_once("php/common/globalVar.php");
		$shopType=1;  //店家 0  胖小車1

		$searchsql="SELECT s.SI_NUM, s.SI_NAME,s.SI_TYPE,s.SI_LNG,s.SI_LAT,s.SI_POSITION,s.SI_ADDR,s.SI_STARTTIME,s.SI_ENDTIME,s.SI_BIMG_1,s.SI_PHONE,s.SI_AVG_REVIEW,COUNT(f.MEM_NO) top FROM store_imformation s LEFT JOIN follow f ON f.SI_NUM=s.SI_NUM LEFT JOIN reviews r ON r.SI_NUM = s.SI_NUM WHERE  s.SI_TYPE='$shopType' s.SI_SELLSTAY=1 and s.SI_CHECKSTAY=1 ";	
			if ($shopPosition!=='') {
				$searchsql.=" AND s.SI_POSITION = '$shopPosition'";
			}
			if ($searchName!==''  ) {
				$searchsql.=" AND s.SI_NAME like '%$searchName%'";
			}
			
			$searchsql.= " group by s.SI_NUM";
			
			if ($filter!=='' && $filter=="top"){
				$searchsql.=" order by top desc"; 
			}
			if ($filter!=='' && $filter=="stars"){
				$searchsql.=" order by s.SI_AVG_REVIEW desc"; 
			}

			$search=$connectPDO->query($searchsql);
		
			
		
	?>



	<div class="search_content">
		<h1 class="search_title">搜尋結果</h1>
		<div class="search_result">
			<h1>找到
				<span id="numberOf"><?php echo $search->rowCount() ?></span>
				筆符合的店家</h1>
				<div class="tag-fa">
					<?php if ($searchName!==''){
					?>
						<span class="tag" ><span class="head"></span><?php echo $searchName ?></span>
					<?php
					}?>
				<!-- 	<?php //exit($shopPosition); ?> -->
					<?php if ($shopPosition!==''){
						switch ($shopPosition) {
							case "0":
								$area="北部";
								break;
							case "1":
								$area="中部";
								break;
							case "2":
								$area="南部";
								break;
							case "3":
								$area="東部";
								break;
						}
					?>
						<span class="tag" ><span class="head"></span><?php echo $area; ?></span>
					<?php
					}?>

					<?php if ($filter!=='' && $filter=="top"){
					?>
						<span class="tag" ><span class="head"></span>熱門</span>
					<?php
					}?>	

					<?php if ($filter!=='' && $filter=="star"){
					?>
						<span class="tag" ><span class="head"></span>評價</span>
					<?php
					}?>	
					
					
					
					
				</div>
				
			
		</div> <!-- search_result -->

		<?php if ($search->rowCount()==0){

		 ?>
			<div class="none_store">
				
				<h1>沒有搜尋到相符店家，請重新搜索</h1>

			</div>




		<?php }else{ ?>
			<div class="search_mapcar">
			<div id="map-now-1"></div>
			<div class="search_store">
	<?php 
			
			while($searchRow=$search->fetchObject()){	 
				if ($firstCarNum == -1) {
					$firstCarNum = $searchRow->SI_NUM;
				}
			?>
		
			
		
			
		
			


			<script type="text/javascript">
				$(document).ready(function (){
					
					$('.search_storeImg').css('background','url("<?php echo $searchRow->SI_BIMG_1=="" ? GLOBAL_STORE_BANNERS_PIC_PATH."default.png" : GLOBAL_STORE_BANNERS_PIC_PATH.$searchRow->SI_BIMG_1 ; ?>") center center').css('background-size','cover');
					$('#car-<?php echo $searchRow->SI_NUM ?>').click(function(){
						changeMapStatus($(this).attr('data-lat'), $(this).attr('data-lng'), '胖小車休息中喔!!');
						$('.search_storeOne').css("background-color","transparent");
						$(this).css("background-color","rgba(234, 178, 96, 0.5)");
					});
					$('#car-<?php echo $searchRow->SI_NUM ?>').hover(function(){
						// $('.search_storeOne').css("background-color","transparent");
						// $(this).css("background-color","rgba(234, 178, 96, 0.5)");
					});
				});

			</script>

				<div class="search_storeOne" id="car-<?php echo $searchRow->SI_NUM ?>" data-lat="<?php echo $searchRow->SI_LAT ?>" data-lng="<?php echo $searchRow->SI_LNG ?>">
						<div class="search_storeImg col-sm-5 col-xs-4"></div>
						
						<div class="search_storeContent col-sm-7 col-xs-8">
							<h2><a href="storeBrowse.php?storeId=<?php echo $searchRow->SI_NUM ?>"><?php echo "$searchRow->SI_NAME "; ?></a></h2>
							<div class="search_follow">
								<img src="img/icon/follow3.svg">	
							</div>
							<div id="search_followNum"><?php echo "$searchRow->top"; ?></div>
							<div class="search_storeStar">
								<ul>
									<?php
										for( $i=1; $i<=5; $i++){
											if( $i <= $searchRow->SI_AVG_REVIEW){
												echo '<li class="star"><img src="img/icon/star2.svg"></li>';
											}else{
												echo '<li class="star"><img src="img/icon/star3.svg"></li>';
											}
										}
									?>
								</ul>
							</div>
							<div class="search_storeInfor ">
								<ul>
									<li>電話： <?php echo "$searchRow->SI_PHONE"; ?></li>
									<li>地址： <?php echo "$searchRow->SI_ADDR"; ?>
										</li>
									<li>營業時間： <?php echo "$searchRow->SI_STARTTIME"; ?>:00~<?php echo "$searchRow->SI_ENDTIME"; ?>:00</li>
								</ul>
							</div>
						</div>
						
				</div> <!-- search_storeOne -->
	
			<?php } ?>    <!-- while迴圈 -->
				
						
			</div>  <!-- search_store -->

		
		</div>  <!-- search_mapcar -->
		<?php } ?>  <!-- 有找到店家if -->

	</div>  <!-- search_content -->

	<?php
		}catch (PDOException $e) {
		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
		}
	 ?>



<script>
$(document).ready(function (){
	<?php if ($search->rowCount()!==0){

		 ?>

	initBreadCarNowLocationMap("map-now-1");
	<?php
		}
	 ?>
	<?php 
		if ($firstCarNum != -1) {
	?>
			$('#car-<?php echo $firstCarNum ?>').click();
	<?php
		}
	 ?>
});
</script>
	<?php require_once("footer.php");?>
</body>
</html>