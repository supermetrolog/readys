const THRESHOLD = 50;

$(document).ready(() => {
	const HEADER_ELEMENT = document.querySelector('.header-desctop.wrap');
	const NAVBAR_ELEMENT = document.querySelector('.header-desctop.topmenu');

	function showHeaderElements() {
		HEADER_ELEMENT.classList.add('fixed');
		NAVBAR_ELEMENT.classList.add('fixed');
	}

	function hideHeaderElements() {
		HEADER_ELEMENT.classList.remove('fixed');
		NAVBAR_ELEMENT.classList.remove('fixed');
	}

	window.addEventListener('scroll', () => {
		if (window.scrollY > THRESHOLD) {
			showHeaderElements();
		} else {
			hideHeaderElements();
		}
	});

	// map

	const map = document.querySelector('#location');
	let mapIsHovered = false;
	let hoverTimeout = null;

	function clearTimeoutIfExist() {
		if (hoverTimeout) {
			clearTimeout(hoverTimeout);
			hoverTimeout = null;
		}
	}

	function setMapHover(value) {
		if (mapIsHovered === value) return;

		if (value) {
			map.classList.add('hovered');
		} else {
			map.classList.remove('hovered');
		}

		mapIsHovered = value;
	}

	if (map) {
		map.addEventListener('mouseenter', () => {
			clearTimeoutIfExist();
			hoverTimeout = setTimeout(() => setMapHover(true), 1500)
		});

		map.addEventListener('mouseleave', () => {
			clearTimeoutIfExist();
			setMapHover(false)
		});
	}

	// AOS

	AOS.init();
})

