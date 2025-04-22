$(document).ready(function () {
	/* home page submit filter */

	$("form .search").exists(function () {
		const windowWidth = $(window).width();

		$(document).on("click", ".filter form .search", function () {
			$("#ajax-loader").show();

			const queryParams = $(".mainfilter form :input[name!='type-deal']").serialize();
			const location = $(windowWidth <= 535 ? "select[name='type-deal']" : "input[name='type-deal']").val();

			window.location = "/" + location + "?" + queryParams;
		})

		$(document).on("click", ".subscribe form .search", function () {
			$(".subscribe form").fadeOut();

			$(".subscribe .order-success").fadeIn();

			$.get("/order/send/", $(".subscribe form").serialize(), function (data) {
				$(".subscribe .order-success").html(data.success).fadeIn();

				/* цели */

				if ($(".subscribe form").find("input:not([name='reachGoal'])").length > 0) {
					window.yaCounter40269164.reachGoal($(".subscribe form").find("input[name='reachGoal']").val());
					ga('send', 'event', 'Form', $(".subscribe form").find("input[name='reachGoal']").val());
				}

			}, "json");
		})

		$('#single-item').slick({
			"arrows": false,
			"dots": true,
			"autoplay": true,
			"infinite": true,
			"slidesToShow": ($(window).width() <= 750 && $(window).width() > 535 ? 2 : 1),
		});

		$(".calculated-height").height($("#single-item a.item").outerHeight());
	});

	// AOS

	AOS.init({
		once: true,
		duration: 500
	});
});

function slideChange(args) {
	$('.selectors .item').removeClass('selected');
	$('.selectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
}