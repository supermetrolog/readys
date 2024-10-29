$(document).ready(function(){
	$("input[name='phone']").inputmask("+7 (999) 999-99-99");
	$(document).on("click", ".to-order", function(){
		$('html, body').stop().animate({scrollTop:($(".form-order").offset().top - 100)}, 500);
		return false;
	});
	$(document).on("click", ".to-lots", function(){
		$('html, body').stop().animate({scrollTop:($(".anchor").offset().top - 100)}, 500);
		return false;
	});
	$(document).on("click", ".submit", function(){
		var form = $(this).parents("form")
		form.find("input.req").each(function(){
			if($(this).val() == ""){
				$(this).parent().addClass("hasError");
			}else{
				$(this).parent().removeClass("hasError");
			}
			if($(this).attr('name') == "email"){
				if(!isValidEmailAddress($(this).val())){
					$(this).parent().addClass("hasError");
				}else{
					$(this).parent().removeClass("hasError");
				} 
			}
			if($(this).attr('name') == "phone"){
				
				if(!$(this).inputmask("isComplete")){
					$(this).parent().addClass("hasError");
				}else{
					$(this).parent().removeClass("hasError");
				}
			}
		})
		if(form.find(".hasError").length > 0){
			return false;	
		}
		form.hide();
		form.next().show();
		
		$.get("/order/send",form.serialize(),function(data){
			
		},"json");
		return false;
	});
})

function isValidEmailAddress(emailAddress){
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}