




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
	$('#headMemLogin').click(function(){
		$('#loginBox').fadeIn(500);
	
	});

//切換至註冊燈箱
	$('#changeToRegister').click(function(){
		$('#RegisterBox').css('display','block');
		$('#loginBox').css('display','none');
	});

//切換至登入燈箱
	$('#changeToLogin').click(function(){
		$('#RegisterBox').css('display','none');
		$('#loginBox').css('display','block');
	});

//關閉燈箱按鈕
	$('.closeBtn,#cancelLogin').click(function(){
			$('#loginBox').fadeOut(500);
			$('#RegisterBox').css('display','none');
            $("#loginForm")[0].reset();
		
  });


//按下登入檢查
$("#submitLogin").click(function(){
        checkform();
        $(".globalForm").css("animation","none");
});

function changePanel(){
    $("#headMemStatus").show(300);
    $("#headMemLogin").hide(300);
}
function logOut(){
    $("#headMemLogin").show(300);
    $("#headMemStatus").hide(300);
    $('#memStatusBar').hide(300);
}   

//登入檢查function
    
function checkform(){

     // var myId = document.getElementById('memId');
        // alert($("#memId").val());
    if ( $("#memId").val().length < 6){
        $(".globalForm").css("animation","shake1 .2s 0 linear 3 alternate");
        alert("帳號不得低於六碼");
        $("#memId").select();
        return;
    }
    
    
    if ($("#memPsw").val().length <6 ){
        $(".globalForm").css("animation","shake1 .2s 0 linear 3 alternate");
        alert("密碼不得低於6碼");
        $("#memPsw").select();
        return;
    }
    //正確就送出
   $("#loginForm").submit();
   $('#loginBox').fadeOut(500);
   changePanel();

}


//登出

$("#logOut").click(function(){
    logOut();
});




//登入後會員專區顯示
     $("#headMemPic").click(function(){
          $('#memStatusBar').slideToggle(300);
     });

//新增店家按鈕

    $("#addShop1").click(function(){
        $("#addShopBox").show(300);

    });
    $("#closeBtn01").click(function(){
      $("#addShopBox").hide(500);
    });
    $("#closeBtn02").click(function(){
      $("#serviceCenter").hide(500);
    });
    $('#addShopBtn').click(function(){
      $("#addShopBox").show(500);
    });
    $('#serviceBtn').click(function(){
      $("#serviceCenter").show(500)
    });

//mobile導覽列會員專區顯示

    $("#burgerBtn").click(function (e) { //點擊選單按鈕時
            e.preventDefault(); //停止
            $("#menu").toggleClass("show");
            $("#burgerBtn").toggleClass("active"); //在#menu增加Class
            $("#rwdSearchBar").removeClass("activeSearch");
            $("#rwd-HeaderLink").removeClass("showMenu");
            $("#left-burgerBtn").removeClass("active");
            $('#closeBurger').click(function(){
              $("#menu").removeClass("show");

            });

        });

//導覽列搜尋區塊
    
    $(".rwd_headerSearch").click(function (e) { //點擊選單按鈕時
            e.preventDefault(); //停止
            // $(".rwdSearchBar").toggleClass("activeSearch");
            $("#rwdSearchBar").toggleClass("activeSearch"); 
            $("#menu").removeClass("show");
        });


//首頁導覽列漢堡選單
    $("#left-burgerBtn").click(function(){
          $("#left-burgerBtn").toggleClass("active");
          $("#rwd-HeaderLink").toggleClass("showMenu");
          $("#menu").removeClass("show");
    });

 
    for (var i = 1; i <= 6; i++) {
      let j = i; 
      $('.section'+i+'-click').click(function(){
        console.log(j);
        $("#rwd-HeaderLink").removeClass("showMenu");
        $('html,body').animate({scrollTop:$('#section'+j+'-move').offset().top},800);  
      });
    }

});




