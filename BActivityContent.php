<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>TEMPLATE</title>
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
				
			<table>
				
				<tr class="tabletitle" >
					<!-- <th colspan="2">新增商品</th> -->
				</tr>

				<tr>
				<th>申請商家</th>
				<td>烘焙王</td>
				</tr>

				<tr>
				<th>活動主題</th>
				<td>牛角麵包簡單學</td>
				</tr>

				<tr>
				<th>活動副標</th>
				<td>烘焙王麵包坊，最受歡迎牛角麵包製作</td>
				</tr>



				<tr>
				<th>活動日期</th>
				<td>105.9.29 下午1:00(預計3小時)</td>
				</tr>

				<tr>
				<th>店家地址</th>
				<td>桃園市中壢區中央路55號(烘焙王麵包坊)</td>
				</tr>

				<tr>
				<th>費用</th>
				<td>報名費與材料一共1000元(現場收費)</td>
				</tr>
			
				<tr>
				<th>人數</th>
				<td>10~12人</td>
				</tr>


				<tr>
				<th>材料</th>
				<td>麵包坊提供</td>
				</tr>

				<tr>
				<th>目的</th>
				<td>由烘焙王工房，麵包師傅親自講解說明步驟，一步一步帶著你一起做，讓你在家也能輕鬆做出好吃牛角，還有師傅獨門配方秘密大公開!</td>
				</tr>

				<tr>
				<th>詳情</th>
				<td>牛角麵包如何捲的漂亮?
					如何讓麵包又鬆又軟?
					如何挑選好的麵包食材?
					答案都在這次烘培體驗，讓你一次明瞭</td>
				</tr>

				<tr>
				<th>食材準備</th>
				<td>麵粉選用 : 頂級美國小麥研磨出的小麥粉，使麵包又鬆軟又綿密 ;
				雞蛋選用: 安心牧場當天直送新鮮雞蛋，通過認證，保證食品安全 ;
				奶油選用 : 澳洲頂級奶油，讓麵包烤出香而不膩</td>
				</tr>



				<tr>
					<th>宣傳背景</th>
					<td>
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
					</td>
				</tr>

			
				<tr>
					<th>活動相關照片</th>
					<td>
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
					</td>
				</tr>

			
				<tr>
					<th>成品照片</th>
					<td>
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
					</td>
				</tr>

				
				<tr>
				<th>材料照片</th>
					<td>
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
						<img src="https://api.fnkr.net/testimg/350x150/00CED1/FFF/?text=img+placeholder">
					</td>
				</tr>

			
			</table>	



			


		</div>  <!-- content-table -->
			

		<div class="commit">		
			<a href="BActivity.php">
				<input type="button" name="" value="駁回">
			</a>
			<a href="BActivity.php">
				<input type="button" name="" value="核准">
			</a>
		</div>
			
</div> <!-- tableArea -->

	

</body>
</html>