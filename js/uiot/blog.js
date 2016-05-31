function blogResize() {

    var blogElement = document.getElementById('blog_frame');

    // If Blog Element Exists Update their Data
    if (blogElement) {
        blogElement.height = blogElement.contentWindow.document.body.scrollHeight + "px";
        blogElement.width = blogElement.contentWindow.document.body.offsetWidth + "px";
    }

    // Scroll
    jQuery(window).on("scroll", function () {
        jQuery(".scroll-message").is(":visible") && jQuery(".scroll-message").fadeOut(300);
    });
}