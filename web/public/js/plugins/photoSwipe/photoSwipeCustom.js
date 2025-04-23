function initPhotoSwipeFromDOM(gallerySelector) {
	function parseThumbnailElements(el) {
		const thumbElements = el.childNodes;
		const numNodes = thumbElements.length;
		const items = [];

		for (let i = 0; i < numNodes; i++) {
			const figureEl = thumbElements[i];

			if (figureEl.nodeType !== 1) {
				continue;
			}

			const linkEl = figureEl.children[0];
			const size = linkEl.getAttribute('data-size').split('x');

			const item = {
				src: linkEl.getAttribute('href'),
				w: parseInt(size[0], 10),
				h: parseInt(size[1], 10)
			};


			if (figureEl.children.length > 1) {
				item.title = figureEl.children[1].innerHTML;
			}

			if (linkEl.children.length > 0) {
				item.msrc = linkEl.children[0].getAttribute('src');
			}

			item.el = figureEl; // save link to element for getThumbBoundsFn
			items.push(item);
		}

		return items;
	}

	function closest(el, fn) {
		if (!el) return undefined;

		if (fn(el)) return el;

		return closest(el.parentNode, fn);
	}

	function onThumbnailsClick(event) {
		event.preventDefault();

		const target = event.target;
		const figure = closest(target, element => element.tagName && element.tagName.toUpperCase() === 'FIGURE');

		if (!figure) return;

		if ($(figure).find(".more-photos").length > 0) return false;

		const gallery = figure.parentNode;
		const galleryChildNodes = gallery.childNodes;
		const galleryChildCount = galleryChildNodes.length;

		let nodeIndex = 0;
		let targetIndex;

		for (let i = 0; i < galleryChildCount; i++) {
			if (galleryChildNodes[i].nodeType !== 1) continue;

			if (galleryChildNodes[i] === figure) {
				targetIndex = nodeIndex;
				break;
			}

			nodeIndex++;
		}

		if (targetIndex >= 0) {
			openPhotoSwipe(targetIndex, gallery);
		}

		return false;
	}

	function parsePhotoswipeHash() {
		const hash = window.location.hash.substring(1);
		const params = {};

		if (hash.length < 5) {
			return params;
		}

		const queryParams = hash.split('&');

		for (let i = 0; i < queryParams.length; i++) {
			if (!queryParams[i]) continue;

			const pair = queryParams[i].split('=');
			if (pair.length < 2) continue;

			params[pair[0]] = pair[1];
		}

		if (params.gid) {
			params.gid = parseInt(params.gid, 10);
		}

		return params;
	}

	function openPhotoSwipe(index, galleryElement, disableAnimation, fromURL) {
		const pswpElement = document.querySelectorAll('.pswp')[0];
		const items = parseThumbnailElements(galleryElement);


		const options = {
			galleryUID: galleryElement.getAttribute('data-pswp-uid'),
			getThumbBoundsFn: function (index) {
				const thumbnail = items[index].el.getElementsByTagName('img')[0]
				const pageYScroll = window.pageYOffset || document.documentElement.scrollTo;
				const rect = thumbnail.getBoundingClientRect();

				return {
					x: rect.left,
					y: rect.top + pageYScroll,
					w: rect.width
				};
			}

		};

		if (fromURL) {
			if (options.galleryPIDs) {
				for (let j = 0; j < items.length; j++) {
					if (items[j].pid == index) {
						options.index = j;
						break;
					}
				}
			} else {
				options.index = parseInt(index, 10) - 1;
			}
		} else {
			options.index = parseInt(index, 10);
		}

		if (isNaN(options.index)) {
			return;
		}

		if (disableAnimation) {
			options.showAnimationDuration = 0;
		}

		const gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
		gallery.init();
	}

	const galleryElements = document.querySelectorAll(gallerySelector);
	const galleryElementsCount = galleryElements.length;


	for (let i = 0; i < galleryElementsCount; i++) {
		galleryElements[i].setAttribute('data-pswp-uid', i + 1);
		galleryElements[i].onclick = onThumbnailsClick;
	}

	const hashData = parsePhotoswipeHash();

	if (hashData.pid && hashData.gid) {
		openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
	}
}

$(document).ready(function () {
	initPhotoSwipeFromDOM('.my-gallery');
});
