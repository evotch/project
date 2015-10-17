/*global describe, beforeEach, spyOn, expect, it, Cookies, headerfooter */

describe('ASWebHeaderFooterLib.v3.disableOnSubmit', function () {

    var _cut, _document;
    var _forms = [];
    var _buttons = [];

    beforeEach(function () {
        _cut = window.hf.disableOnSubmit;

        _document = document.implementation.createHTMLDocument('test');
        _forms = [];
        _buttons = [];
        createForm(_document, 'someButton', 'someButton');
    });

    it('should not affect another form\'s elements when submitting', function () {
        createForm(_document, 'someButton2', 'someButton2');
        _cut(_forms, _document);
        submitForm(_forms[1]);
        expect($(_buttons[0]).is(':disabled')).toBe(false);
        expect($(_buttons[1]).is(':disabled')).toBe(true);
    });

    it('should add the disabled property to the element specified by the data-disable-id attribute', function () {
        _cut(_forms, _document);
        submitForm(_forms[0]);
        expect($(_buttons[0]).is(':disabled')).toBe(true);
    });

    it('should not add the disabled property to the element specified by the data-disable-id attribute if the form is not submitted', function () {
        _cut(_forms, _document);
        expect($(_buttons[0]).is(':disabled')).toBe(false);
    });

    it('should not add the disabled property to the element specified by the data-disable-id attribute if the target id is not found', function () {
        _document = document.implementation.createHTMLDocument('test');
        _forms = [];
        _buttons = [];
        createForm(_document, 'someButton', 'someOtherButton');

        _cut(_forms, _document);
        submitForm(_forms[0]);
        expect($(_buttons[0]).is(':disabled')).toBe(false);
    });

    it('should change the text of the disabled element to the data-disable-text attribute', function () {
        _buttons[0].setAttribute('data-disable-text', 'Processing...');
        _cut(_forms, _document);
        submitForm(_forms[0]);
        expect($(_buttons[0]).text()).toBe('Processing...');
    });

    it('should not change the text of the disabled element if the data-disable-text attribute is not set', function () {
        _cut(_forms, _document);
        submitForm(_forms[0]);
        expect($(_buttons[0]).text()).toBe('hi');
    });

    function submitForm(form) {
        var event = new Event('submit'); // This doesn't work in PhantomJS 1.9.x. Supposedly fixed in 2.x, but 2.x is not in NPM.
        form.dispatchEvent(event);
    }

    function createForm(doc, disableSubmitID, buttonID) {
        var form = document.createElement('form');
        form.setAttribute('data-disable-on-submit-id', disableSubmitID);
        _forms.push(form);

        var button = document.createElement('button');
        button.setAttribute('id', buttonID);
        button.innerText = 'hi';
        _buttons.push(button);

        doc.body.appendChild(form);
        doc.body.appendChild(button);
        form.appendChild(button);
    }

});