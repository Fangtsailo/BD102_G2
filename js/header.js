	$(function(){

<<<<<<< HEAD
	$('#headMemLogin').click(function(){
		$('#loginBox').fadeIn(500).css('display','block');
=======

//切換會員專區
function changePanel(){
    $("#headMemStatus").show(300);
    $("#headMemLogin").hide(300);
    $("#memLoggedin").show(300);
    $("#visitor").hide(300);
}

//登出會員專區
function logOut(){
    $("#headMemLogin").show(300);
    $("#headMemStatus").hide(300);
    $('#memStatusBar').hide(300);
}   



//註冊檢查function

    //檢查帳號是否可以使用
    // function sendForm(){
          
    //       var memId = $("#memId").val();
    //       var memPsw = $("#memPsw").val();
    //       var memObj = {};
    //       memObj.memId = memId;
    //       memObj.memPsw = memPsw;
    //       //================
    //       var xhr = new XMLHttpRequest();
    //       xhr.onreadystatechange = function(){
    //         if(xhr.readyState == 4){
    //           if( xhr.status == 200){//server端順利的執行完畢
    //             console.log( xhr.responseText);
    //             if( xhr.responseText == "error"){ //帳密錯誤
    //                 $.sweetModal({
    //                     content: '帳號密碼錯誤',
    //                     icon: $.sweetModal.ICON_WARNING,
    //                     width: '300px',
    //                     theme: $.sweetModal.THEME_MIXED,
    //                     buttons: [
    //                         {
    //                             label: '知道了',
    //                             classes: 'brownB'
    //                         }
    //                     ]
    //                 });
                           
    //             }else{//登入成功
    //                 $.sweetModal({
    //                     content: '登入成功',
    //                     icon: $.sweetModal.ICON_WARNING,
    //                     width: '300px',
    //                     theme: $.sweetModal.THEME_MIXED,
    //                     buttons: [
    //                         {
    //                             label: '知道了',
    //                             classes: 'brownB'
    //                         }
    //                     ]
    //                 });
    //                 changePanel();
    //             }  
    //           }else{//server端無法順利的執行完畢,產生錯誤
    //             alert( xhr.status );
    //           }//xhr.status
                
    //         }//xhr.readyState==4
    //       }//xhr.onreadystatechange

    //       var data_info = "jsonStr=" + JSON.stringify(memObj);
    //       console.log( data_info);
    //       var url = "ajaxLogin.php?" + data_info;
    //       xhr.open("Get", url, true);
    //       xhr.send(null);

    //       //=================  
     
    //     }






//頁面開始動作

$(function(){



//導覽列上滑效果

var bodyClass = document.body.classList,
    lastScrollY = 80;

  window.addEventListener('scroll', function(){
   var st = this.scrollY;
      if( st > lastScrollY) {
          bodyClass.add('hideUp');
          $("#menu").removeClass("show");
          $("#burgerBtn").removeClass("active");
          $("#rwdSearchBar").removeClass("activeSearch");
          $("#rwd-HeaderLink").removeClass("showMenu");
          $("#left-burgerBtn").removeClass("active");
          $('#memStatusBar').slideUp(300);
      }else{
        bodyClass.remove('hideUp');
      }
      lastScrollY = st;
  });

  //點選登入按鈕
	$('#headMemLogin,#rwdLoginBtn').click(function(){
		$('#loginBox').fadeIn(500);
        $("#menu").removeClass("show");
>>>>>>> d0ce7338c765e922018056b551425ef9f0c43150
	
	});

	$('.registerLink span').click(function(){
		$('#RegisterBox').css('display','block');
		$('#loginBox').css('display','none');
	});
	$('.loginLink span').click(function(){
		$('#RegisterBox').css('display','none');
		$('#loginBox').css('display','block');
	});

<<<<<<< HEAD
=======
//關閉燈箱按鈕
	$('.closeBtn,#cancelLogin').click(function(){
			$('#loginBox').fadeOut(500);
			$('#RegisterBox').css('display','none');
            $("#loginForm")[0].reset();
		
  });


//按下登入檢查
$("#submitLogin").click(function(){
         //檢查帳號不可小於六碼
        if ( $("#memId").val().length < 6 && $("#memId").val().length ==0 ){
            $(".globalForm").css("animation","shake1 .2s 0 linear 3 alternate");
            $.sweetModal({
                content: '帳號不得低於六碼',
                icon: $.sweetModal.ICON_WARNING,
                width: '300px',
                theme: $.sweetModal.THEME_MIXED,
                buttons: [
                    {
                        label: '知道了',
                        classes: 'brownB'
                    }
                ]
            });
            $("#memId").select();
           return;
        }
        

        //檢查密碼不可超過六碼
        if ($("#memPsw").val().length =="" ){
            $(".globalForm").css("animation","shake1 .2s 0 linear 3 alternate");
            $.sweetModal({
                content: '密碼不得空白',
                icon: $.sweetModal.ICON_WARNING
            });
            $("#memPsw").select();
            return;
        }

        //正確就送出
        $("#loginForm").submit();
      
        
});





//註冊檢查function
>>>>>>> d0ce7338c765e922018056b551425ef9f0c43150

	$('.svg').click(function(){
			$('#loginBox').css('display','none');
			$('#RegisterBox').css('display','none');
		});
   

	
    // $(window).bind('scroll resize', function(){
    //   var $this = $(this);
    //   var $this_Top=$this.scrollTop();

    //   //當高度小於100時，關閉區塊 
    //   	if($this_Top < 100){
    //     　　　$('.globalHead').stop().animate({top:"-80px"},';linear');
    //     　　}
    //     if($this_Top > 100){
    //     　　　$('.globalHead').stop().animate({top:"0px"},'linear');
    //     　　}
    //     　　
    // }).scroll();

    // console.log('12345');

    var bodyClass = document.body.classList,
    lastScrollY = 80;
	window.addEventListener('scroll', function(){
 	 var st = this.scrollY;
  		if( st > lastScrollY) {
  	  		bodyClass.add('hideUp');
  		}else{
    		bodyClass.remove('hideUp');
  		}
  		lastScrollY = st;
	});


   $("#burgerBtn").click(function (e) { //點擊選單按鈕時
            e.preventDefault(); //停止
            $("#menu").toggleClass("show");
            $(".burgerMenu").toggleClass("active"); //在#menu增加Class
        });




});


