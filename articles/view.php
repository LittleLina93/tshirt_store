<?php include "../vendors/autoload.php";
require_once "../helpers/form-helper.php";
?>

<!DOCTYPE html>
<html lang="fr">
<?php $title = "Articles";
$site_description = "t-shirt";
require "../head.php"; ?>

<body>
    <?php require "../header.php"; ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 mb-4">
                <article class="card">
                    <img class="card-img-top" src="<?= home_path($article["image"]) ?>" alt="Image of <?= $article["nom"] ?>" />

                    <div class="card-body">
                        <h5 class="card-title"><?= $article["nom"] ?></h5>
                        <p class="card-text"><?= $article["createur"] ?></p>
                        <p class="card-text"><?= $article["description"] ?></p>
                        <p class="card-text"><?= $article["prix"] ?></p>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <?php require "../footer.php"; ?>
</body>

</html>