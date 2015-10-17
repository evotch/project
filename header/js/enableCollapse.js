var hf = window.hf || {};
hf.enableCollapse = function (elements) {
    for (var x = 0; x < elements.length; x += 1) {
        elements[x].onclick = function (e) {
            e.preventDefault();

            var target = e.target;

            while (target != null && target.nodeName.toLowerCase() !== 'a') {
                target = target.parentNode;
            }

            var contentId = target.getAttribute('href').substr(1);

            target.parentElement.classList.toggle('collapsed');
            document.getElementById(contentId).classList.toggle('collapse');
        }
    }
};