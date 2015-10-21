/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.addNoPrintForWebCheckin', function () {

    var _cut, _elements;

    beforeEach(function () {
        _cut = window.hf.addNoPrintForWebCheckin;
        _elements = [];
        _elements.push(document.createElement('div'));
        _elements.push(document.createElement('div'));
    });

    it('should add the the no-print style when the hostname contains selfservice', function () {
        _cut(_elements, 'selfservice.alaskaair.com');
        expect(_elements[0].classList.contains('no-print')).toBe(true);
        expect(_elements[0].classList.contains('no-print')).toBe(true);
    });

    it('should add the the no-print style when the hostname contains selfservice, case insensitive', function () {
        _cut(_elements, 'selfservICE.alaskaair.com');
        expect(_elements[0].classList.contains('no-print')).toBe(true);
        expect(_elements[0].classList.contains('no-print')).toBe(true);
    });

    it('should not add the the no-print style when the hostname does not contains selfservice', function () {
        _cut(_elements, 'www.alaskaair.com');
        expect(_elements[0].classList.contains('no-print')).toBe(false);
        expect(_elements[0].classList.contains('no-print')).toBe(false);
    });
});
