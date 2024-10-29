$(document).ready(function(){
	if($(".order-horizontal .dialog_input input[name='name']").val()){
		editInputDialog($(".order-horizontal .dialog_input input[name='name']"), true);
	}
	if($(".order-horizontal .dialog_input input[name='phone']").val()){
		editInputDialog($(".order-horizontal .dialog_input input[name='phone']"), true);
	}
	if($(".order-horizontal .dialog_input input[name='email']").val()){
		editInputDialog($(".order-horizontal .dialog_input input[name='email']"), true);
	}
	$(".order-horizontal .send").click(function(){
		/*if($(".order .slide").length > 0){
			if($(".order .slide.active").length == 0){
				$(".order .form-object-check").addClass("slide-empty");
				return false;
			}
		}*/
		if ($(this).attr("data-access")=="true"){
			$(".order-horizontal").fadeOut(300);
			$.get("/order/send",$(this).parents(".order-horizontal").find("form").serialize(),function(data){
				$(".order-success").fadeIn();
			},"json");
		}else{
			$(".order-horizontal").find(".dialog_input:not(.not-valid) input.requare").each(function(){
				editInputDialog($(this),true);
			});
		}
	});
});