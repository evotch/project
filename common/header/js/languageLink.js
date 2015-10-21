var hf = window.hf || {};
hf.showLanguageLink = function () {

    function toEnglishUrl(spanishUrl) {
        if (!spanishUrl) {
            return "https://www.alaskaair.com";
        }
        return spanishUrl.replace("//alaskaair.convertlanguage.com/alaskaair/enes/24/_www_alaskaair_com", "//www.alaskaair.com");
    }

    function toSpanishUrl(englishUrl) {
        if (!englishUrl) {
            return "https://alaskaair.convertlanguage.com/alaskaair/enes/24/_www_alaskaair_com";
        }
        return englishUrl.replace("//www.alaskaair.com", "//alaskaair.convertlanguage.com/alaskaair/enes/24/_www_alaskaair_com");
    }

    var hostname = window.location.hostname.toLowerCase();
    var pathname = window.location.pathname.toLowerCase();
    var href = window.location.href;

    var domElementSelectors = {
        ESPANOL_ITEM: 'espanol',
        ESPANOL_ITEM_MOBILE: 'espanolMobile',
        ENGLISH_ITEM: 'english',
        ENGLISH_ITEM_MOBILE: 'englishMobile',
        ESPANOL_LINK: 'navLocaleES',
        ESPANOL_LINK_MOBILE: 'navMobileLocaleES',
        ENGLISH_LINK: 'navLocaleEN',
        ENGLISH_LINK_MOBILE: 'navMobileLocaleEN'
    };

    var domElements = {};
    for (var dom in domElementSelectors) {
        domElements[dom] = document.getElementById(domElementSelectors[dom]);
    }

    var isSpanishSite = hostname === 'alaskaair.convertlanguage.com';
    var showLangLink = (hostname === 'www.alaskaair.com' || isSpanishSite) && pathname.indexOf('/travel-agent') !== 0;

    domElements.ESPANOL_ITEM.classList.add('hidden');
    domElements.ENGLISH_ITEM.classList.add('hidden');

    domElements.ESPANOL_ITEM_MOBILE.classList.add('hidden');
    domElements.ENGLISH_ITEM_MOBILE.classList.add('hidden');

    if (showLangLink) {
        if (isSpanishSite) {
            var html = document.getElementsByTagName('html');
            html[0].lang = 'es';
            domElements.ENGLISH_ITEM.classList.remove('hidden');
            domElements.ENGLISH_LINK.href = toEnglishUrl(href);

            domElements.ENGLISH_ITEM_MOBILE.classList.remove('hidden');
            domElements.ENGLISH_LINK_MOBILE.href = toEnglishUrl(href);
        } else {
            domElements.ESPANOL_ITEM.classList.remove('hidden');
            domElements.ESPANOL_LINK.href = toSpanishUrl(href);

            domElements.ESPANOL_ITEM_MOBILE.classList.remove('hidden');
            domElements.ESPANOL_LINK_MOBILE.href = toSpanishUrl(href);
        }
    }
};