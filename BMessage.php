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
	<link rel="stylesheet" type="text/css" href="css/BMessage.css">


	<!-- =======header&sideBar======= -->
	<link rel="stylesheet" type="text/css" href="css/BackStageHeaderSidebar.css">


	<!-- =======inputChange======= -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/inputTwobtn.js"></script>

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





			<form method="get" action="php/backstage/message/searchId.php " id="searchForm">

			<!-- =====表格內容===== -->
			<!-- <section> -->

				<div class="search">
						<input type="text" name="searchIdName" placeholder="請輸入帳號或編號搜尋" id="searchIdName">
						<img src="img/icon/BS_search.png"  id="searchIcon">
				
				</div>


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
					</script> 








			</form>
<!-- 		
========================================================= -->

			<div class="tableHeaderCover">
				
				<table class="tableHeader">
					<tr>

						<td>被檢舉留言編號</td>
						<td>被檢舉會員編號</td>
						<td>檢舉會員編號</td>
						<td>留言內容</td>
						<td>檢舉原因</td>
						
						<td>審核狀態</td>
						<td>審核結果</td>
					</tr>	
				</table>
			</div>
	<!-- ========================================== -->
				<table class="tableContent">
					

				<?php

					try{

					require_once("php/pdo/connectPDO.php");

					if (isset($_REQUEST["searchIdName"])) {

						$searchIdName=$_REQUEST["searchIdName"];

						$sql = "select * from report ,shop_message where (report.RE_NO= '$searchIdName' or report.SPMSG_NO='$searchIdName' ) and (report.SPMSG_NO=shop_message.SPMSG_NO)" ; 

						$report= $connectPDO->prepare($sql);
						$report->bindValue(":searchId",$searchIdName);
						$report->execute();
						
					}



					else{
						$sql='select * from report ,shop_message where report.SPMSG_NO=shop_message.SPMSG_NO';
						$report= $connectPDO->query($sql);

					}


					while ($repRow= $report->fetchObject()) {
					
					

				?>








					<tr>
						<td><?php echo $repRow->RE_NO; ?></td>
						<td><?php echo $repRow->SPMSG_NO; ?></td>
						<td><?php echo $repRow->MEM_NO; ?></td>
						<td><?php echo $repRow->SPMSG_CON; ?></td>
						<td><?php echo $repRow->RE_CONTENT; ?></td>
					
						
							<?php
								$re=$repRow->RE_STATUS;
								if ($re=="") {
							?>
										<td class="noAudit">
											未審核
										</td>
							<?php	
								}
								elseif($re=="0"){
							?>
										<td class="noAudit"  style="color:#cc4e4e">
											刪除留言
										</td>

							<?php	}

								elseif ($re=="1") {
										
							?>
									<td class="noAudit" style="color:#53c453">
											保留留言
									</td>
							<?php 
								}

							?>
									



						
						<td><form method="get" action="php/backstage/message/result.php">
							<input type="submit" class="dutyChange takeMeg" name="MsPass" value="保留" id='pass<?php echo $repRow->RE_NO; ?>'>
							<input type="submit" class="dutyChange deleteMeg" name="MsDelete" value="刪除" id='del<?php echo $repRow->RE_NO; ?>'>
							
							<input type="hidden" name="msgNo" value="<?php echo $repRow->RE_NO; ?>">


							</form>
							
						</td>
					</tr>
					
						


	
						<?php 
						
						
						
						if ($re=="0") { ?>
							
							<script type="text/javascript">
									$('#del<?php echo $repRow->RE_NO; ?>').css('background-color','rgba(181, 181, 181, 1)');
									$('#pass<?php echo $repRow->RE_NO; ?>').css('background-color','#00c853');
						   </script>
					
					<?php }elseif($re=="1"){  ?>


							<script type="text/javascript">
									$('#pass<?php echo $repRow->RE_NO; ?>').css('background-color','rgba(181, 181, 181, 1)');
									$('#del<?php echo $repRow->RE_NO; ?>').css('background-color',"#af6363");	
						   </script>

					
				
			
				
					<?php
							} elseif($re==""){
									

					?>				
								<script type="text/javascript">
									$('#pass<?php echo $repRow->RE_NO; ?>').css('background-color','#00c853');

									$('#del<?php echo $repRow->RE_NO; ?>').css('background-color',"#af6363");


								</script>



				<?php 
							}
				}//while






			}catch(PDOException $e) {
				echo "錯誤行號 : ", $e->getLine(), "<br>";
				echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
				}

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