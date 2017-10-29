
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

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BAuthority.php"){

						echo '<span style="color:#f6921E;">後台管理</span>';
					}else{

						echo '後台管理';
					}

				 ?></li></a>
				<a href="BOrdinaryMember.php"><li class="memMan"><span><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BOrdinaryMember.php" ||  $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BBusinessMember.php"){

						echo '<span style="color:#f6921E;">會員管理</span>';
					}else{

						echo '會員管理';
					}

				 ?></span>
					<ul>
						<a href="BOrdinaryMember.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BOrdinaryMember.php"){

						echo '<span style="color:#f6921E;">一般會員</span>';
					}else{

						echo '一般會員';
					}

				 ?></li></a>
						<a href="BBusinessMember.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BBusinessMember.php"){

						echo '<span style="color:#f6921E;">店長會員</span>';
					}else{

						echo '店長會員';
					}

				 ?></li></a>
					</ul>
				</li></a>
				<a href="shopManage.php"><li class="bsnMan"><span><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopManage.php" ||  $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopUp.php" ||  $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/carUp.php"){

						echo '<span style="color:#f6921E;">商家管理</span>';
					}else{

						echo '商家管理';
					}

				 ?></span>
					<ul>
						<a href="shopManage.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopManage.php"){

						echo '<span style="color:#f6921E;">店家審核</span>';
					}else{

						echo '店家審核';
					}

				 ?></li></a>
						<a href="shopUp.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/shopUp.php"){

						echo '<span style="color:#f6921E;">店面資訊</span>';
					}else{

						echo '店面資訊';
					}

				 ?></li></a>
						<a href="carUp.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/carUp.php"){

						echo '<span style="color:#f6921E;">胖小車資訊</span>';
					}else{

						echo '胖小車資訊';
					}

				 ?></li></a>
					</ul>
				</li></a>
				<a href="BMessage.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BMessage.php"){

						echo '<span style="color:#f6921E;">留言管理</span>';
					}else{

						echo '留言管理';
					}

				 ?></li></a>
				<a href="BActivity.php"><li><?php 

					if( $_SERVER['PHP_SELF']=="/BD102G2_MAC_trepun/BActivity.php"){

						echo '<span style="color:#f6921E;">活動管理</span>';
					}else{

						echo '活動管理';
					}

				 ?></li></a>
				<a href="#"><li>登出</li></a>
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