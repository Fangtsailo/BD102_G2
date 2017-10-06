function doFirst(){
	var area = document.getElementById('myMap');
	var myPosition = new google.maps.LatLng(24.9708264, 121.18820769999999);

	var map = new google.maps.Map(area,{
		zoom: 14,
		center: myPosition,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}); 

	var marker = new google.maps.Marker({
		position: myPosition,
		map: map,
		icon: 'img/iconBOLO.png',
		title: '哪裡有好吃麵包店!'
	});
}
window.addEventListener('load',doFirst,false);