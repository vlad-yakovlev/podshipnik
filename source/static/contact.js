'use strict';


window.mapSet = function () {
    const contentWrapBLock = document.getElementById('content-wrap');

    const mapWrapBLock = document.createElement('section');
    mapWrapBLock.className = 'map';
    contentWrapBLock.appendChild(mapWrapBLock);

    const mapBlock = document.createElement('div');
    mapWrapBLock.appendChild(mapBlock);

    window.map = new google.maps.Map(mapBlock, {
        center: new google.maps.LatLng(47.2449, 39.7368),
        zoom: 15,
        mapTypeControl: false,
        streetViewControl: false
    });

    new google.maps.Marker({
        position: new google.maps.LatLng(47.2442, 39.7368),
        map: window.map
    });
};


window.addEventListener('resize', function () {
    if ( ! window.map) return;

    var center = window.map.getCenter();
    setTimeout(function () {
        window.map.setCenter(center);
    }, 0)
});