<link rel="stylesheet" type="text/css" href="libs/jquery.sweet-modal-1.3.3/dev/jquery.sweet-modal.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="libs/jquery.sweet-modal-1.3.3/min/jquery.sweet-modal.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZlV8XEYyGoIi9poFgwFzwc5X_rfvtXsE&callback"></script>
<!-- ======================================================header 頁首========================================================= -->
<?php 
	//判斷是否有登入過網站
	if ( isset($_SESSION["memId"]) ===true ) { //若有，則打開會員專區面板
		// echo "<script type='text/javascript'>window.onload=changePanel;</script>"; //更換會員專區面板
		echo "<script type='text/javascript'>window.addEventListener('load',changePanel,false);</script>"; //更換會員專區面板
		if ($_SESSION["memRole"] == 1) { //若會員身份為店長，則打開店長專區連結
			echo "<script type='text/javascript'>window.addEventListener('load',changeRole,false);</script>";
		}
	}else { 
		// session_destroy();
	}  
	require_once("php/common/globalVar.php");
 ?>


<header class="globalHead">

<!-- “登入會員”燈箱 -->
	<div class="headLoginBox" id="loginBox">
		
		<div class="globalForm">
		<form id="loginForm" name="loginForm" action="php/member/login/headerlogIn.php" method="post">
			<div class="globalFormHeader">
				<div class="svg closeBtn">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
					<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2
						L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15
						s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
					</svg>
				</div>
				<img src="img/trepun2.svg">
				<p>歡迎登入找麥方麵包平台</p>	
			</div>
			<div class="globalFormContent">

				<div class="globalFormInput">
					<label>會員帳號</label><input type="text" name="memId" id="memId" placeholder="請輸入會員帳號或信箱">
				</div>
				<div class="globalFormInput">
					<label>會員密碼</label><input type="password" name="memPsw" id="memPsw" placeholder="密碼">
				</div>
				<div class="forgetPsw">
					<a href="#">忘記密碼？</a>
				</div>
				<div class="clearfix"></div>
				
				<div class="globalFormBtns">
					<div class="globalCancelBtn" id="cancelLogin">取消</div>
					<input type="button" name="submit" class="globalOkBtn" id="submitLogin" value="登入">
				</div>
				
				<div class="facebookLogin">
					<a href="#">
					Facebook帳號登入</a>
				</div>
				
				<div class="registerLink">
					<span id="changeToRegister">還沒有帳號？ 註冊成為PUN友</span>
				</div>

			</div>
		</form>
		</div>
			
	</div>


<!-- “註冊會員”燈箱 -->
	<div class="headRegisterBox" id="RegisterBox">
		
		<div class="globalForm">
		<form id="registerForm" action="php/member/register/headerRegister.php" method="get">
			<div class="globalFormHeader">
				<div class="svg closeBtn">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
					<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2
						L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15
						s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
					</svg>
				</div>
				<img src="img/trepun2.svg">
				<p>註冊成為PUN友！</p>	
			</div>
			<div class="globalFormContent">

				<div class="globalFormInput enterID">
					<label>註冊會員帳號</label><input type="text" id="newMemId" name="newMemId" placeholder="請輸入會員帳號" required>
					<span id="showResult"></span>
				</div>
				<div class="globalFormInput">
					<label>註冊會員信箱</label><input type="email" id="newMemMail" name="newMemMail" placeholder="請輸入會員信箱" required>
				</div>
				<div class="globalFormInput enterPsw">
					<label>會員密碼</label><input type="password" id="newMemPsw"  name="newMemPsw" placeholder="密碼" required>
					<span><i id="showPsw" class="fa fa-2x fa-eye" aria-hidden="true"></i></span>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="globalFormBtns">
					<div class="globalCancelBtn">取消</div>
					<input id="submitRegister" type="button" name="SubmitRegister" class="globalOkBtn" value="註冊">					
				</div>
				
				<div class="facebookRegister">
					<a href="#">
					Facebook帳號註冊</a>
				</div>
				
				<div class="loginLink">
					<span id="changeToLogin">已經有帳號，返回登入頁面</span>
				</div>

			</div>
		</form>
		</div>
			
	</div>	
	

<!-- logo區塊 -->
		<div class="headLogo">
			<a href="homepage.php">
				<img src="img/trepunLogoWhite.svg">
			</a>	
		</div>		


<!-- 頁首右邊區塊 -->

	<div class="headerRight">

		<!-- 頁首搜尋區塊 -->
			<div class="headSearch">
				<span>商家搜尋</span>
				<form id="SearchForm" action="search.php" method="get">
				<select id="headSearchKind" name="shopType">
					<option id="shops" value="0">店家</option>
					<option id="cars" value="1">胖小車</option>
				</select>
				<select name="shopPosition" id="headSearchPlace">
				<option value="">地區</option>
				<option value="0">北部</option>
				<option value="1">中部</option>
				<option value="2">南部</option>
				<option value="3">東部</option>
				</select>
				<input type="radio" name="filter" value="top" id="top">
				<label id="headSearchHot" for="top">熱門</label>
				<input type="radio" name="filter" value="stars" id="stars">
				<label id="headSearchStar" for="stars">評價</label>
				<input type="text" name="searchName" id="headSearch">
				<input id="headSearchSubmit" type="button" value="搜尋">
				</form>
			</div>

		<!-- 頁首會員區塊 -->
			<div class="headAccount">
		
		<!-- 登入後的狀態顯示-->
				<div id="headMemStatus">
					<div>
						<a href="#">
							<img id="addShop1" src="img/homepage/addShop1.svg">
						</a>
						<a href="#" id="headMemPic">
							<?php 
								if ( isset($_SESSION['memPic']) ){
									echo "<img src='img/member_pic/".$_SESSION['memPic']."'>";
								}else {
									echo "<img src='img/member_pic/default.png'>";
								}

							 ?>
							
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="memStatusBar" id="memStatusBar">
					<ul>
						<li><a href="memedit.php"> <?php echo isset($_SESSION["memId"])? $_SESSION["memId"] : "" ; ?>  </a></li>
						<li><a class="memLink" href="memedit.php">基本資料</a></li>
						<li><a class="memLink" href="memfollow.php">我的追蹤</a></li>
						<li><a class="memLink" href="memcomment.php">我的留言</a></li>
						<li><a class="memLink" href="mementry.php">我的報名</a></li>
						<li><a id="role" class="memLink" href="memBeBoss1.php">成為店長</a></li>
						<li><a class="memLink" href="php/member/login/sessionLogOut.php" id="logOut">登出</a></li>
					</ul>
				</div>


		<!-- 登入與註冊 -->
				<div id="headMemLogin">
	
					<div class="loginGrp">
						
						<div class="loginBtn">
							<span id="loginIcon">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve"><g>
								<path d="M28.4,28.2c-0.5-3.6-1.8-4.1-3.7-4.9c-0.3-0.1-0.7-0.3-1.1-0.5c-0.2-0.1-0.3-0.2-0.5-0.2c-1.1-0.5-1.4-0.8-1.4-1.3c1.4-1,2.2-2.6,2.2-4.1v-6.4L23.3,11c-0.4,0.1-0.7,0.1-1,0.1c-0.8,0-1.3-0.1-1.9-0.3c-0.5-0.1-1.1-0.3-1.9-0.3c-0.9,0-1.6,0.4-2.1,1.1l0.9,0.7c0.3-0.4,0.7-0.6,1.2-0.6c0.7,0,1.1,0.1,1.7,0.2c0.6,0.1,1.2,0.3,2.1,0.3c0.2,0,0.3,0,0.5,0v5.1c0,1.9-1.4,3.9-3.9,3.9c-2.4,0-3.9-2-3.9-3.9v-5.9C15.3,11,16,9,18.6,9c0.9,0,1.5,0.2,2.1,0.3c0.5,0.1,1,0.2,1.6,0.2c0.6,0,1.2-0.1,1.6-0.3V8.1c-0.4,0.1-1,0.4-1.6,0.4c-0.5,0-0.9-0.1-1.4-0.2c-0.7-0.2-1.4-0.3-2.4-0.3c-2.9,0-4.2,2.1-4.5,3.3l0,6.1c0,1.5,0.8,3.2,2.2,4.1c-0.1,0.5-0.3,0.8-1.4,1.3c-0.1,0.1-0.3,0.1-0.5,0.2c-0.4,0.2-0.7,0.3-1.1,0.5c-1.8,0.8-3.2,1.3-3.7,4.9l-0.1,0.6h19L28.4,28.2z M10.8,27.8c0.4-2.4,1.3-2.7,2.9-3.4c0.3-0.1,0.7-0.3,1.1-0.5c0.3-0.1,0.5-0.2,0.8-0.4c0.8-0.4,1.4-0.9,1.6-1.6c0.5,0.2,1.1,0.3,1.8,0.3c0.6,0,1.2-0.1,1.8-0.3c0.2,0.7,0.8,1.2,1.6,1.6c0.2,0.1,0.5,0.2,0.8,0.4c0.4,0.2,0.8,0.3,1.1,0.5c1.6,0.7,2.4,1,2.9,3.4H10.8z"/>
								<path class="st1" d="M36,19c0,9.4-7.6,17-17,17c-8.3,0-15.3-6-16.7-14h2c1.4,6.8,7.4,12,14.7,12c8.3,0,15-6.7,15-15S27.3,4,19,4S4,10.7,4,19c0,0.3,0,0.7,0.1,1H2v-1C2,9.6,9.6,2,19,2S36,9.6,36,19z"/></g></svg>
							</span>
							<span id="loginTxt">登入</span>
						</div>
					
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
	
<!-- 頁首RWD手機版版面 -->
		

<!-- 右側搜尋icon -->
	<div class="rwd_headerSearch">
		<div class="svg">
			<svg  width="32" height="32" viewBox="0 0 38 38"><path  width="30" height="30" class="searchIcon" d="M37.4,36.7L36,38.1L24.9,26.9c2.8-2.4,4.6-5.9,4.6-9.9c0-7.2-5.8-13-13-13s-13,5.8-13,13s5.8,13,13,13c2.5,0,4.8-0.7,6.8-1.9l1.4,1.4c-2.4,1.6-5.2,2.5-8.2,2.5c-8.3,0-15-6.7-15-15s6.7-15,15-15s15,6.7,15,15c0,3.8-1.4,7.2-3.7,9.9L37.4,36.7z"/></svg>
		</div>
	</div>
	
	<div class="rwdSearchBar" id="rwdSearchBar">
		<form id="rwdsearchForm" action="search.php" method="get">
		<div class="rwdsearchItem">
			<span>- 商家型態 -</span>
			<input id="shopType1" type="radio" value="1" name="shopType">
			<label for="shopType1" class="selectType rwdfilter">麵包小車</label>

			<input id="shopType2" type="radio" value="0" name="shopType">
			<label for="shopType2" class="selectType rwdfilter">麵包店</label>
			
			<span>- 地區 -</span>
			<div class="searchArea">
				<input id="shopPos1" type="radio" name="shopPosition" value="0">
				<label for="shopPos1" class="rwdfilter">北部</label>

				<input id="shopPos2" type="radio" name="shopPosition" value="1">
				<label for="shopPos2" class="rwdfilter">中部</label>

				<input id="shopPos3" type="radio" name="shopPosition" value="2">
				<label for="shopPos3" class="rwdfilter">南部</label>

				<input id="shopPos4" type="radio" name="shopPosition" value="3">
				<label for="shopPos4" class="rwdfilter">東部</label>

			</div>
			<span>- 其他篩選條件 -</span>
				<input type="radio" value="top" name="filter" id="filterTops">
				<label for="filterTops" class="rwdfilter">熱門</label>	
				<input type="radio" name="filter" value="stars" id="filterstars">
				<label for="filterstars" class="rwdfilter">評價</label>

			<div class="clearfix"></div>
		</div>
		<input type="search" name="searchName" id="rwdHeadSearch" placeholder="搜尋您附近的麵包香">
		<input id="rwdSubmit" type="button" value="搜尋">
		</form>
	</div>


	
<!-- 左側漢堡選單 -->
	<div class="burgerMenu" id="burgerBtn">
			<!-- <span></span>
			<span></span>
			<span></span> -->
			<span>
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve"><g>
								<path d="M28.4,28.2c-0.5-3.6-1.8-4.1-3.7-4.9c-0.3-0.1-0.7-0.3-1.1-0.5c-0.2-0.1-0.3-0.2-0.5-0.2c-1.1-0.5-1.4-0.8-1.4-1.3c1.4-1,2.2-2.6,2.2-4.1v-6.4L23.3,11c-0.4,0.1-0.7,0.1-1,0.1c-0.8,0-1.3-0.1-1.9-0.3c-0.5-0.1-1.1-0.3-1.9-0.3c-0.9,0-1.6,0.4-2.1,1.1l0.9,0.7c0.3-0.4,0.7-0.6,1.2-0.6c0.7,0,1.1,0.1,1.7,0.2c0.6,0.1,1.2,0.3,2.1,0.3c0.2,0,0.3,0,0.5,0v5.1c0,1.9-1.4,3.9-3.9,3.9c-2.4,0-3.9-2-3.9-3.9v-5.9C15.3,11,16,9,18.6,9c0.9,0,1.5,0.2,2.1,0.3c0.5,0.1,1,0.2,1.6,0.2c0.6,0,1.2-0.1,1.6-0.3V8.1c-0.4,0.1-1,0.4-1.6,0.4c-0.5,0-0.9-0.1-1.4-0.2c-0.7-0.2-1.4-0.3-2.4-0.3c-2.9,0-4.2,2.1-4.5,3.3l0,6.1c0,1.5,0.8,3.2,2.2,4.1c-0.1,0.5-0.3,0.8-1.4,1.3c-0.1,0.1-0.3,0.1-0.5,0.2c-0.4,0.2-0.7,0.3-1.1,0.5c-1.8,0.8-3.2,1.3-3.7,4.9l-0.1,0.6h19L28.4,28.2z M10.8,27.8c0.4-2.4,1.3-2.7,2.9-3.4c0.3-0.1,0.7-0.3,1.1-0.5c0.3-0.1,0.5-0.2,0.8-0.4c0.8-0.4,1.4-0.9,1.6-1.6c0.5,0.2,1.1,0.3,1.8,0.3c0.6,0,1.2-0.1,1.8-0.3c0.2,0.7,0.8,1.2,1.6,1.6c0.2,0.1,0.5,0.2,0.8,0.4c0.4,0.2,0.8,0.3,1.1,0.5c1.6,0.7,2.4,1,2.9,3.4H10.8z"/>
								<path class="st1" d="M36,19c0,9.4-7.6,17-17,17c-8.3,0-15.3-6-16.7-14h2c1.4,6.8,7.4,12,14.7,12c8.3,0,15-6.7,15-15S27.3,4,19,4S4,10.7,4,19c0,0.3,0,0.7,0.1,1H2v-1C2,9.6,9.6,2,19,2S36,9.6,36,19z"/></g></svg>
			</span>
	</div>
	<nav id="menu" class="hideMenu">
		<ul id="visitor">
			<li class="closeMenu">
				<span id="closeBurger1">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 			viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
					<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
					</svg>
				</span>
				<div class="clearfix"></div>
			</li>
			<li class="navItem needLogIn"><a class="globalOkBtn" id="rwdLoginBtn" href="#">請先登入會員</a></li>
		</ul>	
		<ul id="memLoggedin">
			<li class="closeMenu">
				<span id="closeBurger">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 			viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
					<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
					</svg>
				</span>
				<div class="clearfix"></div>
			</li>
			<li class="memPart">
				<div class="memPic">
					<?php 
								if ( isset($_SESSION['memPic']) ){
									echo "<img src='img/member_pic/".$_SESSION['memPic']."'>";
								}else {
									echo "<img src='img/member_pic/default.png'>";
								}

							 ?>
				</div>
				<span id="memId"><?php echo isset($_SESSION["memId"])? $_SESSION["memId"] : ""; ?></span>
				<div class="clearfix"></div>
			</li>
			<ul id="memberMenu">
			<li class="navItem"><a href="memfollow.php">我的追蹤</a></li>
			<li class="navItem"><a href="memcomment.php">我的留言</a></li>
			<li class="navItem myActivity"><a href="mementry.php">我的報名</a></li>
			</ul>
			<li class="navItem beBoss">
				<a id="rwdBossRole" href="memBeBoss1.php">成為店長</a>
				
				<ul id="bossMenu">
					<li><a class="navItem bossMenu" href="FMybusinessStore.php">麵包店</a></li>
					<li><a class="navItem bossMenu" href="#">胖小車</a></li>
					<li><a class="navItem bossMenu" href="bossActivity.php">活動管理</a></li>
					<li><a class="navItem bossMenu" href="FMybusinessMessage.php">留言管理</a></li>
				</ul>
			</li>
			<li class="navItem"><a href="php/member/login/sessionLogOut.php">登出</a></li>
		</ul>
	</nav>
	


<!-- ========================新增店家燈箱===================== -->
	<div id="addShopBox">
		<div class="globalForm">
			
				<div class="globalFormHeader">
					<div class="svg" id="closeBtn01">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
						<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2
							L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15
							s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
						</svg>
					</div>

					<h1>新增店家</h1>
					<p>想跟鄉民分享吃到好麵包的感動嗎？TrePun邀請您一起來分享隱身巷弄的好吃麵包店和胖小車。</p>
				</div>
				<form action="php/store/add/lightboxAddStore.php" method="post" id="addstoreForm">
				<div class="globalFormContent" id="showAddShopForm">
					<div class="globalFormInput chooseType">
						<label><span>*</span>選擇店型</label>
							<label class="chooseBtn">胖小車<input id="type1" type="radio" value="1" name="storeType" required></label>
							<label class="chooseBtn">麵包店<input id="type2" type="radio" value="0" name="storeType" required></label>
							<div class="clearfix"></div>
					</div>
					<div class="globalFormInput">
						<label><span>*</span>輸入店名</label><input id="storeName" type="text" name="storeName" placeholder="輸入麵包店名">
					</div>
					<div class="globalFormInput">
						<label><span>*</span>商家電話</label><input type="tel" name="tel" placeholder="輸入手機或市話">
					</div>
					<div class="globalFormInput">
						<label><span>*</span>商家地址</label><input id="address" type="text" name="address" placeholder="輸入縣市/地區/地址門牌號碼">
						<input type="hidden" name="SI_lat" id="SI_lat" value="">
						<input type="hidden" name="SI_lng" id="SI_lng" value="">
					</div>
					<div id="map"></div>
					<div class="globalFormInput">
						<label><span>*</span>營業時間</label>
						<div class="selectTime">
							<select name="startTime">
								<option value="00">00:00</option>
								<option value="01">01:00</option>
								<option value="02">02:00</option>
								<option value="03">03:00</option>
								<option value="04">04:00</option>
								<option value="05">05:00</option>
								<option value="06">06:00</option>
								<option value="07">07:00</option>
								<option value="08">08:00</option>
								<option value="09">09:00</option>
								<option value="10">10:00</option>
								<option value="11">11:00</option>
								<option value="12">12:00</option>
								<option value="13">13:00</option>
								<option value="14">14:00</option>
								<option value="15">15:00</option>
								<option value="16">16:00</option>
								<option value="17">17:00</option>
								<option value="18">18:00</option>
								<option value="19">19:00</option>
								<option value="20">20:00</option>
								<option value="21">21:00</option>
								<option value="22">22:00</option>
								<option value="23">23:00</option>
							</select>
							<span>點至</span>
							<select name="endTime">
								<option value="00">00:00</option>
								<option value="01">01:00</option>
								<option value="02">02:00</option>
								<option value="03">03:00</option>
								<option value="04">04:00</option>
								<option value="05">05:00</option>
								<option value="06">06:00</option>
								<option value="07">07:00</option>
								<option value="08">08:00</option>
								<option value="09">09:00</option>
								<option value="10">10:00</option>
								<option value="11">11:00</option>
								<option value="12">12:00</option>
								<option value="13">13:00</option>
								<option value="14">14:00</option>
								<option value="15">15:00</option>
								<option value="16">16:00</option>
								<option value="17">17:00</option>
								<option value="18">18:00</option>
								<option value="19">19:00</option>
								<option value="20">20:00</option>
								<option value="21">21:00</option>
								<option value="22">22:00</option>
								<option value="23">23:00</option>
							</select>
							<span>點</span>
						</div>
					</div>
					<div class="globalFormInput">
						<label>故事介紹</label><textarea name="story" maxlength="450"></textarea>
					</div>
					<div class="clearfix"></div>
					<div class="globalFormBtns">
						<div class="globalCancelBtn">取消</div>
						<input type="hidden" name="addShopDate" value="<?php echo date("Y-m-d") ?>"> 
						<input id="addstoreBtn" type="button" name="submitAddShop" class="globalOkBtn" value="送出">					
					</div>
				</div>
				<div class="globalFormContent" id="visitorForm">
					<a href="#" id="lightboxNeedlogIn" class="globalOkBtn">請先登入會員</a>
				</div>
			</form>
		</div>
	</div>

<!-- ========================客服中心燈箱===================== -->
	<div id="serviceCenter">
		<div class="globalForm">
			<form action="" method="">
				<div class="globalFormHeader">
					<div class="svg" id="closeBtn02">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
						<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2
							L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15
							s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
						</svg>
					</div>

					<h1>客服中心</h1>
					<p>感謝您對TrePun的支持！<br>如對本站有任何問題，請提供寶貴意見，我們將儘速與您聯繫。</p>
				</div>
				<div class="globalFormContent">

					<div class="globalFormInput">
						<label><span>*</span>主旨</label><input type="text" name="" placeholder="提醒字">
					</div>

					<div class="globalFormInput">
						<label><span>*</span>姓名</label><input type="text" name="" placeholder="提醒字">
					</div>
					
					<div class="globalFormInput">
						<label><span>*</span>聯絡電話</label><input type="tel" name="" placeholder="提醒字">
					</div>
					
					<div class="globalFormInput">
						<label><span>*</span>信箱</label><input type="email" name="" placeholder="提醒字" required>
					</div>

					<div class="globalFormInput">
						<label>內文</label><textarea></textarea>
					</div>
					<div class="clearfix"></div>
					<div class="globalFormBtns">
						<div class="globalCancelBtn">取消</div>
						<input type="submit" name="" class="globalOkBtn" value="送出">					
					</div>
				</div>
			</form>
		</div>
	</div>
	
	


</header>
<!-- ======================================================header 頁首結束========================================================= -->	

