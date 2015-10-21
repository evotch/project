var hf = window.hf || {};
hf.setCanada = function (elements, ajax, sessionStorage, querystring) {
    var countryCode = getQSParam(querystring, 'cc') || sessionStorage.getItem('countryCode');
    var ipOverride = getQSParam(querystring, 'ip');
    if (countryCode && countryCode.length > 0 && !ipOverride) {
        processCountry(null, countryCode);
    }
    else {
        var cacheBuster = (new Date()).getTime();
        var url = '//geoservice.alaskaair.com/api/lookup/'
        if (ipOverride) {
            url += 'byip?ipAddress=' + ipOverride + '&' + cacheBuster
        } else {
            url += 'resolve?' + cacheBuster
        }

        ajax.makeCall({
            url: url,
            headers: [{
                key: 'Accept',
                value: 'application/json'
            }],
            success: function (dataString) {
                var data = JSON.parse(dataString);
                if (data && data.ResolvedCity && data.ResolvedCity.CountryCode) {
                    countryCode = data.ResolvedCity.CountryCode.toUpperCase();
                }

                var nearestcity = null;
                if (data && data.ResolvedCity && data.ResolvedCity.NearestAlaskaDestination) {
                    nearestcity = data.ResolvedCity.NearestAlaskaDestination.Code;
                }
                processCountry(nearestcity, countryCode);
            }
        });
    }

    function processCountry(nearestCity, countryCode) {
        try {
            if (nearestCity != null) {
                sessionStorage.setItem('nearestAirport', nearestCity);
            }
            sessionStorage.setItem('countryCode', countryCode);
        } catch (e) { }

        if (countryCode === "CA") {
            addClass('is-canada');
        }
    }

    function addClass(className) {
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add(className);
        }
    }

    function getQSParam(querystring, key) {
        if (querystring && key) {
            var vars = [], hash;
            var hashes = querystring.slice(querystring.indexOf('?') + 1).split('&');
            for (var i = 0; i < hashes.length; i++) {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            return vars[key];
        }
    }

}