<?php
$websiteRootDir = '';
$websiteRootPath = $_SERVER["DOCUMENT_ROOT"].$websiteRootDir;
$currentPath = dirname(__FILE__);
$websiteLoadPath = '/php/load.php';
require_once($websiteRootPath.$websiteLoadPath);
get_head();?>
<body class="default"><?php
get_header($currentPath);?>
<!-- Todo check page path to load only when required. -->
    <main>
    </main><?php
    get_footer();?>
</body>
</html>