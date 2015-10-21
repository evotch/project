var hf = window.hf || {};
hf.detectSignIn = function (elements, ajax, signedInTrueCallback) {
    var cacheBuster = (new Date()).getTime();
	ajax.makeCall({
	    url: '//www.alaskaair.com/services/v1/loginvalidator?t=' + cacheBuster,
		success: function (data) {
			if (data === 'true') {
			    addClassToElements('signed-in-true');
			    (signedInTrueCallback || Function)();
			} else {
			    addClassToElements('signed-in-false');
			}
		},
		error: function () {
		    addClassToElements('signed-in-false');
		    addClassToElements('signed-in-error');
		}
	});

	function addClassToElements(className) {
	    for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add(className)
	    }
	}

};