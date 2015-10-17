/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.setRememberMe', function () {

    var _cut, _cookieStore, _setDisplayNameFn, _usernameElements, _rememberMeCheckboxes;

    var _getCookieValue = function (cookieKey, rememberMe, uid) {
        if (cookieKey === "REMEMBERME") {
            return (rememberMe || '');
        }
        if (cookieKey === "UID") {
            return (uid || '');
        }
        return "";
    }

    beforeEach(function () {
        _cut = window.hf.setRememberMe;
        _setDisplayNameFn = { exec: function () { } };
        _usernameElements = []
        _usernameElements.push(document.createElement('input'));
        _usernameElements.push(document.createElement('input'));
        _rememberMeCheckboxes = [];
        _rememberMeCheckboxes.push(document.createElement('input'));
        _rememberMeCheckboxes[0].setAttribute('type', 'checkbox');
        _rememberMeCheckboxes.push(document.createElement('input'));
        _rememberMeCheckboxes[1].setAttribute('type', 'checkbox');
        _cookieStore = {
            getCookieValue: function () { }
        };
    });

    describe('when remember me is set to true', function () {
        it('calls setDisplayName', function () {
            spyOn(_setDisplayNameFn, 'exec');
            spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
                return _getCookieValue(cookieKey, 'true');
            });
            _cut(_cookieStore, _setDisplayNameFn.exec, _usernameElements, _rememberMeCheckboxes);
            expect(_setDisplayNameFn.exec).toHaveBeenCalled();
        });

        it('calls setDisplayName, case insenstive', function () {
            spyOn(_setDisplayNameFn, 'exec');
            spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
                return _getCookieValue(cookieKey, 'tRUe');
            });
            _cut(_cookieStore, _setDisplayNameFn.exec, _usernameElements, _rememberMeCheckboxes);
            expect(_setDisplayNameFn.exec).toHaveBeenCalled();
        });

        it('sets the username elements to the UID value in the cookie', function () {
            spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
                return _getCookieValue(cookieKey, 'true', 'testPerson');
            });
            _cut(_cookieStore, _setDisplayNameFn.exec, _usernameElements, _rememberMeCheckboxes);
            expect(_usernameElements[0].value).toBe('testPerson');
            expect(_usernameElements[1].value).toBe('testPerson');
        });

        it('checks the remember me checkboxes', function () {
            spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
                return _getCookieValue(cookieKey, 'true', 'testPerson');
            });
            _cut(_cookieStore, _setDisplayNameFn.exec, _usernameElements, _rememberMeCheckboxes);
            expect(_rememberMeCheckboxes[0].getAttribute('checked')).toBe('checked');
            expect(_rememberMeCheckboxes[1].getAttribute('checked')).toBe('checked');
        });
    });

    describe('when remember me is set to false', function () {
        it('does not call setDisplayName if remember me', function () {
            spyOn(_setDisplayNameFn, 'exec');
            spyOn(_cookieStore, "getCookieValue").and.callFake(function (cookieName, cookieKey) {
                return _getCookieValue(cookieKey, 'false');
            });
            _cut(_cookieStore, _setDisplayNameFn.exec, _usernameElements, _rememberMeCheckboxes);
            expect(_setDisplayNameFn.exec).not.toHaveBeenCalled();
        });
    });

});
