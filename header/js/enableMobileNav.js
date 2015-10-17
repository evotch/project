var hf = window.hf || {};
hf.enableMobileNav = function (mobileToggle, mobileMenu) {
    var isMenuOpen = false;

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', function (e) {
            e.stopPropagation();
            e.preventDefault();

            if (mobileMenu.classList.contains('hidden')) {

                // Toggling animation and display at the same time might cause the display to toggle during the animation.
                // This can cause the animation to abort and pop into position.
                mobileMenu.classList.remove('hidden');
                setTimeout(toggleMenu, 50);
            } else {
                toggleMenu();
            }
        });

        var DISMISS_EVENT = (window.hasOwnProperty && window.hasOwnProperty('ontouchstart')) ? 'touchstart' : 'mousedown';
        function handleInteractionOutsideOpenMenu(e) {
            var target = e.target || window.event.srcElement;
            if (!mobileMenu.contains(target) && !mobileToggle.contains(target) && isMenuOpen) {
                closeMenu();
            }
        }

        function toggleMenu() {
            mobileMenu.classList.toggle('open');
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                document.addEventListener(DISMISS_EVENT, handleInteractionOutsideOpenMenu);
            }
            else {
                document.removeEventListener(DISMISS_EVENT, handleInteractionOutsideOpenMenu);
            }
        }

        function closeMenu() {
            mobileMenu.classList.remove('open');
            isMenuOpen = false;
            document.removeEventListener(DISMISS_EVENT, handleInteractionOutsideOpenMenu);
        }

        mobileMenu.addEventListener('transitionend', addHiddenAttribute, false);
        mobileMenu.addEventListener('webkitTransitionEnd', addHiddenAttribute, false);
        function addHiddenAttribute() {
            if (!mobileMenu.classList.contains('open')) {
                mobileMenu.classList.add('hidden');
            }
        }
    }

};