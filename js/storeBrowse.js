//hover or click 評價星======================
function initReviewStarAction() {
	for (var i = 1; i <= 5; i++) {
		$('#review-star' + i).click(function() {
			var id = $(this).attr('data-id');
			starFillColorByNum(id);
		});
	}
	//確定送出按鈕的 event
	$('#submit-review-btn').click(function() {
		confirmReviewAction();
	});
	$('#cancel-review-btn').click(function() {
		$('.review-mask').fadeOut(500);
		reviewIGave = 0;
		starFillColorByNum(reviewIGave);
	});
}
function initReportAction() {
	$('#submit-report-btn').click(function() {
				//只取前50字
		if (reportMessageNum != -1) {
			var reason = $('#report-reason').val();
			reason = reason.substring(0,50);
				var param = "messageNum=" + reportMessageNum + "&memNum=" + memNum + "&reason=" + reason;
			  var xhr = new XMLHttpRequest();
			  xhr.onreadystatechange=function (){
			    if( xhr.readyState == 4){
			       if( xhr.status == 200 ){
			       		//檢舉完成, 把 button 變色跟變字
			       		$('#msg-' + reportMessageNum + ' p').text('已檢舉');
			       		$('#msg-' + reportMessageNum).off();
			       		$('#msg-' + reportMessageNum).addClass('reported');
			       		reportMessageNum = -1;
			       		$('.report-mask').fadeOut(500);
			       }else{
			       	$('.report-mask').fadeOut(500);
			          console.log( xhr.status );
			       }
			   }
			  }
			  
			  var url = "php/store/browse/ajax/AjaxReportMessage.php";
			  xhr.open("Post", url, true);
			  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			  xhr.send( param );
		} else {
			$('.report-mask').fadeOut(500);
		}
	});
	$('#cancel-report-btn').click(function() {
		$('.report-mask').fadeOut(500);
		$('#report-reason').val("");
	});
}
//確定送出評價
function confirmReviewAction() {
	if (memNum != -1) {
		  var xhr = new XMLHttpRequest();
		  xhr.onreadystatechange=function (){
		    if( xhr.readyState == 4){
		       if( xhr.status == 200 ){
		       	// var jsonObj = JSON.parse(xhr.responseText);
		       	var avgReviewValue = parseInt(xhr.responseText);
			       	//改變評價值
			       	html = "";
			       	for (var i = 0;i < 5;i++) {
						if (avgReviewValue > 0) {
							html +=	'<li class="star pointer"><img alt="star.svg" src="img/icon/star2.svg"></li>';
							avgReviewValue--;
						} else {
							html +=	'<li class="star pointer"><img alt="star.svg" src="img/icon/star3.svg"></li>';
								}
					}
					$('#review-btn').html(html);
					reviewIGave = 0;
					starFillColorByNum(reviewIGave);
					$('.review-mask').fadeOut(500);
		       }else{
		          console.log( xhr.status );
		       }
		   }
		  }		  
		  var url = "php/store/browse/ajax/AjaxReviewAction.php?storeId=" + storeId + "&memNum=" + memNum + "&reviewNum=" + reviewIGave;
		  xhr.open("Get", url, true);
		  xhr.send( null );	
	}	
}
//填滿星星
function starFillColorByNum(num) {
	reviewIGave = num;
	for (var i = 1; i <= 5; i++) {
		if (i <= num) {
			$('#review-star' + i + ' img').attr("src","img/icon/star2.svg");
		} else {
			$('#review-star' + i + ' img').attr("src","img/icon/star3.svg");
		}
	}
}
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
 	//user scroll 到特定特範圍, 對應 dot 要變色
 	$(window).on('scroll', function(){
		if ($(document).scrollTop() > (3340 + $('.screen-messages').height()) ) {
	    	$('.navigator a .point').removeClass('selected');
	    	$('.navigator a:nth-child(6) .point').addClass('selected');
	    }  else if ($(document).scrollTop() > 3340) {
	    	$('.navigator a .point').removeClass('selected');
	    	$('.navigator a:nth-child(5) .point').addClass('selected');
	    } else if ($(document).scrollTop() > 2400) {
	    	$('.navigator a .point').removeClass('selected');
	    	$('.navigator a:nth-child(4) .point').addClass('selected');
	    } else if ($(document).scrollTop() > 1550) {
	    	$('.navigator a .point').removeClass('selected');
	    	$('.navigator a:nth-child(3) .point').addClass('selected');
	    } else if ($(document).scrollTop() > 650) {
	    	$('.navigator a .point').removeClass('selected');
	    	$('.navigator a:nth-child(2) .point').addClass('selected');
	    } else {
	    	$('.navigator a .point').removeClass('selected');
	    	$('.navigator a:nth-child(1) .point').addClass('selected');
	    }

 	});
}

//檢舉留言
function reportMessage(messageNum, memNum) {
	if (memNum != -1 ) {
		reportMessageNum = messageNum;
		$('.report-mask').fadeIn(500);
	} else {
		//須先登入
		$('#loginBox').fadeIn(500);
	    $("#menu").removeClass("show");
	    $('#addShopBox').hide();
	}
}

//留言
function sendMessage(storeId, memId, content) {
	if (memId != -1) {
	  var xhr = new XMLHttpRequest();
	  var param = "storeId=" + storeId + "&memId=" + memId + "&content=" + content;
	  xhr.onreadystatechange=function (){
	    if( xhr.readyState == 4){
	       if( xhr.status == 200 ){
	       		location.reload();
	       }else{
	          console.log( xhr.status );
	       }
	   }
	  }
	  
	  var url = "php/store/browse/ajax/AjaxSendMessage.php";
	  xhr.open("Post", url, true);
	  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xhr.send( param );	
	}
}

//抓取更多留言
nowMessagePage = 0;
function loadMoreMessage(storeId, loginMemNum) {
	  var xhr = new XMLHttpRequest();
	  xhr.onreadystatechange=function (){
	    if( xhr.readyState == 4){
	       if( xhr.status == 200 ){
	        var messageListObj = JSON.parse(xhr.responseText);
	        nowMessagePage++;
	        var html = "";
	        for (var key in messageListObj) {
	        	if (!messageListObj[key].isRemoveByADM) {
	        	html +=	'<div class="message-box">'
					+	'	<div class="mem-pic col-lg-2"><div class="picture" style="background-image:url('+messageListObj[key].memberPicName+')"></div></div>'
					+	'	<div class="content col-lg-10">'
					+	'		<div class="container">'
					+	'			<div class="name">'+ messageListObj[key].memberName +'<span class="datetime">'+ messageListObj[key].dateStr +'</span></div>'
					+	'			<p>'+ messageListObj[key].content +'</p>'
					+	'			<div class="setting-area">'
					+	'				<div class="report pointer button" data-id="'+ messageListObj[key].no +'" id="msg-'+ messageListObj[key].no + '">'
					+	'					<p>檢舉</p>'
					+	'			</div></div>'
					+	'			<div class="clear"></div>'
					+	'		</div>'
					+	'	</div>'
					+	'	<div class="clear"></div>'
					+	'</div>';
				}
	        }
	        $('#messages-area').append(html);
	        $('#messages-area').append($('#more-message'));
	        //ajax載入的檢舉要加事件
	        for (var key in messageListObj) {
	        	if (messageListObj[key].isReportByMe == true) {
			   		$('#msg-' + messageListObj[key].no).addClass('reported');
			   		$('#msg-' + messageListObj[key].no + ' p').text('已檢舉');
				}
	        	$('#msg-'+ messageListObj[key].no).on('click', function(){
					var id = $(this).attr('data-id');
						reportMessage(id, loginMemNum);

				});	
	        }
	       }else{
	          console.log( xhr.status );
	       }
	   }
	  }
	  
	  var url = "php/store/browse/ajax/AjaxLoadMoreMessage.php?messagePage=" + nowMessagePage + "&storeId=" + storeId + "&loginMemNum=" + loginMemNum;
	  xhr.open("Get", url, true);
	  xhr.send( null );
}
function loadMoreMessage2(storeId, loginMemNum) {
	  var xhr = new XMLHttpRequest();
	  xhr.onreadystatechange=function (){
	    if( xhr.readyState == 4){
	       if( xhr.status == 200 ){
	        var messageListObj = JSON.parse(xhr.responseText);
	        nowMessagePage++;
	        var html = "";
	        for (var key in messageListObj) {
	        	if (!messageListObj[key].isRemoveByADM) {
	        	html +=	'<div class="message-box">'
					+	'	<div class="mem-pic col-lg-2"><div class="picture" style="background-image:url('+messageListObj[key].memberPicName+')"></div></div>'
					+	'	<div class="content col-lg-10">'
					+	'		<div class="container">'
					+	'			<div class="name">'+ messageListObj[key].memberName +'<span class="datetime">'+ messageListObj[key].dateStr +'</span></div>'
					+	'			<p>'+ messageListObj[key].content +'</p>'
					+	'			<div class="setting-area">'
					+	'				<div class="report pointer button" data-id="'+ messageListObj[key].no +'" id="msg-'+ messageListObj[key].no + '">'
					+	'					<p>檢舉</p>'
					+	'			</div></div>'
					+	'			<div class="clearfix"></div>'
					+	'		</div>'
					+	'	</div>'
					+	'	<div class="clearfix"></div>'
					+	'</div>';
				}
	        }
	        $('#messages-area').append(html);
	        $('#messages-area').append($('#more-message'));
	        //ajax載入的檢舉要加事件
	        for (var key in messageListObj) {
	        	if (messageListObj[key].isReportByMe == true) {
			   		$('#msg-' + messageListObj[key].no).addClass('reported');
			   		$('#msg-' + messageListObj[key].no + ' p').text('已檢舉');
				}
	        	$('#msg-'+ messageListObj[key].no).on('click', function(){
					var id = $(this).attr('data-id');
						reportMessage(id, loginMemNum);

				});	
	        }
	       }else{
	          console.log( xhr.status );
	       }
	   }
	  }
	  
	  var url = "php/store/browse/ajax/AjaxLoadMoreMessage.php?messagePage=" + nowMessagePage + "&storeId=" + storeId + "&loginMemNum=" + loginMemNum;
	  xhr.open("Get", url, true);
	  xhr.send( null );
}
	//胖小車即時位置地圖
function initBreadCarNowLocationMap(id, lat, lng) {
	if ((lat != '' && lng != '') || (lat != 0 && lng != 0)) {
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
	} else {
		//沒目前位置就預設中大
		var map = new google.maps.Map(document.getElementById(id), {
		  zoom: 16,
		  center: {lat: 24.967993, lng: 121.191168}
		});
		//前端顯示沒營業
		var infoWindow = new google.maps.InfoWindow({
          content: '胖小車休息中喔!!'
        });
        infoWindow.setPosition({lat: 24.967993, lng: 121.191168});
        infoWindow.open(map);
	}
}
	//胖小車路線地圖: id, 座標 array
function initBreadCarRouteMap(id, LatLngArr, nowLocationLat, nowLocationLng) {
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
	if ((nowLocationLat !=0 || nowLocationLng !=0) && (nowLocationLat !="" || nowLocationLng != "")) {
		var nowLocationMarker = new google.maps.Marker({
		  position: {lat: nowLocationLat, lng: nowLocationLng},
		  map: map, 
		  icon: image
		});  
	}  
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
function allSlickSetting(breadCarPathCount) {
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
	  arrows: false,
	  responsive: [
	    {
	      breakpoint: 767,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        centerMode: true,
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
	  slidesToShow: breadCarPathCount,
	  slidesToScroll: 1,
	  arrows: false,
	  dots: false,
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