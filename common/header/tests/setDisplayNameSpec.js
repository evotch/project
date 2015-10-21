/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.setDisplayName', function () {

	var _cut, _elements, _cookieStore;

	var _getCookieValue = function (cookieKey, fn, nn, su) {
		if (cookieKey === "FN") {
			return (fn || '');
		}
		if (cookieKey === "NN") {
			return (nn || '');	
		}
		if (cookieKey === "SU") {
			return (su || '');
		}
		return "";
	};

	beforeEach(function () {
		_cut = window.hf.setDisplayName;
		_elements = [];
		_elements.push(document.createElement('div'));
		_elements.push(document.createElement('div'));
		$(_elements[0]).text('hi');
		$(_elements[1]).text('there');
		_cookieStore = {
			getCookieValue: function () {}
		};
	});	

	it('sets the nick name if both first name and nick name are defined', function () {
		spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
			return _getCookieValue(cookieKey, 'Richard', 'Rich');
		});
		_cut(_elements, _cookieStore);
		expect($(_elements[0]).text()).toBe("Hi, Rich");
		expect($(_elements[1]).text()).toBe("Hi, Rich");
	});

	it('sets the first name if no nickname is set', function () {
		spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
			return _getCookieValue(cookieKey, 'Richard', null);
		});
		_cut(_elements, _cookieStore);
		expect($(_elements[0]).text()).toBe("Hi, Richard");
		expect($(_elements[1]).text()).toBe("Hi, Richard");
	});

	it('suffixes "(Super User)" to name if the user is a super user', function () {
		spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
			return _getCookieValue(cookieKey, 'Richard', null, 'true');
		});
		_cut(_elements, _cookieStore);
		expect($(_elements[0]).text()).toBe("Hi, Richard (Super User)");
		expect($(_elements[1]).text()).toBe("Hi, Richard (Super User)");
	});

	it('suffixes "(Super User)" to name if the user is a super user, cookie value case insensitive', function () {
		spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
			return _getCookieValue(cookieKey, 'Richard', null, 'tRUe');
		});
		_cut(_elements, _cookieStore);
		expect($(_elements[0]).text()).toBe("Hi, Richard (Super User)");
		expect($(_elements[1]).text()).toBe("Hi, Richard (Super User)");
	});

	it('does not suffix "(Super User)" to name if the user is not a super user', function () {
		spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
			return _getCookieValue(cookieKey, 'Richard', null, 'false');
		});
		_cut(_elements, _cookieStore);
		expect($(_elements[0]).text()).toBe("Hi, Richard");
		expect($(_elements[1]).text()).toBe("Hi, Richard");
	});	

	it('leaves the element text in its original state if there is no cookie', function () {
	    spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
	        return _getCookieValue(cookieKey, null, null, null);
	    });
	    _cut(_elements, _cookieStore);
	    expect($(_elements[0]).text()).toBe("hi");
	    expect($(_elements[1]).text()).toBe("there");
	});
});
