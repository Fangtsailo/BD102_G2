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




    var scenes_house = document.getElementById('scenes_house');
    var parallax = new Parallax(scenes_house);

    var scenes_sign = document.getElementById('scenes_sign');
    var parallax = new Parallax(scenes_sign);

    var scenes_car = document.getElementById('scenes_car');
    var parallax = new Parallax(scenes_car);

    var scenes_logo = document.getElementById('scenes_logo');
    var parallax = new Parallax(scenes_logo);









})