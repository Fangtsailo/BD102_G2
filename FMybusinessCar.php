<?php 

ob_start();

session_start();

 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<link rel="icon" href="img/trepun4.png">
	<title>TrePun</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/FMybusinessStore.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





	<!-- =====header==== -->
	<script type="text/javascript" src="js/FMybusinessStore.js"></script>
	<script type="text/javascript" src="js/header.js"></script>





	<!-- =====side bar==== -->
	<link rel="stylesheet" type="text/css" href="css/memberSideBar.css">
	<script type="text/javascript" src="js/memberSideBar.js"></script>




	<!-- =====subTitle==== -->
	<link rel="stylesheet" type="text/css" href="css/subtitle.css">
	<script type="text/javascript" src="js/subtitle.js"></script>


		<!-- =====alert==== -->
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>



	
	

	
</head>
<body>



<?php 


	try {
		
		require_once("php/pdo/connectPDO.php");

		//$sql should change to SI_MEMNO=$MEM_ID 
		// where $MEM_ID = $_GET["MEM_ID"];  from login session

		//$_SESSION["memId"]="cccfff";
		//$_SESSION["memNo"]="7";

		$memNo=$_SESSION["memNo"];

		$sql = "select * from store_imformation where SI_MEMNO=$memNo and SI_TYPE=1";

		$store_imformation = $connectPDO->query($sql);

		$store_imformationRow=$store_imformation->fetchObject();




?>




<!-- ======================================================header 頁首========================================================= -->
	<div class="coverHeader">
	<?php 

		require_once('header.php');

	 ?>
	</div>
	


	<?php 

		//require_once('subtitle.php');

	 ?>

<!-- <div class="coverSubtitile" >
	<div class="subtitle" Id="subtitle">
				<h2>店長專區</h2>
				<img class="burger" src="https://api.fnkr.net/testimg/44x44/00CED1/FFF/?text=img+placeholder">
	</div>
</div> -->






<!-- ==============middle content================== -->
<div class="container">
	



<!-- ==============left fixed content================== -->



		<!-- <div class="LeftBusiness" id="LeftBusiness"> -->

			
			<?php 

				require_once('memberSideBar.php');

			?>


			
		<!-- </div> --> <!-- LeftBusiness -->
		
	



<!-- ==============left fixed content======END======= -->


















<!-- ==============center content================== -->
	<div class="CenterBusiness">

		<div class="subtitle">
			<svg id="圖層_1" class="mysvg" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 331.16 104.99" width="300" height="100"><defs><style>.cls-1{font-size:36px;font-family:NotoSansCJKtc-Regular-B5pc-H, Noto Sans CJK TC;}.cls-1,.cls-6{fill:#4b7cbf;}.cls-2{opacity:0.7;}.cls-3,.cls-4,.cls-5{fill:none;stroke:#4b7cbf;stroke-miterlimit:10;}.cls-3{stroke-width:3px;}.cls-4{stroke-width:2px;}</style></defs><title>breadstoreTitile</title>

		<text class="cls-1" transform="translate(101.5 67.26)">

			<?php 

			if($store_imformation->rowCount()!=0){

				$SI_TYPE=$store_imformationRow->SI_TYPE;

				if ($SI_TYPE==0) {
					echo "麵包店";
				}else{
					echo "麵包車";
				}

			}else{
				echo "新增店家";
			}

			 ?>

		</text><g class="line"><line class="line-g" x1="20" y1="53.89" y2="53.89"/><line class="line-g" x1="22.67" y1="45.26" x2="6.67" y2="39.26"/><line class="line-g" x1="29.33" y1="37.57" x2="20" y2="30.57"/><line class="line-g" x1="21.36" y1="64.57" x2="5.36" y2="70.57"/><line class="line-g" x1="28.03" y1="72.26" x2="18.7" y2="79.26"/><line class="line-g" x1="311.16" y1="53.89" x2="331.16" y2="53.89"/><line class="line-g" x1="308.5" y1="45.26" x2="324.5" y2="39.26"/><line class="line-g" x1="301.83" y1="37.57" x2="311.16" y2="30.57"/><line class="line-g" x1="309.8" y1="64.57" x2="325.8" y2="70.57"/><line class="line-g" x1="303.13" y1="72.26" x2="312.46" y2="79.26"/><path class="line-g" d="M137.11,101.37c-25,19.48-63.26,12.55-79.2-12.94a32.7,32.7,0,0,1,2.5,2.39c11.18,13.11,25.29,20.06,42.59,19.94,11.22-.08,21.16-4.33,30.5-10.23C135.52,99.24,135.55,99.29,137.11,101.37Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M265.1,41.15c-19.71-3.59-40.43-.81-45.44,6,.19.06.41.22.56.17a22.62,22.62,0,0,0,2.56-1c9.61-4.93,19.94-6.14,30.51-5.52a22.28,22.28,0,0,1,8.73,2.4C264.78,44.57,264.63,43,265.1,41.15Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M289.71,51.45c-.94.26-2.3,1.22-2.35,1.94a4.08,4.08,0,0,0,1.53,3,6.46,6.46,0,0,0,3.44.95c2.56.13,5.12,0,8,0C298.4,53.07,293.57,50.4,289.71,51.45Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M293.23,59.95c-.76,1.71,1.29,4.19,4.34,5,2.44.62,4.94,1,7.53,1.5-.89-3-2.22-5.81-5.37-7.24C297.35,58.08,293.85,58.54,293.23,59.95Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M279.87,48.58c4.44,5.11,9.37.49,14.48,1.53C289.44,44.8,282.78,44.17,279.87,48.58Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M285.77,55.85c-.67-.22-2.12.69-2.65,1.48-1.84,2.75-.21,8.15,2.75,9.87.47-1.22,1-2.43,1.4-3.69.49-1.7,1.19-3.48,1.07-5.17C288.27,57.4,286.83,56.19,285.77,55.85Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M303.47,67.73c-1.65-1.23-3.74-2.05-5.19-.09s.19,3.5,1.64,4.69a12.07,12.07,0,0,0,3,1.55c1.31.55,2.66,1,4.09,1.53A8.17,8.17,0,0,0,303.47,67.73Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M291.21,61.83c-1.08,1-2.69,1.78-3.13,3-1.12,3.06-.4,6,2.3,8.86,1.24-2.82,2.74-5.21,3.25-7.81C293.84,64.73,292.07,63.19,291.21,61.83Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M275.75,42c-1,.37-1.69,1.71-2.51,2.6,1.06.59,2.2,1.78,3.17,1.66,3.29-.41,6.52-1.28,10.31-2.09C283,41.65,279.5,40.61,275.75,42Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M280.22,50.94a2.53,2.53,0,0,0-2.35.68c-1.52,2.59-1.11,8.7,3.25,10.06.33-3,.79-5.81.88-8.68C282,52.3,281,51.24,280.22,50.94Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M272.46,46.61c-.59,1-1.54,1.95-1.7,3-.51,3.33,1.17,5.64,5,7.93,0-3.34.32-5.91-.15-8.33C275.39,48.19,273.55,47.48,272.46,46.61Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M297.68,73.22c-.18-1.4-1.24-2.68-1.92-4-1.14.94-2.9,1.67-3.3,2.86a6.67,6.67,0,0,0,1.79,7.36c.75-1.09,1.46-2,2-2.93S297.81,74.24,297.68,73.22Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M266,44a3.84,3.84,0,0,0-1.75,3.2,7.32,7.32,0,0,0,5.08,6.27c0-2.42.16-4.66-.05-6.86C269.1,44.76,267.87,43.31,266,44Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M277.79,38.94a57.75,57.75,0,0,0-8.42.07c-1.12.16-2,1.8-3,2.77,1.41.46,3,1.55,4.19,1.24,2.52-.64,4.86-2,7.28-3.1Q277.79,39.43,277.79,38.94Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M301.2,76.31a10.39,10.39,0,0,0,1.71,4.32c1.15,1.32,2.91,2.11,5.25,3.71-.63-2.72-.71-4.73-1.58-6.3C305.87,76.76,301.14,76,301.2,76.31Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M298.66,76.59c-.94,1-2.51,1.9-2.66,3-.24,1.77,1.47,5.59,1.83,5.63.9-1.55,2.29-3,2.55-4.68C300.57,79.35,299.28,77.92,298.66,76.59Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M301.83,82.1c-.54.85-1.64,1.81-1.5,2.54.34,1.9,2.81,5.52,3.27,5.5a32.22,32.22,0,0,0,.75-6C304.32,83.4,302.72,82.77,301.83,82.1Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M233.07,28.72c-10.91,6.16-19.76,15.8-19.45,21.08.12,0,.29-.06.33-.14a14.15,14.15,0,0,0,.81-1.53c2.65-6.22,7.13-10.94,12.46-14.87a13.94,13.94,0,0,1,5.16-2.34C234.29,30.49,233.6,29.81,233.07,28.72Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M249,23.82c-.35.5-.62,1.51-.35,1.87a2.56,2.56,0,0,0,1.93.83,4,4,0,0,0,2-.92c1.28-1,2.48-2,3.85-3.17C253.85,21.11,250.46,21.77,249,23.82Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M254.12,26.49c.32,1.13,2.3,1.5,4.07.65,1.42-.68,2.77-1.5,4.22-2.3-1.65-1.11-3.39-1.9-5.48-1.34C255.36,23.95,253.86,25.57,254.12,26.49Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M243.15,26.37c4.18.68,4.7-3.52,7.58-5.06C246.24,20.73,242.78,23.09,243.15,26.37Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M248.89,27.51c-.41.16-.75,1.18-.68,1.77.22,2.06,3.16,4,5.28,3.65-.26-.78-.48-1.58-.81-2.34a9.87,9.87,0,0,0-1.56-2.91A2.52,2.52,0,0,0,248.89,27.51Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M262.16,26.13c-1.29.07-2.62.51-2.53,2s1.49,1.61,2.67,1.6a7.55,7.55,0,0,0,2.05-.45c.85-.26,1.68-.58,2.58-.9A5.11,5.11,0,0,0,262.16,26.13Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M253.9,28.2c-.12.91-.58,1.93-.31,2.7.69,1.92,2.21,3,4.65,3.34a25.13,25.13,0,0,0-1.56-5.05C256.33,28.55,254.86,28.51,253.9,28.2Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M238.51,24.84c-.34.58-.13,1.49-.17,2.26.75-.14,1.77,0,2.19-.47,1.42-1.51,2.62-3.23,4.12-5.13C241.86,21.8,239.77,22.69,238.51,24.84Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M244.26,27.37a1.58,1.58,0,0,0-.86,1.27c.31,1.86,3,4.63,5.59,3.54-1-1.55-1.95-3.11-3-4.52A1.89,1.89,0,0,0,244.26,27.37Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M238.79,28.4a6.24,6.24,0,0,0,.39,2.13c1.09,1.8,2.82,2.25,5.57,1.82a29.79,29.79,0,0,0-3.41-3.95C240.84,28,239.67,28.37,238.79,28.4Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M261.57,31.09A8.65,8.65,0,0,0,259,29.93c-.17.91-.73,2-.44,2.69a4.17,4.17,0,0,0,3.81,2.82c-.07-.82-.09-1.53-.21-2.21S262,31.53,261.57,31.09Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M234.62,29.71a2.4,2.4,0,0,0,.44,2.24,4.58,4.58,0,0,0,5,1c-1-1.16-1.79-2.3-2.77-3.28C236.44,28.85,235.26,28.65,234.62,29.71Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M238.29,22.57a36.13,36.13,0,0,0-4,3.4c-.48.52-.25,1.68-.35,2.55.86-.34,2-.45,2.51-1.08a29.41,29.41,0,0,0,2.26-4.4Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M264.51,31.17a6.5,6.5,0,0,0,2.55,1.39,18.4,18.4,0,0,0,4-.32,17.1,17.1,0,0,0-3.29-2.4C266.93,29.51,264.37,31.06,264.51,31.17Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M263.39,32.32c-.05.85-.44,1.92-.08,2.51a6.53,6.53,0,0,0,3.13,2c-.19-1.11-.11-2.37-.65-3.27C265.42,32.88,264.23,32.71,263.39,32.32Z" transform="translate(-18.41 -21.22)"/><path class="line-g" d="M267.13,33.7c.08.63-.06,1.52.29,1.82a7.82,7.82,0,0,0,3.78,1.34,20.16,20.16,0,0,0-2.06-3.21C268.84,33.33,267.82,33.67,267.13,33.7Z" transform="translate(-18.41 -21.22)"/>
			</g>
			</svg>
		</div>
		

		<form id="alertFormSubmit" action="php/member/myBusiness/store/carManage.php" method="post" enctype="multipart/form-data">
		<div class="content-table">
				
			<table>
				
				<tr class="tabletitle" >
					<th colspan="2">基本資料</th>
				</tr>

				<tr>
					<th><div>狀態</div></th>
					<td>
						<p>			
							<?php 

							if($store_imformation->rowCount()!=0){

									$SI_SELLSTAY=$store_imformationRow->SI_SELLSTAY;
									$SI_CHECKSTAY=$store_imformationRow->SI_CHECKSTAY;

									if($SI_CHECKSTAY==="1"){

											if ($SI_SELLSTAY==1) {
												echo "營運中";
											}elseif($SI_SELLSTAY==0){
												echo "歇業中";
											}
									}elseif($SI_CHECKSTAY==="0"){
											echo "駁回";
									}elseif($SI_CHECKSTAY===NULL){
											echo "待審核";
									}

							}else{
								echo "首次建構";
							}

							 ?>
							 	
						 </p>
					</td>
				</tr>


				<tr>
				<th><div>店名</div></th>
				<td><input type="text" name="SI_NAME" value="<?php

				 if($store_imformation->rowCount()!=0){

				echo $store_imformationRow->SI_NAME;

				}
				?>"></td>
				</tr>


				<tr>
				<th><div>電話</div></th>
				<td><input type="text" name="SI_PHONE" value="<?php 
					if($store_imformation->rowCount()!=0){
						echo $store_imformationRow->SI_PHONE;
					}
					?>"></td>
				</tr>


				<tr>
				<th><div>地址</div></th>
				<td><input type="text" name="SI_ADDR" value="<?php 
					if($store_imformation->rowCount()!=0){
						echo $store_imformationRow->SI_ADDR;
					}
					?>"></td>
				</tr>


				<tr>
				<th><div>公休日<br>(複選)</div></th>
				<td>


					<?php 

					if($store_imformation->rowCount()!=0){

					$SI_RESTDAY=$store_imformationRow->SI_RESTDAY;

					$SI_RESTDAY_ARY=explode(",",$SI_RESTDAY);


					}else{

						$SI_RESTDAY=",,,,,,,";

						$SI_RESTDAY_ARY=explode(",",$SI_RESTDAY);

					}

					?>


					<div>
						<label for="weekCheck_0">
							<?php

							if(in_array('1',$SI_RESTDAY_ARY)){

								echo '<div id="week_1" class="week chooseWeek">星期ㄧ</div>';

							}else{
								echo '<div id="week_1" class="week">星期一</div>';
							}

							?>						
						</label>


						<label for="weekCheck_1">
							<?php

							if(in_array('2',$SI_RESTDAY_ARY)){

								echo '<div id="week_2" class="week chooseWeek">星期二</div>';

							}else{
								echo '<div id="week_2" class="week">星期二</div>';
							}

							?>
						</label>


						<label for="weekCheck_2">
							<?php

							if(in_array('3',$SI_RESTDAY_ARY)){

								echo '<div id="week_3" class="week chooseWeek">星期三</div>';

							}else{
								echo '<div id="week_3" class="week">星期三</div>';
							}

							?>
						</label>


						<label for="weekCheck_3">
							<?php

							if(in_array('4',$SI_RESTDAY_ARY)){

								echo '<div id="week_4" class="week chooseWeek">星期四</div>';

							}else{
								echo '<div id="week_4" class="week">星期四</div>';
							}

							?>
						</label>
					</div>




					<div>
						<label for="weekCheck_4">
							<?php

							if(in_array('5',$SI_RESTDAY_ARY)){

								echo '<div id="week_5" class="week chooseWeek">星期五</div>';

							}else{
								echo '<div id="week_5" class="week">星期五</div>';
							}

							?>
						</label>


						<label for="weekCheck_5">
							<?php

							if(in_array('6',$SI_RESTDAY_ARY)){

								echo '<div id="week_6" class="week chooseWeek">星期六</div>';

							}else{
								echo '<div id="week_6" class="week">星期六</div>';
							}

							?>
						</label>


						<label for="weekCheck_6">
							<?php

							if(in_array('7',$SI_RESTDAY_ARY)){

								echo '<div id="week_7" class="week chooseWeek">星期日</div>';

							}else{
								echo '<div id="week_7" class="week">星期日</div>';
							}

							?>
						</label>



						<label for="weekCheck_7">
							<?php

							if(in_array('0',$SI_RESTDAY_ARY)){

								echo '<div id="week_0" class="week chooseWeek">國定假</div>';

							}else{
								echo '<div id="week_0" class="week">國定假</div>';
							}

							?>
						</label>
					</div>
				</td>

				<input type="hidden" id="restWeekDays" name="SI_RESTDAY" value="<?php echo $SI_RESTDAY ?>">
				
					<script type="text/javascript">
	
						$(function(){

							var updateWeek = new Array();

							$('.week').click(function(){

								for(var i = 0; i < 8; i++){

									
									if($('#week_'+i).hasClass("chooseWeek")){
										updateWeek[i]=i;
										
									}else{
										updateWeek[i]="";
										
									}
								}

								var updateWeekStr =updateWeek.join(",");
								
								//alert(updateWeekStr);

								$("#restWeekDays").val(updateWeekStr);
							});

							
						});


					</script>



				</tr>



				<tr>
				<th><div>營業時間</div></th>
				<td>
					<label>
						<span>開始</span>
						<select name="SI_STARTTIME">

							<?php 
					// 		exit("1122221");
					// 		echo $store_imformationRow->SI_STARTTIME;
					// exit("111111");

							if($store_imformation->rowCount()!=0){

								for($i=0;$i<24;$i++){
									$clock = $i<10 ? "0".$i.":00" : $i.":00";
									$sel = ($i==$store_imformationRow->SI_STARTTIME)? "selected" : "" ;

									echo "<option value=".$i." ".$sel.">".$clock."</option>";
								}

							}else{

								for($i=0;$i<24;$i++){
									$clock = $i<10 ? "0".$i.":00" : $i.":00";
									$sel = ($i==9)? "selected" : "" ;

									echo "<option value=".$i." ".$sel.">".$clock."</option>";
								}

							}

							 ?>


						  
						</select>
					</label>
					<label>
						<span>結束</span>
						<select name="SI_ENDTIME">
							<?php 

							if($store_imformation->rowCount()!=0){

								for($i=0;$i<24;$i++){
									$clock = $i<10 ? "0".$i.":00" : $i.":00";
									$sel = ($i==$store_imformationRow->SI_ENDTIME)? "selected" : "" ;

									echo "<option value=".$i." ".$sel.">".$clock."</option>";
								}

							}else{

								for($i=0;$i<24;$i++){
									$clock = $i<10 ? "0".$i.":00" : $i.":00";
									$sel = ($i==9)? "selected" : "" ;

									echo "<option value=".$i." ".$sel.">".$clock."</option>";
								}

							}

							 ?>


						  
						</select>
					</label>
				</td>
				</tr>


				<tr>
				<th><div>故事</div></th>
				<td>
					<textarea name="SI_STORY" placeholder="請輸入"><?php
					if($store_imformation->rowCount()!=0){
						echo $store_imformationRow->SI_STORY;
					}
					?></textarea>
				</td>
				</tr>




				<tr>
				<th><div>LOGO</div></th>
				<td>
					<div>		
						<div>
							<label for="uploadLogoImg"><img src="img/icon/camera.png"></label>
							<input type="file" class="upl_0" name="uploadLogoImg[]" id="uploadLogoImg">
							<span>點擊上傳照片<br>建議寬、高大於1440像素</span>
						</div><?php 

						if($store_imformation->rowCount()!=0){

							if($store_imformationRow->SI_LOGO===null or $store_imformationRow->SI_LOGO==""){

								echo '<img class="preview preview_0" src="">';
							}else{

								echo '<img class="preview preview_0" src="img/store/logo/'.$store_imformationRow->SI_LOGO.'">';
							}
						}else{

							echo '<img class="preview preview_0" src="">';

						}

						?></div>
					<div>
						
							<input type="hidden" id="hidden_dellogo" name="delLogo" value="">
							<input type="button" id="dellogo" name="" value="刪除" style="cursor: pointer;">
						
					</div>
				</td>
				</tr>


				<tr>
				<th><div>店面照I</div></th>
				<td>
					<div>		
						<div>
							<label for="uploadImg1"><img src="img/icon/camera.png"></label>
							<input type="file" class="upl_1" name="uploadImg[]" id="uploadImg1">
							<span>點擊上傳照片<br>建議寬、高大於1440像素</span>
						</div><?php 

						if($store_imformation->rowCount()!=0){

							if($store_imformationRow->SI_BIMG_1===null or $store_imformationRow->SI_BIMG_1==""){

							echo '<img class="preview preview_1" src="">';
							}else{

								echo '<img class="preview preview_1" src="img/store/banners/'.$store_imformationRow->SI_BIMG_1.'">';
							}
						}else{
							echo '<img class="preview preview_1" src="">';
						}

						 ?></div>
					<div>
						
							<input type="hidden" id="hidden_delImg1" name="delImg1" value="">
							<input type="button" id="delImg1" name="" value="刪除" style="cursor: pointer;">
						
					</div>
				</td>
				</tr>


				<tr>
				<th><div>店面照II</div></th>
				<td>
					<div>		
						<div>
							<label for="uploadImg2"><img src="img/icon/camera.png"></label>
							<input type="file" class="upl_2" name="uploadImg[]" id="uploadImg2">
							<span>點擊上傳照片<br>建議寬、高大於1440像素</span>
						</div><?php 

						if($store_imformation->rowCount()!=0){

							if($store_imformationRow->SI_BIMG_2===null or $store_imformationRow->SI_BIMG_2==""){

							echo '<img class="preview preview_2" src="">';
							}else{

								echo '<img class="preview preview_2" src="img/store/banners/'.$store_imformationRow->SI_BIMG_2.'">';
							}

						}else{

							echo '<img class="preview preview_2" src="">';

						}

						 ?></div>
					<div>
							<input type="hidden" id="hidden_delImg2" name="delImg2" value="">
							<input type="button" id="delImg2" name="" value="刪除" style="cursor: pointer;">
						
					</div>
				</td>
				</tr>


				<tr>
				<th><div>店面照III</div></th>
				<td>
					<div>		
						<div>
							<label for="uploadImg3"><img src="img/icon/camera.png"></label>
							<input type="file" class="upl_3" name="uploadImg[]" id="uploadImg3">
							<span>點擊上傳照片<br>建議寬、高大於1440像素</span>
						</div>
						<?php 

						if($store_imformation->rowCount()!=0){

							if($store_imformationRow->SI_BIMG_3===null or $store_imformationRow->SI_BIMG_3==""){

							echo '<img class="preview preview_3" src="">';
							
							}else{

								echo '<img class="preview preview_3" src="img/store/banners/'.$store_imformationRow->SI_BIMG_3.'">';
							}
						}else{

							echo '<img class="preview preview_3" src="">';

						}

						 ?>
					</div>
					<div>
							<input type="hidden" id="hidden_delImg3" name="delImg3" value="">
							<input type="button" id="delImg3" name="" value="刪除" style="cursor: pointer;">
						
					</div>
				</td>
				</tr>

				<script>
					$(function (){

							//var logoSrc = $('.preview_0').attr("src");

							if($('.preview_0').attr("src")){
			                	$('.preview_0').css('z-index', 1);			      
							}else{
								$('.preview_0').css('z-index', -1);
							}

							if($('.preview_1').attr("src")){
			                	$('.preview_1').css('z-index', 1);
							}else{
								$('.preview_1').css('z-index', -1);
							}

							if($('.preview_2').attr("src")){
			                	$('.preview_2').css('z-index', 1);
							}else{
								$('.preview_2').css('z-index', -1);
							}

							if($('.preview_3').attr("src")){
			                	$('.preview_3').css('z-index', 1);
							}else{
								$('.preview_3').css('z-index', -1);
							}



							$('#dellogo').click(function(){

									$('.preview_0').attr('src', "");
					                $('.preview_0').css('z-index', -1);
					                $('#hidden_dellogo').val("1");

							});


							$('#delImg1').click(function(){

									$('.preview_1').attr('src', "");
					                $('.preview_1').css('z-index', -1);
					                $('#hidden_delImg1').val("1");

							});


							$('#delImg2').click(function(){

									$('.preview_2').attr('src', "");
					                $('.preview_2').css('z-index', -1);
					                $('#hidden_delImg2').val("1");

							});


							$('#delImg3').click(function(){

									$('.preview_3').attr('src', "");
					                $('.preview_3').css('z-index', -1);
					                $('#hidden_delImg3').val("1");

							});


							// for(var i=1 ; i<=3 ; i++){

							// 	$('#delImg'+i).click(function(){

							// 		$('.preview_'+i).attr('src', "");
					  //               $('.preview_'+i).css('z-index', -1);
					  //               $('#hidden_delImg'+i).val("1");

							// 	});


							// }

					 



					    	var inputLogoImg = document.getElementById('uploadLogoImg');
					 
					        

					    	$('#uploadLogoImg').change(function(){


							        if (inputLogoImg.files && inputLogoImg.files[0]) {
							            var reader_0 = new FileReader();
							            
							            reader_0.onload = function () {
							                $('.preview_0').attr('src', reader_0.result);
							                $('.preview_0').css('z-index', 2);

							            }
							 
							            reader_0.readAsDataURL(inputLogoImg.files[0]);
							        }

					        });







					        var uploadImg1 = document.getElementById('uploadImg1');
					 
					        

					    	$('#uploadImg1').change(function(){


							        if (uploadImg1.files && uploadImg1.files[0]) {

							            var reader_1 = new FileReader();

							         
							            
							            reader_1.onload = function () {
							                $('.preview_1').attr('src', reader_1.result);
							                $('.preview_1').css('z-index', 2);
							                
							            }
							 
							            reader_1.readAsDataURL(uploadImg1.files[0]);
							        }

					        });






					        var uploadImg2 = document.getElementById('uploadImg2');
					 
					        

					    	$('#uploadImg2').change(function(){

					    			

							        if (uploadImg2.files && uploadImg2.files[0]) {

							            var reader_2 = new FileReader();

							            
							            
							            reader_2.onload = function () {
							                $('.preview_2').attr('src', reader_2.result);
							                $('.preview_2').css('z-index', 2);

							            }
							 
							            reader_2.readAsDataURL(uploadImg2.files[0]);
							        }

					        });


					        var uploadImg3 = document.getElementById('uploadImg3');
					 
					        

					    	$('#uploadImg3').change(function(){

					    			

							        if (uploadImg3.files && uploadImg3.files[0]) {

							            var reader_3 = new FileReader();

							            
							            
							            reader_3.onload = function () {
							                $('.preview_3').attr('src', reader_3.result);
							                $('.preview_3').css('z-index', 2);

							                
							            }
							 
							            reader_3.readAsDataURL(uploadImg3.files[0]);
							        }

					        });			    
					    
					})

				</script>












 

				<!-- <tr>
				<th><div>新增商品<br>(最多6筆)</div></th>
				<td>
					<div class="">
						<div>
							<label>
								<span>品名</span>
								<input type="text" name="" value="">
							</label>
							<label>
								<span>價格</span>
								<input type="text" name="" value="">
								<span>元</span>
							</label>
						</div>

						<div>
							<img src="http://fakeimg.pl/60x50/00CED1/FFF/?text=camera">
							<input type="file">
							<span>點擊上傳店頭照片<br>建議寬、高大於1440像素</span>
						</div>
					</div>
					<div class="">
						<img src="http://fakeimg.pl/45x45/00CED1/FFF/?text=cross">
						<span>新增下一個商品</span>
					</div>
				</td>
				</tr> -->



			</table>	






		</div>  <!-- content-table -->
		
	


		<div class="commit">

			<?php 

			if($store_imformation->rowCount()!=0){
			 ?>
			
			<input type="button" name="" value="瀏覽頁面" onclick="location.href='storeBrowse.php?storeId=<?php echo $store_imformationRow->SI_NUM; ?>'">
			<?php
			 }
			 ?>

			<input type="button" id="alertBtn" name="" value="編輯確認">
		</div>

		</form>

	</div>  <!-- CenterBusiness -->


	<script>
	
	$("#alertBtn").click(function(){


      $.sweetModal({
            content: '新增成功！',
            icon: $.sweetModal.ICON_SUCCESS,
            width: '300px',
            theme: $.sweetModal.THEME_MIXED,
            timeout: 1000,
            onClose: function(){
              $("#alertFormSubmit").submit();
            }
        });
     
     
      
      
    });
	</script>




	

<!-- for demo easier -->
	<script>
		


	</script>




<!-- ==============center content======END======= -->
















<!-- ==============right fixed content================== -->

	<!-- <div class="CoverRightMy" id="CoverRightMy">
		
		<ul>
			<li>會員專區</li>
			<li>麵包店
				<ul>
					<li>基本資料</li>
					<li>商品</li>
				</ul>
			</li>
			<li>胖小車
				<ul>
					<li>定位位置</li>
					<li>基本資料</li>
					<li>商品</li>
				</ul>
			</li>
			<li>活動管理</li>
			<li>留言管理</li>
		</ul>
		
	</div>
 -->
	


<!-- ==============right fixed content======END======= -->





</div><!-- container -->
<!-- ==============middle content======END======= -->


	








<!-- ======================================================footer 頁尾========================================================= -->
	<?php 

	require_once('footer.php');

	 ?>

	<!-- 
<script>
$(document).ready(function(){
    $(".burger").click(function(){
        $(".CoverRightMy").toggleClass("moveToLeft");
    });
});
</script>	 -->

<?php 

	}catch( PDOException $ex){
  		echo "行號: ",$ex->getLine(), "<br>";	
  		echo "訊息: ",$ex->getMessage() , "<br>";	
	}//catch


 ?>




</body>
</html>