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
function initParallax(selector) {
 		var scence = document.getElementById(selector);
    	var parallax = new Parallax(scence);
}
//所有輪播
function allSlickSetting() {
	// $('.screen-1 .banners').slick({
	//   speed: 2000,//跟 autoPlaySpeed 順序不能錯
	//   autoplay: true,
	//   autoplaySpeed: 3000,
	//   infinite: true,
	//   arrows: false,
	//   fade: true
 //  });
	$('.product').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  asNavFor: '.screen-product .product-list'
	});
  $('.screen-product .product-list').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.product',
	  dots: true,
	  centerMode: true,
	  focusOnSelect: true
  });
   $('.screen-bread-car-map .tabs').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  dots: true,
	  centerMode: true,
	  focusOnSelect: true,
	  // variableWidth: true,
	  infinite: false
  });
}
//screen1 animation, like a paper
function animate_illustration(a, b) {
    $("#" + a).find("div");
    TweenMax.killTweensOf($("#" + a));
    switch (b) {
        case "start":
            setTimeout(function() {
                $("#" + a).find('div.city').each(function(a) {
                    TweenMax.to($(this), 2, {
                        delay: .15,
                        rotationX: 0,
                        opacity: 1,
                        ease: Back.easeOut,
                        startAt: {
                            visibility: "visible"
                        }
                    })
                })
            }, 100);
            setTimeout(function() {
                $("#" + a).find('div.marker').each(function(a) {
                    TweenMax.to($(this), 2, {
                        delay: .15,
                        rotationX: 0,
                        opacity: 1,
                        ease: Back.easeOut,
                        startAt: {
                            visibility: "visible"
                        }
                    })
                })
            }, 100);
            setTimeout(function() {
                    $("#" + a).find("div.cloud").each(function(a) {
                        TweenMax.fromTo($(this), 1, {
                            scale: 3,
                            opacity: 0,
                            rotationX: 0,
                            visibility: "visible"
                        }, {
                            delay: .15 * a,
                            scale: 1,
                            opacity: 0.6,
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

function initAllScrollMagicScene() {
	// init controller
var controller = new ScrollMagic.Controller();
//小車行駛
new ScrollMagic.Scene({
					triggerElement: "#screen1-trigger", duration: $(window).height()
				})
				.on("enter leave", function (e) {
					e.progress.toFixed(3);
						if (e.type == "enter") {
							animate_illustration("bottom-city", "end");
						} else {
							animate_illustration("bottom-city", "start");
						}
					})
				// .addIndicators({name: "0 (duration: 0)"})
				.addTo(controller);

new ScrollMagic.Scene({
					triggerElement: "#bread-car-trigger", duration: $(window).height()
				})
				.setTween(TweenMax.to($("#bread-car"),
		        1, {
		            css: {
		                backgroundPosition: "1000px bottom"
		            },
		            ease: Linear.easeNone
		        }))
				// .addIndicators({name: "1 (duration: car)"})
				.addTo(controller);


new ScrollMagic.Scene({
					triggerElement: "#bread-car-trigger", duration: 300
				})
				.setTween([TweenMax.to($(".screen-bread-car-map .perspective .title"),
		        1, {
		            css: {
		                rotationX: 90
		            },
		            ease: Linear.easeNone
		        }),
		        TweenMax.to($(".screen-bread-car-map .perspective .title .front"),
		        1, {
		            css: {
		                backgroundColor: "#ccc" 
		            },
		            ease: Linear.easeNone
		        })])
				// .addIndicators({name: "1 (duration: 0)"})
				.addTo(controller);

new ScrollMagic.Scene({
					triggerElement: "#product-trigger", duration: 300, offset:-50
				})
				.setTween([TweenMax.to($(".screen-product .perspective .title"),
		        1, {
		            css: {
		                rotationX: 90
		            },
		            ease: Linear.easeNone
		        }),
		        TweenMax.to($(".screen-product .perspective .title .front"),
		        1, {
		            css: {
		                backgroundColor: "#ccc" 
		            },
		            ease: Linear.easeNone
		        })
		        ])
				// .addIndicators({name: "product)"})
				.addTo(controller);			
new ScrollMagic.Scene({
					triggerElement: "#product-trigger2"
				})
				.setTween([TweenMax.staggerFromTo('.screen-product .product', 1.5, {
				    opacity: 0,
				    x: -200
				}, {
				    opacity: 1,
				    x: 0
				}),
				TweenMax.staggerFromTo('.screen-product .product-list', 1.5, {
				    opacity: 0,
				    x: 200
				}, {
				    opacity: 1,
				    x: 0
				})]	)
				// .addIndicators({name: "product)"})
				.addTo(controller);
new ScrollMagic.Scene({
					triggerElement: "#product-star-light-trigger", duration: $(window).height()
				})
				.setTween(TweenMax.to($(".screen-product .star-light"),
		        1, {
		            css: {
		                rotationZ: 360
		            },
		            ease: Linear.easeNone
		        }))
				// .addIndicators({name: "1 (product: 0)"})
				.addTo(controller);
new ScrollMagic.Scene({
					triggerElement: "#activity-trigger", duration: 300, offset: -200
				})
				.setTween([TweenMax.to($(".screen-activity .perspective .title"),
		        1, {
		            css: {
		                rotationX: 90
		            },
		            ease: Linear.easeNone
		        }),
		        TweenMax.to($(".screen-activity .perspective .title .front"),
		        1, {
		            css: {
		                backgroundColor: "#ccc" 
		            },
		            ease: Linear.easeNone
		        })])
				// .addIndicators({name: "activity"})
				.addTo(controller);
new ScrollMagic.Scene({
					triggerElement: "#other-store-trigger", duration: 300, offset:-200
				})
				.setTween([TweenMax.to($(".screen-other-store .perspective .title"),
		        1, {
		            css: {
		                rotationX: 90
		            },
		            ease: Linear.easeNone
		        }),
		        TweenMax.to($(".screen-other-store .perspective .title .front"),
		        1, {
		            css: {
		                backgroundColor: "#ccc" 
		            },
		            ease: Linear.easeNone
		        })])
				// .addIndicators({name: "other-store"})
				.addTo(controller);
new ScrollMagic.Scene({
					triggerElement: "#messages-trigger", duration: 300, offset: -230
				})
				.setTween([TweenMax.to($(".screen-messages .perspective .title"),
		        1, {
		            css: {
		                rotationX: 90
		            },
		            ease: Linear.easeNone
		        }),
		        TweenMax.to($(".screen-messages .perspective .title .front"),
		        1, {
		            css: {
		                backgroundColor: "#ccc" 
		            },
		            ease: Linear.easeNone
		        })])
				// .addIndicators({name: "other-store"})
				.addTo(controller);	
new ScrollMagic.Scene({
					triggerElement: "#messages-icon-trigger"
				})
				.setTween(TweenMax.staggerFromTo('.screen-messages .message-icons .icon', 3, {
				    opacity: 0,
				}, {
				    opacity: 1,
				}))
				// .addIndicators({name: "messages)"})
				.addTo(controller);
						
}