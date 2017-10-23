

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
//填寫表單燈箱切換
function lightboxloggedIn(){
    $('#showAddShopForm').css('display','block');
    $('#visitorForm').css('display','none');
}

function addSuccess(e){
  $(this).submit();
}


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
	$('#headMemLogin,#rwdLoginBtn,#lightboxNeedlogIn').click(function(){
		$('#loginBox').fadeIn(500);
    $("#menu").removeClass("show");
    $('#addShopBox').hide();
	
	});

//切換至註冊燈箱
	$('#changeToRegister').click(function(){
		$('#RegisterBox').css('display','block');
		$('#loginBox').css('display','none');
        $("#loginForm")[0].reset();
	});

//切換至登入燈箱
	$('#changeToLogin').click(function(){
		$('#RegisterBox').css('display','none');
		$('#loginBox').css('display','block');
        $("#registerForm")[0].reset();
        
	});

//關閉燈箱按鈕
	$('.closeBtn,#cancelLogin').click(function(){
			$('#loginBox').fadeOut(500);
			$('#RegisterBox').css('display','none');
            $("#loginForm")[0].reset();
		
  });


//按下登入檢查
$("#submitLogin").click(function(){
         //檢查帳號不可小於六碼
        if ( $("#memId").val().length < 6 && $("#memId").val().length >=0  ){
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
        if ($("#memPsw").val().length < 6 && $("#memPsw").val().length>=0 ){
            $.sweetModal({
                content: '密碼不得空白',
                icon: $.sweetModal.ICON_WARNING
            });
            $("#memPsw").select();
            return;
        }
       
          //檢查帳號是否可以使用
          var memId = $("#memId").val();
          var memPsw = $("#memPsw").val();
          var memObj = {};
          memObj.memId = memId;
          memObj.memPsw = memPsw;
          //================
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
              if( xhr.status == 200){//server端順利的執行完畢
                console.log( "xhr.responseText:" + xhr.responseText );
                if( xhr.responseText.indexOf("error")!= -1 ){ //帳密錯誤
                    $.sweetModal({
                        content: '帳號密碼錯誤',
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
                           
                }else{//登入成功
                    $("#loginBox").hide(300);
                    $.sweetModal({
                        content: '登入成功',
                        icon: $.sweetModal.ICON_SUCCESS,
                        width: '300px',
                        theme: $.sweetModal.THEME_MIXED,
                    });
                    $("#showMemId").text(xhr.responseText);

                    changePanel();

                }  
              }else{//server端無法順利的執行完畢,產生錯誤
                alert( xhr.status );
              }//xhr.status
                
            }//xhr.readyState==4
          }//xhr.onreadystatechange

          var data_info = "jsonStr=" + JSON.stringify(memObj);
          console.log( data_info);
          var url = "php/member/login/headerlogIn.php?" + data_info;
          xhr.open("Get", url, true);
          xhr.send(null);

          //================= 


        //正確就送出

        
        console.log('登入成功');
        
});





//註冊檢查function


$("#submitRegister").click(function(){

  if ( $("#newMemId").val().length < 6 && $("#newMemId").val().length ==0 ){
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
        $("#newMemId").select();
        return;
    }

    //檢查email格式
    var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if( filter.test($("#newMemMail").val())==false  ){
        $.sweetModal({
            content: '電子郵件格式不正確',
            icon: $.sweetModal.ICON_WARNING
        });
        $("#newMemMail").select();
        return;
    }

    //檢查密碼不得空白
    if ($("#newMemPsw").val().length < 6 && $("#newMemPsw").val().length >=0 ){
        $.sweetModal({
            content: '密碼長度不得低於六碼',
            icon: $.sweetModal.ICON_WARNING
        });
        $("#newMemPsw").select();
        return;
    }

  $("#registerForm").submit();

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

    $("#burgerBtn").click(function () { //點擊選單按鈕時
            
            $("#menu").toggleClass("show");
            $("#burgerBtn").toggleClass("active"); //在#menu增加Class
            $("#rwdSearchBar").removeClass("activeSearch");
            $("#rwd-HeaderLink").removeClass("showMenu");
            $("#left-burgerBtn").removeClass("active");
            $('#closeBurger,#closeBurger1').click(function(){
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


//新增店家燈箱
    $("#addstoreBtn").click(function(){

      //店家型態為必選
      if($("#type1,#type2").is(':checked') == false ){
        
        $.sweetModal({
            content: '請選擇店家型態',
            icon: $.sweetModal.ICON_WARNING
        });
        
        $("#type1").select();
        
        return;
      }

      //店家名稱為必選
      if ($("#storeName").val().length ==0 ){
        $.sweetModal({
            content: '請填寫店家名稱',
            icon: $.sweetModal.ICON_WARNING
        });
        $("#storeName").select();
        return;
      }

      //店家地址為必選
       if ($("#address").val().length ==0 ){
        $.sweetModal({
            content: '請填寫店家地址',
            icon: $.sweetModal.ICON_WARNING
        });
        $("#address").select();
        return;
      }
      console.log('新增成功');
      $("#addShopBox").hide(300);
      $.sweetModal({
            content: '新增成功！',
            icon: $.sweetModal.ICON_SUCCESS,
            width: '300px',
            theme: $.sweetModal.THEME_MIXED,
            onClose: function(){
             
              $("#addstoreForm").submit();
            }
        });
     
     
      
      
    });






});




