<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
    <?= file_get_contents('web_include_asap_uiot/get/main.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/involved.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/started.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/academics.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/applications.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/devices.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/docs.html') ?>
    <?= file_get_contents('web_include_asap_uiot/get/get.html') ?>
    <?= file_get_contents('web_include_asap_uiot/footer.html') ?>
<script src="https://uiotassets.blob.core.windows.net/assets/js/vendor/jquery.js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/foundation.min.js"></script>
<script>
    jQuery(document).foundation();
</script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/uiot/uiot.js"></script>
<script>
    UIoT();
</script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/uiot/analytics.js"></script>
<script>
    Analytics();
</script>
</body>
</html>