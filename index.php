<?php

require_once '../helpers/auth-helper.php';

redirect('./accueil', true);

$categorie = getCategorie();


?>

<!DOCTYPE html>
<html lang="fr">
<?php $title="Accueil"; require "./head.php"; ?>
<body>
    <?php require "./header.php"; ?>

    <?php require "./footer.php"; ?>
</body>
</html>