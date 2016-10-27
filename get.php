<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
<?php
    if ($_GET['lang'] == 'br'){
        file_get_contents('web_include_asap_uiot/get/br/main.html');
        file_get_contents('web_include_asap_uiot/get/br/involved.html');
        file_get_contents('web_include_asap_uiot/get/br/started.html');
        file_get_contents('web_include_asap_uiot/get/br/academics.html');
        file_get_contents('web_include_asap_uiot/get/br/applications.html');
        file_get_contents('web_include_asap_uiot/get/br/devices.html');
        file_get_contents('web_include_asap_uiot/get/br/docs.html');
        file_get_contents('web_include_asap_uiot/get/br/get.html');
        file_get_contents('web_include_asap_uiot/footer.html');
    }

    else {
        file_get_contents('web_include_asap_uiot/get/en/main.html');
        file_get_contents('web_include_asap_uiot/get/en/involved.html');
        file_get_contents('web_include_asap_uiot/get/en/started.html');
        file_get_contents('web_include_asap_uiot/get/en/academics.html');
        file_get_contents('web_include_asap_uiot/get/en/applications.html');
        file_get_contents('web_include_asap_uiot/get/en/devices.html');
        file_get_contents('web_include_asap_uiot/get/en/docs.html');
        file_get_contents('web_include_asap_uiot/get/en/get.html');
        file_get_contents('web_include_asap_uiot/footer.html');
}
?>

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