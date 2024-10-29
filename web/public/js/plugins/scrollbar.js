/*!
 * jQuery Mousewheel 3.1.13
 *
 * Copyright 2015 jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});

/*!
 * jQuery ScrollBar
 *
 * version: 0.8
 * author: Masloboev
 * year: 2016
 * 
 */

(function ($) {
    $.fn.scrollbar = function () {
		var prevHeight = 0;
		var prevTop = 0;
		var prevScrollTop = 0;
		var scrollHeight = 0;
		var scrollHeight_old = 0;
		var ratio = 0; 
		var object = $(this);

		if (object.find(".scrollbar").length > 0){
			object.find(".scrollbar").remove();
			object.unbind("mousewheel");
			scrollHeight_old = object.scrollTop();
		}

		object.css({position:"relative",overflowY:"hidden"});
		object.append("<div class='scrollbar'><div class='scrollbar_cursor'></div></div>");
		
		var scrollbar = object.find(".scrollbar");
		var scrollbar_cursor = scrollbar.find(".scrollbar_cursor");
		
		scrollbar.hide();
		
		scrollbar.height(object.height());
		
		object.scrollTop(object.get(0).scrollHeight);
		scrollHeight = object.scrollTop() + object.height();
		object.scrollTop(scrollHeight_old);
		
		scrollbar_cursor_height = (object.height()*scrollbar.height())/scrollHeight ;
		ratio = (scrollHeight-object.height())/(scrollbar.height()-scrollbar_cursor_height);
		
		scrollbar_cursor.height(scrollbar_cursor_height);
		
		if (scrollHeight > object.height()) scrollbar.fadeIn(300);

		scrollbar_cursor.draggable({
			containment:scrollbar,
			scroll:true,
			axis: "y",
			start: function(){
				$(this).data("startingScrollTop",object.scrollTop());
			},
			drag: function(event,ui){
				
				var st = parseInt($(this).data("startingScrollTop"));
				ui.position.top -= object.scrollTop() - st;
				object.scrollTop(ui.position.top*ratio);
				//console.log(ui.position.top - object.scrollTop() - st);
			}
			
		});

		scrollbar.click(function (event) {
			var position = event.offsetY-scrollbar_cursor.height()/2;
			if (position<0) position = 0;
			if (position>scrollbar.height()-scrollbar_cursor.height()) position = scrollbar.height()-scrollbar_cursor.height();
			scrollbar_cursor.css("top",position);
			object.scrollTop(position*ratio);
		});
		object.scroll(function(){
			scrollbar.css("top",object.scrollTop());
		});
		object.mousewheel(function(event) {
			var scroll_object = object.scrollTop() - event.deltaFactor*event.deltaY;

			if (scroll_object < 0) scroll_object = 0;
			if (scroll_object > scrollHeight - object.height()) scroll_object = scrollHeight - object.height();
		
			scrollbar_cursor.css("top",parseFloat(scrollbar_cursor.css("top")) - event.deltaFactor*event.deltaY/ratio);
			object.scrollTop(scroll_object);
			
			if (parseInt(scrollbar_cursor.css("top")) > scrollbar.height()-scrollbar_cursor.height()){
				scrollbar_cursor.css("top",scrollbar.height()-scrollbar_cursor.height());
				if (prevTop >= scrollbar.height()-scrollbar_cursor.height()) return true;
			}
			if (parseInt(scrollbar_cursor.css("top")) < 0){
				scrollbar_cursor.css("top",0);
				if (prevTop <= 0) return true;
			}
			prevTop = parseFloat(scrollbar_cursor.css("top")).toFixed(2);
			return false;
			
		});
		/*
		$(window).resize(function(){
			var scrollHeight_old = object.scrollTop();
			scrollbar.height(object.height());
		
			object.scrollTop(object.get(0).scrollHeight);
			scrollHeight = object.scrollTop() + object.height();
			object.scrollTop(scrollHeight_old);
			scrollbar_cursor_height = (object.height()*scrollbar.height())/scrollHeight;
			ratio = (scrollHeight-object.height())/(scrollbar.height()-scrollbar_cursor_height);

			scrollbar_cursor.height(scrollbar_cursor_height);
			scrollbar_cursor.css({top:(scrollHeight_old/ratio)});
			
			if (scrollHeight <= object.height()) scrollbar.fadeOut(300);
			else scrollbar.fadeIn(300);
		});
		*/
		
		setInterval (function (){
			if (object.height() != prevHeight || object.get(0).scrollHeight != scrollbar.height()*ratio){
				var scrollHeight_old = object.scrollTop();
				scrollbar.height(object.height());
			
				object.scrollTop(object.get(0).scrollHeight);
				scrollHeight = object.scrollTop() + object.height();
				object.scrollTop(scrollHeight_old);
				scrollbar_cursor_height = (object.height()*scrollbar.height())/scrollHeight;
				ratio = (scrollHeight-object.height())/(scrollbar.height()-scrollbar_cursor_height);

				scrollbar_cursor.height(scrollbar_cursor_height);
				scrollbar_cursor.css({top:(scrollHeight_old/ratio)});
				
				if (scrollHeight <= object.height()) scrollbar.fadeOut(300);
				else scrollbar.fadeIn(300);
			}
			prevHeight = object.height();
		},200);


		return object;
    }
}
)(jQuery);