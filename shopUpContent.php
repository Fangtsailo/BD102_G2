<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>店家資訊</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/shopUpContent.css">


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
				<th>店家名稱</th>
				<td>麵包麵包店</td>
				</tr>

				<tr>
				<th>店家資訊</th>
				<td>Lorem ipsum dolor sit amet, adipisicing elit. Quaerat  alias accusamus rem quas.</td>
				</tr>

				<tr>
				<th>店家地址</th>
				<td>台北市信義區信義路119號</td>
				</tr>

				<tr>
				<th>營業時間</th>
				<td>
				週二 - 週六 09:30 - 22:30<br>
				週日 09:30 - 17:30<br>
				每週一公休<br>
				</td>
				</tr>

				<tr>
				<th>店家電話</th>
				<td>0939318183</td>
				</tr>


				<tr>
				<th>商家故事</th>
				<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore fuga dicta totam labore earum facere repellendus delectus doloribus neque!<br>
				Consectetur adipisicing elit. Ipsum impedit laboriosam perspiciatis officiis numquam saepe, tenetur sit inventore enim fugit!<br>
				Adipisicing elit. Similique repellat quos nemo, nobis culpa quas!<br>
				</td>
				</tr>

				<tr>
				<th>評價分數</th>
				<td>4.0 <span>分</span></td>
				</tr>

				<tr>
				<th>追蹤人數</th>
				<td>123 <span>人</span></td>
				</tr>

				<tr>
				<th>商品資訊</th>
				<td></td>
				</tr>




			</table>	



			


		</div>  <!-- content-table -->
			

		<div class="commit">		
			<a href="">
				<input type="button" name="" value="駁回">
			</a>
			<a href="">
				<input type="button" name="" value="核准">
			</a>
		</div>
			
</div> <!-- tableArea -->

	

</body>
</html>