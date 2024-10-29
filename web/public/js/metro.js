var station;
$(document).ready(function(){
    $("#metro_map").yaMetro({
        onStationSelected : function(id, name){
            addSelectCondition("metros", id, name);
            getLots();
        },
        onStationUnselected : function(id){
            removeSelectCondition("metros", id);
            getLots();
        }
    });
});

function init_metro(){
	$(".clear-map").attr("data-type", "metro");
	$(".clear-map span").html("Очистить станции");
}


	
/*function set_metro(){
	$.get("/app_dev.php/getmetrosvg/", {}, function(data){
		for(i in data){
			$(".metro-layer svg g#Layer_2 > g[data-id='"+data[i].metroid+"']").attr("data-cian-id", data[i].cianId);
		}
		for(i in data){
			//console.info(data[i]);
			transfer = $(".metro-layer svg g#Layer_2 > g[data-id='"+ data[i].metroid +"']").attr("data-transfer");
		}
	},"json");
}

function convertTransferInCianid(){
	$(".metro-layer svg g#Layer_2 > g").each(function(){
		if($(this).attr("data-transfer")){
			var el= $(this) 
			$.get("/app_dev.php/converttransferincianid/", {ids: $(this).attr("data-transfer")}, function(data){
				el.attr("data-cian-transfer", data)
			});
		}
	});	
}*/

