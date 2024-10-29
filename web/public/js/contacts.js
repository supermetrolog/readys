var lat = "55.74949"
var lng = "37.60539300000005";
var marker;
$(document).ready(function(){
	init_map(lat, lng, 1, 20, 15, [], false, false);
	var mImage = new google.maps.MarkerImage('/public/images/office-marker.png',new google.maps.Size(28, 48),new google.maps.Point(0, 0),new google.maps.Point(14, 48));
	marker1 = new google.maps.Marker({
	    position: new google.maps.LatLng(lat, lng),
	    map: map,
	    title:"Penny Lane Realty",
	    icon: mImage
	});
	marker2 = new google.maps.Marker({
		position: new google.maps.LatLng("55.757969", "37.582211"),
		map: map,
		title:"Penny Lane Realty",
		icon: mImage
	});
	
	$(document).on("click", ".tab > div > div", function(){
		map.setCenter(new google.maps.LatLng($(this).data("lat"), $(this).data("lng")));
		$("div.address").html($(this).data("address"));
	});
});