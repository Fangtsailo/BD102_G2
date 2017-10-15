



$(function(){

// Scroll Magic
	var controller = new ScrollMagic.Controller();
//logo動畫
	new Vivus('theLogo', {
		duration: 200, 
		type: 'delayed',
		pathTimingFunction: Vivus.EASE_IN,
    	animTimingFunction: Vivus.EASE
	},function(obj){
		obj.el.classList.add('finished');
	});


	

// 第一屏文字敘述
	var tween_1 = TweenMax.fromTo(".itemGrp .descrp ", 1 ,{
		opacity : 0,
		y : -100,
		ease: Back.easeOut.config(1.7)
	
	},{
		opacity : 1,
		y : 0

	},2 );


// 第一屏篩選
	$(".tab_contents").click(function(){

		$(this).toggleClass("active");
		$(this).siblings(".active").removeClass("active");

	});


// 第二屏文字

	var tween_2 = TweenMax.staggerFromTo('.topChartDescrp',1,{
			opacity : 0,
			y: -50
	},{
			opacity : 1,
			y:0
	});

	var scene_1 = new ScrollMagic.Scene({ 
		//觸發點
		triggerElement: "#trigger1 ",
		duration:100, 
		offset: 0 
	})
	.setTween(tween_2)
	// .addIndicators({ //debug用，顯示觸發點、起始點和結束點在畫面上
	// 	name:'scene_01'
	// })
	.addTo(controller);	


	var tween_3 = TweenMax.staggerFromTo('.titleGrp',1,{
			opacity : 0,
			x: -50
	},{
			opacity : 1,
			x:0
	});

	var scene_2 = new ScrollMagic.Scene({ 
		//觸發點
		triggerElement: "#trigger1 ",
		duration:200, 
		offset: 20 
	})
	.setTween(tween_3)
	// .addIndicators({ //debug用，顯示觸發點、起始點和結束點在畫面上
	// 	name:'scene_02'
	// })
	.addTo(controller);	


//熱門店家卡片跳出
	
	var tween_4 = TweenMax.staggerFromTo('.shopItemGrp',0.5,{
			opacity : 0,
			y: 100
	},{
			opacity : 1,
			y:0,
			ease: Back.easeOut
	},0.5);

	var scene_3 = new ScrollMagic.Scene({ 
		//觸發點
		triggerElement: "#trigger2 ",
		duration:200, 
		offset: 0 
	})
	.setTween(tween_4)
	// .addIndicators({ //debug用，顯示觸發點、起始點和結束點在畫面上
	// 	name:'scene_03'
	// })
	.addTo(controller);	
	


//熱門店家卡片輪播

$('.shopItemGrp').slick({
  dots: true,
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
  cssEase: 'linear'
});


//新進店家輪播
$('.newShopGrp').slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
  ]
});


$('#addShopBtn').click(function(){
	$("#addShopBox").show(500);
});
$('#serviceBtn').click(function(){
	$("#serviceCenter").show(500)
});
$("#closeBtn01").click(function(){
	$("#addShopBox").hide(500);
});
$("#closeBtn02").click(function(){
	$("#serviceCenter").hide(500);
});
// for (var i = 1; i <= 6; i++) {
// 	$('.section'+i+'-click').click(function(){
// 		let j = i;	
// 		$('html,body').animate({scrollTop:$('#section'+j+'-move').offset().top},800);
		
//     });
// }

 


});