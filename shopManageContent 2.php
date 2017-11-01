<?php 

ob_start();

session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>審核新增店家_內容資訊</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/shopManageContent.css">


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
							left join product 
							on store_imformation.SI_NUM = product.PD_SHOPNO
							where SI_NUM=$SI_NUM
							group by store_imformation.SI_NUM;";
					
					$store = $connectPDO->query( $sql );

					$sqlnogb = "select *
							from store_imformation
							left join product 
							on store_imformation.SI_NUM = product.PD_SHOPNO
							where SI_NUM=$SI_NUM;";
					
					$storenogb = $connectPDO->query( $sqlnogb );

					while ( $store_row = $store->fetchObject() ) {
				
				 ?>

				<tr>
				<th>商家名稱</th>
				<td><?php echo $store_row->SI_NAME; ?></td>
				</tr>

				<tr>
				<th>店家地址</th>
				<td><?php echo $store_row->SI_ADDR; ?></td>
				</tr>

				<tr>
				<th>營業時間</th>
				<td>
					公休日　星期<?php echo $store_row->SI_RESTDAY; ?><br>
					營業時間　<?php echo $store_row->SI_STARTTIME; ?>:00 - <?php echo $store_row->SI_ENDTIME; ?>:00
				</td>
				</tr>

				<tr>
				<th>商家電話</th>
				<td><?php echo $store_row->SI_PHONE; ?></td>
				</tr>

<!-- 			<tr>
				<th>出沒位置</th>
				<td></td>
				</tr> -->

				<tr>
				<th>商家故事</th>
				<td><?php echo $store_row->SI_STORY; }//while ?></td>
				</tr>

				<!-- <tr>
				<th>評價分數</th>
				<td>  <span>分</span></td>
				</tr>

				<tr>
				<th>追蹤人數</th>
				<td>  <span>人</span></td>
				</tr> -->

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

<!-- 				<tr>
				<th>商品資訊</th>
				<td><?php $store_row //= $store->fetchAll(PDO::FETCH_ASSOC);
					//foreach( $store_row as $i=>$store_row ){
					//	echo $store_row["PD_NO"]; 
					//	echo $store_row["PD_PRICE"];
					//	echo $store_row["PD_PIC"];
					//	echo $store_row["PD_NAME"];
					//	echo $store_row["PD_INTRO"]; }
				 ?></td>
				</tr> -->


			<?php 

			echo "</table>";

			} catch (PDOException $e) {
				echo "錯誤原因 : " , $e->getMessage(),"<br>";
				echo "行號 : " , $e->getLine(),"<br>";	
			}	

			 ?>


		</div>  <!-- content-table -->



		<div class="commit">

			<form action="php/backstage/OKORNOT.php" method="get">	
				<input type="hidden" name="si_num" value="<?php echo $SI_NUM; ?>">
				<input type="submit" name="refuseone" value="駁回">
				<input type="submit" name="okone" value="核准">
			</form>
			

		</div>






			
</div> <!-- tableArea -->

	

</body>
</html>