var map;
var addlots = false;
function addLots(){
	/*до загрузки данных показываем скелет страниицы*/
	
	$(".elements, .elements-list").append('<span id="ajax-loader"><div id="loader"></div></span>' + skelet);
	$(".skelet").animate({"opacity": 0.7}, 1500);
	$('input[name="pages"]').val(parseInt($('input[name="pages"]').val())+1);
	addlots = true;
	
	//mobile or desctop
	var action = $(".desctop-filter .filter form").data("action");
	var form = $(".desctop-filter .filter form").serialize();
	if($(".desctop-filter:hidden").length){
		var action = $(".mobile-filter .filter form").data("action");
		var form = $(".mobile-filter .filter form").serialize();
	}
	$.get(action, form, function(data){
		/*удаляем скелет и ставим на его место контент с данными*/
		$(".skelet, #ajax-loader").remove();
		$(".elements, .elements-list").append(data.content);
		
		/*заменяем пагинацию на пришедшую*/
		$(".bottom_navigation").html(data.pagination);
		
	}, 'json');
}

function getLots(){
	/*до загрузки данным показываем скелет страниицы*/
	if(section != undefined && section == "index"){
		return false;
	}
	if($(".elements, .elements-list").length == 0) return false;
	$(".elements, .elements-list").before('<div id="ajax-loader"><div id="loader"></div></div>');
	$(".elements, .elements-list").html(skelet);
	$(".skelet").animate({"opacity": 0.7}, 1500);
	if (addlots){
		$('input[name="pages"]').val(1);
	}
	//mobile or desctop
	/*changeUrl($(".desctop-filter .filter form :input[value!='']"));*/
	var action = $(".desctop-filter .filter form").data("action");
	var form = $(".desctop-filter .filter form").serialize();
	if($(".desctop-filter:hidden").length){
		var action = $(".mobile-filter .filter form").data("action");
		var form = $(".mobile-filter .filter form").serialize();
		/*changeUrl($(".mobile-filter .filter form :input[value!='']"));*/
	}
	$(".search-modal .footer").addClass("visible");
	$.get(action, form, function(data){
		/*удаляем скелет и ставим на его место контент с данными*/
		$(".skelet, #ajax-loader").remove();
		$(".elements, .elements-list").html(data.content);
		text = getNumEnding(data.count, ["предложение", "предложения", "предложений"]);
		if(section == "jk"){
			text = getNumEnding(data.count, ['жилой комплекс', 'жилых комплекса', 'жилых комплексов']);
		}
		$(".show-lots span, .count-lots").html(data.count + " " + text);
		/*заменяем пагинацию на пришедшую*/
		$(".bottom_navigation").html(data.pagination);
	}, 'json');
	countSelectFilter();
}
function countSelectFilter(){
	count = (parseInt(
			$(".mobile-filter .filter form :input[value!=''][name!='deal'][name!='pages'][name!='sort'][name!='type_square'][name!='radius'][name!='overlay'][name!='center'][name!='zoom']").length)
				-
			parseInt($(".mobile-filter .filter form select[name='repairId'] option[value='']:selected").length));
	$(".mobile-refine .count").html("<span>"+count+"</span>");
	if(count > 0){
		$(".mobile-refine .count").fadeIn();
	}else{
		$(".mobile-refine .count").fadeOut();
	}
}
function changeUrl(form) {
    var url = "";
    /*
    *1 level
    *Назначение помещения
    * */
    var el = $(".type-industry-list .list-item.active");
    if (el.length == 1) {
        url = base_url + el.data("url") + "/";
        history.pushState("", "", url);
    } else {
        url = base_url + $("input[name='deal']").val() + "/";
        history.pushState("", "", url)
        return false;
    }
    /*
    *2 level
    *
    */
    /*direction/district*/
    if($(".direction-buttons .button.active").length == 1){
        /*если выбрана только москва*/
        if($(".select-region-list .list-item.active").length == 1 && $(".select-region-list .list-item.active").data("value") == 1){
            url += $(".direction-buttons .button.active").data("url1") + "/";
            history.pushState("", "", url);
        }else{
            url += $(".direction-buttons .button.active").data("url2") + "/";
            history.pushState("", "", url);
        }
    /*если направление*/
    }else if($(".modal-type-search .highway.active, .modal-type-search .city.active").length == 1){
        url += $(".modal-type-search .highway.active, .modal-type-search .city.active").data("url") + "/";
        history.pushState("", "", url);
    /*region*/
    }else if($(".select-region-list .list-item.active").length == 1 && [1,2].indexOf($(".select-region-list .list-item.active").data("value")) >= 0){
        url += $(".select-region-list .list-item.active").data("url") + "/";
        history.pushState("", "", url);
    }else {
        /*history.pushState("", "", "?"+form.serialize());*/
        return false;
    }
    /*3 level*/
    var el = $(".wrap-filter .button-block[data-name='object_class[]'] .active, .wrap-filter .button-block[data-name='gate_type[]'] .active, .wrap-filter .button-block[data-name='heated[]'] .active, .wrap-filter .slide[data-name='telphers'].active, .wrap-filter .slide[data-name='railway'].active");
    if(el.length == 1){
        url += el.data("url") + "/";
        history.pushState("", "", url);
    }
	/*history.pushState("", "", "?"+form.serialize())*/;
}

function addSelectCondition(data_name, data_value, data_title){
	var form = $(".filter form");
	if(data_name != "circle" && data_name != "polygon"){
		form.append("<input type='hidden' name='"+data_name+"[]' value='"+data_value+"'>");
	}
	
	$(".wrap-select-condition").append("<div style='display:none' data-name='"+data_name+"' data-value='"+data_value+"'><span class='first-span icon-"+data_name+"'></span>"+data_title+"<span class='icon-clear-search'></span></div>");
	$(".wrap-select-condition div[data-name='"+data_name+"'][data-value='"+data_value+"']").fadeIn(500);
	hideInMobileSelectCondition();
}
function removeSelectCondition(data_name, data_value){
	$("input[name='"+data_name+"[]'][value='"+data_value+"']").remove();
	$(".wrap-select-condition div[data-name='"+data_name+"'][data-value='"+data_value+"']").remove();
	hideInMobileSelectCondition();
}
function removeAllGroupSelectCondition(data_name, data_value){
	$("input[name='"+data_name+"[]']").remove();
	$(".wrap-select-condition div[data-name='"+data_name+"']").remove();
	hideInMobileSelectCondition();
}

function hideInMobileSelectCondition(){
	$(".mobile-filter .select-filter .wrap-select-condition > div.more-conditions").remove();
	if($(".mobile-filter .select-filter .wrap-select-condition > div").length > 3){
		if($(".mobile-filter .select-filter .wrap-select-condition > div.more-conditions").length == 0){
			$(".mobile-filter .select-filter .wrap-select-condition > div:nth-child(3)").after("<div class='more-conditions'>Еще "+($(".mobile-filter .select-filter .wrap-select-condition > div").length - 3)+" <span class='fa fa-angle-down'></span></div>");
		}
	}

	$(".desctop-filter .select-filter .wrap-select-condition > div.more-conditions").remove();
	if($(".desctop-filter .select-filter .wrap-select-condition > div").length > 3){
		if($(".desctop-filter .select-filter .wrap-select-condition > div.more-conditions").length == 0){
			$(".desctop-filter .select-filter .wrap-select-condition > div:nth-child(3)").after("<div class='more-conditions'>Еще "+($(".desctop-filter .select-filter .wrap-select-condition > div").length - 3)+" <span class='fa fa-angle-down'></span></div>");
		}
	}
}

function removeFav(el){
	if(el.hasClass("inFav")){
		el.removeClass("inFav");
		el.addClass("fav");
	}
	favType = el.attr('data_type');
	favDeal = el.attr('data_deal');
	favID = el.attr('data');
	if(getCookie(favType + '_' + favDeal) != undefined){
		if($.inArray(favID.toString(), $.parseJSON(getCookie(favType + '_' + favDeal))) != -1){
			c = $.parseJSON(getCookie(favType + '_' + favDeal));
			c.splice( $.inArray(favID.toString(), c), 1 );
			setCookie(favType + '_' + favDeal, JSON.stringify(c), { expires: 60 * 60 * 24 * 30 , path: "/"});
		}
	}
	getFav();
}
function addFav(el){
	if(el.hasClass("fav")){
		el.removeClass("fav");
		el.addClass("inFav");
	}
	favType = el.attr('data_type');
	favDeal = el.attr('data_deal');
	favID = el.attr('data');
	if(getCookie(favType + '_' + favDeal) != undefined){
		if($.inArray(favID.toString(), $.parseJSON(getCookie(favType + '_' + favDeal))) == -1){
			c = $.parseJSON(getCookie(favType + '_' + favDeal));
			c.push(favID);
			setCookie(favType + '_' + favDeal, JSON.stringify(c), { expires: 60 * 60 * 24 * 30 , path: "/"});
		}
	}else{
		setCookie(favType + '_' + favDeal, JSON.stringify([favID]), { expires: 60 * 60 * 24 * 30 , path: "/"});
	}
	getFav();
}
function getFav(){
	var cnt = 0;
	if(getCookie('flat_sale') != undefined){
		cnt += $.parseJSON(getCookie('flat_sale')).length;
	}
	if(getCookie('flat_rent') != undefined){
		cnt += $.parseJSON(getCookie('flat_rent')).length;
	}
	if(getCookie('jk') != undefined){
		cnt += $.parseJSON(getCookie('jk')).length;
	}
	$(".countFavorites").html(cnt);
}

function getCookie(name, defin) {
	var matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : defin ? defin:undefined;
}
function setCookie(name, value, options) {
	  options = options || {};

	  var expires = options.expires;

	  if (typeof expires == "number" && expires) {
	    var d = new Date();
	    d.setTime(d.getTime() + expires * 1000);
	    expires = options.expires = d;
	  }
	  if (expires && expires.toUTCString) {
	    options.expires = expires.toUTCString();
	  }

	  value = encodeURIComponent(value);

	  var updatedCookie = name + "=" + value;

	  for (var propName in options) {
	    updatedCookie += "; " + propName;
	    var propValue = options[propName];
	    if (propValue !== true) {
	      updatedCookie += "=" + propValue;
	    }
	  }

	  document.cookie = updatedCookie;
	}
		function deleteCookie(name) {
		  setCookie(name, "", {
		    expires: -1
		  })
}
function init_map(lat, lng, minZoom, maxZoom, zoom, styles, scrollwheel, callback){
	var mapOptions = {
			zoom: zoom,
			minZoom: minZoom,
			maxZoom: maxZoom,
			center: new google.maps.LatLng(lat, lng),
			scrollwheel:scrollwheel,
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
			styles: styles,
			streetViewControl: true,
			streetViewControlOptions: {
		        position: google.maps.ControlPosition.RIGHT_BOTTOM
		    }
		    
	};
	map = new google.maps.Map(document.getElementById("map"), mapOptions);
	panorama = map.getStreetView();
	panorama.setOptions({addressControlOptions: {position: google.maps.ControlPosition.RIGHT_CENTER}});
	if($("#empty_button").length > 0){
		var empty_element = document.getElementById('empty_button');
		map.controls[google.maps.ControlPosition.TOP_RIGHT].push(empty_element);
	}
	if(callback){
		callback();
	}
}


function initPano(lat, lng) {
	//create a google latLng object
	var whereToLookLatLng = new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
	var service = new google.maps.StreetViewService;
  /*сервис который указывает панораме что нужно смотреть в сторону координат*/
  //With this function I get the panorama, if available, next the house or fisical element where I want to point the view 
  service.getPanoramaByLocation(whereToLookLatLng, 50, 
	   function(panoData, status) {
	       if (panoData != null) {
	    	   var panorama = new google.maps.StreetViewPanorama(
					      document.getElementById('panorama'), {
					        position: {lat: lat, lng: lng},
					        addressControl: false,
					        linksControl: false,
					        panControl: false,
					        enableCloseButton: false
					      });
	           // MamLatLng is the position of the point of view
	           var ManLatLng = panoData.location.latLng;
	           // Now I calculate the heading to point the view in the direction of whereToLookLatLng
	           var heading = google.maps.geometry.spherical.computeHeading(ManLatLng, whereToLookLatLng);
	           var pov = panorama.getPov();
	           pov.heading = heading;
	           panorama.setPov(pov);
	       }else{
	    	   $("#panorama").html("<div class='success-request'>К сожалению, для это объекта панорама отсутствует</div>");
	       }
	   });
}

function changePrice(){
	var deal;
	if (typeof max_price != "object") {
		return false;
	}
	if($(".button-block[data-name='type-deal'] div.active").length > 0){
		deal = $(".button-block[data-name='type-deal'] div.active").attr('data-value');
	}else{
		deal = $("input[name='deal']").val();
	}
	if(max_price){
		$("input[name='price_max']").attr("placeholder", number_format(parseInt(max_price[deal][getCookie('currency', 'rub')]), 0, ' ', ' '));
	}
	if(min_price){
		$("input[name='price_min']").attr("placeholder", number_format(parseInt(min_price[deal][getCookie('currency', 'rub')]), 0, ' ', ' '));
	}
	$("input[name='price_min']").val("");
	$("input[name='price_max']").val("");
	$("input[name='price_min'],input[name='price_max']").change();
}

function replaceWidthPhoto(){
	if($("img.lot-photo").length > 0){
		$("img.lot-photo").each(function(){
			var width = Math.round($(this).parent().width());
			replaceWidthPhotoOperation($(this), width);
		})
	}
	if($("img.lot-photo-gallery").length > 0){
		$("img.lot-photo-gallery").each(function(){
			var width = Math.round($("figure.active").width());
			replaceWidthPhotoOperation($(this), width);
		})
	}
	if($("img.lot-photo-gallery-prew").length > 0){
		$("img.lot-photo-gallery-prew").each(function(){
			var width = Math.round($("div.prew figure:first-child").width());
			replaceWidthPhotoOperation($(this), width);
		})
	}
}

function closeSelectCondition(el){
	if(el.hasClass("clear-all") || el.hasClass("more-conditions")){
		return false;
	}
	var name = el.attr("data-name");
	var val = el.attr("data-value");
	switch(name){
		case "polygon":
		case "circle":
			map_polygon_restart("polygon");
			break;
		case "metros":
			$(".metro-layer svg g#Layer_2 > g[data-id='"+ val +"']").removeClass();
			$("input[name='"+name+"[]'][value='"+val+"']").remove();
			break;
        case "towns":
        case "highways":
		case "districts":
		case "districts_moscow":
		case "highways_moscow":
            $(".areas-search ." + name + "[data-" + name + "-id='" + val + "']").toggleClass("active");
            $("input[name='"+name+"[]'][value='"+val+"']").remove();
            break;
		default:
			$("input[name='"+name+"[]'][value='"+val+"']").remove();
			break;
	}
	$(".wrap-select-condition > div[data-name='" + name + "'][data-value='" + val + "']").fadeOut(500,function(){
		$(".wrap-select-condition > div[data-name='" + name + "'][data-value='" + val + "']").remove();
		/*если это последний блок, и фильтр стоит в положении скрыть поиск*/

	});
}


function replaceWidthPhotoOperation(el, width){
	var reg = new RegExp("/"+el.attr('data-size')+"/([^\./]+\.jpg)");
	el.attr("src", el.attr('src').replace(reg, "/"+width+"/$1"));
	el.attr("data-size", width);
}

function selectTab(tab){
	tab_parents = tab.parent().parent(); 
	tab_parents.children().removeClass("a b c d");
	tab_parents.children().addClass(tab.attr("data"));
	tab.parent().children().removeClass("active");
	tab.addClass("active");
	$("div."+tab.parent().attr("data-general")).hide();
	$("div."+tab.attr("data")).fadeIn(300);
}
$.fn.exists = function(callback) {
	var args = [].slice.call(arguments, 1);
	if (this.length) {
		callback.call(this, args);
	}
	return this;
};
function selectTabAnchor(tab){
	tab_parents = tab.parent().parent(); 
	tab_parents.children().removeClass("a b c d e");
	tab_parents.children().addClass(tab.attr("data"));
	tab.parent().children().removeClass("active");
	tab.addClass("active");
}
$.fn.exists = function(callback) {
	var args = [].slice.call(arguments, 1);
	if (this.length) {
		callback.call(this, args);
	}
	return this;
};

//Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний
//@param  iNumber Integer Число на основе которого нужно сформировать окончание
//@param  aEndings Array Массив слов или окончаний для чисел (1, 4, 5),
//      например ['яблоко', 'яблока', 'яблок']
function getNumEnding(iNumber, aEndings){
	var sEnding, i;
	iNumber = iNumber % 100;
	if (iNumber>=11 && iNumber<=19) {
	    sEnding=aEndings[2];
	}else {
	    i = iNumber % 10;
	    switch (i)
	    {
	        case (1): sEnding = aEndings[0]; break;
	        case (2):
	        case (3):
	        case (4): sEnding = aEndings[1]; break;
	        default: sEnding = aEndings[2];
	    }
	}
	return sEnding;
}

function number_format( number, decimals, dec_point, thousands_sep ) {	// Format a number with grouped thousands
	// 
	// +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
	// +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	// +	 bugfix by: Michael White (http://crestidg.com)

	var i, j, kw, kd, km;

	// input sanitation & defaults
	if( isNaN(decimals = Math.abs(decimals)) ){
		decimals = 2;
	}
	if( dec_point == undefined ){
		dec_point = ",";
	}
	if( thousands_sep == undefined ){
		thousands_sep = ".";
	}

	i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

	if( (j = i.length) > 3 ){
		j = j % 3;
	} else{
		j = 0;
	}

	km = (j ? i.substr(0, j) + thousands_sep : "");
	kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
	//kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
	kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


	return km + kw + kd;
}
function init_map_yandex(lat, lng, minZoom, maxZoom, zoom, styles, scrollwheel, callback, marker){
	var mapOptions = {
		center: [lat, lng],
		zoom: zoom,
		/*controls: ['smallMapDefaultSet']*/
	};
	var myMap = new ymaps.Map("map", mapOptions);
	if(marker){
		var myPlacemark = new ymaps.Placemark([lat, lng], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/public/images/ico/lot-marker.svg',
			iconImageSize: [60, 60],
			iconImageOffset: [-30, -60]
		});
		myMap.geoObjects
			.add(myPlacemark);
	}
}


