var Internet = function () {

    var MapSettings = {
        map_canvas: document.getElementById('map-canvas'),
        map_position: new google.maps.LatLng(-15.7637565, -47.8720101)
    };

    var MapOptions = {
        center: MapSettings.map_position,
        zoom: 17,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        disableDoubleClickZoom: true,
        draggable: true,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var MapStarter = function () {
        return new google.maps.Map(MapSettings.map_canvas, MapOptions);
    };

    var StartMap = function () {

        var Map = MapStarter();

        var Marker = new MarkerWithLabel({
            position: MapSettings.map_position,
            map: Map,
            title: 'UIoT!',
            icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 0
            },
            labelAnchor: new google.maps.Point(10, 10),
            labelClass: 'mark_label'
        });

        return Map;
    };

    var Analytics = function () {
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-72710724-1', 'auto');
        ga('send', 'pageview');
    };

    var Initialize = function () {

        Analytics();

        window.onload = StartMap();
    };

    Initialize();
};