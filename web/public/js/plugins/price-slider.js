jQuery(document).ready(function(){


	/* слайдер цен */
	$("#slider").exists(function(){
		jQuery("#slider").slider({
			min: parseInt($(".button-block[data-name='type-deal'] div[data-value='sale']").attr("data-min")),
			max: parseInt($(".button-block[data-name='type-deal'] div[data-value='sale']").attr("data-max")),
			values: [0,0],
			step: parseInt($(".button-block[data-name='type-deal'] div[data-value='sale']").attr("data-step")),
			range: true,
			stop: function(event, ui) {
				var val1 = jQuery("#slider").slider("values",0);
				var val2 = jQuery("#slider").slider("values",1);
				jQuery("input[name='price_min']").val(number_format(val1, 0, ' ', ' '));
				jQuery("input[name='price_max']").val(number_format(val2, 0, ' ', ' '));
				
		    },
		    slide: function(event, ui){
		    	var val1 = jQuery("#slider").slider("values",0);
				var val2 = jQuery("#slider").slider("values",1);
		    	jQuery("input[name='price_min']").val(number_format(val1, 0, ' ', ''));
				jQuery("input[name='price_max']").val(number_format(val2, 0, ' ', ''));
		    }
		});
		
		jQuery("input[name='price_min']").change(function(){
		
			var value1=jQuery("input[name='price_min']").val().replace(/\ /g,"");
			var value2=jQuery("input[name='price_max']").val().replace(/\ /g,"");
		    if(parseInt(value1) > parseInt(value2)){
				value1 = value2;
				jQuery("input[name='price_min']").val(jQuery("input[name='price_max']").val());
			}
		    jQuery("#slider").slider("option", "values", [value1, value2]);	
			
		});
		
			
		jQuery("input[name='price_max']").change(function(){
				
			var value1=jQuery("input[name='price_min']").val().replace(/\ /g,"");
			var value2=jQuery("input[name='price_max']").val().replace(/\ /g,"");
			if(parseInt(value1) > parseInt(value2)){
				value2 = value1;
				jQuery("input[name='price_max']").val(jQuery("input[name='price_min']").val());
			}
			jQuery("#slider").slider("option", "values", [value1, value2]);
		});
		
		$(document).on("click", ".button-block[data-name='type-deal'] div", function(){
			jQuery("#slider").slider( "option", "min", parseInt($(this).attr("data-min") ));
			jQuery("#slider").slider( "option", "max", parseInt($(this).attr("data-max") ));
			jQuery("#slider").slider( "option", "step", parseInt($(this).attr("data-step") ));
			//changePrice($(this))
		});
	});

});




