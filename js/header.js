	$(function(){

	$('#headMemLogin').click(function(){
		$('#loginBox').fadeIn(500).css('display','block');
	
	});

	$('.registerLink span').click(function(){
		$('#RegisterBox').css('display','block');
		$('#loginBox').css('display','none');  
	});
	$('.loginLink span').click(function(){
		$('#RegisterBox').css('display','none');
		$('#loginBox').css('display','block');
	});


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


