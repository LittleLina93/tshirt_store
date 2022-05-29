<?php

require_once "../config/db.php";

function insertArticle($article) {
    global $db_default_connection;
    if (isset($article['tel'])) {
        $query = "INSERT INTO contact(nom, prenom, email, tel) VALUES(:nom, :prenom, now(), :image)";
    } else {
        $query = "INSERT INTO contact(nom, prenom, creation_date) VALUES(:nom, :prenom, now())";
    }
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute($article);
    return $stmt;
}