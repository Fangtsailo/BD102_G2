<?php 

	//判斷是否有登入過網站
	if ( isset($_SESSION["memId"]) ===true ) { //若有，則打開會員專區面板
		echo "<script type='text/javascript'>window.onload=changePanel;</script>";
	}else { 
		session_destroy();
	}

 ?>
<script type="text/javascript">
	
//登出
// $("#logOut").click(function(){
// 	logOut();
// });

</script>



<header class="globalHead">

<!-- “登入會員”燈箱 -->
	<div class="headLoginBox" id="loginBox">
		
		<div class="globalForm">
		<form id="loginForm" name="loginForm" action="logIn.php" method="post">
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
		<form  id="registerForm" action="register.php" method="get">
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

				<div class="globalFormInput">
					<label>註冊會員帳號</label><input type="text" id="newMemId" name="newMemId" placeholder="請輸入會員帳號">
				</div>
				<div class="globalFormInput">
					<label>註冊會員信箱</label><input type="email" id="newMemMail" name="newMemMail" placeholder="請輸入會員信箱">
				</div>
				<div class="globalFormInput">
					<label>會員密碼</label><input type="password" id="newMemPsw"  name="newMemPsw" placeholder="密碼">
				</div>
				
				<div class="clearfix"></div>
				
				<div class="globalFormBtns">
					<div class="globalCancelBtn">取消</div>
					<input id="submitRegister" type="button" name="SubmitRegister" class="globalOkBtn" value="註冊"">					
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
		<div class="headLogo" id="section1-click">
			<a href="#">
				<img src="img/trepunLogoWhite.svg">
			</a>	
		</div>	
<!--頁面錨點連結 -->
		<div class="headerLink">
			<a href="#" class="section2-click">
				<img src="img/homepage/hot.svg">
				<span>熱門商家</span>	
			</a>
			<a href="#" class="section3-click">
				<img src="img/homepage/mappointer3.svg">
				<span>胖小車地圖</span>	
			</a>
			<a href="#" class="section4-click">
				<img src="img/homepage/cookIcon.svg">
				<span>烘焙體驗</span>	
			</a>
			<a href="#" class="section5-click">
				<img src="img/homepage/newShopIcon.svg">
				<span>新進商家</span>	
			</a>
			<div class="clearfix"></div>
		</div>

	<!--頁面錨點RWD -->
		<div class="left-burgerBtn" id="left-burgerBtn">
			<span class="burger"></span>
			<span class="burger"></span>
			<span class="burger"></span>
		</div>

		<div class="rwd-HeaderLink" id="rwd-HeaderLink">

			<a href="#section2-move" class="section2-click">
					<img src="img/homepage/hot.svg">
					<span>熱門商家</span>	
					<div class="clearfix"></div>
			</a>
			<a href="#" class="section3-click">
				<img src="img/homepage/mappointer3.svg">
				<span>胖小車地圖</span>	
			</a>
			<a href="#" class="section4-click">
				<img src="img/homepage/cookIcon.svg">
				<span>烘焙體驗</span>	
			</a>
			<a href="#" class="section5-click">
				<img src="img/homepage/newShopIcon.svg">
				<span>新進商家</span>	
			</a>
			<div class="clearfix"></div>
		</div>



<!-- 頁首右邊區塊 -->

	<div class="headerRight">

		<!-- 頁首搜尋區塊 -->
			<!-- <div class="headSearch">
				<span>商家搜尋</span>
				<select id="headSearchKind">
					<option value="breadCar">胖小車</option>
					<option value="shop">店家</option>
				</select>
				<select id="headSearchPlace">
				<option value="default">地區</option>
				<option value="taipei">台北市</option>
				<option value="newTaipei">新北市</option>
				<option value="Taoyuan">桃園市</option>
				</select>
				<button id="headSearchHot">熱門</button>
				<button id="headSearchStar">評價</button>
				<input type="text" name="" id="headSearch">
				<input id="headSearchSubmit" type="submit" name="" value="搜尋">
			</div> -->

		<!-- 頁首會員區塊 -->
			<div class="headAccount">
		
		<!-- 登入後的狀態顯示-->
				<div id="headMemStatus">
					<div>
						<a href="#">
							<img id="addShop1" src="img/homepage/addShop1.svg">
						</a>
						<a href="#" id="headMemPic">
							<img src="img/homepage/user.png">
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="memStatusBar" id="memStatusBar">
					<ul>
						<li><a href="#"> <?php echo $_SESSION["memId"]; ?>  </a></li>
						<li><a class="memLink" href="#">我的追蹤</a></li>
						<li><a class="memLink" href="#">我的留言</a></li>
						<li><a class="memLink" href="#">我的報名</a></li>
						<li><a class="memLink" href="#">成為店長</a></li>
						<li><a class="memLink" href="sessionLogOut.php" id="logOut">登出</a></li>
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
	</div>

	
<!-- 頁首RWD手機版版面 -->
		

<!-- 右側搜尋icon -->
<!-- 	<div class="rwd_headerSearch">
		<div class="svg">
			<svg  width="32" height="32" viewBox="0 0 38 38"><path  width="30" height="30" class="searchIcon" d="M37.4,36.7L36,38.1L24.9,26.9c2.8-2.4,4.6-5.9,4.6-9.9c0-7.2-5.8-13-13-13s-13,5.8-13,13s5.8,13,13,13c2.5,0,4.8-0.7,6.8-1.9l1.4,1.4c-2.4,1.6-5.2,2.5-8.2,2.5c-8.3,0-15-6.7-15-15s6.7-15,15-15s15,6.7,15,15c0,3.8-1.4,7.2-3.7,9.9L37.4,36.7z"/></svg>
		</div>
	</div>
	
	<div class="rwdSearchBar">
		<div class="rwdsearchItem">
			<select id="headSearchKind">
				<option value="breadCar">胖小車</option>
				<option value="shop">店家</option>
			</select>
			<select id="headSearchPlace">
				<option value="default">地區</option>
				<option value="taipei">台北市</option>
				<option value="newTaipei">新北市</option>
				<option value="Taoyuan">桃園市</option>
			</select>
			<button id="headSearchHot">熱門</button>
			<button id="headSearchStar">評價</button>
			<div class="clearfix"></div>
		</div>
		<input type="text" name="" id="rwdHeadSearch">
	</div>
 -->
<!-- 右側搜尋icon -->
	
<!-- 右側會員選單 -->
	<div class="burgerMenu" id="burgerBtn">
			
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
		<ul  id="memLoggedin">
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
				<img id="memPic" src="img/homepage/user.png">
			</div>
			<span id="memId">Bakery Boss</span>
			<div class="clearfix"></div>
		</li>
		<li class="navItem"><a href="#">我的追蹤</a></li>
		<li class="navItem"><a href="#">我的留言</a></li>
		<li class="navItem myActivity"><a href="#">我的報名</a></li>
		<li class="navItem beBoss"><a href="#">成為店長</a></li>
		<li class="navItem"><a href="#">登出</a></li>
		</ul>
	</nav>
	
	<!-- ========================新增店家燈箱===================== -->
	<div id="addShopBox">
		<div class="globalForm">
			<form action="" method="">
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
				<div class="globalFormContent">
					<div class="globalFormInput chooseType">
						<label><span>*</span>選擇店型</label>
							<label class="chooseBtn">胖小車<input type="radio" value="car" name="chooseType"></label>
							<label class="chooseBtn">麵包店<input type="radio" value="shop" name="chooseType"></label>
							<div class="clearfix"></div>
					</div>
					<div class="globalFormInput">
						<label><span>*</span>主旨</label><input type="text" name="" placeholder="提醒字">
					</div>

					<div class="globalFormInput">
						<label><span>*</span>輸入店名</label><input type="text" name="" placeholder="提醒字">
					</div>
					
					<div class="globalFormInput">
						<label><span>*</span>商家電話</label><input type="tel" name="" placeholder="提醒字">
					</div>
					
					<div class="globalFormInput">
						<label><span>*</span>商家地址</label><input type="email" name="" placeholder="提醒字" required>
					</div>

					<div class="globalFormInput">
						<label>故事介紹</label><textarea></textarea>
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