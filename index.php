<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
    <?= file_get_contents('web_include_asap_uiot/index/main.html') ?>
    <?= file_get_contents('web_include_asap_uiot/index/ideas.html') ?>
    <?= file_get_contents('web_include_asap_uiot/index/think.html') ?>
    <?= file_get_contents('web_include_asap_uiot/index/academics.html') ?>
    <?= file_get_contents('web_include_asap_uiot/index/blog.html') ?>
    <?= file_get_contents('web_include_asap_uiot/index/partners.html') ?>
    <?= file_get_contents('web_include_asap_uiot/footer.html') ?>
<script src="https://uiot.azurewebsites.net/js/vendor/jquery.js"></script>
<script src="https://uiot.azurewebsites.net/js/foundation.min.js"></script>
<script>
    jQuery(document).foundation();
</script>
<script src="https://uiot.azurewebsites.net/js/uiot/blog.js"></script>
<script src="https://uiot.azurewebsites.net/js/uiot/uiot.js"></script>
<script>
    UIoT();
</script>
<script src="https://uiot.azurewebsites.net/js/uiot/analytics.js"></script>
<script>
    Analytics();
</script>
</body>
</html>
