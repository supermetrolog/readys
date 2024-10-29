$(document).ready(function(){

    $('form#news').validate({
        onKeyup : true,
        eachValidField : function() {
            $(this).closest('div').removeClass('has-error').addClass('success');
        },
        eachInvalidField : function() {
            $(this).closest('div').removeClass('success').addClass('has-error');
        }
    });

    if($("input[name='DATE_CREATE']").length > 0){
        $("input[name='DATE_CREATE']").datepicker();
    }

});
