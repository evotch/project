var hf = window.hf || {};
hf.disableOnSubmit = function (elements, doc) {
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('submit', function () {
            var disableMe = doc.getElementById(this.getAttribute('data-disable-on-submit-id'));
            if (disableMe) {
                disableMe.setAttribute('disabled', 'disabled');

                var disableText = disableMe.getAttribute('data-disable-text');
                if (disableText) {
                    disableMe.innerText = disableText;
                }
            }
        });
    }
};