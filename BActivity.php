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
	<link rel="stylesheet" type="text/css" href="css/BActivity.css">

	
	



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


	


	<!-- =====表格內容===== -->
			<!-- <section> -->


	<form method="get" action="php/backstage/activity/searchId.php " id="searchForm">

			
			<div class="search">


					<input type="text" name="searchIdName" placeholder="請輸入活動編號或店家編號" id="searchIdName">
					<img src="img/icon/BS_search.png " id="searchIcon">
			

				<script type="text/javascript">
					$(document).ready(function(){


						$( "#searchIcon" ).click(function() {

							if($( "#searchIdName" ).val().length!=0){

						  		$( "#searchForm" ).submit();

						  	}else{
						  		alert ("沒有輸入任何關鍵字");
						  	}
						});

					});	
				</script>   <!-- 搜索輸入成功就送出 -->


			</div>

	</form>

<!-- =================================================================== -->
			<div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>活動編號</td>
						<td>店家編號</td>
						<td>活動名稱</td>
						<td>活動日期</td>
						<td>活動內容</td>
						<td>審核狀態</td>
					</tr>	
				</table>
			
			</div>	
				<table class="tableContent">


			<?php

				try{

					require_once("php/pdo/connectPDO.php");




				



// ================================================================================


					if (isset($_REQUEST["searchIdName"])){


						$searchIdName=$_REQUEST["searchIdName"];

						$sql = "select * from activity,store_imformation where AC_STORE_NUM=SI_NUM and (AC_NO=:searchId or AC_STORE_NUM=:searchId)" ; 

						$activity= $connectPDO->prepare($sql);
						$activity->bindValue(":searchId",$searchIdName);
						$activity->execute();

				}else{
						$sql ="select * from activity,store_imformation where AC_STORE_NUM=SI_NUM";

					$activity= $connectPDO->query($sql);
				}










					while($prodRow = $activity->fetchObject()){
			
			?>
					
					<tr>
						<td><?php echo $prodRow->AC_NO; ?></td>
						<td><?php echo $prodRow->AC_STORE_NUM ;?></td>
						
						<td><?php echo $prodRow->AC_NAME; ?></td>
						<td><?php echo $prodRow->AC_TIME; ?></td>

						
						<td><form method="get" action="BActivityContent.php" id="searchForm">


							<input id="activityCont" type="submit" name="" value="內容">
							<input type="hidden" name="AcNo" value="<?php echo $prodRow->AC_NO ;?>">	


						</form></td>
						
						<?php 
								$re=$prodRow->AC_CHECKSTAY;
							
								if ($re=="0") {
									
						?>	

								<td class="noAudit"  style="color:#cc4e4e">不通過</td>

								
						<?php  

								}elseif ($re=='1'){

							?>
								<td class="noAudit"  style="color:#53c453">通過</td>
							<?php 
									}else{
						?>
							
								<td>未審核</td>
						<?php	
							} 
						?>	

						
							
				

					</tr>




					
				

		<?php
				
				}//while






			}catch(PDOException $e) {
				echo "錯誤行號 : ", $e->getLine(), "<br>";
				echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
				}

		?>

			<!-- 	
					
				

					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="fail">駁回</td>
				

					</tr> -->

					
					

			

					
					
				</table>
			<!-- </section>
			<!  =====表格內容===== end-->


			
			
			
				
		
			
		</div> <!-- tableArea -->

	


	<!-- </div> --><!-- container -->
	









	
	</script>

</body>
</html>