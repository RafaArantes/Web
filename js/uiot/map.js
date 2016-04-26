var Map = function () {

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

    window.onload = StartMap();
};