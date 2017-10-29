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
	<link rel="stylesheet" type="text/css" href="css/BBusinessMember.css">


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




					<form  id="searchForm" action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">

						
							<input type="text" id="searchBar" name="searchBar" placeholder="請輸入帳號或姓名搜尋">
							
							<img id="searchIcon" src="img/icon/BS_search.png">
						

					</form>


					<script type="text/javascript">
						$( "#searchIcon" ).click(function() {

							

							//if($( "#searchBar" ).val().length!=0){

						  		$( "#searchForm" ).submit();

						  	//}
						});
					</script>


			</div><!-- search -->



			<div class="tableHeaderCover">
				
				<table class="tableHeader">
					<tr>
						<td>編號</td>
						<td>帳號</td>
						<td>信箱</td>
						<td>姓名</td>
						<td>電話</td>
						<td>狀態</td>
						<td>認證</td>
						<td>權限</td>
						<td>修改</td>
					</tr>	
				</table>
			</div>
				
				<table class="tableContent">

				<?php 



						try{


		


								require_once("php/pdo/connectPDO.php");

								$sql = "select * from member where MEM_ROLE=1";

								$member = $pdo->query($sql);



								 if(isset($_GET["searchBar"])){


								 	$searchBar = $_GET["searchBar"];


								 	$sqlSearch = "select * from member where MEM_ID='$searchBar' or MEM_NAME='$searchBar'";


								 	$memberSearch = $pdo->query($sqlSearch);

								 	$memberSearchRow=$memberSearch->fetchObject();

								 	$MEM_NO=$memberSearchRow->MEM_NO;

								 	$sql = "select * from store_imformation where SI_MEMNO=$MEM_NO";

									$store_imformation = $pdo->query($sql);

									$store_imformationRow=$store_imformation->fetchObject();




				 	?>

					
					<tr>
						<td><?php echo $memberSearchRow->MEM_NO; ?></td>
						<td><?php echo $memberSearchRow->MEM_ID; ?></td>
						<td><?php echo $memberSearchRow->MEM_MAIL; ?></td>
						<td><?php echo $memberSearchRow->MEM_NAME; ?></td>
						<td><?php echo $memberSearchRow->MEM_PHONE; ?></td>


						
<!-- =========td pass or not====== -->


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


<!-- =========td pass or not====== -->






						<td>
							<a href="BBusinessMemberContent.php?MEM_ID=<?php echo $memberSearchRow->MEM_NO; ?>">
								<input type="button" name="" value="內容">
							</a>
						</td>




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
										
										<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
										<input type="hidden" name="dutyOne" value="<?php echo $memberSearchRow->MEM_ID; ?>">
										<input type="submit" class="dutyChange dutyColorChange" name="" value="復原">
										</form>

										

										

										<?php  
											
											} else{//if($MEM_STATUS==0)


										 ?>
										
										<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
										 <input type="hidden" name="dutyZero" value="<?php echo $memberSearchRow->MEM_ID; ?>">
										 <input type="submit" class="dutyChange" name="" value="停權">
										 </form>




										<?php  
											
											} //else ($MEM_STATUS==0)


										 ?>
						</td>
					</tr>

<!-- 					<tr>
						<td>711</td>
						<td>ID125</td>
						<td>ID125@gmail.com</td>
						<td>梁朝偉</td>
						<td>0939318184</td>
						<td>通過</td>
						<td><a href="BBusinessMemberContent.php"><input type="button" name="" value="內容"></a></td>
						<td class="authorityName">正常</td>
						<td>
							<input type="button" class="dutyChange" name="" value="停權">
						</td>
					</tr> -->



					 <?php

					 	 
						}else{//if(isset($_GET["searchBar"]))



							while($memberRow = $member -> fetchObject()){

							$MEM_NO=$memberRow->MEM_NO;

							$sql = "select * from store_imformation where SI_MEMNO=$MEM_NO";

							$store_imformation = $pdo->query($sql);

							$store_imformationRow=$store_imformation->fetchObject();


					?>
					
					<tr>
						<td><?php echo $memberRow->MEM_NO; ?></td>
						<td><?php echo $memberRow->MEM_ID; ?></td>
						<td><?php echo $memberRow->MEM_MAIL; ?></td>
						<td><?php echo $memberRow->MEM_NAME; ?></td>
						<td><?php echo $memberRow->MEM_PHONE; ?></td>
<!-- =========td pass or not====== -->


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


<!-- =========td pass or not====== -->










						<td>
							<a href="BBusinessMemberContent.php?MEM_ID=<?php echo $memberRow->MEM_NO; ?>">
								<input type="button" name="" value="內容">
							</a>
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
										
										<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
										<input type="hidden" name="dutyOne" value="<?php echo $memberRow->MEM_ID; ?>">
										<input type="submit" class="dutyChange dutyColorChange" name="" value="復原">
										</form>

										

										

										<?php  
											
											} else{//if($MEM_STATUS==0)


										 ?>
										
										<form action="php/backstage/member/businessMember/Back_memBossStatus.php" method="get">
										 <input type="hidden" name="dutyZero" value="<?php echo $memberRow->MEM_ID; ?>">
										 <input type="submit" class="dutyChange" name="" value="停權">
										 </form>




										<?php  
											
											} //else ($MEM_STATUS==0)


										 ?>
						</td>
					</tr>


					<?php			

							}//while($memberRow = $member -> fetchObject())

						}// else (isset($_GET["searchBar"]))

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