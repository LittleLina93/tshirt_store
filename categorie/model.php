<?php

require_once "../config/db.php";

function getCategorie($page) {
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

