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
	<link rel="stylesheet" type="text/css" href="css/BActivityContent.css">


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


			<?php 
					try{
						require_once("php/pdo/connectPDO.php");
						$AcNo=$_REQUEST["AcNo"];
						$sql="select * from activity,store_imformation where Ac_No='$AcNo' and activity.AC_STORE_NUM=  store_imformation.SI_NUM";
						$activity=$connectPDO->query($sql);
						$prodRow = $activity->fetchObject();







			 ?>

				
			<table>
				
				<tr class="tabletitle" >
					<!-- <th colspan="2">新增商品</th> -->
				</tr>

				<tr>
				<th>申請商家</th>
				<td><?php echo $prodRow->SI_NAME; ?></td>
				</tr>

				<tr>
				<th>活動主題</th>
				<td><?php echo $prodRow->AC_NAME; ?></td>
				</tr>

				<tr>
				<th>活動副標</th>
				<td><?php echo $prodRow->AC_SECOND_NAME; ?></td>
				</tr>



				<tr>
				<th>活動日期</th>
				<td><?php echo $prodRow->AC_TIME; ?></td>
				</tr>

				<tr>
				<th>店家地址</th>
				<td><?php echo $prodRow->AC_ADDRESS; ?></td>
				</tr>

				<tr>
				<th>費用</th>
				<td><?php echo $prodRow->AC_PRICE; ?></td>
				</tr>
			
				<tr>
				<th>人數</th>
				<td><?php echo $prodRow->AC_MEM_COUNT; ?>人</td>
				</tr>

				<tr>
				<th>材料</th>
				<td><?php echo $prodRow->AC_INGREDIENT; ?></td>
				</tr>

				<tr>
				<th>目的</th>
				<td><?php echo $prodRow->AC_DETAIL1; ?></td>
				</tr>

				<tr>
				<th>詳情</th>
				<td><?php echo $prodRow->AC_DETAIL2; ?></td>
				</tr>

				<tr>
				<th>食材準備</th>
				<td><?php echo $prodRow->AC_DETAIL3; ?></td>
				</tr>

				



				<tr>
					<th>宣傳背景</th>
					<td>
						<img src="img/store/activity/banner/<?php echo $prodRow->AC_BANNER1; ?>">
						<img src="img/store/activity/banner/<?php echo $prodRow->AC_BANNER2; ?>">
					</td>
				</tr>

			
				<tr>
					<th>活動相關照片</th>
					<td>
						<img src="img/store/activity/activity/<?php echo $prodRow->AC_PIC1; ?>">
						<img src="img/store/activity/activity/<?php echo $prodRow->AC_PIC2; ?>">
						<img src="img/store/activity/activity/<?php echo $prodRow->AC_PIC3; ?>">
					</td>
				</tr>

			
				<tr>
					<th>成品照片</th>
					<td>
						<img src="img/store/activity/product/<?php echo $prodRow->AC_PRODUCT_PIC1; ?>">
						<img src="img/store/activity/product/<?php echo $prodRow->AC_PRODUCT_PIC2; ?>">
						<img src="img/store/activity/product/<?php echo $prodRow->AC_PRODUCT_PIC3; ?>">
					</td>
				</tr>

				
				<tr>
				<th>材料照片</th>
					<td>
						<img src="img/store/activity/ingredient/<?php echo $prodRow->AC_INGREDIENT_PIC1; ?>">
						<img src="img/store/activity/ingredient/<?php echo $prodRow->AC_INGREDIENT_PIC2; ?>">
						<img src="img/store/activity/ingredient/<?php echo $prodRow->AC_INGREDIENT_PIC3; ?>">
					</td>
				</tr>

			
			</table>	

		

		</div>  <!-- content-table -->
			

		<div class="commit">
			<form method="get" action="php/backstage/activity/commit.php" id="btnForm">

				
					<input type="submit" name="AcRebut" value="駁回" class="submit">
				
					<input type="submit" name="AcPass" value="核准" class="submit">
				
					<input type="hidden" name="AC_NO" value="<?php echo $prodRow->AC_NO ;?>">
			</form>	
		</div>


			<?php
					}catch (PDOException $e) {
					echo "錯誤行號 : ", $e->getLine(), "<br>";
					echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
					}

			?>
		

			
</div> <!-- tableArea -->

	<!-- <script type="text/javascript">
					$(document).ready(function(){


						$( ".submit" ).click(function() {

							

						  		$( "#btnForm" ).submit();

						  	
						});

					});	
				</script>  -->  <!-- 搜索輸入成功就送出 -->

</body>
</html>