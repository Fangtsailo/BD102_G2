$(function(){

// sc_mg------------
var controller = new ScrollMagic.Controller();
//掉麵團	
	

		//tween   設要跑的動畫
    var tween_2 = TweenMax.staggerFromTo('.activity_dough_change', .8, {
        //做事情
        
        y:-500,
    }, {
        
        y:0,
    }, .3);

     var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: ".trigger1",  //觸發點
      duration: 300,  //開始結束距離
      offset: 0  ,  //離起始點多遠開始跑動畫
      reverse: true,
    })
    .setTween(tween_2)  //要跑的動畫  ，要先設var

    .addIndicators({
            name: 'scene 02'   
            //除錯，並找位置,js外掛要加連結至html中

        })
   .addTo(controller);  //最開始設的場景

//掉麵團  end

//鍋保持位置


 ///// 固定住物件
      var scene_sticky = new ScrollMagic.Scene({
            //做事情
            triggerElement: ".trigger2",
            offset: 110,
            duration: 700
        })
        .setPin('.activity_pot')
        .addIndicators({
            name: 'sticky'
        })
        .addTo(controller);



//鍋保持位置 end







	
})