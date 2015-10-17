var hf = window.hf || {};
hf.setRememberMe = function (cookieStore, setDisplayNameFn, usernameElements, rememberMeCheckboxes) {
    var cookieName = 'AS%5FNAME';

    if (cookieStore.getCookieValue(cookieName, 'REMEMBERME').toLowerCase() === 'true') {
        setDisplayNameFn();
        for (var i = 0, len = usernameElements.length; i < len; i++) {
            usernameElements[i].value = cookieStore.getCookieValue(cookieName, "UID");
        }
        for (var i = 0, len = rememberMeCheckboxes.length; i < len; i++) {
            rememberMeCheckboxes[i].setAttribute('checked', 'checked');
        }
    }
};