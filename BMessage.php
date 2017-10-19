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





			<form method="" action="">

			<!-- =====表格內容===== -->
			<!-- <section> -->

			<div class="search">
					<input type="text" name="" placeholder="請輸入帳號或姓名搜尋">
					<img src="img/icon/BS_search.png">
			</div>
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
						<td>檢舉次數</td>
						<td>審核狀態</td>
						<td>審核結果</td>
					</tr>	
				</table>
			</div>
				
				<table class="tableContent">
					
					<tr>
						<td>10</td>
						<td>ID154350</td>
						<td>ID125532</td>
						<td>7-12買一送一開跑</td>
						<td>這是廣告，跟麵包店無關</td>
						<td>1</td>
						<td class="noAudit">未審核</td>
						<td>
							<input type="button" class="dutyChange takeMeg" name="" value="保留">
							<input type="button" class="dutyChange deleteMeg" name="" value="刪除">
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>ID154350</td>
						<td>ID125532</td>
						<td>7-12買一送一開跑</td>
						<td>這是廣告，跟麵包店無關</td>
						<td>1</td>
						<td class="noAudit">未審核</td>
						<td>
							<input type="button" class="dutyChange takeMeg" name="" value="保留">
							<input type="button" class="dutyChange deleteMeg" name="" value="刪除">
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>ID154350</td>
						<td>ID125532</td>
						<td>7-12買一送一開跑</td>
						<td>這是廣告，跟麵包店無關</td>
						<td>1</td>
						<td class="noAudit">未審核</td>
						<td>
							<input type="button" class="dutyChange takeMeg" name="" value="保留">
							<input type="button" class="dutyChange deleteMeg" name="" value="刪除">
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>ID154350</td>
						<td>ID125532</td>
						<td>7-12買一送一開跑</td>
						<td>這是廣告，跟麵包店無關</td>
						<td>1</td>
						<td class="noAudit">未審核</td>
						<td>
							<input type="button" class="dutyChange takeMeg" name="" value="保留">
							<input type="button" class="dutyChange deleteMeg" name="" value="刪除">
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>ID154350</td>
						<td>ID125532</td>
						<td>7-12買一送一開跑</td>
						<td>這是廣告，跟麵包店無關</td>
						<td>1</td>
						<td class="noAudit">未審核</td>
						<td>
							<input type="button" class="dutyChange takeMeg" name="" value="保留">
							<input type="button" class="dutyChange deleteMeg" name="" value="刪除">
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>ID154350</td>
						<td>ID125532</td>
						<td>7-12買一送一開跑</td>
						<td>這是廣告，跟麵包店無關</td>
						<td>1</td>
						<td class="noAudit">未審核</td>
						<td>
							<input type="button" class="dutyChange takeMeg" name="" value="保留">
							<input type="button" class="dutyChange deleteMeg" name="" value="刪除">
						</td>
					</tr>
					
				
			
				
				
			
					

					
				</table>
			<!-- </section> -->
			<!-- =====表格內容===== end-->



			
			

			</form>

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