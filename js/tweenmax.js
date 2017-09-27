// work

$(function () {

    TweenMax.fromTo(".section_1 .title", 1, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 1,
        ease: Bounce.easeOut
    });





    TweenMax.fromTo(".section_1 .content", 1, {
            x: -50,
            opacity: 0,
        }, {
            x: 0,
            opacity: 1,
            delay: 1.5,
            ease: Quad.easeOut
        });

    console.log('section_1 ok');







    // 四個物件動畫
    // TweenMax.staggerFromTo('.wide_4x .item', .8, {
    //     做事情
    //     opacity: 0,
    //     y: -50
    // }, {
    //     opacity: 1,
    //     y: 0,
    //     width: 400,
    // repeat: 1,
    // delay: 0.5,
    // ease: Expo.easeOut
    // }, 1)





    // var wp = new TimelineMax();
    // new TimelineMax().staggerFromTo('.wide_4x .item', 1, {
    //         x:-50,
    //         y: -50,
    //         opacity: 0
    //     }, {
    //         x:0,
    //         y: 0,
    //         opacity: 1,
    //     }, 0.5);




    // console.log('section_2 ok');






    // new scrollmagic 物件
    var controller = new ScrollMagic.Controller();

    var tween_4 = TweenMax.staggerFromTo('.wide_4x .item', .8, {
        //做事情
        opacity: 0,
        y: -50
    }, {
        opacity: 1,
        y: 0
    }, .3);


    var tween_3 = TweenMax.staggerFromTo(['.section_2 .box_1','.section_2 .box_2'], .8, {
        //做事情
        opacity: 0,
        x: 0
    }, {
        opacity: 1,
        x: 100,
        width:1000,
        delay:1
    }, 1);


    var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger1",
      duration: 250,
      offset: 50
    //   reverse: false,
    })
    .setTween(tween_4)
    .addIndicators({
            name: 'scene 01'
        })
   .addTo(controller);


       var scene_u = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger1",
      duration: 250,
      offset: 150,
      
    //   reverse: false,
    })
    .setTween(tween_3)
    .addIndicators({
            name: 'scene 02'
        })
   .addTo(controller);







    // var wp = new TimelineMax();
    // var tween_99 = wp.staggerFromTo(['section_3 scenes object_1','section_3 scenes object_2'], 1, {
    //         x:50,
    //         y: 50,
    //         opacity: 0
    //     }, {
    //         x:0,
    //         y: 0,
    //         opacity: 1,
    //     }, 0.5);




    var parallax_scroll = TweenMax.staggerFromTo(['.section_3 #scenes .object_1','.section_3 #scenes .object_2'], 2, {
        //做事情
        opacity: 0,
        x: -50
    }, {
        opacity: 1,
        x: 50,
        rotation:90,

        delay: .5,
        ease: Expo.easeOut
    }, 1)





      var scene_v = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger2",
      duration: 250,
      offset: 150,
      
    //   reverse: false,
    })
    .setTween(parallax_scroll)
    .addIndicators({
            name: 'scene 055'
        })
   .addTo(controller);


    var scence = document.getElementById('scenes');
    var parallax = new Parallax(scence);



     var scene_w = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger3",
      // duration: 250,
      offset: 0,
      
    //   reverse: false,
    })
     .setClassToggle('.section_4' , 'section_4_add')
    .addIndicators({
            name: 'scene 066'
        })
   .addTo(controller);




   var scene_w = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger4",
      // duration: 250,
      offset: 0,
      
    //   reverse: false,
    })
     .setClassToggle('.section_5' , 'big')
    .addIndicators({
            name: 'scene 077'
        })
   .addTo(controller);






    var scene_x = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger5",
      duration: 350,
      offset: 150,
      
    //   reverse: false,
    })
     .setPin('#sticky')
    .addIndicators({
            name: 'scene 088'
        })
   .addTo(controller);


})



