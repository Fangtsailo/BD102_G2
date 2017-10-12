$(function () {

	 TweenMax.fromTo(".house", 1, {
        // y: -50,
        opacity: 0,
    }, {
        // y: 0,
        opacity: 1,
        delay: 1,
        // ease: Bounce.easeOut
    });


	 TweenMax.fromTo(".sign", 1, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 1,
        // ease: Bounce.easeOut
    }); 


	 TweenMax.fromTo(".car", 1.5, {
        x: 220,
        opacity: 0,
    }, {
        x: 0,
        opacity: 1,
        delay: 2,
        ease:Quad.easeOut
    }); 


     TweenMax.fromTo(".logo", 1, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 2.5,
        ease:Bounce.easeOut
    }); 

      TweenMax.fromTo(".left-bread", 0.5, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 2.8,
        ease:Bounce.easeOut
    }); 


        TweenMax.fromTo(".right-bread", 0.5, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 2.8,
        ease:Bounce.easeOut
    }); 

       TweenMax.fromTo(".rwd-left-bread", 0.5, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 2.8,
        ease:Bounce.easeOut
    }); 


        TweenMax.fromTo(".rwd-right-bread", 0.5, {
        y: -50,
        opacity: 0,
    }, {
        y: 0,
        opacity: 1,
        delay: 2.8,
        ease:Bounce.easeOut
    });    




    // var scence = document.getElementById('scenes');
    // var parallax = new Parallax(scence);









})