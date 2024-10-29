$(document).ready(function(){
	/*fixed menu*/
	
	$(window).scroll(function(event){
		var st = $(this).scrollTop();
		if (st > lastScrollTop){
			// downscroll code
			if($(".fixed_block").length > 0){
				$(".fixed_block").css("top", $(".fixed_block").height() * -1);
			}
			if(device.mobile()){
				$(".fixed-bottom").css("bottom", 0);
			}
		} else {
			// upscroll code
			if(st > ($("#topmenu").height()+$("#topmenu").offset().top)){
				$(".fixed_block").css("top", 0);
			}else{
				$(".fixed_block").css("top", $(".fixed_block").height() * -1);
			}
			if(device.mobile()){
				$(".fixed-bottom").css("bottom", $(".fixed-bottom").height() * -1);
			}
		}
		lastScrollTop = st;
	});
	$(document).on("click", ".menu-burger", function(){
		$(".fixed-active-dropdown").toggleClass("notactive");
	});
	$(document).on("click", ".go-top", function(){
		$('html,body').animate({ scrollTop: 0 },1100);
	});

});