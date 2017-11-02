<?php 

ob_start();

session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>TrePun</title>
    <link rel="icon" href="img/trepun4.png">
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/shopUp.css">

	
	



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


	<!-- 	</div> -->

		<div class="tableArea">



			<form method="" action="">

			<!-- =====表格內容===== -->
			<!-- <section> -->

			<div class="search">
				<input type="text" name="" placeholder="請輸入帳號或姓名搜尋">
				<img src="img/icon/BS_search.png">
			</div>

			<div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>店家編號</td>
						<td>店家店名</td>
						<td>店長ID</td>
						<td>店長姓名</td>
						<td>店家資訊</td>
						<td>店家狀態</td>
					</tr>	
				</table>
			</div>
			
				
				<table class="tableContent">

				<?php

					try{
						require_once("php/pdo/connectPDO.php");

						$sql = "select *
								from store_imformation 
								left join member 
								on store_imformation.SI_MEMNO = member.MEM_NO
								where store_imformation.SI_TYPE = 0
								group by store_imformation.SI_NUM
								order by SI_NUM DESC";

						$shopinfo = $connectPDO->query($sql);

						while ($shopinfo_row = $shopinfo->fetchObject()) {
					
				 ?>
					
					<tr>
						<td><?php echo $shopinfo_row->SI_NUM; //店家編號?></td>
						<td><?php echo $shopinfo_row->SI_NAME; //店家店名?></td>
						<td><?php echo $shopinfo_row->SI_MEMNO; //店長ID?></td>
						<td><?php echo $shopinfo_row->MEM_NAME; //店長姓名?></td>
						<td><a href="shopUpContent.php?SI_NUM=<?php echo $shopinfo_row->SI_NUM ; ?>">內容</a></td>
						<td>
							<?php 

						$checkit = $shopinfo_row->SI_SELLSTAY ;

						if($checkit==1){ echo "上架"; }
						else if($checkit==0){ echo "<font color='#e03838'>下架</font>"; } ?>

						</td>
					</tr>				
					
				
			<!-- </section> -->
			<!-- =====表格內容===== end-->
			
			<?php
			}//while

			echo "</table>";

			//↓try
			} 	catch (PDOException $e) {
					echo "錯誤原因 : " , $e->getMessage(),"<br>";
					echo "行號 : " , $e->getLine(),"<br>";	
				}

			 ?>
			
			

			</form>
			<!-- </div> -->
		</div> <!-- tableArea -->









<!-- ======================================================footer 頁尾========================================================= -->



</body>
</html>