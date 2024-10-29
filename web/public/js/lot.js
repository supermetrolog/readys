$(document).ready(function(){
	/*init_map(lat, lng, 1, 16, 14, [], false, false);
	var image = {
	    url: "/public/images/office-marker.png",
	    // This marker is 20 pixels wide by 32 pixels high.
	    size: new google.maps.Size(60, 65),
	    //origin: new google.maps.Point(0, 0),
	    // The anchor for this image is the base of the flagpole at (0, 32).
	    anchor: new google.maps.Point(30, 65)
	};
	var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, lng),
        draggable: false,
        map: map,
        icon: image,
        title: "",
    });*/
	ymaps.ready(function () {
		init_map_yandex(lat, lng, 1, 16, 14, [], false, false, true);
	});
	$(document).on("click", ".flat-parametrs .more-option", function(e){
		$(this).parent().toggleClass("open");
		$(this).toggleClass("open");
		e.preventDefault();
	})
	$(document).on("click", ".more-photos", function(e){
		/*console.info(e)*/
		if($(".add-photos").css("display") == "none"){
			$(".add-photos").fadeIn();
		}else{
			$(".add-photos").fadeOut();
		}
		$(this).find(".after-angle").toggleClass("open");
		$(this).toggleClass("open");
		e.preventDefault();
	});
	
	/*similar lots - show more*/
	
	$(document).on("click", ".show-more.lot-similar", function(){
		/*до загрузки данных показываем скелет страниицы*/
		
		$(".elements").append('<span id="ajax-loader"><div id="loader"></div></span>' + skelet);
		$(".skelet").animate({"opacity": 0.7}, 1500);
		el = $(this);
		el.attr("data-page", (parseInt(el.attr("data-page")) + 1))
		$.get($(this).data("url"), {"pages": $(this).attr("data-page")}, function(data){
			/*удаляем скелет и ставим на его место контент с данными*/
			$(".skelet, #ajax-loader").remove();
			$(".elements[data-deal='"+el.data("deal")+"']").append(data.content);
			rest = (parseInt(data.total[el.data("deal")]) - (parseInt(el.attr("data-page")) * 8))
			/*заменяем пагинацию на пришедшую*/
			
			if(8 <= rest){
				
				$(".show-more span").html("Еще 8 " + getNumEnding(8, ['лот', 'лота', 'лотов']) + " из " + rest);
			}else{
				if(rest > 0){
					$(".show-more span").html("Еще " + rest + " " + getNumEnding(rest, ['лот', 'лота', 'лотов']) + " из " + rest);
				}else{
					el.hide()
				}
				
			}
			
		}, "json");
	});
	
	/*share button*/
	
	$('.social-toggle').on('click', function() {
		$(this).next().toggleClass('open-menu');
	});

	
	/*$(document).on("click", ".add-photos > div:not(.active), .prew > div:not(.active)", function(){
		if($(this).find(".more-photos").length > 0) return false;
		$(".add-photos > div, .prew > div, .my-gallery figure").removeClass("active");
		$(this).addClass("active");
		$(".my-gallery figure[data='"+$(this).attr("data")+"']").addClass("active");
	});*/
});

