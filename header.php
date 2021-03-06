<!-- ======================================================header 頁首========================================================= -->
	<header class="globalHead">

<!-- “登入會員”燈箱 -->
	<div class="headLoginBox" id="loginBox">
		
		<div class="globalForm">
		<form action="" method="">
			<div class="globalFormHeader">
				<div class="svg">
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
					<label>會員帳號</label><input type="text" name="" placeholder="請輸入會員帳號或信箱">
				</div>

				<div class="globalFormInput">
					<label>會員密碼</label><input type="text" name="" placeholder="密碼">
				</div>
				<div class="forgetPsw">
					<a href="#">忘記密碼？</a>
				</div>
				<div class="clearfix"></div>
				
				<div class="globalFormBtns">
					<div class="globalCancelBtn">取消</div>
					<input type="submit" name="" class="globalOkBtn" value="登入">					
				</div>
				
				<div class="facebookLogin">
					<a href="#">
					Facebook帳號登入</a>
				</div>
				
				<div class="registerLink">
					<span>還沒有帳號？ 註冊成為PUN友</span>
				</div>

			</div>
		</form>
		</div>
			
	</div>


<!-- “註冊會員”燈箱 -->
	<div class="headRegisterBox" id="RegisterBox">
		
		<div class="globalForm">
		<form action="" method="">
			<div class="globalFormHeader">
				<div class="svg">
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
					<label>註冊會員帳號</label><input type="text" name="registerMemId" placeholder="請輸入會員帳號">
				</div>
				<div class="globalFormInput">
					<label>註冊會員信箱</label><input type="text" name="registerMemMail" placeholder="請輸入會員信箱">
				</div>
				<div class="globalFormInput">
					<label>會員密碼</label><input type="text" name="registerMemPsw" placeholder="密碼">
				</div>
				
				<div class="clearfix"></div>
				
				<div class="globalFormBtns">
					<div class="globalCancelBtn">取消</div>
					<input type="submit" name="SubmitRegister" class="globalOkBtn" value="註冊">					
				</div>
				
				<div class="facebookRegister">
					<a href="#">
					Facebook帳號註冊</a>
				</div>
				
				<div class="loginLink">
					<span>已經有帳號，返回登入頁面</span>
				</div>

			</div>
		</form>
		</div>
			
	</div>	
	




	<!-- logo區塊 -->
		<div class="headLogo">
			<div class="svg">
				<img src="img/trepunLogoWhite.svg">
			</div>	
		</div>	


	
	
		

	
		
		


<!-- 頁首右邊區塊 -->

	<div class="headerRight">

		<!-- 頁首搜尋區塊 -->
			<div class="headSearch">
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
			</div>

		<!-- 頁首會員區塊 -->
			<div class="headAccount">
		
		<!-- 登入後的狀態顯示-->
				<div id="headMemStatus">
					<div id="headMemPic">
					</div>
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
	<div class="rwd_headerSearch">
		<div class="svg">
			<svg  width="32" height="32" viewBox="0 0 38 38"><path  width="30" height="30" class="searchIcon" d="M37.4,36.7L36,38.1L24.9,26.9c2.8-2.4,4.6-5.9,4.6-9.9c0-7.2-5.8-13-13-13s-13,5.8-13,13s5.8,13,13,13c2.5,0,4.8-0.7,6.8-1.9l1.4,1.4c-2.4,1.6-5.2,2.5-8.2,2.5c-8.3,0-15-6.7-15-15s6.7-15,15-15s15,6.7,15,15c0,3.8-1.4,7.2-3.7,9.9L37.4,36.7z"/></svg>
		</div>
	</div>
	
<!-- 左側漢堡選單 -->
	<div class="burgerMenu" id="burgerBtn">
			<span></span>
			<span></span>
			<span></span>
	</div>
	<nav id="menu" class="hideMenu">	
	<ul>
		<!-- <li class="closeMenu">
			<span>
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 38 38" style="enable-background:new 0 0 38 38;" xml:space="preserve">
			<path class="st0" d="M15.2,14.2l4.2,4.2l4.2-4.2l1.4,1.4l-4.2,4.2l4.2,4.2l-1.4,1.4l-4.2-4.2l-4.2,4.2l-1.4-1.4l4.2-4.2l-4.2-4.2L15.2,14.2z M19.4,2.9c-9.4,0-17,7.6-17,17c0,5.1,2.2,9.6,5.7,12.7l1.4-1.4c-3.1-2.8-5.1-6.8-5.1-11.3c0-8.3,6.7-15,15-15s15,6.7,15,15s-6.7,15-15,15c-3.1,0-5.9-0.9-8.3-2.5l-1.4,1.4c2.8,1.9,6.1,3.1,9.7,3.1c9.4,0,17-7.6,17-17S28.8,2.9,19.4,2.9z"/>
				</svg>
			</span>
			<div class="clearfix"></div>
		</li> -->
		<li class="memPart">
			<div class="memPic">
				<img id="memPic" src="img/homepage/user.png">
			</div>
			<span id="memId">Bakery Boss</span>
			<div class="clearfix"></div>
		</li>
		<li class="listTitle">會員專區</li>
		<li class="navItem"><a href="#">基本資料</a></li>
		<li class="navItem"><a href="#">我的追蹤</a></li>
		<li class="navItem"><a href="#">我的留言</a></li>
		<li class="navItem"><a href="#">我的報名</a></li>
		<li class="navItem"><a href="#">成為店長</a></li>
		<li class="navItem"><a href="#">登出</a></li>
	</ul>
	</nav>

	</header>
<!-- ======================================================header 頁首結束========================================================= -->	

