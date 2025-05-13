$(document).ready(() => {
	const features = document.querySelectorAll('.exclusive-feature__slider');

	features.forEach(feature => {
		if (feature.children.length > 1) {
			initFeatureGallery($(feature));
		}
	});
})

function initFeatureGallery(jqElement) {
	jqElement.lightSlider({
		item: 1,
		slideMargin: 0,
		auto: true,
		loop: true,
		addClass: 'feature-slider',
		pause: 5000,
		speed: 600,
		gallery: true,
		vThumbWidth: 50,
		thumbItem: 8,
		thumbMargin: 4
	});

}