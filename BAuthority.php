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


			<!-- =====表頭===== -->
			<!-- <div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>編號</td>
						<td>帳號</td>
						<td>等級</td>
						<td>權限管理</td>
						<td>權限修改</td>
					</tr>	
				</table>
			</div> -->
			<!-- =====表頭===== end-->





			<form method="" action="">

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
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>最高管理員</td>
						<td>正常</td>
						<td><input id="addAuthority" type="button" name="" value="新增" style="cursor:pointer"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>一般管理員</td>
						<td>正常</td>
						<td><input type="button" class="dutyChange" name="" value="停權"></td>
					</tr>
					
				</table>
			<!-- </section> -->
			<!-- =====表格內容===== end-->


			
			
			

			</form>
			</div>
		</div> <!-- tableArea -->

		<div class="LightBox" id="LightBox">
			
				<section>
					<img src="img/icon/LogoColor.png">
					<img id="cancelLightBox" src="img/icon/cancel3.svg">
					<div class="square">新增後台管理員</div>
					<div class="square_2">
						<label><span>帳號</span><input type="text" name="" value="">
						</label>
						<label><span>密碼</span><input type="text" name="" value="">
						</label>
						<span><input id="LightBoxIncreaseBtn" type="button" name="" value="新增管理員"></span>
					</div>
				</section>
		</div>



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

			document.getElementById("addAuthority").addEventListener("click",function(){
				document.getElementById("LightBox").style.display="block";
			},false);
		}

		window.onload=init;
	</script>

</body>
</html>