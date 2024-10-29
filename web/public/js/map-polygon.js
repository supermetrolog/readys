var drawingManager;
var polygon;
var circle;


$(document).ready(function(){
	$(document).on("click", ".clear-map", function(){
		map_polygon_restart("polygon", getLots);
	});
	$(document).on("touchend", ".map-trash", function(){
		map_polygon_restart("polygon", getLots);
	});
});

function init_polygon(){
	//инициализируем карту
	init_map("55.753960", "37.617646", 1, 16, 14, [], false, call);
	$(".clear-map").attr("data-type", "polygon");
	$(".clear-map span").html("Очистить границы");
}

var call = function(){
	/*если уже что-то очертили*/ 
	if($(".filter input[name='overlay']").val() != ""){
		switch($(".filter input[name='overlay']").val()){
			case 'polygon':
				// Define the LatLng coordinates for the polygon's path.
				coords = JSON.parse($(".filter input[name='coords']").val());
				// Construct the polygon.
				polygon = new google.maps.Polygon({
				    paths: coords,
				    strokeColor: '#ea4e56',
				    strokeWeight: 3,
				    fillColor: '#ea4e56',
				    fillOpacity: 0.1,
				    editable: true,
				    clickable: true,
			    	draggable: true
				});
				polygon.setMap(map);
				break;
			case 'circle':
				coords = $(".filter input[name='coords']").val().split(",");
				circle = new google.maps.Circle({
				      strokeColor: '#ea4e56',
				      fillOpacity: 0.1,
				      strokeWeight: 3,
				      fillColor: '#ea4e56',
				      map: map,
				      center: {"lat": parseFloat(coords[0]), "lng": parseFloat(coords[1])},
				      radius: parseFloat($(".filter input[name='radius']").val()),
				      editable: true,
				      clickable: true,
				      draggable: true
				    });
				break;
		}
		if($(".filter input[name='center']").val() != ""){
			map.setCenter(JSON.parse($(".filter input[name='center']").val()));
		}
		if($(".filter input[name='zoom']").val() != ""){
			map.setZoom(parseInt($(".filter input[name='zoom']").val()));
		}
		$(".map-trash").show();
	}else{
		map_polygon_restart("polygon");
	}
}

/*библиотека рисования*/
function create_drawing(type){
	if(type == "circle"){
		var overlay_type = google.maps.drawing.OverlayType.CIRCLE;
	}else{
		var overlay_type = google.maps.drawing.OverlayType.POLYGON;
	}
	
	drawingManager = new google.maps.drawing.DrawingManager({
	    drawingMode: overlay_type,
	    drawingControl: false,
	    drawingModes: [
	                   google.maps.drawing.OverlayType.CIRCLE,
	                   google.maps.drawing.OverlayType.POLYGON,
	                 ],
	    polygonOptions: {
	    	editable: true,
	    	clickable: true,
	    	draggable: true,
			fillColor: '#ea4e56',
			fillOpacity: 0.1,
			strokeWeight: 3,
			strokeColor: '#ea4e56'
	      
	    },
	    circleOptions: {
	        fillColor: '#ea4e56',
	        strokeColor: '#ea4e56',
	        fillOpacity: 0.1,
	        strokeWeight: 3,
	        clickable: true,
	        editable: true,
	        zIndex: 1
	    }
	  });
	  drawingManager.setMap(map);
	  
	  google.maps.event.addListener(drawingManager, 'overlaycomplete', function(event) {
		  drawingManager.setMap(null);
		  if (event.type == google.maps.drawing.OverlayType.POLYGON) {
			  polygon = event.overlay;
			  listening_polygon();
			  polygon.getPaths().forEach(function (path, index) {
				  google.maps.event.addListener(path, 'insert_at', function () {
					  listening_polygon();
				  });
				  google.maps.event.addListener(path, 'remove_at', function () {
					  listening_polygon();
				  });
				  google.maps.event.addListener(path, 'set_at', function () {
					  listening_polygon();
				  });
		    });
		  }
		  if (event.type == google.maps.drawing.OverlayType.CIRCLE) {
			  circle = event.overlay;
			  listening_circle();
			  google.maps.event.addListener(circle,'radius_changed',function(){
				  listening_circle();
		      });
		      google.maps.event.addListener(circle,'center_changed',function(){
		    	  listening_circle();
		      });
		  }
		  $(".map-trash").show();
	  });
}

function listening_polygon(){
	clearTimeout(timeChange);
	timeChange = setTimeout(function(){
		/*получаем координаты в виде массива и заносим в фильтр*/
		coords = JSON.stringify(polygon.getPath().getArray());
		$(".filter input[name='overlay']").val("polygon");
		$(".filter input[name='coords']").val(coords);
		$(".filter input[name='center']").val(JSON.stringify(map.getCenter()));
		$(".filter input[name='zoom']").val(map.getZoom());
		if($(".wrap-select-condition div[data-name='polygon']").length == 0){
			addSelectCondition("polygon", 1, "Очерченные границы");
		}
		getLots();
	}, 500);
}
function listening_circle(){
	clearTimeout(timeChange);
	timeChange = setTimeout(function(){
		//получаем координаты в виде массива и заносим в фильтр
		coords = circle.getBounds().getCenter().toUrlValue();
		radius = circle.getRadius();
		$(".filter input[name='overlay']").val("circle");
		$(".filter input[name='coords']").val(coords);
		$(".filter input[name='radius']").val(radius);
		$(".filter input[name='center']").val(JSON.stringify(map.getCenter()));
		$(".filter input[name='zoom']").val(map.getZoom());
		if($(".wrap-select-condition div[data-name='circle']").length == 0){
			addSelectCondition("circle", 1, "Поиск в радиусе");
		}
		getLots();
	}, 500);
}


function map_polygon_restart(overlay_type, callback){
	if (typeof drawingManager == "object") {
		drawingManager.setMap(null);
	}
	$(".button-block[data-name='map-type'] div.button").removeClass("active");
	if(overlay_type == "circle"){
		$(".button-block[data-name='map-type'] div.button[data-value='circle']").addClass("active");
	}else{
		$(".button-block[data-name='map-type'] div.button[data-value='polygon']").addClass("active");
	}
	$(".filter input[name='overlay']").val("");
	$(".filter input[name='coords']").val("");
	$(".filter input[name='radius']").val("");
	$(".filter input[name='center']").val("");
	$(".filter input[name='zoom']").val("");
	if(polygon){
		polygon.setMap(null);
		removeAllGroupSelectCondition("polygon");
	}
	if(circle){
		circle.setMap(null);
		removeAllGroupSelectCondition("circle");
	}
	create_drawing(overlay_type);
	$(".map-trash").fadeOut();
	if (typeof callback == 'function'){
		callback();
	}
	
}

