var interval = 1500;
var timeChange;
var ajax_request;
var markersimilar = [];
var similar;
$(document).ready(function(){
	
	$('a[href^="#"]').click(function(){
		var target = $(this).attr('href');
		$('html, body').animate({scrollTop: $("a[name='"+target.replace("#", "")+"']").offset().top}, 800);//800 - длительность скроллинга в мс
		return false; 
	});
	
	$(document).on("click", ".tab div[data-general='tab-maps'] div, .tab div[data-general='tab-maps-newbuilding'] div", function(){
		switch($(this).attr("data-init")){
			case "map":
				//init_map(lat, lng, 1, 16, 14, [], false, false);
				break;
			case "pano":
				initPano(lat, lng);
				break;
			case "similar":
				mapOptions = {
					zoom: 14,
					minZoom: 1,
					maxZoom: 16,
					center: new google.maps.LatLng(lat, lng),
					scrollwheel:false,
					disableDoubleClickZoom:true,
					streetViewControl:true,
					zoomControl : true,
					keyboardShortcuts : false,
					mapTypeControl : true,
					//draggable : false,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					panControl : false,
					zoomControlOptions:{position:google.maps.ControlPosition.RIGHT_CENTER},
					mapTypeControlOptions:{position:google.maps.ControlPosition.RIGHT_TOP},
					styles: [],
					streetViewControl: true,
					streetViewControlOptions: {
				        position: google.maps.ControlPosition.RIGHT_BOTTOM
				    }
				};
				similar = new google.maps.Map(document.getElementById("similar"), mapOptions);
				var markerjk = new google.maps.Marker({
			        position: new google.maps.LatLng(lat, lng),
			        draggable: false,
			        map: similar,
			        icon: "/public/images/ico/lot-marker.svg",
			        title: "",
			    });
				similar.addListener('idle', function() {
					clearTimeout(timeChange);
					timeChange = setTimeout(function(){
						getMapLots();
					    }, interval);
					});
				//similsar lots
				if(similars != undefined && similars.length > 0){
					for(i in similars){
						markersimilar.push(new google.maps.Marker({
					        position: similars[i].latlng,
					        draggable: false,
					        map: similar,
					        icon: "/public/images/ico/map/key-novostroika.svg",
					        title: similars[i].name,
					        data_marker: similars[i]
					    }));
						google.maps.event.addListener(markersimilar[i], 'click', function() {
							window.open(this.data_marker.url,'_blank');
					    });
					}
				}
				break;
		}
	});
});

//Sets the map on all markers in the array.
function clearMarker() {
  for (var i = 0; i < markersimilar.length; i++) {
	markersimilar[i].setMap(null);
  }
  markersimilar = [];
}

function getMapLots(){
		if (ajax_request){
			ajax_request.abort();
		}
		$(".tab-maps.c").after('<div id="ajax-loader"><div id="loader"></div></div>');
		radius = google.maps.geometry.spherical.computeDistanceBetween(similar.getBounds().getNorthEast(), similar.getCenter())
		$("#similar-jk input[name='latlng']").val(radius);
		$("#similar-jk input[name='latlngcenter']").val(similar.getCenter().lat() + "_" + similar.getCenter().lng());
		ajax_request = $.get($("#similar-jk").data("action"), $("#similar-jk").serialize(), function(data){
			showMarkers(data);
			$("#ajax-loader").remove();
		}, 'json');
}

function showMarkers(data){
	clearMarker();
	
	for(i in data.markers){
		markersimilar.push(new google.maps.Marker({
	        position: new google.maps.LatLng(data.markers[i].lat, data.markers[i].lng),
	        draggable: false,
	        map: similar,
	        icon: "/public/images/ico/map/key-novostroika.svg",
	        title: data.markers[i].complexName,
	        data_marker: data.markers[i]
	    }));
		google.maps.event.addListener(markersimilar[i], 'click', function() {
			window.open("/residential-complex/"+this.data_marker.complexLink+"/",'_blank');
	    });
	}
}
