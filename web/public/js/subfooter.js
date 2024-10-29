$(document).ready(function(){
	$(document).on("click touch", ".sub-footer-blocks .action", function(){
		$(this).prev().toggleClass("open");
		$(this).find("i.fa").toggleClass("fa-angle-down fa-angle-up");
		text = $(this).attr("data");
		$(this).attr("data",$(this).text());
		$(this).children().children("span").html(text);
		$(this).css("left","calc(50% - ("+$(this).width()+"px/2 + 20px))");
	});
	
	/*mobile*/
	$(document).on("click touch", "#subfooter-mobile .tab-mobile", function(){
		$(this).toggleClass("sel");
		$(this).find("i.fa").toggleClass("fa-angle-down fa-angle-up");
		$(this).next().toggleClass("active");
	});
	$(document).on("click touch", ".sub-footer-blocks-mobile .action", function(){
		$(this).prev().toggleClass("open");
		text = $(this).attr("data");
		$(this).find("i.fa").toggleClass("fa-angle-down fa-angle-up");
		$(this).attr("data",$(this).text());
		$(this).children().children("span").html(text);
		$(this).css("left","calc(50% - ("+$(this).width()+"px/2 + 20px))");
	});
	
})