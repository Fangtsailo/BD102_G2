//胖小車即時位置地圖
function initBreadCarNowLocationMap(selector) {
var map = new google.maps.Map(document.getElementById(selector), {
  zoom: 16,
  center: {lat: 24.965356, lng: 121.191038}
});

var image = {
	path: "M27.4,8.1h-20c-4,0-5,3.3-5,5v13h-2v2h4v-15c0-0.5,0.2-3,3-3h1v8h27.5c0.3,1.4,0.5,3.1,0.5,5v2c0,0.5-0.2,1-1,1 h-1.1c-0.5-2.3-2.5-4-4.9-4s-4.4,1.7-4.9,4h-8.2c-0.5-2.3-2.5-4-4.9-4c-2.8,0-5,2.2-5,5s2.2,5,5,5c2.4,0,4.4-1.7,4.9-4h8.2 c0.5,2.3,2.5,4,4.9,4s4.4-1.7,4.9-4h1.1c2.2,0,3-1.8,3-3v-2C38.4,8.3,27.5,8.1,27.4,8.1z M16.4,16.1h-6v-6h6V16.1z M24.4,16.1h-6v-6 h6V16.1z M26.4,16.1v-6h1c0.3,0,5.5,0.1,7.8,6H26.4z M11.4,30.1c-1.6,0-3-1.4-3-3s1.4-3,3-3s3,1.4,3,3S13.1,30.1,11.4,30.1z M29.4,30.1c-1.6,0-3-1.4-3-3s1.4-3,3-3s3,1.4,3,3S31.1,30.1,29.4,30.1z"
};
var beachMarker = new google.maps.Marker({
  position: {lat:  24.965356 , lng: 121.191038},
  map: map, 
  icon: image
});
}

//screen1 animation, like a paper
function animate_illustration(a, b) {
    $("#" + a).find("div");
    TweenMax.killTweensOf($("#" + a));
    switch (b) {
        case "start":
            setTimeout(function() {
                $("#" + a).find('div:not(".cloud,.country_name")').each(function(a) {
                    TweenMax.to($(this), .5, {
                        delay: .15 * a,
                        rotationX: 0,
                        opacity: 1,
                        ease: "Back.easeOut",
                        startAt: {
                            visibility: "visible"
                        }
                    })
                })
            }, 100);
            setTimeout(function() {
                    $("#" + a).find("div.cloud").each(function(a) {
                        TweenMax.fromTo($(this), .5, {
                            scale: 3,
                            opacity: 0,
                            rotationX: 0,
                            visibility: "visible"
                        }, {
                            delay: .15 * a,
                            scale: 1,
                            opacity: 1,
                            ease: "Back.easeOut"
                        })
                    })
                },
                400);
            setTimeout(function() {
                TweenMax.to($("#" + a).find("div.country_name"), .5, {
                    opacity: 1,
                    left: $("#" + a).find("div.country_name").data("posx") + "%",
                    ease: "Back.easeOut"
                })
            }, 1E3);
            break;
        case "end":
            setTimeout(function() {
                    $("#" + a).find('div:not(".cloud,.country_name")').each(function(a) {
                        TweenMax.fromTo($(this), .5, {
                            rotationX: 0,
                            startAt: {
                                visibility: "visible"
                            }
                        }, {
                            delay: .15 * a,
                            rotationX: -89,
                            ease: "Back.easeIn",
                            opacity: 0,
                            onCompleteParams: [$(this)],
                            onComplete: function(a) {
                                a.css({
                                    visibility: "hidden",
                                    opacity: 1
                                })
                            }
                        })
                    })
                }, 400),
                $("#" + a).find("div.cloud").each(function(a) {
                    TweenMax.fromTo($(this), .5, {
                        scale: 1,
                        opacity: 1,
                        startAt: {
                            visibility: "visible"
                        }
                    }, {
                        delay: .15 * a,
                        scale: 0,
                        ease: "Back.easeIn",
                        opacity: 0,
                        onCompleteParams: [$(this)],
                        onComplete: function(a) {
                            $(this).css({
                                visibility: "hidden",
                                opacity: 1,
                                scale: 3
                            })
                        }
                    })
                }), setTimeout(function() {
                    $("#" + a).find("div.country_name").each(function(a) {
                        TweenMax.to($(this), .5, {
                            delay: .15 * a,
                            opacity: 0,
                            left: "20%",
                            ease: "Back.easeOut"
                        })
                    })
                }, 1E3)
    }
}