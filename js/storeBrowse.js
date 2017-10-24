//按下追蹤icon動作
function triggerFollow(memNum, storeId) {
	if (memNum != -1) {
		if (!isThisMemFollowThisStore) {
		  var xhr = new XMLHttpRequest();
		  xhr.onreadystatechange=function (){
		    if( xhr.readyState == 4){
		       if( xhr.status == 200 ){
		       	//改變 icon 的圖
		       	$('#follow-icon').attr('src', 'img/icon/follow3.svg');
		       	$('#trace-btn .count').text("("+xhr.responseText+")");
		       	isThisMemFollowThisStore = true;
		       }else{
		          console.log( xhr.status );
		       }
		   }
		  }
		  
		  var url = "php/store/browse/ajax/AjaxTriggerFollow.php?storeId=" + storeId + "&memNum=" + memNum + "&mode=follow";
		  xhr.open("Get", url, true);
		  xhr.send( null );		
		} else {
		  var xhr = new XMLHttpRequest();
		  xhr.onreadystatechange=function (){
		    if( xhr.readyState == 4){
		       if( xhr.status == 200 ){
		       	//取消 follow
		       	$('#follow-icon').attr('src', 'img/icon/follow2.svg');
		       	$('#trace-btn .count').text("("+xhr.responseText+")");
		       	isThisMemFollowThisStore = false;
		       }else{
		          console.log( xhr.status );
		       }
		   }
		  }
		  
		  var url = "php/store/browse/ajax/AjaxTriggerFollow.php?storeId=" + storeId + "&memNum=" + memNum + "&mode=cancel";
		  xhr.open("Get", url, true);
		  xhr.send( null );			
		}
	}
}
//dot scroll 
function navigatorDotScroll() {
	$('.navigator a').click(function(){
       $('html, body').animate({
         scrollTop: $( $.attr(this, 'href') ).offset().top
       }, 700);
       $('.navigator .item .point').removeClass('selected');
       $('.point', this).addClass('selected');
 	});
}

//留言
function sendMessage(storeId, memId, content) {
	if (memId != -1) {
	  var xhr = new XMLHttpRequest();
	  xhr.onreadystatechange=function (){
	    if( xhr.readyState == 4){
	       if( xhr.status == 200 ){
	       		location.reload();
	       }else{
	          console.log( xhr.status );
	       }
	   }
	  }
	  
	  var url = "php/store/browse/ajax/AjaxSendMessage.php?storeId=" + storeId + "&memId=" + memId + "&content=" + content;
	  xhr.open("Get", url, true);
	  xhr.send( null );	
	}
}

//抓取更多留言
nowMessagePage = 0;
function loadMoreMessage(storeId) {
	  var xhr = new XMLHttpRequest();
	  xhr.onreadystatechange=function (){
	    if( xhr.readyState == 4){
	       if( xhr.status == 200 ){
	        var messageListObj = JSON.parse(xhr.responseText);
	        nowMessagePage++;
	        var html = "";
	        for (var key in messageListObj) {
	        	html +=	'<div class="message-box">'
					+	'	<div class="mem-pic col-lg-2"><img alt="'+ messageListObj[key].memberPicName +'" src="'+ messageListObj[key].memberPicName +'"></div>'
					+	'	<div class="content col-lg-10">'
					+	'		<div class="container">'
					+	'			<div class="name">'+ messageListObj[key].memberName +'<span class="datetime">'+ messageListObj[key].dateStr +'</span></div>'
					+	'			<p>'+ messageListObj[key].content +'</p>'
					+	'			<div class="setting-area">'
					+	'				<div class="report pointer">'
					+	'					<div class="img-icon" data-msg-id="'+ messageListObj[key].no + '"><img alt="report.png" src="img/store/browse/report.png"></div><p>檢舉</p></div>'
					+	'			</div>'
					+	'			<div class="clear"></div>'
					+	'		</div>'
					+	'	</div>'
					+	'	<div class="clear"></div>'
					+	'</div>';
	        }
	        $('#messages-area').append(html);
	        $('#messages-area').append($('#more-message'));
	       }else{
	          consle.log( xhr.status );
	       }
	   }
	  }
	  
	  var url = "php/store/browse/ajax/AjaxLoadMoreMessage.php?messagePage=" + nowMessagePage + "&storeId=" + storeId;
	  xhr.open("Get", url, true);
	  xhr.send( null );
}
	//胖小車即時位置地圖
function initBreadCarNowLocationMap(id, lat, lng) {
	var map = new google.maps.Map(document.getElementById(id), {
	  zoom: 16,
	  center: {lat: lat, lng: lng}
	});
	var image = "img/icon/van2.png";
	var beachMarker = new google.maps.Marker({
	  position: {lat:  lat , lng: lng},
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
      center: LatLngArr[0]
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
	for (waypointIndex in LatLngArr) {
		if (waypointIndex != 0 && waypointIndex != LatLngArr.length-1) {
	        waypts.push({
	          location: LatLngArr[waypointIndex],
	          stopover: true
	        });
    	}
	}
    directionsService.route({
      origin: LatLngArr[0],
      destination: LatLngArr[LatLngArr.length-1],
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
 //screen1 banner 輪播
 screen1BannerImgDivNum = "1";
 setInterval(function(){ 
 	var tmpNum = screen1BannerImgDivNum;
 	screen1BannerImgDivNum = (screen1BannerImgDivNum + 1) % 3;
 	screen1BannerImgDivNum = screen1BannerImgDivNum == 0?3:screen1BannerImgDivNum;
 	$('#banner' + screen1BannerImgDivNum).fadeIn(2000);
 	$('#banner' + tmpNum).fadeOut(2000);
  }, 5000);

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
	  focusOnSelect: true,
	  responsive: [
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1
	      }
	    }
	  ]
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
   	$('.banner-area').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  dots: true,
	  fade: true
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