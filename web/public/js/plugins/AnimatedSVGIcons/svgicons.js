/**
 * svgicons.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( window ) {
	
	'use strict';

	/*** helper functions ***/

	// from https://github.com/desandro/classie/blob/master/classie.js
	function classReg( className ) {
		return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
	}

	function hasClass( el, c ) {
		return 'classList' in document.documentElement ? el.classList.contains( c ) : classReg( c ).test( el.className )
	}

	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}

	// from http://stackoverflow.com/a/11381730/989439
	function mobilecheck() {
		var check = false;
		(function(a){if(/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
		return check;
	}

	// http://snipplr.com/view.php?codeview&id=5259
	function isMouseLeaveOrEnter( e, handler ) { 
		if (e.type != 'mouseout' && e.type != 'mouseover') return false; 
		var reltg = e.relatedTarget ? e.relatedTarget : 
		e.type == 'mouseout' ? e.toElement : e.fromElement; 
		while (reltg && reltg != handler) reltg = reltg.parentNode; 
		return (reltg != handler); 
	}

	/*** svgIcon ***/

	function svgIcon( el, config, options ) {
		this.el = el;
		this.options = extend( {}, this.options );
  		extend( this.options, options );
		this.svg = Snap( this.options.size.w, this.options.size.h );
		this.svg.attr( 'viewBox', '0 0 64 64' );
		this.el.appendChild( this.svg.node );
		// state
		this.toggled = false;
		// click event (if mobile use touchstart)
		this.clickevent = mobilecheck() ? 'touchstart' : 'click';
		// icons configuration
		this.config = config[ this.el.getAttribute( 'data-icon-name' ) ];
		// reverse?
		if( hasClass( this.el, 'si-icon-reverse' ) ) {
			this.reverse = true;
		}
		if( !this.config ) return;
		var self = this;
		// load external svg
		Snap.load( this.config.url, function (f) {
			var g = f.select( 'g' );
			self.svg.append( g );
			self.options.onLoad();
			self._initEvents();
			if( self.reverse ) {
				self.toggle();
			}
		});
	}

	svgIcon.prototype.options = {
		speed : 200,
		easing : mina.linear,
		evtoggle : 'click', // click || mouseover
		size : { w : 40, h : 35 },
		onLoad : function() { return false; },
		onToggle : function() { return false; }
	};

	svgIcon.prototype._initEvents = function() {
		var self = this, toggleFn =  function( ev ) {
				if( ( ( ev.type.toLowerCase() === 'mouseover' || ev.type.toLowerCase() === 'mouseout' ) && isMouseLeaveOrEnter( ev, this ) ) || ev.type.toLowerCase() === self.clickevent ) {
					self.toggle(true);
					self.options.onToggle();	
				}
			};

		if( this.options.evtoggle === 'mouseover' ) {
			this.el.addEventListener( 'mouseover', toggleFn );
			this.el.addEventListener( 'mouseout', toggleFn );
		}
		else {
			this.el.addEventListener( this.clickevent, toggleFn );
		}
	};

	svgIcon.prototype.toggle = function( motion ) {
		if( !this.config.animation ) return;
		var self = this;
		for( var i = 0, len = this.config.animation.length; i < len; ++i ) {
			var a = this.config.animation[ i ],
				el = this.svg.select( a.el ),
				animProp = this.toggled ? a.animProperties.from : a.animProperties.to,
				val = animProp.val, 
				timeout = motion && animProp.delayFactor ? animProp.delayFactor : 0;
			
			if( animProp.before ) {
				el.attr( JSON.parse( animProp.before ) );
			}

			if( motion ) {
				setTimeout(function( el, val, animProp ) { 
					return function() { el.animate( JSON.parse( val ), self.options.speed, self.options.easing, function() {
						if( animProp.after ) {
							this.attr( JSON.parse( animProp.after ) );
						}
						if( animProp.animAfter ) {
							this.animate( JSON.parse( animProp.animAfter ), self.options.speed, self.options.easing );
						}
					} ); }; 
				}( el, val, animProp ), timeout * self.options.speed );
			}
			else {
				el.attr( JSON.parse( val ) );
			}
				
		}
		this.toggled = !this.toggled;
	};

	// add to global namespace
	window.svgIcon = svgIcon;

})( window );