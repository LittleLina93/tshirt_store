<?php

require_once "../config/db.php";

function insertArticle($article) {
    global $db_default_connection;
    if (isset($article['image'])) {
        $query = "INSERT INTO articles(title, creator, creation_date, image) VALUES(:title, :creator, now(), :image)";
    } else {
        $query = "INSERT INTO articles(title, creator, creation_date) VALUES(:title, :creator, now())";
    }
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute($article);
    return $stmt;
}
