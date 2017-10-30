
$(function(){

TweenMax.fromTo( "#SPNAME" , .7 , {
    x : -50,
    opacity : 0,
}, {
   x : 0,
   opacity : 1,
   ease : Quad.easeOut
});


TweenMax.fromTo( "#SPINFO" , 1 , {
    y : -50,
    opacity : 0,
}, {
   y : 0,
   opacity : 1,
   delay : 0.7,
   ease : Quad.easeOut
});


TweenMax.fromTo( "#SPSTORY" , 1 , {
    y : -50,
    opacity : 0,
}, {
   y : 0,
   opacity : 1,
   delay : 1.2,
   ease : Quad.easeOut
});


TweenMax.fromTo( ["#review-btn","#getstar","#SPFOLLOW"] , 1 , {
    y : -50,
    opacity : 0,
}, {
   y : 0,
   opacity : 1,
   delay : 0.7,
   ease : Quad.easeOut
});






 var flightpath = {
      entry : {
        curviness: 1.25,
        autoRotate: true,
        values: [
            {x: 100,  y: -20},
            {x: 300,  y: 10}
          ]
      },
      looping : {
        curviness: 1.25,
        autoRotate: true,
        values: [
            {x: 510,  y: 50},  //1
            {x: 580,  y: -60}, //2
            {x: 510,  y: -100},//3
            {x: 440,  y: 0},  //4
            {x: 510,  y: 40},  //5
            {x: 580,  y: 10},  //6
            {x: 620,  y: 0}   //7
          ]
      },
      leave : {
        curviness: 1.25,
        autoRotate: true,
        values: [
            {x: 680,  y: -20},
            {x: 840,  y: 0},
            {x: 1000,  y: 40},
            {x: 1200,  y: 40},
            {x: 1400,  y: 10},
            {x: 1410,  y: 0}
            //{x: $(window).width() + 10,  y: -100},
          ]
      }
    };
    // init controller
    var controller = new ScrollMagic.Controller();

    // create tween
    var tween = new TimelineMax()
      .add(TweenMax.to($("#btfly"), 1.2, {css:{bezier:flightpath.entry}, ease:Power1.easeInOut}))
      .add(TweenMax.to($("#btfly"), 2, {css:{bezier:flightpath.looping}, ease:Power1.easeInOut}))
      .add(TweenMax.to($("#btfly"), 1, {css:{bezier:flightpath.leave}, ease:Power1.easeInOut}));

    // build scene
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 720, offset: 470})
            .setPin("#target")
            .setTween(tween)
            //.addIndicators() // add indicators (requires plugin)
            .addTo(controller);









var scene_two = new ScrollMagic.Scene;

var pd_show = 
TweenMax.from( ['#pd1' , '#pd2' , '#pd3', '#pd4', '#pd5', '#pd6'] , 1.2 ,{scale:.1, opacity:0, delay:0, rotation: 120, ease:Quad.easeOut});
//TweenMax.from( $('#pd2'), 1.2,{scale:.1, opacity:0, delay:0.3, rotation: 120, ease:Quad.easeOut});
//TweenMax.from( $('#pd3'), 1.2,{scale:.1, opacity:0, delay:0.6, rotation: 120, ease:Quad.easeOut});
//TweenMax.from( $('#pd4'), 1.2,{scale:.1, opacity:0, delay:0.9, rotation: 120, ease:Quad.easeOut});
//TweenMax.from( $('#pd5'), 1.2,{scale:.1, opacity:0, delay:1.2, rotation: 120, ease:Quad.easeOut});
//TweenMax.from( $('#pd6'), 1.2,{scale:.1, opacity:0, delay:1.5, rotation: 120, ease:Quad.easeOut});

var scene_t = new ScrollMagic.Scene({
      //做事情
      triggerElement: "#trigger2",
      //duration: 300,
      offset: 0,
    })
    .setTween(pd_show)
    // .addIndicators({
    //         name: 'scene 02'
    //     })
    .addTo(controller);








});



