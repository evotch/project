var hf = window.hf;

var hfContainers = document.getElementsByClassName('hf');
hf.removeForWebCheckin(document.getElementsByClassName('web-checkin-remove'), window.location.hostname);
var execSetDisplayName = function () {
    hf.setDisplayName(document.getElementsByClassName('populate-display-name'), hf.cookieStore, false);
};
hf.enableCollapse(document.getElementsByClassName('hf-collapse'));
hf.setRememberMe(hf.cookieStore, execSetDisplayName, document.getElementsByClassName('usernameInput'), document.getElementsByClassName('rememberMeInput'));
hf.detectSignIn(hfContainers, hf.ajax, execSetDisplayName);
hf.enableMobileNav(document.getElementById('hf-nav-mobile-toggle'), document.getElementById('nav-mobile-menu'));
hf.disableOnSubmit(document.querySelectorAll('[data-disable-on-submit-id]'), document);
hf.setCartCount(document.getElementsByClassName('cart-count'), hf.cookieStore);
hf.setSuperUser(hfContainers, hf.cookieStore);
hf.setCanada(hfContainers, hf.ajax, sessionStorage, window.location.search);
hf.enableArrowNav(document.getElementsByClassName('hf-arrow-nav'));
hf.setFocusTrap(document.getElementsByClassName('hf-focus-trap'));
hf.setOpenWindowCenter(document.getElementsByClassName('open-window-center'));
hf.enableLaunchJenn(document.getElementsByClassName('launch-jenn'));
hf.showLanguageLink();
hf.addNoPrintForWebCheckin(document.querySelectorAll('[no-print-web-checkin]'), window.location.hostname);