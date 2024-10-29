function getCarousel(){
	if($('.jcarousel').data('jcarousel')){
		$('.jcarousel').jcarousel('destroy');
	}
    var jcarousel = $('.jcarousel');
    jcarousel
        .on('jcarousel:reload jcarousel:create', function () {
            var width = jcarousel.innerWidth() + 15;
            if (width >= 600) {
                width = width / 3;
            } else if (width >= 350) {
                width = width / 2;
            }
            jcarousel.jcarousel('items').css('width',  + 'px');
        })
        .jcarousel({
            wrap: 'last'
        });

    $('.jcarousel-control-prev')
        .jcarouselControl({
            target: '-=1'
        });

    $('.jcarousel-control-next')
        .jcarouselControl({
        	target: '+=1'
        });

    $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .on('click', function(e) {
            e.preventDefault();
        })
        .jcarouselPagination({
            perPage: 1,
            item: function(page) {
                return '<a href="#' + page + '">' + page + '</a>';
            }
        });
	
}
