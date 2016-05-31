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
            defaultNodeColor: '#cc7691',
            defaultEdgeColor: '#cc7691',
            mouseWheelEnabled: false,
            doubleClickEnable: false,
            mouseInertiaRatio: 3,
            maxEdgeSize: 15,
            maxNodeSize: 30,
            defaultLabelColor: '#666',
            font: 'proxima-nova',
            edgeColor: 'default',
            drawEdges: true,
            doubleClickZoomingRatio: 1,
            animationsTime: 0,
            sideMargin: 1,
            enableCamera: false,
            scalingMode: 'inside'
        }
    });

    uiotSigma.bind('doubleClickNode', function (e) {
        $('#reveal-' + e.data.node.id).foundation('reveal', 'open');
    });

    sigma.parsers.json('https://uiotassets.blob.core.windows.net/assets/json/sigma-data.json', uiotSigma, function () {

        // Refresh the display:
        uiotSigma.refresh();

        // Initialize the dragNodes plugin:
        sigma.plugins.dragNodes(uiotSigma, uiotSigma.renderers[0]);
    });
};