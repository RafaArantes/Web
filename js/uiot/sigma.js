var Sigma = function () {

    // these are just some preliminary settings
    var uiotGraph = {
        nodes: [],
        edges: []
    };

    var uiotSigma = new sigma({
        graph: uiotGraph,
        renderer: {
            container: 'uiot-graph',
            type: 'canvas'
        },
        settings: {
            defaultNodeColor: '#19C0FF',
            defaultEdgeColor: '#2976BB',
            mouseWheelEnabled: false,
            doubleClickEnable: false,
            mouseInertiaRatio: 3,
            maxEdgeSize: 15,
            maxNodeSize: 30,
            defaultLabelColor: '#666',
            font: 'Open Sans',
            edgeColor: 'source',
            drawEdges: true,
            doubleClickZoomingRatio: 1,
            animationsTime: 400000,
            sideMargin: 1
        }
    });

    uiotSigma.bind('doubleClickNode', function (e) {
        $('#reveal-' + e.data.node.id).foundation('reveal', 'open');
    });

    sigma.parsers.json('http://uiot_site/json/sigma-data.json', uiotSigma, function () {

        // Refresh the display:
        uiotSigma.refresh();

        // Initialize the dragNodes plugin:
        var dragListener = sigma.plugins.dragNodes(uiotSigma, uiotSigma.renderers[0]);
    });
};