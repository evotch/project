var hf = window.hf || {};
hf.cookieStore = {
    getCookieValue: function (cookieName, cookieKey) {
        var cookieValue = "";

        var cookie = this._get(cookieName);
        if (cookie !== undefined) {
            var cookieKVPs = cookie.split('&');
            for (var i = 0; i < cookieKVPs.length; i++) {
                var cookieKVP = cookieKVPs[i].split('=');
                if (cookieKVP.length > 1 && cookieKVP[0].toLowerCase() === cookieKey.toLowerCase()) {
                    cookieValue = this._replaceAll(cookieKVP[1], '+', ' ');
                }
            }
        }

        return cookieValue;
    },

    _get: function (cookieName) {
        var nameEQ = cookieName + "=";
        var cookies = document.cookie.split(';');
        for (var i = 0, len = cookies.length; i < len; i++) {
            var c = cookies[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) === 0) {
                return decodeURIComponent(c.substring(nameEQ.length, c.length));
            }
        }

        return '';
    },

    _replaceAll: function (originalString, search, replace) {
        //if replace is null, return original string otherwise it will
        //replace search string with 'undefined'.
        if (!replace) {
            return this;
        }

        return originalString.replace(new RegExp('[' + search + ']', 'g'), replace);
    }
};