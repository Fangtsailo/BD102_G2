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
    //     　　　$('.globalHead').stop().animate({top:"-80px"});
    //     　　}
    //     if($this_Top > 100){
    //     　　　$('.globalHead').stop().animate({top:"0px"});
    //     　　}
    //     　　
    // }).scroll();



    var bodyClass = document.body.classList,
    lastScrollY = 80;

    var subtitleClass= document.getElementById("subtitle").classList;


	window.addEventListener('scroll', function(){
 	 var st = this.scrollY;
 	 // 判斷是向上捲動，而且捲軸超過 200px
  		if( st > lastScrollY) {
  	  		bodyClass.add('hideUp');
  	  		subtitleClass.add('hideUp_sub');
  		}else{
    		bodyClass.remove('hideUp');
    		subtitleClass.remove('hideUp_sub');
  		}
  		lastScrollY = st;
	});





});


