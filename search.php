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
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<!-- js區 -->
	 <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
	 <script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
	 <script type="text/javascript" src="js/header.js"></script>
	<!-- map區 -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZlV8XEYyGoIi9poFgwFzwc5X_rfvtXsE&callback"></script>
	<script src="js/search.js"></script>
</head>
<body>

<?php require_once("header.php");?>  


<?php 
		$shopPosition='';
		$filter='';
		$searchName='';
	
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

		$shopType=0;  //店家 0  胖小車1
	

		$searchsql="select s.SI_NUM, s.SI_NAME,s.SI_TYPE,s.SI_LNG,s.SI_LAT,s.SI_POSITION,s.SI_ADDR,s.SI_STARTTIME,s.SI_ENDTIME,s.SI_BIMG_1,s.SI_PHONE,s.SI_AVG_REVIEW,COUNT(f.MEM_NO) top from store_imformation s JOIN follow f ON f.SI_NUM=s.SI_NUM JOIN reviews r ON r.SI_NUM = s.SI_NUM where  SI_TYPE='$shopType' ";	
			if ($shopPosition!=='') {
				$searchsql.=" and SI_POSITION = '$shopPosition'";
			}
			if ($searchName!==''  ) {
				$searchsql.=" and SI_NAME like '%$searchName%'";
			}
			
			$searchsql.= " group by s.SI_NUM";
			
			if ($filter!=='' && $filter=="top"){
				$searchsql.=" order by top desc"; 
			}
			if ($filter!=='' && $filter=="star"){
				$searchsql.=" order by star desc"; 
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
				
			
		</div>  <!-- search_result -->


			<?php if ($search->rowCount()==0){

		 ?>
			<div class="none_store">
				
				<h1>沒有搜尋到相符店家，請重新搜索</h1>

			</div>




		<?php }else{ ?>








		<div class="search_store">
			<?php 
			while($searchRow=$search->fetchObject()){	

				?>
			
					

			<script>
				$(document).ready(function (){
					$('.search_storeImg').css('background','url("img/store/banners/<?php echo $searchRow->SI_BIMG_1; ?>") center center').css('background-size','cover');			


				});
			</script>

			<div class="search_storeOne">
				<div class="search_storeImg col-sm-3 col-xs-12">
					<!-- <img src="img/search-store.png"> -->
				</div>
				<div class="search_storeContent col-sm-6 col-xs-12">
					<h2><a href="shopB.php?storeId='<?php $searchRow->SI_NUM ?>'"><?php echo "$searchRow->SI_NAME "; ?></a></h2>
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
							<!-- <li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li>
							<li><img src="img/icon/star.svg"></li> -->
						</ul>
					</div>
					<div class="search_storeInfor ">
						<ul>
							<li>電話： <?php echo "$searchRow->SI_PHONE"; ?></li>
							<li>地址：  <?php echo "$searchRow->SI_ADDR"; ?></li>		
							<li>營業時間： <?php echo "$searchRow->SI_STARTTIME"; ?>:00~<?php echo "$searchRow->SI_ENDTIME"; ?>:00</li>
						</ul>
					</div>
				</div>
				<div class="search_storeMap col-sm-3 col-xs-12">
		
					


				
				<?php 	
						if ($searchRow->SI_LNG!="" and $searchRow->SI_LAT!="") {
				?>
					<script type="text/javascript">
							$(document).ready(function (){
							initBreadCarNowLocationMap("map-now-<?php echo "$searchRow->SI_NUM";?>",<?php echo "$searchRow->SI_LAT";?>,<?php echo "$searchRow->SI_LNG";?>);
							});
					</script>
					<div id="map-now-<?php echo "$searchRow->SI_NUM";?>" class="search_map">				
					</div>
			 
				<?php } else { ?>
					<div class="noneMap">
						<p>沒有提供地圖</p>
					</div>	
				<?php } ?>

				</div>
			</div>   <!-- search_storeOne -->

			<?php } ?> <!-- while迴圈 -->




		</div>  <!-- search_store -->
		<?php } ?>    <!-- 有找到店家if -->

	</div>


		<?php
		}catch (PDOException $e) {
		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
		}
	 ?>



	<?php require_once("footer.php");?>

	<script type="text/javascript" src="js/search.js"></script>
</body>
</html>