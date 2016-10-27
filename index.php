<!doctype html>
<html>
    <?= file_get_contents('web_include_asap_uiot/header.html') ?>
<body>
<?php
    if ($_GET['lang'] == 'br'){
        file_get_contents('web_include_asap_uiot/index/br/main.html');
        file_get_contents('web_include_asap_uiot/index/br/ideas.html');
        file_get_contents('web_include_asap_uiot/index/br/think.html');
        file_get_contents('web_include_asap_uiot/index/br/academics.html');
        file_get_contents('web_include_asap_uiot/index/br/blog.html');
        file_get_contents('web_include_asap_uiot/index/br/partners.html');
        file_get_contents('web_include_asap_uiot/footer.html');
    }

    else {
        file_get_contents('web_include_asap_uiot/index/en/main.html');
        file_get_contents('web_include_asap_uiot/index/en/ideas.html');
        file_get_contents('web_include_asap_uiot/index/en/think.html');
        file_get_contents('web_include_asap_uiot/index/en/academics.html');
        file_get_contents('web_include_asap_uiot/index/en/blog.html');
        file_get_contents('web_include_asap_uiot/index/en/partners.html');
        file_get_contents('web_include_asap_uiot/footer.html');
    }
    
?>

<script src="https://uiotassets.blob.core.windows.net/assets/js/vendor/jquery.js"></script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/foundation.min.js"></script>
<script>
    jQuery(document).foundation();
</script>
<script src="https://uiotassets.blob.core.windows.net/assets/js/uiot/blog.js"></script>
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
