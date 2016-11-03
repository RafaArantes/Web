<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
<?php
    $lan = ($_GET['lang'] == 'br' ? 'br' : 'en');
    
    echo file_get_contents("web_include_asap_uiot/get/$lan/main.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/involved.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/started.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/academics.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/applications.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/devices.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/docs.html");
    echo file_get_contents("web_include_asap_uiot/get/$lan/get.html");
    echo file_get_contents("web_include_asap_uiot/footer.html");
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
