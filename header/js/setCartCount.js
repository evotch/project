var hf = window.hf || {};
hf.setCartCount = function (elements, cookieStore) {
    var itemCount = cookieStore.getCookieValue('AS%5FCART', 'ITEMCOUNT');
    if (!itemCount || itemCount.length === 0) {
        itemCount = '0';
    }

    for (var x = 0; x < elements.length; x += 1) {
        elements[x].innerHTML = itemCount;
    }
}