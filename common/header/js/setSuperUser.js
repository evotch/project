var hf = window.hf || {};
hf.setSuperUser = function (elements, cookieStore) {
    if (cookieStore.getCookieValue('AS%5FNAME', 'SU').toUpperCase() == "TRUE") {
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add('super-user');
        }
    }
};