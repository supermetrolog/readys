$(document).ready(function () {
    $(document).on("click touch", ".tab > div[data-general='tab-news'] > div", function(){
        if(action != "mainpage"){
            history.pushState("", "", "/news/" + ($(this).data("type") != "" ? $(this).data("type") + "/": "") + ($(this).data("page") != 1 ? $(this).data("page") + "/": ""));
        }
        /*получаем новости по выбранному типу*/
        getNews($(".tab-news."+$(this).attr("data")+" .elements"), $(this).data("type"),  $(this).data("page"));
    });
    /*share button*/
    $('.social-toggle').on('click', function() {
        $(this).next().toggleClass('open-menu');
        return false;
    });
});

function getNews(el, category, page) {

    el.before('<div id="ajax-loader"><div id="loader"></div></div>');
    el.html(skelet);
    $(".skelet").animate({"opacity": 0.7}, 1500);
    var range = 32;
    if(action == "mainpage"){
        range = 8;
    }
    $.get("/get_news/", {"category": category, "pages": page, "range": range}, function (data) {
        $(".skelet, #ajax-loader").remove();
        el.html(data.content);
        if(action != "mainpage") {
            $(".bottom_navigation").html(data.pagination);
        }

    },"json");



}