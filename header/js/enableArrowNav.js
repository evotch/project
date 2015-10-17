var hf = window.hf || {};
hf.enableArrowNav = function (elements) {

    var KEY_CODES = {
        TAB: 9,
        UP: 38,
        DOWN: 40,
        ESC: 27
    };

    var setKeyboardNavigation = function (els) {
        els = supportIE8Elements(els);
        var curr, prev, next;

        prev = els[els.length - 1];
        for (var i = 0, len = els.length; i < len; i++) {
            curr = els[i];
            next = i < len - 1 ? els[i + 1] : els[0];

            listenForModalKeyboardNavigation(curr, prev, KEY_CODES.UP);
            listenForModalKeyboardNavigation(curr, next, KEY_CODES.DOWN);

            prev = curr;
        }
    };

    var supportIE8Elements = function (els) {
        var output = [];
        for (var i = 0, len = els.length; i < len; i++) {
            var el = els[i];
            if (el.type !== 'hidden') {
                output.push(el);
            }
        }
        return output;
    };

    var listenForModalKeyboardNavigation = function (currentElement, focusTarget, keyCode) {
        var isShift = keyCode === KEY_CODES.UP;
        currentElement.addEventListener('keydown', function (e) {
            if ((e.keyCode === KEY_CODES.TAB && (isShift ? e.shiftKey : !e.shiftKey)) || e.keyCode === keyCode) {
                focusTarget.focus();
                e.preventDefault();
                return false;
            }
        });
    };


    // if we didn't have to support IE8 we could use this querySelector:
    // var querySelector = 'input:not([type="hidden"]), button, a';
    var querySelector = 'input, button, a';
    for (var i = 0; i < elements.length; i++) {
        setKeyboardNavigation(elements[i].querySelectorAll(querySelector));
    }

};
