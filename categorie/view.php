<?php include "../vendors/autoload.php"; ?>
<?php require_once "../helpers/form-helper.php"; ?>

<!DOCTYPE html>
<html lang="fr">
<?php $title = "Catégories";
$site_description = "Vous pouvez trouver ici tous les t-shirt de cette catégories";
require "../head.php"; ?>

<body>
    <?php require "../header.php"; ?>

<?php var_dump($articles) ?>

    <div class="container mt-3">
        <div class="row">
            <?php foreach ($articles as $a) : ?>
                <div class="col-md-4 mb-4">
                    <article class="card">
                        <img src="<?= home_path($a['image']) ?>" alt="Image of <?= $a["title"] ?>" class="card-img-top" />
                        <div class="card-body">
                            <a href="/tshirt-store/articles/index.php?id=<?= $a['id'] ?>">
                                <h5 class="card-title">"<?= $a['title'] ?>"</h5>
                            </a>
                            <p class="card-text"><?= $a['creator'] ?></p>
                            <p class="card-text"><?= $a['price'] ?>€</p>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>


        <?php

        $nbr = 15;
        function expose($nbr, $exp)
        {
            $result = $nbr;

            for ($i = 0; $i < ($exp - 1); $i++) {
                $result = $result * $nbr;
            }

            return $result;
        }

        $number_to_expose = 5;
        $exponant_to_apply = 20;

        $result = expose($number_to_expose, $exponant_to_apply);
        // echo $result;
        // echo '</br>';

        // echo expose(10, 3);
        ?>

        <?php require "../footer.php"; ?>
</body>

</html>