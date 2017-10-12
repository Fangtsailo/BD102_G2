$(function(){

// sc_mg------------
var controller = new ScrollMagic.Controller();




    //掉麵團	00
	

		//tween   設要跑的動畫
    var tween_0 = TweenMax.staggerFromTo('#acty_Dough', .8, {
        //做事情  .8為總共秒數
        
        y:0,
    }, {
        
        y:1000,
    }, .3);

    var tween_4 = TweenMax.staggerFromTo('.activity_dough_change', .8, {
        //做事情
        
        scale:.8 
           }, {
        
        scale:1.1 
    }, 3);   //3為延遲秒數





     var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: ".trigger0",  //觸發點
      duration: 600,  //開始結束距離
      offset: 500 ,  //離起始點多遠開始跑動畫
      reverse: true,
    })
    .setTween([tween_0 ])  //要跑的動畫  ，要先設var

    // .addIndicators({
    //         name: 'scene 00'   
    //         //除錯，並找位置,js外掛要加連結至html中

    //     })
   .addTo(controller);  //最開始設的場景

//掉麵團 00 end





//鍋保持位置


 ///// 固定住物件
 var controller = new ScrollMagic.Controller();
      var scene_sticky = new ScrollMagic.Scene({
            //做事情
            triggerElement: ".trigger2",
            offset: 100,
            duration: 700
        })
        .setPin('.activity_pot')
        .setTween(tween_4)
        .addIndicators({
            name: 'sticky'
        })
        .addTo(controller);



//鍋保持位置 end


 //掉麵團  
  

    //tween   設要跑的動畫
    var tween_2 = TweenMax.staggerFromTo('.activity_dough_change', .8, {
        //做事情
        
        y:-420,
    }, {
        
        y:0,
    }, .3);

     var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: ".trigger1",  //觸發點
      duration: 500,  //開始結束距離
      offset: -280  ,  //離起始點多遠開始跑動畫
      reverse: true,
    })
    .setTween(tween_2)  //要跑的動畫  ，要先設var

    .addIndicators({
            name: 'scene 02'   
            //除錯，並找位置,js外掛要加連結至html中

        })
   .addTo(controller);  //最開始設的場景

//掉麵團  end



 //翻轉  
  

    //tween   設要跑的動畫
    var tween_5 = TweenMax.staggerFromTo('.activity_pot',3, {
        //做事情
        
      rotation:0 
    }, {
        
        rotation:180
    }, .3);

     var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: ".trigger4",  //觸發點
      duration: 200,  //開始結束距離
      offset: 0  ,  //離起始點多遠開始跑動畫
      reverse: true,
    })
    .setTween(tween_5)  //要跑的動畫  ，要先設var

    // .addIndicators({
    //         name: 'scene 04'   
    //         //除錯，並找位置,js外掛要加連結至html中

    //     })
   .addTo(controller);  //最開始設的場景

//翻轉  end




//掉麵團part 2   

    //tween   設要跑的動畫
    var tween_3 = TweenMax.staggerFromTo('.activity_dough_change', .8, {
        //做事情
        
        y:0,
        rotation:0 ,

    }, {
        
        y:-1550,
        rotation:660,

    }, );

     var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: ".trigger3",  //觸發點
      duration: 1000,  //開始結束距離
      offset: 200  ,  //離起始點多遠開始跑動畫
      reverse: true,
    })
   
    .setTween(tween_3)  //要跑的動畫  ，要先設var
 .setClassToggle('.activity_dough_change','activity_dough_change_js')
    // .addIndicators({
    //         name: 'scene 03'   
    //         //除錯，並找位置,js外掛要加連結至html中

    //     })
   .addTo(controller);  //最開始設的場景
//掉麵團2  end

	

//烤箱區
  var scene_bg = new ScrollMagic.Scene({
            //做事情
            triggerElement: ".trigger6",
            offset: -100,
        })
        .setClassToggle('.bgc' , 'bake_bread')
        // .addIndicators({
        //     name: 'add_class'
        // })
        .addTo(controller);





//烤好麵包
var controller = new ScrollMagic.Controller();
    var tween_6 = TweenMax.staggerFromTo('.activity_bread', .8, {
        //做事情
        
        y:-1000,
        rotation:0 ,

    }, {
        
        y:0,
        rotation:720
    }, );

     var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: ".trigger7",  //觸發點
      duration: 500,  //開始結束距離
      offset: -100  ,  //離起始點多遠開始跑動畫
      reverse: true,
    })
    .setTween(tween_6)  //要跑的動畫  ，要先設var

    .addIndicators({
            name: 'scene6'   
            //除錯，並找位置,js外掛要加連結至html中

        })
   .addTo(controller);  //最開始設的場景














})  //function