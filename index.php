<?php

require_once './helpers/auth-helper.php';

redirect('./articles', true);

?>

<!DOCTYPE html>
<html lang="fr">
<?php $title="Accueil"; require "./head.php"; ?>
<body>
    <?php require "./header.php"; ?>
    <a href="index.html"><h2>T-Shirt</h2><em>Store</em></a>
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="main-nav">
                <ul class="nav">
                    <li><a href="index.html" class="active">Accueil</a>
                    <li class="submenu"><a href="categories.html">Catégories</a></li>
                        <ul>
                        <li><a href="geek.html">Geek</a></li>
                        <li><a href="disney.html">Disney</a></li>
                        <li><a href="cities.html">Cities</a></li>
                        <li><a href="fun.html">Fun</a></li>
                        </ul>
                     </li>
                     <li><a href="panier.html">Panier</a></li>
                     <div class="search-icon">
                        <a href="#search"><i class="fa fa-search"></i></a>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="col-lg-9">
    <div class="filters-content">
        <div class="row grid">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
              <div class="item">
                <a href="images/images.png" data-lightbox="image-1" data-title="Last T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
              <div class="item">
                <a href="images/images.png" data-lightbox="image-1" data-title="Last T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
              <div class="item">
                <a href="images/images.png" data-lightbox="image-1" data-title="Last T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all tsh">
              <div class="item">
                <a href="images/images.png" data-lightbox="image-1" data-title="Random T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
              <div class="item">
                <a href="images/images.png" data-lightbox="image-1" data-title="Random T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
              <div class="item">
                <a href="images/images.png" data-lightbox="image-1" data-title="Random T-shirt"><img src="images/images.png" alt=""></a>
              </div>
            </div>
        </div>
    </div>
</div>
    <?php require "./footer.php"; ?>
</body>
</html>