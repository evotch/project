var hf = window.hf || {};
hf.ajax = {
	makeCall: function (options) {
		var modernAjaxRequest = function (options) {
		    var request = new XMLHttpRequest();
		    request.open(options.method || "GET", options.url);
		    request.withCredentials = true;
		    for (var i = 0; options.headers && i < options.headers.length; i++) {
		        request.setRequestHeader(options.headers[i].key, options.headers[i].value);
		    }
			request.onreadystatechange = function () {
				if (request.readyState === 4) {
					if (request.status === 200) {
						(options.success(request.responseText) || Function)();
					} else {
						(options.error(request.responseText, request.status) || Function)();
					}
					(options.complete || Function)();
				}
			};
			request.send();
		};

		// For IE8
		var xdomainRequest = function (options) {
			var xdr = new XDomainRequest();
			xdr.onload = function() {
				(options.success(xdr.responseText) || Function)();
			};
			xdr.onerror = function () {
				(options.error(xdr.responseText) || Function)();
			};
			xdr.open(options.method || "GET", options.url);
			xdr.send();
		}

		if (window.XDomainRequest && options.url.indexOf(window.location.host) === -1) {
			xdomainRequest(options);
		} else {
			modernAjaxRequest(options);
		}
	}
};
