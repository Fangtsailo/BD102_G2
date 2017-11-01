<?php 

ob_start();

session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>TEMPLATE</title>
	<link rel="stylesheet" type="text/css" href="css/activity.css">
	<!-- js區 -->
	<script  type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/header.js"></script>
	<!-- 	scrollmagic 用 -->
	<script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>

	<!-- paralla 用 -->
	<script type="text/javascript" src="js/parallax.min.js"></script>
	
	<!-- 跳窗用 -->
	<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>

</head>
<body>



<!-- ======================================================開始寫========================================================= -->

		
			<?php 
				$success="";
				if (isset($_REQUEST["success"])) {
					$success=$_REQUEST["success"];
				}

			 ?>

			<script type="text/javascript">
				window.onload=check;
				function check(){
					<?php 
						if  ($success!=="") {  ?>							
							$.sweetModal({
								content :'成功報名囉',
									buttons: {
										someOtherAction: {
											label: '查看報名去',
											classes: ' orangeB',
											action: function() {
											location.href="mementry.php"
											}
										},

										someAction: {
											label: '回活動頁',
											classes: ' orangeB',
											onClose: function(){
											location.href="activity_act.php?actNum=$_REQUEST['actNum']"; 
											}
										},
									}
							
							});

					<?php 	}
					 ?>
				}
			</script>
				

			
	


			<?php 

				require_once("header.php");
				require_once("php/common/globalVar.php");
				// $memNo=$_SESSION["memNo"];

<<<<<<< HEAD
				$actNum=6;
=======
				// $actNum=6;
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736



				if (isset($_REQUEST["actNum"])) {
					
				$actNum=$_REQUEST["actNum"];
				}




				try {
					require_once("php/pdo/connectPDO.php");

					$sql = "select * from activity,store_imformation where AC_NO='$actNum'and SI_NUM=AC_STORE_NUM ";
					$activity=$connectPDO->query($sql);
					$actRow=$activity->fetchObject();

               //  $msg = isset($msg) === true  ? $msg : "Hello" ;
               //  echo $msg;

               // echo $actRow->AC_PIC=="" ? "header.jpg" : $actRow->AC_PIC;
			 ?>

	<div class="container-template">
		
	  <div class="activity">
   		<div class="activity_banner">   <!-- 第一層 -->
   				  <!-- 背景在這層 -->
			
		<script type="text/javascript">
			$(document).ready(function () {

				$('.activity_banner').css('background','url("<?php echo $actRow->AC_BANNER1=="" ? GLOBAL_ACTIVITY_PIC_PATH."default.jpg" : GLOBAL_ACTIVITY_PIC_PATH.$actRow->AC_BANNER1; ?>") center center').css('background-size','cover');

				$('.activity_bgd').css('background','url("<?php echo $actRow->AC_BANNER2=="" ? GLOBAL_ACTIVITY_PIC_PATH."default.jpg" : GLOBAL_ACTIVITY_PIC_PATH.$actRow->AC_BANNER2; ?>") center center' ).css('background-size','cover');

				$('.activity_dough_1').css('background','url("<?php echo $actRow->AC_PIC1=="" ? GLOBAL_ACTIVITY_ACT_PIC_PATH."default1.jpg" : GLOBAL_ACTIVITY_ACT_PIC_PATH.$actRow->AC_PIC1; ?>") center center').css('background-size','cover');

				$('.pic_1').css('background','url("<?php echo $actRow->AC_INGREDIENT_PIC1=="" ? GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH."default1.jpg" : GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH.$actRow->AC_INGREDIENT_PIC1; ?>") center center').css('background-size','cover');

				$('.pic_2').css('background','url("<?php echo $actRow->AC_INGREDIENT_PIC2=="" ? GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH."default2.jpg" : GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH.$actRow->AC_INGREDIENT_PIC2; ?>") center center').css('background-size','cover');


				$('.pic_3').css('background','url("<?php echo $actRow->AC_INGREDIENT_PIC3=="" ? GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH."default3.jpg" : GLOBAL_ACTIVITY_INGREDIENT_PIC_PATH.$actRow->AC_INGREDIENT_PIC3; ?>") center center').css('background-size','cover');


				$('.activity_dough_5').css('background','url("<?php echo $actRow->AC_PIC2=="" ? GLOBAL_ACTIVITY_ACT_PIC_PATH."default2.jpg" : GLOBAL_ACTIVITY_ACT_PIC_PATH.$actRow->AC_PIC2; ?>") center center').css('background-size','cover');

				$('.activity_dough_6').css('background','url("<?php echo $actRow->AC_PIC3=="" ? GLOBAL_ACTIVITY_ACT_PIC_PATH."default3.jpg" : GLOBAL_ACTIVITY_ACT_PIC_PATH.$actRow->AC_PIC3; ?>") center center').css('background-size','cover');

				$('.fin_1').css('background','url("<?php echo $actRow->AC_PRODUCT_PIC1=="" ? GLOBAL_ACTIVITY_PRODUCT_PIC_PATH."default1.jpg" :GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.$actRow->AC_PRODUCT_PIC1; ?>") center center').css('background-size','cover');

				$('.fin_2').css('background','url("<?php echo $actRow->AC_PRODUCT_PIC2=="" ? GLOBAL_ACTIVITY_PRODUCT_PIC_PATH."default2.jpg" :GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.$actRow->AC_PRODUCT_PIC2; ?>") center center').css('background-size','cover');
				$('.fin_3').css('background','url("<?php echo $actRow->AC_PRODUCT_PIC3=="" ? GLOBAL_ACTIVITY_PRODUCT_PIC_PATH."default3.jpg" : GLOBAL_ACTIVITY_PRODUCT_PIC_PATH.$actRow->AC_PRODUCT_PIC3; ?>") center center').css('background-size','cover');


			});
		</script>


			
   			<section class="section_0">
   			<div class="activity_Dough trigger0"> <!--  麵團區 -->
   				<div id="acty_Dough">
	   				<img src="img/act/acty_icon.png">
	   				<h1>烘培體驗</h1>
	   				<div class="acty_h2">
	   					<h2><?php echo $actRow->AC_NAME ?></h2>	
	   				</div>	
   				</div>
   			</div>


			<div class="activityDough "> <!--  麵團區 -->
   				<div id="acty_Dough">
	   				<img src="img/act/acty_icon.png">
	   				<h1>烘培體驗</h1>
	   				<div class="acty_h2">
	   					<h2><?php echo $actRow->AC_NAME ?></h2>	
	   				</div>	
   				</div>
   			</div>



   			<div class="activity_board"><!-- 介紹區 -->
   				 
   				<div class="acty_board">
   					<img src="img/act/acty_board.png"> <!-- 板 -->
   					<div class="acty_board_p"><p><?php echo $actRow->AC_DETAIL1 ?></p>
   					</div>
   					<div class="acty_stirrer">
   						<img src="img/act/acty_stirrer.png">
   					</div>
   				</div>
   			

   			</div>	
   			
   			<div class="activity_detail"><!--  資訊 -->
   				<ul>
   					<li>體驗地點 :<?php echo $actRow->AC_ADDRESS ?></li>
	   				<li>時間 : <?php echo $actRow->AC_TIME ?></li>
	   				<li>人數 : <?php echo $actRow->AC_MEM_COUNT=="" ? "由店家決定" :  $actRow->AC_MEM_COUNT ?>人</li>
	   				<li>聯絡方式 : <?php echo $actRow->SI_PHONE ?></li>
	   				<li>材料 : <?php echo $actRow->AC_INGREDIENT=="" ? "由店家提供" : $actRow->AC_INGREDIENT ?></li>
	   				<li>費用 : <?php echo $actRow->AC_PRICE=="" ? "詳情請聯絡店家" :  $actRow->AC_PRICE ?></li>
	   			</ul>
   			</div>	
					

   			</section>  <!-- 麵團停止 -->	
   		</div>      <!-- banner層 -->






		<section class="section_1 section_2 section_3 section_4">
			
		<div class="activity_content trigger2 trigger1">   <!-- 第二大層 --><!-- 鍋起始 --> <!-- 麵團跑 -->
			
		 	
		<div class="activity_content_inner">	

			<div class="activity_pot">
				<div class="acty_out_pot">
					<img src="img/act/acty_pot.png"><!-- 外鍋 -->
					<h2><?php echo $actRow->AC_SECOND_NAME=="" ? "麵包師傅親自指導" : $actRow->AC_SECOND_NAME ?></h2>
				 	<div class="activity_pot_b">  <!-- 最裡層 -->
						<img src="img/act/acty_pot_b.png">
					</div>
					<div class="big"></div>
					<div class="activity_dough_change"></div>   <!-- 麵團 -->
				</div>
				
				
				
			</div>

			<div class="activityPot rwdw">
				<div class="acty_out_pot">
					<img src="img/act/acty_pot.png"><!-- 外鍋 -->
					<h2><?php echo $actRow->AC_SECOND_NAME=="" ? "麵包師傅親自指導" : $actRow->AC_SECOND_NAME ?></h2>
				 	<div class="activity_pot_b">  <!-- 最裡層 -->
						<img src="img/act/acty_pot_b.png">
					</div>
					
					<div class="activity_dough_changes"></div>   <!-- 麵團 -->
					
				</div>
				
				
				
			</div>
			
			
			<div class="activity_dough_1  "></div>
				<div class="clearfix rwd_none"></div>
				
				<div class="activity_dough_2">
					<p><?php echo $actRow->AC_DETAIL2=="" ? "烘焙坊教你製作好吃又簡單的麵包，機會難得快來體驗。" : $actRow->AC_DETAIL2 ?>		
					</p>
					<div class="act_btn">
						<a href="#apply">報名</a>
					</div>
				</div>
			

			<div class="clearfix"></div>
			<div class="activity_dough_3 trigger4">
				<h2>食材選用</h2>
				<p><?php echo $actRow->AC_DETAIL3=="" ? "店家食材報你知，選用讓麵包更加好吃的新鮮食材，並且安全衛生，讓你做得好吃，也吃得安心。" : $actRow->AC_DETAIL3 ?></p>

	
			</div>
			<div class="clearfix "></div>

     
			
			<section class="section_5">
			<div class="activity_dough_4_all trigger3">
				<div class="activity_dough_4 pic_1">
					
				</div>
				<div class="activity_dough_4 pic_2">
					
				</div>
				<div class="activity_dough_4 pic_3">
					
				</div>
			</div>
			<div class="clearfix"></div>
			
				
				<div class="bgc trigger6">
					
				<div class="activity_dough_5  "></div>
				<div class="act_wind">
					<img src="img/act/act_wind.png">
					<div class="actShadow"></div>
				</div>
				<div class="activity_dough_6"></div>
				<div class="clearfix"></div>
				</div>
			
			</section>	
			</div>	<!-- activity_content_inner -->
			
			
		</div>   <!-- activity_content -->

		</section>



			
		<section class="section_6"><a name="apply">
			<div class="activity_application trigger7" id="activity_application">
			<div class="activity_bgd"></div>
				<div class="activity_final">
					<div class="activity_fin_pic fin_1">
						
					</div>

					<div class="activity_fin_pic">
						<p>不藏私作法大公開</p>
					</div>

					<div class="activity_fin_pic fin_2">
						
					</div>

					<div class="activity_fin_pic">
						<p>邊吃邊學好好玩</p>
					</div>
					<div class="activity_fin_pic fin_3">
						
					</div>
					
					<div class="activity_fin_pic">
						<p>成就感UP!!</p>
					</div>
						<div class="clearfix"></div>
				
				</div>


				<div class="activity_form">
					<!-- =================表單樣式===================== -->
					
		
					<?php if (isset($_SESSION["memNo"])) {
						
							$memNo=$_SESSION["memNo"];
					
<<<<<<< HEAD
						$memsql="select * from ac_info where AC_NO='$actNum' and MEM_NO ='$memNo' ";
=======
						$memsql="SELECT * FROM ac_info a left join  member m  on  m.MEM_NO=a.MEM_NO where a.AC_NO='$actNum' and a.MEM_NO ='$memNo'  ";
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
						$actSign=$connectPDO->query($memsql);
						$activityRow=$actSign->fetchObject();	


						if (isset($activityRow->MEM_NO)) {
							?>
						
			<!-- ===================================已報名================================================================= -->

									<div class="globalForm" >
										 
											<div class="globalFormHeader">
											
											
												<h1>已報名本活動</h1>
												
											</div>
											<div class="globalFormContent">
												
																				
												<div class="globalFormBtns">
													
													<p>活動地點 :  <?php echo $actRow->AC_ADDRESS ?></p>
													<p>活動時間為 : <?php echo $actRow->AC_TIME ?></p>	
													<p>記得準時參加活動喔，詳情請聯絡店家</p>				
												</div>

											</div>
										
									</div>  <!-- globalForm -->
									
			<!-- 
					======================================還未報名============================================================ -->			 				
								<?php			
									}else{
<<<<<<< HEAD
=======
										$memActsql="SELECT * from member where $memNo=MEM_NO ";
										$memInfor=$connectPDO->query($memActsql);
										$memRow=$memInfor->fetchObject();
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
								 ?>		

								 <div class="globalForm" >
										 
										<form action="php/activity/participation/actform.php" method="get" id='actform'>
							

											<input type="hidden" name="acNo" value="<?php echo $actRow->AC_NO ?>">
<<<<<<< HEAD

=======
										
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

											<div class="globalFormHeader">
														
						
												<h1>報名去</h1>
												<p>快來一起參與烘培體驗吧!會員只要填寫基本資料，就能成功報名囉! <br> 名額有限速速行動~~ </p>
											</div>

											<div class="globalFormContent">

												<div class="globalFormInput">
<<<<<<< HEAD
													<label><span>*</span>姓名</label><input type="text" name="memName" placeholder="必填" id="memName">
												</div>
												
												<div class="globalFormInput">
													<label><span>*</span>聯絡電話</label><input type="tel" id="memPhone" name="memPhone" placeholder="手機或家用電話(必填)">
												</div>
												
												<div class="globalFormInput">
													<label><span>*</span>信箱</label><input type="email" name="memEmail"  id="memEmail"  placeholder="必填" required>
=======
													<label><span>*</span>姓名</label><input type="text" name="memName" placeholder="必填" id="memName" value="<?php if(isset($memRow->MEM_REALNAME)){echo $memRow->MEM_REALNAME ;}  ?>">
												</div>
												
												<div class="globalFormInput">
													<label><span>*</span>聯絡電話</label><input type="tel" id="memPhone" name="memPhone" placeholder="手機或家用電話(必填)" value="<?php if(isset($memRow->MEM_PHONE)){echo $memRow->MEM_PHONE ;}  ?>">
												</div>
												
												<div class="globalFormInput">
													<label><span>*</span>信箱</label><input type="email" name="memEmail" value="<?php if(isset($memRow->MEM_MAIL)){echo $memRow->MEM_MAIL ;}  ?>" id="memEmail"  placeholder="必填" required>
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
												</div>

												
												<div class="clearfix"></div>
												<div class="globalFormBtns">
													<input class="globalCancelBtn btnTop" type="reset" value="取消">
<<<<<<< HEAD
													<input type="buttom" name="" class="globalOkBtn btnTop" value="送出" id="actSubmit">					
=======
													<input type="button" name="" class="globalOkBtn btnTop" value="送出" id="actSubmit">					
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
												</div>

											</div>
										</form>
									</div> <!-- globalForm -->
									
							<script type="text/javascript">
								
								$(function(){

										$('#actSubmit').click(function(){
											if($('#memName').val().length==0 && $('#memName').val().trim()==''){
													$.sweetModal({
														content: '姓名沒有輸入喔',
														icon: $.sweetModal.ICON_WARNING,
														width: '300px',
														theme: $.sweetModal.THEME_MIXED,
													});
											}else if($('#memPhone').val().length==0 && $('#memPhone').val().trim()==''){
													$.sweetModal({
															content: '聯絡電話沒有輸入喔',
															icon: $.sweetModal.ICON_WARNING,
															width: '300px',
															theme: $.sweetModal.THEME_MIXED,
													});
											}else if($('#memEmail').val().length==0 && $('#memEmail').val().trim()==''){
													$.sweetModal({
															content: 'e-mail沒有輸入喔',
															icon: $.sweetModal.ICON_WARNING,
															width: '300px',
															theme: $.sweetModal.THEME_MIXED,
													});
											}else {
													$('#memName').val($('#memName').val().trim());
													$('#memPhone').val($('#memPhone').val().trim());
													$('#memEmail').val($('#memEmail').val().trim());
														  		//消空格
<<<<<<< HEAD
													$.sweetModal({
														content: '成功報名',
														icon: $.sweetModal.ICON_SUCCESS,
														width: '300px',
														theme: $.sweetModal.THEME_MIXED,
														onClose: function(){
												              $( "#actform" ).submit();
												         }
													});
														  				
=======

														
												              $( "#actform" ).submit();
												    				
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
											}

										});
								}); //function()

							</script>



										<?php			
										}
									 ?>		
						<!-- ===================================未登入=========================================== -->

				<?php  } else{ ?>
					
						<div class="globalForm" >
							 
								<div class="globalFormHeader">
								
		
			
									<h1>登入PUN友參加活動</h1>
									<p>快來一起參與烘培體驗吧!會員只要填寫基本資料，就能成功報名囉! <br> 名額有限速速行動~~ </p>
								</div>
								<div class="globalFormContent">

									
					
									
									<div class="globalFormBtns">
										
										<input type="button" name="" class="globalOkBtn btnTop" id="actBtn" value="登入">					
									</div>

								</div>
							
						</div>  <!-- globalForm -->



						<script type="text/javascript">
								
							$(function(){
								$('#actBtn').click(function(){
								$('#loginBox').fadeIn(500);
									});
							});

						</script>



				<?php 
				}?>   <!-- else 還沒登入 -->

				</div><!-- =================表單樣式===end================== -->




					<div class="clearfix"></div>
					<div class="activity_bread ">
							<img src="img/act/acty_finish_bread.png">
							<div class="activity_cloud">
								<div class="act_cloud">
									<img alt="cloud.png" src="img/act/cloud.png">
								</div>
								<div class="act_cloud">
									<img alt="cloud.png" src="img/act/cloud.png">
								</div>
								<div class="act_cloud">
									<img alt="cloud.png" src="img/act/cloud.png">
								</div>
							</div>
							
					</div>
					<div class="activity_bread2 rwd_none">
							<img src="img/act/acty_finish_bread.png">
					</div>

					

				</div> <!-- activity_application -->
			</section>
   		</div><!-- activity -->
		

	</div>  <!-- container-template -->

<?php 
			
		}catch(PDOException $e) {
				echo "錯誤行號 : ", $e->getLine(), "<br>";
				echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
				}

	 ?>

<?php require_once("footer.php");?>




	 <script type="text/javascript" src="js/activity_tweenmax.js"></script>

</body>
</html>