/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.detectSignIn', function () {

	var _cut, _elements, _fakeAjax;

	beforeEach(function () {
	    _cut = window.hf.detectSignIn;
	    _elements = [];
		_elements.push(document.createElement('div'));
		_elements.push(document.createElement('div'));
		 _fakeAjax = {
		 	makeCall: function (options) {
		 		this.succeed = options.success;
		 		this.fail = options.error;
		 	}
		 };
	});	

	it('should add signed-in-true to the passed in elements if the ajax call returns true', function () {
		_cut(_elements, _fakeAjax);
		_fakeAjax.succeed('true');
		expect($(_elements[0]).hasClass('signed-in-true')).toBe(true);
		expect($(_elements[1]).hasClass('signed-in-true')).toBe(true);
	});

	it('should add signed-in-false to the passed in elements if the ajax call returns something other than true', function () {
		_cut(_elements, _fakeAjax);
		_fakeAjax.succeed('false');
		expect($(_elements[0]).hasClass('signed-in-false')).toBe(true);
		expect($(_elements[1]).hasClass('signed-in-false')).toBe(true);
	});

	it('should add signed-in-error to the passed in elements if the ajax call errors', function () {
		_cut(_elements, _fakeAjax);
		_fakeAjax.fail();
		expect($(_elements[0]).hasClass('signed-in-error')).toBe(true);
		expect($(_elements[1]).hasClass('signed-in-error')).toBe(true);
	});

	it('should execute isSignedInCallback if the ajax call returns true', function () {
	    var a = { signedInTrueCallback: function () { } };
	    spyOn(a, 'signedInTrueCallback');
	    _cut(_elements, _fakeAjax, a.signedInTrueCallback);
	    _fakeAjax.succeed('true');
	    expect(a.signedInTrueCallback).toHaveBeenCalled();
	});
});
