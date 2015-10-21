var hf = window.hf || {};
hf.setFocusTrap = function (elements) {

    var KEY_CODES = {
        TAB: 9,
        UP: 38,
        DOWN: 40,
        ESC: 27
    };

    var setKeyboardNavigation = function (els) {
        listenForModalKeyboardNavigation(els[0], els[els.length - 1], KEY_CODES.UP);
        listenForModalKeyboardNavigation(els[els.length - 1], els[0], KEY_CODES.DOWN);
    };

    var listenForModalKeyboardNavigation = function (currentElement, focusTarget, keyCode) {
        var isShift = keyCode === KEY_CODES.UP;
        currentElement.addEventListener('keydown', function (e) {
            if ((e.keyCode === KEY_CODES.TAB && (isShift ? e.shiftKey : !e.shiftKey))) {
                focusTarget.focus();
                e.preventDefault();
                return false;
            }
        });
    };

    var querySelector = 'input, button, a';
    for (var i = 0; i < elements.length; i++) {
        setKeyboardNavigation(elements[i].querySelectorAll(querySelector));
    }

};
