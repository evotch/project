var hf = window.hf || {};
hf.setOpenWindowCenter = function (elements) {
    for (var i = 0; i < elements.length; i++) {
        elements[i].addEventListener('click', function (e) {
            e.preventDefault();
            var w = 475,
            h = 425,
            left = (screen.width / 2) - (w / 2),
            top = (screen.height / 2) - (h / 2),
            features = 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, '
            + 'copyhistory=no, ' + 'width=' + w + ', height=' + h + ', top=' + top + ', left=' + left;
            window.open(this.getAttribute('href'), this.getAttribute('data-title'), features);
        });
    }
};