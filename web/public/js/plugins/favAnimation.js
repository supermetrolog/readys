/**
 * demo.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2016, Codrops
 * http://www.codrops.com
 */
;(function(window) {

	'use strict';

	// taken from mo.js demos
	function isIOSSafari() {
		var userAgent;
		userAgent = window.navigator.userAgent;
		return userAgent.match(/iPad/i) || userAgent.match(/iPhone/i);
	};

	// taken from mo.js demos
	function isTouch() {
		var isIETouch;
		isIETouch = navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
		return [].indexOf.call(window, 'ontouchstart') >= 0 || isIETouch;
	};
	
	// taken from mo.js demos
	var isIOS = isIOSSafari(),
		clickHandler = isIOS || isTouch() ? 'touchstart' : 'click';

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	function Animocon(el, options) {
		this.el = el;
		this.options = extend( {}, this.options );
		extend( this.options, options );

		this.checked = $(el).parent().hasClass("fav")?false:true;

		this.timeline = new mojs.Timeline();
		
		for(var i = 0, len = this.options.tweens.length; i < len; ++i) {
			this.timeline.add(this.options.tweens[i]);
		}

		var self = this;
		this.el.addEventListener(clickHandler, function() {
			if( self.checked ) {
				self.options.onUnCheck();
			}
			else {
				self.options.onCheck();
				self.timeline.replay();
			}
			self.checked = !self.checked;
		});
	}

	Animocon.prototype.options = {
		tweens : [
			new mojs.Burst({})
		],
		onCheck : function() { return false; },
		onUnCheck : function() { return false; }
	};

	

	function init() {
		/* Icon 14 */
		$('button.icobutton').each(function(){
			var el14 = this;
			var el14span = $(el14).find('span')[0]
			new Animocon(el14, {
				tweens : [
					// ring animation
					new mojs.Shape({
						parent: el14,
						duration: 750,
						type: 'circle',
						radius: {0: 40},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {35:0},
						opacity: 0.2,
						top: '45%',
						easing: mojs.easing.bezier(0, 1, 0.5, 1)
					}),
					new mojs.Shape({
						parent: el14,
						duration: 500,
						delay: 100,
						type: 'circle',
						radius: {0: 20},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {5:0},
						opacity: 0.2,
						x : 40, 
						y : -60,
						easing: mojs.easing.sin.out
					}),
					new mojs.Shape({
						parent: el14,
						duration: 500,
						delay: 180,
						type: 'circle',
						radius: {0: 10},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {5:0},
						opacity: 0.5,
						x: -10, 
						y: -80,
						isRunLess: true,
						easing: mojs.easing.sin.out
					}),
					new mojs.Shape({
						parent: el14,
						duration: 800,
						delay: 240,
						type: 'circle',
						radius: {0: 20},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {5:0},
						opacity: 0.3,
						x: -70, 
						y: -10,
						easing: mojs.easing.sin.out
					}),
					new mojs.Shape({
						parent: el14,
						duration: 800,
						delay: 240,
						type: 'circle',
						radius: {0: 20},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {5:0},
						opacity: 0.4,
						x: 80, 
						y: -50,
						easing: mojs.easing.sin.out
					}),
					new mojs.Shape({
						parent: el14,
						duration: 1000,
						delay: 300,
						type: 'circle',
						radius: {0: 15},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {5:0},
						opacity: 0.2,
						x: 20, 
						y: -100,
						easing: mojs.easing.sin.out
					}),
					new mojs.Shape({
						parent: el14,
						duration: 600,
						delay: 330,
						type: 'circle',
						radius: {0: 25},
						fill: 'transparent',
						stroke: '#F35186',
						strokeWidth: {5:0},
						opacity: 0.4,
						x: -40, 
						y: -90,
						easing: mojs.easing.sin.out
					}),
					// icon scale animation
					new mojs.Tween({
						duration : 1200,
						easing: mojs.easing.ease.out,
						onUpdate: function(progress) {
							if(progress > 0.3) {
								var elasticOutProgress = mojs.easing.elastic.out(1.43*progress-0.43);
								el14span.style.WebkitTransform = el14span.style.transform = 'scale3d(0.5, 0.5, 1)';
							}
							else {
								el14span.style.WebkitTransform = el14span.style.transform = 'scale3d(0,0,1)';
							}
						}
					})
				],
				onCheck : function() {
					el14.style.color = '#F35186';
					
				},
				onUnCheck : function() {
					el14.style.color = '#C0C1C3';
					
				}
			});
		});
		
		
		/* Icon 14 */
	}
	
	init();

})(window);