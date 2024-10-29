var timeChange;
var interval = 1000;
$(document).ready(function(){
	countSelectFilter();
	$(document).on("keyup",
			"input[name='price_min']," +
			"input[name='price_max']," +
			"input[name='area_min']," +
			"input[name='area_max'], " +
			"input[name='rooms']," +
			"input[name='from_mkad_min']," +
			"input[name='from_mkad_max']," +
			"input[name='ceiling_height_min']," +
			"input[name='ceiling_height_max']," +
			"input[name='floor']",
			function(e){
		if (e.keyCode < 48 && e.keyCode !=8 && e.keyCode !=46) return false;
		if (e.keyCode > 57 && e.keyCode < 96) return false;
		if (e.keyCode > 105) return false;
		clearTimeout(timeChange);
		timeChange = setTimeout(function(){
			getLots();
		}, interval);
	});
	
	$(document).on("change", ".filter select", function(){
		getLots();
	});
	
	/*show all filter*/
	$(document).on("click touch", ".more-option", function(){
		$(".wrap-filter, .more-option").toggleClass("open");
		data_txt = $(".more-option").attr("data-txt");
		$(".more-option").attr("data-txt",$(".more-option").text());
		$(".more-option span").html(data_txt);
	});
	
	if(action !== undefined && 
			(action == "catalog" ||
					action == "catalog") &&
			window.location.hash.substr(1) == "filter"){
		if($(".mobile-refine").css("display") == "none"){
			$(".filter .more-option").click();
		}else{
			$(".mobile-filter-wrap").toggleClass("md-show");
		}
		
		
	}
	hideInMobileSelectCondition();
	/*show/hide mobile filter*/
	$(document).on("click touch", ".mobile-refine, .filter-header .icon-clear-search, .filter-bottom .show-lots", function(){
		$(".wrap-desctop-filter").toggleClass("md-show");
		
	});
	/*more select conditions*/
	$(document).on("click touch", ".wrap-select-condition > div.more-conditions", function(){
		$(".wrap-select-condition > div.more-conditions").toggleClass("visible");
		$(".wrap-select-condition > div.more-conditions span").toggleClass("fa-angle-down fa-angle-up");
	});

	/*$(document).on("click touch", ".direction-buttons .button", function (){
		$(this).toggleClass("active");
		if($(this).hasClass("active")){
            $(".wrap-filter form").append("<input type='hidden' name='"+$(this).data("name")+"[]' value='"+$(this).data("value")+"'>");
        }else{
            $("input[name='"+$(this).data("name")+"[]'][value='"+$(this).data("value")+"']").remove();
        }
        getLots();
    });*/
	
	
	/*sort*/

	$(".wrap").on("click touch", ".sort", function(){
		$(this).toggleClass("desc")
		$(".sort").removeClass("active")
		$(this).addClass("active")
		$(this).attr("data-value", ($(this).attr("data-value")=="down" ? "up" : "down"));
		$("input[name='sort']").val($(this).attr("data")+"_"+$(this).attr("data-value"));
		$(this).find(".fa").toggleClass("fa-sort-amount-desc fa-sort-amount-asc");
		getLots();
	});

	/*$(document).on("change", ".sort-line-mobile select[name='sort']", function(){
		$("input[name='sort']").val($(this).val());
		getLots();
	});*/
	
	/*filter buttons click*/
	$(document).on("click touch", ".button-block:not(.multi-button) div.button", function(){
		input_name = $(this).parent().attr("data-name");
		$(this).parent().children().removeClass("active");
		$(this).addClass("active");
		switch(input_name){
			case 'type-deal':
				$(".wrap-button-block-list").removeClass("show");
				var area_min = $("input[name='area_min']");
				var area_max = $("input[name='area_max']");
				var price_min = $("input[name='price_min']");
				var price_max = $("input[name='price_max']");
				switch($(this).data('link')){
					case "sale":
						$(".for-otvetstvennoe-hranenie, .for-rent").addClass("not-active");
						$(".for-sale").removeClass("not-active");
						area_min.attr("placeholder", "500 м");
						area_max.attr("placeholder", "1000 м");
						price_min.attr("placeholder", "1000 р");
						price_max.attr("placeholder", "20 000 р");
						$('input[name="price_format"]').val(4)
						break;
					case "rent":
						$(".for-otvetstvennoe-hranenie, .for-sale").addClass("not-active");
						$(".for-rent").removeClass("not-active");
						area_min.attr("placeholder", "500 м2");
						area_max.attr("placeholder", "1000 м2");
						price_min.attr("placeholder", "1000 р");
						price_max.attr("placeholder", "20 000 р");
						$('input[name="price_format"]').val(1)
						break;
					case "otvetstvennoe-hranenie":
						$(".for-rent, .for-sale").addClass("not-active");
						$(".for-otvetstvennoe-hranenie").removeClass("not-active");
						price_min.attr("placeholder", "500 п.м");
						price_max.attr("placeholder", "400 000 п.м");
						$('input[name="price_format"]').val(7)
						break;
				}
				break;
			case 'map-type':
				map_polygon_restart($(this).attr('data-value'));
				break;
			case 'metro-dialog':
				return false;
				break;
				
		}
		if($(this).data("tab")){
			$("."+$(this).data("tab")).toggleClass("show");
		}
		if($("input[name='"+input_name+"']").length > 0){
			$("input[name='"+input_name+"']").val($(this).attr("data-value"));
		}
		getLots();
	});
	
	$(document).on("click touch", ".multi-button div.button", function() {
        var input_name = $(this).parent().attr("data-name");
        var input = $("input[name='"+input_name+"'][value='"+$(this).attr("data-value")+"']");
        $(this).toggleClass("active");
        switch (input_name) {
			default:
				if(input.length > 0){
					input.remove();
				}else{
					$(".wrap-filter form").append("<input type='hidden' name='"+input_name+"' value='"+$(this).attr("data-value")+"'>");
				}
				break;
		}
		if($(this).data('value') === 'all'){
			if($(this).hasClass("active")){
				$(this).parent().find("div.button").addClass("active")
			}else{
				$(this).parent().find("div.button").removeClass("active")
			}
		}
		if($(this).data("tab")){
			$("."+$(this).data("tab")).toggleClass("show");
		}
        getLots();
    });
	
	/*$(document).on("click touch", ".triangle-resize div.button", function(){
		$(".triangle-resize div.button").each(function(){
			$(".triangle").removeClass($(this).data("triangle-position"));
		});
		
		$(".triangle").addClass($(this).data("triangle-position"));
	});*/

	/*show/hide filter block*/
	$(".wrap").on("click touch", "div.refine", function(){
		$(".wrap.desctop-filter").toggleClass("close");
		/*$(".more-option").toggleClass("close");*/
		txt = $(this).attr("data-txt");
		old_txt = $(this).attr("data-txt2");
		$(this).toggleClass("open");
		$(this).find("span").html(txt);
		$(this).attr("data-txt", old_txt);
		$(this).attr("data-txt2", txt);
	});
	
	
	//filter slide click
	$(".slide").exists(function(){
		$(".slide").parent().click(function(){
			if ($(this).find(".slide").hasClass("active")){
				$(this).find(".slide").removeClass("active");
				$(this).find(".slide").next("input[name='"+$(this).find(".slide").attr("data-name")+"']").remove();
			}else{
				$(this).find(".slide").addClass("active");
				$(this).find(".slide").after("<input type='hidden' name='"+$(this).find(".slide").attr("data-name")+"' value='1'>");
			}
			if ($(this).hasClass("slide_head")){
				$(this).toggleClass("active");
				if (!$(this).hasClass("active")){
					$(this).parent().next().find(".slide").removeClass("active");
					$(this).parent().next().find(".slide_head").removeClass("active");
					$(this).next().find("input[name='"+$(this).attr("data-name")+"']").remove();
				}else{
					$(this).parent().next().find(".slide").addClass("active");
					$(this).parent().next().find(".slide_head").addClass("active");
					$(this).after("<input type='hidden' name='"+$(this).attr("data-name")+"' value='1'>");
				}
			}
			if($(".filter form").length > 0){
				getLots();
			}
			if($(this).hasClass("slide-empty")){
				$(".order .form-object-check").removeClass("slide-empty");
			}
		});
	});
	
	//click other type search
	$(document).on("click touch", ".type-search a", function(){

		switch($(this).data("type")){
			case "map":
				$(".modal-wrap.search-modal").addClass("md-show");
				selectTab($(".tab > div[data-general='modal-type-search'] > div[data='a']"));
				init_polygon();
				break;
			case "metro":
				$(".modal-wrap.search-modal").addClass("md-show");
				selectTab($(".tab > div[data-general='modal-type-search'] > div[data='b']"));
				$(".clear-map").attr("data-type", "metro");
				$(".clear-map span").html("Очистить станции");
				if($(window).width() <= 1100){
					initZoomSVG();
				}
				break;
			case "areas":
				$(".modal-wrap.search-modal").addClass("md-show");
				selectTab($(".tab > div[data-general='modal-type-search'] > div[data='c']"));
				init_areas();
				break;
			case "highway":
				$(".modal-wrap.search-modal").addClass("md-show");
				selectTab($(".tab > div[data-general='modal-type-search'] > div[data='f']"));
				init_highway();
				break;
			case "towns":
				$(".modal-wrap.search-modal").addClass("md-show");
				selectTab($(".tab > div[data-general='modal-type-search'] > div[data='d']"));
				init_city();
				break;
		}
		return false;
	});
    /*очистить границы/метро/районы*/
	$(document).on("click touch", ".clear-map", function(){
		switch($(this).attr("data-type")){
			case "polygon":
				$(".wrap-select-condition div[data-name='circle']").fadeOut(500,function(){
					$(this).remove();
				});
				$(".wrap-select-condition div[data-name='polygon']").fadeOut(500,function(){
					$(this).remove();
				});
				map_polygon_restart($(".button-block[data-name='map-type'] div.button.active").attr('data-value'), getLots);
				break;
			case "metro":
				$("input[name='metros']").remove();
				$(".wrap-select-condition div[data-name='metros']").remove();
				$("svg g").removeClass("active");
				getLots();
				break;
			case "districts":
				$(".wrap-select-condition div[data-name='area']").fadeOut(500,function(){
					$(this).remove();
				});
				$(".wrap-filter form input[name='area[]']").each(function(){
					$(this).remove();
				});
				$(".areas-search .area").removeClass("active");
				break;
		}
	});
	
});