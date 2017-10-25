<?php 

ob_start();

session_start();

 ?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>TEMPLATE</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/BBusinessMemberContent.css">


		<!-- =======header&sideBar======= -->
	<link rel="stylesheet" type="text/css" href="css/BackStageHeaderSidebar.css">



	<!-- =======inputChange======= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="js/inputChange.js"></script> -->


</head>
<body>

<!-- ======================================================header 頁首========================================================= -->



<?php 

	require_once("BackStageHeaderSidebar.php");


	try{



			require_once("php/pdo/connectPDO.php");

			$MEM_ID = $_GET["MEM_ID"];

			$sql = "select * from store_imformation where SI_MEMNO=$MEM_ID";

			$store_imformation = $pdo->query($sql);

			$store_imformationRow=$store_imformation->fetchObject();


?>

<div class="tableArea">


			<div class="content-table">
				
			<table>
				
				<tr class="tabletitle" >
					<!-- <th colspan="2">新增商品</th> -->

				

				</tr>



				<tr>
				<th>商家店名</th>
				<td><?php echo $store_imformationRow->SI_NAME; ?></td>
				</tr>


				<tr>
				<th>商家狀態</th>
				<?php 

					$SI_CHECKSTAY=$store_imformationRow->SI_CHECKSTAY;

					if($SI_CHECKSTAY==NULL){

				 ?>		
				
					<td style="color:#565894">未審核</td>		

				<?php 

					}else if($SI_CHECKSTAY==1){//if($SI_CHECKSTAY==NULL)

				?>
						
					<td style="color:#53c453">核准</td>

				<?php

					}else if($SI_CHECKSTAY==0){//if($SI_CHECKSTAY==0)


				?>

					<td style="color:#cc4e4e">駁回</td>

				<?php

					}//if($SI_CHECKSTAY==1)

				 ?>
				</tr>



				<tr>
				<th>商家型態</th>
				<td>
					
					<?php 

						$SI_TYPE=$store_imformationRow->SI_TYPE;

					   if($SI_TYPE==0){
					   	echo"店家";
					   }else{
					   	echo"麵包車";
					   }

					 ?>

				</td>
				</tr>




				<tr>
				<th>商家電話</th>
				<td><?php echo $store_imformationRow->SI_PHONE; ?></td>
				</tr>

				<tr>
				<th>店家地址</th>
				<td><?php echo $store_imformationRow->SI_ADDR; ?></td>
				</tr>

				<tr>
				<th>營利事業登記証</th>
				<td><?php echo $store_imformationRow->SI_COMFIRM_ID; ?></td>
				</tr>



				<!-- <tr>
				<th>胖小車照片</th>
				<td><img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder"></td>
				</tr> -->


			</table>	



			


		</div>  <!-- content-table -->
			

		<div class="commit">

		<?php 

			$SI_CHECKSTAY=$store_imformationRow->SI_CHECKSTAY;

			if($SI_CHECKSTAY==NULL){

		 ?>		
		
				<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
					<input type="hidden" name="storeChargeZero" value="<?php echo $store_imformationRow->SI_NUM; ?>">
					<input type="submit" class="dutyChange" name="" value="駁回">
				</form>
			
				<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
					<input type="hidden" name="storeChargeOne" value="<?php echo $store_imformationRow->SI_NUM; ?>">
					<input type="submit" class="dutyChange" name="" value="核准">
				</form>

		<?php 

			}else if($SI_CHECKSTAY==1){//if($SI_CHECKSTAY==NULL)

		?>
				
				<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
					<input type="hidden" name="storeChargeZero" value="<?php echo $store_imformationRow->SI_NUM; ?>">
					<input type="submit" class="dutyChange" name="" value="駁回">
				</form>
			
				<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
					<input type="hidden" name="storeChargeOne" value="<?php echo $store_imformationRow->SI_NUM; ?>">
					<input type="submit" class="dutyChange disableBtn" name="" value="核准" disabled>
				</form>

		<?php

			}else if($SI_CHECKSTAY==0){//if($SI_CHECKSTAY==0)


		?>

			<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
					<input type="hidden" name="storeChargeZero" value="<?php echo $store_imformationRow->SI_NUM; ?>">
					<input type="submit" class="dutyChange disableBtn" name="" value="駁回" disabled>
				</form>
			
				<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
					<input type="hidden" name="storeChargeOne" value="<?php echo $store_imformationRow->SI_NUM; ?>">
					<input type="submit" class="dutyChange" name="" value="核准">
				</form>


		<?php

			}//if($SI_CHECKSTAY==1)

		 ?>
			
		</div>
			
</div> <!-- tableArea -->


	<?php			



							}catch( PDOException $ex){
						  		echo "行號: ",$ex->getLine(), "<br>";	
						  		echo "訊息: ",$ex->getMessage() , "<br>";	
							}//catch


	?>


<script type="text/javascript">
	
	$(function(){


   $(".dutyChange").click(function(){

       

        $(this).toggleClass("disableBtn");

        if($(this).hasClass("disableBtn")){
          
         	$(this).siblings().removeClass("disableBtn");

        }else{

    		$(this).siblings().addClass("disableBtn");
          
        }


    });


});


</script>
	

</body>
</html>