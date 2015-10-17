var hf = window.hf || {};
hf.enableLaunchJenn = function (elements) {
    var hostname = window.location.hostname.toLowerCase();
    var pathname = window.location.pathname.toLowerCase();
    
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add('hidden');
        if (hostname === 'www.alaskaair.com' && pathname.indexOf('/travel-agent') !== 0) {
            elements[i].classList.remove('hidden');
            elements[i].addEventListener('click', function (e) {
                e.preventDefault();
                if (typeof ActiveAgent_LaunchJenn === 'function') {
                    ActiveAgent_LaunchJenn();
                }
            });
        }
    }
};
