<?php
define('ROW_PER_PAGE', 6);

require "./model.php";

$page = 1;
if (!empty($_GET["page"])) {
    $page = (int)$_GET["page"];
}

$articles = getArticles();

require "./view.php";