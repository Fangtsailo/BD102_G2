<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>胖小車資訊</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/carUpContent.css">


		<!-- =======header&sideBar======= -->
	<link rel="stylesheet" type="text/css" href="css/BackStageHeaderSidebar.css">



	<!-- =======inputChange======= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/inputChange.js"></script>


</head>
<body>

<!-- ======================================================header 頁首========================================================= -->



<?php 

require_once("BackStageHeaderSidebar.php");

 ?>

<div class="tableArea">


			<div class="content-table">
				
			<table>
				
				<tr class="tabletitle" >
				</tr>

				<?php 

				$SI_NUM = $_REQUEST['SI_NUM'];

				try{

					require_once("php/pdo/connectPDO.php");

					$sql = "select *
							from store_imformation 
							left join reviews on store_imformation.SI_NUM = reviews.SI_NUM
							left join follow on store_imformation.SI_NUM = follow.SI_NUM
							left join product on store_imformation.SI_NUM = product.PD_SHOPNO
							where store_imformation.SI_NUM=$SI_NUM
							group by store_imformation.SI_NUM"; 
					
					$shop = $connectPDO->query( $sql );

					$sqlnogb = "select *
							from store_imformation
							left join product 
							on store_imformation.SI_NUM = product.PD_SHOPNO
							where SI_NUM=$SI_NUM;";

					$storenogb = $connectPDO->query( $sqlnogb );

					while ( $shop_row = $shop->fetchObject() ) {

				 ?>

				<tr>
				<th>胖小車名稱</th>
				<td><?php echo $shop_row->SI_NAME; ?></td>
				</tr>

<!-- 				<tr>
				<th>胖小車資訊</th>
				<td></td>
				</tr> -->

				
				<tr>
				<th>營業時間</th>
				<td>
					公休日　<?php 
					if($shop->rowCount()!=0){
					$SI_RESTDAY=$shop_row->SI_RESTDAY;
					$SI_RESTDAY_ARY=explode(",",$SI_RESTDAY);

					}else{
						$SI_RESTDAY=",,,,,,,";
						$SI_RESTDAY_ARY=explode(",",$SI_RESTDAY);
					}

					if(in_array('1',$SI_RESTDAY_ARY)){
								echo '<span id="week_1" >星期ㄧ &nbsp</span>';
							}
					if(in_array('2',$SI_RESTDAY_ARY)){
								echo '<span id="week_2" >星期二 &nbsp</span>';
							}
					if(in_array('3',$SI_RESTDAY_ARY)){
								echo '<span id="week_3" >星期三 &nbsp</span>';
							}
					if(in_array('4',$SI_RESTDAY_ARY)){
								echo '<span id="week_4" >星期四 &nbsp</span>';
							}
					if(in_array('5',$SI_RESTDAY_ARY)){
								echo '<span id="week_5" >星期五 &nbsp</span>';
							}
					if(in_array('6',$SI_RESTDAY_ARY)){
								echo '<span id="week_6" >星期六 &nbsp</span>';
							}
					if(in_array('7',$SI_RESTDAY_ARY)){
								echo '<span id="week_7" >星期日 &nbsp</span>';
							}
					if(in_array('0',$SI_RESTDAY_ARY)){
								echo '<span id="week_0" >國定假日　<spanv>';
							}

					 ?><br>
					營業時間　<?php echo $shop_row->SI_STARTTIME; ?>:00 - <?php echo $shop_row->SI_ENDTIME; ?>:00
				</td>
				</tr>

				<tr>
				<th>商家電話</th>
				<td><?php echo $shop_row->SI_PHONE ; ?></td>
				</tr>

				<?php
					$sql_path = "select *
								from store_imformation 
								left join bread_car_path
								on store_imformation.SI_NUM = bread_car_path.BCP_STORE_NUM
								where store_imformation.SI_TYPE = 1
								and store_imformation.SI_NUM = $SI_NUM";
					$path = $connectPDO->query( $sql_path );
					

				 ?>

				<tr>
				<th>出沒位置</th>
				<td>
					<?php
					while ( $path_row = $path->fetchObject()) {
						echo $path_row->BCP_LOCATION,"<br>";

					 } ?>
				</td>
				</tr>

				<tr>
				<th>商家故事</th>
				<td><?php echo $shop_row->SI_STORY; }//while ?></td>
				</tr>

				<?php 

				$sql_review = "select round(AVG(ifnull(REVIEWS,0)),1) rrr
								from store_imformation 
								left join reviews on store_imformation.SI_NUM = reviews.SI_NUM
								where store_imformation.SI_NUM = $SI_NUM ";

				$review = $connectPDO->query( $sql_review );

				while ( $review_row = $review->fetchObject() ) {

				 ?>

				<tr>
				<th>評價分數</th>
				<td><?php echo $review_row->rrr ; } ?> <span>分</span></td>
				</tr>

				<?php 
				$sql_follow = "select count(follow.MEM_NO) fff
								from store_imformation 
								left join follow
								on store_imformation.SI_NUM = follow.SI_NUM
								where store_imformation.SI_NUM = $SI_NUM
								group by store_imformation.SI_MEMNO";
				$follow = $connectPDO->query( $sql_follow );
				
				while ( $follow_row = $follow->fetchObject() ) {

				 ?>

				<tr>
				<th>追蹤人數</th>
				<td><?php echo $follow_row->fff ; } ?> <span>人</span></td>
				</tr>

				<tr>
				<th>商品資訊</th>
				<td>
					<?php 
						while ( $storenogb_row = $storenogb->fetchObject() ) {
						echo "商品編號 ",$storenogb_row->PD_NO,"<br>";
						echo "商品名稱 ",$storenogb_row->PD_NAME,"<br>";
						echo "商品介紹 ",$storenogb_row->PD_INTRO,"<br>";
						echo "商品價格 ",$storenogb_row->PD_PRICE,"<br>";
						echo "商品照片 ",$storenogb_row->PD_PIC,"<br>"; }//while ?>
				</td>
				</tr>




			</table>	

			<?php 

			//echo "</table>";

			} catch (PDOException $e) {
				echo "錯誤原因 : " , $e->getMessage(),"<br>";
				echo "行號 : " , $e->getLine(),"<br>";	
			}	

			?>



			


		</div>  <!-- content-table -->
			

		<div class="commit">		
			<form action="php/backstage/OKORNOT_carup.php">
				<input type="hidden" name="si_num" value="<?php echo $SI_NUM; ?>">
				<input type="submit" name="noooo" value="駁回">
				<input type="submit" name="okooo" value="核准">
			</form>
		</div>
			
</div> <!-- tableArea -->

	

</body>
</html>