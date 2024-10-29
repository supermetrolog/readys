$(document).ready(function(){
	if($(".order .dialog_input input[name='name']").val()){
		editInputDialog($(".order .dialog_input input[name='name']"), true);
	}
	if($(".order .dialog_input input[name='phone']").val()){
		editInputDialog($(".order .dialog_input input[name='phone']"), true);
	}
	if($(".order .dialog_input input[name='email']").val()){
		editInputDialog($(".order .dialog_input input[name='email']"), true);
	}
	$(".order .send").click(function(){
		/*if($(".order .slide").length > 0){
			if($(".order .slide.active").length == 0){
				$(".order .form-object-check").addClass("slide-empty");
				return false;
			}
		}*/
		if ($(this).attr("data-access")=="true"){
			$(".order").fadeOut(300);
			var object = $(this).parents(".order").find("form");
			$.get("/order/send",$(this).parents(".order").find("form").serialize(),function(data){
				$(".order-success").fadeIn();
				window.yaCounter40269164.reachGoal(object.find("input[name='reachGoal']").val());
				ga('send', 'event', 'Form', object.find("input[name='reachGoal']").val());
			},"json");
		}else{
			$(".order").find(".dialog_input:not(.not-valid) input.requare").each(function(){
				editInputDialog($(this),true);
			});
		}
	});
});