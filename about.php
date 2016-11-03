<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
<?php
    $lan = ($_GET['lang'] == 'br' ? 'br' : 'en');
    
    echo file_get_contents("web_include_asap_uiot/about/$lan/main.html");
    echo file_get_contents("web_include_asap_uiot/about/$lan/tags.html");
    echo file_get_contents("web_include_asap_uiot/about/$lan/manifesto.html");
    echo file_get_contents("web_include_asap_uiot/about/$lan/architecture.html");
    echo file_get_contents("web_include_asap_uiot/about/$lan/team.html");
    echo file_get_contents("web_include_asap_uiot/about/$lan/contact.html");
    echo file_get_contents("web_include_asap_uiot/about/$lan/subscribe.html");
    echo file_get_contents("web_include_asap_uiot/footer.html");
    echo file_get_contents("web_include_asap_uiot/about/modals/users.html");
    echo file_get_contents("web_include_asap_uiot/about/modals/project.html");
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
<script src="https://uiotassets.blob.core.windows.net/assets/js/sigma/sigma.min.js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/sigma/plugins/sigma.plugins.dragNodes.min.js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/sigma/plugins/sigma.parsers.json.min.js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/uiot/sigma.js"></script>
<script>
    Sigma();
</script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/vendor/markerwithlabel.js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/uiot/map.js"></script>
<script>
    Map();
</script>
</body>
</html>
