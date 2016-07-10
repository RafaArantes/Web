<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
    <?= file_get_contents('web_include_asap_uiot/about/main.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/tags.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/manifesto.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/architecture.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/team.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/contact.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/subscribe.html') ?>
    <?= file_get_contents('web_include_asap_uiot/footer.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/modals/users.html') ?>
    <?= file_get_contents('web_include_asap_uiot/about/modals/project.html') ?>
<script src="https://uiot.azurewebsites.net/js/vendor/jquery.js"></script>
<script src="https://uiot.azurewebsites.net/js/foundation.min.js"></script>
<script>
    jQuery(document).foundation();
</script>
<script src="https://uiot.azurewebsites.net/js/uiot/uiot.js"></script>
<script>
    UIoT();
</script>
<script src="https://uiot.azurewebsites.net/js/uiot/analytics.js"></script>
<script>
    Analytics();
</script>
<script src="https://uiot.azurewebsites.net/js/sigma/sigma.min.js"></script>
<script src="https://uiot.azurewebsites.net/js/sigma/plugins/sigma.plugins.dragNodes.min.js"></script>
<script src="https://uiot.azurewebsites.net/js/sigma/plugins/sigma.parsers.json.min.js"></script>
<script src="https://uiot.azurewebsites.net/js/uiot/sigma.js"></script>
<script>
    Sigma();
</script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="https://uiot.azurewebsites.net/js/vendor/markerwithlabel.js"></script>
<script src="https://uiot.azurewebsites.net/js/uiot/map.js"></script>
<script>
    Map();
</script>
</body>
</html>