<?php

require_once "../config/db.php";

function get_article_by_id($id) {
    global $db_default_connection;

    $query = "SELECT * FROM articles JOIN categorie_articles ON categorie_articles.ID_Vetement = articles.id JOIN categorie ON categorie.ID = categorie_articles.ID_Categorie WHERE categorie_articles.ID_Categorie = :id ORDER BY creation_date DESC;";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute(['id' => $id]);
    $count = $stmt->rowCount();

    $mapped_articles = [];
    if ($count > 0) {
        while ($article = $stmt->fetch(PDO::FETCH_ASSOC)){
        $mapped_articles = [
            "id" => $article["ID"],
            "nom" => $article["title"],
            "createur" => $article["creator"],
            "date_creation" => $article["creation_date"],
            "image" => $article["image"],
            "prix" => $article["price"],
            "stock" => $article["stock"],
            "description" => $article["description"]
        ];
        array_push($articles, $mapped_articles);
    }
}

    return $mapped_articles;
}