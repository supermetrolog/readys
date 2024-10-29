var lastScrollTop = 0;
$(document).ready(function(){
	
	/*mobile menu*/
	$(document).on("click touch", ".header-mobile .submenu > a", function(){
		$(this).parent().toggleClass("active");
		$(this).find("i.fa-angle-down, i.fa-angle-up").toggleClass("fa-angle-down fa-angle-up");
		return false;
	});
	$(document).on("click touch", ".header-mobile .sandwich svg", function(){
		$(".topmenu.header-mobile").toggleClass("active");
		return false;
	});
    new svgIcon( document.querySelector( '.header-mobile .si-icon-hamburger-cross' ), svgIconConfig, { easing : mina.elastic, speed: 600 } );
	$(document).on("click touch", ".mobile-phone", function(){
		$(this).find(".phone-iconblock .fa-angle").toggleClass("fa-angle-down fa-angle-up");
		$(".header-mobile .wrap-phone-block").toggleClass("open");
		return false;
	});
	
	$(document).on("click touch", ".sandwich-desctop", function(){
		$(".active-dropdown").toggleClass("active");
		return false;
	});
	
	
	var oldScroll = 0;
	var elTop = parseFloat($(".nav-mobile").css("top"));
	var elfix = $(".nav-mobile");
	if($(".header-mobile").css("display") == "block"){
		$(window).scroll(function () {
		    if($(".topmenu.header-mobile").hasClass("active") ||
                $(".wrap-phone-block").hasClass("open")){
		        return false;
            }
			var currentScroll = $(window).scrollTop();
			var delta = oldScroll - currentScroll;
			var heightTop = elfix.height();
			if(currentScroll <= (elTop)){
				if($(elfix).hasClass("animate")){
					$(elfix).removeClass("animate");
				}
				if (oldScroll > currentScroll){
					elfix.css({position: "absolute", top: elTop});
				}else{
					
					
				}
			}else if(currentScroll > elTop){
				elfix.css({top: 0, position: "fixed"});
				
				var currentTop = parseFloat($(".nav-mobile").css("top"));
				if(!$(elfix).hasClass("animate")){
					$(elfix).addClass("animate");
				}
				/*------------------------------------------------------------*/
				if (oldScroll > currentScroll){
					/*if (currentTop + delta < 0){
						elfix.css({"top":currentTop + delta});
					}else{
						elfix.css({top:0});
					}*/
					elfix.css({top:0});
				}
				else{
					/*if (currentTop > -1 * heightTop){
						var res = currentTop + delta;
						if(currentTop > 0){
							res = 0 + delta;
						}
						elfix.css({"top":res});
					}else{
						elfix.css({top:(-1 * heightTop)});
					}*/
					elfix.css({top:(-1 * heightTop)});
				}
				/*------------------------------------------------------------*/
			}else{
				
			}
			oldScroll = currentScroll;
		});
	}
	
	/*price format*/
	$("input[name='price_min'], input[name='price_max'], input[name='my_price'], input[name='price']").mask('000 000 000 000 000', {reverse: true});
	
	//tab
	$(".tab > div > div").on("click touch", function(){
		selectTab($(this))
	});
	
	//tab-anchor
	$(".tab-anchor > div > a").on("click touch", function(){
		selectTabAnchor($(this))
	});
	
	//hover menu
	$(".dpmenu").on("mouseover", ".submenu", function(){
		$(this).children("ul.sub").show();
		return false;
	});
	$(".dpmenu").on("mouseout", ".submenu", function(){
		$(this).children("ul.sub").hide()
		return false;
	});
	
	//favorites
	getFav();
	$(document).on("click touch", ".fav", function(){
		addFav($(this));
	});
	$(document).on("click touch", ".inFav", function(){
		removeFav($(this));
	});
	
	$(document).on("click touch", ".tabs > div", function(){
		tab_parents = $(this).parent(); 
		tab_parents.removeClass("sale rent");
		tab_parents.addClass($(this).attr("data"));
		tab_parents.children().removeClass("active");
		$(this).addClass("active");
		$("div."+tab_parents.attr("data-general")).hide();
		$("div."+$(this).attr("data")).fadeIn(300);
	});
	
	$("input[name='phone']").inputmask("+7 (999) 999-99-99");
	
	if($(".direct_tabs").length > 0){
		$(document).on("click touch", ".direct_tabs a", function(){
			$(".direct_tabs a").removeClass('sel');
			$(this).addClass('sel');
			$(".sub-footer-blocks").fadeOut();
			$(".sub-footer-blocks[data='"+$(this).attr('data')+"']").fadeIn();
			return false;
		});
	}
	/*photo quality*/
	replaceWidthPhoto();
	$(window).resize(function(){
		replaceWidthPhoto();
	});
	//get sub footer blocks
	if($("#subfooter").length > 0){
		$.get($('#subfooter').data('url'),{}, function(data){
			numb_of_box = 0;
			if($(".sub-footer-block .result.open").length > 0){
				numb_of_box = $(".sub-footer-block .result.open").attr("data");
			}
			$("#subfooter").html(data.content);
			$("#subfooter-mobile").html(data.mobile_content);
			$(".sub-footer-block .result[data='"+numb_of_box+"']").addClass("open");
		},"json");
	}	
	//get popular searches block
	if($("#popularSearches").length > 0){
		$.get($("#popularSearches").data('route'),{}, function(data){
			$("#popularSearches").html(data.content);
		},"json");
	}		
	
});