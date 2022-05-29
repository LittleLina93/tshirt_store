<!DOCTYPE html>
<html lang="fr">
<?php $title="Accueil"; $site_description="Accueil"; require "../head.php"; ?>
<body>
    <?php require "../header.php"; ?>
<div class="col-lg-9">
    <div class="filters-content">
        <div class="row grid">
            <?php foreach ($newest as $n) : ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
              <div class="item">
                  <?= $n['title'] ?>
                  <?= $n['creator'] ?>
                  <img src="<?=home_path($n['image']) ?>" height="100">
                  <?= $n['price'] ?>€
                <a href="images/images.png" data-lightbox="image-1" data-title="Last T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <?php endforeach; ?>
            <?php foreach ($random as $r) : ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
              <div class="item">
              <?= $r['title'] ?>
                  <?= $r['creator'] ?>
                  <img src="<?=home_path($r['image']) ?>" height="100">
                  <?= $r['price'] ?>€
                <a href="images/images.png" data-lightbox="image-1" data-title="Last T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
    <?php require "../footer.php"; ?>
</body>
</html>