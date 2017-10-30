
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
			<p>後台管理系統</p>
			<ul class="navition">
				<a href="BAuthority.php"><li><?php 

				//$BAuthority="BAuthority.php";

				$BAuthorityLength=strlen("BAuthority.php");


				 $BAuthority=substr($_SERVER['PHP_SELF'],$BAuthorityLength*(-1));

					if( $BAuthority=="BAuthority.php"){

						echo '<span style="color:#f6921E;">後台管理</span>';
					}else{

						echo '後台管理';
					}

				 ?></li></a>
				<a href="BOrdinaryMember.php"><li class="memMan"><span><?php 

				$BOrdinaryMemberLength=strlen("BOrdinaryMember.php");


				 $BOrdinaryMember=substr($_SERVER['PHP_SELF'],$BOrdinaryMemberLength*(-1));


				 $BBusinessMemberLength=strlen("BBusinessMember.php");


				 $BBusinessMember=substr($_SERVER['PHP_SELF'],$BBusinessMemberLength*(-1));




					if( $BOrdinaryMember==="BOrdinaryMember.php" ||  $BBusinessMember==="BBusinessMember.php"){

						echo '<span style="color:#f6921E;">會員管理</span>';
					}else{

						echo '會員管理';
					}

				 ?></span>
					<ul>
						<a href="BOrdinaryMember.php"><li><?php 

					if($BOrdinaryMember==="BOrdinaryMember.php"){

						echo '<span style="color:#f6921E;">一般會員</span>';
					}else{

						echo '一般會員';
					}

				 ?></li></a>
						<a href="BBusinessMember.php"><li><?php 

					if( $BBusinessMember==="BBusinessMember.php"){

						echo '<span style="color:#f6921E;">店長會員</span>';
					}else{

						echo '店長會員';
					}

				 ?></li></a>
					</ul>
				</li></a>
				<a href="shopManage.php"><li class="bsnMan"><span><?php 

				$shopManageLength=strlen("shopManage.php");


				 $shopManage=substr($_SERVER['PHP_SELF'],$shopManageLength*(-1));


				 $shopUpLength=strlen("shopUp.php");


				 $shopUp=substr($_SERVER['PHP_SELF'],$shopUpLength*(-1));


				 $carUpLength=strlen("carUp.php");


				 $carUp=substr($_SERVER['PHP_SELF'],$carUpLength*(-1));


					if( $shopManage==="shopManage.php" ||  $shopUp==="shopUp.php" || $carUp==="carUp.php"){

						echo '<span style="color:#f6921E;">商家管理</span>';
					}else{

						echo '商家管理';
					}

				 ?></span>
					<ul>
						<a href="shopManage.php"><li><?php 

					if( $shopManage=="shopManage.php"){

						echo '<span style="color:#f6921E;">店家審核</span>';
					}else{

						echo '店家審核';
					}

				 ?></li></a>
						<a href="shopUp.php"><li><?php 

					if( $shopUp=="shopUp.php"){

						echo '<span style="color:#f6921E;">店面資訊</span>';
					}else{

						echo '店面資訊';
					}

				 ?></li></a>
						<a href="carUp.php"><li><?php 

					if( $carUp=="carUp.php"){

						echo '<span style="color:#f6921E;">胖小車資訊</span>';
					}else{

						echo '胖小車資訊';
					}

				 ?></li></a>
					</ul>
				</li></a>
				<a href="BMessage.php"><li><?php 

				$BMessageLength=strlen("BMessage.php");


				 $BMessage=substr($_SERVER['PHP_SELF'],$BMessageLength*(-1));

					if( $BMessage=="BMessage.php"){

						echo '<span style="color:#f6921E;">留言管理</span>';
					}else{

						echo '留言管理';
					}

				 ?></li></a>
				<a href="BActivity.php"><li><?php 

				$BActivityLength=strlen("BActivity.php");

				 $BActivity=substr($_SERVER['PHP_SELF'],$BActivityLength*(-1));

					if( $BActivity=="BActivity.php"){

						echo '<span style="color:#f6921E;">活動管理</span>';
					}else{

						echo '活動管理';
					}

				 ?></li></a>
				<a href="BSLogin.html"><li>登出</li></a>
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