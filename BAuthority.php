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
	<link rel="stylesheet" type="text/css" href="css/BAuthority.css">

	
	



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
			<div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>編號</td>
						<td>帳號</td>
						<td>等級</td>
						<td>權限管理</td>
						<td>權限修改</td>
					</tr>	
				</table>
			
				
				<table class="tableContent">

					<?php 



						try{


		


								require_once("php/pdo/connectPDO.php");

								$emp_id=$_SESSION["emp_id"];

								$sql_grade_Check = "select * from employee where EMP_ID='$emp_id' and EMP_GRADE = 1";

								$employee_grade_Check = $pdo ->query($sql_grade_Check);

								if($employee_grade_Check->rowCount() !== 0){


									$sql_high_grade = "select * from employee";

									$employee_high_grade = $pdo ->query($sql_high_grade);

									$employee_high_grade_row = $employee_high_grade-> fetchObject();



									//while($employee_high_grade_row = $employee_high_grade -> fetchObject()){

								
					 ?>



						<tr>
						<td><?php echo $employee_high_grade_row->EMP_NO; ?></td>
						<td><?php echo $employee_high_grade_row->EMP_ID; ?></td>
						<td>最高管理員</td>
						<td>正常</td>
						<td><input id="addAuthority" type="button" name="" value="新增" style="cursor:pointer"></td>
						</tr>
						



					 <?php 


					 		$sql_normal = "select * from employee where not(EMP_GRADE = 1)";

							$employee_normal = $pdo ->query($sql_normal);


							while($employee_normal_row = $employee_normal -> fetchObject()){

					?>

								<tr>
								<td><?php echo $employee_normal_row->EMP_NO; ?></td>
								<td><?php echo $employee_normal_row->EMP_ID; ?></td>
								<td>一般管理員</td>
								
									<?php // distinguish button color by database

										$EMP_STATUS = $employee_normal_row->EMP_STATUS;

										if($EMP_STATUS==0){

									?>

									<td class="authorityName" style="color:#cc4e4e">停權</td>	

									<?php  
										
										} else{//if($EMP_STATUS==0)


									 ?>

									 <td class="authorityName">正常</td>

									<?php  
										
										} //else
									 ?>

								</td>


								<td>

									
										<?php // distinguish button color by database

											$EMP_STATUS = $employee_normal_row->EMP_STATUS;

											if($EMP_STATUS==0){

										?>
										
										<form action="php/backstage/authority/Back_empStatus.php" method="get">
										<input type="hidden" name="dutyOne" value="<?php echo $employee_normal_row->EMP_ID; ?>">
										<input type="submit" class="dutyChange dutyColorChange" name="" value="復原">
										</form>

										

										

										<?php  
											
											} else{//if($EMP_STATUS==0)


										 ?>
										
										<form action="php/backstage/authority/Back_empStatus.php" method="get">
										 <input type="hidden" name="dutyZero" value="<?php echo $employee_normal_row->EMP_ID; ?>">
										 <input type="submit" class="dutyChange" name="" value="停權">
										 </form>




										<?php  
											
											} //else


										 ?>
									
								</td>
								</tr>
						


					<?php

					 		}// while

					 	}// if($employee_grade_Check->rowCount() !== 0)

					 	 else{


					 	 		$sql_normal = "select * from employee where not(EMP_GRADE = 1)";

								$employee_normal = $pdo ->query($sql_normal);


							while($employee_normal_row = $employee_normal -> fetchObject()){

					?>

						<tr>
						<td><?php echo $employee_normal_row->EMP_NO; ?></td>
						<td><?php echo $employee_normal_row->EMP_ID; ?></td>
						<td>一般管理員</td>
						<td class="authorityName">正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
						</tr>

					<?php

					 	 }//while

					 	}//else 判斷是否為最高管理員


							}catch( PDOException $ex){
						  		echo "行號: ",$ex->getLine(), "<br>";	
						  		echo "訊息: ",$ex->getMessage() , "<br>";	
							}//catch


					  ?>

						
					
					

					<!-- <tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td class="authorityName">正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr> -->
					 
					
				</table>
			<!-- </section> -->
			<!-- =====表格內容===== end-->


			
			
			</div>
		</div> <!-- tableArea -->

		<form action="php/backstage/authority/Back_addEmp.php" method="get">
			<div class="LightBox" id="LightBox">
			
					<div id="mask"></div>
				
					<section>
						<img src="img/icon/LogoColor.png">
						<img id="cancelLightBox" src="img/icon/cancel3.svg">
						<div class="square">新增後台管理員</div>
						<div class="square_2">
							<label>
								<span>帳號</span>
								<input type="text" name="emp_id" value="">
							</label>
							<label>
								<span>密碼</span>
								<input type="text" name="emp_psw" value="">
							</label>
							<span>
								<input id="LightBoxIncreaseBtn" type="submit" name="" value="新增管理員">
							</span>
						</div>
					</section>
			</div>
		</form>



	<!-- </div> --><!-- container -->
	








<!-- ======================================================footer 頁尾========================================================= -->
<!-- 	<footer>
		<section>
				<label><span>帳號</span><input type="text" name="" value=""></label>
				<label><span>密碼</span><input type="text" name="" value=""></label>
				<span><input type="button" name="" value="新增管理員"></span>
			</section>
	</footer> -->
	<script type="text/javascript">
		

		function init(){

			
			document.getElementById("cancelLightBox").addEventListener("click",function(){
				document.getElementById("LightBox").style.display="none";
			},false);
			
			document.getElementById("LightBoxIncreaseBtn").addEventListener("click",function(){
				document.getElementById("LightBox").style.display="none";
			},false);

			document.getElementById("mask").addEventListener("click",function(){
				document.getElementById("LightBox").style.display="none";
			},false);

			document.getElementById("addAuthority").addEventListener("click",function(){
				document.getElementById("LightBox").style.display="block";
			},false);
		}

		window.onload=init;
	</script>

</body>
</html>