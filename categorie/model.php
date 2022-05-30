<?php

require_once "../config/db.php";

function getArticles($id)
{
    global $db_default_connection;
    $query = "SELECT * FROM articles JOIN categorie_articles ON categorie_articles.ID_Vetement = articles.id JOIN categorie ON categorie.ID = categorie_articles.ID_Categorie WHERE categorie_articles.ID_Categorie = :id ORDER BY creation_date DESC;";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute(['id' => $id]);
    $count = $stmt->rowCount();

    $articles = [];

    if ($count > 0) {
        // Fetch le prochain article et le sauver dans la variable $article
        while ($article = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_articles = [
                "id" => $article["id"],
                "title" => $article["title"],
                "creator" => $article["creator"],
                "creationDate" => date_create($article["creation_date"]),
                "image" => $article["image"],
                "price" => $article["price"],
                "description" => $article["description"]
            ];
            array_push($articles, $mapped_articles);
        }
    }

    return $articles;
}
