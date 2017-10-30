


//切換會員專區
function changePanel(){
    $("#headMemStatus").fadeIn(300);
    $("#headMemLogin").fadeOut(300);
    $("#memLoggedin").show(300);
    $("#visitor").hide(300);
    $('#showAddShopForm').css('display','block');
    $('#visitorForm').css('display','none');
}   

//登出會員專區
function logOut(){
    $("#headMemLogin").show(300);
    $("#headMemStatus").hide(300);
    $('#memStatusBar').hide(300);
}   

//更換會員專區角色
function changeRole() {
    $("#role").text("店長專區").attr('href','FMybusinessStore.php');
    $("#rwdBossRole").replaceWith("<span id='rwdBossRole'>店長專區   <i class='fa fa-plus' aria-hidden='true'></i></span>");
    $("#rwdBossRole").click(function(){
        $('#bossMenu').slideToggle(500);
        $('#memberMenu').slideToggle(500);
    });
    $("#rwdStore").click(function(){
        event.preventDefault()
        $("#storeMenu").slideToggle(200);
    });
    $("#rwdCar").click(function(){
        event.preventDefault()
        $("#carMenu").slideToggle(200);
    });
}

//顯示輸入密碼值
function hideShowPsw(){  
        if ($('#newMemPsw').attr('type') == 'password') {  
          $('#newMemPsw').attr('type','text');
            
        }else {  
          $('#newMemPsw').attr('type','password');
        }  
    }

//將地址轉經緯度    





//================================ 頁面開始動作 ====================================

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
	$('.closeBtn,#cancelLogin,#closeBtn01,#closeBtn02').click(function(){
			$('#loginBox').fadeOut(500);
			$('#RegisterBox').css('display','none');
      $("#loginForm")[0].reset();
      $("#registerForm")[0].reset();
      $("#addShopBox").fadeOut(300);
      $("#serviceCenter").fadeOut(300);
		
  });


//按下登入檢查
$("#submitLogin").click(function(){
        

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
                        timeout: 1000,
                        onClose: function(){
                          $("#showMemId").text(xhr.responseText);
                          location.reload();
                        }
                    });
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




//=======================註冊檢查================================
$('#showPsw').click(function(){
    hideShowPsw();
});


$('#newMemId').blur(function(){

      $.ajax( {
        url: 'IDValidate.php',
        type: 'GET',
        data: {
        user_name: $('#newMemId').val()
      },
      error: function(xhr) {
        alert('Ajax request 發生錯誤');
      },
      success: function(response) {
        $("#showResult").html(response);
        $("#showResult").fadeIn();
        
          if (response == '此帳號已被使用過囉') {
              $("#showResult").addClass('error');
              $("#showResult").removeClass('success');
          }else{
              $("#showResult").addClass('success');
              $("#showResult").removeClass('error');
          }
      }

      } );
});


$("#submitRegister").click(function(){

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
    $.sweetModal({
            content: '註冊成功！',
            icon: $.sweetModal.ICON_SUCCESS,
            width: '300px',
            theme: $.sweetModal.THEME_MIXED,
            timeout: 1000,
            onClose: function(){
              $("#registerForm").submit();
            }
        });
});


//登入後會員專區顯示
$("#headMemPic").click(function(){
  event.preventDefault();
  $('#memStatusBar').slideToggle(300);
  $("#addShopBox").fadeOut(300);
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




//導覽列搜尋區塊=============

    $(".rwd_headerSearch").click(function (e) { //點擊選單按鈕時
            e.preventDefault(); //停止
            // $(".rwdSearchBar").toggleClass("activeSearch");
            $("#rwdSearchBar").toggleClass("activeSearch"); 
            $("#menu").removeClass("show");
        });


//header.php選擇送出查詢的頁面是胖小車或店家(desktop)
$("#headSearchKind").change(function(){
    var action = $(this).val()== 1 ? "search_car.php" : "search.php" ;
    $("#SearchForm").attr("action",action);
});    
$('#headSearchSubmit').click(function(){ //送出表單
    $("#SearchForm").submit()
});



//header.php選擇送出查詢的頁面是胖小車或店家(rwd)
$(".selectType input[name=shopType]").change(function(){
    var action = $(this).val()== 1 ? "search_car.php" : "search.php" ;
    $("#rwdsearchForm").attr("action",action);
});
$("#rwdSubmit").click(function(){ //送出表單
    $("#rwdsearchForm").submit();
});



//homepage.php選擇送出查詢的頁面是胖小車或店家(radio)
$(".tab_contents input[name=shopType]").change(function(){
    var action = $(this).val()== 1 ? "search_car.php" : "search.php" ;
    $("#homeSearchForm").attr("action",action);     
});

$("#searchSubmit").click(function(){ //送出表單
    $("#homeSearchForm").submit();
});

$("#searchSubmit").click(function(){ //送出表單
    $("#homeSearchForm").submit();
});

$("#headSearch").keyup(function(){
    $(this).siblings("#headSearchSubmit").addClass('keyIn').attr("value","GO");
  });
$("#headSearch").blur(function(){
    $(this).siblings("#headSearchSubmit").removeClass('keyIn').attr("value","搜尋");
  });



//首頁導覽列錨點選單=================

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

//新增店家=================

    //新增店家按鈕
    $("#addShop1,#addShopBtn,#homeAddBtn").click(function(){
         event.preventDefault();
        $("#addShopBox").fadeIn(300);
        $('#memStatusBar').slideUp(300);
    });
     $('#serviceBtn').click(function(){
      $("#serviceCenter").fadeIn(300)
    });


    //新增店家燈箱條件

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
          
          //將地址轉經緯度
          
          var address = document.getElementById("address").value;
            geocoder = new google.maps.Geocoder();
            geocoder.geocode( { 'address': address}, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                
                var lat =results[0].geometry.location.lat();
                document.getElementById("SI_lat").value = lat ; 
                var lng =results[0].geometry.location.lng();
                document.getElementById("SI_lng").value = lng ; 
               
              } else {
                alert("失敗, 原因: " + status);
              }
            });

          console.log('新增成功');
          $("#addShopBox").hide(300);
          $.sweetModal({
                content: '新增成功！',
                icon: $.sweetModal.ICON_SUCCESS,
                width: '300px',
                theme: $.sweetModal.THEME_MIXED,
                timeout: 1000,
                onClose: function(){
                  $("#addstoreForm").submit();
                }
            });  
      });






});




