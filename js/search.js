





//initBreadCarNowLocationMap("map-now-<?php echo "$searchRow->SI_NUM";?>");

	function initBreadCarNowLocationMap(selector,lat,lng) {
		var map = new google.maps.Map(document.getElementById(selector), {
		  zoom: 16,
		  center: {lat: lat, lng: lng}
		});
		var image =src='img/map_point.png';
			
		;
		var beachMarker = new google.maps.Marker({
		  position: {lat:  lat , lng: lng},
		  map: map, 
		  icon: image
		});
	}



