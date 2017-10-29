$(function(){





initBreadCarNowLocationMap("map-now2");

	function initBreadCarNowLocationMap(selector) {
		var map = new google.maps.Map(document.getElementById(selector), {
		  zoom: 16,
		  center: {lat: 24.965356, lng: 121.191038}
		});
		var image =src='img/map_point.png';
			
		;
		var beachMarker = new google.maps.Marker({
		  position: {lat:  24.965356 , lng: 121.191038},
		  map: map, 
		  icon: image
		});
	}



})