<?php

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getSelfUrl() {
    return htmlspecialchars(dirname($_SERVER['PHP_SELF']));
}

function home_path($path) {
    return "http://localhost/tshirt_store/" . $path;
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

