var timeChange;
$(document).ready(function(){
	/*показать еще*/
	$(document).on("click touch", ".show-more", function(){
		addLots();
	})
	/*показать после работы с фильтром*/
	$(document).on("click touch", ".show-lots", function(){
		/*$('html, body').stop().animate({scrollTop:($(".elements").offset().top - 100)}, 500);*/
        //location.reload();
	})
	
	/*популярные запросы*/
	$(document).on("click touch", ".popular-filter > div:first-child", function(){
		if($(".ismobile").css("display") == "block"){
			$(".popular-filter").toggleClass("open");
			$(".ismobile").toggleClass("fa-angle-down fa-angle-up");
		}
	});
	
	resizeList();
	$(window).resize(function() {
		resizeList();
	});
	
	/*поиск по большому полю*/
	if ($("input[name='search']").length > 0) {
		el = $("input[name='search']");
		$(document).on("keyup", el, function( event ) {
			if (event.keyCode === $.ui.keyCode.TAB && $(this).autocomplete("instance").menu.active) {
				event.preventDefault();
			}
			clearTimeout(timeChange);
			timeChange = setTimeout(function(){
				if (addlots) {
					$('input[name="pages"]').val(1);
				}
				action = el.data("url");
				$(".elements, .elements-list").before('<div id="ajax-loader"><div id="loader"></div></div>');
				$(".elements, .elements-list").html(skelet);
				$(".skelet").animate({"opacity": 0.7}, 1500);
				$.get(action,
					{
						"search": el.val(),
						"deal_type": $("input[name='deal_type']").val(),
						"pages": $("input[name='pages']").val(),
					},
					function (data) {
						/*удаляем скелет и ставим на его место контент с данными*/
						$(".skelet, #ajax-loader").remove();
						$(".elements, .elements-list").html(data.content);
						text = getNumEnding(data.count, ["предложение", "предложения", "предложений"]);
						$(".show-lots span, .count-lots").html(data.count + " " + text);
						/*заменяем пагинацию на пришедшую*/
						$(".bottom_navigation").html(data.pagination);
					}, 'json');
			}, interval);
		});
	}
	/*if ($("input[name='search']").length > 0){
		el = $("input[name='search']");
		el.bind( "keydown", function( event ) {
				if ( event.keyCode === $.ui.keyCode.TAB && $( this ).autocomplete( "instance" ).menu.active ) {
					event.preventDefault();
				}
			})
			.autocomplete({
				minLength: 2,
				focus: function(){
					return false;
				},
				open: function () { $('ul.ui-autocomplete').addClass('opened') },
				close: function () { 
				    $('ul.ui-autocomplete')
				      .removeClass('opened')
				      .css('display','block')
				      .fadeOut(); 
				},
				source: function (request, response) {
					$.get(el.data("url"), { search: request.term }, function (data) {
						var title_label = "";
						var availableTags = new Array();
						$.each(data, function (index, item) {
							if (title_label != item.type){
								availableTags.push({"label": item.title,"type": item.type, "type_label": "title"});
								title_label = item.type;
							}
							item.name_replace = item.name.replace(new RegExp("^(" + request.term+")",'gi'),"<span class='bold'>$1</span>");
							availableTags.push(item);
						});
						response(availableTags);
					},"json");
				},
				select: function( event, ui ) {
					//$(".select_search").append("<div class='icon-"+ui.item.type+"'>"+ui.item.name+"<input type='hidden' name='selected_type[]' value='"+ui.item.type+"'><input type='hidden' name='selected_name[]' value='"+ui.item.name+"'><input type='hidden' name='selected_value[]' value='"+ui.item.id+"'><span class='close_select'></span></div>");
					if(ui.item.name === undefined){
						return false;
					}
					addSelectCondition(ui.item.type, ui.item.eng, ui.item.name);
					$("input[name='search']").val("");
					getLots();
					
				}
			}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
				if(item.type_label == "title"){
					return $( "<li class='autocomplit-title'></li>" )
						.data( "item.autocomplete", item )
						.append( "<label><span class='icon-"+item.type+"'></span>"+ item.label + "</label>" )
						.appendTo( ul );
				}
				return $( "<li></li>" )
					.data( "item.autocomplete", item )
					.append( "<a>"+ item.name_replace + "</a>" )
					.appendTo( ul );
			};
	}*/
	$(document).on("click touch", ".wrap-select-condition span.icon-clear-search", function(){
		closeSelectCondition($(this).parent());
		getLots();
	});
	$(document).on("click touch", ".mainfilter .wrap-select-condition > div", function(){
		closeSelectCondition($(this));
		getLots();
	});
});

function resizeList(){
	if($(window).width() < 750){
    	$(".complex-list").switchClass("elements-list", "elements line horizontal-left");
    }else{
    	$(".complex-list").switchClass("elements line horizontal-left", "elements-list");
    }
	
}

