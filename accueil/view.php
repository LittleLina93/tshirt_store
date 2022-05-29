<!DOCTYPE html>
<html lang="fr">
<?php $title="Accueil"; $site_description="Accueil"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>

    <div class="container mt-3">
        <div class="row">
            <?php foreach($newest as $n): ?>
                <div class="col-md-4 mb-4">
                    <article class="card">
                      <img src="<?=home_path($n['image']) ?>" alt="Image of <?= $n["title"] ?>"class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title">"<?= $n['title'] ?>"</h5>
                            <p class="card-text"><?= $n['creator'] ?></p>
                            <p class="card-text"><?= $n['price'] ?>€</p>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
    
            <?php foreach ($random as $r) : ?>
              <div class="col-md-4 mb-4">
                    <article class="card">
                      <img src="<?=home_path($r['image']) ?>" alt="Image of <?= $r["title"] ?>"class="card-img-top" />
                        <div class="card-body">
                            <h5 class="card-title">"<?= $r['title'] ?>"</h5>
                            <p class="card-text"><?= $r['creator'] ?></p>
                            <p class="card-text"><?= $n['price'] ?>€</p>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
            
        </div>
    </div>
    <?php require "../footer.php"; ?>
</body>
</html>
