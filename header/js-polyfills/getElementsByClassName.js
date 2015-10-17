// Add a getElementsByClassName function if the browser doesn't have one
// Limitation: only works with one class name
// Copyright: Eike Send http://eike.se/nd
// License: MIT License

if (!document.getElementsByClassName) {
	document.getElementsByClassName = function (search) {
		return document.querySelectorAll("." + search); // IE 8
	};
}

if (!window.Element.prototype.getElementsByClassName) {
	window.Element.prototype.getElementsByClassName = function (search) {
		return this.querySelectorAll('.' + search);
	};
}
