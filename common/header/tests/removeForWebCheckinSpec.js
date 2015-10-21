/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.removeForWebCheckin', function () {

    var _cut, _parent, _elements;

    beforeEach(function () {
        _cut = window.hf.removeForWebCheckin;
        _elements = [];
        _parent = document.createElement('div');
        _elements.push(document.createElement('div'));
        _elements.push(document.createElement('div'));
        _parent.appendChild(_elements[0]);
        _parent.appendChild(_elements[1]);
    });

    it('should remove the elements when the hostname contains selfservice', function () {
        _cut(_elements, 'selfservice.alaskaair.com');
        expect(_parent.contains(_elements[0])).toBe(false);
        expect(_parent.contains(_elements[1])).toBe(false);
    });

    it('should remove the elements when the hostname contains selfservice, case insensitive', function () {
        _cut(_elements, 'selfservICE.alaskaair.com');
        expect(_parent.contains(_elements[0])).toBe(false);
        expect(_parent.contains(_elements[1])).toBe(false);
    });

    it('should not remove the elements when the hostname contains selfservice', function () {
        _cut(_elements, 'www.alaskaair.com');
        expect(_parent.contains(_elements[0])).toBe(true);
        expect(_parent.contains(_elements[1])).toBe(true);
    });
});
