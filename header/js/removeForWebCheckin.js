var hf = window.hf || {};
hf.removeForWebCheckin = function(elements, hostname) {
    if (hostname.toLowerCase().indexOf('selfservice') !== -1) {
        for (var i = elements.length - 1; i >= 0 ; i--) {
            elements[i].parentNode.removeChild(elements[i]);
        }
    }
}