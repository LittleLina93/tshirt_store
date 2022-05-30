<?php

require "./model.php";

$articles = get_article_by_id($_GET['id']);

require "./view.php";
