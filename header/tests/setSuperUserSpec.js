/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.isSuperUser', function () {

    var _cut, _elements, _cookieStore;

    var _getCookieValue = function (cookieKey, suValue) {
        if (cookieKey === 'AS%5FNAME') {
            return (suValue || '');
        }
        return '';
    };

    beforeEach(function () {
        _cut = window.hf.setSuperUser;
        _cookieStore = {
            getCookieValue: function () { }
        };
        _elements = [];
        _elements.push(document.createElement('div'));
        _elements.push(document.createElement('div'));
    });

    it('adds the super-user class if the SU cookie\'s value is TRUE', function () {
        spyOn(_cookieStore, 'getCookieValue').and.callFake(function (cookieName, cookieKey) {
            return _getCookieValue('AS%5FNAME', 'TRUE');
        });
        _cut(_elements, _cookieStore);
        expect(_elements[0].classList.contains("super-user")).toBe(true);
        expect(_elements[1].classList.contains("super-user")).toBe(true);
    });

    it('adds the super-user class if the SU cookie\'s value is true, case insenstive', function () {
        spyOn(_cookieStore, 'getCookieValue').and.callFake(function (cookieName, cookieKey) {
            return _getCookieValue('AS%5FNAME', 'tRue');
        });
        _cut(_elements, _cookieStore);
        expect(_elements[0].classList.contains("super-user")).toBe(true);
        expect(_elements[1].classList.contains("super-user")).toBe(true);
    });

    it('does not add the super-user class if the SU cookie\'s value is false', function () {
        spyOn(_cookieStore, 'getCookieValue').and.callFake(function (cookieName, cookieKey) {
            return _getCookieValue('AS%5FNAME', 'false');
        });
        _cut(_elements, _cookieStore);
        expect(_elements[0].classList.contains("super-user")).toBe(false);
        expect(_elements[1].classList.contains("super-user")).toBe(false);
    });

    it('does not add the super-user class if the SU cookie\'s value is empty', function () {
        spyOn(_cookieStore, 'getCookieValue').and.callFake(function (cookieName, cookieKey) {
            return _getCookieValue('AS%5FNAME', '');
        });
        _cut(_elements, _cookieStore);
        expect(_elements[0].classList.contains("super-user")).toBe(false);
        expect(_elements[1].classList.contains("super-user")).toBe(false);
    });

});
