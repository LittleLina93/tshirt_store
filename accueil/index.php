<?php

require "./model.php";

$newest = getNewestArticles();
$random = getRandomArticles();

require "./view.php";
