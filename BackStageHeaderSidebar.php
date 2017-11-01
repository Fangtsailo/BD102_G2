
<?php 



	try{





			require_once("php/pdo/connectPDO.php");

			echo $_SERVER['PHP_SELF'];

			// exit();


?>			





	<div class="coverHeader">


		<div class="Backheader">
			<div class="logoimg">
				<img src="img/trepunLogoWhite.svg">
			</div>
			<p>後台管理    <?php 

				$BAuthorityLength=strlen("BAuthority.php");


				 $BAuthority=substr($_SERVER['PHP_SELF'],$BAuthorityLength*(-1));

				 $BOrdinaryMemberLength=strlen("BOrdinaryMember.php");


				 $BOrdinaryMember=substr($_SERVER['PHP_SELF'],$BOrdinaryMemberLength*(-1));


				 $BBusinessMemberLength=strlen("BBusinessMember.php");


				 $BBusinessMember=substr($_SERVER['PHP_SELF'],$BBusinessMemberLength*(-1));

				 $shopManageLength=strlen("shopManage.php");


				 $shopManage=substr($_SERVER['PHP_SELF'],$shopManageLength*(-1));


				 $shopUpLength=strlen("shopUp.php");


				 $shopUp=substr($_SERVER['PHP_SELF'],$shopUpLength*(-1));


				 $carUpLength=strlen("carUp.php");


				 $carUp=substr($_SERVER['PHP_SELF'],$carUpLength*(-1));

				 $BMessageLength=strlen("BMessage.php");


				 $BMessage=substr($_SERVER['PHP_SELF'],$BMessageLength*(-1));

				 $BActivityLength=strlen("BActivity.php");

				 $BActivity=substr($_SERVER['PHP_SELF'],$BActivityLength*(-1));


				 if($BAuthority=="BAuthority.php"){
				 	echo '<span style="color:#f6921E;">後台管理</span>';
				 }else if($BOrdinaryMember==="BOrdinaryMember.php"){
				 	echo '<span style="color:#f6921E;">一般會員</span>';
				 }else if( $BBusinessMember==="BBusinessMember.php"){
						echo '<span style="color:#f6921E;">店長會員</span>';
				 }else if( $shopManage=="shopManage.php"){

						echo '<span style="color:#f6921E;">店家審核</span>';
				}else if( $shopUp=="shopUp.php"){

						echo '<span style="color:#f6921E;">店面資訊</span>';
					}else if( $carUp=="carUp.php"){

						echo '<span style="color:#f6921E;">胖小車資訊</span>';
					} else if( $BMessage=="BMessage.php"){

						echo '<span style="color:#f6921E;">留言管理</span>';
					}else if( $BActivity=="BActivity.php"){

						echo '<span style="color:#f6921E;">活動管理</span>';
					}












			 ?></p>
			<ul class="navition">
				<a href="BAuthority.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BAuthority.php"){
=======
				//$BAuthority="BAuthority.php";

				$BAuthorityLength=strlen("BAuthority.php");


				 $BAuthority=substr($_SERVER['PHP_SELF'],$BAuthorityLength*(-1));

					if( $BAuthority=="BAuthority.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">後台管理</span>';
					}else{

						echo '後台管理';
					}

				 ?></li></a>
				<a href="BOrdinaryMember.php"><li class="memMan"><span><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BOrdinaryMember.php" ||  $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BBusinessMember.php"){
=======
				$BOrdinaryMemberLength=strlen("BOrdinaryMember.php");


				 $BOrdinaryMember=substr($_SERVER['PHP_SELF'],$BOrdinaryMemberLength*(-1));


				 $BBusinessMemberLength=strlen("BBusinessMember.php");


				 $BBusinessMember=substr($_SERVER['PHP_SELF'],$BBusinessMemberLength*(-1));




					if( $BOrdinaryMember==="BOrdinaryMember.php" ||  $BBusinessMember==="BBusinessMember.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">會員管理</span>';
					}else{

						echo '會員管理';
					}

				 ?></span>
					<ul>
						<a href="BOrdinaryMember.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BOrdinaryMember.php"){
=======
					if($BOrdinaryMember==="BOrdinaryMember.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">一般會員</span>';
					}else{

						echo '一般會員';
					}

				 ?></li></a>
						<a href="BBusinessMember.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BBusinessMember.php"){
=======
					if( $BBusinessMember==="BBusinessMember.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">店長會員</span>';
					}else{

						echo '店長會員';
					}

				 ?></li></a>
					</ul>
				</li></a>
				<a href="shopManage.php"><li class="bsnMan"><span><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopManage.php" ||  $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopUp.php" ||  $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/carUp.php"){
=======
				$shopManageLength=strlen("shopManage.php");


				 $shopManage=substr($_SERVER['PHP_SELF'],$shopManageLength*(-1));


				 $shopUpLength=strlen("shopUp.php");


				 $shopUp=substr($_SERVER['PHP_SELF'],$shopUpLength*(-1));


				 $carUpLength=strlen("carUp.php");


				 $carUp=substr($_SERVER['PHP_SELF'],$carUpLength*(-1));


					if( $shopManage==="shopManage.php" ||  $shopUp==="shopUp.php" || $carUp==="carUp.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">商家管理</span>';
					}else{

						echo '商家管理';
					}

				 ?></span>
					<ul>
						<a href="shopManage.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopManage.php"){
=======
					if( $shopManage=="shopManage.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">店家審核</span>';
					}else{

						echo '店家審核';
					}

				 ?></li></a>
						<a href="shopUp.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopUp.php"){
=======
					if( $shopUp=="shopUp.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">店面資訊</span>';
					}else{

						echo '店面資訊';
					}

				 ?></li></a>
						<a href="carUp.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/carUp.php"){
=======
					if( $carUp=="carUp.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">胖小車資訊</span>';
					}else{

						echo '胖小車資訊';
					}

				 ?></li></a>
					</ul>
				</li></a>
				<a href="BMessage.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BMessage.php"){
=======
				$BMessageLength=strlen("BMessage.php");


				 $BMessage=substr($_SERVER['PHP_SELF'],$BMessageLength*(-1));

					if( $BMessage=="BMessage.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">留言管理</span>';
					}else{

						echo '留言管理';
					}

				 ?></li></a>
				<a href="BActivity.php"><li><?php 

<<<<<<< HEAD
					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BActivity.php"){
=======
				$BActivityLength=strlen("BActivity.php");

				 $BActivity=substr($_SERVER['PHP_SELF'],$BActivityLength*(-1));

					if( $BActivity=="BActivity.php"){
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736

						echo '<span style="color:#f6921E;">活動管理</span>';
					}else{

						echo '活動管理';
					}

				 ?></li></a>
<<<<<<< HEAD
				<a href="#"><li>登出</li></a>
=======
				<a href="BSLogin.html"><li>登出</li></a>
>>>>>>> ea9d01410979e319ddb16791f424f899cbba5736
			</ul>
		</div>

		

	</div>
	

	<?php

					 	


		}catch( PDOException $ex){
			echo "行號: ",$ex->getLine(), "<br>";	
			echo "訊息: ",$ex->getMessage() , "<br>";	
		}//catch


		?>










<!-- 	<div class="container"> -->
	<!-- 	<div class="coverNavition"> -->
			<!-- <div class="navition">
				<ul>
					<a href=""><li>後台管理員</li></a>
					<a href=""><li>會員管理</li></a>
					<a href=""><li>一般會員</li></a>
					<a href=""><li>店長會員</li></a>
					<a href=""><li>商家管理</li></a>
					<a href=""><li>審核新增店家</li></a>
					<a href=""><li>店面資訊</li></a>
					<a href=""><li>胖小車資訊</li></a>
					<a href=""><li>留言管理</li></a>
					<a href=""><li>體驗活動管理</li></a>
				</ul>
			</div> -->