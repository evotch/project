// Adapted from PureCSS dropdown menu: http://purecss.io/js/menus.js
(function (window, document) {

    'use strict';

    var dropdowns = [];
    var KEY_CODES = {
        TAB: 9,
        UP: 38,
        DOWN: 40,
        ESC: 27
    };

    function PureDropdown(dropdownParent) {

        var ARIA_ROLE = 'role',
        ARIA_HIDDEN = 'aria-hidden',
        ARIA_EXPANDED = 'aria-expanded',
        MENU_CLOSED = 0,
        MENU_OPEN = 1,
        MENU_ACTIVE_SELECTOR = '.pure-menu-active',
        MENU_LINK_SELECTOR = '.pure-menu-link',
        MENU_SELECTOR = '.pure-menu-children',
        OUTSIDE_CLICK_SELECTOR = 'collapse-on-outside-click',
        DISMISS_EVENT = (window.hasOwnProperty &&
            window.hasOwnProperty('ontouchstart')) ?
        'touchstart' : 'mousedown',


            ddm = this; // drop down menu

        this._state = MENU_CLOSED;

        function handleInteractionOutOfMenu(e) {
            var target = e.target || window.event.srcElement;
            var targetIsInDDM = false;
            for (var i = 0; i < dropdowns.length && targetIsInDDM === false; i++) {
                if (dropdowns[i]._link.contains(target) || dropdowns[i]._menu.contains(target)) {
                    targetIsInDDM = true;
                }
            }
            if (!targetIsInDDM) {
                for (var i = 0; i < dropdowns.length; i++) {
                    if (dropdowns[i]._collapseOnOutsideClick) {
                        dropdowns[i].hide();
                    }
                }
            }
        }

        this.show = function () {
            if (this._state !== MENU_OPEN) {
                for (var i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].hide();
                }

                this._dropdownParent.classList.add("pure-menu-active");
                this._menu.setAttribute(ARIA_HIDDEN, false);
                // this._link.setAttribute(ARIA_EXPANDED, true);
                this._state = MENU_OPEN;
                document.getElementsByTagName("body")[0].classList.add('nav-open');
                
                // Dismiss on clicks not in any dropdown
                document.addEventListener(DISMISS_EVENT, handleInteractionOutOfMenu);
            }
        };

        this.hide = function () {
            if (this._state !== MENU_CLOSED) {
                this._dropdownParent.classList.remove("pure-menu-active");
                this._menu.setAttribute(ARIA_HIDDEN, true);
                // this._link.setAttribute(ARIA_EXPANDED, false);
                this._state = MENU_CLOSED;
                document.getElementsByTagName("body")[0].classList.remove('nav-open');
                document.removeEventListener(DISMISS_EVENT, handleInteractionOutOfMenu);
            }
        };

        this.toggle = function () {
            if (this._state === MENU_CLOSED) {
                this.show();
            } else {
                this.hide();
            }
        };

        this.halt = function (e) {
            e.stopPropagation();
            e.preventDefault();
        };

        this._dropdownParent = dropdownParent;
        this._link = this._dropdownParent.querySelector(MENU_LINK_SELECTOR);
        this._menu = this._dropdownParent.querySelector(MENU_SELECTOR);
        this._collapseOnOutsideClick = this._dropdownParent.classList.contains(OUTSIDE_CLICK_SELECTOR);

        // Set ARIA attributes
        this._link.setAttribute('aria-haspopup', 'true');
        this._menu.setAttribute(ARIA_ROLE, 'menu');
        this._menu.setAttribute('aria-labelledby', this._link.getAttribute('id'));
        this._menu.setAttribute(ARIA_HIDDEN, 'true');


        var menuLi = document.querySelectorAll('.pure-menu-has-children li');
        for (var i = 0; i < menuLi.length; i++) {
            menuLi[i].setAttribute(ARIA_ROLE, 'presentation');
        }

        var menuA = document.querySelectorAll('.pure-menu-has-children a');
        for (var i = 0; i < menuA.length; i++) {
            menuA[i].setAttribute(ARIA_ROLE, 'menuitem');
        }

        // Toggle on click
        this._link.addEventListener('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
            ddm.toggle();
        });

        // Keyboard navigation
        document.addEventListener('keydown', function (e) {

            // if the menu isn't active, ignore
            if (ddm._state !== MENU_OPEN) {
                return;
            }

            // if the menu is the parent of an open, active submenu, ignore
            if (ddm._menu.querySelector(MENU_ACTIVE_SELECTOR)) {
                return;
            }

            // Dismiss an open menu on ESC
            if (e.keyCode === KEY_CODES.ESC) {
                ddm._link.focus();
                ddm.halt(e);
                ddm.hide();
            }
        });
    }

    function initDropdowns() {
        var dropdownParents = document.querySelectorAll('.pure-menu-has-children');
        for (var i = 0; i < dropdownParents.length; i++) {
            dropdowns.push(new PureDropdown(dropdownParents[i]));
        }
    }

    initDropdowns();

}(this, this.document)
);
