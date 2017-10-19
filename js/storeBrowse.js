	//胖小車即時位置地圖
function initBreadCarNowLocationMap(id) {
	var map = new google.maps.Map(document.getElementById(id), {
	  zoom: 16,
	  center: {lat: 24.965356, lng: 121.191038}
	});
	var image = "img/icon/van2.png";
	var beachMarker = new google.maps.Marker({
	  position: {lat:  24.965356 , lng: 121.191038},
	  map: map, 
	  icon: image
	});
}
	//胖小車路線地圖: id, 座標 array
function initBreadCarRouteMap(id, LatLngArr, nowLocation) {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
	var labels = '123456';
	var labelIndex = 0;
    //initMap
    var map = new google.maps.Map(document.getElementById(id), {
      zoom: 13,
      center: {lat: 24.969882, lng: 121.191587}
    });
    directionsDisplay.setMap(map);
//now location marker
	var image = "img/icon/van2.png";
	var nowLocationMarker = new google.maps.Marker({
	  position: nowLocation,
	  map: map, 
	  icon: image
	});    
//init route service
    var waypts = [];
	for (waypoint in LatLngArr) {
        waypts.push({
          location: LatLngArr[waypoint],
          stopover: true
        });
	}
    directionsService.route({
      origin: {lat: 24.969882, lng: 121.191587},
      destination: {lat: 24.971531, lng: 121.178006},
      waypoints: waypts,
      optimizeWaypoints: true,
      travelMode: 'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {
      	//有這行才會畫出來...
      	directionsDisplay.setDirections(response);	
      } else {
        console.log('Directions request failed due to ' + status);
      }
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
	$('.screen-bread-car-map .maps').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  swipe: false,
	  asNavFor: '.screen-bread-car-map .tabs'
	});
   $('.screen-bread-car-map .tabs').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  arrows: false,
	  dots: true,
	  centerMode: true,
	  focusOnSelect: true,
	  asNavFor: '.screen-bread-car-map .maps',
	  // variableWidth: true,
	  infinite: true,
	  responsive: [
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
  });
   $('.screen-bread-car-map .tabs').on('afterChange', function(event, slick, direction){
  		// console.log(direction);
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
// var scene = new ScrollMagic.Scene({triggerElement: "a#screen-bread-car-map", duration: 200, triggerHook: "onLeave"})
// 					.setTween(tween)
// 					.addIndicators() // add indicators (requires plugin)
// 					.addTo(controller);

// 				// change behaviour of controller to animate scroll instead of jump
// 				controller.scrollTo(function (newpos) {
// 					TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
// 				});
						
}