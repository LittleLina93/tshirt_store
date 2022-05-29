<?php

require_once "../config/db.php";

function getCategorie($page) {
    global $db_default_connection;
    $offset = ($page-1) * ROW_PER_PAGE;
    $query = "SELECT id, title, creationDate FROM categorie LIMIT {$offset}, " . ROW_PER_PAGE;
    $stmt = $db_default_connection->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getMappedCategorie($page) {
    $stmt = getCategorie($page);
    $count = $stmt->rowCount();

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

