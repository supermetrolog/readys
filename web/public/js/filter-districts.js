$(document).ready(function(){
	
	/*select area*/
	$(document).on("click touch", ".areas-search .area", function(){
		if(!$(this).hasClass("active")){
			addSelectCondition("area", $(this).data("area-id"), $(this).data("area-name"));
		}else{
			removeSelectCondition("area", $(this).data("area-id"));
		}
		$(this).toggleClass("active");
		clearTimeout(timeChange);
		timeChange = setTimeout(function(){
			getLots();
		}, 500);
		return false;
	});
    /*select village*/
    $(document).on("click touch", ".areas-search .towns", function(){
        if(!$(this).hasClass("active")){
            addSelectCondition("towns", $(this).data("towns-id"), $(this).data("towns-name"));
        }else{
            removeSelectCondition("towns", $(this).data("towns-id"));
        }
        $(this).toggleClass("active");
        clearTimeout(timeChange);
        timeChange = setTimeout(function(){
            getLots();
        }, 500);
        return false;
    });
    /*select highway*/
    $(document).on("click touch", ".areas-search .highway", function(){
        if(!$(this).hasClass("active")){
            addSelectCondition("highway", $(this).data("highway-id"), $(this).data("highway-name"));
        }else{
            removeSelectCondition("highway", $(this).data("highway-id"));
        }
        $(this).toggleClass("active");
        clearTimeout(timeChange);
        timeChange = setTimeout(function(){
            getLots();
        }, 500);
        return false;
    });
	/*select district*/
	$(document).on("click touch", ".areas-search .areas .el .district", function(e){
		
		/*Смотрим сколько районов в этом округе*/
		/*если все районы уже выбраны удаляем их*/
		if($(".areas-search .area[data-district-id='"+$(this).data("id")+"']").length == $(".areas-search .area.active[data-district-id='"+$(this).data("id")+"']").length){
			$(".areas-search .area.active[data-district-id='"+$(this).data("id")+"']").each(function(){
				removeSelectCondition("area", $(this).data("area-id"));
				$(this).removeClass("active");
			});
		}else{ /*иначе выбираем все неактивные районы в этом округе*/
			$(".areas-search .area:not(.active)[data-district-id='"+$(this).data("id")+"']").each(function(){
				$(this).addClass("active");
				addSelectCondition("area", $(this).data("area-id"), $(this).data("area-name"));
			});
		}
		
		clearTimeout(timeChange);
		timeChange = setTimeout(function(){
			getLots();
		}, 500);
	});
	
});

function init_areas(){
	$(".clear-map").attr("data-type", "districts");
	$(".clear-map span").html("Очистить районы");
}
function init_highway(){
    $(".clear-map").attr("data-type", "highway");
    $(".clear-map span").html("Очистить шоссе");
}
function init_city(){
    $(".clear-map").attr("data-type", "city");
    $(".clear-map span").html("Очистить посёлки");
}