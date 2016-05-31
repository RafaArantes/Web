var UIoT = function () {

    var Settings = {
        header_height: jQuery('.header-text').height(),
        pause_button_height: jQuery('.pause-play-button').height(),
        top_bar_height: jQuery('.top-bar').height(),

        window_height: jQuery(window).height(),
        window_width: jQuery(window).width()
    };

    var BackgroundSettings = {
        background_div: jQuery('.background-area'),
        background_images: ['2.jpg'] //['1.jpg', '2.jpg', '3.jpg']
    };

    var Definitions = {
        window_correct_height: Settings.window_height * 0.958,
        window_top_correct_height: (Settings.window_correct_height * 0.25),

        video_height: (Settings.window_height - Settings.top_bar_height),
        video_text_margin: (Settings.window_height / 2) - (Settings.header_height / 2)
    };

    var SizeAdjustment = function () {

        // Set Main Wrapper Height and Margin Top
        jQuery('#main-role').css('height', Definitions.window_correct_height + 'px');
        jQuery('#yeah').css('margin-top', Definitions.window_top_correct_height + 'px');

        // Set Header Wrapper Size
        jQuery('.main-header .services').height(Definitions.video_height);
        jQuery('.header-text').css('margin-top', Definitions.video_text_margin).addClass('active');

        // Get Blog Element
        try {
            blogResize();
        } catch (err) {
            // ignored
        }
    };

    var Scroll = function () {

        jQuery(document).ready(function ($) {
            $('a[href^="#"]').bind('click.smoothscroll', function (e) {
                e.preventDefault();
                var target = this.hash,
                    $target = $(target);

                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top - 40
                }, 900, 'swing', function () {
                    window.location.hash = target;
                });
            });
        });
    };

    // Background Of Page
    var Background = function () {

        // If Background Element Exists. Update Image
        if (BackgroundSettings.background_div) {
            BackgroundSettings.background_div.css('background', '#161616 url(https://uiotassets.blob.core.windows.net/assets/img/welcome/' + BackgroundSettings.background_images[Math.floor(Math.random() * BackgroundSettings.background_images.length)] + ') no-repeat fixed center top');
        }
    };

    var Triggers = function () {

        jQuery(window).on('resize', function () {
            SizeAdjustment();
        }).trigger('resize');
    };

    var Initialize = function () {

        SizeAdjustment();

        Scroll();

        Background();

        Triggers();

    };

    Initialize();
};
