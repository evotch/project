/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.setCartCount', function () {

	var _cut, _elements, _cookieStore;

	var _getCookieValue = function (cookieKey, as_cartValue) {
		if (cookieKey === 'ITEMCOUNT') {
		    return (as_cartValue || '');
		}
		return '';
	};

	beforeEach(function () {
	    _cut = window.hf.setCartCount;
		_elements = [];
		_elements.push(document.createElement('div'));
		_elements.push(document.createElement('div'));
		$(_elements[0]).text('hi');
		$(_elements[1]).text('there');
		_cookieStore = {
			getCookieValue: function () {}
		};
	});	

	it('sets the text of the element to the value of ITEMCOUNT in the AS_CART cookie', function () {
		spyOn(_cookieStore, 'getCookieValue').and.callFake(function (cookieName, cookieKey) {
			return _getCookieValue(cookieKey, '3');
		});
		_cut(_elements, _cookieStore);
		expect($(_elements[0]).text()).toBe('3');
		expect($(_elements[1]).text()).toBe('3');
	});

	it('sets the text of the element to 0 if the ITEMCOUNT cookie is missing', function () {
	    spyOn(_cookieStore, 'getCookieValue').and.callFake(function (cookieName, cookieKey) {
	        return _getCookieValue(cookieKey, '');
	    });
	    _cut(_elements, _cookieStore);
	    expect($(_elements[0]).text()).toBe('0');
	    expect($(_elements[1]).text()).toBe('0');
	});

});
