(function($) {
    function init(){
        $(document).on("click touch", ".select-object", function () {
            $(this).next().toggleClass("show");
        });
        $(document).on("click touch", ".select-list .list-item", function () {
            var name = $(this).data('name');
            var input = $("input[name='" + name + "']");
            var select = $(this).parent().prev();
            $(this).parent().find(".list-item").removeClass("active");
            $(this).addClass('active');
            input.val($(this).data("value"));
            if(input.val()){
                select.find("span").html($(this).parent().find(".active span").text());
            }else{
                select.find("span").html("Выберите тип хранения");
            }
            $(this).parent().toggleClass("show");
            changeDirect();
            getLots();
        });
    }
    init();
    changeDirect();
    function changeDirect(){
        var input = $("input[name='region']");
        $(".wrap-direction-block").removeClass("show");
        $(".wrap-direction-block."+input.val()).addClass('show');
        $(".areas-search.highway").hide();
        $(".areas-search.highway."+input.val()).show();
    }
})(jQuery);