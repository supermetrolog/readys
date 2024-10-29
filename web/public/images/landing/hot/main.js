$(document).ready(function(){
	$(".baner .photo.baner1").css({"height": "80vh"});
	$(".baner .photo.baner2").css({"height": ($(window).height() + 250)});
	//to top
	$().UItoTop({ easingType: 'easeOutQuart' });
	var bb = $(".button-block").offset().top;
	var hh = $("#header").height();
	if(device.mobile()){
		var c = bb;
	}else{
		var c = bb - hh;
	}
	 
	$(document).scroll(function(){
		if($(window).scrollTop() >= c){
			$(".buttons").addClass("fixed");
			$(".lots").css({"margin-top": ($(".buttons").height() + 60)});
			$(".buttons").css({"top":(hh - 1)});
		}else if($(window).scrollTop() < c){
			$(".buttons").removeClass("fixed");
			$(".lots").css({"margin-top": 0});
		}
	});
	$(document).on("click", ".button-block>div.active", function(){
		$(".button-block>div").toggleClass("open");
	});
	$(document).on("click", ".button-block>div:not(.active)", function(){
		el = $(this);
		el.parent().children().removeClass("active open");
		el.addClass("active");
		$(".fade").fadeOut(300, function(){
			$(this).remove();
		})
		$.get("/landing/search/",{price_min: el.attr("price_min"), price_max: el.attr("price_max")},function(data){
			$(".lots").html(data.content)
			$('html, body').stop().animate({scrollTop:($(".anchor").offset().top)}, 500);
		},"json");
	});
});