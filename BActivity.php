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


	





	<form method="" action="php/backstage/activity/searchId.php.php">

			<!-- =====表格內容===== -->
			<!-- <section> -->
			<div class="search">
					<input type="text" name="seachIdName" placeholder="請輸入活動編號或店家編號">
					<img src="img/icon/BS_search.png">
			</div>

	</form>


			<div class="tableHeaderCover">
				<table class="tableHeader">
					<tr>
						<td>活動編號</td>
						<td>店家編號</td>
						<td>店長編號</td>
						<td>申請日期</td>
						<td>活動日期</td>
						<td>活動內容</td>
						<td>審核狀態</td>
					</tr>	
				</table>
			
			</div>	
				<table class="tableContent">
				
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>
					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="fail">駁回</td>
				

					</tr>

					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="pass">核准</td>
				

					</tr>

					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>

					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>

					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>

				
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>

					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>
					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>
					
					<tr>
						<td>100</td>
						<td>ID125</td>
						<td>ID1256</td>
						<td>105.9.20</td>
						<td>105.10.30</td>
						<td><input id="addAuthority" type="button" name="" value="內容"></td>
						<td class="noAudit">未審核</td>
				

					</tr>
					
					
				</table>
			<!-- </section> -->
			<!-- =====表格內容===== end-->


			
			
			
				
		
			
		</div> <!-- tableArea -->

	


	<!-- </div> --><!-- container -->
	









	
	</script>

</body>
</html>