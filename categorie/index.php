<?php
define('ROW_PER_PAGE', 3);

require "./model.php";

$page = 1;
if (!empty($_GET["page"])) {
    $page = (int)$_GET["page"];
}

$categorie_list = getMappedCategorie($page);

require "./view.php";