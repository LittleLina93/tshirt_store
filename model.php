<?php require_once "./config/db.php";

function getNewestArticles() {
    global $db_default_connection;
    $query = "SELECT id, title, creator, creation_date, image FROM articles ORDER BY creation_date DESC LIMIT 3 ";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();
    $count = $stmt->rowCount();

    $articles = [];

    if ($count > 0) {
        // Fetch le prochain article et le sauver dans la variable $article
        while($article = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_article = [
                "id" => +$article["id"],
                "title" => $article["title"],
                "creator" => $article["creator"],
                "creationDate" => date_create($article["creation_date"]),
                "image" => $article["image"]
            ];
            array_push($articles, $mapped_article);
        }
    }

    return $articles;
}

function getRandomArticles() {
    global $db_default_connection;
    $query = "SELECT id, title, creator, creation_date, image FROM articles ORDER BY RAND() LIMIT 3 ";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();
    $count = $stmt->rowCount();

    $articles = [];

    if ($count > 0) {
        // Fetch le prochain article et le sauver dans la variable $article
        while($article = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_article = [
                "id" => +$article["id"],
                "title" => $article["title"],
                "creator" => $article["creator"],
                "creationDate" => date_create($article["creation_date"]),
                "image" => $article["image"]
            ];
            array_push($articles, $mapped_article);
        }
    }

    return $articles;
}

function getCategorie() {
    global $db_default_connection;
    $query = "SELECT id, title, creationDate FROM categorie";
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();
    $count = $stmt->rowCount();
    return $stmt;

    $categorie = [];

    if ($count > 0) {
        // Fetch le prochain article et le sauver dans la variable $article
        while($categorie = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mapped_categorie = [
                "id" => +$categorie["id"],
                "nom" => $categorie["title"],
                "creationDate" => date_create($categorie["creationDate"])
            ];
            array_push($categorie, $mapped_categorie);
        }
    }

    return $categorie;
}
