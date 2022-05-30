<?php

require_once "../config/db.php";

function getArticles() {
    global $db_default_connection;
    $query = "SELECT * FROM articles JOIN categorie_articles ON categorie_articles.ID_Vetement = articles.id JOIN categorie ON categorie.ID = categorie_articles.ID_Categorie ORDER BY creation_date DESC;";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();
    $count = $stmt->rowCount();

    $articles = [];

    if ($count > 0) {
        // Fetch le prochain article et le sauver dans la variable $article
        while($articles = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_articles = [
                "id" => +$articles["id"],
                "title" => $articles["title"],
                "creator" => $articles["creator"],
                "creationDate" => date_create($articles["creation_date"]),
                "image" => $articles["image"]
            ];
            array_push($articles, $mapped_articles);
        }
    }

    return $articles;
}

