
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
   delay : 1.5,
   ease : Quad.easeOut
});



















});






  $(function () { // wait for document ready
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
            {x: 510,  y: 60},
            {x: 620,  y: -60},
            {x: 500,  y: -100},
            {x: 380,  y: 20},
            {x: 500,  y: 60},
            {x: 580,  y: 20},
            {x: 620,  y: 15}
          ]
      },
      leave : {
        curviness: 1.25,
        autoRotate: true,
        values: [
            {x: 660,  y: 20},
            {x: 800,  y: 40},
            {x: 1000,  y: 90},
            {x: $(window).width() + 300,  y: -100},
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
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: 720, offset: 410})
            .setPin("#target")
            .setTween(tween)
            .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
  });


