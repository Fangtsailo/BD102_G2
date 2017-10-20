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
	<link rel="stylesheet" type="text/css" href="css/BOrdinaryMember.css">


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


			<!-- =====表頭===== -->
			<!-- <div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>編號</td>
						<td>帳號</td>
						<td>電子信箱</td>
						<td>姓名</td>
						<td>電話</td>
						<td>違規次數</td>
						<td>權限狀態</td>
						<td>權限修改</td>
					</tr>	
				</table>
			</div> -->
			<!-- =====表頭===== end-->





			

			<!-- =====表格內容===== -->
			<!-- <section> -->

			<div class="search">




					<form  id="searchForm" action="php/backstage/member/ordinary/Back_memStatus.php" method="get">

						
							<input type="text" id="searchBar" name="searchBar" placeholder="請輸入帳號或姓名搜尋">
							
							<img id="searchIcon" src="img/icon/BS_search.png">
						

					</form>


					<script type="text/javascript">
						$( "#searchIcon" ).click(function() {

							

							if($( "#searchBar" ).val().length!=0){

						  		$( "#searchForm" ).submit();

						  	}
						});
					</script>


			</div>



			<div class="tableHeaderCover">
				
				<table class="tableHeader">
					<tr>
						<td>編號</td>
						<td>帳號</td>
						<td>電子信箱</td>
						<td>姓名</td>
						<td>電話</td>
						<td>違規</td>
						<td>狀態</td>
						<td>修改</td>
					</tr>	
				</table>
			</div>
				
				<table class="tableContent">


					<?php 



						try{


		


								require_once("php/pdo/connectPDO.php");

								$sql = "select * from member where MEM_ROLE=0";

								$member = $pdo->query($sql);



								 if(isset($_GET["searchBar"])){


								 	$searchBar = $_GET["searchBar"];


								 	$sqlSearch = "select * from member where MEM_ID='$searchBar' or MEM_NAME='$searchBar'";


								 	$memberSearch = $pdo->query($sqlSearch);

								 	$memberSearchRow=$memberSearch->fetchObject();

								 	?>

									
									<tr>
									<td><?php echo $memberSearchRow->MEM_NO; ?></td>
									<td><?php echo $memberSearchRow->MEM_ID; ?></td>
									<td><?php echo $memberSearchRow->MEM_MAIL; ?></td>
									<td><?php echo $memberSearchRow->MEM_NAME; ?></td>
									<td><?php echo $memberSearchRow->MEM_PHONE; ?></td>
									<td>9</td>
									<?php // distinguish button color by database

										$MEM_STATUS = $memberSearchRow->MEM_STATUS;

										if($MEM_STATUS==0){

									?>

												<td class="authorityName" style="color:#cc4e4e">停權</td>	

									<?php  
										
										} else{//if($EMP_STATUS==0)


									 ?>

												 <td class="authorityName">正常</td>

									<?php  
										
										} //else
									 ?>








									<td>
										<?php // distinguish button color by database

											$MEM_STATUS = $memberSearchRow->MEM_STATUS;

											if($MEM_STATUS==0){

										?>
										
										<form action="php/backstage/member/ordinary/Back_memStatus.php" method="get">
										<input type="hidden" name="dutyOne" value="<?php echo $memberSearchRow->MEM_ID; ?>">
										<input type="submit" class="dutyChange dutyColorChange" name="" value="復原">
										</form>

										

										

										<?php  
											
											} else{//if($EMP_STATUS==0)


										 ?>
										
										<form action="php/backstage/member/ordinary/Back_memStatus.php" method="get">
										 <input type="hidden" name="dutyZero" value="<?php echo $memberSearchRow->MEM_ID; ?>">
										 <input type="submit" class="dutyChange" name="" value="停權">
										 </form>




										<?php  
											
											} //else


										 ?>
									</td>



								</tr>


								 	<?php






								 }else{//if(isset($_GET["searchBar"]))
							
					

								while($memberRow = $member -> fetchObject()){

					?>	


					<tr>
						<td><?php echo $memberRow->MEM_NO; ?></td>
						<td><?php echo $memberRow->MEM_ID; ?></td>
						<td><?php echo $memberRow->MEM_MAIL; ?></td>
						<td><?php echo $memberRow->MEM_NAME; ?></td>
						<td><?php echo $memberRow->MEM_PHONE; ?></td>
						<td>




						9







						</td>


						<?php // distinguish button color by database

							$MEM_STATUS = $memberRow->MEM_STATUS;

							if($MEM_STATUS==0){

						?>

									<td class="authorityName" style="color:#cc4e4e">停權</td>	

						<?php  
							
							} else{//if($EMP_STATUS==0)


						 ?>

									 <td class="authorityName">正常</td>

						<?php  
							
							} //else
						 ?>




						<td>

											<?php // distinguish button color by database

											$MEM_STATUS = $memberRow->MEM_STATUS;

											if($MEM_STATUS==0){

										?>
										
										<form action="php/backstage/member/ordinary/Back_memStatus.php" method="get">
										<input type="hidden" name="dutyOne" value="<?php echo $memberRow->MEM_ID; ?>">
										<input type="submit" class="dutyChange dutyColorChange" name="" value="復原">
										</form>

										

										

										<?php  
											
											} else{//if($EMP_STATUS==0)


										 ?>
										
										<form action="php/backstage/member/ordinary/Back_memStatus.php" method="get">
										 <input type="hidden" name="dutyZero" value="<?php echo $memberRow->MEM_ID; ?>">
										 <input type="submit" class="dutyChange" name="" value="停權">
										 </form>




										<?php  
											
											} //else


										 ?>


						</td>
					</tr>		
					
					<!-- <tr>
						<td>101</td>
						<td>ID125</td>
						<td>ID125@gmail.com</td>
						<td>梁朝偉</td>
						<td>0939318183</td>
						<td>9</td>
						<td class="authorityName">正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr> -->
					



					<?php

					 	 
						}//while

					}//else for no search	

							}catch( PDOException $ex){
						  		echo "行號: ",$ex->getLine(), "<br>";	
						  		echo "訊息: ",$ex->getMessage() , "<br>";	
							}//catch


					  ?>
					

					
				</table>
			<!-- </section> -->
			<!-- =====表格內容===== end-->



			
			

			

		</div> <!-- tableArea -->
<!-- 
		<footer>
				<div class="square"></div>
				<section>
					<div class="square_2">
						<label><span>帳號</span><input type="text" name="" value="">
						</label>
						<label><span>密碼</span><input type="text" name="" value="">
						</label>
						<span><input type="button" name="" value="新增管理員"></span>
					</div>
				</section>
		</footer>
 -->


	<!-- </div> --><!-- container -->
	








<!-- ======================================================footer 頁尾========================================================= -->
<!-- 	<footer>
		<section>
				<label><span>帳號</span><input type="text" name="" value=""></label>
				<label><span>密碼</span><input type="text" name="" value=""></label>
				<span><input type="button" name="" value="新增管理員"></span>
			</section>
	</footer> -->
	

</body>
</html>