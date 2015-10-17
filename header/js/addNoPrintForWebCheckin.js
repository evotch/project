var hf = window.hf || {};
hf.addNoPrintForWebCheckin = function(elements, hostname) {
    if (hostname.toLowerCase().indexOf('selfservice') !== -1) {
        for (var i = 0, len = elements.length; i < len; i++) {
            elements[i].classList.add('no-print');
        }
    }
}