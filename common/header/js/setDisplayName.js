var hf = window.hf || {};
hf.setDisplayName = function (elements, cookieStore) {
    var cookieName = 'AS%5FNAME';

	var firstName      = cookieStore.getCookieValue(cookieName, 'FN');
	var nickname       = cookieStore.getCookieValue(cookieName, 'NN');
	var isSuperUser    = cookieStore.getCookieValue(cookieName, 'SU').toLowerCase() === "true";
	var displayName    = (nickname || firstName);
	if (displayName) {
	    if (isSuperUser) {
	        displayName += ' (Super User)';
	    }
	    for (var i = 0, len = elements.length; i < len; i++) {
	        elements[i].innerHTML = 'Hi, ' + displayName;
	    }
	}
};