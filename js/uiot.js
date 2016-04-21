var UIoT = function () {

    var Settings = {
        header_height: jQuery('.header-text').height(),
        pause_button_height: jQuery('.pause-play-button').height(),
        top_bar_height: jQuery('.top-bar').height(),

        window_height: jQuery(window).height(),
        window_width: jQuery(window).width()
    };

    var BackgroundSettings = {
        background_div: jQuery('.video-area'),
        background_images: ['1.jpg', '2.jpg', '3.jpg']
    };

    var Definitions = {
        window_correct_height: Settings.window_height * 0.98,
        window_top_correct_height: (Settings.window_correct_height * 0.25),

        video_height: (Settings.window_height - Settings.top_bar_height),
        video_text_margin: (Settings.window_height / 2) - (Settings.header_height / 2)
    };

    var ResizeAdjustment = function () {

        // Set Video Wrapper Size
        jQuery('#videoBackground, #videoBackgroundLoop').css({
            height: 'auto',
            width: '100%'
        });
    };

    var SizeAdjustment = function () {

        // Set Main Wrapper Height and Margin Top
        jQuery('#main-role').css('height', Definitions.window_correct_height + 'px');
        jQuery('#yeah').css('margin-top', Definitions.window_top_correct_height + 'px');

        // Set Header Wrapper Size
        jQuery('.main-header .services').height(Definitions.video_height);
        jQuery('.header-text').css('margin-top', Definitions.video_text_margin).addClass('active');
    };

    var Background = function () {
        BackgroundSettings.background_div.css('background', '#161616 url(https://uiot.azurewebsites.net/img/welcome/' + BackgroundSettings.background_images[Math.floor(Math.random() * BackgroundSettings.background_images.length)] + ') no-repeat fixed center top');
    };

    var ResizeBlog = function () {

        var blogElement = document.getElementById('blog_frame');

        var newHeight, newWidth;

        if (blogElement) {

            newHeight = blogElement.contentWindow.document.body.scrollHeight;
            newWidth = blogElement.contentWindow.document.body.scrollWidth;
        }

        blogElement.height = (newHeight) + "px";
        blogElement.width = (newWidth) + "px";
    };

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
            //console.log("Clicked: " + e.data.node.id);
        });

        sigma.parsers.json('https://uiot.azurewebsites.net/json/sigma-data.json', uiotSigma, function () {

            // Refresh the display:
            uiotSigma.refresh();

            // Initialize the dragNodes plugin:
            var dragListener = sigma.plugins.dragNodes(uiotSigma, uiotSigma.renderers[0]);

            //dragListener.bind('dragend startdrag', function (event) {
            //    //console.log("Nome: " +  event.data.node.label + " X: " + event.data.node.x + " Y: " + event.data.node.y);
            //});
        });
    };

    var Triggers = function () {

        jQuery(window).on('resize', function () {

            ResizeAdjustment();

            ResizeBlog();

        }).trigger('resize');
    };

    var Initialize = function () {

        SizeAdjustment();

        ResizeBlog();

        Background();

        Triggers();

        Sigma();

    };

    Initialize();
};
