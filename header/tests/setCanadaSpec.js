/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.setCanada', function () {

    var _cut, _elements, _fakeAjax, _sessionStorage, _sessionStorageValues;

    beforeEach(function () {
        _cut = window.hf.setCanada;
        _elements = [];
        _elements.push(document.createElement('div'));
        _elements.push(document.createElement('div'));
        _fakeAjax = {
            makeCall: function (options) {
                this.succeed = (options.success || Function);
                this.fail = (options.error || Function);
            }
        };
        _sessionStorageValues = {};
        _sessionStorage = {
            getItem: function (key) {
                return _sessionStorageValues[key];
            },
            setItem: function (key, value) {
                _sessionStorageValues[key] = value;
            }
        };
    });

    it('should add the is-canada class to the passed in elements if the ajax call returns Canada country code', function () {
        _cut(_elements, _fakeAjax, _sessionStorage, '');
        _fakeAjax.succeed('{"ResolvedCity":{"CountryCode":"ca"}}');
        expect(_elements[0].classList.contains('is-canada')).toBe(true);
        expect(_elements[1].classList.contains('is-canada')).toBe(true);
    });

    it('should add the is-canada class to the passed in elements if the ajax call returns Canada country code, case insensitive', function () {
        _cut(_elements, _fakeAjax, _sessionStorage, '');
        _fakeAjax.succeed('{"ResolvedCity":{"CountryCode":"cA"}}');
        expect(_elements[0].classList.contains('is-canada')).toBe(true);
        expect(_elements[1].classList.contains('is-canada')).toBe(true);
    });

    it('should not add the is-canada class to the passed in elements if the ajax call returns something other than Canada country code', function () {
        _cut(_elements, _fakeAjax, _sessionStorage, '');
        _fakeAjax.succeed('{"ResolvedCity":{"CountryCode":"Us"}}');
        expect(_elements[0].classList.contains('is-canada')).toBe(false);
        expect(_elements[1].classList.contains('is-canada')).toBe(false);
    });

    it('should send the accept/json header to the ajax call', function () {
        spyOn(_fakeAjax, 'makeCall').and.callFake(function (data) {
            expect(data.headers.length).toBe(1);
            expect(data.headers[0].key).toBe('Accept');
            expect(data.headers[0].value).toBe('application/json');
        });
        _cut(_elements, _fakeAjax, _sessionStorage);
    });

    it('should not add the is-canada class to the passed in elements if the ajax call fails', function () {
        _cut(_elements, _fakeAjax, _sessionStorage, '');
        _fakeAjax.fail();
        expect(_elements[0].classList.contains('is-canada')).toBe(false);
        expect(_elements[1].classList.contains('is-canada')).toBe(false);
    });

    it('should store my result in session storage', function () {
        _cut(_elements, _fakeAjax, _sessionStorage, '');
        _fakeAjax.succeed('{"ResolvedCity":{"CountryCode":"BN"}}');
        expect(_sessionStorageValues['countryCode']).toBe('BN');
    });

    it('should use the country code stored in session storage and not make the ajax request', function () {
        _sessionStorageValues['countryCode'] = 'CA';

        var didCall = false;
        _fakeAjax.makeCall = function () {
            didCall = true;
        };

        _cut(_elements, _fakeAjax, _sessionStorage);

        expect(didCall).toBe(false);
        expect(_elements[0].classList.contains('is-canada')).toBe(true);
        expect(_elements[1].classList.contains('is-canada')).toBe(true);
    });

    it('should use the country code in the cc querystring parameter and not make the ajax request', function () {
        spyOn(_fakeAjax, 'makeCall');
        _cut(_elements, _fakeAjax, _sessionStorage, '?cc=CA');
        expect(_elements[0].classList.contains('is-canada')).toBe(true);
        expect(_elements[1].classList.contains('is-canada')).toBe(true);
        expect(_fakeAjax.makeCall).not.toHaveBeenCalled();
    });

    it('should make the geo call by IP if the IP querystring parameter is supplied', function () {
        spyOn(_fakeAjax, 'makeCall').and.callFake(function (options) {
            expect(options.url.split('&')[0]).toBe('//geoservice.alaskaair.com/api/lookup/byip?ipAddress=1.1.1.1');
        });
        _cut(_elements, _fakeAjax, _sessionStorage, '?ip=1.1.1.1');
        expect(_fakeAjax.makeCall).toHaveBeenCalled();
    });

    it('should make the geo call using the resolve method if the IP querystring parameter is not supplied', function () {
        spyOn(_fakeAjax, 'makeCall').and.callFake(function (options) {
            expect(options.url.split('?')[0]).toBe('//geoservice.alaskaair.com/api/lookup/resolve');
        });
        _cut(_elements, _fakeAjax, _sessionStorage, '');
        expect(_fakeAjax.makeCall).toHaveBeenCalled();
    });

    it('should make the geo call using the resolve method if the IP querystring parameter is supplied, but the value is empty', function () {
        spyOn(_fakeAjax, 'makeCall').and.callFake(function (options) {
            expect(options.url.split('?')[0]).toBe('//geoservice.alaskaair.com/api/lookup/resolve');
        });
        _cut(_elements, _fakeAjax, _sessionStorage, '?ip=');
        expect(_fakeAjax.makeCall).toHaveBeenCalled();
    });

    it('should override what is in session storage if the IP querystring parameter is supplied', function () {
        _sessionStorageValues['countryCode'] = 'US';
        spyOn(_fakeAjax, 'makeCall').and.callFake(function (options) {
            expect(options.url.split('&')[0]).toBe('//geoservice.alaskaair.com/api/lookup/byip?ipAddress=1.1.1.1');
        });
        _cut(_elements, _fakeAjax, _sessionStorage, '?ip=1.1.1.1');
        expect(_fakeAjax.makeCall).toHaveBeenCalled();
    });

});
